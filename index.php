<!doctype html>
<html class="no-js" lang="">
    <head>
        <?php include('inc/head.inc.php'); ?>
  </head>
    <body>

      <?php

      function hide_email($email)

      {

        $character_set = '+-.0123456789@ABCDEFGHIJKLMNOPQRSTUVWXYZ_abcdefghijklmnopqrstuvwxyz';

        $key = str_shuffle($character_set); $cipher_text = ''; $id = 'e'.rand(1,999999999);

        for ($i=0;$i<strlen($email);$i+=1) $cipher_text.= $key[strpos($character_set,$email[$i])];

        $script = 'var a="'.$key.'";var b=a.split("").sort().join("");var c="'.$cipher_text.'";var d="";';

        $script.= 'for(var e=0;e<c.length;e++)d+=b.charAt(a.indexOf(c.charAt(e)));';

        $script.= 'document.getElementById("'.$id.'").innerHTML="<a href=\\"mailto:"+d+"\\">"+d+"</a>"';

        $script = "eval(\"".str_replace(array("\\",'"'),array("\\\\",'\"'), $script)."\")";

        $script = '<script type="text/javascript">/*<![CDATA[*/'.$script.'/*]]>*/</script>';

        return '<span id="'.$id.'">[javascript protected email address]</span>'.$script;

      }

      ?>


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
                <li class="page-header__primary-nav__item"><a href="https://twitter.com/RSBookkeeping" target="_blank" class="text--light-blue">Twitter</a></li>
                <li class="page-header__primary-nav__item"><a href="https://www.facebook.com/rsbookkeeping/" target="_blank" class="text--light-blue">Facebook</a></li>
                <li class="page-header__primary-nav__item"><a href="#contact" class="button button--pill button--light-blue">Contact us</a></li>
              </ul>
            </nav>
          </div>
        </header>

        <div class="hero__block page-section">
          <div class="hero__container">
            <div class="hero__cta">
              <h2 class="hero__cta__title text--white">We help businesses take the hassle and stress out of accountancy.</h2>
              <p class="hero__cta__sub-title text--white">Let us assist you in growing your business, not your bookkeeping workload.</p>
              <a href="#contact" class="button button--pill button--light-blue">Contact us</a> <a href="#services" class="button text--light-blue">Our services</a>
            </div>
            <img class="hero__illustration" src="img/hero_illustration.svg" alt="Tax Illustration">
          </div>
        </div>
      </div>

      <div class="page-section benefits">
        <div class="page-section__content">
          <h3 class="text--center text--white margin--triple-bottom">Outsourcing your bookkeeping is good for business</h3>
          <ul class="gallery gallery--row-of-3 text--center">
            <li class="gallery__item benefits__item box box--white box--shadow">
              <img src="img/icon-piece-of-mind.png" alt="Yoga pose icon" class="benefits__icon">
              <h5 class="text--spaced text--upper font--base text--orange">Peace of Mind</h5>
              <p class="benefits__text">Work is carried out accurately and punctually to meet all necessary deadlines and obligations, as well as your aspirations and goals.</p>
            </li>
            <li class="gallery__item benefits__item box box--white box--shadow">
              <img src="img/icon-time-efficient.png" alt="Stopwatch icon" class="benefits__icon">
              <h5 class="text--spaced text--upper font--base text--green">Time Effective</h5>
              <p class="benefits__text">Free up valuable time to run your business, seek clients/sales and increase your profits (and get home on time).</p>
            </li>
            <li class="gallery__item benefits__item box box--white box--shadow">
              <img src="img/icon-trust.png" alt="Handshake icon" class="benefits__icon">
              <h5 class="text--spaced text--upper font--base text--yellow">Trust</h5>
              <p class="benefits__text">We work with your aspirations and goals to build a strong working partnership that you can depend upon.</p>
            </li>
          </ul>
        </div>
      </div>

      <div class="page-section">
        <div class="page-section__content page-section__content--padded page-section__content--narrow text--center">
          <h3 class="text--grey">We're from Yorkshire, the home of deep pockets</h3>
          <p class="margin--double-bottom">We are based in Pontefract, West Yorkshire, and work closely with clients across the country to ensure that their accounts are completed accurately, on time and that deadlines are not missed. Regular dialogue and communication comes as standard, no matter how big or small your project is.</p>
          <p class="margin--double-bottom"><a href="#contact" class="button button--pill button--light-blue">Contact us</a></p>
          <img src="img/divider_illustration.svg" alt="Piggy bank illustration" style="max-width:400px;">
        </div>
      </div>

      <div class="page-section">
        <div class="page-section__content page-section__content--padded-bottom page-section__content--narrow text--center">
          <h3 class="text--grey">Profitable expertise you can rely on</h3>
          <p class="margin--double-bottom">Employing an experienced, accredited bookkeeper to look after your accounts will save you money. We are registered with the International Association of Bookkeepers and hold full Professional Liability and Indemnity Insurance, so let us handle your bookkeeping needs so you can concentrate on doing what you do best: running your business.</p>
          <p class="margin--double-bottom"><a href="#contact" class="button button--pill button--light-blue">Contact us</a></p>

        </div>
      </div>

      <div class="page-section services" id="services">
        <div class="page-section__content page-section__content--padded page-section__content--narrow text--center">
          <h3 class="text--blue">Services and products built around you, not vice-versa</h3>
          <p class="margin--double-bottom">All businesses and organisations are different, so we don't offer a one-size-fits-all bundle. We listen to what you want in a consultation and turn that into a bespoke toolbox of services and products, containing everything you need and nothing you don't.</p>
          <div class="box box--white box--shadow margin--double-bottom">
            <p class="text--blue">We offer a number of services, including but not limited to:</p>
            <ul class="gallery gallery--row-of-2">
              <li class="gallery__item">
                <ul class="services__list">
                  <li class="services__list__item">Monthly bookkeeping</li>
                  <li class="services__list__item">Company tax return completion</li>
                  <li class="services__list__item">HMRC liaison</li>
                </ul>
              </li>
              <li class="gallery__item">
                <ul class="services__list">
                  <li class="services__list__item">Monthly profit and loss reports</li>
                  <li class="services__list__item">Year-end tax return submission</li>
                  <li class="services__list__item">VAT returns</li>
                </ul>
              </li>
            </ul>
          </div>
          <p>Please contact us to arrange a chat and to discuss your requirements.</p>
        </div>
      </div>

      <div class="page-section contact" id="contact">
        <div class="page-section__content page-section__content--padded page-section__content--narrow text--center">
          <h3 class="text--white">Get in touch</h3>
          <p class="text--white">Discuss your needs with us, ask a question or just say hello! Site visits, video conferences and/or telephone meetings can be arranged as required to fit in with your diary and work flow.</p>
          <h4 class="margin--none"><a class="button button--pill button--light-blue font--base" href="mailto:info@rsbookkeeping.co.uk"><?php echo hide_email('info@rsbookkeeping.co.uk'); ?></a></h4>
          <h6 class="font--base text--white">
            <div class="button button--dummy" style="display: block;"><i class="fa fa-phone"></i> 07833 562 674</div>
            <a class="button button--light-blue button--pill" href="https://twitter.com/RSBookkeeping" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
            <a class="button button--light-blue button--pill" href="https://www.facebook.com/rsbookkeeping/" target="_blank" ><i class="fa fa-facebook"></i> Facebook</a></h6>
        </div>
      </div>

      <div class="page-section copyright">
        <div class="page-section__content text--center">
          &copy; RS Bookkeeping <?php echo date('Y'); ?>. All Rights Reserved.
        </div>
      </div>



        <?php include('inc/scripts.inc.php'); ?>

    </body>
</html>
