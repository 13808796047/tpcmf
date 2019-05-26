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
        <?php echo dr_form_search_hidden($p);  if ($index) { ?>
        <div class=" finecms-top-name" class="finecms-top-name" style="padding-left: 15px; padding-bottom: 20px"><a  href="<?php echo $index['url']; ?>" target="_blank"><code><?php echo dr_strcut(dr_clearhtml($index['title']), 50); ?></code></a></div>
        <?php } ?>

        <div class="col-md-12 col-sm-12">
            <label>
                <select name="field" class="form-control">
                    <?php if (is_array($field)) { $count=count($field);foreach ($field as $t) {  if ($t['ismain']) { ?>
                    <option value="<?php echo $t['fieldname']; ?>" <?php if ($param['field']==$t['fieldname']) { ?>selected<?php } ?>><?php echo $t['name']; ?></option>
                    <?php }  } } ?>
                    <option value="id"> Id </option>
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
            <label><button type="button" onclick="dr_export('<?php echo $list_table; ?>', '<?php echo $list_query; ?>')" class="btn blue btn-sm" style="margin-top: 2px;"> <i class="fa fa-mail-forward"></i> <?php echo dr_lang('导出'); ?></button></label>
        </div>
    </form>
</div>


<form class="form-horizontal" role="form" id="myform">
    <?php echo dr_form_hidden(); ?>
    <div class="table-scrollable">
        <table class="table table-striped table-bordered table-hover table-checkable dataTable">
            <thead>
            <tr class="heading">
                <?php if (\Phpcmf\Service::C()->_is_admin_auth('del') || \Phpcmf\Service::C()->_is_admin_auth('edit')) { ?>
                <th class="myselect">
                    <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                        <input type="checkbox" class="group-checkable" data-set=".checkboxes" />
                        <span></span>
                    </label>
                </th>
                <?php } ?>
                <th style="text-align:center" width="70" class="<?php echo dr_sorting('displayorder'); ?>" name="displayorder"><?php echo dr_lang('排序'); ?></th>
                <?php if (is_array($list_field)) { $count=count($list_field);foreach ($list_field as $i=>$t) { ?>
                <th <?php if ($t['width']) { ?> width="<?php echo $t['width']; ?>"<?php } ?> class="<?php echo dr_sorting($i); ?>" name="<?php echo $i; ?>"><?php echo dr_lang($t['name']); ?></th>
                <?php } } ?>
                <th style="text-align:center" width="70" class="<?php echo dr_sorting('status'); ?>" name="status"><?php echo dr_lang('状态'); ?></th>
                <th><?php echo dr_lang('操作'); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
            <tr class="odd gradeX" id="dr_row_<?php echo $t['id']; ?>">
                <?php if (\Phpcmf\Service::C()->_is_admin_auth('del') || \Phpcmf\Service::C()->_is_admin_auth('edit')) { ?>
                <td class="myselect">
                    <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                        <input type="checkbox" class="checkboxes" name="ids[]" value="<?php echo $t['id']; ?>" />
                        <span></span>
                    </label>
                </td>
                <?php } ?>
                <td style="text-align:center"> <input type="text" onblur="dr_ajax_save(this.value, '<?php echo dr_url($uriprefix.'/order_edit', ['id'=>$t['id']]); ?>')" value="<?php echo $t['displayorder']; ?>" class="displayorder form-control input-sm input-inline input-mini"> </td>
                <?php if (is_array($list_field)) { $count=count($list_field);foreach ($list_field as $i=>$tt) { ?>
                <td><?php echo dr_list_function($tt['func'], $t[$i], $param, $t); ?></td>
                <?php } } ?>
                <td style="text-align:center"><?php echo \Phpcmf\Service::L('Function_list')->status($t['status']); ?></td>
                <td>
                    <?php if (\Phpcmf\Service::C()->_is_admin_auth('edit')) { ?>
                    <label><a href="<?php echo dr_url($uriprefix.'/edit', ['id'=>$t['id'], 'cid'=>$t['cid']]); ?>" class="btn btn-xs red"> <i class="fa fa-edit"></i> <?php echo dr_lang('修改'); ?></a></label>
                    <?php }  if (\Phpcmf\Service::C()->_is_admin_auth('edit') && dr_is_app('copy')) { ?>
                    <label><a href="JavaScript:;" onclick="dr_ajax_confirm_url('<?php echo dr_url('copy/home/mfrom_edit', ['mid'=>MOD_DIR,'dir'=>$mform['table'], 'id'=>$t['id']]); ?>', '<?php echo dr_lang('复制将把此内容生成一条新内容'); ?>', '<?php echo dr_now_url(); ?>')" class="btn btn-xs green"> <i class="fa fa-copy"></i> <?php echo dr_lang('复制'); ?></a></label>
                    <?php } ?>
                    <label><a href="<?php echo dr_url($uriprefix.'/show_index', ['id'=>$t['id'], 'cid'=>$t['cid']]); ?>" class="btn btn-xs dark"> <i class="fa fa-search"></i> <?php echo dr_lang('查看'); ?></a></label>
                </td>
            </tr>
            <?php } } ?>
            </tbody>
        </table>
    </div>

         <div class="row fc-list-footer table-checkable ">
             <div class="col-md-5 fc-list-select">
                <?php if (\Phpcmf\Service::C()->_is_admin_auth('del') || \Phpcmf\Service::C()->_is_admin_auth('edit')) { ?>
                <label class="mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                    <input type="checkbox" class="group-checkable" data-set=".checkboxes" />
                    <span></span>
                </label>
                <?php }  if (\Phpcmf\Service::C()->_is_admin_auth('del')) { ?>
                <label><button type="button" onclick="dr_ajax_option('<?php echo dr_url($uriprefix.'/del'); ?>', '<?php echo dr_lang('你确定要删除吗？'); ?>', 1)" class="btn red btn-sm"> <i class="fa fa-trash"></i> <?php echo dr_lang('删除'); ?></button></label>
                <?php }  if ($is_verify) { ?>
                <label><button type="button" onclick="dr_ajax_option('<?php echo dr_url($uriprefix.'/status_index'); ?>', '<?php echo dr_lang('你确定要审核通过它们吗？'); ?>', 1)" class="btn blue btn-sm"> <i class="fa fa-check-square-o"></i> <?php echo dr_lang('通过'); ?></button></label>
                <?php } ?>
         </div>
             <div class="col-md-7 fc-list-page">
                 <?php echo $mypages; ?>
             </div>
         </div>
</form>


<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>