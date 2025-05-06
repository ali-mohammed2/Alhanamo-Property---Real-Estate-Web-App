<?php
 $db = new mysqli('smcse-stuproj00.city.ac.uk', 'adbs928', '200016365', 'adbs928');
 if ($db->connect_error) {
 printf("Connection failed: %s/n" . $db->connect_error);
 exit();
 }
?> 