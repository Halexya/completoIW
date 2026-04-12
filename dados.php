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

</head>

<body>
    <div class="container-fluid h-100">
        <div class="row h-100">

            <div class="col-md-4 left-side">
            </div>
     <nav class="navbar navbar-expand-lg fixed-top">    
                                          
        
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/icone.png" alt="logo" class="logo ms-3 mt-2">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Estante</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Autores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="graficos.html">Mais lidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Avaliações</a>
                    </li>
>>>>>>> 2211bc8680fd9f28b53addf3cd9db74a15fd297c

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

    </nav> 

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
                    <button  class="btn btn-custom btn-rosa">Voltar</button>
                </a>
            </div>
        </div>
    </div>

    <script src="js/exemplo.js"></script>
</body>

</html>