
    <html>
    <head>
        
   <link rel="stylesheet" href="style.css">
    <script src="jquery.min.js"></script>
        
 
    
    
    <script>
    $(document).ready(function(){
   $(".button").click(function(e){
     var U=$("#Uname").val();
     var E=$("#eml").val();
     var P=$("#psswd").val();
     var C=$("#Cpsswd").val();
     var letters=/^[A-Za-z]+$/;
     var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
     
     if (U=="") {
   e.preventDefault();
       alert("Username not set ");
     }
     else if ((E=="")||( !E.match(mailformat))){
  e.preventDefault();
      alert("Email id not set ");
      
     }
   
    else if (P=="") {
     e.preventDefault();
      alert("Password not match");
      
      }
     else if ((P!=C)) {
     e.preventDefault();
      alert("Password and confirm passwword are not match");
      
      }
      
      else{
    
       $("#form").submit();
      }
    
    
     
   });
 }); 
    
 //  $(".button").click(function(e){
 //    var U=$("#Uname").val();
 //    var E=$("#eml").val();
 //    var P=$("#psswd").val();
 //    var C=$("#Cpsswd").val();
 //    var letters=/^[A-Za-z]+$/;
 //    var mailformat=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
 //   
 //    
 //    if (U=="") {
 //  e.preventDefault();
 //      alert("Username not set ");
 //    }
 //    else if (E=="") {
 // e.preventDefault();
 //     alert("Email id not set ");
 //    
 //    }
 //    
 //    else if (E.match(mailfunction)) {
 //     e.preventDefault();
 //     alert("invalid format ");
 //     
 //    }
 //    
 //    
 //    else if (P=="") {
 //    e.preventDefault();
 //     alert("Password not match");
 //     
 //     }
 //    else if ((P!=C)) {
 //    e.preventDefault();
 //     alert("Password and confirm passwword are not match");
 //     
 //     }
 //     
 //     else{
 //   
 //      $("#form").submit();
 //     }
 //   
 //   
 //    
 //  });
 //}); 
 //   
    
    
    
        </script>
     </head>
    
<body>
<div class="name">
    <h2><center> REGISTRATION FORM</center> </h2>
</div>
<div class="form">
<form action="regdata.php" id="form" method="post" >

    <table>
    <tr>
 <td>User name</td><td><input id="Uname" type="text" name="username" o></td>
    </tr>
 <tr>
     <td>Email id</td><td> <input type="text" id="eml" name="email"  ></td>
        </tr>
 <tr>
    <td>Password</td> <td> <input  id="psswd"  type="password"  name="password"  ></td>
    </td>
     </tr>
 <tr>
    <td>Confirm Password</td> <td> <input  id="Cpsswd"  type="password"  name="confirmpassword"  o></td>
    </td>
     </tr>

 </table>


<input class="button" type="submit" id="DONE"  name="DONE" value="DONE" style="background-color: #0080FF" >
    
    


 </div>
</form>




</body>
</html>