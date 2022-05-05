<?php
 $url = asset('')
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ $url.'fonts/icomoon/style.css' }}">

    <link rel="stylesheet" href="{{ $url.'css/owl.carousel.min.css' }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ $url.'css/bootstrap.min.css' }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ $url.'css/style.css' }}">

    <title>Reset Password</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col order-md-9 custom-margin setting">
          <img src="{{ $url.'images/undraw_file_sync_ot38.svg' }}" alt="Image" class="img-fluid" style="margin-top: -15%; margin-right: -300px">
      </div>

        <div class="col contents setting-isi mt-10">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3><strong>Reset Password</strong></h3>
              <span class="btn-success" >Code verified Success </span>
              <p class="mb-4">Please enter your new password to be reset</p>
            </div>
            <form action="/resetpassword" method="post">
              @csrf
              <div class="form-group first">
                <input type="hidden" name="token" value="{{ $token }}">
                <input type="hidden" name="email" class="form-control" id="username" value="{{ $email }}">
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-group"> 
                <label for="password">Password</label>
                    <input id="password"  type="password" class="form-control passw @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
              </div>
              @if (session('status'))
              <div class="alert alert-danger" role="alert">
                  {{ session('status') }}
              </div>
              @endif

              <div class="form-group"> 
                <label for="password">Confirm Password</label>
                    <input id="password" type="password" class="form-control passw" name="password_confirmation" autocomplete="new-password">

              </div>
              <div class="form-check">
                <input type="checkbox" id="check" class="form-check-input">
                <label for="showpass">Show Password</label>
              </div>
             
                 

              <div class="row">
                <div class="col-sm">
                  <a href="/login">
                  <button type="button" class="btn text-white btn-block btn-primary setting-button1">Login Page</button>
                  
                  </a>
                  <button type="submit" class="btn text-white btn-block btn-primary setting-button">Submit</button>
        
                </div>
                </div>
        
              

            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  <script>

    </script>
  
    <script src="{{ $url.'js/jquery.js' }}"></script>
    <script src="{{ $url.'js/popper.min.js' }}"></script>
    <script src="{{ $url.'js/bootstrap.min.js' }}"></script>
    <script src="{{ $url.'js/main.js' }}"></script>
  </body>
</html>