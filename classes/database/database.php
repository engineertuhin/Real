<?php

class db{
private $host="db4free.net";
private $user="tuhin1191";
private $pass="tuhin1191";
private $database="tuhin1191";
public function connection(){

 return new mysqli($this->host,$this->user,$this->pass,$this->database);


}



}
if(mysqli_connect_errno()){
  echo "Database is not Connected";
}




















?>
