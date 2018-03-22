<!DOCTYPE html>
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


                            <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkdin.com"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://www.envelopes.com/"><i class="fa fa-envelope-o"></i></a></li>
                            <li> <a href="index.php"><input type="button"  class="btn btn-info" name ="bn" value="LOGIN" /></a></li>
                            <li><a href="index.php"><input type="button" class="btn btn-warning" name="btn" value="SIGNUP"/></a></li>
 
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
                        <li><a href="conect.php" title="">CONTACT </a></li>
                        <li><a href="about.php" title="">ABOUT US</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php" title="Post">Home</a></li>
                        <li class="active">ABOUT US</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>    
    <main class="site-main category-main">
        <div class="container">
            <div class="row">
                <section class="category-content col-sm-9">
                    <h2 class="category-title">ABOUT US</h2>
                    <ul class="media-list">
                          <li>
                            <div  style="width:800px;height: 500px;background-color:scrollbar;margin-top: 5px">
                                    <p style="color:black;width: 700px;"> <i style="font-size:30px;" class="fa fa-quote-left"></i>
                                        We are the students of atal bihari vajpayee indian institute of information technology and management, gwalior.
                                        basically this app developed  for lung cancer prediction's.we provide  prediction report whether patient is affected by lung cancer or not ,
                                        on the basic of patient ct scans images which user can submit here using his account.
                                  <i style="font-size:30px;" class="fa fa-quote-right"></i>
                                    </p>

                            </div>
                                
                            
                        </li>
                    </ul>                    
                </section>
            
   

                              
                
                           
            </div>
        </div>
     
                     
     
    </main>
           
    <footer class="site-footer">
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
</body>
</html>