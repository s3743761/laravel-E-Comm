<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php  
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#"> Orders</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
    <form action="/search" class="navbar-form navbar-left">
    <div class ="form-group">
    <input type="text" name = "query" class = "form-control search-box" placeholder="Search">
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  </form>

    <ul class="nav navbar-nav navbar-right">
  
      <li><a href="#">Cart({{$total}})</a></li>
     
    </ul>
  </div>
</nav>
  

</body>
</html>