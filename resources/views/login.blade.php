<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>
  
  
  
      <link rel="stylesheet" href="css/login.css">

  
</head>

<body>
  <div class="login-page">
  <div class="form">
    <h1>Kanoop Admin</h1>
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    
      <input type="text" placeholder="username"/>
      <input type="password" placeholder="password"/>
      <a href="{{ url('/login') }}">
        <button class="log_btn">login</button>
      </a>
      <!--<p class="message">Not registered? <a href="#">Create an account</a></p>-->
    
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/login.js"></script>
</body>
</html>
