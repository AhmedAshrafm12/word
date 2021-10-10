<?php include "config.php"; 

if($_SERVER['REQUEST_METHOD']=="POST"){
    $user= $_POST['username'];
    $pass= $_POST['password'];
  $hash=sha1($pass);
    $stmt=$con->prepare("SELECT * from users where username=? and password=? limit 1");
     $stmt->execute(array($user,$hash));
   $row=  $stmt->fetch();
   $count=$stmt->rowcount();
  
if($count==1){
    session_start();
    $_SESSION['user']=$row['username'];
    $_SESSION['uid']=$row['id'];
    header("location:main.php");
}
else{
    header("location:sin.php");
}


}

?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="sar.css"  rel="styleSheet">
    <link href="css/font-awesome.min.css"  rel="styleSheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
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
                <a class="navbar-brand" href="#"><span>Word </span><span>Make your words good</span></a>
              </div>
          
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                  <li><a href="index.php">Sign Up</a></li>
                             </ul>
              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
          <section class="container">
          <div class="row">
              <div class="col-lg-3"></div>
              <div class="col-lg-5">
    <div class="main">
    <div class="fform" >
    <h2>  sign in</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
        <div class="g">
        <input class="1" name="username" placeholder="UseName">
    </div>
    <div class="g">
        <input  class="2" name="password" type="password" placeholder="Password">
    </div>
        <br>
        <button>Connect</button><br><br>
        <a href="index.php">create</a>
    </form>
    </div>
    </div></div>
</div>
    
</section>

<script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>