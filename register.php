<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Register</title>


    <style>

    .login-dark {
                    background: linear-gradient(145deg, #575b5d, #252b2d);
                }

    body{
          font-size: 13px;
          background: linear-gradient(145deg, #575b5d, #252b2d);
          background-repeat:repeat;
          background-size: 100%;
      }
    </style>
    
</head>


<body>
    <form method="POST" action="simpanreg.php" >
    <div class="container">
        <div class="row m-5 justify-content-center">
            <div class="col-4">
                <div class="login-dark p-3 shadow-lg rounded">
                    <div class="pt-3">
                        <h2 class="text-white">Sign Up</h2>
                    </div>
<hr>

                    <form class="mt-5">
                        <div class="form-group">
                            <input type="text" name="username" id="username" class="form-control form-control-sm bg-light" placeholder="Enter Username ">
                        </div>

<br>                  

                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control form-control-sm bg-light" placeholder="Enter Email">
                        </div>
<br>
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control form-control-sm bg-light" placeholder="Enter Password">
                        </div>
<br>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="rememberCheckBox">
                                <label class="form-check-label text-light" for="rememberCheckBox">By Sign up i agree to </label>
                        </div>

                        <a href="login.php">Kembali Ke login</a>

                        <div class="mt-5">
                            <p class="text-white">
                                <button type="submit" class="btn btn-sm btn-light col">
                                    Register
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>