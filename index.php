<?php
    session_start();

    include_once("functions/helper.php");

    $page = isset($_GET['page']) ? $_GET['page'] : false;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP E-Commerce</title>
</head>
<body>
    <header>
        <div class="jumbotron">
        </div>
        <nav>
        
        </nav>
    </header>
    <main>
        <?php
            $filename = "$page.php";
            if (file_exists($filename)) {
                include_once($filename)
            }else{
                include_once("main.php")
            }
        ?>
    </main>
    <footer>
    </footer>
    
</body>
</html>