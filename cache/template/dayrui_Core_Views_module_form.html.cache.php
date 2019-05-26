<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div class="note note-danger">
    <p><?php echo dr_lang('模块表单是对模块内容的扩展，相当于模块的子内容'); ?></p>
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
            <th width="150"> <?php echo dr_lang('名称'); ?> </th>
            <th width="160"> <?php echo dr_lang('数据表'); ?> </th>
            <th width="240"> <?php echo dr_lang('模板文件'); ?> </th>
            <th>  </th>
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
            <td><?php echo $t['name']; ?></td>
            <td><?php echo dr_module_table_prefix($t['module']); ?>_form_<?php echo $t['table']; ?></td>
            <td><?php echo $t['module']; ?>/form_<?php echo $t['table']; ?>.html</td>
            <td>
                <?php if (\Phpcmf\Service::C()->_is_admin_auth('edit')) { ?>
                <label><a href="<?php echo dr_url('module/form_edit', ['dir'=>$t['module'], 'id'=>$t['id']]); ?>" class="btn btn-xs green"> <i class="fa fa-edit"></i> <?php echo dr_lang('修改'); ?> </a></label>
                <?php }  if (\Phpcmf\Service::C()->_is_admin_auth()) { ?>
                <label><a href="<?php echo dr_url('field/index', ['rname'=>'mform-'.$t['module'], 'rid'=>$t['id']]); ?>" class="btn btn-xs dark"> <i class="fa fa-code"></i> <?php echo dr_lang('自定义字段'); ?> </a></label>
                <?php } ?>
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
                <button type="button" onclick="dr_ajax_option('<?php echo dr_url('module/form_del'); ?>', '<?php echo dr_lang('你确定要删除它们吗？'); ?>', 1)" class="btn red btn-sm"> <i class="fa fa-trash"></i> <?php echo dr_lang('删除'); ?></button>
                <?php } ?>
            </div>
             <div class="col-md-7 fc-list-page">
                 <?php echo $mypages; ?>
             </div>
         </div>

</form>


<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>