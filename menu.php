
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Мой блог</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="index.php">Главная</a>
            </li>
            <li class="nav-item">
                <?php if ($_SESSION['name'] != ''){ ?>
                    <a class="nav-link" href="exit.php"> "Вы вошли как <?php echo $_SESSION['name']; ?>" </a>
                <?php } else { ?>
                <a class="nav-link" href="login.php">Войти</a> <?php } ?>
            </li>
        </ul>

    </div>
</nav>