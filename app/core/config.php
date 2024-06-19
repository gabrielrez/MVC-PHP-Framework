<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
  // Change the ROOT to the path of your project
  define('ROOT', 'http://localhost/microframework-mvc/public/');
} else {
  // Change the ROOT to your domain
  define('ROOT', 'https://www.mywebsite.com');
}
