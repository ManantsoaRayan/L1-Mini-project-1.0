<?php require 'partials/head.php'; ?>

<?php require 'components/nav.php'; ?>

<?php require 'components/header.php'; ?>


<main>

  <div class="banner about-banner">
    <div class="section-title">
      <h1>Service</h1>
      <p>Provide you the great service</p>
    </div>
    <div class="service-banner ">
      <?php require "components/banner-card.php" ?>
      <?php require "components/banner-card.php" ?>
      <?php require "components/banner-card.php" ?>
    </div>
  </div>

  <!-- missions  -->
  <div class="block_container motivation-section ">
    <div class="user-motivation about-m">
      <div class="top-section about-motivation"></div>
      <div class="bottom-section">
        <h1>Our missions</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quis modi perferendis neque. Quia, laborum error. Quaerat, dolores in?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quis modi perferendis neque. Quia, laborum error. Quaerat, dolores in?</p>
      </div>
    </div>
  </div>

  <!-- success container -->
  <div class="block-container success-container">
    <div class="success">
      <div class="success-card">
        <h3>567</h3>
        <p>SATISFIED CLIENTS</p>
      </div>
      <div class="success-card">
        <h3>95</h3>
        <p>COMPANY MEMBERS</p>
      </div>
      <div class="success-card">
        <h3>55</h3>
        <p>AWARDS WINS</p>
      </div>
      <div class="success-card">
        <h3>16</h3>
        <p>YEARS EXPIRIENCE</p>
      </div>
    </div>
  </div>


  <!-- history -->

  <div class="banner service-update">
    <div class="section-title">
      <h1>Service update</h1>
    </div>
    <div class="services-banner">
      <div class="card_post">
        <div class="card_post__top-section">
          <img src="/app/assets/images/buisness_consulting.webp" alt="update image"></img>
        </div>
        <div class="card_post__bottom-section">
          <h4>2019</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dignissimos impedit officia, consequatur eos qui aut asperiores exercitationem
            excepturi eius ducimus omnis fugit voluptas iure sed soluta illum facilis. Blanditiis.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores minima distinctio alias consequatur. Saepe et officia cum ad, libero, placeat, laborum beatae a deserunt sint exercitationem voluptatum praesentium provident magni!
          </p>
        </div>
      </div>
      <div class="card_post">
        <div class="card_post__top-section">
          <img src="/app/assets/images/highlight.jpg" alt="update image"></img>
        </div>
        <div class="card_post__bottom-section">
          <h4>2020</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dignissimos impedit officia, consequatur eos qui aut asperiores exercitationem
            excepturi eius ducimus omnis fugit voluptas iure sed soluta illum facilis. Blanditiis.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores minima distinctio alias consequatur. Saepe et officia cum ad, libero, placeat, laborum beatae a deserunt sint exercitationem voluptatum praesentium provident magni!
          </p>
        </div>
      </div>
      <div class="card_post">
        <div class="card_post__top-section">
          <img src="/app/assets/images/buisness_consulting.webp" alt="update image"></img>
        </div>
        <div class="card_post__bottom-section">
          <h4>2021</h4>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus dignissimos impedit officia, consequatur eos qui aut asperiores exercitationem
            excepturi eius ducimus omnis fugit voluptas iure sed soluta illum facilis. Blanditiis.
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores minima distinctio alias consequatur. Saepe et officia cum ad, libero, placeat, laborum beatae a deserunt sint exercitationem voluptatum praesentium provident magni!
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
        <div class="portfolio-card">
          <img src="/app/assets/images/Davino.jpg" alt="A Developer">
          <div class="portfolio-card-body">
            <h2>Davino</h2>
            <p>Developer Frontend</p>
          </div>
        </div>
        <div class="portfolio-card">
          <img src="/app/assets/images/team3-1.jpg" alt="A Developer">
          <div class="portfolio-card-body">
            <h2>Leonah</h2>
            <p>Mpiantoka pizza</p>
          </div>
        </div>
        <div class="portfolio-card">
          <img src="/app/assets/images/team3-1.jpg" alt="A Developer">
          <div class="portfolio-card-body">
            <h2>Leonah</h2>
            <p>Mpiantoka pizza</p>
          </div>
        </div>
      </div>

    </div>
  </div>

</main>


<?php require 'views/partials/foot.php'; ?>