<?php get_header();

$title = get_field('page_title');
$description = get_field('description');
$other_description = get_field('other_description');
$my_input = get_field('my_input');
$my_range = get_field('my_range');
$my_email = get_field('my_email');
$my_url = get_field('my_url');
$my_password = get_field('my_password');
?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>

                <?php if ($title):?> 
                    <h1><?php echo $title;?></h1>
                <?php endif;?>
                
                <?php if ($description):?>
                    <?php echo nl2br($description);?>
                <?php endif;?>

                <?php if ($other_description):?>
                    <?php echo $other_description;?>
                <?php endif;?>

                <?php if ($my_input):?>
                    <?php echo $my_input;?><br>
                    <?php echo var_dump($my_input);?><br>
                    <?php echo var_dump((int)$my_input);?><br>
                <?php endif;?>

                <?php if ($my_range):?>
                    <?php echo $my_range;?><br>
                <?php endif;?>

                <?php if ($my_email):?>
                    <a href="mailto:<?php echo $my_email;?>"><?php echo $my_email;?></a><br>
                <?php endif;?>

                <?php if ($my_url):?>
                    <a href="<?php echo $my_url;?>"><?php echo $my_url;?></a><br>
                <?php endif;?>

                <?php if ($my_password):?>
                    <?php echo $my_password;?><br>
                <?php endif;?>





    </div>
</section>

<?php get_footer();?>