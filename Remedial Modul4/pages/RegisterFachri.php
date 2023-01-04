<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EAD Rentall</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
	
<!-- nav -->
        <nav class="navbar navbar-dark bg-primary  navbar-expand-lg sticky-top" style="background-color: #e9ecef;">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="../pages/HomeFachri.php">Home</a>
						</li>
                    </ul>
                </div>
            </div>
        </nav>
<!-- nav -->
<div class="row mt-5">
	<div class="col-md-3"></div>
	<div class="col-md-6">
			<div class="card-body">
				<form class="form-signin" method="POST" action="../config/insertlogin.php">
				  <div class="text-center mb-4">
				    <h1 class="h3 mb-3 mt-3">REGISTER</h1>
				    <p class="text-muted">Daftar untuk membuat akun.<p>
				  </div>

				  <div class="form-label-group">
				  	<label for="namalengkap">Nama Lengkap</label>
				    <input type="text" id="namalengkap" name="nama" class="form-control" placeholder="Nama Lengkap..." required>
				  </div>

				  <div class="form-label-group mt-3">
				  	<label for="inputEmail">Email</label>
				    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email Address..." required>
				  </div>

				  <div class="form-label-group mt-3">
				  	<label for="inputnomor">No. Telp</label>
				    <input type="number" name="nohp" id="inputEmail" class="form-control" placeholder="Nomor Handphone..." required>
				  </div>

				  <div class="form-label-group mt-3">
				  	<label for="inputPassword">Password</label>
				    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password..." required>
				  </div>

				  <div class="form-label-group mt-3">
				  	<label for="confirm_password">Confirm Password</label>
				    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password..." required>
				  </div>

				  <button class="btn btn-lg btn-primary btn-block mt-4" name="submit" type="submit">Daftar</button>
				  <p class="text-center mt-3">Anda sudah punya akun? <a href="../pages/LoginFachri.php"><b>Login</b></a></p>
				</form>
			</div>
		</div>
	</div>
</div>