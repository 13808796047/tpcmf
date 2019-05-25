<?php if ($fn_include = $this->_include("header.html")) include($fn_include);  if (\Phpcmf\Service::_is_mobile()) { ?>
<div class="module-content">
    <div style="text-align: center; margin: 20px 0 0 0;">
        <div class="btn-group">
            <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> <?php echo $module[$dirname]['name']; ?>
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu my-left-content2" role="menu">
                <?php if (is_array($module)) { $count=count($module);foreach ($module as $dir=>$t) { ?>
                <li class=" <?php if ($dir==$dirname) { ?>active open<?php } ?> left-content-<?php echo $dir; ?>">
                    <a href="javascript:;" title="<?php echo $t['title']; ?>" onclick="McLink('<?php echo $dir; ?>', '<?php echo $t['url']; ?>')">
                        <i class="<?php echo $t['icon']; ?>"></i> <?php echo dr_strcut($t['name'], 8, ''); ?>
                        <span class="<?php if ($dir==$dirname) { ?>selected<?php } ?>"></span>
                    </a>
                </li>
                <?php } } ?>

            </ul>
        </div>
    </div>
    <iframe name="contentright" id="module-content-right" src="<?php echo $url; ?>&cache=<?php echo SYS_TIME; ?>" url="<?php echo $url; ?>&cache=<?php echo SYS_TIME; ?>" frameborder="false" scrolling="auto" style="border:none; margin-bottom:0px;" width="100%" height="auto" allowtransparency="true"></iframe>

</div>
<?php } else { ?>
<div class="module-content">
    <div class="module-content-left">

        <ul class="my-left-content">

            <?php if (is_array($module)) { $count=count($module);foreach ($module as $dir=>$t) { ?>
            <li class=" <?php if ($dir==$dirname) { ?>active open<?php } ?> left-content-<?php echo $dir; ?>">
                <a href="javascript:;" title="<?php echo $t['title']; ?>" onclick="McLink('<?php echo $dir; ?>', '<?php echo $t['url']; ?>')">
                    <i class="<?php echo $t['icon']; ?>"></i> <?php echo dr_strcut($t['name'], 8, ''); ?>
                    <span class="<?php if ($dir==$dirname) { ?>selected<?php } ?>"></span>
                </a>
            </li>
            <?php } } ?>

        </ul>

    </div>

    <div class="module-content-right page-content page-content2">

        <iframe name="contentright" id="module-content-right" src="<?php echo $url; ?>&cache=<?php echo SYS_TIME; ?>" url="<?php echo $url; ?>&cache=<?php echo SYS_TIME; ?>" frameborder="false" scrolling="auto" style="border:none; margin-bottom:0px;" width="100%" height="auto" allowtransparency="true"></iframe>


    </div>
</div>
<?php } ?>

<script type="text/javascript">

    function McLink(dir, url) {

        // 延迟提示
        //var admin_loading = layer.load(2, { time: 10000 });


        $('.my-left-content li span').removeClass('selected');
        $('.my-left-content li').removeClass('active open');

        $('.my-left-content2 li span').removeClass('selected');
        $('.my-left-content2 li').removeClass('active open');

        $('.left-content-'+dir+'  ').addClass('active open');
        $('.left-content-'+dir+'  span').addClass('selected');


        $("#module-content-right").attr('src', url);
        $("#module-content-right").attr("url", url);
    }

    function wSize(){
        var str=getWindowSize();
        var strs= new Array(); //定义一数组
        strs=str.toString().split(","); //字符分割
        var heights = strs[0]-30,Body = $('body');
        $('#module-content-right').height(heights);
    }

    var getWindowSize = function(){
        return ["Height","Width"].map(function(name){
            return window["inner"+name] ||
                    document.compatMode === "CSS1Compat" && document.documentElement[ "client" + name ] || document.body[ "client" + name ]
        });
    }
    window.onload = function (){
        if(!+"\v1" && !document.querySelector) { // for IE6 IE7
            document.body.onresize = resize;
        } else {
            window.onresize = resize;
        }
        function resize() {
            wSize();
            return false;
        }
    }
    $(function(){
        wSize();
        document.documentElement.style.overflowY = 'hidden'
    });
</script>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>