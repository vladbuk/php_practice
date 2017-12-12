<?php
$title = "Hello, World!";
$description = "This is first php app."
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>

    <section>
        <h2><?php echo $description; ?></h2>
        <p>
            А что собственно можно написать в самом первом приложении, 
            кроме Привет Мир? ))) Постоянная ссылка на эту страницу:
            <a href="/app01/index.php">app01</a>
        </p>
        <p><a href="/">Главная страница</a></p>
        
    </section>
    
</body>
</html>

