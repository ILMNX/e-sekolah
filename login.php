<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Login</title>
</head>

<form method="POST" action="cek_login.php">

    <style>

      

      .login-blue {
                  background: linear-gradient(145deg, #2196F3, #3F51B5);
                  
                  }

      body{
          font-size: 13px;
          background: linear-gradient(300deg, #2196F3, #3F51B5);
          background-repeat: no-repeat;
          background-size: 100%;
      }
      
      .body2{
          font-size: 13px;
          background: linear-gradient(145deg, #575b5d, #252b2d);
          background-repeat:no-repeat;
          background-size: 100%;

      }
     
      

    </style>
<body>

        
<form method="POST" action="cek_login.php">

    <div class="container">
      <div class="row mt-5 justify-content-center">
        <div class="col-md-4">
          <div class="login-blue p-3 shadow-lg rounded">
            <div class="pt-3">
              <h2 class="text-white" class="">Log In</h2>
            </div>

            <br>

            <form class="mt-5">
              <div class="form-group">
                  <input type="text" name="username"
                        class="form-control form-control-sm-bg-light"
                        placeholder="Masukkan Username" required>
                </div>

            <br>

            <div class="form-group">
              <input type="password" name="password"
                          class="form-control form-control-sm-bg-light"
                          placeholder="Masukkan Password ">
              </div>

            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="rememberCheckBox">
                <label class="form-check-label text-light" for="rememberCheckBox">Remember me</label>
              </div>

            <div class="mt-5">
            <b><button class="btn btn-sm btn-light col">
                Login
            </b></button>
            </div>

            <div class="text-center mt-2">
                <a href="gantipass.php" class="text-warning">Forgot Password?</a>
              </div>

            <div class="mt-5">
                  <p class="text-white text-center">
                    Don't have an account?
                      <a href="register.php" class="text-warning">Click here to register</a>
                  </p>
                </div>
              </form>
          </div>
      </div>

      <script>

      $(".reveal").on('click',function() {
    var $pwd = $(".pwd");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});
    </script>

    </form>
</body>
</html>