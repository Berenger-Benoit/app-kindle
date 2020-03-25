<?php
require 'templates/header.php';  
require 'books.php'; 


?>
    <div class="screen_content">
        <h1 class="title">Ma liste de livres</h1>
        <div class="images">
        <?php foreach($books as $key => $book) : ?>
            <a href="page.php?livres=<?= $key ?>"><img src="images/<?= $book['image']?>" alt="couverture de - <?=$book['titre']?>"></a>
        <?php endforeach; ?>
        </div>
            <a href="index.php">Changer de vue</a>
    </div>


<?php require 'templates/footer.php'; ?>