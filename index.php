<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <header>
    <a href="index.php">Accueil</a>
    <a href="index.php?page=seconnecter">Se connecter</a>
    <a href="index.php?page=sinscrire">S'inscrire</a>
    <a href="profil.php">Profil</a>
  </header>
  <pre>
  <?php if (isset($_GET['page'])) : ?>
    <?php if (
      $_GET['page'] !== "seconnecter"
      && $_GET['page'] !== "sinscrire"
      && $_GET['page'] !== "profil"
    ) :
    ?>
      <h1>Accueil</h1>
    <?php endif ?>
  <?php endif ?>
 
 <?php
  print_r($_POST);

  ?>
  <?php if (isset($_GET['page']) === "seconnecter") : ?>
    <form action="" method="post">
      <label for="email">Votre email</label>
      <input id="email" type="email" name="email" />

      <label for="password">Votre MDP</label>
      <input id="password" type="password" name="password" />

      <input type="hidden" name="seconnecter" />
      <!-- <input type="submit"> -->
      <button type="submit">&equiv; Enregistrer</button>
       
  </form>
   
<?php endif ?>
      
<?php if (isset($_POST['seconnecter'])) : ?>
  <p>
    Bienvenue
  </p>
  <p>
    Bonjour<?= $_POST['email'] ?>
  </p>

  <?php endif ?>
  
</body>

</html>