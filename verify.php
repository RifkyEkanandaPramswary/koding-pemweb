<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

include 'config.php';

$username = $_POST["username"];
$password = $_POST["pwd"];
$flag = 'true';
//$query = $mysqli->query("SELECT email, password from users");

$result = $mysqli->query('SELECT id,email,password,Nama_Awal,type from users order by id asc');

if($result === FALSE){
  die(mysql_error());
}

if($result){
  while($obj = $result->fetch_object()){
    if($obj->email === $username && $obj->password === $password) {

      $_SESSION['username'] = $username;
      $_SESSION['type'] = $obj->type;
      $_SESSION['id'] = $obj->id;
      $_SESSION['Nama Awal'] = $obj->Nama_Awal;
      header("location:index.php");
    } else {

        if($flag === 'false'){
          redirect();
          $flag = 'true';
        }
    }
  }
}

function redirect() {
  echo '<h1>DATA YANG ANDA MASUKKAN TIDAK FALID...</h1>';
  header("Refresh: 3; url=index.php");
}


?>
