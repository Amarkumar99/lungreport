   <?php
          $link = mysqli_connect("localhost", "root","");
          mysqli_select_db($link, "collegeproject");
          
          if(isset($_POST['comm']))
          {
              $c = $_POST['cot'];
             $query = "insert into co(comment) values('$c')";
              if(mysqli_query($link, $query))
               {
                   
                    echo "<script>alert('thank you .....')</script>";
                  echo "<script> window.open('category.php','_self') </script>";


               }

          }
    
    ?>