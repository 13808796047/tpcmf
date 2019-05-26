<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/detail.css">
<link rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/style-3.css">
<div style="background: #fff;">
    <div id="pz-content" style="padding: 20px 0;">
        <!-- 面包屑 -->
        <ul class="breadcrumb bnav">
            <li>
                <a href="#">&nbsp;配资指数观点</a>
            </li>
        </ul>
        <div class="content-norrap">
            <div class="norrap-left">
                <!--			<img style="display:block;width:100%;margin-bottom: 20px;height: 93px;" alt="" src="<?php echo HOME_THEME_PATH; ?>web/picture/ad3_1.jpg" />-->

                <!--预警 列表 -->
                <ul class="viewpoint-list" style="padding-bottom: 31px;">
                    <?php $list_return = $this->list_tag("action=module catid=$catid order=updatetime page=1"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                    <li>
                        <a class="viewpoint-link" href="<?php echo $t['url']; ?>">
                            <h4><?php echo $t['title']; ?></h4>
                            <p><?php echo $t['description']; ?></p>
                            <div class="viewpoint-time"><?php echo $t['author']; ?> • <?php echo $t['inputtime']; ?></div>
                            <div class="viewpoint-other"><span class="blue"><?php echo $t['hits']; ?></span> 阅读 • <span
                                    class="blue"><?php echo $t['comments']; ?></span> 评论
                            </div>
                            <img class="viewpoint-img" src="<?php echo dr_thumb($t['thumb'], 100, 90); ?>"
                                 width="103" height="103"/>

                        </a>
                    </li>
                    <?php } } ?>
                </ul>
                <!-- 分页 -->
                <?php echo $pages; ?>
            </div>
           <?php if ($fn_include = $this->_include("slide.html")) include($fn_include); ?>
            <div class="clear_box"></div>
        </div>
    </div>
</div>

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>

