<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Eloisa & Haléxya">
    <title>Formulário</title>
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/estilo1.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" class="fontegoogle"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>

    <div class="container-fluid vh-100">
        <div class="row h-100">

            <!-- LADO AZUL -->
            <div class="col-md-4 left-side">

                <h1>Organize suas leituras com o Bookly! </h1>
                <p>Cadastre seus livros e acompanhe sua biblioteca pessoal.</p>
            </div>

            <!-- LADO FORMULÁRIO -->
            <div class="col-md-8 right-side">
                <nav class="container mt-3" style="--bs-breadcrumb-divider: '';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="prateleira.html">Prateleira</a></li>
                        <p class="mx-2">></p>
                        <li class="breadcrumb-item"><a href="cadastrar.php">Cadastro</a></li>
                        <p class="mx-2">></p>
                        <li class="breadcrumb-item active" aria-current="page">Formulário</li>
                    </ol>
                </nav>
                <div class="container container-centralizado">
                    <div class="formulario">
                        <form name="form" class="row g-3 needs-validation mx-5 mt-2" action="dados.php" method="POST"
                            enctype="multipart/form-data" novalidate>
                            <h3 class="mt-3">Cadastro de livro</h3>
                            <div class="row g-2">
                                <div class="mb-3">
                                    <label for="isbn" class="form-label">Digite o ISBN</label>
                                    <input type="text" class="form-control" name="isbn" id="isbn" minlength="10"
                                        maxlength="13" pattern="\d{10,13}" placeholder="978-85-1234-567-8" required>

                                    <div class="invalid-feedback">
                                        O ISBN deve ter entre 10 e 13 dígitos numéricos.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="autor" class="form-label">Autor</label>
                                    <input type="text" class="form-control" name="autor" id="autor"
                                        placeholder="Monteiro Lobato" required>
                                    <div class="invalid-feedback">
                                        Por favor, coloque o nome do livro.
                                    </div>
                                </div>

                                <div class="col-sm-8">
                                    <label for="nome" class="form-label">Nome do livro</label>
                                    <input type="text" class="form-control" name="nome" id="nome" placeholder="nome"
                                        required>
                                    <div class="invalid-feedback">
                                        Por favor, coloque o nome do livro.
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <label for="edicao" class="form-label">Edição</label>
                                    <input type="number" class="form-control" name="edicao" id="edicao" min="1"
                                        max="200" required>
                                    <div class="invalid-feedback">
                                        Informe a edição do livro.
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-3">
                                    <label for="ano" class="form-label">Ano do livro</label>
                                    <input type="number" class="form-control" name="ano" id="ano" placeholder="1450"
                                        min="1450" max="2026" required>
                                    <div class="invalid-feedback">
                                        Informe um ano válido para o livro.
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="data" class="form-label">Data de cadastro</label>
                                    <input type="date" class="form-control" name="data" id="data" min="1450-01-01"
                                        max="2026-04-30" required>
                                    <div class="invalid-feedback">
                                        Por favor, selecione uma data válida.
                                    </div>
                                </div>
                            </div>
                            <!--  <div class="col-md-9 m-3">
                            <label for="arquivo" class="form-label">Foto do livro</label>
                            <input class="form-control" type="file" name="arquivo" id="arquivo" required>
                            <div class="invalid-feedback">
                                Por favor, coloque um arquivo.
                            </div> -->

                            <div class="col-md-9">
                                <label for="edicao" class="form-label">Edição</label>
                                <select class="form-select" name="genero" required>
                                    <option selected disabled value="">Escolha o gênero</option>
                                    <option value="Romance">Romance</option>
                                    <option value="Suspense">Suspense</option>
                                    <option value="Terror">Terror</option>
                                    <option value="Fantasia">Fantasia</option>
                                    <option value="Mitologia">Mitologia</option>
                                    <option value="Ficcao">Ficção</option>
                                    <option value="Misterio">Mistério</option>
                                    <option value="Classico">Clássico</option>
                                    <option value="Distopia">Distopia</option>
                                </select>
                            </div>



                            <div class="co-md-9 mt-3">
                                <label class="form-label">Foto do livro</label>
                                <input class="form-control" type="file" name="foto" id="foto" accept="image/*" required>
                                <div class="invalid-feedback">
                                    Por favor, coloque um arquivo.
                                </div>
                                <!-- Preview da imagem -->
                                <div class="mt-3 d-flex justify-content-center">
                                    <img src="img/imagem1.png" alt="" class="main-imagem img-fluid rounded border"
                                        style="max-height: 180px;">
                                </div>

                                <p class="fst-italic m-2" style="color: #777;">Escolha uma foto da capa do livro</p>
                            </div>


                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-rosa m-3">Enviar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>