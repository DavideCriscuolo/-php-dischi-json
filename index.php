<?php

require_once("./functions.php");


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Dischi</title>
</head>

<body>

    <main>
        <div class="container py-5 d-flex gap-3  ">
            <div class="row row-cols-4">

                <?php
                foreach ($listDischi as $disco) {


                ?>
                    <div class="col">
                        <div class="card text-start">
                            <img class="card-img-top" src="<?php echo $disco["url_cover"] ?>" alt="Title" />
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $disco["titolo"] ?></h4>
                                <h5 class="card-text"><?php echo $disco["artista"] ?></h5>
                                <p class="card-text"><?php echo $disco["anno_pubblicazione"] ?></p>
                                <p class="card-text"><?php echo $disco["genere"] ?></p>
                            </div>
                        </div>

                    </div>
                <?php }; ?>
            </div>




        </div>
        <div class="container">
            <form action="./functions.php" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label">Nome Disco</label>
                    <input
                        type="text"
                        class="form-control"
                        name="titolo"
                        id="titolo"
                        aria-describedby="helpId"
                        placeholder="Inserisci il tittolo del nuovo album" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Artista</label>
                    <input
                        type="text"
                        class="form-control"
                        name="artista"
                        id="artista"
                        aria-describedby="helpId"
                        placeholder="Inserisci il nome dell'artista" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Link Cover</label>
                    <input
                        type="text"
                        class="form-control"
                        name="url_cover"
                        id="url_cover"
                        aria-describedby="helpId"
                        placeholder="Inserisci il link della cover" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Anno di pubblicazione</label>
                    <input
                        type="number"
                        class="form-control"
                        name="anno_pubblicazione"
                        id="anno_pubblicazione"
                        aria-describedby="helpId"
                        placeholder="Inserisci l'anno di pubblicazione" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Genere</label>
                    <input
                        type="text"
                        class="form-control"
                        name="genere"
                        id="genere"
                        aria-describedby="helpId"
                        placeholder="Inserisci il genere " />
                </div>
                <button class=" btn btn-success">Aggiungi</button>
            </form>
        </div>



        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>