<?php
include 'connection.php';
$stmt = $con->prepare("
insert into people(name,email)
values
('sumon','sumon@gmail.com'),
('imtiaz','imtiaz@gmail.com'),
('sarwar','sarwar@gmail.com'),
('mehedi','mehedi@gmail.com'),
('jony','jony@gmail.com'),
('sagor','sagor@gmail.com'),
('ruma','ruma@gmail.com'),
('sinthia','sinthia@gmail.com'),
('bithe','bithe@gmail.com'),
('easmin','easmin@gmail.com'),
('karim','karim@gmail.com'),
('salam','salam@gmail.com'),
('niyon','niyon@gmail.com'),
('niloy','niloy@gmail.com')
");
$result = $stmt ->execute();
