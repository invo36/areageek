<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../includes/conectar.php";
    require_once "../includes/funcoes.php";
    ?>

    <div>
        <?php
        if (!isset($_POST['assunto'])) {
            require "../forms/form-novo-assunto.php";
        } else {
            $assunto = $_POST['assunto'] ?? null;

            if (empty($assunto)) {
                echo 'Todos os dados são obrigatório!';
                require "../forms/form-novo-assunto.php";
            } else {
                $q = "insert into assunto (nome_ass) values ('$assunto')";
                if ($banco->query($q)) {
                    echo 'Categoria cadastrada!';
                    require "../forms/form-novo-assunto.php";
                } else {
                    echo 'Não foi possivel criar a categoria';
                    require "../forms/form-novo-assunto.php";
                }
            }
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>