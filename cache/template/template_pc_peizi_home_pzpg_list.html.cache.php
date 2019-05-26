<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link type="text/css" rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/detail.css">
<link type="text/css" rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/style-3.css">
<div style="background: #fff;">
    <div id="pz-content" style="padding: 20px 0;">
        <!-- 内容区域 -->
        <div style="background: #fff;">
            <div id="pz-content">
                <!-- 面包屑 -->
                <ul class="breadcrumb bnav">
                    <li>
                        <a href="#">&nbsp;配资指数曝光</a>
                    </li>
                </ul>

                <div class="content-norrap">
                    <div class="norrap-left">

                        <!-- 新增曝光搜索 -->
                        <div class="exposure-search">
                            <form method="get" action="http://peizizhishu.com/warning">
                                <input class="seach-words" type="text" name="wd" value="" placeholder="输入被曝光平台名称">
                                <input class="seach-btn" type="submit" value="&nbsp;&nbsp;">
                                <ul class="input-prompt">
                                    <li>无查询结果</li>
                                </ul>
                            </form>
                        </div>

                        <!--曝光 列表 -->
                        <ul class="yujing-list">

                            <?php $list_return = $this->list_tag("action=module catid=$catid order=updatetime page=1"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                            <!-- 新的曝光列表 -->
                            <li class="exposure-item">
                                <img class="exposure-list-img" src="<?php echo dr_thumb($t['thumb'], 100, 90); ?>"
                                     alt="互盈策略 / 趋势策略">
                                <a href="<?php echo $t['url']; ?>">
                                    <?php echo $t['title']; ?>


                                    <span class="has_pic">（有图）</span>

                                </a>
                                <div class="exposure-time"><?php echo $t['inputtime']; ?></div>
                                <div class="exposure-list-icon">
                                    <div class="views"><?php echo $t['hits']; ?></div>
                                    <div class="replays"><?php echo $t['comments']; ?></div>
                                </div>
                            </li>
                            <?php } } ?>

                            <?php echo $pages; ?>
                            <!-- 分页 -->
<!--                            <ul style="margin-top: 40px;" class="yema">-->
<!--                                <ul class="yema" role="navigation">-->

<!--                                    <li class="pre-page" aria-disabled="true" aria-label="&laquo; Previous">-->
<!--                                        <span aria-hidden="true">上一页</span>-->
<!--                                    </li>-->


<!--                                    <li class="yema-on" aria-current="page"><span>1</span></li>-->
<!--                                    <li><a href="http://peizizhishu.com/warning?page=2">2</a></li>-->
<!--                                    <li><a href="http://peizizhishu.com/warning?page=3">3</a></li>-->
<!--                                    <li><a href="http://peizizhishu.com/warning?page=4">4</a></li>-->


<!--                                    <li class="next-page">-->
<!--                                        <a href="http://peizizhishu.com/warning?page=2" rel="next"-->
<!--                                           aria-label="Next &raquo;">下一页</a>-->
<!--                                    </li>-->

<!--                                    <div class="clear_box"></div>-->
<!--                                </ul>-->

<!--                            </ul>-->
                        </ul>

                    </div>
                    <?php if ($fn_include = $this->_include("slide.html")) include($fn_include); ?>
                    <div class="clear_box"></div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>