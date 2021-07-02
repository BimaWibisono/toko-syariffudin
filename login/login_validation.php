<?php 

if(isset($_POST['login'])){

    echo $_POST['username'];
    echo "<br>";
    echo $_POST['password'];
}else {
    echo "no data";
}
?>