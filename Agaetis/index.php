
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

  <!-- Contact Us Button -->
  <style type="text/css">

    #con {
      text-decoration: none;
      border: 1px solid white;
      color: transparent;
      padding: 10px 30px;
      margin-left: 40px;
      font-size: 18px;
      font-family: sans-serif;
      letter-spacing: 5px;
      transition: all 0.5s;
      position: relative;
    }
    #con:before {
      content: "Contact Us";
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      background: rgb(34, 34, 34);
      font-size: 18px;
      top: 0;
      left: 100%;
      font-family: sans-serif;
      letter-spacing: 5px;
      transition: all 1s;
      height: 100%;
      width: 100%;
      position: absolute;
      transform: scale(0) rotatey(0);
      opacity: 0;
    }
    #con:hover:before {
      transform: scale(1) rotatey(360deg);
      left: 0;
      opacity: 1;
    }
    #con:after {
      content: "Contact Us";
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      background: rgb(34, 34, 34);
      font-size: 18px;
      top: 0;
      left: 0;
      font-family: sans-serif;
      letter-spacing: 5px;
      transition: all 1s;
      height: 100%;
      width: 100%;
      position: absolute;
      transform: scale(1) rotatey(0);
      opacity: 1;
    }
    #con:hover:after {
      transform: scale(0) rotatey(360deg);
      left: -100%;
      opacity: 0;
    } 
  </style>

  <title>Homepage</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg" />
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light" class="navbar">
    <a class="navbar-brand" href="index.php" style="color: white; font-family: 'Poppins', sans-serif;
    font-size: 1.5vw"><img src="images/logo.jpg" style="width: 16%;">&nbsp <b>Agaetis</b><br>
  </a>   
</nav>

<div id="particles-js">
   
    <div class="row">
      <div class="panel2" style="display: block;">

        <h4 style="color: white">WE DELIVER EXCELLENCE IN</h4>
        <p class="sdt">Strategy Design Technology</p>
        <br>
        <a href="contactus.php" id="con">Contact Us</a>

      </div>
    </div>

  </div>
  <script type="text/javascript" src="particles.js-master/particles.js"></script>
  <script type="text/javascript" src="app.js"></script>



  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/d03fa9b461.js" crossorigin="anonymous"></script>
</body>
</html>