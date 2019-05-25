<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="<?php echo $meta_keywords; ?>">
    <meta name="description" content="<?php echo $meta_description; ?>">
    <title><?php echo $meta_title; ?></title>
    <link type="text/css" rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/style_1.css">
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
        <?php $list_return = $this->list_tag("action=category module=share pid=0"); if ($list_return) extract($list_return, EXTR_OVERWRITE); $count=count($return); if (is_array($return)) { foreach ($return as $key=>$t) { $is_first=$key==0 ? 1 : 0;$is_last=$count==$key+1 ? 1 : 0; ?>
        <li class="nLi <?php if (IS_SHARE && in_array($catid, $t['catids'])) { ?> on<?php } ?>">
            <h3><a href="<?php echo $t['url']; ?>"><?php echo $t['name']; ?></a></h3>
        </li>
        <?php } } ?>
    </ul>
</div>
