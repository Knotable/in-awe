      <?php
      global $wpdb;
      $name = get_the_title();
      $qry = "SELECT * FROM wp_wonderplugin_carousel WHERE name = 'home' ";
      $states = $wpdb->get_results( $qry );

      $json = json_decode($states[0]->data ,true); ?>
<div class="connected-carousels">
    <div class="stage">
        <div class="carousel carousel-stage" data-jcarousel="true">
            <ul style="left: 0px; top: 0px;">
                <?php
                  foreach( $json['slides'] as $image => $slide){ ?>
                  <li>
                    <img src="<?php echo $slide['image']; ?>" width="691" alt="The full Functional">
                  </li> 
                <?php } ?>
                <li><img src="../_shared/img/img1.jpg"  alt=""></li>
            </ul>
        </div>
        <a href="#" class="prev prev-stage inactive" data-jcarouselcontrol="true"><span></span></a>
        <a href="#" class="next next-stage" data-jcarouselcontrol="true"><span></span></a>
    </div>
    <div class="navigation">
        <!--<a href="#" class="prev prev-navigation inactive" data-jcarouselcontrol="true">‹</a>
        <a href="#" class="next next-navigation" data-jcarouselcontrol="true">›</a>-->
        <div class="carousel carousel-navigation" data-jcarousel="true">
            <ul style="left: 0px; top: 0px;">
                <?php
                  foreach( $json['slides'] as $image => $slide){ ?>
                  <li>
                    <img width="177" height="117px" src="<?php echo $slide['image']; ?>" alt="The full Functional">
                  </li> 
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jcarousel_connected.css">

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jcarousel.js"></script>
<script>
(function($) {
    // This is the connector function.
    // It connects one item from the navigation carousel to one item from the
    // stage carousel.
    // The default behaviour is, to connect items with the same index from both
    // carousels. This might _not_ work with circular carousels!
    var connector = function(itemNavigation, carouselStage) {
        return carouselStage.jcarousel('items').eq(itemNavigation.index());
    };

    $(function() {
        // Setup the carousels. Adjust the options for both carousels here.
        var carouselStage      = $('.carousel-stage').jcarousel();
        carouselStage
            .on('jcarousel:reload jcarousel:create', function () {
                var carousel = $(this),
                    width = carousel.innerWidth();
                    width = $( window ).width();
                    if(width <= 800){
                        width = (width * 80)/100;
                        console.log(width);
                        
                    }else
                        width = 620;

                    carousel.jcarousel('items').css('width', Math.ceil(width) + 'px');
                    
            })
            .jcarousel({
                wrap: 'circular'
            });
        var carouselNavigation = $('.carousel-navigation').jcarousel();

        // We loop through the items of the navigation carousel and set it up
        // as a control for an item from the stage carousel.
        carouselNavigation.jcarousel('items').each(function() {
            var item = $(this);

            // This is where we actually connect to items.
            var target = connector(item, carouselStage);

            item
                .on('jcarouselcontrol:active', function() {
                    carouselNavigation.jcarousel('scrollIntoView', this);
                    item.addClass('active');
                })
                .on('jcarouselcontrol:inactive', function() {
                    item.removeClass('active');
                })
                .jcarouselControl({
                    target: target,
                    carousel: carouselStage
                });
        });

        // Setup controls for the stage carousel
        $('.prev-stage')
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.next-stage')
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });

        // Setup controls for the navigation carousel
        $('.prev-navigation')
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .jcarouselControl({
                target: '-=1'
            });

        $('.next-navigation')
            .on('jcarouselcontrol:inactive', function() {
                $(this).addClass('inactive');
            })
            .on('jcarouselcontrol:active', function() {
                $(this).removeClass('inactive');
            })
            .jcarouselControl({
                target: '+=1'
            });
    });

    jQuery('.connected-carousels').show();

})(jQuery);
</script>