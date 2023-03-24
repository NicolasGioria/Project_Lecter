<?php
require 'formationData.php';
?>
<?php
require 'experienceData.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hannibal Lecter se présente...</title>
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="assets/css/formation.css" />
  <link rel="stylesheet" href="assets/css/experience.css" />
  <link rel="stylesheet" href="assets/css/interets.css">
  <link rel="stylesheet" href="/assets/css/talents.css">
  <link rel="stylesheet" href="./assets/css/coordonnee.css">
  <link rel="icon" type="image/png" href="assets/images/couteau.png">
  <script src="https://kit.fontawesome.com/63ffa44c37.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant&family=Italianno&family=Libre+Franklin&display=swap" rel="stylesheet" />

</head>

<body>
  <div class="container">
    <input type="checkbox" id="ring" />
    <div class="picture">

      <label for="ring"><img id="ring" src="/assets/images/sonnette.png" /></label>

      <h1>Hannibal<br>Lecter</h1>

      <section id="contact">

        <a href="#more_contact">Contact</a>
        <dialog id="more_contact">
          <a class="close" href="#close">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
            </svg>
          </a>
        </dialog>
      </section>
    </div>
    <div class="layer">
      <h1>Critique Culinaire</h1>
      <div class="plate"></div>
      <div class="menu">
        <ul id="menu">
          <h2>Menu</h2>
          <li>
            <section id="formation">
              <h1>Amuse-bouches</h1>
              <a href="#more_formation">Formation</a>
              <dialog id="more_formation">
                <a class="close" href="#close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                  </svg>
                </a>
                <div class="formationBody">
                  <section class="timeline">
                    <h1 class="formation">Formation</h1>
                    <ul>
                      <?php foreach ($formationData as $formation) { ?>
                        <?php include '_formation.php'; ?>
                      <?php } ?>
                    </ul>
                  </section>
                </div>
              </dialog>
            </section>
          </li>
          <li>

            <div class="menuSeparator"><img src="/assets/images/tilde2.png" alt="Séparation" /></div>

            <section id="experience">
              <h1>Entrée</h1>
              <a href="#more_experience">Expériences</a>
              <dialog id="more_experience">
                <a class="close" href="#close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                  </svg>
                </a>
                <div class="experienceBody">
                  <section class="timeline">
                    <h1 class="experience">Experience</h1>
                    <ul>
                      <?php foreach ($experienceData as $experience) { ?>
                        <?php include '_experience.php'; ?>
                      <?php } ?>
                    </ul>
                  </section>
                </div>
              </dialog>
            </section>
          </li>
          <li>

            <div class="menuSeparator"><img src="/assets/images/tilde2.png" alt="Séparation" /></div>

            <section id="interets">
              <h1>Plat principal</h1>

              <a href="#more_interets">Intérêts</a>
              <dialog id="more_interets">
                <a class="close" href="#close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                  </svg>
                </a>
                <?php include('_interets.php'); ?>
              </dialog>
            </section>
          </li>
          <li>

            <div class="menuSeparator"><img src="/assets/images/tilde2.png" alt="Séparation" /></div>

            <section id="talents">
              <h1>Fromage</h1>

              <a href="#more_talents">Talents</a>
              <dialog id="more_talents">
                <a class="close" href="#close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="red" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                  </svg>
                </a>
                <?php include('talents.php'); ?>
              </dialog>
            </section>
          </li>
          <li>

            <div class="menuSeparator"><img src="/assets/images/tilde2.png" alt="Séparation" /></div>

            <section id="coordonnee">
              <h1>Dessert</h1>

              <a href="#more_coordonnee">Coordonnées</a>
              <dialog id="more_coordonnee">
                <a class="close" href="#close">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                  </svg>
                </a>
                <?php include('_coordonnees.php'); ?>
              </dialog>
            </section>
          </li>
        </ul> 
         
        <div class="logo"> <img src="/assets/images/butterfly.png" alt="Papillon"/></div>       
            
        <div class="goutte"><img src="/assets/images/goutte.png" alt="Goutte de sang"/></div>
      </div>
      <div class="plate">
        <span class="inner_plate"></span>
      </div>

    </div>
  </div>
  <script src='./assets/js/ring.js'></script>
</body>
<script src="assets/js/formation.js"></script>
<script src="assets/js/experience.js"></script>

</html>