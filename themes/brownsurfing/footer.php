<footer>
<!-- <section class="pt-5" style="border-top:5px solid gray;">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-5 text-center pb-5">
<a href="<?php echo home_url(); ?>">
<?php $logo = get_field('logo','options'); $logoFooter = get_field('logo_footer','options'); 
if($logoFooter){
echo wp_get_attachment_image($logoFooter['id'],'full',"",['class'=>'w-100 h-auto']); 
} elseif($logo) {
echo wp_get_attachment_image($logo['id'],'full',"",['class'=>'w-100 h-auto']);
}
?>
</a>
</div>
<div class="col-12">
<?php wp_nav_menu(array(
'menu' => 'footer',
'menu_class'=>'menu d-flex flex-wrap list-unstyled justify-content-center text-uppercase'
)); ?>
</div>
<div class="col-12 text-center">
<p class="mb-0">Phone: <a href="tel:+1<?php the_field('phone','options'); ?>" class=""><?php the_field('phone','options'); ?></a> <span class="ml-3 mr-3">|</span> Address: <?php the_field('address','options'); ?> <span class="ml-3 mr-3">|</span> Email: <a href="mailto:<?php the_field('email','options'); ?>" target="_blank" class=""><?php the_field('email','options'); ?></a>
<span>

</span> 
</p>
<?php echo get_template_part('partials/si'); ?>
<div class="text-gray-1 pt-4">
<?php the_field('website_message','options'); ?>
</div>
</div>
</div>
</div>
</section> -->
<div class="bg-gray pt-3 pb-3 pl-5 pr-5">
    <div class="container">
    <div class="row">
    <div class="col-12">
    <p><small><em>Copyright &copy;2021. Please do not copy any of the text, images or any of  the other <a title="Affordable custom website development and design in Denver" href="https://brownsurfing.com/" target="_blank" rel="nofollow noreferrer noopener" class="text-black">website development</a>'s work.</em></small></p>
    </div>
    </div>
    </div>
</div>
</footer>
<?php if(get_field('footer', 'options')) { the_field('footer', 'options'); } ?>
<?php wp_footer(); ?>
</body>
</html>