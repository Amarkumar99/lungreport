 <?php 
          $link = mysqli_connect("localhost", "root","");
          mysqli_select_db($link, "adminpanel");
          
              
              $p_name = $_POST['title'];
              $p_des = $_POST['d'];
              $p_id= $_POST['id'];
              $user_filname = $_FILES['file']['name'];
              $user_type = $_FILES['file']['type'];
             $user_filesize = $_FILES['file']['size'];

              $tmp = $_FILES['file']['tmp_name'];
              if($p_name=='' or  $p_des=='')
              {
                  echo "<script>alert('please fill all details')</script>";
                  exit();
              }
              if($user_type=='image/jpeg'or $user_type=='image/png' or $user_type=='image/jpg' or $user_type=='image/gif')
              {
                  if($user_filesize<=5000000  and $p_des>=100)
                  {
                      move_uploaded_file($tmp,"images/$user_filname");
                         $query = "insert into status(id,tit,des,filename) values('$p_id','$p_name','$p_des','$user_filname')";
                      if(mysqli_query($link, $query))
                     {
                                  echo "<script>alert('uploaded status')</script>";
                      echo "<script> window.open('adminwork.php','_self')</script>";


                      }
         
                  }
              else {
                       echo "<script>alert('image size is very large or message is large')</script>";

                   }
              }
 else {
                            echo "<script>alert('invalid file type')</script>";

 }

           
         
    
    
    ?>
     
