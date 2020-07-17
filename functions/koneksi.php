<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "php";

    $koneksi = msqli_connect($server, $username, $password, $database) or die ("Koneksi ke database gagal");