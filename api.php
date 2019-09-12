<?php

$get_data = file_get_contents("http://dummy.restapiexample.com/api/v1/employees");

print_r($get_data['id']);
