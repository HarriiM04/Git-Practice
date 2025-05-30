<?php
$env = parse_ini_file(__DIR__ . '/.env');

$host = $env['DB_HOST'];
$user = $env['DB_USER'];
$password = $env['DB_PASSWORD'];
$dbname = $env['DB_NAME'];

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Yess Connected with me !!!!!!";
}

/*

services:

  database:
    image: mysql:8.0
    restart: always
    container_name: mysql
    environment:
      MYSQL_ROOT_PASSWORD: root 
      MYSQL_DATABASE: Harrii
    ports:
      - "3306:3306"
    volumes:
      - mysql_data:/var/lib/mysql  # Persist MySQL Data
  
  phpmyadmin:
    image: phpmyadmin/phpmyadmin
    container_name: phpHari
    restart: always
    ports:
      - "8081:80"
    environment:
      PMA_HOST: database
      MYSQL_ROOT_PASSWORD: root
    depends_on:
      - database

  webserver:
    image: php:8.0-apache
    container_name: php-apache
    restart: always
    ports:
      - "8080:80"
    volumes:
      - .:/var/www/html  # Mount local files to the container
    depends_on:
      - database
    environment:
      - PHP_EXTENSION=mysqli  # Ensures MySQL support in PHP
    command: >
      bash -c "docker-php-ext-install mysqli && apache2-foreground"

volumes:
  mysql_data:  # Define volume for MySQL persistence

*/
?>

