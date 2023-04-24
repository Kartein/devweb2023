<html>

    <head>
        <title>Cadastro de Curso</title>
        <link href="/projetoWeb2/arquivos/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="/projetoWeb2/arquivos/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="row mb-3 mt-2" >
            <h1>Cadastro de Curso</h1>
        </div>
        <div class="container">
            <form method="POST">
                <div class="row">
                    <div class="col col-md-8">
                        <label for="idnome">Nome:</label>
                        <input class="form-control" id="idnome" type="text" name="nome"><br>
                    </div>
                    <div class="col col-md-4">
                        <label for="idnota">Nota:</label>
                        <input class="form-control" id="idnota" type="number" name="nota"><br>
                    </div>
                </div>
            
                <input class="btn btn-primary" type="submit" value="Salvar">

            </form>
        </div>
        
    </body>

</html>