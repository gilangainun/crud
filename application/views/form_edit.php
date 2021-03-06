<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Rekap Kesehatan Siswa</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }
    p{
        margin : 0;
    }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Form Edit!</h1>
	<div id="body">
        <a href="<?php echo site_url('welcome/index/') ?>">Back</a>
        <?php if($dataEdit){
            $id = $dataEdit->no;
            $nama = $dataEdit->nama;
            $kelas = $dataEdit->kls;
            $tanggal = $dataEdit->tgl;
            $tb = $dataEdit->tb;
            $bb = $dataEdit->bb;
            $ket = $dataEdit->ket;
        }else{
            $nama = "";
            $kelas = "";
            $tgl = "";
            $tb = "";
            $bb = "";
            $ket = "";
        }?>
        <form action="<?php echo site_url('welcome/update/' .$id) ?>" method="POST"><br>
            <p>Tanggal</p>
			<input  type="text" name="tgl" value="<?php echo $tanggal ?>">
            <p>Nama Lengkap</p>
            <input  type="text" name="nama" value="<?php echo $nama ?>">
            <p>Kelas</p>
            <input  type="text" name="kls" value="<?php echo $kelas ?>">
			<p>Tinggi Badan</p>
			<input  type="text" name="tb" value="<?php echo $tb ?>">
			<p>Berat Badan</p>
            <input  type="text" name="bb" value="<?php echo $bb ?>">
			<p>Keterangan</p>
			<select name="ket">
				<option value="1" <?= $status = $ket?"selected":false; ?> >Sehat</option>
				<option value="0" <?= $status = $ket?false:"selected"; ?>>Sakit</option>
			</select><br><br>
            <input  type="submit" name="simpan" Value="Simpan">
		</form>
    </div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>