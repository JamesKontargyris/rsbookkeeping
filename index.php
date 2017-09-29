<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include('inc/head.inc.php'); ?>
    </head>
    <body>

      <div class="header-container">
        <header class="page-header">
          <div class="page-header__container">
            <section class="page-header__logo-container">
              <div class="page-header__logo">
                <h1><?php echo file_get_contents('img/rsbk_logo_white.svg'); ?> <span class="page-header__logo-text">Bookkeeping</span></h1>
              </div>
            </section>
            <nav class="page-header__primary-nav-container">
              <ul class="page-header__primary-nav">
                <li class="page-header__primary-nav__item"><a href="#" class="text--light-blue">Twitter</a></li>
                <li class="page-header__primary-nav__item"><a href="#" class="text--light-blue">Facebook</a></li>
                <li class="page-header__primary-nav__item"><a href="#" class="button button--pill button--light-blue">Contact Us</a></li>
              </ul>
            </nav>
          </div>
        </header>

        <div class="hero__block">
          <div class="hero__container">
            <div class="hero__cta">
              <h2 class="hero__cta__title">We help businesses take the hassle and stress out of accountancy.</h2>
              <p class="hero__cta__sub-title">Let us assist you in growing your business, not your bookkeeping workload.</p>
              <a href="#" class="button button--pill button--light-blue">Contact us</a> <a href="#" class="button text--light-blue">What we offer</a>
            </div>
            <img class="hero__illustration" src="img/hero_illustration.svg" alt="Tax Illustration">
          </div>
        </div>
      </div>


        <?php include('inc/scripts.inc.php'); ?>

    </body>
</html>
