<?php
  session_start();
        if(!$_SESSION['us'])
        {
        header('location: Adminlogin.php?error=you are not signed user please sign up first');
        }
 ?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lifesearch.info</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/js/bootstrap.min.js" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/js/bootstrap.js" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/js/npm.js">
    
    <link rel="shortcut icon"   href="favicon.ico" type="image/x-icon">
    <link  rel="icon" href="favicon.ico" type="image/x-icon">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    
    <![endif]-->
    <style>
                   #id2{
                          width: 15%;
                          height: 600px;
                          background-color:white;
                          float: left;
                          border: 1px solid  lightgray ;
                    }
                       #id3{
                           float: right;
                           width: 84%;
                           height: 600px;
                           background-color: white;
                           border: 1px solid lightgray;
                       }  
                       #m{
                           display: none;
                       }
                       #n{
                           display: none;
                       }
        
        </style>
</head>
<body>
    <script>
        
             function upload()
            {  
          
                 
                 document.getElementById('m').style.display="block";
                 document.getElementById('n').style.display="none";
                 document.getElementById('request').style.display="none";

            }
    
            function mes()
            { 
                document.getElementById('m').style.display="none";
                document.getElementById('n').style.display="block";
                document.getElementById('request').style.display="none";


            }
        </script>
        <script>
            function   reply()
            {
                 document.getElementById("mw").style.display="block";

                 

                
            }
             function   clo()
            {
                 document.getElementById("mw").style.display="none";

                 

                
            }
            function test()
            {
                document.getElementById('request').style.display="block";
                document.getElementById('n').style.display="none";
                                document.getElementById('m').style.display="none";


                
                
            }
          
            </script>
    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                   
                    <div class="col-sm-6" style="margin-left: 280px; margin-top: 9px;">
                        <ul class="list-inline pull-right">
                             <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href=www.twitter.com><i class="fa fa-twitter"></i></a></li>
                            <li><a href="www.linkdin.com"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.envelopes.com/"><i class="fa fa-envelope-o"></i></a></li>
                           
                        </ul>                        
                    </div>
                 <form method="Post" action="adminlogin.php">
                     <a href="adminlogout.php" style="width: 120px; text-decoration: none; margin-right: 00px;  font-size: 25px;margin-top:px; margin-bottom: 7px; height: 30px;  color:white; float: right"> <img src="img/logout.png" width="100px" height="40px;"/>
</a>
                   </form>
                <span class="glyphicon glyphicon-user"></span><font style="float: right; margin-top: -2px;"><?php echo $_SESSION['us'];  ?> </font>


                </div>
            </div>
        </div>
       
         
                
        <nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
				<a href="index.php" class="navbar-brand">
				</a>
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li class="active"><a href="index.php" title="">HOME</a></li>
                       
                        <li><a href="page.php" title="">PAGE</a></li>
                        <li><a href="category.php" title="">CATEGORY</a></li>
                        <li><a href="#" title="">CONTACT</a></li>
                        <li><a href="#" title="">ABOUT US</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>
         <div id="id2">
                      <input style="margin-left:50px;margin-top: 10px;" type="button" name="message" class="btn btn-info" value="See Messages" onclick="mes()"/>

         <input style="margin-left:50px;margin-top: 10px;" type="button" name="upload" class="btn btn-info" value="upload" onclick="upload()"/>
         <input style="margin-left:50px;margin-top: 10px;" type="button" name="test" class="btn btn-info" value="Request for test" onclick="test()"/><br>
         <a href ="adminreport.php"  style=" margin-left:50px; margin-top: 10px; "><button type="button" name="btn" class="btn btn-info">report</button></a>
               
        </div>
            
            
            
            
            
            
        <div id="id3">
               <div id="n" style=" width: 100%; height:500px; overflow: scroll;background-color: white; display: none;">
                <table border="1" style="width:100%" >           
                    <?php 
                                 $link = mysqli_connect("localhost", "root","");
                                 mysqli_select_db($link, "collegeproject");
          
                                  $query = "select * from message order by  1 DESC";
                                  $run= mysqli_query($link, $query);
                                  while($row= mysqli_fetch_array($run))
                                  {
                                      $email = $row['email'];
                                      $message = $row['mess'];
                                  
                                      
                            
                            ?>
                    <tr >
                            
                        <td> 
                            <b style="margin-left:10px;">USERNAME:</b>
                            <p style="margin-left:10px;" ><?php echo $email; ?></p>  </td>
                        <td>   <b style="margin-left:10px;">MESSAGE:<b>
                                    <p style="margin-left:10px;"><?php echo $message; ?></p>
                                    </td>
                            
                                    <td style="margin-left:10px;"> <input style="margin-left:10px;" type="button" name="reply" class="btn btn-info" value="reply" onclick="reply()"/>
</td>                                          
                         
                             

                    
                    </tr>
                                 
                             <?php   }     ?>   
                </table>

            </div>
            
                
            <div id="request" style="display:none">
              
            <table border="1" style="width:100%" >           
                 <?php 
                                 $link = mysqli_connect("localhost", "root","");
                                 mysqli_select_db($link, "collegeproject");
          
                                  $query = "select * from patient  ";
                                  $run= mysqli_query($link, $query);
                                  while($row= mysqli_fetch_array($run))
                                  {
                                      $name = $row['pname'];
                                      $father = $row['pfname'];
                                       $pemail = $row['email'];
                                       $pdob  = $row['pdob'];
                                       $pbg = $row['gen'];
                                       $pgen = $row['gen'];
                                       $pfilename = $row['filename'];
                                       
                                      
                                      
                            
                            ?>
                <tr>  
                    <td> <b>name:<br>
                            <?php  echo $name; ?>
                                      
                        </b></td>
                        <td> <b>father name:<br>
                            <?php  echo $father; ?>
                                      
                        </b></td>
                        <td> <b>patient email:<br>
                            <?php  echo $pemail; ?>
                                      
                        </b></td>
                        <td> <b>date of birth:<br>
                            <?php  echo $pdob; ?>
                                      
                        </b></td>
                        <td> <b>patient blood group:<br>
                            <?php  echo $pbg; ?>
                                      
                        </b></td>
                        <td> <b>gender:<br>
                            <?php  echo $pgen; ?>
                                      
                        </b></td>
                        <td> <b>filename:<br>
                            <?php  echo $pfilename; ?>
                                      
                        </b></td>
                    
                    
                    
                    
                </tr>
                
                              
              
                             <?php   }     ?>   
                
            </table>
               
                
                
                
                
            </div>
           
            
            
            
        
              
            <div  id="m" style="margin-left:650px;">
         <div id="createform" style="margin-top:30px; margin-left: -850px;">
        <div class="container" style="width:500px;  height: 500px; background-color: #222;">
        <div class="jumbotron" style="heigh:400px; background-color: #222 ">
            <form method="post" action="status.php" enctype="multipart/form-data" style="margin-top:-40px; color: white" >
          <fieldset>
          <center> <legend style="color: white"> UPLOAD STATUS  <span class="glyphicon glyphicon-hand-left"></span></legend></center>
           
           <b >POST TITLE <span class="glyphicon glyphicon-user"></span></b>
           <input type="text"  name="title"  required="required" class="form-control" placeholder="       Post title "/> 
           
           <b >POST ID(only three letters) <span class="glyphicon glyphicon-id"></span></b>
           <input type="text"  name="id"  required="required" class="form-control" placeholder="       id yours status "/>
            <b>Description about post</b>
            <textarea cols="100" rows="5"  name= "d" required="required" class="form-control">
                    

            </textarea>
            <br><b >Upload image </b>
                <input type="file" required ="required"  name = "file" class="form-control"/>   
                <br>
           <input type="submit" class="btn btn-info" value="upload" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset"     class="btn btn-danger" value="Reset" />

                             <br>
               





              

             
            
            
            </fieldset>
      
      
      
       </form>
        </div>
        </div>
         </div>
      
      </div>
            
        
       
        
        
        
        
        
        
        
        </div>
            
            
   
    
 
    
        
        
     


                
                
           
            
        
            
            
            
            
         
            
            
            
            
            
            <div id="mw" style="float:left;margin-right:350px; margin-top: -50px; position: fixed; display: none;">
             <div id="createform" style="margin-top:20px; float: left; margin-top: -180px; position: fixed">
        <div class="container" style="width:400px; height: 250px;  background-color:#222;">
        <div class="jumbotron" style="height:250px; background-color:#222; ">
            <form method="post" action ="adminwork.php" style="margin-top:-40px; ">
                    <fieldset>
                        <center>   <legend style="color: "> reply <span class="glyphicon glyphicon-hand-left"></span></legend></center>
                
               <b >useremail address </b>
               <input type="email"  required ="required"  name="em" class="form-control" />
               <b>Message</b>
               <textarea name="usermessage" rows="2" cols="20" class="form-control"></textarea>
               <br />
            
               <input type="submit" name="sum" class="btn btn-info" value="send">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" style="color:red; text-decoration: none;"
               onclick="clo()" style="text-decoration:none;" > Close</a>                    
   
                        
                    </fieldset>
              </form>
        
            </div>
        </div>
      </div>
   </div>
       <?php 
          $link = mysqli_connect("localhost", "root","");
          mysqli_select_db($link, "collegeproject");
          
         if(isset($_POST['sum']))
         {  
             
               $user_name = $_POST['em'];
              $user_message = $_POST['usermessage'];
             
             
                
             
             
                  if($user_message>=10000)
                  {
                                             echo "<script>alert('message  size is very large')</script>";

                  }
              else {

                   


              $query = "insert into reply(usname,message) values('$user_name','$user_message')";
              if(mysqli_query($link, $query))
              {
                                  echo "<script>alert('message send successfully...')</script>";
                  echo "<script> window.open('adminwork.php','_self')</script>";
 

              }
         
         
              }
         }
    
    ?>
     
            
            
            
            
            
    


            
            
            
            
            
            
            
            
            
      
           

  
</div>
   
    
            
            
    
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });        
    </script>
</body>
</html>

    
    
    



   
   
    
   
