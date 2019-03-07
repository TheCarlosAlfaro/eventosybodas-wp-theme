<?php

/**
 * Book setup.
 *
 * @package eventosybodas
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}
?>

<div id="home-book">
  <div class="hidden-sx section split-color-back py-5">
    <h3 class="text-center section-header">
      <?php echo get_theme_mod('home_podcast_heading', '¡Sé el lider que todos deseen seguir!'); ?>
    </h3>

    <div class="container">
      <div class="row pt-4">
        <div class="col-md">
          <img class="book-img"
            src="http://staging.guillermojimenez.online/wp-content/uploads/2019/02/Book-Cover-Mockup.png" alt="">
        </div>
        <div class="col-md">
          <p>Did you know that your life has a unique roadmap, a purpose all its own, distinct and matchless to any
            other individual on planet earth? And that this path is ready for you to conquer – regardless of how far you
            are on life’s journey, how many mistakes you feel you’ve made, or roadblocks you have come up against. We
            are all born with God-given potential to leave our own imprint on the world around us.</p>
          <p>When Guillermo Jimenez – Global Founder and Senior Pastor of ACFC Church – set out to pioneer with 40
            people and a school hall, he was unsure of the highs and lows, sacrifices and disappointments that would
            mark the 32-year journey of miraculous opportunities and dreams come true.</p>
          <p>Secretos de un lider extraordinario is his story, woven in to the greatest story ever told, with room for
            chapters all your own to be written and re-written. This book is a declaration to your future, a reminder
            that belief, passion and calling can give way to a full and abundant life, despite any mysteries, setbacks
            or mountains that get in the way.</p>
          <div class="text-center">
            <div>
              <p class="font-weight-bold">When it comes to life with Jesus, there is no doubt – your best is yet to
                come!</p>
            </div>
            <a href="<?php echo get_theme_mod('home_podcast_button_url', 'https://www.amazon.com/Secretos-extraordinario-Secrets-Extraordinary-Spanish/dp/0789920514/ref=sr_1_1?ie=UTF8&qid=1549480367&sr=8-1&keywords=secretos+de+un+lider+extraordinario'); ?>"
              target="_blank">
              <button type="button" class="btn btn-outline-primary">
                <?php echo get_theme_mod('home_podcast_button_text', 'GET IT NOW'); ?></button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>