
<?php
include "config.php"; 
session_start();
if(!isset($_SESSION['user']))
 header("location:index.php");


?>

<head>
    <link href="sar.css"  rel="styleSheet">
    <link href="css/all.min.css" rel="stylesheet">    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
          .get{
            display: block;
            width: 100px;
            margin-top: 6%;
            border: none;
font-weight: bold;
font-size: 19px;
        }
        .get:hover{
          text-decoration:underline;
        }
        .mas{
            display: block;
            color: #fff;
        }
        .fform{
            padding: 95px 35px;
        }
        .hid{
            display:none;
        }
        a{
          font-weight: bold;
text-decoration: none;
font-size: 20px;
text-align:center;
        }
        a:hover{
          color:black;
        }
        p{
         text-align:center;
        }
    </style>
    </head>
    <body>
 



    
        <nav class="navbar navbar-inverse navbar-fixed-top" style="padding: 10px; ">
            <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><span>Word </span></a>
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.html">Sign Up</a></li>
                             </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          <section class="container">
          <div class="row">
              <div class="col-lg-3"></div>
              <div class="main">
    <div class="fform" >
    <h2> Welcome <?php echo $_SESSION['user'];?></h2>
   <a  href="<?php echo "sh.php?usid=".$_SESSION['uid']; ?>" class="mas" target="_blank">My massages <i class="fas fa-envelope-open-text"></i></a>
   <button class="get" style="right: 40%;" id="get">Get link</button><br><br><br><br>
   <p class="link hid"><?php $h=$_SERVER['HTTP_HOST']; echo " http://".$h.'/saraha/massage.php?usid='.$_SESSION['uid'];?>  </p>
    </div>
    </div>
</div>
</div>
</section>

<script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="sar.js"></script>
    
    </body>