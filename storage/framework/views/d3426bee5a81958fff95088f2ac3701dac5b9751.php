<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
</div>
<div class="bookstore1">
    <div class="bookstore">
        <h1 style="color: white">Giant Book Supplier</h1>
    </div>
</div>
<div class="navbar">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/" style="color: blue">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: blue">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/categorie/1">Novel</a></li>
                            <li><a class="dropdown-item" href="/categorie/2">Comic</a></li>
                            <li><a class="dropdown-item" href="/categorie/3">Ensiklopedia</a></li>
                            <li><a class="dropdown-item" href="/categorie/4">Antologi</a></li>
                        </ul>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/publisher"
                            style="color: blue">Publisher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/contact" style="color: blue">Contact</a>
                    </li>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="title">
    <h1>
        <?php echo $__env->yieldContent('title2'); ?>
    </h1>
</div>
<br>
<?php echo $__env->yieldContent('body'); ?>
<br>
<br>
<div class="footer">
    <footer>
        <p>@Happy  Book Store 2022</p>
    </footer>

</div>
<style>
    .bookstore1 {
        justify-content: center;
        align-items: center;
        background-color: rgb(255, 196, 0);
        border-style: solid;
        border-color: rgb(255, 196, 0);
        border-width: 10px;
    }

    .bookstore1 h1 {
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .Book {
        display: flex;
        justify-content: center;
        gap: 7px;
    }

    .navbar {
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .title {
        background-color: grey;
    }

    .title h1 {
        color: white;
    }

    .content {
        display: flex;
        justify-content: center;
        gap: 7px;
    }

    .footer {
        background-color: rgb(92, 92, 242);
        padding: 2px;
    }

    .footer p {
        color: whitesmoke;
        display: flex;
        justify-content: center;
        font-size: 20px;
        font-style: oblique;
    }
</style>

</html>
<?php /**PATH C:\Webprog\Laravel\UTS2\resources\views/navbar.blade.php ENDPATH**/ ?>