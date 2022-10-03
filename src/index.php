<?php
	$pdo = new PDO("mysql:host=db;dbname=mysql", "root", "mojeuzasneheslo");
	echo "Juchů, ono to funguje na cca. 10 řádků :-D";
	var_dump($pdo->query("SELECT * FROM `mysql`.`user`")->fetchall()); 
