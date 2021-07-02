<?php
session_start();
error_reporting(0);
?>
<!doctype html>
<html lang="en">
<head>


  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Macondo&display=swap" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="css/main.css" rel="stylesheet">

  <title>Thank You</title>
  <style type="text/css">
   #leftHalf {
     background: url(images/thanks.jpg);
     background-size: cover;
     background-position: center center;
     width: 50%;
     position: absolute;
     left: 0px;
     height: 100%;
   }
   #rightHalf {

     width: 50%;
     position: absolute;
     right: 0px;
     height: 100%;
   }
 </style>
 <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg" />
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light" class="navbar">
    <a class="navbar-brand" href="index.php" style="color: white; font-family: 'Poppins', sans-serif;
    font-size: 1.5vw"><img src="images/logo.jpg" style="width: 16%;">&nbsp <b>Agaetis</b><br>
    </a>   
  </nav>
<!-- 
  <div id="background"><img src="images/thanks.jpg"></div> -->
  <div class="container" >
    <div id="leftHalf"></div> 
    <div id="rightHalf">
      <div style="margin-top: 15%; margin-left: 20% " >
        <div style="color:white;">
          <h3>Thank You <?php echo $_SESSION['title'] ." " . $_SESSION['fname'] ." " . $_SESSION['lname']; ?></h3><br>
          <label><b>Date of Birth </b></label>&nbsp <?php echo $_SESSION['dob'];?><br>
          <label><b>Telephone </b></label>&nbsp <?php echo $_SESSION['mobile'] ;?><br>
          <label><b>File Uploaded </b></label>&nbsp <?php echo $_SESSION['basename'] ?><br>
          <label><b>Message</b></label>&nbsp <?php echo $_SESSION['message'] ;?><br>
        </div>

        <a href="index.php"><button class="btn btn-primary">Back To Home</button></a>
        
      </div>
    </div>
  </div>
  

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


  <script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>
</body>
</html>