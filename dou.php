 <?php 
          $link = mysqli_connect("localhost", "root","");
          mysqli_select_db($link, "collegeproject");
          
       
              $user_name = $_POST['pn'];
              $user_fname = $_POST['fname'];
              $user_email = $_POST['email'];
              $user_dob = $_POST['dob'];
              $user_bg = $_POST['set'];
              $user_gen = $_POST['gen'];
              $user_filname = $_FILES['file']['name'];
              $user_filtype = $_FILES['file']['type'];
              $tmp = $_FILES['file']['tmp_name'];
                $tmp = $_FILES['file']['tmp_name'];
             
                
                if($user_filname=='')
              {
                  echo "<script>alert('please fill all details')</script>";
                  exit();
              }
              if($user_filtype=='image/jpeg'or $user_filtype=='image/png' or $user_filtype=='image/jpg' or $user_filtype=='image/gif')
              {
                  if($user_filesize<=50000)
                  {
                      move_uploaded_file($tmp,"images/$user_filname");
                  }
              else {
                       echo "<script>alert('image size is very large')</script>";

                   }
              }
 else {
                            echo "<script>alert('invalid file type')</script>";

 }


              $query = "insert into patient(pname,pfname,email,pdob,bg,gen,filename,filetype) values('$user_name','$user_fname','$user_email','$user_dob','$user_bg','$user_gen','$user_filname','$user_filtype')";
              if(mysqli_query($link, $query))
              {
                                  echo "<script>alert('document uploaded successfully')</script>";
                  echo "<script> window.open('main.php','_self')</script>";


              }
         
         
    
    
    ?>
     