<?php get_header(); ?> 


<div class="content_inner">
                
                <!--   Slideshow  -->
                <?php do_action('slideshow_deploy', '42'); ?>


                    <!--   Slideshow  -->
                    <div id="slider" class="carousel slide" data-ride="carousel">
                        <ul class="carousel-indicators">
                            <li data-target="#slider" data-slide-to="0" class="active"></li>
                            <li data-target="#slider" data-slide-to="1"></li>
                            <li data-target="#slider" data-slide-to="2"></li>
                        </ul>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/slide1-background.jpg" alt="Los Angeles" width="1100" height="500">
                                <div class="carousel-caption">
                                    <h2>STERILE EQUIPMENT</h2>
                                    <p>Uspendisse semper elit vitae sapien tincidunt vehicula. Aliquam nunc diam, sollicitudin nec tempor id, bibendum et magna.Loremus ipsus fevitales eros </p>
                                    <a class="btn">Book now</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/slide2-background.jpg" alt="Chicago" width="1100" height="500">
                                <div class="carousel-caption">
                                    <h2>CHOOSE YOUR ARTIST</h2>
                                    <p>Uspendisse semper elit vitae sapien tincidunt vehicula. Aliquam nunc diam, sollicitudin nec tempor id, bibendum et magna.Loremus ipsus fevitales eros </p>
                                    <a class="btn">Book now</a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/slider-background2.jpg" alt="New York" width="1100" height="500">
                                <div class="carousel-caption">
                                    <h2>STERILE EQUIPMENT</h2>
                                    <p>Uspendisse semper elit vitae sapien tincidunt vehicula. Aliquam nunc diam, sollicitudin nec tempor id, bibendum et magna.Loremus ipsus fevitales eros </p>
                                    <a class="btn">Book now</a>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#slider" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#slider" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    <!-- end slideshow  -->

                    <?php if ( is_archive() ) : ?>

                        <header class="page-header clr">
                            <?php
                                the_archive_title( '<h1 class="page-title">', '</h1>' );
                                the_archive_description( '<div class="taxonomy-description">', '</div>' );
                            ?>
                        </header><!-- .page-header -->

                    <?php elseif ( is_404() ) : ?>

                        <header class="page-header clr">
                            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'wpex' ); ?></h1>
                        </header><!-- .page-header -->

                    <?php endif; ?>

                    <div class="about-section container" style=' text-align:left;'>
                        <div class=" section_inner clearfix">
                            <div class="row">
                                <div class="col-md">
                                    <div>
                                        <h1>About Our Tattoo</h1>
                                        <h1>inc. Studio</h1>
                                        <div class="separator small left" style="margin-top: 30px;margin-bottom: 64px;background-color: #131313;width: 9%;"></div>
                                        <div class="progress">
                                            <h3>small tattoo</h3>
                                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"><span>75</span></div>
                                        </div>
                                        <div class="progress">
                                            <h3>Legs Tattoo</h3>
                                            <div class="progress-bar" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"><span>83</span></div>
                                        </div>
                                        <div class="progress">
                                            <h3>Full Body Tattoo</h3>
                                            <div class="progress-bar" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"><span>72</span></div>
                                        </div>
                                        <div class="progress">
                                            <h3>small tattoo</h3>
                                            <div class="progress-bar" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100"><span>87</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="row">
                                        <div class="col-sm">
                                            <img width="800" height="1389" src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg"  />


                                                    </div>
                                            <div class="col-sm">
                                                <img width="800" height="1389" src="<?php echo get_template_directory_uri(); ?>/images/img2.jpg"  />


                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <section data-speed="1" class="parallax_section_holder" style=" height:px; background-image:url('<?php echo get_template_directory_uri(); ?>/images/parallax-img1.jpg');">
                                <div class="parallax_content left">
                                    <div class='parallax_section_inner_margin clearfix'>
                                        <div class="container video-section">
                                            <div class="row">
                                                <div class="col-md">
                                                    <div class="video-thum-img">
                                                        <div class="qode_video_box disabled_hover_overlay">
                                                            <a itemprop="image" class="qode_video_image" href="https://vimeo.com/17724962" target="_blank">
            <span class="qode_video_box_button_holder">
                <span class="qode_video_box_button">
                    <span class="qode_video_box_button_arrow">
                    </span>
                </span>
            </span>
            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="video-content">
                                                        <h1>YOUR First Treatment,</h1>
                                                        <h1>50% off</h1>
                                                        <div class="separator small left"></div>
                                                        <div class="q_icon_list">
                                                            <i class="fa fa-check"></i>
                                                            <p>Uspendisse semper elit vitae sapien tincidun</p>
                                                        </div>
                                                        <div class="q_icon_list"><i class="fa fa-check" ></i>
                                                            <p>Vehicula. Aliquam nunc diam, sollicitudin nec temporbibendum.</p>
                                                        </div>
                                                        <div class="q_icon_list"><i class="fa fa-check"></i>
                                                            <p>Uspendisse semper elit vitae sapien tincidun</p>
                                                        </div>
                                                        <a href="#" class="qbutton  large center default">Book Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            
                            <!-- Gallery section -->
                            <div class="gallery-section container">

                                <?php 

                                    $my_query = new WP_Query('p=1');

                                    while($my_query->have_posts()){
                                      $my_query->the_post(); ?>
                                      <h2 class="entry-title"><?php the_title(); ?></h2>
                                      <div class="separator small center"></div>
                                      <?php
                                      the_content();
                                    }
                                 
                                ?> 

                                
                            </div>


                                                            <section data-speed="1" class="parallax_section_holder  " style=" height:px; background-image:url('<?php echo get_template_directory_uri(); ?>/images/parallax-img2.jpg');">
                                                                <div class="parallax_content left clients-records">
                                                                    <div class='parallax_section_inner_margin clearfix'>
                                                                        <div class="section_inner clearfix container">
                                                                            <div class="row">
                                                                                <div class="col-sm">
                                                                                    <div class="q_counter_holder center"><span class="counter">75</span>
                                                                                        <p class="counter_text">Clients Per Year</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="q_counter_holder  center"><span class="counter">63</span>
                                                                                        <p class="counter_text">Clients Per Year</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="q_counter_holder  center"><span class="counter">89</span>
                                                                                        <p class="counter_text">Clients Per Year</p>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="q_counter_holder  center"><span class="counter">45</span>
                                                                                        <p class="counter_text">Clients Per Year</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <div class="artists-section">
                                                                <div class="container">
                                                                    <h2>Tattoo Artists</h2>
                                                                    <div class="separator small center"></div>
                                                                    <div class="artists-list row">
                                                                        <div class="col-sm-6 col-md-3">
                                                                            <div class='team_inner'>
                                                                                <div class='team_image'><img itemprop='image' src='<?php echo get_template_directory_uri(); ?>/images/team1.jpg' alt='team1' /></div>
                                                                                    <div class='team_text'>
                                                                                        <h4>Johan Samuel</h4>
                                                                                        <div class='team_social_holder'>
                                                                                            <a href='https://www.instagram.com/' target='_blank'><i class="fa fa-instagram"></i></a>
                                                                                            <a href='https://www.twitter.com/' target='_blank'><i class="fa fa-twitter"></i></a>
                                                                                            <a href='https://www.dribble.com/' target='_blank'><i class="fa fa-dribbble"></i></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-6 col-md-3">
                                                                                <div class='team_inner'>
                                                                                    <div class='team_image'><img itemprop='image' src='<?php echo get_template_directory_uri(); ?>/images/team2.jpg' alt='team1' /></div>
                                                                                        <div class='team_text'>
                                                                                            <h4>Julie Jenkins</h4>
                                                                                            <div class='team_social_holder'>
                                                                                                <a href='https://www.instagram.com/' target='_blank'><i class="fa fa-instagram"></i></a>
                                                                                                <a href='https://www.twitter.com/' target='_blank'><i class="fa fa-twitter"></i></a>
                                                                                                <a href='https://www.dribble.com/' target='_blank'><i class="fa fa-dribbble"></i></a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-3">
                                                                                    <div class='team_inner'>
                                                                                        <div class='team_image'><img itemprop='image' src='<?php echo get_template_directory_uri(); ?>/images/team3.jpg' alt='team1' /></div>
                                                                                            <div class='team_text'>
                                                                                                <h4>Ava Adams</h4>
                                                                                                <div class='team_social_holder'>
                                                                                                    <a href='https://www.instagram.com/' target='_blank'><i class="fa fa-instagram"></i></a>
                                                                                                    <a href='https://www.twitter.com/' target='_blank'><i class="fa fa-twitter"></i></a>
                                                                                                    <a href='https://www.dribble.com/' target='_blank'><i class="fa fa-dribbble"></i></a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-6 col-md-3">
                                                                                        <div class='team_inner'>
                                                                                            <div class='team_image'><img itemprop='image' src='<?php echo get_template_directory_uri(); ?>/images/team4-1.jpg' alt='team1' /></div>
                                                                                                <div class='team_text'>
                                                                                                    <h4>Noel Sam</h4>
                                                                                                    <div class='team_social_holder'>
                                                                                                        <a href='https://www.instagram.com/' target='_blank'><i class="fa fa-instagram"></i></a>
                                                                                                        <a href='https://www.twitter.com/' target='_blank'><i class="fa fa-twitter"></i></a>
                                                                                                        <a href='https://www.dribble.com/' target='_blank'><i class="fa fa-dribbble"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div id='company-map'></div>
                                                                            <div class="section-instagram">
                                                                                <h2>#instagram</h2>
                                                                                <div class="row">
                                                                                    <div class="col-sm-4 col-md-2 item">
                                                                                        <a href="https://www.instagram.com/p/BgoIQMdF_Zl/" target="_blank">
                            <img class="low_resolution" src="<?php echo get_template_directory_uri(); ?>/images/insta-img-1.jpg" alt="" width="320" height="320" />                      </a>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2 item">
                                                                                        <a href="https://www.instagram.com/p/BgoIOfZlZjx/" target="_blank">
                            <img class="low_resolution" src="<?php echo get_template_directory_uri(); ?>/images/insta-img-2.jpg" alt="" width="320" height="320" />                      </a>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2 item">
                                                                                        <a href="https://www.instagram.com/p/BgoIMx-FySS/" target="_blank">
                            <img class="low_resolution" src="<?php echo get_template_directory_uri(); ?>/images/insta-img-3.jpg" alt="" width="320" height="320" />                        </a>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2 item">
                                                                                        <a href="https://www.instagram.com/p/BgoILE-FY30/" target="_blank">
                            <img class="low_resolution" src="<?php echo get_template_directory_uri(); ?>/images/insta-img-4.jpg" alt="" width="320" height="320" />                      </a>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2 item">
                                                                                        <a href="https://www.instagram.com/p/BgoIJckFDjG/" target="_blank">
                            <img class="low_resolution" src="<?php echo get_template_directory_uri(); ?>/images/insta-img-5.jpg" alt="" width="320" height="320" />                      </a>
                                                                                    </div>
                                                                                    <div class="col-sm-4 col-md-2 item">
                                                                                        <a href="https://www.instagram.com/p/BgoIHktFS7d/" target="_blank">
                            <img class="low_resolution" src="<?php echo get_template_directory_uri(); ?>/images/insta-img-6.jpg" alt="" width="320" height="320" />                     </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            
                                                                            



<?php get_footer(); ?>