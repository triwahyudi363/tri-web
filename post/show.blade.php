<!doctype html>
<html>
<head>

	<title>CONTROL STRUKTUR PADA BLADE TEMPLATE</title>
</head>
<body>

	@if (count($post)== 1)
	<p>Jumlah Produk adalah satu</p> 

	@else if (count($post) > 1)
	<p>Jumlah Produk Lebih dari satu</p>

	@else
	<p> Tidak Ada Data Produk</p> 
	@end if

</body>
</html>