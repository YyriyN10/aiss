<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aiss
 */

get_header();
?>

  <div class="body">
    <div class="container">
      <div class="row-fluid">
        <div id="content" class="span12">
          <div class="sectionWrapper">
            <div class="container">
              <div class="not-found">
                <p class="hint extraLarge">Сторінку, яку ви шукаєте, не знайдено</p>
                <hr class="hr-style3">
                <div class="err-404">
                  4<span class="main-color">0</span>4                            </div>
                <hr class="hr-style3">
                <p>
                  Матеріал не знайдено                            </p>
                <a class="btn btn-medium" href="<?php echo get_home_url('/');?>">На головну сторінку</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
