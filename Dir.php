<?php
$user=$_POST['username'];
$pas=$_POST['password'];
$manlink=$user[0].$pas[0].$user[2].$pas[1];
$pat=$user.$pas.'.txt';
$a=scandir('pat/');
$h=$_SERVER['HTTP_HOST'];
$find=0;
if
for($i=2;$i<count($a);$i++){
    echo $a[$i]."----".$pat."----".$find."<br>";
    if($pat==$a[$i]){
        $find=1;
        break;}}
        echo $find;
    if($find==1){
        header('Location: http://'.$h.'/'.'saraha/mains/'.$manlink.'_main.php');
    }
else{
    echo "Uncoerrect username or password try again";
}
?>