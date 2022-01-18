<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Manrope&display=swap" rel="stylesheet">

  <title>Inregistrare Magic Tur</title>
  <style>
  * {box-sizing: border-box;}

    body {
      background-image: url('https://images.unsplash.com/photo-1537752994388-d067200d3400?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80');
      background-repeat: no-repeat;
      background-size: cover;
      font-family: 'Manrope', sans-serif;
      color: white;
    }
    
    h1 {
      font-size: 48px;
      text-align: center;
      color: white;
    }
    
    form {
      margin: 0;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }
    
    .input-container {
      display: flex;
      width: 100%;
      margin-bottom: 16px;
    }
    
    .icon {
      padding: 16px;
      background: none;
      color: white;
      min-width: 50px;
      text-align: center;
      border-bottom: 1px solid white;
    }
    
    .input-field {
      width: 100%;
      outline: none;
      border: none;
      border-bottom: 1px solid white;
      color: white;
      background: transparent;
    }
    
    ::placeholder {
      color: rgba(255, 255, 255, .4);
    }
    
    .btn {
      background-color: #ff3366;
      color: white;
      padding: 15px 20px;
      border: none;
      cursor: pointer;
      width: 100%;
      border-radius: 4px;
    }
    
    .btn:hover {
      background-color: #ff4775;
    }
    
    .checkbox {
      float: left;
      font-size: 14px;
      padding: 16px 0px 16px 0px;
      cursor: pointer;
      color: white;
    }
    
    input[type="checkbox"] {
      margin-right: 16px;
    }
    
    .forgot {
      float: right;
      font-size: 14px;
      padding: 16px 0px 16px 0px;
      cursor: pointer;
    
    }
    
    .forgot a {
      color: white;
      text-decoration: none;
    }
    
    .forgot:hover a {
      color: #ff3366;
    }
    
    .or-circle h2 {
        font-size: 14px;
        color: #fff;
        text-align: center;
        line-height: 38px;
        background:#ff3366;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin: 16px auto;
    }
    
    .socials {
      display: flex;
    }
    
    .facebook {
      background-color: #3B62A3;
      color: white;
      text-align: left;
      margin-right: 8px;
      padding: 16px;
      border: none;
      cursor: pointer;
      width: 50%;
      border-radius: 4px;
    }
    
    .twitter {
      float: right;
      background-color: #18AEE5;
      text-align: left;
      color: white;
      margin-left: 8px;
      padding: 16px;
      border: none;
      cursor: pointer;
      width: 50%;
      border-radius: 4px;
    }
    
    .soc {
      padding-right: 16px;
      margin-right: 16px;
      border-right: 1px solid rgba(255, 255, 255, .4);
    }
    
    .copyright {
      padding-top: 48px;
      font-size: 12px;
      text-decoration: none;
      text-align: center;
    }
    .error {color: #FF0000;}
    .copyright  a{
      text-decoration: none;
      color: #fff;
    }
    </style>
</head>

<body>
 
  <form method="POST" action="logare.php" class="login form" style="max-width:420px; margin:auto">
   
  <!-- Title -->
  
    
    <!-- Text Fields -->
   <!-- <p><span class="error">* required field</span></p>-->
    <div class="input-container">
      <i class="fa fa-user icon"></i>
      <input class="input-field" type="text" name="username" id="username" placeholder="Username" required>
      
    </div>
    <div class="input-container">
      <i class="fa fa-lock icon"></i>
      <input class="input-field" type="password" name="password" id="password" placeholder="Password" required>
 
    </div>
    <!-- Checkbox & Forgot Password -->
    <div class="check-forgot">
      <span class="checkbox1">
        <label class="checkbox"><input type="checkbox" checked="">Remember me</label>
      </span>
      <div class="forgot">
        <a href="#">Forgot Password?</a>
      </div>
    </div>
    <!-- Large Button -->

        <button type="submit" class="btn" name="login" onclick="document.location='validare-login.php'"> Login</button>
   
        <!-- OR circle -->
    <div class="circle">
      <div class="or-circle"><h2>or</h2></div>
    </div>

    <!-- Social Buttons -->
    <div class="socials">
      <button class="facebook"><i class="fa fa-facebook soc"></i>Facebook</button>
      <button class="twitter"><i class="fa fa-twitter soc"></i>‎Twitter</button>
    </div>
     <!-- Checkbox & Forgot Password -->
 <div class="check-forgot">
     
     <div class="forgot">
       <a href="reg.html">Nu ai cont? Inregistreaza-te</a>
     </div>
   </div>

    <!-- Copyright -->
    <div class="copyright">
    	<p>© 2021 MagicTur. Toate drepturile rezervate | Design by GetAdesign</p> 
    </div>

  </form>

</body>

</html>