<?php
    session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="calc.css">
    <title>CGPA CALCULATOR</title>
    <style>img[alt="www.000webhost.com"]{display:none;}</style>
  </head>
  <body class="calcbg">
    <section class="container-fluid">
      <section class="row justify-content-center">
        <section class="col-12 col-sn-6 col-md-3">
          <?php
              error_reporting(0);
              $PP=0;
              $ts=$_POST['total_sub'];
              $tt=$_POST['total_theory'];
              $tl=$_POST['total_lab'];
              $to=$_POST['total_onecredit'];
              $PP=$_POST['PP2'];
              if($ts==$tt+$tl+$to+$PP)
              {
                ?>
                <form class="form-grade" method="post" action="validate.php" enctype="multipart/form-data">
                <img src="peclogo.png" class="h_logo"></img>
                <h1>CGPA CALCULATOR</h1><br>
                <?php
                if($tt>0)
                {
                  ?>
                  <h2>THEORYS</h2><?php
                  for($i=0;$i<$tt;$i++)
                  {
                    $z=$i+1;?>
                    <p><br>Enter your theory subject <?php echo $z?>'s grade:</p>
                    <input type=number name=theory[] min="0" max="10" placeholder="Enter the grade here" Required><br><?php
                  }
                }      
                if($tl>0)
                {
                ?>
                <h2>LABS</h2><?php
                for($i=0;$i<$tl;$i++)
                {
                    $z=$i+1;?>
                    <p><br>Enter your lab subject <?php echo $z?>'s grade:</p>
                    <input type=number name=lab[] min="0" max="10" placeholder="Enter the grade here" Required><br><?php
                }
                }
                if($to>0)
                {
                ?>
                  <h2>ONE CREDITS</h2><?php
                  for($i=0;$i<$to;$i++)
                  {
                    $z=$i+1;?>
                    <p><br>Enter your one credit subject<?php echo $z?>'s grade:</p>
                    <input type=number name=onecredit[] min="0" max="10" placeholder="Enter the grade here" Required><br><?php
                  }
                }
                if($PP>0)
                {
                  ?>
                  <h2><br>PROJECT WORKPHASE 2</h2>
                  <p><br>Enter your Project work phase 2 grade:</p>
                  <input type=number name=projectwork min="0" max="10" placeholder="Enter the grade here" Required><br><?php
                }
                ?>
                <input type="submit" name="submit" value="SUBMIT"><br>
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                    $su=(($tt*4)+($tl*2)+($to)+($PP*6));
                    $_SESSION['sum']=$su;
                    $_SESSION['tt']=$tt;
                    $_SESSION['tl']=$tl;
                    $_SESSION['to']=$to;
                    $_SESSION['pp']=$PP;
                }?>
                </form>
                <?php
                
              }
              else
              {
                echo '<script>
                alert("You have made a wrong entry");
                window.location="CGPA.php";
                </script>';
              }
          ?>
        </section>
      </section>
    </section>
  </body>
</html>