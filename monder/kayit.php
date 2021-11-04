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
							<img src="assets/img/login_bg.png" class="img-fluid h-100">
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
							<div class="form-row">

								<div class="form-group col-md-12">
									<div class="input-group mb-3">
										
										<input type="text" class="form-control" placeholder="TC Kimlik Numaranız" aria-label="TC Kimlik Numaranız" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group col-md-6">
									<div class="input-group mb-3">
										
										<input type="text" class="form-control" placeholder="Ad" aria-label="Ad" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group col-md-6">
									<div class="input-group mb-3">
										
										<input type="text" class="form-control" placeholder="Soyad" aria-label="Soyad" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group col-md-12">
									<div class="input-group mb-3">
										
										<input type="text" class="form-control" placeholder="Mail Adresinizi Giriniz" aria-label="Mail Adresinizi Giriniz" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group col-md-6">
									<div class="input-group mb-3">
		
										<input type="text" class="form-control" placeholder="GSM Numaranız" aria-label="GSM Numaranız" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group col-md-6">
									<div class="input-group mb-3">
		
										<input type="password" class="form-control" placeholder="Şifrenizi Giriniz" aria-label="Şifrenizi Giriniz" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group col-md-6">
									<div class="input-group mb-3">
		
										<input type="text" class="form-control" placeholder="Ünvanınız" aria-label="Ünvanınız" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group col-md-6">
									<div class="input-group mb-3">
		
										<input type="text" class="form-control" placeholder="Branşınız" aria-label="Branşınız" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group col-md-6">
									<div class="input-group mb-3">
		
										<input type="text" class="form-control" placeholder="Çalıştığınız Kurum" aria-label="Çalıştığınız Kurum" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group col-md-6">
									<div class="input-group mb-3">
		
										<input type="text" class="form-control" placeholder="Çalıştığınız Bölüm" aria-label="Çalıştığınız Bölüm" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group col-md-12">
									<div class="input-group mb-3">
		
										<input type="text" class="form-control" placeholder="Şehir" aria-label="Şehir" aria-describedby="basic-addon2">

									</div>
								</div>

								<div class="form-group form-check mt-5">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Sağlık Personeli Olduğumu Onaylıyorum.</label>
								</div>

								<div class="form-group form-check form-check2">
									<input type="checkbox" class="form-check-input" id="exampleCheck2">
									<label class="form-check-label" for="exampleCheck2">KVKK içerisinde yer alan açıklamalar kapsamında ve sınırında, monderakademi.org bünyesinde gerçekleştirmiş olduğum üyelik süreci ile ilgili olarak kişisel verilerimin işlenmesine onay veriyorum.</label>
								</div>

								<div class="form-group col-md-12">
									<button type="submit" class="btn btnlogin col-md-12">Kayıt Ol</button>
								</div>

								<div class="form-group mb-5 p-2 bg-danger">

									<p><strong>Lütfen mail adresi, isim, soy isim kısımlarının doğru olduğunu kontrol ediniz. Aksi taktirde üyeliğiniz onaylanmayacaktır.</strong></p>

								</div>

							</div>

						</form>


					</div>

					


				</div>





			</div>

		</div>

	</div>
































	<?php include 'theme/js.php'; ?>

</body>
</html>