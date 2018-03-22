
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
    
          
    <div  id="report"  style=" width: 100%;height: 500px;">
         <div id="createform" style="margin-left: 100px; ">
          <div class="container" style="width:500px;  margin-top:px; height: 800px; ">
          <div class="jumbotron" style="height:800px; ">
              <form method="post" action="adminreport.php" style="color:black;" >
          <fieldset>
              <center> <legend style="color:black;"> REPORT BY ADMIN <span class="glyphicon glyphicon-hand-left"> </span></legend></center>
            <b> PATIENT NAME</b>
            <input type="text" required ="required" name="n"  class="form-control" placeholder="   " /> 
            <b>PATIENT FATHER NAME</b>
            <input type="text" required ="required" name="fn" class="form-control" placeholder="     "/>
            <b>EMAIL ADDRESS</b>
            <input type="text" required ="required" name="em" class="form-control" placeholder="     "/>
            <b>PATIENT AGE</b>
            <input type="text" required ="required" name="ag" class="form-control" placeholder="    "/>

            <b>PATIENT BLOOD GROUP</b>
            <input type="text" required ="required" name="blood" class="form-control" placeholder="     "/>
            <b>PATIENT GENDER </b>
            <input type="text" required ="required" name="pg" class="form-control" placeholder="     "/>
            <b>DATE </b>
            <input type="date" required ="required" name="da" class="form-control" placeholder="     "/>
            <b>TIME </b>
            <input type="time" required ="required" name="ti" class="form-control" placeholder="     "/>
            <b>TEST REFERENCE BY </b>
            <input type="text" required ="required" name="re" class="form-control" placeholder="     "/>
            <b>RESULT </b>
            <input type="text" required ="required" name="rs" class="form-control" placeholder="    "/>


                
            <br>
             <button type="submit" class="btn btn-danger"  name="rsub" id="btn"><b>SUBMIT</b></button>
              
              &nbsp; &nbsp; &nbsp; &nbsp;
               <input type="reset"     class="btn btn-info" value="Reset" />
                             <br><br>
                             
               
            


    

             
            
            
            </fieldset>
      
      
      
       </form>
        </div></div></div>
        
      </div>
    
    
   
     <?php
        
          $link = mysqli_connect("localhost", "root","");
          mysqli_select_db($link, "adminpanel");
          
          if(isset($_POST['rsub']))
          {
              
              
              
              $uname =$_POST['n'];
              $ufn =$_POST['fn'];
              $uem =$_POST['em'];
             $uage=$_POST['ag'];
              $ublood =$_POST['blood'];
             $ugender =$_POST['pg'];
             $udate =$_POST['da'];
              $utime=$_POST['ti'];
              $uref =$_POST['re'];
             $uresult =$_POST['rs'];
              
              
              
                           
              
                $query = "insert into report(name,fname,email,age,blood,gender,date,time,ref,result) values('$uname','$ufn','$uem','$uage','$ublood','$ugender','$udate','$utime','$uref','$uresult')";
               if(mysqli_query($link, $query))
               {
                                     echo "<script>alert('submitted successfully')</script>";

                }
               else {
                      echo "<script>alert('its contain blank field please fill futher details')</script>";

                    }
              
       
         
          
          
                }
          
  ?>
      
    
        
        
     


   
   
    <div id="copyright" style="margin-top:300px;">
             <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p class="pull-left">&copy; 2017Lifesearch.info.pvt.lid</p>
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
