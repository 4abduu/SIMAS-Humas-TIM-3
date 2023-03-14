<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="<?= BASEURL; ?>/home">
      <img src="<?= BASEURL;?>/img/Logo_Simas_3.png" alt="Bootstrap" width="60" height="48"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/home">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/pkl ">PKL</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/bkk ">BKK</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/ict ">ICT Center (Medsos)</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/stiru ">Studi Tiru</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?= BASEURL; ?>/about ">About</a>
                </li>
            </div>
        </div>
</nav>