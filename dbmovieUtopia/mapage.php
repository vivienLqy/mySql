<body>
    <h1>Ton prenom est
    <?php 
    if (!empty($_POST['prenom'])) {
        echo $_POST['prenom'];
    }else {
        echo 'john doe';
    }
    ?> et ton email est <?= $_POST['mail']; ?></h1>

    <?php
    var_dump($_POST);
    ?>
    
</body>