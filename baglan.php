<?php 
$username="root";
$password="123";
$sunucu="localhost";
$database="magexpress";

@$baglan=mysqli_connect($sunucu,$username,$password);
mysqli_query("SET NAMES UTF8");
if (!$baglan) 
{
  echo "Bağlantı Hatası :".mysqli_error();
  echo "bh";
  exit();
}
$db=mysqli_select_db($database);
if (!$db) 
{ echo "Veritabanı Hatası :".mysqli_error(); echo "<br>"; exit();}
echo "string";

 ?>