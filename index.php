<?php
$string = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Id hic, quod at, libero quasi inventore maiores aperiam quae architecto vitae, ex nulla itaque dolores officia cumque possimus veniam qui amet?';
$parametro = ( isset( $_GET['censura'] ) ) ? $_GET['censura'] : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php badwords</title>
</head>
<body>
    <p>
        <h2>
            il testo è
        </h2>
        <?php echo $string; ?>
    </p>
    <h2>
        inserisci la parola da censurare
    </h2>
    <form method="GET">
        <input type="text" name="censura">
        <button type="submit">invia</button>
    </form>
    <h2>
        il testo censurato sara:
    </h2>
    <p>
        <?php echo str_ireplace($parametro, '***', $string)  ?>
    </p>
</body>
</html>