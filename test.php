<?php 
	require_once __DIR__ . '/vendor/autoload.php';  
	use Wx\Qrcode;  
 
 	$config =[
		'app_id'  => 'xx',// 评测小程序 微信appid
	 	  'secret'  => 'xx', //评测小程序 
	];
	$mod = new Qrcode($config);
	$base64_image =  $mod->getBase64Img('pages/index/index?qrcode=helloworld');
	//echo $base64_image;exit;
	//exit;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<img src="<?php echo $base64_image;?>">
</body>
</html>