<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title><?php echo $pageTitle; ?></title>
</head>

<body>
	<h1><?php echo $pesanPertama; ?></h1>
	<p><?php echo $pesanKedua; ?></p>
	<p><?php echo $pesanKetiga; ?></p>

	<hr>
	<h1>Data ini diambil dari Model_film</h1>

	<ul>
		<?php foreach ($film->result() as $row) : ?>
			<li>
				<p><?php echo $row->judul; ?></p>
				<span>Tahun terbit : <?php echo $row->tahun_terbit; ?></span> | <span> Rating : <?php echo $row->rating; ?></span>
			</li>
			<ul>
				<img src="<?php echo $row->poster; ?>" alt="">
			</ul>
		<?php endforeach; ?>
	</ul>

</body>

</html>