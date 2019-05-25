
//导航栏
$("#nav").slide({ type: "menu", titCell: ".nLi", targetCell: ".sub", effect: "slideDown", delayTime: 300, triggerTime: 0, returnDefault: true });

// 登录
function showFormLogin() {
	$('.bac_box').show();
	$('.alert_pop_login').addClass('fangda').show();
}
$('.login').bind('click', function () {
	showFormLogin();
});

function showFormRegister() {
	$('.bac_box').show();
	$('.alert_pop_register').addClass('fangda').show();
}
//注册
$('.reg').bind('click', function () {
	showFormRegister();
});
//关闭弹窗
$('.pz-colse').click(function () {
	$('.bac_box').fadeOut();
	$('.alert_pop_login').removeClass('fangda').fadeOut();
	$('.alert_pop_register').removeClass('fangda').fadeOut();

});

// hover二维码
$('.shejiao-item').hover(function () {
	$(this).find('img').toggle()
});

$('#loginSubmit').click(function () {
	var loginForm = $('#loginForm').serialize();
	$.post('/ajax_login', loginForm, function (res) {
		if (res.code === 'success') {
			window.location.reload();
		} else {
			$('#loginFormError').show();
		}
	})
});


$('#registerSubmit').click(function () {
	var registerForm = $('#registerForm').serialize();
	$.post('/ajax_register', registerForm, function (res) {
		console.log(res);
		if (res.code === 'success') {
			window.location.reload();
		} else {
			$('#registerFormError').text(res.msg);
			$('#registerFormError').show();
		}
	})
});

//预警首页鼠标悬浮状态
$('.yujing-item').hover(function(){
    $(this).find('.yunjing-decorate').css({
        'background': '#ff9a04',
        'width': '16px',
        'height': '16px',
        'top': '14px',
        'left': '-12px',
    })
},function(){
    $(this).find('.yunjing-decorate').css({
        'background': '#d7d9d9',
        'width': '8px',
        'height': '8px',
        'top': '18px',
        'left': '-8px',
    })
}); 
