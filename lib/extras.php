<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more() {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');



/**
 *  Returns JAMA house AD (hardcoded for demo)
 */
function jama_house_ad() {
  ob_start(); ?>
    <section class="widget ad-widget">
      <div class="wrapper">
        <p class="disclaimer">
          <a href="http://jamanetwork.com/SS/Advertising_Disclaimer.aspx" target="_blank">Advertisement</a>
        </p>
        <div class="jn-house-ad">
          <img src="<?php echo get_template_directory_uri() . "/assets/img/house-banner-ad.gif";?>">
        </div>
      </div>
    </section>
  <?php
  $output = ob_get_contents();
  ob_end_clean ();
  return $output;
}

/**
 *  Returns Featured Article Widget
 */
function featured_article_widget() {
  ob_start(); ?>

  <section class="widget featured-article-widget featured-article-widget-4">
    <div class="wrapper has-background-image">
      <div class="background-shade">
        <div class="widget-content">
          <div class="widget-title">
            <h3><a href="#">My Seventh Ophthalmology Blog Post</a></h3>
            <p><span class="shrinkwrap">Will English IV</span></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
  $output = ob_get_contents();
  ob_end_clean ();
  return $output;
}


/**
 *  Returns Most Recent 5
 */
function latest_articles_widget() {
  ob_start(); ?>
  <section class="widget latest-news-widget latest-news-widget-2">
    <div class="wrapper">
      <div class="wrapperbgcolor background-shade">
        <div class="widgettext widget-content">
          <div class="widget-title"><h3>Latest Articles</h3></div>
          <ul class="list-unstyled">
            <li class="headline-item">
              <a href="#">The Human Alzheimer Disease Project</a>
              <p class="small">1 month ago</p>
            </li>
            <li class="headline-item">
              <a href="#">The Know, Do, and Quality Gaps in International Maternal and Child Health Care Interventions</a>
              <p class="small">2 months ago</p>
            </li>
            <li class="headline-item">
              <a href="#">Considering the Potential Effect of Federal Policy on Childhood Obesity</a>
              <p class="small">3 months ago</p>
            </li>
            <li class="headline-item">
              <a href="#">Is Lunch From Home Better Than the School Cafeteria?: A Look at the New School Lunch Criteria</a>
              <p class="small">4 months ago</p>
            </li>
            <li class="headline-item">
              <a href="#">Surgical Delivery in Under-resourced Settings: Building Systems and Capacity Around the Corner and Far Away</a>
              <p class="small">5 months ago</p>
            </li>
          </ul>
          <div class="read-more"><a href="#">MORE ▸</a></div>
        </div>
      </div>
    </div>
  </section>
  <?php
  $output = ob_get_contents();
  ob_end_clean ();
  return $output;
}

/**
 *  Returns Most Recent 5
 */
function latest_blog_posts() {
  ob_start(); ?>
  <section class="widget latest-news-widget latest-news-widget-3">
    <div class="wrapper has-background-image">
      <div class="wrapperbgcolor background-shade">
        <div class="widgettext widget-content">
          <div class="widget-title">
            <h3>Latest Blog Posts</h3>
          </div>
          <ul class="list-unstyled">
            <li class="headline-item">
              <a href="#">My Seventh Ophthalmology Blog Post</a>
              <p class="small">3 months ago</p>
            </li>
            <li class="headline-item">
              <a href="#">My Sixth Ophthalmology Blog Post</a>
              <p class="small">3 months ago</p>
            </li>
            <li class="headline-item">
              <a href="#">My Fifth Ophthalmology Blog Post</a>
              <p class="small">3 months ago</p>
            </li>
            <li class="headline-item">
              <a href="#">My Fourth Ophthalmology Blog Post</a>
              <p class="small">3 months ago</p>
            </li>
            <li class="headline-item">
              <a href="#">My Third Ophthalmology Blog Post</a>
              <p class="small">3 months ago</p>
            </li>
          </ul>
          <div class="read-more"><a href="#">MORE ▸</a></div>
        </div>
      </div>
    </div>
  </section>
  <?php
  $output = ob_get_contents();
  ob_end_clean ();
  return $output;
}
