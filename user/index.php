<?php
	require_once "view/header.php";
	if(isset($_SESSION['tipe'])) {
		$amb = $_SESSION['tipe'];
		$sqlx = $pdo->query("SELECT * FROM kamar WHERE tipe=$amb");
		$datax = $sqlx->fetch();
		$idkamar = $datax['idkamar'];
		$tipe = $datax['tipe'];
		$jumlah = $datax['jumlah'];
		$gambar = $datax['gambar'];
		$harga = $datax['harga'];
		$hargaf = number_format($harga, 0, ',', '.');
	}
?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>

	<div id="imgindex">
		<div id="imglog">
			<p><br>Selamat Datang<br>
				*********<br>&nbsp;</p>
		</div>
	</div>

			<div id="reservasi">
				<li>Reservasi</li>
				<center>
				<form method="post" action="pemesanan" name="opsi">
					<table>
						<tr>
							<td>Check-In</td>
							<td>Check-Out</td>
							<td>Type</td>
							<td>Harga/Malam</td>
							<td></td>
						</tr>
						<tr>
							<td>
								<input type="date" name="cekin">
							</td>
							<td>
								<input type="date" name="cekout">
							</td>
							<td>
								<select name="tipe" id="selek" required="required" onchange="pilih()" style="font-weight: bold;">
									<option selected="selected" disabled="disabled">-Pilih-</option>
									<option value="Rp 410.000">Superior</option>
									<option value="Rp 450.000">Deluxe</option>
									<option value="Rp 700.000">Junior Suite</option>
									<option value="Rp 1.200.000">Executive</option>
								</select>
							</td>
							<td>
								<input type="text" name="harga" style="width: 100px;" onchange="pilih()">
								<input type="hidden" name="tipex" style="width: 100px;" onchange="pilih()">
							</td>
							<td>
								<input type="submit" name="ok" value="Pesan" id="tombol">
							</td>
						</tr>
					</table>
				</form>
				<center>
			</div>

			<div id="tentang">
				<h3>Tentang Kami</h3><br>
					<p>
					Hotel Mewah
				</p><br>
				<p>
					Fasiltas Lengkap
				</p>
	
			</div>

			<div id="cekinout">
				<h3>Check-In &amp; Check-Out</h3><br>
				<h4>Check-In</h4>
				<p>Jam Check-In Standar : 12.00 WITA</p>
				<p>*Waktu Check-In dari plan mempunyai prioritas lebih besar</p><br>
				<h4>Check-Out</h4>
				<p>Jam Check-Out Standar : 12.00 WITA</p>
				<p>*Waktu Check-Out dari plan mempunyai prioritas lebih besar</p><br>
			</div>

			</center>
	

<?php
	require_once "view/footer.php"
?>