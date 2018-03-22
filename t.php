<?php
       $link = mysqli_connect("localhost", "root","");
    mysqli_select_db($link, "adminpanel");
                           $open = $_GET['a'];
                             $query = "select * from status where id='$open' ";
                                  $run= mysqli_query($link, $query);
                                   while($row= mysqli_fetch_array($run))
                                  {
                                       $ti = $row['tit'];
                                       $desc=$row['des'];
                                       $file =$row['filename'];
                                      
                                       
                                    ?>
                                 <li  ><?php echo $ti;  ?></li>
                                <h1 style=""><?php echo $desc;?></h1>
                                <h2 style=""><?php echo $filename;?></h2>
                            
                                     
                                  <?php   }    ?>     
?>