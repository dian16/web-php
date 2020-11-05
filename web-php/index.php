<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<br>
		<h2 style="text-align: center;">Data Data User</h2>		
		<br>
		<?php 
		if(isset($_GET['alert'])){
			if($_GET['alert']=='gagal_ekstensi'){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
					Ekstensi Tidak Diperbolehkan
				</div>								
				<?php
			}elseif($_GET['alert']=="gagal_ukuran"){
				?>
				<div class="alert alert-warning alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Peringatan !</h4>
					Ukuran File terlalu Besar
				</div> 								
				<?php
			}elseif($_GET['alert']=="berhasil"){
				?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					<h4><i class="icon fa fa-check"></i> Success</h4>
					Berhasil Disimpan
				</div> 								
				<?php
			}
		}
		?>
		<br>
		<a href="user_tambah.php" class="btn btn-info btn-sm">Tambah Data</a>
		<br>		
		<br>		
		<table class="table table-bordered">
			<tr align="center">
				<th width="20%">Nama</th>
				<th width="20%">Kontak</th>
				<th width="25%">Alamat</th>
				<th width="15%">Foto</th>
				<th width="20%"></th>
			</tr>
			<?php 
			$data = mysqli_query($koneksi,"select * from user");
			while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td align="center"><?php echo $d['user_nama']; ?></td>
					<td align="center"><?php echo $d['user_kontak']; ?></td>
					<td align="center"><?php echo $d['user_alamat']; ?></td>
					<td align="center"><img src="img/<?php echo $d['user_foto'] ?>" width="35" height="40">
				
					<td align="center">
                        <a href="hapus.php?user_id=<?php echo $d['user_id'] ?>" class="btn btn-danger btn-sm">HAPUS</a>
                    </td>  
				</tr>
				<?php
			}

			?>
		</table>
	</div>
</body>
</html>