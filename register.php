
<html lang="cn">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex"/>
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
<title>2020</title>
<link href="/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style type="text/css">
		html,body{
		height:100%;
		font-size: 16px;
		background-color: #29abff;
	}
	.form-signin{
		position: absolute;
    	z-index: 999;
		width: 100%;
		height: 100%;
		top: 30%;
		left: 38%;
	}
	.form-signin.checkbox{
		font-weight:300;
	}
	.form-signin.form-control{
		position:relative;
		box-sizing:border-box;
		height:auto;
		padding:10px;
		font-size:16px;
	}
	.form-signin.form-control:focus{
		z-index:.5;
	}


	.form-signin{
		background-color:#f1f1f1;
		width: 550px;
		max-height: 550px;
		border-radius: 15px;
		padding: 50px;
		/* box-shadow: 0 0 15px 10px rgba(0,123,255,.3); */
		box-shadow: 0 0 15px 10px rgba(0,0,0,.2);
	}

	.form-signin .form-title{
		margin-bottom: 50px;
		color: rgba(0,123,255,.7);
	}

	.form-signin .form-item{
		display: flex;
		justify-content: center;
		font-size: 16px;
		margin: 20px;
	}

	.form-signin .form-item label{
		font-size: 16px;
		width: 100px;
		text-align: left;
		padding-top: 5px;
	}

	.form-signin .form-item input{
		font-size: 14px;
	}

	.form-signin .form-item button{
		padding: 10px 70px;
		width: auto;
		font-size: 16px;
	}

	.form-signin .form-submit{
		margin-top: 20px;
	}

	.form-signin .form-footer .register{
		margin-top: 20px;
	}
	.power-by{
		margin-top: 20px;
	}

</style>
<script src="./particles.min.js"></script>
</head>
<body class="text-center">
	<form class="form-signin" method="post" autocomplete="off">
		<h3 class="form-title"> 2020 </h3>
		<div class="form-item">
			<label >账 号</label>
			<input type="text" name="username" class="form-control" placeholder="请输入账号"  required="required">
		</div>
		<div class="form-item">
			<label >密 码</label>
			<input type="password" name="password" class="form-control" placeholder="请输入密码" autocomplete="new-password"  required="required">
		</div>
		<div class="form-item">
			<label >QQ or WX</label>
			<input type="contact" name="contact" class="form-control" placeholder="QQ or WX"  required="required">
		</div>
		<div class="form-item">
			<label >邮 箱</label>
			<input type="email" name="email" class="form-control" placeholder="请输入邮箱"  required="required">
		</div>
		<div class="form-item">
			<label >邀请码</label>
			<input type="code" name="code" class="form-control" placeholder="请输入邀请码" required="required">
		</div>
		<div class="form-item form-submit">
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="regist" value="regist">注册</button>
		</div>
		<div class="form-footer">
			<p class="text-muted power-by">2020</p>
		</div>
	</form>
	<div id="particles-js" style="width:100%;height:100%;position: fixed;"></div>
</body>
<script>particlesJS.load('particles-js', './particles.json', function() {});</script>
</html>