
<?php
require('Task.php');
   

require('function_laracasts.php');
$pdo = connect_to_db();
$tasks = query($pdo);

require('index.view.php');