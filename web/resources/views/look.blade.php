<!DOCTYPE html>
<html> 
<head>
<title>CONTROL STRUKTUR PADA BLADE TEMPLATE</title> 
</head>
  <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>