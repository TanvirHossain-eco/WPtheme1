<?php 

/* Template Name: Gallery */

// Gallery Images
$img_gal= get_field('gallery');

// <?php var_dump($imgs_gal); 
// <!-- <?php echo $imgs_gal['sizes']['thumbnail'];
// <?php var_dump($imgs_gal); die();    
get_header();?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1><br><br><br>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>
                

               
                <!-- Banner Image -->
                <?php if($img_gal): ?>
                    <div class="gallery"> 
                        <div class="row" >
                            <?php foreach( $img_gal as $imgs_gal): ?>
                                
                                <div class="col-lg-3">
                                    <a href="<?php echo $imgs_gal['sizes']['vs_small'];?>" title="<?php echo $imgs_gal['caption'];?>">
                                        <img src="<?php echo $imgs_gal['sizes']['thumbnail'];?>" class ="img-fluid">
                                    </a>
                                </div> 
                        
                    
                            <?php endforeach;?>
                        </div>
                    </div>
                <?php endif; ?> <br><br><br>

                




    </div>
</section>

<?php get_footer();?>