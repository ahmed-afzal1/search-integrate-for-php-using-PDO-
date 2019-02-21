<?php
$dsn = 'mysql:host=localhost;dbname=search';
$con = new PDO($dsn,'root','');
if($con){
try {

} catch (\Exception $e) {
  $e->getMessage();
}

}
