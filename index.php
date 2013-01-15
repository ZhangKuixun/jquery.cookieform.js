<!DOCTYPE HTML>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" >

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="./js/jquery_cookie.js"></script>
<script src="./js/jquery.cookieform.js"></script>
<title></title>
<script type="text/javascript">
$(function(){
  $(".class_form").getcookie();
	$(".class_button").setcookie();

});
</script>
</head>
<body>
<div>
<form id="form_01" action="" class="class_form" >
	<input type="text" id="class_form_01"><br>
	<input type="text" id="class_form_02"><br>
	<input type="text" id="class_form_03"><br>
<button type="button" class="class_button">クッキーに保存</button><br>
</form>
</div>

</body>
</html>
