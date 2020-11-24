<?php
   define('HOST', 'sql12.freemysqlhosting.net:3306');
   define('USER','sql12378122');
   define('PASSWORD','zF5DlhLg2i');
   define('DATABASE','sql12378122');

   $conn = mysqli_connect(HOST,USER,PASSWORD,DATABASE) or
   die(json_encode("Couldn't connect to the database"));

  
