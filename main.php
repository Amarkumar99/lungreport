<?php
  session_start();
        if(!$_SESSION['username'])
        {
         header('location: index.php?error=you are not signed user please sign up first');
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
        
        #messager{
             float: right;
             display: none;
            
        }
    </style>
</head>
<body onload="myclock()">
        <?php
        
        $month = 60*60*24*30+time();
        setcookie('user_visit',date("m/d/y"),$month);
        
        ?>
            <?php
            if(isset($_COOKIE['user_visit']))
            {
                
                $last_visit = $_COOKIE['user_visit'];
                echo "<script>alert('Dear visitor your last visit to this site was on  $last_visit ')</script>";
            }
            
            
            
            ?>
    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                   
                    <div class="col-sm-6" style="margin-left: 300px; margin-top: 11px;">
                           <ul style="float:left; margin-left: -320px;list-style: none">
                            
                            <b>   <li> <span><img src="img/Time_Saving-512.png" width="25px" height="25px;"/></span>&nbsp;<span style="color: white; font-size: 15px; margin-left: 5px; margin-top: -35px;" id="clock"></span> &nbsp;<b>:<span  style="color: white; font-size: 15px; margin-left: 5px; margin-top: -35px;"" > <?php echo $d = Date("d-m-y");  ?>(IST)</span>


         
                                </li></b>
                           
                        </ul>
                        <ul class="list-inline pull-right"  >
                             <li><a href="https://www.envelopes.com/"><i class="fa fa-envelope-o"></i></a></li>
                             <li><a href="#-o" onclick="messageme()">MESSAGE</a></li>
                           
                           
                             <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkdin.com"><i class="fa fa-linkedin"></i></a></li>
                           
                        </ul>                        
                    </div>
                    
                    
                    
                                 <script>
             function myclock()
             {
                 time = new Date();
                 hours = time.getHours();
                 min = time.getMinutes();
                 sec = time.getSeconds();
                 
                 if(hours<10)
                 {
                     hours ="0"+hours;
                 }
                 if(min<10)
                 {
                     min ="0"+min;
                 }
                 if(sec<10)
                 {
                     sec ="0"+sec;
                     
                     
                 }
                 document.getElementById("clock").innerHTML= hours+":"+min+":"+sec;
                 timer =  setTimeout(function (){myclock()},500);
                 
               }
        
        
        </script>
                 <form method="Post" action="index.php">
                     <a href="log.php" style="width: 140px; text-decoration: none; margin-right:-60px;  font-size: 25px;margin-top:-10px; margin-bottom: 7px; height: 30px;  color:white; float: right"> <img src="img/logout.png" width="100px" height="40px;"/>
</a>
                   </form>
                    <span class="glyphicon glyphicon-user"></span><font style="float: right; margin-top: -2px;"><?php echo $_SESSION['username'];  ?> </font>
                </div>
            </div>
        </div>
       
         
                
        <nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
				
                                <a href="Report.php?use=<?php echo $_SESSION['username']; ?>" target="blank">
                                <b style="font-size:18px;">  See your report status here <span><img src="img/report-icon.gif" width="60px" height="60px"></span></b>
				</a>
			                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li class="active"><a href="index.php" title="">HOME</a></li>
                      
                        <li><a href="page.php" title="">PAGE</a></li>
                        <li><a href="category.php" title="">CATEGORY</a></li>
                        <li><a href="conect.php" title="">CONTACT</a></li>
                        <li><a href="about.php" title="">ABOUT US</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>
    <div id="s" style="width: 100%;background-image: url(img/Blue-simple-wallpaper-nackgrounds-download.jpg); height: 600px;">
                
        
           <div  style="width:600px;height: 500px;margin-left: 50px;float: left;">
             
               <img src="img/giphy (2).gif" width="600px" height="500" style="margin-top:40px;"/>
              
             
         </div>
        <div id="createform" style="margin-top:40px ;float:right;margin-right: 50px;">
        <div class="container" style="width:500px; height: 500px;">
        <div class="jumbotron" style="height:500px; ">
            <form method="post" action ="dou.php" enctype="multipart/form-data" style="margin-top:-40px; color: black;">
                    <fieldset>
                        <legend style="color: black;;">Fill all details about patient <span class="glyphicon glyphicon-user"></span></legend>
                         <b >Name</b>
                <input type="text"  required ="required" name= "pn" class="form-control"/>
                
                <b> Father Name</b>
                <input type="text"  required ="required" name= "fname" class="form-control"/>
    
    
              <b >Email id or mobile number(same as login user name)</b>
               <input type="email"  required ="required" name= "email" class="form-control"/>
    
               <b >Date of birth</b>
                <input type="date" required ="required"   name= "dob" class="form-control"/>
    
                <b >blood group</b>
                <select  required ="required" name= "set" class="form-control">
                    <option>A(+)</option>
                    <option>B(+)</option>
                    <option>AB(+)</option>
                    <option>O(+)</option>
                    <option>A(-)</option>
                    <option>(B(-)</option>
                     <option>AB(-)</option>
                    <option>O(-)</option>

                    
                </select>
       
              <b>  gender</b> &nbsp; &nbsp;&nbsp;&nbsp;
                Male <input type="radio" required ="required"  checked="checked" name="gen"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                       Female<input name="gen" type="radio"/>
                <br> <br> <b >Upload patient 2D or 3D CT images </b>
                <input type="file" required ="required"  name = "file" class="form-control"/>   
                
                
    
      
                   
    <br />
            
    <input type="submit" name="su" class="btn btn-info" value="upload" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset"     class="btn btn-danger" value="Reset" />
                    
   
                        
                    </fieldset>
                                 </form>

                  </div>
        </div>
        
        
    </div>
      
    </div>
        <script>
            
            function hi()
            {
                 document.getElementById('messager').style.display="none";
                
                
            }
            function messageme()
            {
                
                document.getElementById('messager').style.display="block";
                document.getElementById('messager').style.display="block";

                
            }
            
            </script>
        
            <div id="messager"  style="height:300px;">
            
            
             <div id="createform" style="margin-top:-420px ; height: 340px;">
             <div  style="width:300px; height: 340px; background-color:steelblue;border-left: 1px solid black;">
                 <div style="width:300px;height: 30px;margin-top: -15px;">
                     <h1  style="font-size:20px; color: white;"><b>MESSENGER</b> <a href="#" style="text-decoration:none;  float: right" onclick="hi()">X</a></h1>
                 </div>
                 
                 
             
                 
                 <div style="width:100%;height: 250px; background-color:white; overflow-y: scroll;" >
                         <?php
                                  $link = mysqli_connect("localhost", "root","");
                                  mysqli_select_db($link, "collegeproject");
           
                                  $u = $_SESSION['username'];
                                  $query = "select  *  from  message,reply  where   email='$u' AND usname='$u' ";
                                  $run= mysqli_query($link, $query);
                                  while($row= mysqli_fetch_array($run))
                                  {
                                      $mess1 = $row['message'];
                                      $mess2 =$row['mess'];
                                      
              
                                      
                                     

                                      
                           ?>  
                     <h1 style="float:right; background-color:#0E62FF ;font-size:18px;color:white;"> <?php echo $mess2; ?>  </h1>  
                                      <h2 style="float:left;background-color: gainsboro; font-size:18px;color:black;"> <?php echo $mess1; ?>  </h2>  
                                    
                               
                          <?php  }   ?>
                 
                 
                 
                 
                     
                     
                     
                     
                 </div>
                 <div style="width:300px;height: 60px; background-color:wheat;">
                     <form method="post" action="main.php">
                         <textarea name="me" rows="3" cols="31" placeholder="Type your message here ......"></textarea>
                         <input type="submit" style="float:right; width: 62px;height: 62px;" name="sendmessage" class="btn btn-info" value="Send"/>
                         
                     </form>
                     
                 </div>
                 
                  </div>
        </div>
     </div>
    
        
        

<?php

             $link = mysqli_connect("localhost", "root","");
              mysqli_select_db($link, "collegeproject");
          
               if(isset($_POST['sendmessage']))
               {
                   $user_n = $_SESSION['username'];
               
                   $user_message = $_POST['me'];
             
             
                
             
             
                  if($user_message>=10000)
                  {
                                             echo "<script>alert('message  size is very large')</script>";

                  }
              else {

                   


              $query = "insert into message(email,mess) values('$user_n','$user_message')";
              if(mysqli_query($link, $query))
              {
                                  echo "<script>alert('message send successfully...')</script>";
                  echo "<script> window.open('main.php','_self')</script>";


              }
         
         
              }
               }


?>


     <footer class="site-footer" style=" margin-top:50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 fbox">
                    <h4>COMPANY NAME</h4>
                    <p class="text">Lifesearch.info.pvt.lid </p>
                    <ul class="list-inline">
                        <li><a href="#" title="Post"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" title="Post"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" title="Post"><i class="fa fa-linkedin"></i></a></li>  
                        <li><a href="#" title="Post"><i class="fa fa-google-plus"></i></a></li>                        

                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 fbox"  style="width:150px;">
                    <h4>SERVICES</h4>
                    <ul class="big">
                        <li><a href="category.php" title="">BLOG </a></li><br>
                        <li><a href="index.php" title="">SIGNUP </a></li><br>
                        <li><a href="index.php" title="">SIGNIN</a></li>
                     
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 fbox">
                    <h4>ABOOUT US</h4>
                    <ul class="big">
                        <li><a href="#" title="">AMAR KUMAR </a></li><br>
                        <li><a href="#" title="">VARSHA SACHAN</a></li><br>
                        <li><a href="#" title="">YASH TRIBEWAL </a></li>
                      
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6 fbox" style="margin-left:-70px;width: 500px">
                    <h4>CONTENT</h4>
                    <p class="text"></p>
                    <p><a href="mob:+917049953216"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +91 7049953216,7225916951 , <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> amarkumar.myemail@gmail.com</a></p>
                    <p><a href="mob:+918462876590"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +91 8462876590 </a></p>
                    <p><a href="mob:+918777255883"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> +91 8777255883 </a></p>

                </div>
            </div>
        </div>
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pull-left">&copy; 2017Lifesearch.info</p>
                    </div>
                    <div class="col-md-8">
                        <ul class="list-inline navbar-right">
                            <li><a href="index.php" title="Post">HOME</a></li>
                            <li><a href="page.php" title="Post">PAGE</a></li>
                            <li><a href="category.php" title="Post">CATEGORY</a></li>
                            <li><a href="#" title="Post">ABOUT US</a></li>
                            <li><a href="#" title="Post">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>        
    </footer>
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
