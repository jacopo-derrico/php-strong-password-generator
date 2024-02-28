<?php
    session_start();   
    include __DIR__ . '/functions.php';
    include __DIR__ . '/variables.php';
    
    if (isset($_SESSION['newPassword'])) {
        $password = $_SESSION['newPassword'];
    }
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
            <h3 class="text-center my-4 ">Your New Strong Password Generator</h3>
        </section>
        <section class="row">
            <div class="col-10 mx-auto ">
                <div class="text-center">
                    <?php echo $_SESSION['newPassword'] ?>
                </div>
            </div>
        </section>
    </main>

    <!-- Bootstrap 5.3.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>