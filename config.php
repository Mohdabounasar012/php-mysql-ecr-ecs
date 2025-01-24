<?php
// Define constants for database connection
define("DB_SERVER", "docker-db.ch2wm0wuekno.ap-northeast-1.rds.amazonaws.com");  // Use 'db' as the host name since it's the service name in Docker
define("DB_USERNAME", "admin");
define("DB_PASSWORD", "Abounasar");
define("DB_NAME", "mydb");

// Create a connection to the database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully"; // Optional: You can remove this line in production
