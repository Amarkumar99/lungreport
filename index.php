<?php
   session_start();

?>

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
    <link href="bootstrap-3.3.7-dist/js/bootstrap.min.js" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/js/bootstrap.js" rel="stylesheet">
    <link href="bootstrap-3.3.7-dist/js/npm.js">
    
    <link rel="shortcut icon"   href="favicon.ico" type="image/x-icon">
    <link  rel="icon" href="favicon.ico" type="image/x-icon">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>2
        h6{
             position: fixed;
             margin-left: -285px;
            
        }
        h6:hover{
            margin-left: 10px;
            z-index: 5;
            position: relative;
        }
       
        #msa{
            display: none;
        }
        #msaa:hover{
            display: none;
        }
    </style>
        
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

document.getElementById("p1").style.display="none";
                   document.getElementById("p2").style.display="block";



            }</script>
        
        <script>
               function lo(){
                   document.getElementById("mm").style.display="block";
                   document.getElementById("p1").style.display="block";
                   document.getElementById("p2").style.display="none";

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
                                    <img src="img/a.png" width="220" height="80" alt=""/>
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
            <div id="ma">
    <main class="site-main">
        <section class="hero_area">
            <div class="hero_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1></h1>
                            <h2></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script>
            function   mess()
            {
                 document.getElementById("msa").style.display="block";
                 document.getElementById("ha").style.display="none";

                 

                
            }
             function   clo()
            {
                 document.getElementById("msa").style.display="none";
                 document.getElementById("ha").style.display="block";

                 

                
            }
            
            </script>
            <h6 style="float: left; font-size:25px;" id="ha"><span class="fa fa-envelope-o"></span><a href="#" onclick="mess()" style="text-decoration:none;" > Leave Message Here</a> <span><img  src="img/MessagesIcon.png" id="msaa" style="margin-top:-55px; width:100px; height: 100px;"/></span> </h6>
        
   
            <div id="msa" style="z-index:5;position:relative;" >
             <div id="createform" style="margin-top:50px; float: left; margin-top: -180px; position: fixed">
        <div class="container" style="width:400px; height: 250px;  background-color:#222;">
        <div class="jumbotron" style="height:250px; background-color:#222; ">
            <form method="post" action ="message.php" style="margin-top:-40px; color: white">
                    <fieldset>
                        <center>   <legend style="color: white"> Leave message <span class="glyphicon glyphicon-hand-left"></span></legend></center>
                
               <b >Email address </b>
               <input type="email"  required ="required" name= "useremail" class="form-control"/>
               <b>Message</b>
               <textarea name="usermessage" rows="2" cols="20" class="form-control"></textarea>
               <br />
            
               <input type="submit" name="su" class="btn btn-info" value="send">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="#" style="color:red; text-decoration: none;"
               onclick="clo()" style="text-decoration:none;" > Close</a>                    
   
                        
                    </fieldset>
              </form>
            </div>
        </div>
      </div>
   </div>
  
        
        
        
        
        
        
        
     
        <section class="home-area">
            <div class="home_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12"><h2 class="sub_title">LATEST NEWS ABOUT LUNG CANCER</h2></div>
                        <div class="home_list">
                          
                            <ul>
                                  <?php 
                                 $link = mysqli_connect("localhost", "root","");
                                 mysqli_select_db($link, "adminpanel");
          
                                  $query = "select * from status order by rand() LIMIT 0,4";
                                  $run= mysqli_query($link, $query);
                                  while($row= mysqli_fetch_array($run))
                                  {
                                      $ti = $row['tit'];
                                      $desc =substr($row['des'],0,180);
                                      $im = $row['filename'];
                                  
                                      
                            
                            ?>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="images/<?php echo $im; ?>"  style=" margin-left:0px; width: 350px; height: 200px;"/>
                                        <br>
                                        <div class="caption">
                                            <h3><a href="#"><?php echo $ti; ?></a></h3>
                                            <p><?php echo $desc;  ?>...</p>
                                            <a href="category.php" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>
                               
                                 
                             <?php   }     ?>                         
                            </ul>
                        </div>
                        
                        <div class="col-sm-9 home_bottom">
                            
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </section>
    </main>
    </div>
     <div id="mylog" >
         <div id="newbox">
             <div style="width: 550px; height: 400px;float: right;margin-top: 50px;margin-right: 110px;"> 
                 <p style="color: gainsboro;"> <i style="font-size:30px;" class="fa fa-quote-left"></i>Smoking is the biggest risk factor for all heart diseases. It accelerates the process of fat deposition in the inner walls of arteries (atherosclerosis). It increases blood pressure and heart rate. Not only these, smoking increases tendency for the blood to clot. It reduces the capacity of a person to exercise.Smoking destroys small hairs present in upper parts of airways.Your lungs can be very badly affected by smoking. Coughs, colds, wheezing and asthma are just the start. Smoking can cause fatal diseases such as pneumonia, emphysema and lung cancer. Smoking causes 84% of deaths from lung cancer and 83% of deaths from chronic obstructive pulmonary disease (COPD).
COPD, a progressive and debilitating disease, is the name for a collection of lung diseases including chronic bronchitis and emphysema. People with COPD have difficulties breathing, primarily due to the narrowing of their airways and destruction of lung tissue. Typical symptoms of COPD include: increasing breathlessness when active, a persistent cough with phlegm and frequent chest infections.
Whilst the early signs of COPD can often be dismissed as a ‘smoker’s cough’, if people continue smoking and the condition worsens, it can greatly impact on their quality of life. 
 In normal persons these hairs protect lungs from germs, dust and other harmful particles. When this natural cleaning system is damaged germs, dust, smoke and other harmful chemicals enter lungs causing infection, cough and lung cancer. The air sacs of lungs (alveoli) get permanently damaged causing difficulty in breathing. (Exercises always keep heart healthy).<i style="font-size:30px;" class= "fa fa-quote-right"></i></p>
             <h1 style="color: white; font-size: 25px;float: right;margin-right:240px;"> </h1>
                 <h2 style="color: white; font-size: 15px;float: right;margin-right:20px;margin-top: -5px;">  </h2>
             
             </div>
         </div>
         
         
         
         <div  style="width:600px;height: 500px;margin-left: 50px; display: none;float: left;" id="p1">
             <br><br>
             <img src="img/giphy_1.gif"/>
              
             
         </div>
                      <div  style="width:600px;height: 500px;margin-left: 50px; display: none;float: left;" id="p2">
             <br>
              <p style="color: wheat;"> <i style="font-size:30px;" class="fa fa-quote-left"></i>Smoking is the biggest risk factor for all heart diseases. It accelerates the process of fat deposition in the inner walls of arteries (atherosclerosis). It increases blood pressure and heart rate. Not only these, smoking increases tendency for the blood to clot. It reduces the capacity of a person to exercise.Smoking destroys small hairs present in upper parts of airways.Your lungs can be very badly affected by smoking. Coughs, colds, wheezing and asthma are just the start. Smoking can cause fatal diseases such as pneumonia, emphysema and lung cancer. Smoking causes 84% of deaths from lung cancer and 83% of deaths from chronic obstructive pulmonary disease (COPD).
COPD, a progressive and debilitating disease, is the name for a collection of lung diseases including chronic bronchitis and emphysema. People with COPD have difficulties breathing, primarily due to the narrowing of their airways and destruction of lung tissue. Typical symptoms of COPD include: increasing breathlessness when active, a persistent cough with phlegm and frequent chest infections.
Whilst the early signs of COPD can often be dismissed as a ‘smoker’s cough’, if people continue smoking and the condition worsens, it can greatly impact on their quality of life. 
 . When this natural cleaning system is damaged germs, dust, smoke and other harmful chemicals enter lungs causing infection, cough and lung cancer. The air sacs of lungs (alveoli) get permanently damaged causing difficulty in breathing. (Exercises always keep heart healthy).<i style="font-size:30px;" class= "fa fa-quote-right"></i></p>
             
             
         </div>
     
    
      <div  id="mm">
         <div id="createform" style="margin-top:60px; width: 400px; margin-left: -100px;">
        <div class="container" style="width:450px;  height: 300px;">
        <div class="jumbotron" style="height:300px;  ">
        <form method="post" action="index.php" style="margin-top:-40px; color: black;" >
          <fieldset>
          <center> <legend style="color: black;"> LOGIN HERE  <span class="glyphicon glyphicon-hand-left"></span></legend></center>
           
           <b >USER NAME ID <span class="glyphicon glyphicon-user"></span></b>
           <input type="email"  name="username"  required="required" class="form-control" placeholder="       PLEASE ENTER YOUR USER NAME "/> 
            <b>PASSWORD</b>
            <input type="password"  required ="required" name="pass" class="form-control" placeholder="      PLEASE ENTER YOUR PASSWORD"/><br>
          
               
            <button type="submit" style="width: 78px;height: 34px;" class="btn-danger" name="sub"><b>LOGIN</b></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset"     class="btn btn-info" value="Reset" />

                             <br>
               
                             <b style="font-size: 15px;">CLICK HERE FOR SIGN UP <span class="glyphicon glyphicon-hand-right"> <input type="button"     class="btn btn-link" value="SIGNUP" onclick="logina()" /></span></b>





              

             
            
            
            </fieldset>
      
      
      
       </form>
        </div>
        </div>
         </div>
      
      </div>
     </div>
       <?php
          $link = mysqli_connect("localhost", "root","");
          mysqli_select_db($link, "collegeproject");
          if(isset($_POST['sub']))
          {
             $usna = $_SESSION['username']= $_POST['username'];
             $uspa = $_POST['pass'];
             
             $result="select * from sign  where email='".$usna."' AND password='".$uspa."'" ;
             $rs = mysqli_query($link, $result);
                        if(mysqli_num_rows($rs)>0)   
                             
                              {
                            
                                echo "<script> window.open('main.php','_self')</script>";
                 
                               }
                             else {
                             echo "<script> alert('your password or email address invalid')</script>";
                                 }
          }
     ?>
        
        
        
    <div  id="sm" >
          <div id="createform" style="margin-top:-100px; position: absolute;  ">
          <div class="container" style="width:500px;  margin-top:px; height: 500px; ">
          <div class="jumbotron" style="height:550px; ">
              <form method="post" action="index.php" style="color:black;" >
          <fieldset>
              <center> <legend style="color:black;"> SIGNUP HERE <span class="glyphicon glyphicon-hand-left"> </span></legend></center>
            <b>NAME</b>
            <input type="text" required ="required" name="name"  class="form-control" placeholder="     ENTER YOUR FULL NAME" /> 
            <b>EMAIL OR PHONE NUMBER</b>
            <input type="text" required ="required" name="email" class="form-control" placeholder="     ENTER YOUR EMAIL OR MOBILE NUMBER"/>
            <b>COUNTRY</b>
            <input type="text" required ="required" name="country" class="form-control" placeholder="     ENTER YOUR COUNTRY"/>
            <b>PASSWORD</b>
            <input type="password" required ="required" name="password" class="form-control" placeholder="     CHOOSE YOUR PASSWORD"/>
            <b>REENTER PASSWORD</b>
            <input type="password" required ="required" name="pass" class="form-control" placeholder="     RE-ENTER YOUR PASSWORD"/>
            <b>DATE OF BIRTH </b>
            <input type="date" class="form-control" required ="required" name="age" />


                
            <br>
             <button type="submit" class="btn btn-danger"  name="sb" id="btn"><b>SIGNUP</b></button>
              
              &nbsp; &nbsp; &nbsp; &nbsp;
               <input type="reset"     class="btn btn-info" value="Reset" />
                             <br><br>
                             
               
            
                             <b style="font-size: 15px;">CLICK HERE FOR LOGIN <span class="glyphicon glyphicon-hand-right"> <input type="button"     class="btn btn-link" value="LOGIN"  onclick="singa()"/></span></b>


    

             
            
            
            </fieldset>
      
      
      
       </form>
        </div></div></div>
      </div>
        <?php
        
          $link = mysqli_connect("localhost", "root","");
          mysqli_select_db($link, "collegeproject");
          
          if(isset($_POST['sb']))
          {
              
              
              
              $user_name =$_POST['name'];
              $user_email =$_POST['email'];
              $user_country =$_POST['country'];
              $user_password=$_POST['password'];
              $user_pass =$_POST['pass'];
              $user_age =$_POST['age'];
    
             
   
                
                
               
                           
     if(strlen($user_pass)<=8)  
     {
          echo "<script>alert('your password is very low please try another')</script>";

                    
     }
     else
                    
     {  
                                 
           if($user_password==$user_pass )
           { 
                                     
                    
                   
                   
                        $query = "insert into sign(name,email,country,password,dob) values('$user_name','$user_email','$user_country','$user_password','$user_age')";
                        if(mysqli_query($link, $query))
                        {
                           echo "<script>alert('sign up is successfully done')</script>";

                        }
                     
                    
            }
            else
            {
               echo "<script>alert('password not matched please fill details futher')</script>";
                
            }
          
          
    }
                }                   
        
             
        
        
        ?>
      
    
    </div>
   
    <script>
        function logina()
        {
            document.getElementById("mm").style.display ="none";
            document.getElementById("sm").style.display ="block";

            
        }
            function singa()
        {
            document.getElementById("sm").style.display ="none";
            document.getElementById("mm").style.display ="block";

            
        }
        
   </script>
     
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