<?php require 'partials/head.php'; ?>
<?php require 'components/nav.php'; ?>
<?php require 'components/header.php' ?>

<main>
  <!-- services banner  -->
  <div class="banner">
    <div class="service-banner ">
      <?php require "components/banner-card.php" ?>
      <?php require "components/banner-card.php" ?>
      <?php require "components/banner-card.php" ?>
    </div>
  </div>

  <!-- user's motivation to use the platforme -->
  <div class="block_container motivation-section">
    <div class="user-motivation">
      <div class="top-section"></div>
      <div class="bottom-section">
        <div>
          <h2>Why choose us</h2>
        </div>
        <div class="embeded-list">
          <?php require "components/extended-list.php"; ?>
          <?php require "components/extended-list.php"; ?>
          <?php require "components/extended-list.php"; ?>
        </div>
      </div>
    </div>
  </div>


  <!-- confidentiality  -->

  <div class="banner confidentials">
    <div class="confidentials_container">
      <div class="confidentials__content">
        <h1>We provide confidence and reactivity</h1>
        <div>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Impedit eius, quis voluptatum rerum placeat quas officia
            animi omnis enim voluptatibus esse soluta inventore voluptas tempore.
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem error
            blanditiis qui ipsum aliquid unde. Alias esse soluta nesciunt nemo quos et, ex voluptates! Reiciendis expedita asperiores optio iure doloribus.
          </p>
        </div>
      </div>
      <div class="confidentials__rate">
        <div class="rate">
          <div>
            <h3>92</h3>
          </div>
        </div>
        <div class="rate">
          <div>
            <h3>92</h3>
          </div>
        </div>
        <div class="rate">
          <div>
            <h3>92</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- offers section  -->

  <div class="block-container offers-section">
    <div class="section-title">
      <h1>Our Pricing</h1>
    </div>
    <div class="offers">
      <?php require "components/offer-card.php"; ?>
      <?php require "components/offer-card.php"; ?>
      <?php require "components/offer-card.php"; ?>
      <?php require "components/offer-card.php"; ?>
    </div>
  </div>

  <section class="banner">
    <div class="content-pricing">
      <div class="center-text">
        <h1>Choose Us for more flexibility.</h1>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing
          elit. Quas deserunt culpa recusandae modi ea! Non ea odit magnam voluptates suscipit. Nostrum nisi consequatur in repellendus culpa doloribus dicta eos, maiores aliquid et possimus voluptate, amet reiciendis, non quibusdam provident officiis explicabo dignissimos?
        </p>
      </div>
      <div>
        <a href="#">Show all offers</a>
      </div>
    </div>
  </section>

  <!-- web update -->

  <div class="banner mini-contact">
    <div class="contact">
      <div class="contact-text">
        <h2>We are the best delivery company ever!!</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur, adipisicing elit.
          Ad quos et eligendi exercitationem veniam molestiae.
        </p>
      </div>
      <div id="contact_btn">
        <a href="#">contact us</a>
      </div>
    </div>
  </div>

  <!-- service update -->

  <div class="banner service-update">
    <div class="section-title">
      <h1>Service update</h1>
    </div>
    <div class="services-banner">
      <?php require "components/services-card.php" ?>
      <?php require "components/services-card.php" ?>
      <?php require "components/services-card.php" ?>
    </div>
  </div>

  <!-- testimonials -->
  <div class="testimonials block_container">
    <div class="testimonials-container">
      <div class="section-title">
        <h1>testimonials</h1>
      </div>
      <div class="testimonials-card">
        <div class="card-profile">
          <div class="card-profile-container">
            <img src="/app/assets/images/elon_musk_royal_society.webp" alt="Elon musk">
            <p>Elon Musk</p>
          </div>
        </div>
        <div class="card-profile-text">
          <p>
            The system of this compay is the best I ever seen.
            With their confidentiality and their way of working.
            They provide Speed and perfect apointement.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati totam rerum ut provident excepturi!
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- team section -->

  <div class="team-section block_container">
    <div class="team-container">
      <div class="section-title">
        <h1>Team</h1>
      </div>
      <div class="team-card">
        <div class="portfolio-card">
          <img src="/app/assets/images/NyAvo.jpg" alt="A Developer">
          <div class="portfolio-card-body">
            <h2>Ny Avo</h2>
            <p>Developer Frontend</p>
          </div>
        </div>
        <div class="portfolio-card">
          <img src="/app/assets/images/zah2.jpg" alt="A Developer">
          <div class="portfolio-card-body">
            <h2>Ma. Rayan</h2>
            <p> Project Manager </p>
            <p>ManantsaoRayan@gmail.com</p>
          </div>
        </div>
        <div class="portfolio-card">
          <img src="/app/assets/images/Photo-Manda.jpg" alt="A Developer">
          <div class="portfolio-card-body">
            <h2>Manda</h2>
            <p>Developer Frontend</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>


<?php require 'partials/foot.php'; ?>