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
        border-radius: 20px;
     }
		  </style>
		  
          <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input type="text" name="username" class="form-control"  placeholder="Username">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>

          <button type="submit" name="login" class="btn-login">Login</button>
          <div class="bottom">
            <a href="register.php">Register</a>
            <a href="#">Info</a>
          </div>
      </div>
  </head>
  </html>