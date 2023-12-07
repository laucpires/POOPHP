<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<title>PHP POO</title>
</head>

<body>
    <?php
    require_once "Video.php";
    require_once "Gafanhoto.php";
    require_once "Visualizacao.php";

    $v[0] = new Video("Aula 1 de POO");
    $v[1] = new Video("Aula 12 de PHP");
    $v[2] = new Video("Aula 15 de HTML5");

    $g[0] = new Gafanhoto("Jubileu", 22, 'M', "Juba");

    $vis[0] = new Visualizacao($g[0], $v[2]);
    $vis[0] = new Visualizacao($g[0], $v[0]);

    $vis[0]->avaliar();

    echo "<pre>";
    var_dump($v[0]);
    echo "<p>-----------------------</p>";
    var_dump($g[0]);
    echo "<p>-----------------------</p>";
    var_dump($vis[0]);
    echo "</pre>";
    ?>
</body>

</html>