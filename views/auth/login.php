<?php
require ('../../actions/auth/loginAction.php');
$login = true;
include_once '../../header.php'
?>

<main class="flex-shrink-0 min-vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 col-lg-4">
                <h1 class="text-center mb-4">Authentification</h1>
                <?php
                    if(isset($errorMessage)) {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <?= $errorMessage ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                    }
                ?>
                <form method="POST">
                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="send">
                        Se connecter
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
