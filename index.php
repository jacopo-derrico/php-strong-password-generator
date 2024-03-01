<?php

    session_start();

    include __DIR__ . '/functions.php';
    include __DIR__ . '/variables.php';

    if (isset($_GET["charachterNumber"])) {
        $charLength = intval($_GET["charachterNumber"]);
        $letDuplicateChar = $_GET['letDuplicate'];
        $_SESSION['newPassword'] = generatePassword($charLength, $letDuplicateChar, $lowercase, $uppercase, $numbers, $symbols);
        header('Location: ./result.php');
    };

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password gnerator</title>

    <!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <main class="container-fluid">
        <section class="row">
            <h1 class="text-center">Strong Password Generator</h1>
        </section>
        <section class="row">
            <div class="col-10 mx-auto ">
                <form action="index.php" method="get">
                    <div class="row mb-3">
                        <label for="charachterNumber" class="col-sm-2 col-form-label">Lunghezza password</label>
                        <div class="col-sm-4">
                        <input type="number" class="form-control" id="charachterNumber" name="charachterNumber">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <label class="col-sm-2 pt-0">Consenti ripetizioni di più caratteri</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="letDuplicate" id="letDuplicate1" value="1" checked>
                                <label class="form-check-label" for="letDuplicate1">
                                Sì
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="letDuplicate" id="letDuplicate2" value="0">
                                <label class="form-check-label" for="letDuplicate2">
                                No
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="letters" name="letters" value="1" checked>
                                <label class="form-check-label" for="letters">
                                Lettere
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="numbers" name="numbers" value="1" checked>
                                <label class="form-check-label" for="numbers">
                                Numeri
                                </label>
                            </div><div class="form-check">
                                <input class="form-check-input" type="checkbox" id="symbols" name="symbols" value="1" checked>
                                <label class="form-check-label" for="symbols">
                                Simboli
                                </label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                    <button type="submit" class="btn btn-secondary">Annulla</button>
                </form>
            </div>
        </section>
    </main>

    <!-- Bootstrap 5.3.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>