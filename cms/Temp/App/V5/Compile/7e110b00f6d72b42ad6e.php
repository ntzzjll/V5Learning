<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><html>
	<head>
		<title>后台登录入口</title>
		<script type='text/javascript' src='http://localhost/V5Learning/hdphp/Extend/Org/Jquery/jquery-1.8.2.min.js'></script>
<link href='http://localhost/V5Learning/hdphp/../hdjs/css/hdjs.css' rel='stylesheet' media='screen'>
<script src='http://localhost/V5Learning/hdphp/../hdjs/js/hdjs.js'></script>
<script src='http://localhost/V5Learning/hdphp/../hdjs/js/slide.js'></script>
<script src='http://localhost/V5Learning/hdphp/../hdjs/org/cal/lhgcalendar.min.js'></script>
<script type='text/javascript'>
HOST = '<?php echo $GLOBALS['user']['HOST'];?>';
ROOT = '<?php echo $GLOBALS['user']['ROOT'];?>';
WEB = '<?php echo $GLOBALS['user']['WEB'];?>';
URL = '<?php echo $GLOBALS['user']['URL'];?>';
HDPHP = '<?php echo $GLOBALS['user']['HDPHP'];?>';
HDPHPDATA = '<?php echo $GLOBALS['user']['HDPHPDATA'];?>';
HDPHPTPL = '<?php echo $GLOBALS['user']['HDPHPTPL'];?>';
HDPHPEXTEND = '<?php echo $GLOBALS['user']['HDPHPEXTEND'];?>';
APP = '<?php echo $GLOBALS['user']['APP'];?>';
CONTROL = '<?php echo $GLOBALS['user']['CONTROL'];?>';
METH = '<?php echo $GLOBALS['user']['METH'];?>';
GROUP = '<?php echo $GLOBALS['user']['GROUP'];?>';
TPL = '<?php echo $GLOBALS['user']['TPL'];?>';
CONTROLTPL = '<?php echo $GLOBALS['user']['CONTROLTPL'];?>';
STATIC = '<?php echo $GLOBALS['user']['STATIC'];?>';
PUBLIC = '<?php echo $GLOBALS['user']['PUBLIC'];?>';
</script>
		<link href='http://localhost/V5Learning/hdphp/Extend/Org/bootstrap/css/bootstrap.min.css' rel='stylesheet' media='screen'>
<script src='http://localhost/V5Learning/hdphp/Extend/Org/bootstrap/js/bootstrap.min.js'></script>
                <!--[if lte IE 6]>
                <link rel="stylesheet" type="text/css" href="http://localhost/V5Learning/hdphp/Extend/Org/bootstrap/ie6/css/bootstrap-ie6.css">
                <![endif]-->
                <!--[if lt IE 9]>
                <script src="http://localhost/V5Learning/hdphp/Extend/Org/bootstrap/js/html5shiv.min.js"></script>
                <script src="http://localhost/V5Learning/hdphp/Extend/Org/bootstrap/js/respond.min.js"></script>
                <![endif]-->
		<script type="text/javascript" src="http://localhost/V5Learning/./cms/App/V5/Tpl/Login/js/js.js"></script>
	</head>
	<body>
		<form action="" method="post" class="hd-form">
			<h3>管理员登录</h3>
			<table class="table1">
				<tr>
					<td class="W100">帐号</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>密码</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td colspan="2">
						<input type="submit" value="登录" class="btn btn-primary">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>