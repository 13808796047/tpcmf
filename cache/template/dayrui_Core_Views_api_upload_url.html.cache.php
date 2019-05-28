<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>

<form class="form-horizontal" method="post" role="form" id="myform">
    <?php echo $form; ?>
    <div class="form-body">

        <?php if (!$one) { ?>
        <div class="form-group" id="dr_row_name">
            <label class="col-xs-3 control-label ajax_name" style="padding-top: 0"><?php echo dr_lang('文件名称'); ?></label>
            <div class="col-xs-8">
                <input type="text" class="form-control" id="dr_name" name="data[name]" value="<?php echo $name; ?>">
            </div>
        </div>
        <?php } ?>
        <div class="form-group" id="dr_row_url">
            <label class="col-xs-3 control-label ajax_name" style="padding-top: 0"><?php echo dr_lang('文件地址'); ?></label>
            <div class="col-xs-8">
                <input type="text" class="form-control" id="dr_url" name="data[url]" value="<?php echo $file; ?>">
            </div>
        </div>
        <div class="form-group" id="dr_row_down">
            <label class="col-xs-3 control-label ajax_name" style="padding-top: 0"><?php echo dr_lang('下载文件'); ?></label>
            <div class="col-xs-8">
                <input type="checkbox" name="data[down]" value="1"  data-on-text="<?php echo dr_lang('是'); ?>" data-off-text="<?php echo dr_lang('否'); ?>" data-on-color="success" data-off-color="danger" class="make-switch" data-size="small">
            </div>
        </div>
    </div>
</form>

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>