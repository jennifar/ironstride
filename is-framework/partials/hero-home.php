<?php
/**
 * Hero Home Partial
 */

?>

<section class="hero hero-home">

    <!--video-->

    <div class="container">

        <div class="header row">

            <div class="col-12 d-flex">

                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <a class="navbar-brand site-logo" href="/" itemprop="url">
                    <img itemprop="logo" class="logo img-fluid" src="<?php echo esc_url( get_stylesheet_directory_uri() ) ?>/assets/images/ironstride-marketing-logo.png" alt="ironstride marketing">
                </a>

            </div>

        </div>

        <div class="hero-title-wrap row">

            <div class="offset-lg-1 col-lg-4 pr-0">

                <div class="hero-title-top"><?php the_field('banner_title') ?></div>

                <h1 class="hero-title"><?php h1_title() ?></h1>

                <div class="hero-title-bottom"><?php the_field('banner_subtitle') ?></div>

                <a class="btn btn-1" href="#">How We Do It</a>

            </div>

        </div>

        <?php if( have_rows('banner_services') ): $i=0;  ?>

        <div class="hero-services row">

            <div class="col-lg-10 d-flex">

            <?php while ( have_rows('banner_services') ) : the_row(); $i++;
                $img = get_sub_field('banner_service_icon');


            ?>

                <div class="col">

                    <a class="hero-services-title hero-services-<?php echo $i ?>" href="<?php the_sub_field('banner_service_link') ?>"><?php the_sub_field('banner_service_title'); ?> <img src="<?php echo $img['url'] ?>" alt="<?php echo $img['alt'] ?>"/></a>

                    <p><?php the_sub_field('banner_service_excerpt') ?></p>

                </div>

            <?php endwhile; ?>

            </div>

        </div>

        <?php endif ?>        

    </div>

</section>







