
<script src="js/jquery.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Login</h3>

			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
                        <div class="card-header">
                            <p>Masukan Email mu untuk menerima Kode Pemulihan!</p>
                        </div>
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>

						<input type="text" class="form-control" placeholder="Email">
						
					</div>

					<div class="form-group">
                        <button type="submit" class="btn float-right login_btn">Kirim</button>
                        <a href="/login" class="btn float-left login_btn">Kembali</a>
                    </div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
				
				</div>
				<div class="d-flex justify-content-center">
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>