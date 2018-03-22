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
                            <li><a href=https://www.twitter.com><i class="fa fa-twitter"></i></a></li>
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
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Page Title</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-9">
                    <h2 class="page-title">INFORMATION ABOUT LUNG CANCER</h2>
                    <div class="entry">
                        <b style="font-size: 18px;color:blue;">What is the lung cancer?</b>
                        <p>Lung cancer is the uncontrolled growth of abnormal cells that start off in one or both lungs; usually in the cells that line the air passages. The abnormal cells do not develop into healthy lung tissue, they divide rapidly and form tumors.

As tumors become larger and more numerous, they undermine the lung’s ability to provide the bloodstream with oxygen. Tumors that remain in one place and do not appear to spread are known as “benign tumors”.
                  Malignant tumors, the more dangerous ones, spread to other parts of the body either through the bloodstream or the lymphatic system. Metastasis refers to cancer spreading beyond its site of origin to other parts of the body. When cancer spreads it is much harder to treat successfully.

Primary lung cancer originates in the lungs, while secondary lung cancer starts somewhere else in the body, metastasizes, and reaches the lungs. They are considered different types of cancers and are not treated in the same way.

According to the National Cancer Institute, by the end of 2015 there will have been 221,200 new lung cancer diagnoses and 158,040 lung-cancer related deaths in the USA.

According to the World Health Organization (WHO), 7.6 million deaths globally each year are caused by cancer; cancer represents 13% of all global deaths. As seen below, lung cancer is by far the number one cancer killer.
                        </p>
                        <b style="font-size: 18px;color:blue;" >Total deaths worldwide caused by cancer each year</b>
                        <p>
                            Lung cancer - 1,370,000 deaths<br>
                            Stomach cancer - 736,000 deaths<br>
                            Liver cancer - 695,000 deaths<br>
                            Colorectal cancer - 608,000 deaths<br>
                            Breast cancer - 458,000 deaths<br>
                            Cervical cancer - 275,000 deaths<br>
                        </p>
                        <p>The American Cancer Society says that lung cancer makes up 14% of all newly diagnosed cancers in the USA today. It adds that annually, more patients die from lung cancer alone than prostate, breast and colon cancers combined (in the USA).

An American man’s lifetime risk of developing lung cancer is 1 in 13; for a woman the risk is 1 in 16. These risk figures are for all US adults, including smokers, ex-smokers and non-smokers. The risk for a regular smoker is dramatically higher.

Most lung cancer patients are over the age of 60 years when they are diagnosed. Lung cancer takes several years to reach a level where symptoms are felt and the sufferer decides to seek medical help.</p>
     
                        <b style="font-size: 18px;color:blue;" >What causes cancer?</b>
                        <p>Cancer is ultimately the result of cells that uncontrollably grow and do not die. Normal cells in the body follow an orderly path of growth, division, and death. Programmed cell death is called apoptosis, and when this process breaks down, cancer begins to form. Unlike regular cells, cancer cells do not experience programmatic death and instead continue to grow and divide. This leads to a mass of abnormal cells that grows out of control.

Lung cancer occurs when a lung cell's gene mutation makes the cell unable to correct DNA damage and unable to commit suicide. Mutations can occur for a variety of reasons. Most lung cancers are the result of inhaling carcinogenic substances.</p>
 
                        <b style="font-size: 18px;color:blue;">Signs and symptoms</b> <br>   
                        <b style="font-size: 18px;color:black;">1.Cough that won't quit</b>
                        <p>Be on alert for a new cough that lingers. A cough associated with a cold or respiratory infection will go away in a week or two, but a persistent cough that lingers can be a symptom of lung cancer. Don’t be tempted to dismiss a stubborn cough, whether it’s dry or produces mucus. See your doctor right away. They will listen to your lungs and may order an X-ray or other tests.</p>
                                             <b style="font-size: 18px;color:black;">2.Change in a couch</b>
                                             <p>
                                                 Pay attention to any changes in a chronic cough, particularly if you smoke. If you’re coughing more often, your cough is deeper or sounds hoarse, or you’re coughing up blood or an unusual amount of mucus, it’s time to make a doctor’s appointment. If a family member or friend experiences these changes, suggest that they visit their doctor.


                                                 
                                             </p>
                                             <b style="font-size: 18px;color:black;">3.Breathing changes</b>
                                             <p>
                                                 Shortness of breath or becoming easily winded are also possible symptoms of lung cancer. Changes in breathing can occur if lung cancer blocks or narrows an airway, or if fluid from a lung tumor builds up in the chest.

Make a point of noticing when you feel winded or short of breath. If you find it difficult to breathe after climbing stairs or performing tasks you once found easy, don’t ignore it.
                                             </p>
                                             <b style="font-size: 18px;color:black;">4.Pain in the chest area</b>
                                             <p>Lung cancer may produce pain in the chest, shoulders, or back. An aching feeling may not be associated with coughing. Tell your doctor if you notice any type of chest pain, whether it’s sharp, dull, constant, or intermittent. You should also note whether it’s confined to a specific area or occurring throughout your chest. When lung cancer causes chest pain, the discomfort may result from enlarged lymph nodes or metastasis to the chest wall, the lining around the lungs, called pleura, or the ribs.</p>
                                             <b style="font-size: 18px;color:black;">5.Wheezing</b>
                                             <p>
                                                 When airways become constricted, blocked, or inflamed, the lungs produce a wheezing or whistling sound when you breathe. Wheezing can be associated with multiple causes, some of which are benign and easily treatable.

However, wheezing is also a symptom of lung cancer, which is why it merits your doctor’s attention. Don’t assume that wheezing is caused by asthma or allergies. Have your doctor confirm the cause.
                                             </p>
                                             <b style="font-size: 18px;color:black;">6.Raspy, hoarse voice</b>
                                             <p>
                                                 If you hear a significant change in your voice, or if someone else points out that your voice sounds deeper, hoarse, or raspier, get checked out by your doctor. Hoarseness can be caused by a simple cold, but this symptom may point to something more serious when it persists for more than two weeks. Hoarseness related to lung cancer can occur when the tumor affects the nerve that controls the larynx, or voice box.
                                             </p>
                                              <b style="font-size: 18px;color:black;">7.Drop in weight</b>
                                             <p>
                                                 An unexplained weight loss of 10 pounds or more may be associated with lung cancer or another type of cancer. When cancer is present, this drop in weight may result from cancer cells using energy. It could also result from shifts in the way the body uses energy from food.

Don’t write off a change in your weight if you haven’t been trying to shed pounds. It may be a clue to a change in your health.
                                             </p>
                                              <b style="font-size: 18px;color:black;">8.Bone pain</b>
                                             <p>
                                                Lung cancer that has spread to the bones may produce pain in the back or in other areas of the body. This pain may worsen at night while resting on the back. It may be difficult to differentiate between bone and muscle pain. Bone pain is often worse at night and increases with movement.

Additionally, lung cancer is sometimes associated with shoulder, arm, or neck pain, although this is less common. Be attentive to your aches and pains, and discuss them with your doctor. 
                                             </p>
                                              <b style="font-size: 18px;color:black;">9.Headache</b>
                                             <p>
                                                 Headaches may be a sign that lung cancer has spread to the brain. However, not all headaches are associated with brain metastases. Sometimes, a lung tumor may create pressure on the superior vena cava. This is the large vein that moves blood from the upper body to the heart. The pressure can also trigger headaches.
                                             </p>
                                             

                                             <b style="font-size: 18px;color:blue;">Lung cancer symptoms</b>
                                             <p>
                                                 There may be no symptoms at the onset of the disease. When present, common symptoms of lung cancer may include:<br>

                                                 1.Coughing: This includes a persistent cough that doesn't go away or changes to a chronic "smoker's cough,” such as more coughing or pain.<br>
                                                 2.Coughing up blood: Coughing up blood or rust-colored sputum (spit or phlegm) should always be discussed with your doctor.<br>
                                                 3.Breathing difficulties: Shortness of breath, wheezing or noisy breathing (called stridor) may all be signs of lung cancer.<br>
                                                 4.Loss of appetite: Many cancers cause changes in appetite, which may lead to unintended weight loss.<br>
                                                 5.Fatigue: It is common to feel weak or excessively tired.<br>
                                                 6.Recurring infections: Recurring infections, like bronchitis or pneumonia, may be one of the signs of lung cancer.<br>
                                             </p>


                    </div>
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
                        <p class="pull-left">&copy; 2017Lifesearch.pvt.lid</p>
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
