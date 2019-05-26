<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/detail.css">
<link rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/style-3.css">
<div style="background: #fff;">
    <div id="pz-content" style="padding: 20px 0;">
        <!-- 面包屑 -->
        <ul class="breadcrumb bnav">
            <li>
                <a href="/warning">&nbsp;配资指数曝光</a>&nbsp;
            </li>

        </ul>
        <div class="content-norrap">
            <div class="norrap-left">
                <div class="article-box">
                    <div class="article-title"><?php echo $title; ?>
                        <div class="article-msg"><?php echo $inputtime; ?>&nbsp;&nbsp;</div>
                        <div class="reading-num">阅读数：<?php echo $hits; ?></div>
                    </div>
                    <h6 style="margin-top:15px;color: #444;font-size: 16px;font-weight: bold;line-height: 40px;display:inline-block">
                        涉及平台：</h6>
                    <!-- 涉及平台新增平台图标 -->
                    <img style="display: inline-block;width: 28px;vertical-align: middle;" src="" alt="">
                    <a target="_blank" style="color:rgb(249, 150, 59);display:inline-block;font-size:14px" href="">互盈策略
                        / 趋势策略</a>

                    <div class="yujingmiaoshu" style="padding-top:15px;padding-bottom:0;">
                        <h6>配资描述：</h6>
                        <?php echo $description; ?>
                    </div>


                    <?php echo $content; ?>

                    <!-- 相关曝光 -->

                    <div class="prev-next">
                        <strong>上一篇：</strong><?php if ($prev_page) { ?><a href="<?php echo $prev_page['url']; ?>"><?php echo $prev_page['title']; ?></a><?php } else { ?>没有了<?php } ?><br>
                        <strong>下一篇：</strong><?php if ($next_page) { ?><a href="<?php echo $next_page['url']; ?>"><?php echo $next_page['title']; ?></a><?php } else { ?>没有了<?php } ?>
                    </div>

                </div>
                <!--调用ajax评论-->
                <?php if (IS_COMMENT) {  echo dr_module_comment(MOD_DIR, $id);  } ?>

            </div>

            <?php if ($fn_include = $this->_include("slide.html")) include($fn_include); ?>


            <div class="clear_box"></div>
        </div>
    </div>
</div>

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>