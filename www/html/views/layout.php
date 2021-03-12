<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css" type='text/css'>
  <title><?php echo $title; ?></title>
</head>
<body>
  <?php include $content; ?>
</body>
</html>


<style type=”text/css”>

/*-----------------------------------
CSS
-----------------------------------*/

body {
  background-color: #2392d8;
}

label {
  display: block;
  margin-bottom: 7px;
  font-size: 86%;
}

input[type="text"],
textarea {
margin-bottom: 20px;
padding: 10px;
font-size: 86%;
  border: 1px solid #ddd;
  border-radius: 3px;
  background: #fff;
}

input[type="text"] {
width: 200px;
}
textarea {
width: 50%;
max-width: 50%;
height: 70px;
}
input[type="submit"] {
appearance: none;
  -webkit-appearance: none;
  padding: 10px 20px;
  color: #fff;
  font-size: 86%;
  line-height: 1.0em;
  cursor: pointer;
  border: none;
  border-radius: 5px;
  background-color: #37a1e5;
}
input[type=submit]:hover,
button:hover {
  background-color: #2392d8;
}

</style>
