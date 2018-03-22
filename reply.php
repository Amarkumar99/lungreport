<?php
      if(isset($_POST['sum']))
      {
          $to = $_POST['em'];
          $me =$_POST['usermessage'];
          
          mail($to,$me,'form: amarkannojee@gmail.com');
      }


   ?>