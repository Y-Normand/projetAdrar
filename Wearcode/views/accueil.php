<?php ob_start();

?>

<body>
      <!-- Début 1er page -->
  <section>
    <!-- image de fond -->
    <div class="firstPart">
      <div class="secondButton"> 
        <h2>W.e.a.r la marque française qui vous plait !</h2>
        <div class="firstButton">
          <button type="button" class="btn btn-warning">HOMME</button>
          <button type="button" class="btn btn-warning">FEMME</button>
        </div>
      </div>
    </div>
    <article class="presentation">
      <div class="container">
        <img class="imgPresentation" src="images/wear_forthelegend.png" alt="logo">
        <h2>Venez W.e.a.r vos plus beaux vêtements</h2>
        <p class="black">
          W.e.a.r est une jeune marque française de vêtements pour femmes et pour hommes.</br>
          L’objectif principal est de relancer l’économie de la Corée du Nord et ainsi financer le comunisme. Tous nos vêtements sont fabriqués en North Corea et les motifs sont fait en France.</br>
          Soutenez-nous !
        </p>
      </div>
    </article>
    <article class="flexYoan">
      <div class="card cardYoan" style="width: 18rem;">
        <img class="imgYoan2" src="images/produits/Wear_sweat_capuche.png" class="card-img-top" alt="Sweat">
        <div class="card-body">
          <h5 class="card-title">Sweat à capuche</h5>
          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, odio, consequuntur, explicabo quae illo earum recusandae impedit non nam inventore obcaecati! Totam, repudiandae aspernatur ad at repellendus dolores nostrum dolorum?</p>
          <p class="card-text">10€</p>
        </div>
      </div>
      <div class="card cardYoan" style="width: 18rem;">
        <img class="imgYoan2" src="images/produits/Wear_sweat_capuche.png" class="card-img-top" alt="Sweat">
        <div class="card-body">
          <h5 class="card-title">Sweat à capuche</h5>
          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, odio, consequuntur, explicabo quae illo earum recusandae impedit non nam inventore obcaecati! Totam, repudiandae aspernatur ad at repellendus dolores nostrum dolorum?</p>
          <p class="card-text">10€</p>
        </div>
      </div>
      <div class="card cardYoan" style="width: 18rem;">
        <img class="imgYoan2" src="images/produits/Wear_sweat_capuche.png" class="card-img-top" alt="Sweat">
        <div class="card-body">
          <h5 class="card-title">Sweat à capuche</h5>
          <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum, odio, consequuntur, explicabo quae illo earum recusandae impedit non nam inventore obcaecati! Totam, repudiandae aspernatur ad at repellendus dolores nostrum dolorum?</p>
          <p class="card-text">10€</p>
        </div>
      </div>
    </article>
  </section>
</body>
<?php

$titre = "Accueil";
$content = ob_get_clean();
require_once "template.php";
