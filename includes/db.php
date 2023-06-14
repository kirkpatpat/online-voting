<?php 
$db = new Database(DB_HOST, DB_NAME, DB_USERNAME, DB_PASS, DB_PORT);
return $db->getConn();