<?php include('otpp.php'); ?>
<html>
<head>
<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 30%;
  margin: 110px auto 0px;
  color: white;
  background: #5F9EA0;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 23px 0px 10px 0px;
}
.input-group label {
	margin-top:20px;
  display: block;
  text-align: left;
  margin: 3px;
  font-size:20px;
  font-family:times new roman;
}
.input-group input,select {
	
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
	margin-top:10px;
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
button[type="submit"]:hover
{
background:#030841;
color:white;
}
</style>
</head>
<body>
<div class="header">
  	<form method="post" action="">
  	<div class="input-group">
  	  <label>Enter OTP:</label>
  	  <input type="text" name="name">
  	</div>
	<div class="input-group">
  	  <button type="submit" class="btn" name="verify">Verify</button>
  	</div>
  </form>
</body>
</html>