<?php
include 'connection.php';
$con->query("
create table people(
id int(11) auto_increment primary key,
name varchar(50) not null,
email varchar(50) not null
)
");
