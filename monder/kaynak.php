<!DOCTYPE html>
<html lang="en">
<head>
	

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kaynak Yükle</title>

	<?php include 'theme/src.php'; ?>
	<?php include 'theme/connection.php'; 

	$doc = $db->select('kaynak')->run();

	if (isset($_POST['ad']) && !isset($_GET['edit_id'])) {
		$ekle = $db->insert('kaynak')->set($_POST);

		header('Location:kaynak.php');
	}

	?>

</head>
<body>

	<?php include 'theme/navbar.php'; ?>


	<div class="clearfix"></div>
	<div id="destek">
		
		<a href="#">
			
			<img src="assets/img/wp.png" class="img-fluid">

		</a>
	</div>


	<div class="main-bg" style="background: url('assets/img/main-bg.png') no-repeat;">

		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-6 text-center">
					
					

					<h2>KAYNAK YÜKLE</h2>


				</div>

			</div>

		</div>

	</div>


	<div class="clearfix"></div>


	<div class="kaynak">
		
		<div class="container">
			
			<div class="row ">
				
				<!-- Kaynak Yükle Start -->

				<div class="col-md-6 mt-5">
					
					<div class="kaynak-yukle">
						
						<form method="POST" action="" role="form">

							<h4 class="mb-5">Kaynak Bilgileri</h4>
							
							<div class="form-group">
								<label class="frm-text">Dosya İsmi</label>
								<input type="text" class="form-control" id="name" placeholder="Dosya İsmini Yazınız" name="ad">
							</div>

							<div class="form-group">
								<label class="frm-text">Kaynak Açıklaması</label>
								<input type="text" class="form-control" id="aciklama" placeholder="Kaynak Açıklaması" name="durum">
							</div>

							<div class="form-group mt-4">
								<input type="file" class="form-control-file" id="exampleFormControlFile1">
								<label for="exampleFormControlFile1" class="text-muted mt-2">Sadece .doc .docx ve .pdf uzantılarına sahip dosya yükleyebilirsiniz</label>
							</div>

							<div class="form-group mt-5">
								
								<button class="btn btnsave col-md-12" type="submit">KAYDET</button>

							</div>

						</form>

					</div>

				</div>


				<!--Kaynak Yükle End-->


				<!-- Kaynak Tablo Start -->

				<div class="col-md-6 mt-5">
					
					<div class="kaynak-tablo">
						
						<table class="table table-hover">

							<thead>
								<tr>
									<th scope="col">Dosya No</th>
									<th scope="col">Dosya İsmi</th>
									<th scope="col">Yüklenme Tarihi</th>
									<th scope="col">Durumu</th>
								</tr>
							</thead>
							
							<tbody>

								<?php $i=1; foreach ($doc as $key => $var): ?>
								<tr>
									<td><?php echo $i ?></td>
									<td><?php echo $var['ad'] ?></td>
									<td><?php echo $var['tarih'] ?></td>
									<td><?php echo $var['durum'] ?></td>
								</tr>


								<?php $i++; endforeach ?>

							</tbody>

						</table>

					</div>

				</div>


				<!-- Kaynak Tablo End -->



			</div>

		</div>

	</div>



















































	<?php include 'theme/js.php'; ?>

</body>
</html>