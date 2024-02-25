<?php require 'partials/head.php'; ?>
<?php require 'components/nav.php'; ?>
<?php require 'components/header.php' ?>


<main>

  <div class="user-choice">
    <h1>Choose your status</h1>
    <div class="choice-container">
      <div class="offers-card">
        <div class="offers-card__top">
          <div class="card_price">
            <h1>Socity</h1>
          </div>
          <p>
            See
            <span>Socity</span>
            offer
          </p>
        </div>
        <p class="card_data">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, corrupti!</p>
        <a href="#socity_card">Get Started</a>
      </div>
      <div class="offers-card">
        <div class="offers-card__top">
          <div class="card_price">
            <h1>Deliver</h1>
          </div>
          <p>
            See
            <span>Deliver</span>
            offer
          </p>
        </div>
        <p class="card_data">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, corrupti!</p>
        <a href="#deliver_card">Get Started</a>
      </div>
    </div>

    <div class="pub-section">
      <div class="pub-container">
        <h1>we are creative agency</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, eveniet? Illo fuga optio eveniet repellendus inventore soluta ex ad.</p>
        <img src="/app/assets/images/mini_clock.webp" alt="">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni facere labore saepe officiis quos ab nulla! Officia, totam. Placeat eligendi quaerat inventore voluptatem possimus minima aliquam sequi id sapiente repellendus!</p>
      </div>
    </div>

  </div>

  <div class="selection-card">
    <div class="card-container">
      <div class="intro-card">
        <h2>Deliver offers</h2>
        <h2>Choose an offer</h2>
      </div>
      <div class="user-cards">
        <?php require "components/client-cards.php" ?>
        <?php require "components/client-cards.php" ?>
        <?php require "components/client-cards.php" ?>
      </div>
    </div>
    <div class="card-container">
      <div class="intro-card">
        <h2>Socity offers</h2>
        <h2>Choose an offer</h2>
      </div>
      <div class="user-cards">
        <?php require "components/enterprise-card.php" ?>
        <?php require "components/enterprise-card.php" ?>
        <?php require "components/enterprise-card.php" ?>
      </div>
    </div>
  </div>


</main>


<?php require 'partials/foot.php'; ?>