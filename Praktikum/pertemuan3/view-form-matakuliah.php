<!DOCTYPE html>
<html>
<head>
	<title>Form Input Matakuliah</title>
</head>
<body>

	<center>
		<form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
			<table>

				<tr>
					<th colspan="3">
						Form Input Data Mata Kuliah
					</th>
				</tr>

				<tr>
					<th colspan="3">
					</th>
				</tr>

				<tr>
					<th>Kode Matkul</th>
					<td>:</td>
					<td>
						<input type="text" name="kode" id="kode">
					</td>
				</tr>

				<tr>
					<th>Nama Matkul</th>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama">
					</td>
				</tr>

				<tr>
					<th>SKS</th>
					<td>:</td>
					<td>
						<select name="sks" id="sks">
							<option value=""> Pilih SKS </option>
							<option value="2">3</option>
							<option value="3">4</option>
							<option value="4">5</option>
						</select>
					</td>
				</tr>

				<tr>
					<th colspan="3" align="center">
						<input type="submit" value="submit">
					</th>
				</tr>

			</table>
		</form>
	</center>

</body>
</html>