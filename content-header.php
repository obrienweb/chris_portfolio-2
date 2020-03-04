<div class="menu">
  <?php wp_nav_menu( array( 'menu' => 'Main Nav' ) ); ?>

  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/#portfolio" onclick="closeNav()">Portfolio</a></li>
    <li><a href="/#about" onclick="closeNav()">About</a></li>
    <li><a href="#contact" onclick="closeNav()">Contact</a></li>
  </ul>
</div>

<header>
  <div class="grid-container grid-parent relative align-center">
    <div id="logo" class="grid-50 tablet-50 mobile-80 hide-on-mobile">
      <a itemprop="url" href="/" title="Chris O'Brien">
        <svg enable-background="new 0 0 137 142" version="1.1" viewBox="0 0 137 142" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <path class="st0" d="m23.3 64.6c-5.7-5.7-8.6-12.9-8.6-21.4s2.9-15.5 8.6-21c5.8-5.5 12.9-8.2 21.4-8.2 4.8 0 9 0.8 12.5 2.3 3.6 1.5 7.3 4.2 11.3 8.1l9-9.9c-8.6-9.7-19.5-14.5-32.5-14.5s-23.7 4.2-32.2 12.5-12.8 18.8-12.8 31.3 4.2 22.8 12.5 31c8.4 8.2 18.9 12.2 31.6 12.2s23.4-4.9 32.3-14.8l-9.1-9.4c-3.8 3.6-7.5 6.2-11 7.9-3.5 1.6-7.7 2.5-12.6 2.5-7.9 0-14.7-2.9-20.4-8.6z"/>
            <path class="st1" d="m122.5 98.5c0 8.5-2.9 15.6-8.6 21.6-5.7 5.9-12.7 8.9-21 8.9s-15.3-3-21.1-8.9c-5.7-5.9-8.6-13.1-8.6-21.6s2.9-15.6 8.6-21.6c5.7-5.9 12.7-8.9 21.1-8.9 8.3 0 15.3 3 21 8.9 5.7 6 8.6 13.2 8.6 21.6zm14.5 0c0-12.4-4.2-22.7-12.7-31s-18.9-12.4-31.4-12.4-23 4.1-31.4 12.4c-8.5 8.3-12.7 18.6-12.7 31s4.2 22.7 12.7 31 19 12.4 31.4 12.4 22.9-4.1 31.4-12.4c8.5-8.2 12.7-18.6 12.7-31z"/>
        </svg>
      </a>
    </div>
    <div class="main-nav grid-50 tablet-50 mobile-100">
      <div class="menu__toggler">
        <span></span>
      </div>
    </div>
  </div>
</header>
