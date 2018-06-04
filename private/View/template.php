<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<header>
            <div class="container">
                <div class="menu">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li>Меню</li>
                        <li>Акции</li>
                        <li><a href="/poster">Афиша</a></li>
                        <li><a href="/registration">Регистрация</a></li>
                        <li><a href="/feedback">Обратная связь</a></li>
                    </ul>
                </div>
                <div class="logo">
                    
                </div>
            </div>        
        </header>
    <div class="container">
        <div class="main">
    <?php include $view; ?>
        </div>
    </div>
</body>
</html>