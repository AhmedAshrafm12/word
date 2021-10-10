<?php
include "config.php"; 
$user=$_GET['usid'];
?>
<html>
    <style>
        body{
            background:#eaffd0;
        }
        p{
            padding: 20px;
            border: 1px solid #6f6f24;
            border-radius: 15px;
            direction: rtl;
        }
        h1{
            text-align: center;
        }
        button{
            float:left;
            background:none;
            border:none;
            text-decoration:underline;
            cursor:pointer;
        }
    </style>
    <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>  
         <?php
            $stmt = $con->prepare("SELECT *FROM massages WHERE  usid=?");
            $stmt->execute(array($user));
            $rows=$stmt->fetchAll();
            $count=$stmt->rowcount();

    ?>
        <h1>Massegse(<?php echo $count?>)</h1>
       <?php 
        $x=1;
       foreach($rows as $r){
           echo "<p>".$r['content']."<button  class='del'>delete</button></p>";

       }
       ?>
           <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html