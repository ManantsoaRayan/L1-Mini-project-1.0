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

</main>

<?php require 'partials/foot.php'; ?>