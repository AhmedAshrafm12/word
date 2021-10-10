<?php include "config.php";
if($_SERVER['REQUEST_METHOD']=="POST"){
    $user= $_POST['username'];
    $pass= $_POST['password'];
  $hash=sha1($pass);
    $stmt=$con->prepare("INSERT into users(username	,password)
    VALUES (:zuser,:zpass)
     ");
     $stmt->execute(array(
     "zuser"=>$user,
     "zpass"=>$hash
     ));

}

?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="sa.css"  rel="styleSheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
 
  <?php /* echo date("Y-M-d : h-m"); */?>


    
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
                  <li><a href="sin.php">sign in</a></li>
                             </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          <section class="container">
          <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-5 ">
    <div class="main">
    <div class="fform" >
    <h2>  sign up</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="g">
        <input class="1" name="username" placeholder="UseName">
    </div>
    <div class="g">
        <input  class="2" name="password" type="password" placeholder="Password">
    </div>
        <br>
        <button>Connect</button><br><br>
        <a href="sin.php">Already have account</a>
    </form>
    </div>
    </div></div>
</div>
    
</section>

<script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>