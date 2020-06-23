<?php

$number= $_POST['number_entered'];
$form_result= $_POST['form'];

if (isset($form_result)){
if (is_numeric($number)) {
echo 'The number you entered is ' . $number. '. This is a valid number.';
}
else {
echo 'Error: You did not enter numbers only. Please enter only numbers.';
}
}
