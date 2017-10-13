<!DOCTYPE HTML>
<?php
  $baal = rand(0,4);
  $array = array('Yup.','Nope.','Maybe.','Some times.','Are you kidding me?');
  $q = $_POST["q"];
?>
<html>
  <head>
    <link href="ball.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
      <p class="p">
        <?php echo $q; ?>
      </p>
      <div class="q">
        <?php
        echo $array[$baal];
        ?>
        <a href="form.php">Ask again</a>
      </div>
    </div>
  </body>
</html>
