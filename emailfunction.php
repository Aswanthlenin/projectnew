<?php
include('dataconection.php');
if(isset($_POST['Send']))
                         {
                            

   $email= $_POST['email'];
   
   
           $Q=$dbh->prepare("select * from loginform where email=?");
           $EM= array($email);
                          $Ego=$Q->execute($EM);
                          $Eans=$dbh->query($Ego);
                           $Q->setFetchmode(PDO::FETCH_ASSOC);
                          $EML=$Q->fetch();
                          
                           //$password= $EML['password'];
			   
			   if (empty($EML))
			       {
				echo "Invalid email id";
			       }
			       else
			       {
				 //$encrypt=md5($EML['encrypt']);
			       $encrypt=md5($EML['id']);
			       $id=$EML['id'];
			       $I=$dbh->prepare("insert into reset values (?,?)");
			        $IM= array($id,$encrypt);
				$result=$I->execute($IM);  
     			   $to = "$email";
                           $subject = "Reset password";
			   
			     $message="http://localhost/project/confirmpage.php?encrypt=".$encrypt."";
     			    $headers = "MIME-Version: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

 
                            $headers .= 'From: <webmaster@example.com>' . "\r\n";
                            $headers .= 'Cc: myboss@example.com' . "\r\n";

                           mail($to,$subject,$message,$headers);
			       }}
                             ?> 
	
<html>
    <head>
        <body>
            
            <form action="emailfunction.php" method="post" enctype="multipart/form-data">
              Enter your Emailid<input type="text"  name="email" >
              <input type="submit" name="Send"  value="Send" >
            </form>
        </body>
    </head>
</html>





