<?php
		
			include('dataconection.php');
                         if(isset($_POST['DONE']))
                         {
                 	   $username = $_POST['username'];
                           $email= $_POST['email'];
                           $password  = $_POST['password'];
                           $confirmpassword  = $_POST['confirmpassword'];
                         
                   
		          $PR=$dbh->prepare("insert into registration values (?,?,?,?,?)");
                          $PRarr=array('',$username,$email,$password,$confirmpassword);
                          $PRresult=$PR->execute($PRarr);
                        
                          $PRQ=$dbh->prepare("insert into loginform values (?,?,?)");
                          $PRARR= array('',$email,$password);
                          $PRRES=$PRQ->execute($PRARR);
                         
                           if($PRresult)
                             {
                            ?> <html>
                                 <head>
			             </head>
			          <body>

		                	<style type="text/css">
                                          body {
                                           background-color: #f4f4f4;
			                       }
			      
			                  h1 { font-size: 1em;
			                  color: #5a5656;
                                          font-family: 'Open Sans', Arial, Helvetica, sans-serif;
                                          font-size: 30px;
			                  padding: 150px 30px;
			                    }
			                 p {
                                          margin-bottom: 10px;
			                  font-family: 'Open Sans', Arial, Helvetica, sans-serif;
			                  font-size: 15px;
			                  padding: 1px 30px;
                                          }
			      	      </style>
					  <h1> <center> REGISTRATION SUCCESS </center></h1>
			                 <p><a href="loginform.php"><b>CLICK TO LOGIN </b></a></p>
				   </body>
			     
			    </html>
                       <?php      
                        }
                        else{
                            
                            "Data not insert";
                            }
              
	               }
              
              
               else
                       {
                        
                       echo " not connected";
                       }
?>
                      
                                    
                               
				

                         
                         
                                    
