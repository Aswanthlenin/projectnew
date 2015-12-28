
<?php

session_start();

?>
<html>
<body>
    <style type="text/css">
body {
background-color: #f4f4f4;
}
 </style>
<form action="resetpassword.php" method="post">

 <table>
    <tr>
   
 
 <tr><td>Password  </td><td><input type="password" name="password"></td><br/> </tr> 
 <tr><td>Confirm Password </td><td><input type="password" name="confirmpassword"></td> </tr> 

  
  </tr>  </table>
 <input type="submit" name="CHANGE"  value="CHANGE" style="background-color: #FF6347" >
    </form>
</body>
</html>
    <?php
		
			include('dataconection.php');
		    
                         if(isset($_POST['CHANGE']))
                         {
                            $id=$_SESSION['id'];
                      
			$password = $_POST['password'];
                        $confirmpassword  = $_POST['confirmpassword'];
		    if($confirmpassword==$password)
		    {
                        $chnge=$dbh->prepare("update loginform set password=? where id=?");
                         $charr= array($password ,$id);
                          $chgo=$chnge->execute($charr);
                         
                        
                           if($chgo)
                           {
			    ?>
			    <script>alert('password changed');</script>
			    <?php
                            
                            header("Location: loginform.php");
                            
                          
                           }
		    }
                        else
                          {
                           ?>
			    <script>alert('password mismatch');</script>
			   
			   <?php
                             header("Location: resetpassword.php");  
                              
                          }
			 }
                          
                         
                         ?>