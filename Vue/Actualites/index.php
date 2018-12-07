<?php $this->titre = "Actualites de la semaine"; ?>

<?php $this->banniere = "Actus semaine"; ?>

<section id="info">
      <div class="container">
        <div class="row infos-container">
          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Actualités de la semaines</h2>
            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-shopping-bag"></i></div>
              <h4 class="title"><a href="">Les nouveaux vehicules</a></h4>
              <p class="description"><?= $resultats ?></p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Les nouveaux salaries</a></h4>
              <p class="description"><? $salarie ?></p>
            </div>
          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>
      </div>
</section>