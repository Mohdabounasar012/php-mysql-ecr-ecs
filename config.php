<?php
// Define constants for database connection
define("DB_SERVER", "db");  // Use 'db' as the host name since it's the service name in Docker
define("DB_USERNAME", "abou-user");
define("DB_PASSWORD", "Abou@123456");
define("DB_NAME", "registered");

// Create a connection to the database
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully"; // Optional: You can remove this line in production
