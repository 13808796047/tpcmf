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
        <?php echo dr_form_search_hidden(); ?>
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
                <?php if (\Phpcmf\Service::C()->_is_admin_auth('del')) { ?>
                <th class="myselect">
                    <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                        <input type="checkbox" class="group-checkable" data-set=".checkboxes" />
                        <span></span>
                    </label>
                </th>
                <?php } ?>
                <th style="text-align:center" class="<?php echo dr_sorting('isnew'); ?>" name="isnew" width="70"><?php echo dr_lang('类型'); ?></th>
                <th class="<?php echo dr_sorting('cid'); ?>" name="cid"><?php echo dr_lang('主题'); ?></th>
                <th class="<?php echo dr_sorting('status'); ?>" name="status" width="90" style="text-align:center"><?php echo dr_lang('状态'); ?></th>
                <th class="<?php echo dr_sorting('uid'); ?>" name="uid" width="150"><?php echo dr_lang('作者'); ?></th>
                <th class="<?php echo dr_sorting('inputtime'); ?>" name="inputtime" width="160"><?php echo dr_lang('提交时间'); ?></th>
                <th><?php echo dr_lang('操作'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if (is_array($list)) { $count=count($list);foreach ($list as $t) {              $c=dr_string2array($t['content']);
            $t['url'] = SITE_URL.'index.php?s='.APP_DIR.'&c=show&m=verify&id='.$t['id'];
            ?>
            <tr class="odd gradeX" id="dr_row_<?php echo $t['id']; ?>">
                <?php if (\Phpcmf\Service::C()->_is_admin_auth('del') || \Phpcmf\Service::C()->_is_admin_auth('edit')) { ?>
                <td class="myselect">
                    <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                        <input type="checkbox" class="checkboxes" name="ids[]" value="<?php echo $t['id']; ?>" />
                        <span></span>
                    </label>
                </td>
                <?php } ?>
                <td style="text-align:center">
                    <?php if ($t['isnew']) { ?>
                    <span class="label label-success"> <?php echo dr_lang('新增'); ?> </span>
                    <?php } else { ?>
                    <span class="label label-danger"> <?php echo dr_lang('修改'); ?> </span>
                    <?php } ?>
                </td>
                <td><?php echo \Phpcmf\Service::L('Function_list')->title($c['title'], null, $t); ?></td>
                <td style="text-align:center">
                    <span class="label label-warning"> <?php echo dr_lang('%s审中', $t['status']); ?> </span>
                </td>
                <td><?php echo \Phpcmf\Service::L('Function_list')->uid($t['uid'], null, $t); ?></td>
                <td><?php echo dr_date($t['inputtime']); ?></td>
                <td>
                    <?php if (\Phpcmf\Service::C()->_is_admin_auth('edit')) { ?>
                    <label><a href="<?php echo dr_url($uriprefix.'/edit', ['id' => $t['id']]); ?>" class="btn btn-xs green"> <i class="fa fa-edit"></i> <?php echo dr_lang('处理'); ?></a></label>
                    <?php } ?>
                </td>
            </tr>
            <?php } } ?>
            </tbody>
        </table>
    </div>

         <div class="row fc-list-footer table-checkable ">         <div class="col-md-5 fc-list-select">
                <?php if (\Phpcmf\Service::C()->_is_admin_auth('del') || \Phpcmf\Service::C()->_is_admin_auth('edit')) { ?>
                <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="group-checkable" data-set=".checkboxes" />
                    <span></span>
                </label>
                <label><button type="button" onclick="dr_ajax_option('<?php echo dr_url($uriprefix.'/del'); ?>', '<?php echo dr_lang('你确定要删除它们吗？'); ?>', 1)" class="btn red btn-sm"> <i class="fa fa-trash"></i> <?php echo dr_lang('删除'); ?></button></label>
                <?php } ?>
         </div>
             <div class="col-md-7 fc-list-page">
                 <?php echo $mypages; ?>
             </div>
         </div>
</form>


<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>