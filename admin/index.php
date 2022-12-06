<?php
    include "fungsi/koneksi.php";
    session_start();
    if(isset($_SESSION['ceklog'])) {
        echo "<script>window.location.replace('beranda.php')</script>";
    }
    else {
        unset($_SESSION['ceklog']);
?>

<html>
<head>
	<title>Login Admin</title>
	<link rel="stylesheet" href="../css/styles.css" type="text/css"/>
    <link rel = "icon" href = "../Gambar/logoMP.png"  type = "image/x-icon">
</head>
<body>
<center>
	<div id="page">
		<li>Login Admin</li>
            <form method="post" action="fungsi/proseslogin">
                <table style="margin-top: 10px; margin-bottom: 10px;">
                    <tr>
                        <td style="width:100px;">Username</td>  
                        <td><input type="text" placeholder="Nama Pengguna" name="username"></td>
                    </tr>
						<td></td>
						<td></td>
					<tr>
					</tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" placeholder="Kata Sandi" name="password"></td>
                    </tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="Login" style="background:rgba(255,0,0,0.8);;color:white;padding:10px;width:80px;border:1px solid #fff;"></td>
                    </tr>
                </table>
            </form>
		</div>
    </center>
</body>
</html>

<?php
    }
?>