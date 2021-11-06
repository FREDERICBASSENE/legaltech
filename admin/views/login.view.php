<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/ee05563dd9.js" crossorigin="anonymous"></script>
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="icon" href="../error-404.html" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/image/favicon.png" />
    <title>Login-legaltech</title>

<div class="main">
       <?php  if (isset($message)): ?>
          <div class="container" align="center">
        <div class="alert alert-danger">
            <h4><?= $message ?> 
         <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
        <span aria-hidden="true">&times;</span>
        </button>
        </h4>
            
        <?php endif ?>
       </div>
    </div>
        <!-- FORMULAIRE DE CONNEXION -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="assets/image/favicon.png" alt="sing up image"></figure>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Se connecter</h2>
                        <form method="POST" class="register-form" id="login">
                           
                            <div class="form-group">
                                <label for="Nom"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="password" name="password" id="password" placeholder="Votre mot de passe " required />
                            </div>
                            
                            <div class="form-group">
                                <label for="email"><i class="fas fa-at"></i></label>
                                <input type="email" name="email" id="email" placeholder="Votre  email " required />
                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="login" id="login" class="form-submit" value="CONNECTEZ"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
 
    </div>
<?php require 'partials/_footer.php'; ?>
