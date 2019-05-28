<!--<?php extract(dr_get_form_post_value('ceshi')) ?>-->
<!--<form action="" class="form-horizontal" method="post" name="myform" id="plateform">-->
<!--    <?php echo $form; ?>-->
<!--    <div class="fc-form-body">-->
<!--        <?php echo $myfield; ?>-->
<!--        <?php echo $diyfield; ?>-->
<!--        <?php echo $sysfield; ?>-->
<!--        <?php if ($is_post_code) { ?>-->
<!--        <div class="form-group">-->
<!--            <label class="control-label col-md-2"><?php echo dr_lang('验证码'); ?></label>-->
<!--            <div class="col-md-10">-->
<!--                <label>-->
<!--                    <div class="form-recaptcha">-->
<!--                        <div class="input-group">-->
<!--                            <input type="text" class="form-control" name="code">-->
<!--                            <div class="input-group-btn fc-code">-->
<!--                                <?php echo dr_code(120, 35); ?>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </label>-->
<!--            </div>-->
<!--        </div>-->
<!--        <?php } ?>-->
<!--    </div>-->

<!--    <div class="portlet-body form myfooter">-->
<!--        <div class="form-actions text-center">-->
<!--            <button type="button" onclick="dr_ajax_submit('<?php echo $post_url; ?>', 'plateform', '2000', '<?php echo $rt_url; ?>')" class="btn green"> <i class="fa fa-save"></i> 提交内容</button>-->
<!--        </div>-->
<!--    </div>-->
<!--</form>-->


<?php if ($fn_include = $this->_include("header.html")) include($fn_include); ?>
<link rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/detail.css">
<link rel="stylesheet" href="<?php echo HOME_THEME_PATH; ?>web/css/style-4.css">

<div style="background: #fff;">
    <div id="pz-content" style="padding: 20px 0;">
        <div class="tishi">
            <img alt="配资指数只收录合规实盘配资平台" src="http://peizizhishu.com/images/wenxin.jpg"/>
            <p><span></span>配资指数只收录合规实盘配资平台</p>
            <p><span></span>收录后会出现在“配资指数排名”栏目中</p>
            <p><span></span>请留下平台负责人电话</p>
        </div>
        <div class="liucheng-box">
            <p class="liucheng-tittle">
                加入配资指数排名流程
            </p>
            <div class="liucheng-header">
                <p style="left: 0;">
                    <span style="background:#ff9326">1</span>
                    提交信息
                </p>
                <p style="left: 46%;">
                    <span>2</span>

                    等待审核
                </p>
                <p style="left: 95%;">
                    <span>3</span>
                    平台公示
                </p>
            </div>
            <?php extract(dr_get_form_post_value('joinus')) ?>
            <form id="liucheng-form" method="POST">
                <?php echo $form; ?>
                <div class="form-itme">
                    <span>平台名称：</span>
                    <input type="text" value="" name="data[title]">
                    <em>*</em>

                </div>
                <div class="form-itme">
                    <span>平台网址：</span>
                    <input type="text" value="" name="data[ptwz]">
                    <em>*</em>
                </div>
                <div class="form-itme">
                    <span>联系电话：</span>
                    <input type="text" value="" name="data[lxdh]">
                    <em>*</em>
                </div>
                <div class="form-itme" >
                    <span>相关图片：</span>
                    <div class="up-box" id="fileupload_xgtp">
                        <input class="up-btn" type="button" value=""><span id="applying_images_count">0</span>/5
                        <input type="file" class="filess" id="uploadImage" name="file_data" multiple="multiple"/>

                        <p class="notes">上传营业执照、团队合影、办公场景等相关图片</p>
                    </div>
                    <em>*</em>

                </div>
                <div class="form-itme">
                    <button type="button"
                            onclick="dr_ajax_submit('<?php echo $post_url; ?>', 'liucheng-form', '2000', '<?php echo $rt_url; ?>')"
                            class="btn green"><i class="fa fa-save"></i> 提交内容
                    </button>
                </div>
              <div class="form-item">
                  <table role="presentation" class="table table-striped table-fc-upload clearfix">
                      <tbody id="fileupload_xgtp_files" class="files"></tbody>
                  </table>
              </div>
                <style>
                    .table-fc-upload{
                        margin-left: 100px;
                    }
                    .table-fc-upload img {
                        width: 100px;
                        height: 100px;
                    }
                    .table-fc-upload .btn{
                        height: 20px;
                        width: auto;
                        background: #57bc55;
                        color: #fff;
                        padding: 0 26px;
                        border: none;
                        line-height: 20px;
                    }
                    .table-fc-upload .red{
                        margin-bottom: 10px;
                        background: #ff0000;
                    }
                </style>
                <link href="http://tpcmf.test/static/assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css"
                      rel="stylesheet" type="text/css">
                <link href="http://tpcmf.test/static/assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css"
                      rel="stylesheet" type="text/css">

                <script src="http://tpcmf.test/static/assets/global/plugins/jquery-ui/jquery-ui.min.js"
                        type="text/javascript"></script>
                <script src="http://tpcmf.test/static/assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"
                        type="text/javascript"></script>
                <script src="http://tpcmf.test/static/assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"
                        type="text/javascript"></script>
                <script src="http://tpcmf.test/static/assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js"
                        type="text/javascript"></script>


                <script type="text/javascript">

                    $(function () {
                        $("#fileupload_xgtp_files").sortable();
                        // 未使用的附件
                        $('#fileupload_xgtp .fileinput-unused').click(function () {
                            var c = $('#fileupload_xgtp .files_row').length;
                            var url = "/index.php?s=api&c=file&m=input_file_list&p=0&fid=182&ct=" + c + "&rand=" + Math.random();
                            layer.open({
                                type: 2,
                                title: '<i class="fa fa-folder-open"></i> 浏览',
                                fix: true,
                                scrollbar: false,
                                shadeClose: true,
                                shade: 0,
                                area: ["60%", "70%"],
                                btn: ["确定"],
                                yes: function (index, layero) {
                                    var body = layer.getChildFrame('body', index);
                                    // 延迟加载
                                    var loading = layer.load(2, {
                                        time: 10000000
                                    });
                                    $.ajax({
                                        type: "POST",
                                        dataType: "json",
                                        url: url,
                                        data: $(body).find('#myform').serialize(),
                                        success: function (json) {
                                            layer.close(loading);
                                            if (json.code == 1) {
                                                layer.close(index);
                                                var numCount = 5;
                                                var numItems = $('#fileupload_xgtp_files .files_row').length;
                                                if (numItems + json.data.count > numCount) {
                                                    dr_tips(0, '上传文件不能超过5个');
                                                    return false;
                                                }
                                                ;
                                                var temp = '<tr class="template-download files_row"><td style="text-align:center;"><span class="files_row_preview preview">{preview}</span></td><td class="files_show_info"><div class="row"><div class="col-md-6 hidden-mobile files_show_name"><input type="hidden" class="files_row_id" name="data[xgtp][id][]" value="{id}"><input class="form-control files_row_name" {disabled} type="text" name="data[xgtp][file][]" value="{filepath}"></div><div class="col-md-6 col-xs-12 files_show_title"><input class="form-control files_row_title" type="text" name="data[xgtp][title][]" value="{title}"></div></div></td><td style="text-align:center;"><label><button onclick="dr_file_remove(this)" type="button" class="btn red file_delete btn-sm"><i class="fa fa-trash"></i></button></label><label><button onclick="dr_file_edit_xgtp(this)" type="button" class="fileinput-button btn green file_edit btn-sm"><i class="fa fa-edit"></i>{upload}</button></label></td></tr>';
                                                var html = "";
                                                for (var i in json.data.result) {
                                                    var tpl = temp;
                                                    var v = json.data.result[i];
                                                    tpl = tpl.replace(/\{preview\}/g, v.preview);
                                                    tpl = tpl.replace(/\{id\}/g, v.id);
                                                    tpl = tpl.replace(/\{disabled\}/g, v.disabled);
                                                    tpl = tpl.replace(/\{filepath\}/g, v.file);
                                                    tpl = tpl.replace(/\{title\}/g, v.name);
                                                    tpl = tpl.replace(/\{description\}/g, "");
                                                    tpl = tpl.replace(/\{upload\}/g, v.upload);
                                                    html += tpl;
                                                }
                                                $('#fileupload_xgtp_files').append(html);
                                                fileupload_xgtp_edit();
                                                dr_tips(1, json.msg);
                                            } else {
                                                dr_tips(0, json.msg);

                                            }
                                            return false;
                                        }
                                    });

                                    return false;
                                },
                                success: function (layero, index) {
                                    // 主要用于权限验证
                                    var body = layer.getChildFrame('body', index);
                                    var json = $(body).html();
                                    if (json.indexOf('"code":0') > 0 && json.length < 150) {
                                        var obj = JSON.parse(json);
                                        layer.close(index);
                                        dr_tips(0, obj.msg);
                                    }
                                    if (json.indexOf('"code":1') > 0 && json.length < 150) {
                                        var obj = JSON.parse(json);
                                        layer.close(index);
                                        dr_tips(1, obj.msg);
                                    }
                                },
                                content: url + '&is_ajax=1'
                            });
                        });

                        // 输入地址
                        $('#fileupload_xgtp .fileinput-url').click(function () {
                            var url = "/index.php?s=api&c=file&siteid=1&fid=182&p=0&m=input_file_url";
                            layer.open({
                                type: 2,
                                title: '<i class="fa fa-edit"></i> 输入文件地址',
                                fix: true,
                                scrollbar: false,
                                shadeClose: true,
                                shade: 0,
                                area: ["50%", "45%"],
                                btn: ["确定"],
                                yes: function (index, layero) {
                                    var body = layer.getChildFrame('body', index);
                                    // 延迟加载
                                    var loading = layer.load(2, {
                                        time: 10000000
                                    });
                                    $.ajax({
                                        type: "POST",
                                        dataType: "json",
                                        url: url,
                                        data: $(body).find('#myform').serialize(),
                                        success: function (json) {
                                            layer.close(loading);
                                            if (json.code == 1) {
                                                layer.close(index);
                                                var tpl = '<tr class="template-download files_row"><td style="text-align:center;"><span class="files_row_preview preview">{preview}</span></td><td class="files_show_info"><div class="row"><div class="col-md-6 hidden-mobile files_show_name"><input type="hidden" class="files_row_id" name="data[xgtp][id][]" value="{id}"><input class="form-control files_row_name" {disabled} type="text" name="data[xgtp][file][]" value="{filepath}"></div><div class="col-md-6 col-xs-12 files_show_title"><input class="form-control files_row_title" type="text" name="data[xgtp][title][]" value="{title}"></div></div></td><td style="text-align:center;"><label><button onclick="dr_file_remove(this)" type="button" class="btn red file_delete btn-sm"><i class="fa fa-trash"></i></button></label><label><button onclick="dr_file_edit_xgtp(this)" type="button" class="fileinput-button btn green file_edit btn-sm"><i class="fa fa-edit"></i>{upload}</button></label></td></tr>';
                                                tpl = tpl.replace(/\{preview\}/g, json.data.preview);
                                                tpl = tpl.replace(/\{id\}/g, json.data.id);
                                                tpl = tpl.replace(/\{disabled\}/g, json.data.disabled);
                                                tpl = tpl.replace(/\{filepath\}/g, json.data.file);
                                                tpl = tpl.replace(/\{title\}/g, json.data.name);
                                                tpl = tpl.replace(/\{description\}/g, "");
                                                tpl = tpl.replace(/\{upload\}/g, json.data.upload);
                                                $('#fileupload_xgtp_files').append(tpl);
                                                fileupload_xgtp_edit();
                                                dr_tips(1, json.msg);
                                            } else {
                                                dr_tips(0, json.msg);

                                            }
                                            return false;
                                        }
                                    });
                                    return false;
                                },
                                success: function (layero, index) {
                                    // 主要用于权限验证
                                    var body = layer.getChildFrame('body', index);
                                    var json = $(body).html();
                                    if (json.indexOf('"code":0') > 0 && json.length < 150) {
                                        var obj = JSON.parse(json);
                                        layer.close(index);
                                        dr_tips(0, obj.msg);
                                    }
                                    if (json.indexOf('"code":1') > 0 && json.length < 150) {
                                        var obj = JSON.parse(json);
                                        layer.close(index);
                                        dr_tips(1, obj.msg);
                                    }
                                    var numItems = $('#fileupload_xgtp_files .files_row').length;
                                    if (numItems >= 5) {
                                        dr_tips(0, '上传文件不能超过5个');
                                        layer.close(index);
                                        return false;
                                    }
                                },
                                content: url + '&is_ajax=1'
                            });
                        });
                        // 初始化上传组件
                        $('#fileupload_xgtp').fileupload({
                            disableImageResize: false,
                            autoUpload: true,
                            maxFileSize: 5242880,
                            acceptFileTypes: /(\.|\/)(jpg|png)$/i,
                            url: '/index.php?s=api&c=file&siteid=1&m=upload&p=0&fid=182',
                            dataType: 'json',
                            progressall: function (e, data) {
                                // 上传进度条 all
                                var progress = parseInt(data.loaded / data.total * 100, 10);
                                $("#fileupload_xgtp .fileupload-progress").show();
                                $("#fileupload_xgtp .fileupload-progress").removeClass("fade");
                                $("#fileupload_xgtp .progress-bar-success").attr("style", "width: " + progress + "%");
                            },
                            add: function (e, data) {
                                var myItems = data.originalFiles.length;
                                var numItems = $('#fileupload_xgtp_files .files_row').length;
                                if (numItems + myItems > 5) {
                                    dr_tips(0, '上传文件不能超过5个');
                                    return false;
                                }
                                data.submit();
                            },
                            done: function (e, data) {

                                dr_tips(data.result.code, data.result.msg);
                                $("#fileupload_xgtp .fileupload-progress").hide();
                                $("#fileupload_xgtp .fileupload-progress").addClass("fade");
                                if (data.result.code == 0) {
                                    return false;
                                }

                                var tpl = '<tr class="template-download files_row"><td style="text-align:center;"><span class="files_row_preview preview">{preview}</span></td><td class="files_show_info"><div class="row"><div class="col-md-6 hidden-mobile files_show_name"><input type="hidden" class="files_row_id" name="data[xgtp][id][]" value="{id}"><input class="form-control files_row_name" {disabled} type="text" name="data[xgtp][file][]" value="{filepath}"></div><div class="col-md-6 col-xs-12 files_show_title"><input class="form-control files_row_title" type="text" name="data[xgtp][title][]" value="{title}"></div></div></td><td style="text-align:center;"><label><button onclick="dr_file_remove(this)" type="button" class="btn red file_delete btn-sm"><i class="fa fa-trash"></i></button></label><label><button onclick="dr_file_edit_xgtp(this)" type="button" class="fileinput-button btn green file_edit btn-sm"><i class="fa fa-edit"></i>{upload}</button></label></td></tr>';
                                tpl = tpl.replace(/\{preview\}/g, data.result.info.preview);
                                tpl = tpl.replace(/\{id\}/g, data.result.id);
                                tpl = tpl.replace(/\{disabled\}/g, "disabled");
                                tpl = tpl.replace(/\{filepath\}/g, data.result.info.file);
                                tpl = tpl.replace(/\{title\}/g, data.result.info.name);
                                tpl = tpl.replace(/\{description\}/g, "");
                                tpl = tpl.replace(/\{upload\}/g, "<input type=\"file\" name=\"file_data\"></button>");
                                $('#fileupload_xgtp_files').append(tpl);

                                fileupload_xgtp_edit();
                            },
                        });

                        fileupload_xgtp_edit();
                    });

                    // 修改组件
                    function fileupload_xgtp_edit() {
                        $('#fileupload_xgtp_files .file_edit').fileupload({
                            disableImageResize: false,
                            autoUpload: true,
                            maxFileSize: 5242880,
                            acceptFileTypes: /(\.|\/)(jpg|png)$/i,
                            url: '/index.php?s=api&c=file&siteid=1&m=upload&p=0&fid=182',
                            dataType: 'json',
                            progressall: function (e, data) {
                                // 上传进度条 all
                                var progress = parseInt(data.loaded / data.total * 100, 10);
                                $("#fileupload_xgtp .fileupload-progress").show();
                                $("#fileupload_xgtp .fileupload-progress").removeClass("fade");
                                $("#fileupload_xgtp .progress-bar-success").attr("style", "width: " + progress + "%");
                            },
                            done: function (e, data) {

                                $("#fileupload_xgtp .fileupload-progress").addClass("fade");
                                $("#fileupload_xgtp .fileupload-progress").hide();
                                dr_tips(data.result.code, data.result.msg);
                                if (data.result.code == 0) {
                                    return false;
                                }

                                $(this).parents(".files_row").find(".files_row_id").val(data.result.id);
                                $(this).parents(".files_row").find(".files_row_name").val(data.result.info.file);
                                $(this).parents(".files_row").find(".files_row_preview").html(data.result.info.preview);

                            },
                        });
                    }

                    // 修改URL
                    function dr_file_edit_xgtp(e) {
                        var obj = $(e).parents(".files_row");
                        var file = obj.find(".files_row_name").val();
                        var name = obj.find(".files_row_title").val();
                        var only = obj.find(".files_row_name").attr("readonly");
                        if (only == "readonly" || only == true) {
                            return;
                        }
                        var url = "/index.php?s=api&c=file&m=input_file_url&siteid=1&fid=182&p=0&file=" + file + "&name=" + name;
                        layer.open({
                            type: 2,
                            title: '<i class="fa fa-edit"></i> 修改文件地址',
                            fix: true,
                            scrollbar: false,
                            shadeClose: true,
                            shade: 0,
                            area: ["50%", "45%"],
                            btn: ["确定"],
                            yes: function (index, layero) {

                                var body = layer.getChildFrame('body', index);
                                // 延迟加载
                                var loading = layer.load(2, {
                                    time: 10000000
                                });
                                $.ajax({
                                    type: "POST",
                                    dataType: "json",
                                    url: url,
                                    data: $(body).find('#myform').serialize(),
                                    success: function (json) {
                                        layer.close(loading);
                                        if (json.code == 1) {
                                            layer.close(index);
                                            var tpl = '<tr class="template-download files_row"><td style="text-align:center;"><span class="files_row_preview preview">{preview}</span></td><td class="files_show_info"><div class="row"><div class="col-md-6 hidden-mobile files_show_name"><input type="hidden" class="files_row_id" name="data[xgtp][id][]" value="{id}"><input class="form-control files_row_name" {disabled} type="text" name="data[xgtp][file][]" value="{filepath}"></div><div class="col-md-6 col-xs-12 files_show_title"><input class="form-control files_row_title" type="text" name="data[xgtp][title][]" value="{title}"></div></div></td><td style="text-align:center;"><label><button onclick="dr_file_remove(this)" type="button" class="btn red file_delete btn-sm"><i class="fa fa-trash"></i></button></label><label><button onclick="dr_file_edit_xgtp(this)" type="button" class="fileinput-button btn green file_edit btn-sm"><i class="fa fa-edit"></i>{upload}</button></label></td></tr>';
                                            tpl = tpl.replace(/\{preview\}/g, json.data.preview);
                                            tpl = tpl.replace(/\{id\}/g, json.data.id);
                                            tpl = tpl.replace(/\{disabled\}/g, json.data.disabled);
                                            tpl = tpl.replace(/\{filepath\}/g, json.data.file);
                                            tpl = tpl.replace(/\{title\}/g, json.data.name);
                                            tpl = tpl.replace(/\{upload\}/g, json.data.upload);
                                            obj.remove();
                                            $('#fileupload_xgtp_files').append(tpl);
                                            fileupload_xgtp_edit();
                                            dr_tips(1, json.msg);
                                        } else {
                                            dr_tips(0, json.msg);

                                        }
                                        return false;
                                    }
                                });
                                return false;
                            },
                            success: function (layero, index) {
                                // 主要用于权限验证
                                var body = layer.getChildFrame('body', index);
                                var json = $(body).html();
                                if (json.indexOf('"code":0') > 0 && json.length < 150) {
                                    var obj = JSON.parse(json);
                                    layer.close(index);
                                    dr_tips(0, obj.msg);
                                }
                                if (json.indexOf('"code":1') > 0 && json.length < 150) {
                                    var obj = JSON.parse(json);
                                    layer.close(index);
                                    dr_tips(1, obj.msg);
                                }
                            },
                            content: url + '&is_ajax=1'
                        });
                    }

                </script>



        </form>
    </div>
</div>
</div>

<?php if ($fn_include = $this->_include("footer.html")) include($fn_include); ?>