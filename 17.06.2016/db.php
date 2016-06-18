<?php

include 'class/database.php';

$db = new Databae('localhost', 'root', '', 'test');
$db->connect();

//$db->update('student', array('name' => 'Code', 'surname' => 'Academy'), array('id', 1));
//$db->insert('student', array("dasda", "Nasib", '055 629 8878'), array('name', 'surname', 'phone'));
//$db->delete('student', 'id=25');

$db->select('student');
$res = $db->getResult();

print_r('<pre>');
print_r($res);
print_r('</pre>');
