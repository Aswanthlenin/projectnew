<?php include('dataconection.php'); ?>
<html>
<head>
  
<style type="text/css">
body {
background-color: #f4f4f4;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 16px;
line-height: 1.5em;
}
a { text-decoration: none; }
h1 { font-size: 1em; }
h1, p {
margin-bottom: 10px;
}
strong {
font-weight: bold;
}
.uppercase { text-transform: uppercase; }

#login {
margin: 50px auto;
width: 270px;
}
form fieldset input[type="text"], input[type="password"] {
background-color: #e5e5e5;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color: #5a5656;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 14px;
height: 50px;
outline: none;
padding: 0px 10px;
width: 280px;
-webkit-appearance:none;
}
form fieldset input[type="submit"] {
background-color: #008dde;
border: none;
border-radius: 3px;
-moz-border-radius: 3px;
-webkit-border-radius: 3px;
color:#fff ;
cursor: pointer;
font-family: 'Open Sans', Arial, Helvetica, sans-serif;
font-size: 15px;
height: 50px;
text-transform: uppercase;
width: 300px;
-webkit-appearance:none;
}
form fieldset a {
color: #5a5656;
font-size: 15px;
}




 </style>

</head>
<body>
<div id="login">
<h1><strong>Welcome.</strong> Please login.</h1>
<form action="loginpage.php" method="post">
<fieldset>
<p>Email id<input type="text"  name="email" required value="email" onblur="email()"></p>
<p>Password<input type="password"  name="password" ></p>
<p><a href="emailfunction.php">Forgot Password?</a></p>
<p><input type="submit" name="Login" value="Login"></p>
</fieldset>
</form>

</fieldset>
</form>

</div> 
</body>
</html>