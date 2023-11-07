<?php

// echo("This site is under construction");

$companyName = "CSCI Medical Records";
$companyLogoAlt = "A blue sphere with the word company below it"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo("$companyName")?> - Home</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9b/Bass_logo.svg/800px-Bass_logo.svg.png" alt="<?php echo("$companyLogoAlt") ?>" id="logo-image" class="mx-3">
            </li>
            <li class="nav-item">
                <div class="navbar-brand mx-3"><?php echo("$companyName");?></div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <button type="button" class="btn btn-primary">Sign In</button>
            </li>
        </ul>
    </nav>
</body>
</html>