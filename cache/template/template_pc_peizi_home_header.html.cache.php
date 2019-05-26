<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <title><?php echo $meta_title; ?></title>
    <link type="text/css" rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/style.css">
    <!-- 系统关键js(所有自建模板必须引用) -->
    <script type="text/javascript">var assets_path = '<?php echo THEME_PATH; ?>assets/';var is_mobile_cms = '<?php echo \Phpcmf\Service::IS_MOBILE(); ?>';</script>
    <script src="<?php echo LANG_PATH; ?>lang.js" type="text/javascript"></script>
    <script src="<?php echo THEME_PATH; ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo THEME_PATH; ?>assets/layer/layer.js" type="text/javascript"></script>
    <script src="<?php echo THEME_PATH; ?>assets/js/cms.js" type="text/javascript"></script>
<!--    <script type="text/javascript" src="<?php echo HOME_THEME_PATH; ?>web/js/jquery1.42.min_1.js"></script>-->

    <script type="text/javascript" src="<?php echo HOME_THEME_PATH; ?>web/js/jquery.superslide.2.1.1_1.js"></script>
    <script type="text/javascript" src="<?php echo HOME_THEME_PATH; ?>web/js/jquery.basictable.min_1.js"></script>
    <script type="text/javascript" defer="defer" src="<?php echo HOME_THEME_PATH; ?>web/js/common_1.js"></script>
</head>
<body>
<!-- header和nav区域 -->
<div class="pz-header">
    <ul id="nav" class="nav clearfix">
        <a href="<?php echo SITE_URL; ?>" class="logo">
            <img src="<?php echo SITE_LOGO; ?>" alt="<?php echo SITE_NAME; ?>">
        </a>
        <div class="nav-login">
            <img class="login-img" src="<?php echo HOME_THEME_PATH; ?>web/picture/login_img_1.png"/>
            <a class="login" href="javascript:;">登录</a>|
            <a class="reg" href="javascript:;">注册</a>|
        </div>
        <li class="nLi <?php if ($indexc) { ?>on<?php } ?>">
            <h3><a href="<?php echo SITE_URL; ?>" title="<?php echo SITE_TITLE; ?>">首页</a></h3>
        </li>
        <?php $list_return = $this->list_tag("action=category module=plateform"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
        <li class="nLi <?php if (MOD_DIR=='plateform' && in_array($catid, $t['catids'])) { ?> on <?php } ?>">
            <h3><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></h3>
        </li>
        <?php } } ?>
        <?php $list_return = $this->list_tag("action=category module=pzpg"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
        <li class="nLi <?php if (MOD_DIR=='pzpg' && in_array($catid, $t['catids'])) { ?> on <?php } ?>">
            <h3><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></h3>
        </li>
        <?php } } ?>
        <?php $list_return = $this->list_tag("action=category module=point"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
        <li class="nLi <?php if (MOD_DIR=='point' && in_array($catid, $t['catids'])) { ?> on <?php } ?>">
            <h3><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></h3>
        </li>
        <?php } } ?>
        <?php $list_return = $this->list_tag("action=category module=share pid=0"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
        <li class="nLi <?php if (IS_SHARE && in_array($catid, $t['catids'])) { ?> on <?php } ?>">
            <h3><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></h3>
        </li>
        <?php } } ?>
    </ul>
</div>
