<?php 
	set_time_limit(0);
	ini_set('default_socket_timeout', 300);
	session_start();

	define('client_ID', '477393f935964621b84185fb1c272017');
	define('client_Secret', 'b3b9843feb9d412aab05bc61367737ef');
	define('redirectURI', 'http://localhost:8888/appacademyapi/index.php');
	define('ImageDirectory', 'pictographs/');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="">
	<link rel="author" href="humans.txt">
</head>
<body>
	<a href="https:api.instagram/oauth/authorize/?client_id=<?php echo clientID; ?>&redirect_uri=<?php echo redirectURI ?>&response_type=code">LOGIN</a>
	<script type="js/main.js"></script>
</body>
</html>