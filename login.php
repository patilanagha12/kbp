<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .well{
      margin-top: 290px;
  margin-left: 350px;
      background-color: #30466b;
    
    }

    body{
      background-image: url("a.png");
      background-repeat: no-repeat;   
      background-size:1500px 900px;
    }

  </style>
  </head>

  <body>
    <div>
     
 <div class="container">
 
        <div class="well col-md-9 col-lg-5">
         <section class="login_content" style="padding-top: 50px;">
            <form action="logincheck.php" method="POST">
              <h1 style="text-align: center;color: white"> KBP College <br><br>Login  Page </h1>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Username" required="required" id="uname" name="uname" />
              </div>
              <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" required="required" id="pass" name="pass" />
              </div>
              <div class="clearfix"></div>

              <div class="separator">
              
              </div>
              <div class="form-group">
                <input type="submit" name="login" id="login" value="Login" class="btn btn-success">
              </div>
            </form>
          </section>
      
       </div>
       </div>
       </div>
  </body>
</html>
