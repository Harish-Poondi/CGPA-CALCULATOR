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
    <?php
    
    $i=0;$j=0;$k=0;$l=0;
    if(!empty($_SESSION['sum'])){
      $den=$_SESSION['sum'];
    }
    else
    {
        $den=1;
    }
    if(!empty($_SESSION['tt'])){
        $theorycount=$_SESSION['tt'];
        if($theorycount>0)
        {
            $th=$_POST['theory'];
            for($in=0;$in<$theorycount;$in++)
            {
                if($th[$in]>0&&$th[$in]<5)
                {
                $th[$in]=0;
                }
            }
            $i=4*array_sum($th);
        }
    }

    if(!empty($_SESSION['tl'])){
        $labcount=$_SESSION['tl'];
        if($labcount>0)
        {
            $lab=$_POST['lab'];
            for($in=0;$in<$labcount;$in++)
            {
                if($lab[$in]>0&&$lab[$in]<5)
                {
                $lab[$in]=0;
                }
            }
            $j=2*array_sum($lab);
        }
    }

    if(!empty($_SESSION['to'])){
        $onecreditcount=$_SESSION['to'];
        if($onecreditcount>0)
        {
            $oc=$_POST['onecredit'];
            for($in=0;$in<$onecreditcount;$in++)
            {
                if($oc[$in]>0&&$oc[$in]<5)
                {
                $oc[$in]=0;
                }
            }
            $k=array_sum($oc);
        }
    }

    if(!empty($_SESSION['pp'])){
        $projectcount=$_SESSION['pp'];
        if($projectcount>0)
        {
            $l=$_POST['projectwork'];
            if($l>0&&$l<5)
            {
                $l=0;
            }
        }
    }

    $num=$i+$j+$k+$l;
    if($den>0){
        $res=$num/$den;
    }
    echo '<script>
    alert("The CGPA is :'.$res.'");
    window.location="CGPA.php";
    </script>'
    ?>
  </body>
</html>
