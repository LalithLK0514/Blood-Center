<nav class="navbar navbar-expand-sm navbar-light bg-info sticky-top">
    <div class="container">
    <a class="navbar-brand" href="javascript:history.go(-1)"><img src="image/back-btn.png" width="30" height="30" class="rounded-circle"></a>
        <p style="justify-content:center"><a class="navbar-brand" href="index.php"><img src="image/main-logo.png" width="60" height="50" class="rounded-circle">Blood Center</a></p>
        
        
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><i class="fas fa-align-left"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">

        <?php if (isset($_SESSION['hid'])) { ?>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <?php }  else { ?>
                    <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn btn-danger" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger" href="register.php">Register</a>
            </li>

        </ul>

        <?php } ?>
        </div>
    </div>
</nav>