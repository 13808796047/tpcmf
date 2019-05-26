<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div id="pz-content">
    <!-- 帅选条件 -->
    <ul class="select">
        <li class="select-list">
            <dl>
                <dt>所在地区：</dt>

                <dd id="plateform-region"
                    class="<?php if (!$params['csxz'] || dr_linkage('address', $params['csxz'], 0, 'child')) { ?>selected<?php } else { ?>select-all<?php } ?>">
                    <a href="<?php echo \Phpcmf\Service::L('Router')->search_url($params, 'csxz', NULL); ?>">全部</a></dd>
                <!--调用联动菜单address，pid为动态获取的地区id-->
                <?php $return = [];$list_return = $this->list_tag("action=linkage code=address pid=$params[csxz]"); if ($list_return) { extract($list_return); $count=count($return);} if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                <dd class="<?php if ($t['id']==$params['csxz']) { ?>selected<?php } else { ?>select-all<?php } ?>">
                    <a href="<?php echo \Phpcmf\Service::L('Router')->search_url($params, 'csxz', $t['id']); ?>"><?php echo $t['name']; ?> </a>
                </dd>
                <?php } } ?>

            </dl>
        </li>

        <li class="select-list">
            <dl>
                <dt>经营状态：</dt>
                <dd class="<?php if (!$params['jyzt']) { ?>selected<?php } else { ?>select-all<?php } ?>">
                    <a href="<?php echo \Phpcmf\Service::L('Router')->search_url($params, 'jyzt', NULL); ?>">全部</a>
                </dd>
                <?php $field = dr_field_options(\Phpcmf\Service::C()->module['field']['jyzt']['id']);  if (is_array($field)) { $count=count($field);foreach ($field as $value=>$name) { ?>
                <dd class="<?php if ($value==$params['jyzt']) { ?>selected<?php } else { ?>select-all<?php } ?>">
                    <a href="<?php echo \Phpcmf\Service::L('Router')->search_url($params, 'jyzt', $value); ?>"><?php echo $name; ?></a>
                </dd>
                <?php } } ?>
            </dl>
        </li>
        <!-- 新增【平台性质】筛选项 -->
        <li class="select-list">
            <dl id="select2">
                <dt>平台性质：</dt>
                <dd class="<?php if (!$params['ptxz']) { ?>selected<?php } else { ?>select-all<?php } ?>"><a
                        href="<?php echo \Phpcmf\Service::L('Router')->search_url($params, 'ptxz', NULL); ?>">全部</a></dd>
                <?php $field = dr_field_options(\Phpcmf\Service::C()->module['field']['ptxz']['id']);  if (is_array($field)) { $count=count($field);foreach ($field as $value=>$name) { ?>
                <dd class="<?php if ($value==$params['ptxz']) { ?>selected<?php } else { ?>select-all<?php } ?>"><a style="border: 1px solid #e5e5e5;"
                                                                                      href="<?php echo \Phpcmf\Service::L('Router')->search_url($params, 'ptxz', $value); ?>"><?php echo $name; ?></a>
                </dd>
                <?php } } ?>
            </dl>
        </li>
    </ul>

    <!-- 第二个搜索框 -->
    <div class="second-form-box">
        <form action="">
        <input class="seach-words" type="text" minlength="2" name='keyword' value='<?php echo $keyword; ?>' placeholder="输入平台名称搜索"
               onkeypress="if(event.keyCode==13) {dr_module_search();return false;}" id='search_keyword'/>
        <input class="seach-btn" type="button" value="&nbsp;&nbsp;&nbsp;&nbsp;" onclick="dr_module_search()">
        </form>
    </div>
    <!-- 表格 -->
    <table id="table">
        <thead>
        <tr>
            <th>平台名称</th>
            <th>LOGO</th>
            <th>所在地区</th>
            <th>股票/期货</th>
            <!--            <th>安全性</th>-->
            <th>配资成本</th>
            <th>上线时间</th>
            <th class="th-title">配资指数</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>

        <!--调用MOD_DIR模块的数据 id和total和order参数(本页面固有参数) page=1标示开启分页 urlrule分页地址规则 pagesize每页数量-->
        <?php $list_return = $this->list_tag("action=search module=MOD_DIR id=$searchid total=$sototal order=$params[order] catid=$catid page=1 pagesize=1 urlrule=$urlrule"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
        <tr>
            <td>
                <a href="<?php echo $t['url']; ?>" class="pz-name"><?php echo $t['title']; ?>
                    <!--                        <img class="operate-state" src=""/>-->
                </a>
                <a href="<?php echo $t['ptwz']; ?>" target="_blank"
                   class="web-site"><?php echo $t['ptwz']; ?></a>
            </td>
            <td>
                <a class="pz-logo" href="<?php echo $t['url']; ?>">
                    <img src="<?php echo dr_thumb($t['thumb'], 100, 90); ?>">
                </a>
            </td>

            <td><?php echo dr_linkage('address', $t['csxz'], 1, 'name'); ?>/<?php echo dr_linkage('address', 99, $t['csxz'], 'name'); ?>/<?php echo dr_linkage('address', $t['csxz'], 0, 'name'); ?>
            </td>
            <?php if (t.gupiaoqihuo=='futures') { ?>
            <td>期货</td>
            <?php } else { ?>
            <td>股票</td>
            <?php } ?>
            <!--            <td>-->
            <!--                <div class="xingji xingji-4"></div>-->
            <!--            </td>-->
            <td>月息：<?php echo $t['pzcb']; ?></td>
            <td><?php echo $t['inputtime']; ?></td>
            <td>
                <div class="zhishu normal-color" style="text-align: center;">
                    <?php echo $t['peizizhishu']; ?>
                    <span class="exponential jiang">&darr;37</span>
                </div>
            </td>
            <td>
                <div class="pingjia">
                    <a href="<?php echo $t['url']; ?>">评价</a>
                </div>
            </td>
        </tr>
        <?php } } ?>
        <?php if (!$count) { ?>
        <tr>没有找到相关内容！</tr>
        <?php } ?>
        </tbody>
    </table>

    <!--        <ul class="yema" role="navigation">-->

    <!--            <li class="pre-page" aria-disabled="true" aria-label="&laquo; Previous">-->
    <!--                <span aria-hidden="true">上一页</span>-->
    <!--            </li>-->


    <!--            <li class="yema-on" aria-current="page"><span>1</span></li>-->
    <!--            <li><a href="http://peizizhishu.com/plateform?page=2">2</a></li>-->
    <!--            <li><a href="http://peizizhishu.com/plateform?page=3">3</a></li>-->
    <!--            <li><a href="http://peizizhishu.com/plateform?page=4">4</a></li>-->
    <!--            <li><a href="http://peizizhishu.com/plateform?page=5">5</a></li>-->
    <!--            <li><a href="http://peizizhishu.com/plateform?page=6">6</a></li>-->
    <!--            <li><a href="http://peizizhishu.com/plateform?page=7">7</a></li>-->
    <!--            <li><a href="http://peizizhishu.com/plateform?page=8">8</a></li>-->

    <!--            <li class="disabled" aria-disabled="true"><span>...</span></li>-->


    <!--            <li><a href="http://peizizhishu.com/plateform?page=50">50</a></li>-->
    <!--            <li><a href="http://peizizhishu.com/plateform?page=51">51</a></li>-->


    <!--            <li class="next-page">-->
    <!--                <a href="http://peizizhishu.com/plateform?page=2" rel="next" aria-label="Next &raquo;">下一页</a>-->
    <!--            </li>-->

    <!--            <div class="clear_box"></div>-->
    <!--        </ul>-->
    <div class="search-pagination">
        <ul class="pagination">
            <?php echo $pages; ?>
        </ul>
    </div>
</div>
<script>
    // 这段js是用来执行搜索的
    function dr_module_search(name) {
        var url = "<?php echo \Phpcmf\Service::L('Router')->search_url($params, ['keyword', 'zhxgm'], ['mykeyword', 'myzhxgm']); ?>";
        var keyword = $("#search_keyword").val();
        if (keyword) {
            url = url.replace('mykeyword', keyword);
        } else {
            url = url.replace('mykeyword', '');
        }
        location.href = url;
        return false;
    }
</script>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>
