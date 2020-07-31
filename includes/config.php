<?php
//сюда все ключевые константы через const или define
//или через JSON
//или через ассоциативный массив
	
const DB_HOST = "localhost";
const DB_LOGIN = "student";
const DB_PASSWORD = "Vfqmppf7JIBCdfzk";
const DB_NAME = "showcase";
const PRODUCTS_ON_PAGE = 6;
const NEWS_ON_PAGE = 9;
const NEWS_ON_SIDEBAR = 6;
//const ORDERS_LOG = "orders.log";
	
$link = mysqli_connect(DB_HOST, DB_LOGIN, DB_PASSWORD, DB_NAME);
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
	
	