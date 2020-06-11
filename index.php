<?php include 'Back_End/getimage.php'; ?>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheet.css">
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <style>

  </style>
</head>
<body>
<div class="container">
<br><br>
<form name="imgs" id="images" method="post">
<input type="text" class="form-control mb-4" name="key" id="keyword" placeholder="Enter your keyword" value="<?php echo $keyword; ?>"/>
<p id="error" class="text-center"><?php echo $error; ?></p>
<button type="submit" id="subkeyword" name="subkey" class="btn btn-success btn-block">Submit</button>

</form>

</div>

<script>

</script>
</body>
</html>