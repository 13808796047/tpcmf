<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/detail.css">
<link rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/style-4.css">
<div style="background: #fff;">
    <div id="pz-content" style="padding: 20px 0;">
        <div class="mingci-box">
           <?php echo $content; ?>
        </div>
        <div class="pz-navg">
            <ul>
                <?php $list_return = $this->list_tag("action=category pid=3"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
                <li><a class=" <?php if (IS_SHARE && in_array($catid, $t['catids'])) { ?> pz-navg-active <?php } ?>" href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a>
                </li>
                <?php } } ?>
            </ul>
        </div>
    </div>
</div>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>