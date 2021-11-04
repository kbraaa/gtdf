<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Monder Akademi - Login</title>

	<?php include 'theme/src.php'; ?>

</head>
<body>


	<div id="login">
		
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-6">

					<div class="login-banner">

						<div class="login-bg">
							<img src="assets/img/login_bg.png" class="img-fluid">
						</div>

						<div class="clearfix"></div>

						<div class="owl-carousel owl-theme owlnavstyle owl4">

							<div class="item ">
								<img src="assets/img/Login_slider.png" alt="" class="img-fluid"> 
							</div>

							<div class="item">
								<img src="assets/img/Login_slider.png" alt="" class="img-fluid"> 
							</div>

							<div class="item ">
								<img src="assets/img/Login_slider.png" alt="" class="img-fluid"> 
							</div>

						</div>

					</div>

				</div>


				<!-- Login Form -->

				<div class="col-md-6 p-5">
					
					<div class="login-frm mx-auto">

						<div class=" mb-5 mx-auto text-center">

							<a href="index.php" class="logo">
								<img src="assets/img/logo.png">
							</a>

						</div>

						<div class="col-md-12 text-center mx-auto my-5 frmlink">


							<ul> 

								<li class="list-inline-item">
									<a href="login.php" title="login">Kullanıcı Girişi</a>
								</li>

								<li class="list-inline-item">
									<a href="kayit.php" title="kayit">Yeni Üyelik</a>
								</li>

							</ul>

						</div>

						<form method="POST" action="" role="form">

							<div class="form-group">
								<div class="input-group mb-3">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon1"><i class="far fa-user"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Mail Adresinizi Giriniz" aria-label="Mail Adresinizi Giriniz" aria-describedby="basic-addon2">

								</div>
							</div>

							<div class="form-group">
								<div class="input-group mb-3">
									<div class="input-group-append">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-unlock-alt"></i></span>
									</div>
									<input type="password" class="form-control" placeholder="Şifrenizi Giriniz" aria-label="Şifrenizi Giriniz" aria-describedby="basic-addon2">

								</div>
							</div>

							<div class="form-group form-check mt-5">
								<input type="checkbox" class="form-check-input" id="exampleCheck1">
								<label class="form-check-label" for="exampleCheck1">Şifremi Unuttum</label>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btnlogin col-md-12">Giriş Yap</button>
							</div>

							<div class="form-group mb-5 pb-5">
								
								<p>Kişisel verileriniz 6698 sayılı Kişisel Verilerin Korunması Kanunu 
								(“KVKK”)’na uygun olarak işlenmekte, korunmakta ve muhafaza edilmektedir.</p>

							</div>

						</form>


					</div>

					<div id="lgn-form-text">
						
						<div class="col-md-12 text-center mx-auto my-5">


							<ul> 

								<li class="list-inline-item">
									<a href="login.php" title="login">Monder Akademi Hakkında</a>
								</li>

								<li class="list-inline-item">
									<a href="kayit.php" title="kayit">KVKK</a>
								</li>

								<li class="list-inline-item">
									<a href="kayit.php" title="kayit">Açık Rıza Beyanı</a>
								</li>

							</ul>

							<h5 class="mt-3">Bu site sağlık profesyonelleri için hazırlanmıştır</h5>

						</div>

					</div>


				</div>





			</div>

		</div>

	</div>
































	<?php include 'theme/js.php'; ?>

</body>
</html>