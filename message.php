 <?php 
          $link = mysqli_connect("localhost", "root","");
          mysqli_select_db($link, "collegeproject");
          
       
              $user_name = $_POST['useremail'];
              $user_message = $_POST['usermessage'];
             
             
                
             
             
                  if($user_message>=10000)
                  {
                                             echo "<script>alert('message  size is very large')</script>";

                  }
              else {

                   


              $query = "insert into message(email,mess) values('$user_name','$user_message')";
              if(mysqli_query($link, $query))
              {
                                  echo "<script>alert('message send successfully...')</script>";
                  echo "<script> window.open('index.php','_self')</script>";


              }
         
         
              }
    
    ?>
     