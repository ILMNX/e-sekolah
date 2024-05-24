<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

  <title>Login</title>
</head>

<form method="POST" action="cek_login.php">

    <style>

      

.login-card-yellow {
    background: linear-gradient(145deg, #FFC107, #FFEB3B);
}


      body{
          font-size: 13px;
          background: linear-gradient(300deg, #2196F3, #3F51B5);
          background-repeat: repeat;
          background-size: 100%;
      }

      p.align{
        float:center;

      }
      
     
      

    </style>
<body>

        
<br><br><br>

    <div class="container">
      <div class="row mt-4 justify-content-center">
        <div class="col-md-5">
          <div class="login-card-yellow p-3 shadow-lg rounded">
            <div class="pt-3">
              <h2 align="center" class="text-dark" class="">Ganti Password</h2>
            </div>

            <br>

            <form class="mt-4">
              <div class="input-group">
                  <input type="text" name=""
                        class="form-control pwd form-control-sm-bg-light"
                        placeholder="Masukkan Password Lama" required>
                    <span class="input-group-btn">
                <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                </div>

            <br><br>

            <div class="input-group">
              <input type="password"
                          class="form-control pwd2 form-control-sm-bg-light"
                          placeholder="Masukkan Password baru">
                        <span class="input-group-btn">
                                <button class="btn btn-default reveal2" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
                        </span>
            </div>

            <br>

              <div class="input-group">
              <input type="password"
                          class="form-control pwd3 form-control-sm-bg-light"
                          placeholder="Konfirmasi Password baru">
                          <span class="input-group-btn">
            <button class="btn btn-default reveal3" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
              </div>

            <br>

            <div class="mt-5">
            <button class="btn btn-sm btn-primary col">
              <p class="text-absolute" style="font-size:15px";>  Ubah Password  </p>
                </button>
            </div>

            <br><br>

            <div class="text-center mt-2">
                <a href="login.php" class="text-primary">Klik disini untuk kembali ke form login</a>
              </div>

            <div class="mt-5">
                  <p class="text-red text-center">Copyright &copy;G-TECHSystem</p>
                      
                     
                    
                      <a href="register.php" class="text-warning"></a>
                  
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
$(".reveal2").on('click',function() {
    var $pwd = $(".pwd2");
    if ($pwd.attr('type') === 'password') {
        $pwd.attr('type', 'text');
    } else {
        $pwd.attr('type', 'password');
    }
});
$(".reveal3").on('click',function() {
    var $pwd = $(".pwd3");
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