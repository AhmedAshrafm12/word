<?php
session_start();
$user=$_POST['username'];
$pas=$_POST['password'];
$users='users/';
$accs='accs/';
$manlink=$user[0].$pas[0].$user[2].$pas[1];
$a=scandir($users);
$h=$_SERVER['HTTP_HOST'];
$pat=$user.$pas;
$u=strval($pat);
$find=false;
for($i=0;$i<count($a);$i++){
    if($a[$i]==$user.'.txt'){
    $find=true;
    break;
    }
}
if($find==false){
    $r=rand();
    $m=rand();
    mkdir('files/'.$r);
    file_put_contents('link/'.$user.'.php','<?php  $us='.$r.';include("../massage.php");?>');
    file_put_contents($accs.$r.'.php','<?php $d='.$r.'; $a=scandir("../files/".$d."/");$c=count($a)-2;$mas=$_POST["username"];file_put_contents("../files/".$d."/"."mas".$c.".txt",$mas);include("../th.html");?>');
    file_put_contents($users.$user.'.txt',$r);
    file_put_contents('mains/'.$manlink.'_main.php','<?php  $u="'.$user.'"; $m="'.$m.'"; include("../main.php");?>');
    file_put_contents('pat/'.$pat.'.txt',"pas");
    file_put_contents('massegs/'.$user.'mass.php','<?php $d='.$r.'; $a=scandir("../files/".$d."/"); include("../sh.php");?>');
$_SESSION["user"] = $user;m
$_SESSION["pass"] = $pas;
$_SESSION['link']=$pat.'.php';
$_SESSION['dir']=$pat;
header('Location: http://'.$h.'/'.'saraha/mains/'.$manlink.'_main.php');
}

else{
    echo 'the user name is already in use try snother one';
};


?>