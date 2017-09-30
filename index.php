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
              <a href="#contact" class="button button--pill button--light-blue">Contact us</a> <a href="#services" class="button text--light-blue">Services &amp; pricing</a>
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

      <div class="page-section pricing" id="services">
        <div class="page-section__content page-section__content--padded text--center">
          <h2 class="text--white">Services &amp; Pricing</h2>
          <p class="text--white">We offer a simple three-tier pricing package structure as standard, each with a fixed monthly fee.</p>
          <p class="text--white margin--triple-bottom">Bespoke packages can be tailor-made if required - please get in touch to discuss your needs.</p>
          <ul class="gallery gallery--row-of-3 text--center">
            <li class="gallery__item pricing__item box box--white box--shadow">
              <img src="img/icon-bronze-medal.png" alt="Bronze medal icon" class="pricing__icon">
              <h5 class="text--spaced text--upper font--base text--bronze">Bronze</h5>
              <ul class="pricing__services">
                <li>Monthly bookkeeping service</li>
                <li>Dealing with HMRC as required</li>
                <li>Year-end tax return submission</li>
              </ul>
              <div class="pricing__price">
                <span class="pricing__price__amount text--bronze"><span class="pricing__price__currency">&pound;</span>20</span> / month
              </div>
            </li>
            <li class="gallery__item pricing__item box box--white box--shadow">
              <img src="img/icon-silver-medal.png" alt="Silver medal icon" class="pricing__icon">
              <h5 class="text--spaced text--upper font--base text--grey">Silver</h5>
              <ul class="pricing__services">
                <li>Monthly bookkeeping service</li>
                <li>Dealing with HMRC as required</li>
                <li>Monthly profit and loss reports</li>
                <li>Year-end tax return submission and company tax return completion</li>
              </ul>
              <div class="pricing__price">
                <span class="pricing__price__amount text--grey"><span class="pricing__price__currency">&pound;</span>45</span> / month
              </div>
            </li>
            <li class="gallery__item pricing__item box box--white box--shadow">
              <img src="img/icon-gold-medal.png" alt="Gold medal icon" class="pricing__icon">
              <h5 class="text--spaced text--upper font--base text--yellow">Gold</h5>
              <ul class="pricing__services">
                <li>Monthly bookkeeping service</li>
                <li>Dealing with HMRC as required</li>
                <li>Monthly profit and loss reports</li>
                <li>Year-end tax return submission and company tax return completion</li>
                <li>1 director's tax return submission</li>
                <li>VAT returns as required</li>
              </ul>
              <div class="pricing__price">
                <span class="pricing__price__amount text--yellow"><span class="pricing__price__currency">&pound;</span>65</span> / month
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="page-section contact" id="contact">
        <div class="page-section__content page-section__content--padded page-section__content--narrow text--center">
          <h2 class="text--blue">Get in touch</h2>
          <p>Discuss your needs with us, ask a question or just say hello! Site visits, video conferences and/or telephone meetings can be arranged as required to fit in with your diary and work flow.</p>
          <h4 class="margin--none"><a class="button button--pill button--light-blue font--base" href="mailto:info@rsbookkeeping.co.uk"><?php echo hide_email('info@rsbookkeeping.co.uk'); ?></a></h4>
          <h6 class="font--base text--grey">
            <div class="button button--dummy" style="display: block;"><i class="fa fa-phone"></i> 07833 562 674</div>
            <a class="button button--outline button--pill" href="https://twitter.com/RSBookkeeping" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
            <a class="button button--outline button--pill" href="https://www.facebook.com/rsbookkeeping/" target="_blank" ><i class="fa fa-facebook"></i> Facebook</a></h6>
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
