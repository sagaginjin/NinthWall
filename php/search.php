<!DOCTYPE html>
<html>
    <head>
        <title>Search results</title>
        <meta charset="UTF-8">
    </head>
    <body>
    
        <?php

            $search = $_GET['search'];

            echo $search;
            header('Location: index.html');

        ?>

    </body>
</html>
