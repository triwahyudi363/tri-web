<!doctype html>
<html>
<head>

	<title>CONTROL STRUKTUR PADA BLADE TEMPLATE</title>
</head>
 <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->

        <!-- /.content -->
    </section>
    <!-- /.main-section -->
<body>

@if (count($post) == 1)
    I have one record!
@elseif (count($post) > 1)
<p> perulangan dengan for </p><b>
@for ($i = 1; $i<count($post); $i++)
<p> {{ 'no : ' .$i.  ' nama produk :  ' .$post[$i] }} </p>
@endfor

@else
   <p>nonononoo</p>
@endif 

</body>
</html>