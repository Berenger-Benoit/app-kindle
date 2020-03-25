<?php
require 'templates/header.php';  
require 'books.php'; 
?>
    <div class="screen_content">
        
    <div class="wrap">
        <div class="list-book">
        <?php foreach($books as $book) : ?>
            <div><strong class="book-title"><?= $book['titre']?></strong> - <em class="book-auteur"><?= $book['auteur']?></em><span class="book-annee"><?= $book['annee']?></span></div>
        <?php endforeach; ?>
        </div>
    </div>
    <a href="home.php">Changer de vue</a>
    </div>

<?php require 'templates/footer.php'; ?>