<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Divers/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
    <title>pf-0.01</title>
</head>
<header >
 header
</header>

<main>
    <h1 >my index: <br> your infos</h1><br>

    <h2><?= $_SERVER['HTTP_USER_AGENT'] . "\n\n"; ?></h2><br>

    <h1> your cookies </h1>
    <h2>
        <?php
        if(true){
          if(isset($_COOKIE)){
            print_r($_COOKIE);
          }
        }
        ?>
    </h2>

</main>
<footer>
footer
</footer>

</html>