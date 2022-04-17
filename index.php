<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CodePen - Flat HTML5/CSS3 Login Form</title>
  <link rel="stylesheet" href="./index.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
    <form action="core/funksiya.php" method="POST" class="register-form">
    <input type="text" placeholder="Ad " name="name" required/>
      <input type="email" placeholder="Email" name="mail" required/>
      <input type="tel" placeholder="Telefon" name="phone" required/>
      <input type="password" placeholder="Shifre" name="pass" required/>
      <button type="submit ">Göndər</button>
      <p class="message">Hasabın var ? <a href="#">Daxil ol</a></p>
    </form>
    <form action="core/funksiya.php" method="POST" class="login-form">   
      <input type="text" placeholder="E-poçt" name="email" required/>
      <input type="password" placeholder="Şifrə" name="password" required/>
      <button type="submit">Daxil ol </button>
      <p class="message">Hesabın yoxdur? <a href="#">Qeydiyyat</a></p>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="./index.js"></script>

</body>
</html>