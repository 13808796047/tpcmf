<div class="norrap-right">
    <div class="tool-main">
        <div class="tool toolb-right">
            <a href="http://www.gsxt.gov.cn" rel="nofollow" target="_blank">
                <i class="tool-sign tool-gs" style=""></i>
                <span class="tool-title" style="">工商查询</span>
            </a>
        </div>
        <div class="tool toolb-right">
            <a href="http://zxgk.court.gov.cn/zhzxgk/index.html" rel="nofollow" target="_blank">
                <i class="tool-sign tool-sx"></i>
                <span class="tool-title" style="">失信查询</span>
            </a>
        </div>
        <div class="tool toolb-right">
            <a href="http://zhixing.court.gov.cn/search/" rel="nofollow" target="_blank">
                <i class="tool-sign tool-zx"></i>
                <span class="tool-title" style="">执行查询</span>
            </a>
        </div>
        <div class="tool">
            <a href="http://www.miitbeian.gov.cn/publish/query/indexFirst.action" rel="nofollow"
               target="_blank">
                <i class="tool-sign tool-ban"></i>
                <span class="tool-title" style="">备案查询</span>
            </a>
        </div>
    </div>
    <!--配资指数排名 -->
    <ul id="news_box" class="news_box" style="border: 1px solid #ddd;padding-bottom:0;">
        <li class="list-item">
            <div class="enpty_box">
                <div class="news_list">
                    <div class="list_top">
                        <div class="list_left list_left2"><?php echo dr_cat_value('plateform', 1, 'name'); ?></div>
                        <div class="list_right"><a href="<?php echo dr_cat_value('plateform', 1, 'url'); ?>">更多>></a></div>
                    </div>
                    <ul class="list_bottom list_bottom2">
                        <?php $list_return = $this->list_tag("action=module module=plateform catid=1  order=updatetime num=10"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                        <li class="list_bottom_item">
                            <div class="serial">1</div>
                            <a style="width: 100%;" href="<?php echo $t['url']; ?>"><em><?php echo $t['peizizhishu']; ?></em><?php echo $t['title']; ?></a>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
            </div>
        </li>
        <!-- 清除浮动盒子-->
        <div class="clear_box"></div>
    </ul>
    <!--配资指数预警 -->
    <ul id="news_box" class="news_box" style="border: 1px solid #ddd;padding-bottom:0;">
        <li class="list-item">
            <div class="enpty_box">
                <div class="news_list">
                    <div class="list_top">
                        <div class="list_left list_left2"><?php echo dr_cat_value('pzpg', 1, 'name'); ?></div>
                        <div class="list_right"><a href="<?php echo dr_cat_value('pzpg', 1, 'url'); ?>">更多>></a></div>
                    </div>
                    <ul class="list_bottom list_bottom2">
                        <?php $list_return = $this->list_tag("action=module module=pzpg catid=1  order=updatetime num=10"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                        <li class="list_bottom_item">
                            <div class="serial">1</div>
                            <a style="width: 100%;" href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a>
                        </li>
                        <?php } } ?>
                    </ul>
                </div>
            </div>
        </li>
        <!-- 清除浮动盒子-->
        <div class="clear_box"></div>
    </ul>
    <!--配资指数预警 -->
    <ul id="news_box" class="news_box" style="border: 1px solid #ddd;padding-bottom:0;">
        <li class="list-item">
            <div class="enpty_box">
                <div class="news_list">
                    <div class="list_top">
                        <div class="list_left list_left2"><?php echo dr_cat_value('point', 1, 'name'); ?></div>
                        <div class="list_right"><a href="<?php echo dr_cat_value('point', 1, 'url'); ?>">更多>></a></div>
                    </div>
                    <ul class="list_bottom list_bottom2">
                        <?php $list_return = $this->list_tag("action=module module=point catid=1  order=updatetime num=10"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                        <li class="list_bottom_item">
                            <div class="serial">1</div>
                            <a style="width: 100%;" href="<?php echo $t['url']; ?>"><?php echo $t['title']; ?></a>
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