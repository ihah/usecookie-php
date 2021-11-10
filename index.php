<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use cookie image</title>

    <script>
        fetch("https://setcookie.local.io/cookie-image.php", {
            mode: 'no-cors',
            credentials: 'include'
        }).then(response => {
            console.log(response);
        });

        fetch("https://setcookie.local.io/without-cookie.php", {
            mode: 'no-cors',
            credentials: 'include'
        }).then(response => {
            console.log(response);
        });
    </script>
</head>

<body>
    <?php
    print_r($_COOKIE);
    ?>
    <h1>Use cookie image (3rd party site)</h1>
    <a href="https://setcookie.local.io/cookie-image.php">Go to image</a>
    <img src="https://setcookie.local.io/cookie-image.php">
</body>

</html>