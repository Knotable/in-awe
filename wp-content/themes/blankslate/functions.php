<?php
add_action( 'after_setup_theme', 'blankslate_setup' );
function blankslate_setup()
{
load_theme_textdomain( 'blankslate', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
global $content_width;
if ( ! isset( $content_width ) ) $content_width = 640;
register_nav_menus(
array( 'main-menu' => __( 'Main Menu', 'blankslate' ) )
);
}
add_action( 'wp_enqueue_scripts', 'blankslate_load_scripts' );
function blankslate_load_scripts()
{
wp_enqueue_script( 'jquery' );
}
add_action( 'comment_form_before', 'blankslate_enqueue_comment_reply_script' );
function blankslate_enqueue_comment_reply_script()
{
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
add_filter( 'the_title', 'blankslate_title' );
function blankslate_title( $title ) {
if ( $title == '' ) {
return '&rarr;';
} else {
return $title;
}
}
add_filter( 'wp_title', 'blankslate_filter_wp_title' );
function blankslate_filter_wp_title( $title )
{
return $title . esc_attr( get_bloginfo( 'name' ) );
}
add_action( 'widgets_init', 'blankslate_widgets_init' );
function blankslate_widgets_init()
{
register_sidebar( array (
'name' => __( 'Sidebar Widget Area', 'blankslate' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
function blankslate_custom_pings( $comment )
{
$GLOBALS['comment'] = $comment;
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php 
}
add_filter( 'get_comments_number', 'blankslate_comments_number' );
function blankslate_comments_number( $count )
{
if ( !is_admin() ) {
global $id;
$comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $comments);
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

function appthemes_add_quicktags() {
    if (wp_script_is('quicktags')){
?>
    <script type="text/javascript">
    QTags.addButton( 'eg_paragraph', 'p.subtitle', '<p class="subtitle">', '</p>', 'p', 'Paragraph tag', 1 );
    QTags.addButton( 'eg_span', 'span', '<span>', '</span>', 'span', 'Span tag');
    QTags.addButton( 'eg_hr', 'hr', '<hr/>', '', 'h', 'Horizontal rule line', 201 );
    QTags.addButton( 'eg_br', 'br', '<br/>', '', 'br', 'Jump line' );
    QTags.addButton( 'eg_pre', 'pre', '<pre lang="php">', '</pre>', 'q', 'Preformatted text tag', 111 );
    </script>
<?php
    }
}
  add_action( 'admin_print_footer_scripts', 'appthemes_add_quicktags' );

//[scheduler]
function scheduler_func( $atts ){ ?>
    <div class="container scheduler_container grey">
        <section id="schedule">
            <h2><?php echo stripslashes($Scheduler->title); ?></h2>
            <?php include('schedule.php'); ?>
        </section>
    </div>
        
    <?php
    //return "foo and bar";
    }

add_shortcode( 'scheduler', 'scheduler_func' );

include('inbox_awesome.php');