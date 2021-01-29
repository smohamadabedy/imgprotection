<pre><?php
session_start();

$con = new mysqli('','','','');


if(isset($_POST['p'])){
$inf = $_POST;

$info = $con->query("select * from `user` where (`uname` = '{$inf['p'][0]}' AND `pass` = '{$inf['p'][1]}')")->fetch_array();
print_r($info);
if($info != null ){
    if(  $info['folder'] != ""){
$_SESSION['level'] = $info['folder'];
    }
    else{
    $_SESSION['level'] = "demo";
}
}else{
    $_SESSION['level'] = false;
}

}else{
    $_SESSION['level'] = false;
}

if($_SESSION['level'] != false){
    echo 'you are login && you have access to '.$_SESSION['level'];
}else{
    echo 'your not login';
}
?>
</pre>
<form method="post">
<input placeholder="username" type="text" name="p[]"/>
<input placeholder="password" name="p[]"/>
<input type="submit" value="login" />
</form>





<script>

document.write('<a href="http://mysitegig.gigfa.com/testpic/img/foldera/a1.jpg" target="_blank">a1</a><hr/>'+
'<a href="http://mysitegig.gigfa.com/testpic/img/foldera/a2.jpg" target="_blank">a2</a><hr/>'+
'<a href="http://mysitegig.gigfa.com/testpic/img/foldera/a3.jpg" target="_blank">a3</a><hr/>'+
'<a href="http://mysitegig.gigfa.com/testpic/img/folderb/b1.jpg" target="_blank">b1</a><hr/>'+
'<a href="http://mysitegig.gigfa.com/testpic/img/folderb/b2.jpg" target="_blank">b2</a><hr/>'+
'<a href="http://mysitegig.gigfa.com/testpic/img/folderb/b3.jpg" target="_blank">b3</a><hr/>'+
'<a href="http://mysitegig.gigfa.com/testpic/img/folderc/c1.jpg" target="_blank">c1</a><hr/>'+
'<a href="http://mysitegig.gigfa.com/testpic/img/folderc/c2.jpg" target="_blank">c2</a><hr/>'+
'<a href="http://mysitegig.gigfa.com/testpic/img/folderc/c3.jpg" target="_blank">c3</a><hr/>')









</script>
