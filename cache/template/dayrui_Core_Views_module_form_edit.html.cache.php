<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div class="note note-danger">
    <p><a href="javascript:dr_update_cache();"><?php echo dr_lang('更改数据之后需要更新缓存之后才能生效'); ?></a></p>
</div>
<form action="" class="form-horizontal" method="post" name="myform" id="myform">
    <?php echo $form; ?>
    <div class="portlet bordered light myfbody">
        <div class="portlet-title tabbable-line">
            <ul class="nav nav-tabs" style="float:left;">
                <li class="<?php if ($page==0) { ?>active<?php } ?>">
                    <a href="#tab_0" data-toggle="tab" onclick="$('#dr_page').val('0')"> <i class="fa fa-cog"></i> <?php echo dr_lang('基本设置'); ?> </a>
                </li>
                <li class="<?php if ($page==1) { ?>active<?php } ?>">
                    <a href="#tab_1" data-toggle="tab" onclick="$('#dr_page').val('1')"> <i class="fa fa-table"></i> <?php echo dr_lang('后台显示字段'); ?> </a>
                </li>
            </ul>
        </div>
        <div class="portlet-body">
            <div class="tab-content">

                <div class="tab-pane <?php if ($page==0) { ?>active<?php } ?>" id="tab_0">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?php echo dr_lang('数据表名'); ?></label>
                            <div class="col-md-9">
                                <div class="form-control-static"><label><span class="label label-success"> <?php echo dr_module_table_prefix($data['module']); ?>_form_<?php echo $data['table']; ?> </span></label></div>
                            </div>
                        </div>
                        <div class="form-group" id="dr_row_name">
                            <label class="col-md-2 control-label "><?php echo dr_lang('表单名称'); ?></label>
                            <div class="col-md-9">
                                <label><input type="text" class="form-control" id="dr_name" name="data[name]" value="<?php echo $data['name']; ?>"></label>
                                <span class="help-block"> <?php echo dr_lang('表单的描述名称'); ?> </span>
                            </div>
                        </div>
                        <div class="form-group" id="dr_row_icon">
                            <label class="col-md-2 control-label "><?php echo dr_lang('菜单图标'); ?></label>
                            <div class="col-md-9">
                                <div class="input-group" style="width:250px">
                                    <input class="form-control" id="dr_icon" type="text" name="data[setting][icon]" value="<?php echo $data['setting']['icon']; ?>" />
                            <span class="input-group-btn">
                                <a class="btn btn-success" href="<?php echo dr_url('api/icon'); ?>" target="_blank"><i class="fa fa-arrow-right fa-fw" /></i> <?php echo dr_lang('查看'); ?></a>
                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label"><?php echo dr_lang('提交成功跳转URL'); ?></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control input-xlarge" name="data[setting][rt_url]" value="<?php echo $data['setting']['rt_url']; ?>" >
                                <span class="help-block"> <?php echo dr_lang('当用户提交表单成功之后跳转的链接'); ?> </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane <?php if ($page==1) { ?>active<?php } ?>" id="tab_1">
                    <div class="form-body">
                        <?php if (is_array($field)) { $count=count($field);foreach ($field as $n=>$t) { ?>
                        <div class="form-group field-<?php echo $n; ?>">
                            <label class="col-md-2 control-label"><?php echo dr_lang($t['name']); ?> (<?php echo $t['fieldname']; ?>)</label>
                            <div class="col-md-9">
                                <div class="mt-radio-inline">
                                    <label class="mt-radio">
                                        <input type="radio" onclick="dr_field_show('<?php echo $n; ?>', 1)" name="data[setting][list_field][<?php echo $t['fieldname']; ?>][use]" value="1" <?php if ($data['setting']['list_field'][$t['fieldname']]['use']) { ?> checked<?php } ?> > <?php echo dr_lang('显示'); ?>
                                        <span></span>
                                    </label>
                                    <label class="mt-radio">
                                        <input type="radio" onclick="dr_field_show('<?php echo $n; ?>', 0)" name="data[setting][list_field][<?php echo $t['fieldname']; ?>][use]" value="0" <?php if (!$data['setting']['list_field'][$t['fieldname']]['use']) { ?> checked<?php } ?>> <?php echo dr_lang('隐藏'); ?>
                                        <span></span>
                                    </label>
                                </div>
                                <div class="list-field-cog">
                                    <div class="input-group" style="width:250px">
                                        <span class="input-group-btn">
                                            <a class="btn btn-success" href="javascript:layer.msg('<?php echo dr_lang('排列顺序值由小到大'); ?>');"><?php echo dr_lang('序列'); ?></a>
                                        </span>
                                        <input class="form-control" type="text" name="data[setting][list_field][<?php echo $t['fieldname']; ?>][order]" value="<?php echo $data['setting']['list_field'][$t['fieldname']]['order'] ? $data['setting']['list_field'][$t['fieldname']]['order'] : $n+100 ?>" />
                                    </div>
                                </div>
                                <div class="list-field-cog">
                                    <div class="input-group" style="width:250px">
                                        <span class="input-group-btn">
                                            <a class="btn btn-success" href="javascript:layer.msg('<?php echo dr_lang('列表的显示名称'); ?>');"><?php echo dr_lang('名称'); ?></a>
                                        </span>
                                        <input class="form-control" type="text" name="data[setting][list_field][<?php echo $t['fieldname']; ?>][name]" value="<?php echo $data['setting']['list_field'][$t['fieldname']]['name'] ? $data['setting']['list_field'][$t['fieldname']]['name'] : $t['name'] ?>" />
                                    </div>
                                </div>
                                <div class="list-field-cog">
                                    <div class="input-group" style="width:250px">
                                        <span class="input-group-btn">
                                            <a class="btn btn-success" href="javascript:layer.msg('<?php echo dr_lang('不填宽度表示自动宽度'); ?>');"><?php echo dr_lang('宽度'); ?></a>
                                        </span>
                                        <input class="form-control" type="text" name="data[setting][list_field][<?php echo $t['fieldname']; ?>][width]" value="<?php echo $data['setting']['list_field'][$t['fieldname']]['width']; ?>" />
                                    </div>
                                </div>
                                <div class="list-field-cog">
                                    <div class="input-group" style="width:250px">
                                        <span class="input-group-btn">
                                            <a class="btn btn-success" href="javascript:dr_call_alert();"><?php echo dr_lang('回调'); ?></a>
                                        </span>
                                        <input class="form-control" type="text" name="data[setting][list_field][<?php echo $t['fieldname']; ?>][func]" value="<?php echo $data['setting']['list_field'][$t['fieldname']]['func']; ?>" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $(function() {
                                dr_field_show('<?php echo $n; ?>', <?php echo intval($data['setting']['list_field'][$t['fieldname']]['use']); ?>);
                            });
                        </script>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portlet-body form myfooter">
        <div class="form-actions text-center">
            <button type="button" onclick="dr_ajax_submit('<?php echo dr_now_url(); ?>&page='+$('#dr_page').val(), 'myform', '2000')" class="btn green"> <i class="fa fa-save"></i> <?php echo dr_lang('保存'); ?></button>
        </div>
    </div>
</form>
<script type="text/javascript">
    function dr_field_show(n, u) {
        if (u) {
            $('.field-'+n+' .list-field-cog').show();
        } else {
            $('.field-'+n+' .list-field-cog').hide();
        }
    }
</script>
<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>