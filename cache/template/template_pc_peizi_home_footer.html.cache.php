<!--footer-->
<div class="footer-top">
    <div class="footer-top-inner">
        <div class="qr-code">
            <div class="qr-code-item">
                <img src="picture/wexin-ma_1.jpg"/><br>
                官方微信
            </div>
            <div class="qr-code-item">
                <img src="picture/qq-ma_1.jpg"/><br>
                官方QQ
            </div>
            <div class="qr-code-item">
                <img src="picture/webo-ma_1.jpg"/><br>
                官方微博
            </div>
            <div class="qr-code-item">
                <img src="picture/touchacha_1.jpg" width="103"/><br>
                合作方投查查
            </div>
        </div>
        <div class="company-msg">
            <div class="company-address">
                地址：北京朝阳区传媒总部基地1号楼18层
            </div>
            <div class="company-tel">
                电话：010-5621 5857
            </div>
        </div>
    </div>
</div>

<div class="footer-bottom">
    <div class="footer-bottom-inner">
        <div>温馨提示："配资指数"提供的信息及观点，不作为投资建议</div>
        <div class="pz-copyright">©北京比比信科技有限公司&nbsp;版权所有 &nbsp;|&nbsp;京ICP备14023970号-1&nbsp;|&nbsp;京公安网备11010502025692
        </div>
    </div>
</div>


<!-- 登录框 -->
<div class="bac_box" style="display: none;"></div>
<div class="alert_pop_box alert_pop_login" style="display: none;">
    <form id="loginForm" method="post" action="http://peizizhishu.com/login" class="pz-form">
        <input type="hidden" name="_token" value="jq23hr9oNXg8g18C4jViNVl5LHZo29OVGXOhYCBV">
        <div class="pz-form-title">
            <div class="title-text">登录</div>
        </div>
        <p id="loginFormError" style="color: chocolate;display:none">用户名或密码错误</p>
        <label>
            <input class="pz-input pz-username" type="text" name="loginid" placeholder="用户名"/>
        </label>
        <label>
            <input class="pz-input pz-password" type="password" name="password" value="" placeholder="密码"/>
        </label>
        <div class="pz-form-other">
            <div class="pz-rember"><input style="vertical-align: top;" type="checkbox" name="rember"/>&nbsp;&nbsp;记住密码
            </div>

            <div class="clear_box"></div>
        </div>
        <label>
            <button id="loginSubmit" class="pz-input pz-submit" type="button">立即登录</button>
        </label>
        <a href="javascript:void(0)" class="pz-colse">x</a>
    </form>
</div>

<!-- 注册框 -->
<div class="bac_box" style="display: none;"></div>
<div class="alert_pop_box alert_pop_register" style="display: none;">
    <form id="registerForm" method="post" action="http://peizizhishu.com/register" class="pz-form">
        <input type="hidden" name="_token" value="jq23hr9oNXg8g18C4jViNVl5LHZo29OVGXOhYCBV">
        <div class="pz-form-title">
            <div class="title-text">注册</div>
        </div>
        <p id="registerFormError" style="color: chocolate;display:none"></p>
        <label>
            <input class="pz-input pz-username" type="text" name="username" placeholder="用户名"/>
        </label>
        <label>
            <input class="pz-input pz-username" type="text" name="mobile" placeholder="手机号"/>
        </label>
        <label>
            <input class="pz-input pz-password" type="password" name="password" value="" placeholder="密码"/>
        </label>
        <label>
            <input class="pz-input pz-password" type="password" name="password_confirmation" value=""
                   placeholder="确认密码"/>
        </label>
        <label>
            <button id="registerSubmit" class="pz-input pz-submit" type="button">立即注册</button>
        </label>
        <a href="javascript:void(0)" class="pz-colse">x</a>
    </form>
</div>

<script type="text/javascript" src="<?php echo HOME_THEME_PATH; ?>web/js/jquery1.42.min_1.js"></script>
<script type="text/javascript" src="<?php echo HOME_THEME_PATH; ?>web/js/jquery.superslide.2.1.1_1.js"></script>
<script type="text/javascript" src="<?php echo HOME_THEME_PATH; ?>web/js/jquery.basictable.min_1.js"></script>
<script type="text/javascript" defer="defer" src="<?php echo HOME_THEME_PATH; ?>web/js/common_1.js"></script>
<script>
    $(document).ready(function () {
        $('#search-column li').click(function () {
            $(".input-prompt").css("display", "none");
            $(this).siblings('li').removeClass('tab-box-active');
            $(this).addClass('tab-box-active');
            $('input[name="column"]').val(
                $(this).attr('data-value')
            );
            $('input[name="wd"]').val('');
            $('input[name="wd"]').attr('placeholder', '输入' + $(this).text())
        });

        // 输入提示
        $(".seach-words").keyup(function () {
            var wd = $('input[name="wd"]').val();
            if (wd.length <= 0) {
                $(".input-prompt").css("display", "none");
            } else {

                $(".input-prompt").css("display", "block");

                $(".input-prompt").html("<li>正在查询中...</li>");
                $.ajax({
                    url: "http://peizizhishu.com/search_refer",
                    data: {
                        "wd": $('input[name="wd"]').val(),
                        "column": $('input[name="column"]').val()
                    },
                    success(ret) {
                        if (ret.data.length <= 0) {
                            $(".input-prompt").html("<li>无查询结果</li>");
                        } else {
                            var html = '';
                            for (let index = 0; index < ret.data.length; index++) {
                                const element = ret.data[index];
                                html += '<a href="/plateform?wd=' + element.text + '&search_token=eyJpdiI6IlJSNGdyK3hGMDF3WHNxS0VkVXpyeVE9PSIsInZhbHVlIjoiYmRKQkptaGhnNUdza3RaS21ScEEzMWhtZTBMOVNuWFwvQSt5Q0M1aU9ERGhuVGdRXC9zN2VNYnlQbG9hNWtkY1N5IiwibWFjIjoiY2FiYzE2YjMwZWYxZjYyYWY0YmE1NDVhYjliMzc1YWFiYTA3OTNlMmU4ODk1YzZhNDY1MGE0MmI0N2NlZGIyYyJ9"><li>' + element.text + '</li></a>';
                            }
                            $(".input-prompt").html(html);
                        }
                    }
                });

            }

        });
    });

</script>

</body>
</html>