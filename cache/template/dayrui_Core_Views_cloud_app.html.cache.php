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
                <th width="60" style="text-align:center">  </th>
                <th width="330"> <?php echo dr_lang('名称'); ?> / <?php echo dr_lang('目录'); ?></th>
                <th width="150"> <?php echo dr_lang('开发者'); ?> </th>
                <th width="80"> <?php echo dr_lang('版本'); ?> </th>
                <th> <?php echo dr_lang('操作'); ?> </th>
            </tr>
            </thead>
            <tbody>
            <?php $i=1;  if (is_array($list)) { $count=count($list);foreach ($list as $dir=>$t) { ?>
            <tr class="odd gradeX">
                <td style="text-align:center">
                    <span class="badge badge-success"> <?php echo $i; ?> </span>
                </td>
                <td><i class="<?php echo $t['icon']; ?>"></i> <?php echo $t['name']; ?> / <?php echo $dir; ?></td>
                <td><?php if ($t['store']) { ?><a href="<?php echo $t['store']; ?>" target="_blank"><?php echo $t['author']; ?></a><?php } else {  echo $t['author'];  } ?></td>
                <td><?php echo $t['version']; ?></td>
                <td>
                    <?php if ($t['install']) { ?>
                    <label><a href="javascript:dr_load_ajax('<?php echo dr_lang('确定卸载此程序吗？'); ?>', '<?php echo dr_url('cloud/uninstall', ['dir'=>$dir]); ?>', 1);" class="btn btn-xs red"> <i class="fa fa-trash"></i> <?php echo dr_lang('卸载'); ?> </a></label>
                    <?php } else { ?>
                    <label><a href="javascript:dr_load_ajax('<?php echo dr_lang('确定安装此程序吗？'); ?>', '<?php echo dr_url('cloud/install', ['dir'=>$dir]); ?>', 1);" class="btn btn-xs blue"> <i class="fa fa-plus"></i> <?php echo dr_lang('安装'); ?> </a></label>
                    <?php } ?>
                </td>
            </tr>
            <?php $i++;  } } ?>
            </tbody>
        </table>
    </div>


</form>


<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>