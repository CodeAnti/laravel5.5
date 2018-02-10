<html>
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>登录</title>
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
        <link href="{{ mix('/css/business/mini_program/back_end/login.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="login">
			<div class="logoPlace">拾  万  客</div>
			<div class="inputGroup">
				<div class="input-group">
		            <span class="input-group-addon iconfont icon ">&#xe601;</span>
		            <input type="text" class="form-control" placeholder="用户名">
		        </div>
		        <div class="input-group">
		            <span class="input-group-addon iconfont icon">&#xe61b;</span>
		            <input type="text" class="form-control" placeholder="密码">
		        </div>

		        <div class="forgetLine">
                    <div class="floatL color8 button">忘记密码？</div>
                    <div class="floatR colorB button">新用户注册</div>
		        </div>
		        <div class="loginBut button">登 录</div>
		        <span class=" iconfont icon qqBut button">&#xe73e;</span>
		        <span class=" iconfont icon weixinBut button">&#xe73b;</span>

			</div>
			<div class="recordDiv">CopyRight © 2008-2017拾万客.<a target="_blank" href="http://www.miitbeian.gov.cn">苏ICP备17064715号-3</a></div>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
