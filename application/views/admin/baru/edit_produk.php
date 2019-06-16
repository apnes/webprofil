<!DOCTYPE html>
<html>
<head>
	<title>ubah data produk</title>
</head>
<body>
	<fieldset>
<form action=""  method="post" >
				<table width="100%">
					<tr>
						<td><label>Kode Menu </label></td><td width="50" style="text-align: center;">:</td>
						<td><input type="text" name="kode_produk" style="width: 300px;" class="form" value="" required /></td>
					</tr>
					<tr>
						<td><label>Nama Menu </label></td><td width="50" style="text-align: center;">:</td>
						<td><input type="text" name="nama_produk" style="width: 80%;"></td>
					</tr>
					
					<tr>
						<td><label>Harga </label></td><td width="50" style="text-align: center;">:</td>
						<td><input type="text" name="harga" style="width: 300px;" class="form" required /></td>
					</tr>
					<tr>
						<td></td><td></td>
						<td><input type="submit" name="simpan" value="SIMPAN" style="width: 50%;" /></td>
					</tr>
					<tr>
						<a href="<?php echo site_url('products/add') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
						
					</tr>
				</table>
			</form>
		</fieldset>
</body>
</html>
