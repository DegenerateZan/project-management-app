<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/universal.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>{{ $title }}</title>


    <style>
      btn-primary:hover {
        color: #36b9cc;
      }

      


    </style>
  </head>
  <body>
  

  
  <div class="content" style="margin-top:7%;">
    <div class="container">
      <div class="row">  
        <div class="col order-md-9 custom-margin setting">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid" style="margin-top: -15%; margin-right: -300px">
        </div>

        <div class="col contents setting-isi1">
          <div class="row justify-content-center">
            <div class="col-md-8 mt-5">
              <div class="mb-4">
              <h3>Log in to <strong>Webmedia Management Software</strong></h3>
              <p class="mb-4">This app can only be access by the member of Webmedia Corp.</p>
            </div>
            <form action="/login" method="post">
              @csrf
              @if (session('resetstatus'))
              <div class="alert alert-success" role="alert">

              <span class="text-success" >Password reset Succesfully</span>
            </div>
          
              
            
            @endif
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" name="username" class="form-control  @error('email') is-invalid @enderror " id="username" autofocus required value="{{ old('username') }}">
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror

                </div>
                <div class="form-group last mb-4">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" required>
                  
                </div>
                
                <div class="d-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                    <input type="checkbox" checked="checked"/>
                    <div class="control__indicator"></div>
                  </label>
                  <span class="ml-auto"><a href="/recovery" class="forgot-pass">Forgot Password</a></span> 
                </div>
  
                <button type="submit" class="btn text-white btn-block btn-primary" style="color: #36b9cc; border-radius:10px;">Login</button>
  
  
              </form>
            </div>
          </div>
          
        </div>
        
    </div>
  </div>

    @include('sweetalert::alert')
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>