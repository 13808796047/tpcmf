<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>

    <!-- banner与区域 -->
    <div class="pz-banner">
        <div class="pz-banner-inner">
            <div class="statistics">已收录配资平台&nbsp;&nbsp;<a href="http://peizizhishu.com/plateform">764</a>&nbsp;&nbsp;家
            </div>
            <div class="yiji">查配资指数 peizizhishu.com 选正规配资平台</div>
            <img src="picture/mob_code.png" alt="" class="mob-img">
            <div class="index-form-box">
                <ul class="tab-box" id="search-column">
                    <li class="tab-box-active" data-value="plateform_name">平台名称</li>
                    |
                    <li data-value="plateform_url">网址</li>
                    |
                    <li data-value="company_name">公司名称</li>
                    |
                    <li data-value="plateform_province">地区</li>
                </ul>
                <form method="get" action="http://peizizhishu.com/plateform" id="search-form">
                    <input class="seach-words" type="text" name="wd" placeholder="输入平台名称"/>
                    <input type="hidden" name="column" value="plateform_name">
                    <input class="seach-btn" type="submit" name="" value="&nbsp;&nbsp;&nbsp;&nbsp;"/>

                    <!-- 输入提示 -->
                    <ul class="input-prompt">
                        <li>无查询结果</li>
                    </ul>
                </form>
            </div>
        </div>
    </div>


    <!-- 主体区域 -->
    <div id="pz-content">
        <!-- 表格 -->

        <div class="pz-index-table">
            <table id="table">
                <thead>
                <tr>
                    <th>平台名称</th>
                    <th>LOGO</th>
                    <th>所在地区</th>
                    <th>股票/期货</th>
                    <th>配资成本</th>
                    <th>上线时间</th>
                    <th class="th-title">配资指数</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php $list_return = $this->list_tag("action=module module=plateform catid=$c[id] order=updatetime num=3"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
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
                </tbody>
            </table>

            <div class="handle-btn">
                <a href='/index.php?s=form&c=joinus&m=post' style="background: #56b0f2;margin-right: 16px;"
                   class="btn-join">加入我们</a>
                <a href="<?php echo dr_cat_value('plateform', 1, 'url'); ?>" style="background: #ff9000;"
                   class="btn-more">查看更多</a>
            </div>
        </div>
        <!-- 我们能做什么 -->
        <div class="pz-ability">
            <div class="ability-title">
                <h3>我们能做些什么？</h3>
                <div>WHAT CAN WE DO?</div>
            </div>
            <div class="ability-box">
                <div class="ability-box-item">
                    <img src="picture/xuanze.png"/><br>
                    选择正规配资平台
                </div>
                <div class="ability-box-item">
                    <img src="picture/bao.png"/><br>
                    曝光问题配资平台
                </div>
                <div class="ability-box-item">
                    <img src="picture/liaojie.png"/><br>
                    深度了解配资行业
                </div>
            </div>
        </div>

        <!--配资指数资讯 -->
        <ul id="news_box">
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left"><?php echo dr_share_cat_value(10, "name"); ?></div>
                            <div class="list_right"><a href='<?php echo dr_share_cat_value(10, "url"); ?>'>更多>></a></div>
                        </div>

                        <ul class="list_bottom">
                            <?php $list_return = $this->list_tag("action=module module=news catid=10 order=updatetime num=6"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                            <li>
                                <a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a>
                                <span><?php echo dr_date($t['_inputtime'], "Y-m-d"); ?></span>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left"><?php echo dr_share_cat_value(11, "name"); ?></div>
                            <div class="list_right"><a href='<?php echo dr_share_cat_value(11, "url"); ?>'>更多>></a></div>
                        </div>

                        <ul class="list_bottom">
                            <?php $list_return = $this->list_tag("action=module module=news catid=11 order=updatetime num=6"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                            <li>
                                <a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a>
                                <span><?php echo dr_date($t['_inputtime'], "Y-m-d"); ?></span>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left"><?php echo dr_share_cat_value(12, "name"); ?></div>
                            <div class="list_right"><a href='<?php echo dr_share_cat_value(12, "url"); ?>'>更多>></a></div>
                        </div>

                        <ul class="list_bottom">
                            <?php $list_return = $this->list_tag("action=module module=news catid=12 order=updatetime num=6"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                            <li>
                                <a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a>
                                <span><?php echo dr_date($t['_inputtime'], "Y-m-d"); ?></span>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left"><?php echo dr_share_cat_value(13, "name"); ?></div>
                            <div class="list_right"><a href='<?php echo dr_share_cat_value(13, "url"); ?>'>更多>></a></div>
                        </div>

                        <ul class="list_bottom">
                            <?php $list_return = $this->list_tag("action=module module=news catid=13 order=updatetime num=6"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                            <li>
                                <a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a>
                                <span><?php echo dr_date($t['_inputtime'], "Y-m-d"); ?></span>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left"><?php echo dr_share_cat_value(14, "name"); ?></div>
                            <div class="list_right"><a href='<?php echo dr_share_cat_value(14, "url"); ?>'>更多>></a></div>
                        </div>

                        <ul class="list_bottom">
                            <?php $list_return = $this->list_tag("action=module module=news catid=14 order=updatetime num=6"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                            <li>
                                <a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a>
                                <span><?php echo dr_date($t['_inputtime'], "Y-m-d"); ?></span>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
            </li>
            <li>
                <div class="enpty_box">
                    <div class="news_list">
                        <div class="list_top">
                            <div class="list_left"><?php echo dr_share_cat_value(15, "name"); ?></div>
                            <div class="list_right"><a href='<?php echo dr_share_cat_value(15, "url"); ?>'>更多>></a></div>
                        </div>

                        <ul class="list_bottom">
                            <?php $list_return = $this->list_tag("action=module module=news catid=15 order=updatetime num=6"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                            <li>
                                <a href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a>
                                <span><?php echo dr_date($t['_inputtime'], "Y-m-d"); ?></span>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- 清除浮动盒子-->
            <div class="clear_box"></div>
        </ul>

    </div>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>


