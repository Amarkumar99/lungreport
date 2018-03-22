<?php
  session_start();
        if(!$_SESSION['username'])
        {
         header('location: index.php?error=you are not signed user please sign up first');
        }
        
 ?>



<html>
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
        #report{
              width: 650px;
              height: 780px;
              background-color: white;
              margin-left: 370px;
              margin-top: 30px;
              border: 1px solid #000;
            
        }
        
    </style>
        
</head>
<body>
    <div id="report">
        <b style="float: left; color:blue; margin-left: 10px;">Company Registration number :1025/464646</b>
        
        <b style="float: right; color:blue; margin-right: 10px;">Contact number <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> :+91 7225916951,+91877725583</b><br>
        <b style="float: right; color:blue ; margin-right: 8px;">Email address <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> :amarkumar.mymail@gmail.com,</b><br>
        <b style="float: right; color:blue ; margin-right: 8px;"> yashtribwalmymail@gmail.com,</b><br>
        <b style="float: right; color:blue ; margin-right: 8px;"> varshaschanmymail@gmail.com</b><br>
        
         <center> 
            <b style="color:blue ;font-size: 28px;"> LIFESEARCH.INFO.PVT.LID</b><br>
            <b style="color:blue">Address: Morena Link Road, Near IDBI Bank ATM, Gwalior, Madhya Pradesh 474001</b>
        </center>
        <hr >
        <center><b style="font-size: 18px;"> LUNG CANCER TEST</b></center><br>
        <?php 
                                $link = mysqli_connect("localhost", "root","");
                                 mysqli_select_db($link, "adminpanel");
                                  $usna = $_SESSION['username'];
                                  $query = "select * from report where email ='".$usna."'";
                                  $run= mysqli_query($link, $query);
                                
                                  while($row= mysqli_fetch_array($run))
                                  {
                                      $name = $row['name'];
                                      $fname =$row['fname'];
                                      $email = $row['email'];
                                      $age = $row['age'];
                                      $blood =$row['blood'];
                                      $gen = $row['gender'];
                                      $dat = $row['date'];
                                      $tie = $row['time'];
                                      $red = $row['ref'];
                                      $res = $row['result'];
                                     
        
        ?>
        
        
        &nbsp;&nbsp;&nbsp;&nbsp;  <b>PATIENT NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $name; ?></b><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp; <b>PATIENT FATHER NAME&nbsp;&nbsp; : <?php echo $fname; ?></b><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<b>PATIENT EMAIL ID &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $email; ?></b><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<b>PATIENT AGE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $age; ?></b><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<b>PATIENT BLOOD GROUP &nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $blood; ?></b><br><br>
       &nbsp;&nbsp;&nbsp;&nbsp; <b>PATIENT GENDER &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $gen; ?></b><br><br>
       &nbsp;&nbsp;&nbsp;&nbsp; <b>PATIENT TEST DATE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $dat; ?></b><br><br>
       &nbsp;&nbsp;&nbsp;&nbsp; <b>PATIENT TEST TIME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $tie; ?></b><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<b>PATIENT TEST REF BY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $red; ?></b><br><br>
        &nbsp;&nbsp;&nbsp;&nbsp;<b>FINAL TEST RESULT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;<?php echo $res; ?></b><br><br><br>
                                  <?php  };  ?>
        
        <b style="float:right; margin-right: 20px;">Report is generated by:</b><br>
        <b style="float:right; margin-right: 20px;">Lifesearch.info.pvt.lid</b>
        <hr>
        <b style="color: blue; margin-left: 10px;margin-right: 10px">NOTE : All Tests have technical limitation collaboration, clinical interpretation is essential.In case of </b>
        <b style="color: blue; margin-left: 55px;margin-right: 10px">any disparity repeat examination is suggested.
        2017@Lifesearch.info</b>
        
    </div>
    <br>
        
<center>  <a titlt="print screen" alt="print screen" onclick="window.print();"  target="_blank" style="cursor:pointer;"> <button type="button" name="print" class="btn btn-info">print report</button></a>
    
</center>
</body>
    
    
    
</html>