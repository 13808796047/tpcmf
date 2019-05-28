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
                <select name="field" class="form-control">
                    <?php if (is_array($field)) { $count=count($field);foreach ($field as $t) {  if ($t['ismain']) { ?>
                    <option value="<?php echo $t['fieldname']; ?>" <?php if ($param['field']==$t['fieldname']) { ?>selected<?php } ?>><?php echo $t['name']; ?></option>
                    <?php }  } } ?>
                    <option value="id"> <?php echo dr_lang('流水号'); ?> </option>
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
                <th style="text-align:center" width="70" class="<?php echo dr_sorting('mid'); ?>" name="mid"><?php echo dr_lang('用途'); ?></th>
                <th width="110" class="<?php echo dr_sorting('uid'); ?>" name="uid"><?php echo dr_lang('账号'); ?></th>
                <th class="<?php echo dr_sorting('title'); ?>" name="title"><?php echo dr_lang('说明'); ?></th>
                <th width="120" class="<?php echo dr_sorting('value'); ?>" name="value" style="padding-left:20px"><?php echo dr_lang('金额'); ?></th>
                <th style="text-align:center" width="90" class="<?php echo dr_sorting('type'); ?>" name="type">付款</th>
                <th style="text-align:center" width="80" class="<?php echo dr_sorting('status'); ?>" name="status"><?php echo dr_lang('状态'); ?></th>
                <th width="160" class="<?php echo dr_sorting('inputtime'); ?>" name="inputtime"><?php echo dr_lang('时间'); ?></th>
                <th width="150"><?php echo dr_lang('操作'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
            <tr class="odd gradeX" id="dr_row_<?php echo $t['id']; ?>">
                <?php if (\Phpcmf\Service::C()->_is_admin_auth('del')) { ?>
                <td class="myselect">
                    <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                        <input type="checkbox" class="checkboxes" name="ids[]" value="<?php echo $t['id']; ?>" />
                        <span></span>
                    </label>
                </td>
                <?php } ?>
                <td style="text-align:center"><?php echo \Phpcmf\Service::M('Pay')->paytype($t['mid']) ?></td>
                <td><?php if ($t['uid']) {  echo \Phpcmf\Service::L('Function_list')->uid($t['uid']);  } else {  echo dr_lang('游客');  } ?></td>
                <td><a href="javascript:dr_layer_tips('<?php echo str_replace('"', '', $t['title']); ?>');" class="tooltips" data-container="body" data-placement="top" data-original-title="<?php echo str_replace('"', '', $t['title']); ?>"><?php echo dr_strcut($t['title'], 30); ?></a></td>
                <td><b><?php echo dr_pay_money_html($t['value']); ?></b></td>
                <td style="text-align:center"><?php echo dr_pay_type_html($t['type']); ?></td>
                <td style="text-align:center"><?php echo \Phpcmf\Service::M('Pay')->paystatus($t) ?></td>
                <td><?php echo dr_date($t['inputtime'], null, 'red'); ?></td>
                <td>
                    <?php if (\Phpcmf\Service::C()->_is_admin_auth('edit')) { ?>
                    <label><a href="<?php echo dr_url($uriprefix.'/edit', ['id'=>$t['id']]); ?>" class="btn btn-xs green"> <i class="fa fa-edit"></i> <?php echo dr_lang('详情'); ?></a></label>
                    <?php if ($t['status'] && $t['mid']=='recharge') { ?>
                    <label><a href="javascript:dr_iframe('<?php echo dr_lang('系统回收'); ?>', '<?php echo dr_url($uriprefix.'/system_edit', ['id'=>$t['id']]); ?>');" class="btn btn-xs red"> <i class="fa fa-rmb"></i> <?php echo dr_lang('回收'); ?></a></label>
                    <?php }  } ?>
                </td>
            </tr>
            <?php } } ?>
            </tbody>
        </table>
    </div>

         <div class="row fc-list-footer table-checkable ">
             <div class="col-md-5 fc-list-select">
                <?php if (\Phpcmf\Service::C()->_is_admin_auth('del')) { ?>
                <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="group-checkable" data-set=".checkboxes" />
                    <span></span>
                </label>
                <label><button type="button" onclick="dr_ajax_option('<?php echo dr_url('member_paylog/del'); ?>', '<?php echo dr_lang('你确定要删除吗？'); ?>', 1)" class="btn red btn-sm"> <i class="fa fa-trash"></i> <?php echo dr_lang('删除'); ?></button></label>
                <label><button type="button" onclick="dr_ajax_option('<?php echo dr_url('member_paylog/notice_del'); ?>', '<?php echo dr_lang('你确定要通知他们吗？'); ?>', 1)" class="btn green btn-sm"> <i class="fa fa-envelope"></i> <?php echo dr_lang('短信催付'); ?></button></label>
                <?php } ?>
            </div>
             <div class="col-md-7 fc-list-page">
                 <?php echo $mypages; ?>
             </div>
         </div>
</form>


<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>