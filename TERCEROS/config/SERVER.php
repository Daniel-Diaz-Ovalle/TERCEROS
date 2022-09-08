<?php

/*-----------CONEXIÓN A LA BASE DE DATOS Y SERVIDOR LOCAL*/

const SERVER = "localhost";
const DB     = "terceros";
const USER   = "root";
const PASS   = "";

/*pdo*/ 
const SGBD   = "mysql:host=".SERVER.";dbname=".DB;

const METHOD = "AES-256-CBC";
const SECRET_KEY = '$terceros@2022';
const SECRET_IV = '037970';