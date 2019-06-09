<?php get_header(); ?>
<div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-10">
                        <div class="img-slider">
                            <!-- Begin Slide 1-->
                            <div class="card border-light rounded-0">
                                <div class="d-none d-md-block">
                                    <img src="<?php the_field('hamburger_day_image'); ?>" class="card-img">
                                </div>
                                <div class="d-block d-sm-none">
                                    <img src="<?php echo get_template_directory_uri();?>/img/hamburger2.png" class="card-img">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="row">
                                        <div class="col-7 col-md-3 col-lg-2">
                                            <div id="hamburger_day" class="orange-bg text-light text-left p-4 mt-4 mt-sm-6 date-headings">
                                                <script>
                                                    splitDate('<?php the_field('hamburger_day_custom_date'); ?>', 'hamburger_day');
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Slide 1-->

                            <!--Begin Slide 2-->
                            <div class="card border-light rounded-0">
                                <div class="d-none d-md-block">
                                    <img src="<?php the_field('hamburger_day_image'); ?>" class="card-img">
                                </div>
                                <div class="d-block d-md-none">
                                    <img src="<?php echo get_template_directory_uri();?>/img/hamburger2.png" class="card-img">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="row">
                                        <div class="col-7 col-md-3 col-lg-2">
                                            <div id="hamburger_day_2" class="orange-bg text-light text-left p-4 mt-4 mt-sm-6 date-headings">
                                                <script>
                                                    splitDate('<?php the_field('hamburger_day_custom_date'); ?>', 'hamburger_day_2');
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Slide 2-->
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="container women-day bg-white p-md-3 p-lg-5 ">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <h4 class="dark-blue pb-5 text-capitalize ham-heading"><?php the_field('hamburger_day_heading'); ?></h4>
                                    <div class="row">
                                        <div class="col-lg-7 col-md-12"><p><?php the_field('hamburger_day_text'); ?></p></div>
                                    </div>

                                    <h5 class="orange-text text-uppercase more-button">Read More</h5>
                                </div>
                                <div class="col-lg-4 col-md-12 border-top border-bottom mb-5 mt-5 mb-sm-0 mt-sm-0">
                                    <h4 class="up-next text-capitalize font-weight-bold pb-lg-3 pb-md-3">Up Next</h4>
                                    <div class="row">
                                        <div class="col-6">
                                            <img src="<?php the_field('women_day_image'); ?>" class="pb-lg-3 img-fluid">
                                        </div>
                                        <div class="col-6">
                                            <p><?php the_field('women_day_text'); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container quiz-container border-bottom">
        <ul class="list-inline text-uppercase text-right d-none d-lg-block">
            <li class="list-inline-item pl-md-5 pl-md-5 orange-text" id="all-sort">All</li>
            <li class="list-inline-item pl-md-5 pl-md-5" id="surv-sort">Surveys</li>
            <li class="list-inline-item pl-md-5 pl-md-5" id="list-sort">Listicles</li>
            <li class="list-inline-item pl-md-5 pl-md-5" id="quiz-sort">Quizes</li>
        </ul>

        <!--Begin Row 1 -->
        <div class="row">
            <div class="col-lg-2" id="home-col">
                <h3 class="home-heading pt-5 pb-5">
                    <?php the_field('home_heading_text'); ?>
                </h3>
            </div>
            <div class="col-lg-6" id="bf-col">
                <div class="card border-light rounded-0 mb-5 mb-sm-0">
                    <img src="<?php the_field('black_friday_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-7 col-md-4">
                                <div id="black_friday" class="orange-bg text-light text-left p-3 date-headings">
                                    <script>
                                        splitDate('<?php the_field('black_friday_custom_date'); ?>', 'black_friday');
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="quiz-headings pb-3 pt-3"><?php the_field('black_friday_heading'); ?></p>
                    <p class="sm-heading">Holiday: <span class="gray-text"><?php the_field('black_friday_text'); ?></span> </p>
                    <p class="sm-heading">Celebrate On: <span class="gray-text"><?php the_field('black_friday_celebrate_on'); ?></span> </p>
                </div>
            </div>
            <div class="col-lg-4" id="cookie-col">
                <div class="card border-light rounded-0">
                    <img src="<?php the_field('cookie_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-7 col-lg-4">
                                <div id="cookie" class="orange-bg text-light text-left p-3 date-headings">
                                    <script>
                                        splitDate('<?php the_field('cookie_custom_date'); ?>', 'cookie');
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Row 1-->

        <!--Begin Row 2 -->
        <div class="row ml-lg-5 pt-4" id="cyber-row">
            <div class="col-lg-4">
                <div class="card border-light rounded-0">
                    <img src="<?php the_field('cyber_monday_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-7 col-md-4">
                                <div id="cyber_monday" class="orange-bg text-light text-left p-3 date-headings">
                                    <script>
                                        splitDate('<?php the_field('cyber_monday_custom_date'); ?>', 'cyber_monday');
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="quiz-headings pb-3 pt-3"><?php the_field('cyber_monday_heading'); ?></p>
                    <p class="sm-heading">Holiday: <span class="gray-text"><?php the_field('cyber_monday_text'); ?></span> </p>
                    <p class="sm-heading">Celebrate On: <span class="gray-text"><?php the_field('cyber_monday_celebrate_on'); ?></span> </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-light rounded-0">
                    <img src="<?php the_field('ice_cream_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-7 col-md-4">
                                <div id="ice_cream" class="orange-bg text-light text-left p-3 date-headings">
                                    <script>
                                        splitDate('<?php the_field('ice_cream_custom_date'); ?>', 'ice_cream');
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="quiz-headings pb-3 pt-3"><?php the_field('ice_cream_heading'); ?></p>
                    <p class="sm-heading">Holiday: <span class="gray-text"><?php the_field('ice_cream_text'); ?></span> </p>
                    <p class="sm-heading">Celebrate On: <span class="gray-text"><?php the_field('ice_cream_celebrate_on'); ?></span> </p>
                </div>
            </div>
            <div class="col-lg-4" id="c-day-row">
                <p class="quiz-headings pb-3 pt-3"><?php the_field('cookie_heading'); ?></p>
                <p class="sm-heading">Holiday: <span class="gray-text"><?php the_field('cookie_text'); ?></span> </p>
                <p class="sm-heading">Celebrate On: <span class="gray-text"><?php the_field('cookie_celebrate_on'); ?></span> </p>
            </div>
        </div>
        <!--End Row 2 -->

        <!--Begin Row 3 -->
        <div class="row ml-lg-5 pt-4" id="giving-row">
            <div class="col-lg-6">
                <div class="card border-light rounded-0">
                    <img src="<?php the_field('giving_tuesday_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-7 col-md-4">
                                <div id="giving_tuesday" class="orange-bg text-light text-left p-3 date-headings">
                                    <script>
                                        splitDate('<?php the_field('giving_tuesday_custom_date'); ?>', 'giving_tuesday');
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="quiz-headings pb-3 pt-3"><?php the_field('giving_tuesday_heading'); ?></p>
                    <p class="sm-heading">Holiday: <span class="gray-text"><?php the_field('giving_tuesday_text'); ?></span> </p>
                    <p class="sm-heading">Celebrate On: <span class="gray-text"><?php the_field('giving_tuesday_celebrate_on'); ?></span> </p>
                </div>
            </div>
            <div class="col-lg-6" id="chan-row">
                <div class="card border-light rounded-0">
                    <img src="<?php the_field('chanukah_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-7 col-md-4">
                                <div id="chanukah" class="orange-bg text-light text-left p-3 date-headings">
                                    <script>
                                        splitDate('<?php the_field('chanukah_custom_date'); ?>', 'chanukah');
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="quiz-headings pb-3 pt-3"><?php the_field('chanukah_heading'); ?></p>
                    <p class="sm-heading">Holiday: <span class="gray-text"><?php the_field('chanukah_text'); ?></span> </p>
                    <p class="sm-heading">Celebrate On: <span class="gray-text"><?php the_field('chanukah_celebrate_on'); ?></span> </p>
                </div>
            </div>
        </div>
        <!--End Row 3 -->
        <!--Begin Row 4 -->
        <div class="row ml-lg-5 pt-4" id="cake-row">
            <div class="row ml-lg-5 mr-lg-5">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="card border-light rounded-0">
                        <img src="<?php the_field('cookie_day_image'); ?>" class="card-img">
                        <div class="card-img-overlay">
                            <div class="row">
                                <div class="col-7 col-md-4">
                                    <div id="cookie_day" class="orange-bg text-light text-left p-3 date-headings">
                                        <script>
                                            splitDate('<?php the_field('cookie_day_custom_date'); ?>', 'cookie_day');
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="quiz-headings pb-3 pt-3"><?php the_field('cookie_day_heading'); ?></p>
                        <p class="sm-heading">Holiday: <span class="gray-text"><?php the_field('cookie_day_text'); ?></span> </p>
                        <p class="sm-heading">Celebrate On: <span class="gray-text"><?php the_field('cookie_day_celebrate_on'); ?></span> </p>
                    </div>
                </div>
                <div class="col-lg-5" id="singles-row">
                    <div class="card border-light rounded-0">
                        <img src="<?php the_field('singles_day_image'); ?>" class="card-img">
                        <div class="card-img-overlay">
                            <div class="row">
                                <div class="col-7 col-md-4">
                                    <div id="singles_day" class="orange-bg text-light text-left p-3 date-headings">
                                        <script>
                                            splitDate('<?php the_field('singles_day_custom_date'); ?>', 'singles_day');
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="quiz-headings pb-3 pt-3"><?php the_field('singles_day_heading'); ?></p>
                        <p class="sm-heading">Holiday: <span class="gray-text"><?php the_field('singles_day_text'); ?></span> </p>
                        <p class="sm-heading">Celebrate On: <span class="gray-text"><?php the_field('singles_day_celebrate_on'); ?></span> </p>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
        <!--End Row 4 -->
    </div>

    <div class="container">
        <h5 class="orange-text text-uppercase text-right pt-md-1 pb-md-1 pt-3 pb-3 more-button">See More</h5>
    </div>
</div>
<?php get_footer(); ?>
