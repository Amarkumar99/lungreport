<?php
   session_start();

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
</head>
<body onload="myclock()">
    <header class="site-header">
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p></p>
                    </div>
                    <div class="col-sm-6">
                        <ul style="float:left; margin-left: -600px;list-style: none">
                            
                            <b>   <li> <span><img src="img/Time_Saving-512.png" width="25px" height="25px;"/></span>&nbsp;<span style="color: white; font-size: 15px; margin-left: 5px; margin-top: -35px;" id="clock"></span> &nbsp;<b>:<span  style="color: white; font-size: 15px; margin-left: 5px; margin-top: -35px;"" > <?php echo $d = Date("d-m-y");  ?>(IST)</span>


         
                                </li></b>
                           
                        </ul>
                        <ul class="list-inline pull-right">


                            <li><a href="www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href=www.twitter.com><i class="fa fa-twitter"></i></a></li>
                            <li><a href="www.linkdin.com"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.envelopes.com/"><i class="fa fa-envelope-o"></i></a></li>
                            <li><input type="button"  class="btn btn-info" name ="bn" value="LOGIN" onclick="lo()"/></li>
                            <li><input type="button" class="btn btn-warning" name="btn" value="SIGNUP" onclick="sign()"/></li>
 
                        </ul>                        
                    </div>
                </div>
            </div>
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
        <script>
            function sign(){
                   document.getElementById("sm").style.display="block";
                   document.getElementById("mm").style.display="none";
                   document.getElementById("ma").style.display="none";
                   document.getElementById("newbox").style.display="none";





            }</script>
        
        <script>
               function lo(){
                   document.getElementById("mm").style.display="block";

                   document.getElementById("sm").style.display="none";
                   document.getElementById("newbox").style.display="none";

                   document.getElementById("ma").style.display="none";

 
            }
            
        
        </script>
             
        <nav class="navbar navbar-default" >
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
				<a href="index.php" class="navbar-brand">
				</a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">

                    <ul class="nav navbar-nav main-navbar-nav">
                        <li class="active"><a href="index.php" title="">HOME</a></li>
                        <li class="dropdown">
                         <!---   <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DROPDOWN MENU <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="">SUB MENU 1</a></li>
                                <li><a href="#" title="">SUB MENU 2</a></li>
                                <li><a href="#" title="">SUB MENU 3</a></li>
                            </ul>--->
                        </li>
                        <li><a href="page.php" title="">PAGE</a></li>
                        <li><a href="category.php" title="">CATEGORY</a></li>
                        <li><a href="#" title="">CONTACT </a></li>
                        <li><a href="#" title="">ABOUT US</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>
    
    
    
    
    <div class="mys" style=" position: absolute;height: 500px;margin-top: -10px; width: 100%;">
       <div id="createform" style="margin-top:50px;">
        <div class="container" style="width:400px; height: 250px;  background-color:#222;">
        <div class="jumbotron" style="height:250px; background-color:#222; ">
            <form method="post" action ="adminlogin.php" style="margin-top:-40px; color: white">
                    <fieldset>
                        <center>   <legend style="color: white"> ADMIN LOGIN HERE <span class="glyphicon glyphicon-hand-left"></span></legend></center>
                
               <b >USER NAME ID </b>
               <input type="email"  required ="required" name= "email" class="form-control"/>
               <b>PASSWORD</b>
               <input type="password"  required ="required" name= "pass" class="form-control"/>

               
       
                
    
      
    
    <br />
            
    <button type="submit" name="su" class="btn btn-danger" value="LOGIN">LOGIN</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="reset"     class="btn btn-info" value="Reset" />
                    
   
                        
                    </fieldset>
            </form>
                  </div>
        </div>
        
        
    </div>
    
        
        
     
     </div>
   <?php
          $link = mysqli_connect("localhost", "root","");
          mysqli_select_db($link, "adminpanel");
          
          if(isset($_POST['su']))
          {   $us = $_SESSION['us']=  $_POST['email'];
             $up = $_POST['pass'];
             
             $result="select * from ad  where username='".$us."' AND password='".$up."'" ;
                   $rs = mysqli_query($link, $result);
                      if(mysqli_num_rows($rs)>0)   
                             
                             {
                            

                              echo "<script> window.open('adminwork.php','_self')</script>";
                     
                             }
             else {
             echo "<script> alert('your password or email address invalid')</script>";
            }
          }
          
     ?>


   
   
    <div id="copyright" style="margin-top:490px;">
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
