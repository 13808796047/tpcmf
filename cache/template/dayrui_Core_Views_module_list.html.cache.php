<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<div class="note note-danger">
    <p><a href="javascript:dr_update_cache();"><?php echo dr_lang('更改配置之后需要更新缓存之后才能生效'); ?></a></p>
</div>
<form class="form-horizontal" role="form" id="myform">
    <?php echo dr_form_hidden(); ?>
    <div class="table-scrollable">
        <table class="table table-striped table-bordered table-hover table-checkable dataTable">
            <thead>
            <tr class="heading">
                <th width="50" style="text-align:center"> <?php echo dr_lang('显示'); ?> </th>
                <th width="70" style="text-align:center"> <?php echo dr_lang('排序'); ?> </th>
                <th width="60" style="text-align:center"> <?php echo dr_lang('类型'); ?> </th>
                <th width="120"> <?php echo dr_lang('名称'); ?> / <?php echo dr_lang('目录'); ?></th>
                <th width="60" style="text-align:center"> <?php echo dr_lang('站点数'); ?> </th>
                <th> <?php echo dr_lang('操作'); ?> </th>
            </tr>
            </thead>
            <tbody>
            <?php if (is_array($my)) { $count=count($my);foreach ($my as $t) { ?>
            <tr class="odd gradeX" id="dr_row_<?php echo $t['id']; ?>">
                <td style="text-align:center">
                    <a href="javascript:;" onclick="dr_ajax_open_close(this, '<?php echo dr_url('module/hidden_edit', ['id'=>$t['id']]); ?>', 1);" class="badge badge-<?php if ($t['disabled']) { ?>no<?php } else { ?>yes<?php } ?>"><i class="fa fa-<?php if ($t['disabled']) { ?>times<?php } else { ?>check<?php } ?>"></i></a>
                </td>
                <td style="text-align:center">
                    <input type="text" onblur="dr_ajax_save(this.value, '<?php echo dr_url('module/displayorder_edit', ['id'=>$t['id']]); ?>')" value="<?php echo $t['displayorder']; ?>" class="displayorder form-control input-sm input-inline input-mini">
                </td>
                <td style="text-align:center">
                    <?php if (!$t['system']) { ?>
                        <span class="badge badge-warning badge-roundless"> <?php echo dr_lang('插件'); ?> </span>
                    <?php } else {  if ($t['share']) { ?>
                        <span class="badge badge-success badge-roundless"> <?php echo dr_lang('共享'); ?> </span>
                        <?php } else { ?>
                        <span class="badge badge-info badge-roundless"> <?php echo dr_lang('独立'); ?> </span>
                        <?php }  } ?>
                </td>
                <td><a <?php if (!$t['share']) { ?>href="/index.php?s=<?php echo $t['dirname']; ?>" target="_blank"<?php } ?>><?php echo $t['name']; ?> / <?php echo $t['dirname']; ?></a></td>
                <td style="text-align:center"><?php echo $t['site']; ?></td>
                <td>
                    <?php if ($t['install']) {  if (\Phpcmf\Service::C()->_is_admin_auth('edit')) { ?>
                    <label><a href="<?php echo dr_url('module/edit', ['id'=>$t['id']]); ?>" class="btn btn-xs green"> <i class="fa fa-cog"></i> <?php echo dr_lang('配置'); ?> </a></label>
                    <label><a href="<?php echo dr_url('module/flag_edit', ['id'=>$t['id']]); ?>" class="btn btn-xs dark"> <i class="fa fa-flag"></i> <?php echo dr_lang('推荐位'); ?> </a></label>
                    <label><a href="<?php echo dr_url('module/form_index', ['dir'=>$t['dirname']]); ?>" class="btn btn-xs blue"> <i class="fa fa-list"></i> <?php echo dr_lang('模块表单'); ?> </a></label>
                    <?php }  if (\Phpcmf\Service::C()->_is_admin_auth()) { ?>
                    <label><a href="<?php echo dr_url('field/index', ['rname'=>'comment-module-'.$t['dirname'], 'rid'=>0]); ?>" class="btn btn-xs grey-mint"> <i class="fa fa-comments"></i> <?php echo dr_lang('评论字段'); ?> </a></label>
                    <label><a href="<?php echo dr_url('field/index', ['rname'=>'module', 'rid'=>$t['id']]); ?>" class="btn btn-xs dark"> <i class="fa fa-code"></i> <?php echo dr_lang('内容字段'); ?> </a></label>
                    <label><a href="javascript:dr_load_ajax('<?php echo dr_lang('确定将此模块从当前站点中删除吗？'); ?>', '<?php echo dr_url('module/uninstall', ['dir'=>$t['dirname']]); ?>', 1);" class="btn btn-xs red"> <i class="fa fa-trash"></i> <?php echo dr_lang('卸载'); ?> </a></label>
                    <?php }  } else {  if (\Phpcmf\Service::C()->_is_admin_auth()) { ?>
                    <label><a href="javascript:dr_install_module('<?php echo dr_url('module/install', ['dir'=>$t['dirname']]); ?>', '<?php echo intval($t['inde']); ?>');" class="btn btn-xs blue"> <i class="fa fa-plus"></i> <?php echo dr_lang('安装'); ?> </a></label>
                    <?php }  } ?>
                </td>
            </tr>
            <?php } }  if (\Phpcmf\Service::C()->_is_admin_auth()) {  if (is_array($list)) { $count=count($list);foreach ($list as $t) { ?>
            <tr class="odd gradeX" id="dr_row_<?php echo $t['id']; ?>">
                <td style="text-align:center"> -- </td>
                <td style="text-align:center"> -- </td>
                <td style="text-align:center"> -- </td>
                <td><?php echo $t['name']; ?> / <?php echo $t['dirname']; ?></td>
                <td style="text-align:center">0</td>
                <td>
                    <label><a href="javascript:<?php if (!$t['mtype']) { ?>dr_install_module_select<?php } else { ?>dr_install_module<?php } ?>('<?php echo dr_url('module/install', ['dir'=>$t['dirname']]); ?>');" class="btn btn-xs blue"> <i class="fa fa-plus"></i> <?php echo dr_lang('安装'); ?> </a></label>
                </td>
            </tr>
            <?php } }  } ?>
            </tbody>
        </table>
    </div>


</form>


<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>