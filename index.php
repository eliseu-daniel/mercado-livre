<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livre Mercado</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php
        require_once('./menu/_nav.php');
        require_once('./menu/_navCategorias.php');
    ?>
    <div class="base">
        <div class="conteudo">
            <ul>
                <li>
                    <a href="./visualização/visuProd.php?id=$id"> <img src="./img/moana2.jpg"></a>
                    <p>Texto</p>
                    <p id="preco">Preço</p>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>