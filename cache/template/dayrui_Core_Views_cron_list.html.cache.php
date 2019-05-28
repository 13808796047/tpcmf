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
        <?php echo dr_form_search_hidden(['field' => 'type']); ?>
        <div class="col-md-12 col-sm-12">
            <label><select name="keyword" class="form-control">
                <option value="">--</option>
                <?php if (is_array($type)) { $count=count($type);foreach ($type as $i=>$t) { ?>
                <option value="<?php echo $i; ?>" <?php if ($param['keyword'] == $i) { ?> selected<?php } ?>><?php echo $t; ?></option>
                <?php } } ?>
            </select></label>
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
    <?php echo dr_form_hidden(); ?>
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
                <th width="110" class="<?php echo dr_sorting('type'); ?>" name="type"><?php echo dr_lang('类型'); ?></th>
                <th class="<?php echo dr_sorting('inputtime'); ?>" name="inputtime" width="170"><?php echo dr_lang('录入时间'); ?></th>
                <th class="<?php echo dr_sorting('updatetime'); ?>" name="updatetime" width="170"><?php echo dr_lang('执行时间'); ?></th>
                <th style="text-align:center" width="100" class="<?php echo dr_sorting('status'); ?>" name="status"><?php echo dr_lang('状态'); ?></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
            <tr class="odd gradeX" id="dr_row_<?php echo $t['id']; ?>">
                <td class="myselect">
                    <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                        <input type="checkbox" class="checkboxes" name="ids[]" value="<?php echo $t['id']; ?>" />
                        <span></span>
                    </label>
                </td>
                <td><?php echo $type[$t['type']]; ?></td>
                <td><?php echo dr_date($t['inputtime'], null, 'red'); ?></td>
                <td><?php echo dr_date($t['updatetime'], null, 'red'); ?></td>
                <td style="text-align:center">
                    <label><?php if ($t['status']) { ?><a href="javascript:;" onclick="dr_show_info('<?php echo $t['error']; ?>')" class="label label-sm label-danger"><?php echo dr_lang('查看错误'); ?></a><?php } else { ?><span class="label label-sm label-warning"><?php echo dr_lang('待执行'); ?></span><?php } ?></label>
                </td>
                <td>
                    <label><a href="javascript:;" class="btn green btn-xs" onclick="dr_show_info('<?php echo $t['value']; ?>')"><?php echo dr_lang('查看参数'); ?></a></label>
                    <?php if ($t['error']) { ?>
                    <label><a href="javascript:;" class="btn red btn-xs" onclick="dr_show_info('<?php echo $t['error']; ?>')"><?php echo dr_lang('执行%s次', $t['status']); ?></a></label>
                    <?php } ?>
                </td>
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
            <?php } ?>
            <button type="button" onclick="dr_ajax_option('<?php echo dr_url($uriprefix.'/post_add'); ?>', '<?php echo dr_lang('你确定要立即执行它们吗？'); ?>', 1)" class="btn blue btn-sm"> <i class="fa fa-refresh"></i> <?php echo dr_lang('立即执行'); ?></button>
        </div>
        <div class="col-md-7 fc-list-page">
            <?php echo $mypages; ?>
        </div>
    </div>
</form>


<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>