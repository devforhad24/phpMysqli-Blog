<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <title>Login!</title>
  </head>
  <body>

    <div class="container py-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <h5 class="card-header">Login Form</h5>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label>Email address</label>
                  <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="register.php" class="btn btn-secondary">Sign Up</a>
                <a href="" class="float-right">Forget Password?</a>
              </form>
              <hr>
              <h5>
                Did not receive your verification email? <a href="#">Resend</a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>