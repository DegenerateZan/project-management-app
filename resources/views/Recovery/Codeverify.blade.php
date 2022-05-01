
<!doctype html>
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
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Recovery</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col order-md-9 custom-margin setting">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid" style="margin-top: -15%; margin-right: -300px">
      </div>

        <div class="col contents setting-isi mt-10">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3><strong>Code Verify</strong></h3>
              
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
                <br>
              <span class="text-success" >Codes has <br>been Sended to {{ $_GET['email'] }} </span>
            </div>
          </div>
              
            
            @endif
            <p class="mb-4">Please enter the Verification code from the email!</p>
            <p class="mb-3">Protip : if you cannot receive any email you have to use <a href="https://mailtrap.io/">Mailtrap</a></p>
            
            <form action="/verify" method="post">
              @csrf
              <div class="form-group first">
                <label for="code">Vefication Code</label>
                <input type="hidden" name="email" value="{{ $_GET['email'] }}">
                <input type="text" name="code" class="form-control" id=code">
                @error('code')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror

              </div>

              

			  <div class="row flex">
				<div class="col-sm">

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

  
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>