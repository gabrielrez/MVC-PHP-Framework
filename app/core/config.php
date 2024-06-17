<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {
  // Change the ROOT to the path of your project
  define('ROOT', 'http://localhost/MVC%20micro-framework/public/');
} else {
  define('ROOT', 'https://www.yourwebsite.com');
}
