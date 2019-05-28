<!DOCTYPE html>
<!--[if IE 8]> <html lang="zh-cn" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="zh-cn" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zh-cn">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title><?php echo dr_lang('%s - 后台管理平台', SITE_NAME); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link href="<?php echo THEME_PATH; ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo THEME_PATH; ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo THEME_PATH; ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo THEME_PATH; ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="<?php echo THEME_PATH; ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo THEME_PATH; ?>assets/pages/css/login-4.min.css" rel="stylesheet" type="text/css" />
</head>
<body class=" login" style="padding-top: 50px !important;">
<div class="logo">
    <a href="/"><img src="<?php echo THEME_PATH; ?>assets/logo.png" /> </a>
</div>
<div class="content">
    <form class="login-form" action="" onsubmit="return dr_submit()" method="post" style="padding:50px 0">
        <?php echo $form; ?>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span>  </span>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9"><?php echo dr_lang('账号'); ?></label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" value="<?php echo  defined('DEMO_ADMIN_USERNAME') ? DEMO_ADMIN_USERNAME : ''?>" autocomplete="off" placeholder="<?php echo dr_lang('账号'); ?>" name="data[username]" /> </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9"><?php echo dr_lang('密码'); ?></label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" value="<?php echo  defined('DEMO_ADMIN_PASSWORD') ? DEMO_ADMIN_PASSWORD : ''?>" autocomplete="off" placeholder="<?php echo dr_lang('密码'); ?>" name="data[password]" /> </div>
        </div>
        <?php if (SYS_ADMIN_CODE) { ?>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9"><?php echo dr_lang('验证码'); ?></label>
            <div class="input-group">
                <div class="input-icon">
                    <?php if (!$is_mobile) { ?> <i class="fa fa-code"></i><?php } ?>
                    <input <?php if ($is_mobile) { ?> style="padding-left: 5px !important;"<?php } ?> type="text" class="form-control placeholder-no-fix" autocomplete="off" placeholder="<?php echo dr_lang('验证码'); ?>" name="code">
                </div>
                <div class="input-group-btn fc-code" >
                    <?php echo dr_code(120, 35); ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <div class="form-actions">
            <button type="submit" class="btn green pull-right"> <?php echo dr_lang('登录'); ?> </button>
        </div>
    </form>
</div>
<style>
    <?php if ($is_mobile) { ?>
    .fc-code img {
        width: 85px !important;
    }
    <?php } ?>
</style>
<div class="copyright"> <a style="color: #fff" href="http://www.phpcmf.net" target="_blank">基于PHPCMF架构</a> </div>
<!--[if lt IE 9]>
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script src="<?php echo THEME_PATH; ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
<script src="<?php echo THEME_PATH; ?>assets/layer/layer.js" type="text/javascript"></script>
<script src="<?php echo LANG_PATH; ?>lang.js" type="text/javascript"></script>
<script src="<?php echo THEME_PATH; ?>assets/js/cms.js" type="text/javascript"></script>
<script type="text/javascript">

    if (typeof parent.layer == 'function') {
        parent.layer.closeAll('loading');
    }

    function dr_submit() {
        $('.alert-danger', $('.login-form')).hide();
        $.ajax({type: "POST",dataType:"json", url: '<?php echo dr_now_url(); ?>', data: $(".login-form").serialize(),
            success: function(json) {
                if (json.code == 1) {
                    window.location.href = json.data.url;
                } else {
                    $('.alert-danger span', $('.login-form')).html(json.msg);
                    $('.alert-danger', $('.login-form')).show();
                }
            },
            error: function(HttpRequest, ajaxOptions, thrownError) {
                dr_ajax_alert_error(HttpRequest, ajaxOptions, thrownError);
            }
        });
        return false;
    }

    <?php $bg = array('"'.THEME_PATH.'assets/pages/media/bg/1.jpg"',
            '"'.THEME_PATH.'assets/pages/media/bg/2.jpg"',
            '"'.THEME_PATH.'assets/pages/media/bg/3.jpg"',
            '"'.THEME_PATH.'assets/pages/media/bg/4.jpg"');
    shuffle($bg);
    ?>
    jQuery(document).ready(function() {
        $.backstretch([
            <?php echo implode(',', $bg); ?>
        ], {
            fade: 1000,
            duration: 8000
        }
        );
        $('.login-form input').keypress(function (e) {
            if (e.which == 13) {
                dr_submit();
                return false;
            }
        });

    });


</script>
<?php if (isset($_GET['isback']) && $_GET['isback']) { ?>
<script type="text/javascript">
    $(function(){
        dr_tips(<?php echo intval($_GET['iscode']); ?>, "<?php echo dr_safe_replace($_GET['isback']); ?>")
    });
</script>
<?php } ?>
</body>

</html>