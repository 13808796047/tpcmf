<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div class="note note-danger">
    <p><?php echo dr_lang('联动菜单可以作为地区、行业、类型等，也可以按站点来设置联动菜单值'); ?></p>
</div>
<form class="form-horizontal" role="form" id="myform">
    <?php echo dr_form_hidden(); ?>
    <div class="table-scrollable">
        <table class="table table-fc-upload table-striped table-bordered table-hover table-checkable dataTable">
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
                <th width="120"> <?php echo dr_lang('别名'); ?> </th>
                <th width="120" style="text-align:center"> <?php echo dr_lang('类型'); ?> </th>
                <th> <?php echo dr_lang('操作'); ?> </th>
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
                <td><?php echo $t['code']; ?></td>
                <td style="text-align:center">
                    <?php if ($t['type']) { ?>
                    <span class="label label-success"> <?php echo dr_lang('站点独立'); ?> </span>
                    <?php } else { ?>
                    <span class="label label-danger"> <?php echo dr_lang('全局共享'); ?> </span>
                    <?php } ?>
                </td>
                <td style="overflow:visible">
                    <?php if (\Phpcmf\Service::C()->_is_admin_auth('edit')) { ?><label><a href="javascript:dr_iframe('edit', '<?php echo dr_url('linkage/edit', ['id'=>$t['id']]); ?>', '500px','410px');" class="btn btn-xs green"> <i class="fa fa-edit"></i> <?php echo dr_lang('修改'); ?> </a></label><?php } ?>
                    <label><a href="<?php echo dr_url('linkage/list_index', ['key'=>$t['id']]); ?>" class="btn btn-xs dark"> <i class="fa fa-table"></i> <?php echo dr_lang('数据管理'); ?> </a></label>
                    <?php if (\Phpcmf\Service::C()->_is_admin_auth()) { ?>
                    <label><a href="<?php echo dr_url('field/index', ['rname'=>'linkage', 'rid'=>$t['id']]); ?>" class="btn btn-xs blue"> <i class="fa fa-code"></i> <?php echo dr_lang('自定义字段'); ?> </a></label>
                    <?php if (is_array($dt_data)) { $count=count($dt_data);foreach ($dt_data as $i=>$n) { ?>
                    <label>
                        <a class="btn btn-xs red" href="javascript:dr_load_ajax('<?php echo dr_lang('操作将会现有的数据覆盖掉，您确定吗？'); ?>', '<?php echo dr_url('linkage/import', ['code'=> $i, 'id'=>$t['id']]); ?>');" > <i class="fa fa-sign-in"></i> <?php echo dr_lang($n); ?></a>
                    </label>
                    <?php } }  } ?>
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
            <button type="button" onclick="dr_ajax_option('<?php echo dr_url('linkage/del'); ?>', '<?php echo dr_lang('你确定要删除它们吗？'); ?>', 1)" class="btn red btn-sm"> <i class="fa fa-trash"></i> <?php echo dr_lang('删除'); ?></button>
            <?php } ?>
        </div>
         <div class="col-md-7 fc-list-page">
             <?php echo $mypages; ?>
         </div>
     </div>

</form>


<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>