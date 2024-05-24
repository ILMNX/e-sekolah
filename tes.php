<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<style>

#password + .glyphicon {
   cursor: pointer;
   pointer-events: all;
 }

/* Styles for CodePen Demo Only */
#wrapper {
  max-width: 500px;
  margin: auto;
  padding-top: 25vh;
}

</style>

  <body>
  <div class="card text-white">
        <div class="card-header bg-primary"><b> Progress </div></b>
            <div class="card-body text-dark">
                <div class="container">
                    <div class="form-group row">
                        <label for="" class="col-md-1">Nama</label>
                            <div class="col-md-4">

                                <input type="text" name="nama" id="nama" required>
                            </div>
                    </div>
                </div> 
            </div>        
        </div>

            </div>
    </div>

    <section>
    <div class="container">    
  <div class="text-center">           
      <div class="col-lg-6">
        <h2>Password show / hide click</h2> 
        <div class="input-group">
          <input type="password" class="form-control pwd" value="">
          <span class="input-group-btn">
            <button class="btn btn-default reveal" type="button"><i class="glyphicon glyphicon-eye-open"></i></button>
          </span>          
        </div>
      </div>
  </div>  
</div>
</section>





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
   </body>
</html>