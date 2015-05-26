<?php 
  // Создадим базу данных 
  $db = sqlite_open("my_database.db"); 
  if (!$db) exit("Не удалось создать базу данных!"); 
?>