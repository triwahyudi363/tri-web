<!doctype html>
<html>
<head>
    <title>controller pelanggan</title>
</head>
<body>
    <h1>data pelanggan </h1>
     <table border="1">
     	<thead>
     		<tr>
     			<th>No</th>
     			<th>Nama</th>
     		</tr>
     
     	</thead>
     	<tbody>
     		@foreach ($pelanggan as $i => $v)
     		<tr>
     			<td>{{ $i+1 }}</td>
     			<td>{{ $v }}</td>
     		</tr>
     		@endforeach
     	</tbody>
     </table>
</body>
</html>