		<?php
			
			include('dataconection.php');
                         if(isset($_POST['LOGIN']))
                         {
                            
                      
			$email = $_POST['email'];
                        $password = $_POST['password'];
                        
			$PRQ=$dbh->prepare("insert into loginform values (?,?,?)");
                        $PRARR= array('',$email,$password);
                       $PRRES=$PRQ->execute($PRARR);
                     
                       
                        if($PRRES)
                        {
                           
                           echo " INSERT";
                            }
                            
                        
                       else
                       {
                        
                            echo " NOT INSERT";
                       }
                      
	      }
		?>
