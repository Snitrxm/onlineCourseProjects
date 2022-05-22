<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "shortcut icon" href = "src/images/icon.png">
    <link rel = "stylesheet" href = "src/css/main.css">
    <title> Página Inicial </title>
</head>
<body>
    <header id = "header">
        <nav id = "nav">    
        <ul class = "menu">
            <a href = "index.php"><li>Pagina Inicial</li></a>
            <a href = "src/frontEnd/cursos.phtml"><li>Cursos</li></a>
            <a href = "src/frontEnd/sobre.phtml"><li>Sobre</li></a>
        </ul>
        <ul class = "menu">
            <a href = "src/frontEnd/login.phtml"><li>Login</li></a>
            <a href = "src/frontEnd/cadastro.phtml"><li>Cadastro</li></a>
        </ul>
        </nav>
        <div id = "headerImage">
            <img src = "src/images/icon.png" id = "headerImageIcon">
            <div id = "headerImageIconCourse">
                <img src = "src/images/index/html.png">
                <img src = "src/images/index/css.png">
                <img src = "src/images/index/js.png">
                <img src = "src/images/index/php.png">
                <img src = "src/images/index/java.png">
                <img src = "src/images/index/python.png">
            </div>
        </div>
    </header>
    <div id = "content">
        <div id = "contentImageTitle">
            <h1>WOLF ACADEMY</h1> 
        </div>
        <section id = contentHighlight>
            <div class = "highlight">
                <img src = "src/images/index/highlight1.png">
            </div>
            <div class = "highlight">
                <img src = "src/images/index/highlight1.png">
            </div>
            <div class = "highlight">
                <img src = "src/images/index/highlight1.png">
            </div>
            <div class = "highlight">
                <img src = "src/images/index/highlight1.png">
            </div>
            <div class = "highlight">
                <img src = "src/images/index/highlight1.png">
            </div>  
        </section>
    </div>
</body>
</html>