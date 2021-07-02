<!-- Php code for insert data in contact up table -->

<?php
 session_start();
$conn = new mysqli("localhost","root","","agaetis");
         
                     if($conn->connect_error){
                         die("connection failed");
                       }
                       if(isset($_POST['submit']))
                          {
                             $title=$_POST['title'];
                             $fname=$_POST['fname'];
                             $lname=$_POST['lname'];
                             $dob=$_POST['dob'];
                             $mobile=$_POST['mobile'];
                             $email=$_POST['email'];
                             $target_dir = "upload/";
                             $basename = basename($_FILES["upload"]["name"]);
                             $target_file = $target_dir . $basename;
                             move_uploaded_file($_FILES["upload"]["tmp_name"], $target_file);
                  
                             $message=$_POST['message'];
                             $sql="insert into contact(title,fname,lname,dob,mobile,email,file,message) values('$title','$fname','$lname','$dob','$mobile','$email','$target_file','$message')";
                      if (mysqli_query($conn, $sql)) {
                        $_SESSION['title'] = $title;   
                        $_SESSION['fname'] = $fname;
                        $_SESSION['lname'] = $lname;   
                        $_SESSION['dob'] = $dob;
                        $_SESSION['mobile'] = $mobile;
                        $_SESSION['basename'] = $basename;   
                        $_SESSION['message'] = $message;
                        echo"<script>alert('Query placed. We will contact you shortly!!');window.location.href = 'thanks.php'</script>";
                     } else {
                        echo "<b style='color:#00b33c;'>Error:</b> <b>Something is wrong!</b>";
                     }
                     mysqli_close($conn);
                }
                  
?>

<html>
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

  <title>Contact Us</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg" />
<script type="text/javascript">
    function ValidateExtension() {
        var allowedFiles = [".png", ".jpg", ".jpeg", ".pdf"];
        var fileUpload = document.getElementById("fileUpload");
        var lblError = document.getElementById("lblError");
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + allowedFiles.join('|') + ")$");
        if (!regex.test(fileUpload.value.toLowerCase())) {
            lblError.innerHTML = "Please upload files having extensions: <b>" + allowedFiles.join(', ') + "</b> only.";
            return false;
        }
        lblError.innerHTML = "";
        return true;
    }
</script>
</head>

<body>
  <!-- Nav Bar -->
   <nav class="navbar navbar-expand-lg navbar-light" class="navbar">
    <a class="navbar-brand" href="index.php" style="color: white; font-family: 'Poppins', sans-serif;
    font-size: 1.5vw"><img src="images/logo.jpg" style="width: 16%;">&nbsp <b>Agaetis</b><br>
    </a>   
  </nav>

<div class="container">
    <h1 class="mt-4 mb-3"></h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item "><a href="index.php" style="text-decoration: none;"><b>Home</b></a></li>
        <li class="breadcrumb-item active"><b>Contact Form</b></li>
    </ol>
    <!-- Contact Form  -->
    <div id="contactform">
        <form method="post" enctype="multipart/form-data">
            <h4>Personal Details</h4>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <label class="control-label">Title<span style="color:red">*</span></label>
                    <select name="title" class="form-control" id="title" required="">
                        <option value="">Select Title</option>
                        <option value="Mr">Mr</option>
                        <option value="Mrs">Mrs</option>
                        <option value="Ms">Ms</option>
                    </select>
                </div>
                <div class="col-lg-4 mb-4">
                    <label class="control-label">First Name<span style="color:red">*</span></label>
                    <input type="text" class="form-control" name="fname" id="fname" required="">
                </div>

                <div class="col-lg-4 mb-4">
                    <label class="control-label">Last Name<span style="color:red">*</span></label>
                    <input type="text" class="form-control" name="lname" id="lname" required="">
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6 mb-6">
                    <label class="control-label">Date of Birth:<span style="color:red">*</span></label>
                    <input type="date" class="form-control" name="dob" id="dob" required="">
                </div>

                <div class="col-lg-6 mb-6">
                    <label class="control-label">Telephone Number:<span style="color:red">*</span></label>
                    <input type="Number" class="form-control" name="mobile" id="mobile" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" required="">
                </div>
            </div>
            <br>

            <div class="row">

                <div class="col-lg-6 mb-6">
                    <label class="control-label">File Upload:<span style="color:red">*</span><span id="lblError" style="color: red;"></span></label>
                    <input type="file" class="form-control" name="upload" id="fileUpload" required=""  onchange="ValidateExtension()">
                </div>

                <div class="col-lg-6 mb-6">
                    <label class="control-label">Email Id:<span style="color:red">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" required="">
                </div>
            </div>
            <br>

            <div class="row">

                <div class="col-lg-12 mb-12">
                    <label class="control-label">Message:</label>
                    <textarea class="form-control" name="message" id="message" maxlength="300"></textarea>
                </div>
            </div>

            <br>

          

            <div class="modal-footer">
               
                <button type="submit" class="btn btn-primary" name="submit" >Submit</button>
            </div>
        </form>
    </div>
    <br>
    <br>
</div>
</body>


</html>