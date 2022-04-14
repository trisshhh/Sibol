<?php

function head($title)
{
  require_once './config/constants.php';
  include 'head.php';
}

function navbar($page)
{
  require_once './config/constants.php';
  include 'navbar.php';
}

function navbarMinimal()
{
  require_once './config/constants.php';
  include 'navbar-minimal.php';
}


function profileSidebar($page)
{
  include 'profile-sidebar.php';
}

function footer()
{
  require_once './config/constants.php';
  include 'footer.php';
}

function scrollToTopBtn()
{
  echo '
  <button onclick="topFunction()" id="scrollTopBtn" title="Go to top">
  <i class="bi-chevron-up"></i>
</button>
';
}
