<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/papercss@1.9.1/dist/paper.min.css"/>
    <title>Home | Crumpled Paper</title>
</head>
<body>

<nav class="border split-nav">
    <div class="nav-brand">
        <h3><a href="index.php">Crumpled Paper</a></h3>
    </div>
    <div class="collapsible">
        <input id="collapsible1" type="checkbox" name="collapsible1">
        <label for="collapsible1">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </label>
        <div class="collapsible-body">
            <ul class="inline">
                <li><a href="#">Home</a></li>
                <li><a href="#">My Papers</a></li>
                <li><a href="#">Logout</a></li>

                <li><a href="#">Login</a></li>
                <li><a href="#">Register</a></li>
            </ul>
        </div>
    </div>

</nav>

<div class="row">
        <div class="container paper">
                <div class="row">
            <?php

            for ($i = 0; $i < 50; $i++):

            ?>
            <div class="col-md-3 col-sm-2">
            <div class="card  border-0 mb-2">
                <div class="card-body">
                    <img src="assets/img/crumpled-paper.png" onclick="alert(<?= $i ?>)" class="img-fluid img-thumbnail" alt="Crumpled Paper">
                </div>
            </div>
            </div>

            <?php
            endfor;
            ?>
        </div>
            </div>
    </div>
</body>
</html>