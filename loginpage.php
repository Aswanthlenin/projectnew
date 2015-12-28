<?php
		
			include('dataconection.php');
                        
                         if(isset($_POST['Login']))
                         {
                            
                      
			$email=$_POST['email'];
                   
                        $password=$_POST['password'];
                        
                        $PRlog=$dbh->prepare("select *from loginform where email=? and password=?");
                         $PROarr= array($email,$password);
                          $PRgo=$PRlog->execute($PROarr);
                          $Pans=$dbh->query($PRgo);
                           $PRlog->setFetchmode(PDO::FETCH_ASSOC);
                          $PRl=$PRlog->fetch();
                       
                          
                           
                         if ($PRl)
                            {
                               
                           
                  header("Location:displaypage.php");
                
                       }
                   else
            {
                                               
                         header("Location: loginform.php");
                           
                        }                         
                      
                        }
                       
                   
           ?> 