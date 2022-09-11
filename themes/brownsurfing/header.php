<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 

if(get_field('header', 'options')) { the_field('header', 'options'); }

if(get_field('custom_css')) { 
?> 
<style>
<?php the_field('custom_css'); ?>
</style>
<?php } ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if(get_field('body','options')) { the_field('body','options'); }
echo '<div class="blank-space"></div>';
echo '<header class="position-relative pt-3 box-shadow bg-white w-100" style="top:0;left:0;z-index:10;">';

echo '<div class="nav">';
echo '<div class="container">';
echo '<div class="row align-items-center">';
echo '<div class="col-md-9">';
echo '<a href="' . home_url() . '">';

$logo = get_field('logo','options'); 
if($logo){
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:225px;']); 
}
echo '</a>';

echo '<p class="small">' . get_field('website_tagline','options') . '</p>';

echo '</div>';

echo '<div class="col-md-3 text-right">';

echo get_template_part('partials/si');

echo '<div class="small">';
echo get_field('website_message','options');
echo '</div>';

echo '</div>';
echo '</div>';

echo '<div class="row align-items-center">';

echo '<div class="bg-gray w-100" style="height:2px;"></div>';

echo '<div class="col-12">';
wp_nav_menu(array(
    'menu' => 'primary',
    'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
    )); 
echo '</div>';

// <div class="col-lg-4 col-6 desktop-hidden">
// <a id="navToggle" class="nav-toggle">
// <div>
// <div class="line-1 bg-accent"></div>
// <div class="line-2 bg-accent"></div>
// <div class="line-3 bg-accent"></div>
// </div>
// </a>
// </div>

// echo '<div id="navMenuOverlay" class="position-fixed z-2"></div>';
// echo '<div class="col-md-9 nav-items bg-white desktop-hidden" id="navItems">';

// echo '<div class="pt-5 pb-5">';
// echo '<div class="close-menu">';
// echo '<div>';
// echo '<span id="navMenuClose" class="close h1">X</span>';
// echo '</div>';
// echo '</div>';
// echo '<a href="' . home_url() . '">';

// $logo = get_field('logo','options'); 
// if($logo){
// echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto','style'=>'max-width:250px;']);
// }

// echo '</a>';
// echo '</div>';
//     wp_nav_menu(array(
//     'menu' => 'primary',
//     'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center mb-0'
//     ));
// echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</header>';

if(is_front_page()):
echo '<section class="hero position-relative">';
$globalPlaceholderImg = get_field('global_placeholder_image','options');
if(is_page()){
if(has_post_thumbnail()){
the_post_thumbnail('full', array('class' => 'w-100 h-100 bg-img position-absolute'));
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}
} else {
echo wp_get_attachment_image($globalPlaceholderImg['id'],'full','',['class'=>'w-100 h-100 bg-img position-absolute']);
}


// if(is_front_page()) {
echo '<div class="text-white text-center" style="padding-top:200px;">';
echo '<div class="position-relative">';
echo '<div class="multiply overlay position-absolute w-100 h-100 bg-img"></div>';
echo '<div class="position-relative">';
echo '<div class="container">';
echo '<div class="row">';
echo '<div class="col-12">';
echo '<h1 class="pt-3 pb-3 mb-0 h4">' . get_field('website_motto','options') . '</h1>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
// }



// if(!is_front_page()) {
// echo '<div class="container pt-5 pb-5 text-white text-center">';
// echo '<div class="row">';
// echo '<div class="col-md-12">';
// if(is_page() || !is_front_page()){
// echo '<h1 class="">' . get_the_title() . '</h1>';
// } elseif(is_single()){
// echo '<h1 class="">' . get_single_post_title() . '</h1>';
// } elseif(is_author()){
// echo '<h1 class="">Author: ' . get_the_author() . '</h1>';
// } elseif(is_tag()){
// echo '<h1 class="">' . get_single_tag_title() . '</h1>';
// } elseif(is_category()){
// echo '<h1 class="">' . get_single_cat_title() . '</h1>';
// } elseif(is_archive()){
// echo '<h1 class="">' . get_archive_title() . '</h1>';
// }
// echo '</div>';
// echo '</div>';
// echo '</div>';
// }

echo '</section>';
endif;

echo '<div class="w-100" style="background: rgb(121,1,3);
background: linear-gradient(0deg, rgba(121,1,3,1) 0%, rgba(0,0,0,1) 100%);height:50px;"></div>';
?>