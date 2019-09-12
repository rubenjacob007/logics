<?php

return[
   
   'database'=>[
        'connection'    =>'mysql:host=localhost',
        'dbname' => 'laracasts_learning',
        'username' => 'root',
        'password' =>'',
        
        'options' =>[
          PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION
        ]

   ]

];