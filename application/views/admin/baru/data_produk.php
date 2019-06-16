<!DOCTYPE html>
<html>
<head>
	<title>Data Menu
	</title>
</head>
<body>
<h3 style=" text-align: center;">DAFTAR MENU MAKANAN DAN MINUMAN </h3><hr>
<div style="width: 50%; float: left; margin-top:10px;">
	<a href="add" class="tombol">Tambah Menu Coffe</a>
</div>
<div class="pull-right">
	<form action="index.php" method="get">
		<input type="text" name="q" style="width: 200px;"><input type="hidden" name="p" value="data_produk">
		<input type="submit" value="Cari" style="width: 50px; padding:6px;">
	</form>
</div>
<div class="grid_9">
	<p style="text-align: center; color: red;">
		</p>
	</div>
	<table width="100%">
	<thead>
		<tr> 
			
			<th>Kode Produk</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th width="78"></th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($products as $produk): ?>

			<tr>
				<td align="center" >
					<?php echo $produk->kode_produk; ?>
				</td>
				<td align="center">
					<?php echo $produk->nama_produk; ?>
				</td>
				<td align="center">
					<?php echo $produk->harga; ?>
				</td>
				<td></td>
				<th width="78"></th>
			</tr>

	<?php endforeach; ?> 
	</tbody>
</body>
</html>