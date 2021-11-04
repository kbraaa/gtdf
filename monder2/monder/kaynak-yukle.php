<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Monder Akademi</title>

	<?php include 'theme/src.php'; ?>

</head>
<body>

	<?php include 'theme/navbar.php'; ?>

	<div>
		<a href="#" class="wp"> <img src="assets/img/WhatsApp.png" alt=""></a>
	</div>

	<div class="container source ">
		<h1> KAYNAK YÜKLE</h1>
	</div>

	<div class="container mt-3">
		<div class="row">
			<div class="col-md-6 sourceform">
				<div class="bg-lightest border-1px p-30 mb-0">
					<h3 class="text-theme-colored pt-4"> Kaynak Bilgileri</h3>

					<form id="fileUploadForm" name="kaynakUpload" action="" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>Dosya İsmi <small>*</small></label>
									<input name="form_name" type="text" placeholder="Dosya İsmini Yazınız" required="" class="form-control zor" aria-required="true">
								</div>

								<div class="form-group">
									<label>Kaynak Açıklaması</label>
									<textarea name="form_message" type="text" placeholder="Kaynak ile ilgili bir açıklama yazınız." required="" class="form-control zor" aria-required="true"> </textarea>
								</div>
							</div>

						</div>



						<div class="form-group">
							<input name="file" class="file" type="file" multiple="" data-show-upload="false" data-show-caption="true">
							<br>
							<small>Sadece .doc .docx ve .pdf uzantılarına sahip dosya yükleyebilirsiniz.</small>
						</div>

						<input type="hidden" name="page_kat_id" value="19">

						<div class="form-group">

							<button type="submit" class="btn btn-block btn-primary btn-theme-colored btn-md mt-20 pt-10 pb-10 btnFileUpload" data-loading-text="Dosya Yükleniyor...">Kaydet</button>
						</div>

					</form>

				</div>
			</div>

			<div class="col-md-6 file-block mt-4">
				<ul>
					<li>Dosya No</li>
					<li>Dosya İsmi</li>
					<li>Yüklenme Tarihi</li>
					<li>Durumu</li>
				</ul>
			</div>
		</div>
	</div>


	<div class="clearfix"></div>


	<?php include 'theme/footer.php'; ?>


	<?php include 'theme/js.php'; ?>

</body>
</html>