<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../school project/views/nav.css">
        <link rel="stylesheet" href="../school project/views/form.css">
    </head>
    <header>
        <?php
            require_once("../school project/Partials/emptyheader.php");
        ?>
    </header>
    <main>
        <body>
        <button class="return"><a href="index.php">Return to Homepage</a></button>
            <?php 
                require_once("../school project/Partials/register.form.php");
            ?>
        </body>
    </main>
    <footer>
        <?php
        require_once("../school project/Partials/footer.php");
        ?>
    </footer>
</html>