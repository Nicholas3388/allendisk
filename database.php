<?php

/*
Allen Disk 1.6
Copyright (C) 2012~2016 Allen Chou
Author: Allen Chou ( http://allenchou.cc )
License: MIT License
*/
header('Content-Type:text/html; charset=utf-8');
include 'class/sql.class.php';
$config['sql']['host'] = ''; // MySQL Host
$config['sql']['dbname'] = ''; // MySQL Database Name
$config['sql']['username'] = ''; // MySQL Username
$config['sql']['password'] = ''; // Password for the user
$db = new MySQL($config['sql']['dbname'], $config['sql']['username'], $config['sql']['password'], $config['sql']['host']);
$GLOBALS['db'] = $db;
