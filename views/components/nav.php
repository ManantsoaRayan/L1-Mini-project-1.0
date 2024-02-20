<nav class="navigation">
  <div class="nav-container">
    <div class="navigation-menu">
      <div class="nav-title">Co-Deliver</div>
      <!-- humberger Menu -->
      <div id="nav_button">
        <button type="button" id="navigation_btn">
          <!-- <img src="/images/menu-svgrepo-com.svg" alt="Menu" class="h-16 fill-slate-100"> -->
          <svg fill="#000000" width="100px" height="70px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <title>menu</title>
            <path d="M8 24h16v-4h-16v4zM8 18.016h16v-4h-16v4zM8 12h16v-4h-16v4z"></path>
          </svg>
        </button>
      </div>
    </div>
    <!-- nav url -->
    <?php
    function active_link($value)
    {
      echo isUrl($value) ? 'active-section' : '';
    }
    ?>
    <div class="nav-items">
      <ul class="nav-links">
        <li class=<?= active_link('/')  ?>><a href="/">Home</a></li>
        <li class=<?= active_link('/about')  ?>><a href="/about">About</a></li>
        <li class=<?= active_link('/offer')  ?>><a href="/offer">Offers</a></li>
        <li><a href="/">Login</a></li>
        <li><a href="/">Register</a></li>
      </ul>
    </div>
  </div>
</nav>