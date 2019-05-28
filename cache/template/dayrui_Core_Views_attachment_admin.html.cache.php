<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>

<link href="<?php echo THEME_PATH; ?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo THEME_PATH; ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo THEME_PATH; ?>assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo THEME_PATH; ?>assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<script src="<?php echo THEME_PATH; ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.finecms.js" type="text/javascript"></script>

<script type="text/javascript">
    if (App.isAngularJsApp() === false) {
        jQuery(document).ready(function() {
            if (jQuery().datepicker) {
                $('.date-picker').datepicker({
                    rtl: App.isRTL(),
                    orientation: "left",
                    autoclose: true
                });
            }
        });
    }
</script>

<div class="row table-search-tool">
    <form action="<?php echo SELF; ?>" method="get">
        <?php echo dr_form_search_hidden(['field' => 'type']);  if ($remote) { ?>
        <div class="col-md-12 col-sm-12">
            <label>
                <select name="remote" class="form-control">
                    <option value=""> - </option>
                    <?php if (is_array($remote)) { $count=count($remote);foreach ($remote as $t) { ?>
                    <option value="<?php echo $t['id']; ?>" <?php if ($param['remote']==$t['id']) { ?>selected<?php } ?>><?php echo $t['name']; ?></option>
                    <?php } } ?>
                </select>
            </label>
        </div>
        <?php } ?>
        <div class="col-md-12 col-sm-12">
            <label>
                <select name="field" class="form-control">
                    <option value="id"> Id </option>
                    <?php if (is_array($field)) { $count=count($field);foreach ($field as $t) {  if ($t['ismain']) { ?>
                    <option value="<?php echo $t['fieldname']; ?>" <?php if ($param['field']==$t['fieldname']) { ?>selected<?php } ?>><?php echo $t['name']; ?></option>
                    <?php }  } } ?>
                </select>
            </label>
            <label><i class="fa fa-caret-right"></i></label>
            <label><input type="text" class="form-control" placeholder="" value="<?php echo $param['keyword']; ?>" name="keyword" /></label>
        </div>
        <div class="col-md-12 col-sm-12">
            <label>
                <div class="input-group input-medium date-picker input-daterange" data-date="" data-date-format="yyyy-mm-dd">
                    <input type="text" class="form-control" value="<?php echo $param['date_form']; ?>" name="date_form">
                    <span class="input-group-addon"> <?php echo dr_lang('到'); ?> </span>
                    <input type="text" class="form-control" value="<?php echo $param['date_to']; ?>" name="date_to">
                </div>
            </label>
        </div>


        <div class="col-md-12 col-sm-12">
            <label><button type="submit" class="btn green btn-sm onloading" name="submit" > <i class="fa fa-search"></i> <?php echo dr_lang('搜索'); ?></button></label>
            <?php if ($list_table) { ?><label><button type="button" onclick="dr_export('<?php echo $list_table; ?>', '<?php echo $list_query; ?>')" class="btn blue btn-sm" style="margin-top: 2px;"> <i class="fa fa-mail-forward"></i> <?php echo dr_lang('导出'); ?></button></label><?php } ?>
        </div>
    </form>
</div>


<form class="form-horizontal" role="form" id="myform">
    <?php echo dr_form_hidden(['table' => $table]); ?>
    <div class="table-scrollable">
        <table class="table table-striped table-bordered table-hover table-checkable dataTable">
            <thead>
            <tr class="heading">
                <th class="myselect">
                    <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                        <input type="checkbox" class="group-checkable" data-set=".checkboxes" />
                        <span></span>
                    </label>
                </th>
                <th style="text-align:center"  width="90" class="<?php echo dr_sorting('remote'); ?>" name="remote"><?php echo dr_lang('类型'); ?></th>
                <th width="150" class="<?php echo dr_sorting('uid'); ?>" name="uid"><?php echo dr_lang('作者'); ?></th>
                <th class="<?php echo dr_sorting('filename'); ?>" name="filename"><?php echo dr_lang('名称'); ?></th>
                <th style="text-align:center" width="90" class="<?php echo dr_sorting('fileext'); ?>" name="fileext"><?php echo dr_lang('扩展名'); ?></th>
                <th width="100" class="<?php echo dr_sorting('filesize'); ?>" name="filesize"><?php echo dr_lang('大小'); ?></th>
                <th width="160" class="<?php echo dr_sorting('inputtime'); ?>" name="inputtime"><?php echo dr_lang('上传时间'); ?></th>
                <th><?php echo dr_lang('附件归属'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if (is_array($list)) { $count=count($list);foreach ($list as $t) {  $t['url'] = 'javascript:'.(in_array($t['fileext'], ['jpg', 'gif', 'png', 'jpeg']) ? 'dr_preview_image' : 'dr_preview_url').'(\''.dr_get_file_url($t).'\');'; ?>
            <tr class="odd gradeX" id="dr_row_<?php echo $t['id']; ?>">
                <td class="myselect">
                    <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                        <input type="checkbox" class="checkboxes" name="ids[]" value="<?php echo $t['id']; ?>" />
                        <span></span>
                    </label>
                </td>
                <td style="text-align:center">
                    <label><?php if (!$t['remote']) { ?><span class="label label-sm label-danger"><?php echo dr_lang('本地存储'); ?></span><?php } else { ?><span class="label label-sm label-warning"><?php echo dr_lang('远程附件'); ?></span><?php } ?></label>
                </td>
                <td><?php echo \Phpcmf\Service::L('Function_list')->author($t['author']); ?></td>
                <td><a href="<?php echo $t['url']; ?>"><?php echo \Phpcmf\Service::L('Function_list')->title($t['filename'], $param); ?></a></td>
                <td style="text-align:center"><?php echo $t['fileext']; ?></td>
                <td><?php echo dr_format_file_size($t['filesize']); ?></td>
                <td><?php echo dr_date($t['inputtime'], null, 'red'); ?></td>
                <td><?php if ($table == 'data') {  echo $t['related'];  } else { ?><a href="javascript:dr_layer_tips('<?php echo $t['attachinfo']; ?>');"><?php echo $t['attachinfo']; ?></a><?php } ?></td>
            </tr>
            <?php } } ?>
            </tbody>
        </table>
    </div>

    <div class="row fc-list-footer table-checkable ">
            <div class="col-md-5 fc-list-select">
            <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                <input type="checkbox" class="group-checkable" data-set=".checkboxes" />
                <span></span>
            </label>
            <?php if (\Phpcmf\Service::C()->_is_admin_auth('del')) { ?>
            <button type="button" onclick="dr_ajax_option('<?php echo dr_url($uriprefix.'/del'); ?>', '<?php echo dr_lang('你确定要删除它们吗？'); ?>', 1)" class="btn red btn-sm"> <i class="fa fa-trash"></i> <?php echo dr_lang('删除'); ?></button>
            <?php }  if (\Phpcmf\Service::C()->_is_admin_auth('edit') && $table != 'data') { ?>
            <button type="button" onclick="dr_ajax_option('<?php echo dr_url($uriprefix.'/edit'); ?>', '<?php echo dr_lang('你确定要强制归档它们吗？'); ?>', 1)" class="btn blue btn-sm"> <i class="fa fa-database"></i> <?php echo dr_lang('归档'); ?></button>
            <?php } ?>
            </div>
        <div class="col-md-7 fc-list-page">
            <?php echo $mypages; ?>
        </div>
    </div>
</form>


<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>