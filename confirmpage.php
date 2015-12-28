<?php
session_start();
include('dataconection.php');
$EPASS=$_GET['encrypt'];


                         $R=$dbh->prepare("select * from reset where encrypt=?");
                         $RA= array($EPASS);
                          $EN=$R->execute($RA);
                          $Eans=$dbh->query($EN);
                           $R->setFetchmode(PDO::FETCH_ASSOC);
                          $RESET=$R->fetch();
                          
                           if (empty($RESET))
			       {
				echo " cant be connected";
			       }
                          else
                          {
			   
			   $_SESSION['id']=$RESET['id'];
                           header("Location: resetpassword.php");
                          }

?>