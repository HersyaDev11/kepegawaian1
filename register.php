<?php 
 
include 'konfigurasi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM datauser WHERE ='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO datauser (username, password)
                    VALUES ('$username','$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $password = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>
 
<!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Kepegawaian</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="shortcut icon"  href="images/favi.ico" type="images/x-icon">
	  <form method="POST" action="CekLogin.php">
      <div class="login">

          <div class="avatar">
             <img class="img-responsive " src="images/logoo.png"  width="65px"/>
          </div>
		  <h3 class="text-4x1 tracking-wider neon">Selamat Datang Di Aplikasi Kepegawaian</h3>
		  <style>
		    .neon{
				text-align:center;
				color: white;
			}
			body{
        background-image: url(images/cp.jpg);
	      background-color: red;
        background-repeat: no-repeat;
	     	background-position: auto;
        background-attachment: fixed;
	      background-size: cover;
	      margin-left: auto;
        margin-right: auto;
    }
    .login {
   position: fixed;
   top: 47%;
   left: 45%;
   transform: translate(-30%, -50%);
   background: rgba(4, 29, 23, 0.5);
   padding: 40px;
   width: 200px;
   box-shadow: 0px 0px 20px 10px black;
   border-radius: 15px;
 }
		  </style>

          <h2>Registrasi</h2>
		  

          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username" class="form-control"  placeholder="Username" value="<?php echo $username; ?>" required>
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $_POST['password']; ?>" required>
          </div>
		  <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" value="<?php echo $_POST['cpassword']; ?>" required>
          </div>

          <button type="submit" name="login" class="btn-login">Regitrasi</button>
          <div class="bottom">
            <a href="login.php">Login</a>
            <a href="#">Forgot Password</a>
          </div>
      </div>
  </head>
  </html>