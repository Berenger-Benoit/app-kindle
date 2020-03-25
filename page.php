<?php
require 'templates/header.php';

$book = $_GET['livres'];

require 'livres/'.$book.'.php';

require 'templates/footer.php';
