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
		        <div class="input-group">
                    <span class="input-group-addon iconfont icon">&#xe63f;</span>
                    <input type="text" class="form-control" placeholder="邮箱">
                </div>

		        <div class="forgetLine">
                    <div class="floatL color8 button"><span class=" iconfont icon colorB margin10">&#xe69e;</span>同意《拾万客服务协议》</div>
                    <div class="floatR colorB button">直接登录</div>
		        </div>
		        <div class="loginBut button">注 册</div>
			</div>
			<div class="recordDiv">CopyRight © 2008-2017拾万客.沪ICP备00000000号</div>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>