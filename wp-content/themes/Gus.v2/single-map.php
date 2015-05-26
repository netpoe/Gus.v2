<?php
  get_header();
  while( have_posts() ) : the_post();
?>

  <script>
    var mapStyle = [{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2e5d4"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{"featureType":"road","elementType":"all","stylers":[{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"water","elementType":"all","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]}];
    function initialize() {
      var mapCenterLat = arrangePlaces()[0][2];
      var mapCenterLang = arrangePlaces()[0][3];
      var mapOptions = {
        zoom: 10,
        center: new google.maps.LatLng(mapCenterLat, mapCenterLang),
        scrollwheel: false,
        mapTypeControl: false,
        styles: mapStyle
      };
      var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
      setMarkers(map, arrangePlaces());
    }
    function arrangePlaces() {
      var places = [];
      <?php if ( have_rows('map_content') ) : ?>
        <?php while ( have_rows('map_content') ) : the_row(); ?>
          places.push([
            "<?php echo the_sub_field('location_title'); ?>",
            "<?php echo the_sub_field('location_address'); ?>",
            <?php echo the_sub_field('location_lat'); ?>,
            <?php echo the_sub_field('location_lang'); ?>,
            "<?php echo the_sub_field('location_href'); ?>",
            <?php echo the_sub_field('location_featured'); ?>
            ]);
        <?php endwhile; ?>
      <?php endif; ?>
      return places;
    }
    function setMarkers(map, locations) {
      var infowindow, contentString;
      infowindow = new google.maps.InfoWindow({
        content: ""
      });
      for (var i = 0; i < locations.length; i++) {
        var place = locations[i];
        contentString = '<div class="map-info-window normalize-text">' +
            '<div class="window-info">' +
              '<div class="window-title"><h3>' + 
              '<a href="#' + place[4] + '">' + place[0] + '</a></h3></div>' +
              '<nav class="window-meta"><span>' + place[1] + '</span></nav>' +
            '</div>' +
            '<div class="window-content"><p></p></div>' +
            '<div class="window-footer"></div>' +
          '</div>';
        var myLatLng = new google.maps.LatLng(place[2], place[3]);
        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: place[0],
            html: contentString
        });
        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(this.html);
          infowindow.open(map, this);
        });
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>

	<main role="main" class="site-content">
    <div id="map-canvas"></div>
    <section class="post-show">
      <div class="site-content-row">
        <div class="site-content-left pl-0">
          <div class="logo-wrap"><a href="<?php echo site_url(); ?>" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/app/assets/img/logo_Gus.png" alt="Gus UIXDeveloper"></a></div>
        </div>
        <div class="site-content-right">
          <div class="excerpt-wrap">
            <?php the_excerpt(); ?>
          </div>
          <div class="post-show-item-info">
            <div class="post-title">
              <h1><?php the_title(); ?></h1>                
              <nav class="post-category"><?php the_category(' '); ?></nav>
            </div>
            <div class="post-meta">
              <nav class="ml-ch-14">
                <span>Author: Gus</span>
                <span><?php the_date(); ?></span>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="site-content-row">
        <div class="site-content-left">
          <div class="post-show-assets">
            <?php 
              $img_id = get_post_thumbnail_id( $post->ID );
              $alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true);
            ?>
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="post-featured-pic">
                <?php the_post_thumbnail('large', array( 'data-action' => 'zoom' )); ?>
                <small class="help-block"><?php echo $alt_text; ?></small>
              </div>
            <?php endif; ?>
            <?php if ( get_field('youtube_id') ) : ?>
              <div class="post-featured-video">
                <iframe width="100%" height="210" src="https://www.youtube.com/embed/<?php the_field('youtube_id'); ?>?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                <small class="help-block"><?php the_field('youtube_video_description'); ?></small>
              </div>
            <?php endif; ?>
            <?php if ( get_field('vimeo_id') ) : ?>
              <div class="post-featured-video">
                <iframe src="https://player.vimeo.com/video/<?php the_field('vimeo_id'); ?>?color=ffffff&title=0&byline=0&portrait=0" width="100%" height="210" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                <small class="help-block"><?php the_field('vimeo_video_description'); ?></small>
              </div>
            <?php endif; ?>
            <?php
            $images = get_field('gallery');
            if( $images ): ?>
            <?php foreach( $images as $image ): ?>
              <div class="post-gallery-pic">
                <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['title']; ?>" data-action="zoom"
                    srcset="<?php echo $image['sizes']['medium']; ?> 480w, 
                            <?php echo $image['sizes']['medium']; ?> 720w, 
                            <?php echo $image['sizes']['large']; ?> 940w, 
                            <?php echo $image['url']; ?> 1140w">
                <small class="help-block"><?php echo $image['title']; ?></small>
              </div>
            <?php endforeach; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="site-content-right">
          <article class="post-show-item">
            <div class="post-show-item-left"></div>
            <div class="post-show-item-right">
              <div class="post-content">
                <?php the_content(); ?>
              </div>
              <div class="post-share-input input-group">
                <span class="input-group-addon" id="share-this-post" aria-describedby="share-this-post">Cher:</span>
                <input type="text" class="form-control" value="<?php the_permalink(); ?>?utm_source=facebook&utm_medium=fanpage&utm_term=intro_2015&utm_content=fanpage_blog&utm_campaign=soygus_2015" onclick="select()">
              </div>
            </div>
          </article>
        </div>
      </div>
    </section>    
	</main>
  <!-- <div class="map-info-window normalize-text">
    <div class="window-info">
      <div class="window-title"><h3><a href="#"></a></h3></div>
      <nav class="window-meta"><span></span></nav>
    </div>
    <div class="window-content"><p></p></div>
    <div class="window-footer"></div>
  </div> -->

<?php endwhile; ?>

<?php get_footer(); ?>