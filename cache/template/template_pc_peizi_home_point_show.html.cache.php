<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/detail.css">
<link rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/style-3.css">
<div style="background: #fff;">
    <div id="pz-content" style="padding: 20px 0;">
        <!-- 面包屑 -->
        <ul class="breadcrumb bnav">
            <li>
                <a href="/post_list/7">&nbsp;配资指数观点</a>&nbsp;&gt;
            </li>
            <li>
                <a href="javascript:;">&nbsp;股票配资欺诈平台，关于是否实盘最新狡辩说辞。</a>
            </li>
        </ul>

        <div class="content-norrap">
            <div class="norrap-left">

<!--                <img style="display:block;width:100%;margin-bottom: 20px;height: 93px;" alt="" src="picture/ad3_1.jpg"/>-->

                <!--预警 列表 -->
                <div class="article-box">
                    <div class="article-title"><?php echo $title; ?>
                        <div class="article-msg"><?php echo $inputtime; ?>&nbsp;&nbsp;<span
                                class="article-author">作者：<?php echo $author; ?></span></div>
                        <div class="reading-num">阅读数：<?php echo $hits; ?></div>
                    </div>
                    <div class="article-content">
                        <?php echo $content; ?>
                    </div>
                    <div class="prev-next">
                        <strong>上一篇：</strong><?php if ($prev_page) { ?><a href="<?php echo $prev_page['url']; ?>"><?php echo $prev_page['title']; ?></a><?php } else { ?>没有了<?php } ?><br>
                        <strong>下一篇：</strong><?php if ($next_page) { ?><a href="<?php echo $next_page['url']; ?>"><?php echo $next_page['title']; ?></a><?php } else { ?>没有了<?php } ?>
                    </div>
                </div>

                <!-- 评论 -->
                <!--调用ajax评论-->
                <?php if (IS_COMMENT) {  echo dr_module_comment(MOD_DIR, $id);  } ?>


            </div>
            <?php if ($fn_include = $this->_include("slide.html")) include($fn_include); ?>
            <div class="clear_box"></div>
        </div>
    </div>
</div>

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>