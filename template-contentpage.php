<?php 

/* Template Name: Content Page */

// Banner Image
$image = get_field('feature_image');
$picture = $image['sizes']['my_custom_size'];
$alt = $image['alt'];
$title = $image['title'];

// Upload a File
$file = get_field('upload_a_file');
$filename = $file['filename'];
$fileurl = $file['url'];

// Embed a video
$embed = get_field('embed_a_video');

get_header();?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>
            
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php the_content(); ?>

                <?php endwhile; else: endif; ?>
                <!-- Banner Image -->
                <?php if($image):?>
                    <image src="<?php echo $picture;?>" class="img-fluid" alt="<?php echo $alt;?>" title="<?php echo $title;?>">    </image><br>
                    <!-- <?php var_dump($image); ?>  -->
                <?php endif; ?> <br><br><br>

                <!-- Upload a file -->
                <?php if ($file):?>
                    <!-- <?php var_dump($file); ?>                -->
                    <a href="<?php echo $fileurl;?>">View the File</a>
                    <a href="<?php echo $fileurl;?>" download>Download the Image <?php echo $filename;?></a>
                <?php endif; ?> <br><br><br>

                <!-- Embed a Video -->
                <?Php if ($embed):?>
                    <!-- <?php var_dump($embed); ?> -->
                    <?php echo $embed; ?>
                <?php endif;?><br><br><br>








    </div>
</section>

<?php get_footer();?>