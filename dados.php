<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="dados do formulário">
    <meta name="author" content="">
    <meta name="keywords" content="html,css, javascript">
    <title>Dados</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" class="fontegoogle"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">

            <div class="col-md-4 left-side">
            </div>

            <div class="col-md-8 right-side">
                <nav class="container" style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="autores.html">Autores e Editoras</a></li>
                        <p class="mx-2">></p>
                        <li class="breadcrumb-item active" aria-current="page">Autor</li>
                    </ol>
                </nav>
                <div class="dados">
                    <h3>Dados Recebidos</h3>
                    <?php
                    $isbn = $_POST['isbn'];
                    $autor = $_POST['autor'];
                    $nome = $_POST['nome'];
                    $ano = $_POST['ano'];
                    $edicao = $_POST['edicao'];
                    $data = $_POST['data'];
                    $dataFormatada = new DateTime($data);
                    $arquivo = $_FILES['foto']['name'];
                    $genero = isset($_POST['genero']) ? $_POST['genero'] : "Não informado";


                    if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
                        $nomeArquivo = $_FILES['foto']['name'];
                        $tmp = $_FILES['foto']['tmp_name'];

                        $nomeSemExtensao = pathinfo($nomeArquivo, PATHINFO_FILENAME);
                        $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);

                        $caminho = "img/form/" . $nomeSemExtensao . "_" . time() . "." . $extensao;
                        move_uploaded_file($tmp, $caminho);
                    }

                    echo "\t<p><strong>ISBN: </strong>$isbn</p>\n";
                    echo "\t<p><strong>Autor: </strong>$autor</p>\n";
                    echo "\t<p><strong>Nome: </strong>$nome</p>\n";
                    echo "\t<p><strong>Edição: </strong>$edicao</p>\n";
                    echo "\t<p><strong>Ano do livro: </strong>$ano</p>\n";
                    echo "\t<p><strong>Data de Publicação: </strong>" . $dataFormatada->format("d/m/Y") . "</p>\n";
                    echo "\t<p><strong>Gênero: </strong>$genero</p>\n";
                    echo "\t<p><strong>A acapa do livro é: </strong>$arquivo</p>\n";


                    if (isset($caminho)) {
                        echo "<div style='text-align:center; margin-top:15px;'>
                            <img src='$caminho' class='img-fluid' style='max-height:200px; border-radius:12px;'>
                        </div>";
                    }

                    ?>
                </div>
            </div>
        </div>


        <div class="container-centralizado">
            <div class="dados">
                <h3>Dados Recebidos</h3>
                <?php
                $isbn = $_POST['isbn'];
                $autor = $_POST['autor'];
                $nome = $_POST['nome'];
                $ano = $_POST['ano'];
                $edicao = $_POST['edicao'];
                $data = $_POST['data'];
                $dataFormatada = new DateTime($data);
                $arquivo = $_FILES['foto']['name'];
                $genero = isset($_POST['genero']) ? $_POST['genero'] : "Não informado";


                if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
                    $nomeArquivo = $_FILES['foto']['name'];
                    $tmp = $_FILES['foto']['tmp_name'];

                    $nomeSemExtensao = pathinfo($nomeArquivo, PATHINFO_FILENAME);
                    $extensao = pathinfo($nomeArquivo, PATHINFO_EXTENSION);

                    $caminho = "img/" . $nomeSemExtensao . "_" . time() . "." . $extensao;
                    move_uploaded_file($tmp, $caminho);
                }

                echo "\t<p><strong>ISBN: </strong>$isbn</p>\n";
                echo "\t<p><strong>Autor: </strong>$autor</p>\n";
                echo "\t<p><strong>Nome: </strong>$nome</p>\n";
                echo "\t<p><strong>Edição: </strong>$edicao</p>\n";
                echo "\t<p><strong>Ano do livro: </strong>$ano</p>\n";
                echo "\t<p><strong>Data de Publicação: </strong>" . $dataFormatada->format("d/m/Y") . "</p>\n";
                echo "\t<p><strong>Gênero: </strong>$genero</p>\n";
                echo "\t<p><strong>Arquivo enviado: </strong>$arquivo</p>\n";


                if (isset($caminho)) {
                    echo "<div style='text-align:center; margin-top:15px;'>
            <img src='$caminho' class='img-fluid' style='max-height:200px; border-radius:12px;'>
          </div>";
                }

                ?>
                <div class="text-center mt-3">
                    <a href="form.php">
                        <button class="btn btn-custom btn-rosa">Voltar</button>
                    </a>
                </div>
            </div>
        </div>

        <script src="js/exemplo.js"></script>
</body>

</html>