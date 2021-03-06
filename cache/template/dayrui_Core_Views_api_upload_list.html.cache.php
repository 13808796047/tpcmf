<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>

<form class="form-horizontal" method="post" role="form" id="myform" style="margin-top:-20px;">
    <?php echo $form; ?>
    <input type="hidden" name="is_ajax" value="1">
    <input type="hidden" name="is_page" id="dr_page" value="0">

    <div class="portlet  light " style="padding: 0">
        <div class="portlet-title tabbable-line">
            <ul class="nav nav-tabs" style="float:left;">
                <li class="active">
                    <a href="#tab_0" data-toggle="tab" onclick="$('#dr_page').val('0')"> <?php echo dr_lang('未使用的附件'); ?> </a>
                </li>
                <li class="dev <?php if ($page==1) { ?>active<?php } ?>">
                    <a href="#tab_1" data-toggle="tab" onclick="$('#dr_page').val('1')"> <?php echo dr_lang('已使用的附件'); ?> </a>
                </li>
            </ul>
        </div>
        <div class="portlet-body">
            <div class="tab-content">

                <div class="tab-pane active" id="tab_0">

                    <table role="presentation" class="table table-fc-upload table-striped clearfix">
                        <tbody class="files">
                        <?php if (is_array($list['unused'])) { $count=count($list['unused']);foreach ($list['unused'] as $i=>$t) {  $url = dr_get_file_url($t); ?>
                        <tr class="template-download files_row <?php if ($i==0) { ?>border_none<?php } ?>">
                            <td width="100" style="text-align:center;">
                                <label class="mt-table mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" name="ids0[]" value="<?php echo $t['id']; ?>" />
                                    <span></span>
                                </label>
                                <span class="files_row_preview preview"><?php echo dr_file_preview_html($url); ?></span>
                            </td>
                            <td>
                                <?php echo $t['filename']; ?><br>
                                <span class="label label-sm label-success"> <?php echo dr_format_file_size($t['filesize']); ?> </span>
                            </td>
                            <td width="200" style="text-align:right;">
                                <label><button onclick="dr_file_delete(this, '<?php echo $t['id']; ?>')" type="button" class="btn red file_delete btn-sm"><i class="fa fa-trash"></i></button></label>
                                <label><a href="<?php echo $url; ?>" target="_blank" class="btn blue btn-sm"><i class="fa fa-cloud-download"></i></a></label>
                            </td>
                        </tr>
                        <?php } } ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane " id="tab_1">

                    <table role="presentation" class="table table-fc-upload table-striped clearfix">
                        <tbody class="files">
                        <?php if (is_array($list['used'])) { $count=count($list['used']);foreach ($list['used'] as $i=>$t) {  $url = dr_get_file_url($t); ?>
                        <tr class="template-download files_row <?php if ($i==0) { ?>border_none<?php } ?>">
                            <td width="100" style="text-align:center;">
                                <label class="mt-table mt-table mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                    <input type="checkbox" class="checkboxes" name="ids1[]" value="<?php echo $t['id']; ?>" />
                                    <span></span>
                                </label>
                                <span class="files_row_preview preview"><?php echo dr_file_preview_html($url); ?></span>
                            </td>
                            <td>
                                <?php echo $t['filename']; ?><br>
                                <span class="label label-sm label-success"> <?php echo dr_format_file_size($t['filesize']); ?> </span>
                            </td>
                            <td width="200" style="text-align:right;">
                                <label><a href="<?php echo $url; ?>" target="_blank" class="btn blue btn-sm"><i class="fa fa-cloud-download"></i></a></label>
                            </td>
                        </tr>
                        <?php } } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</form>

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>