<?php get_header(); ?>
<div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="img-slider">
                            <!-- Begin Slide 1-->
                            <div class="card border-light rounded-0">
                                <div class="d-none d-md-block">
                                    <img src="<?php the_field('hamburger_day_image'); ?>" class="card-img">
                                </div>
                                <div class="d-block d-md-none">
                                    <img src="<?php echo get_template_directory_uri();?>/img/hamburger2.png" class="card-img">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="row">
                                        <div class="col-5 col-md-3 col-lg-2">
                                            <div id="hamburger_day" class="orange-bg text-light text-left p-4 mt-6 date-headings">
                                                <script>
                                                    splitDate('<?php the_field('hamburger_day_custom_date'); ?>', 'hamburger_day');
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Slide 1-->

                            <!--Begin Slide 1-->
                            <div class="card border-light rounded-0">
                                <div class="d-none d-md-block">
                                    <img src="<?php the_field('hamburger_day_image'); ?>" class="card-img">
                                </div>
                                <div class="d-block d-md-none">
                                    <img src="<?php echo get_template_directory_uri();?>/img/hamburger2.png" class="card-img">
                                </div>
                                <div class="card-img-overlay">
                                    <div class="row">
                                        <div class="col-5 col-md-3 col-lg-2">
                                            <div id="hamburger_day" class="orange-bg text-light text-left p-4 mt-6 date-headings">
                                                <script>
                                                    splitDate('<?php the_field('hamburger_day_custom_date'); ?>', 'hamburger_day');
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Slide 1-->
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="container women-day bg-white p-lg-5 p-md-3">
                            <div class="row">
                                <div class="col-lg-8 col-md-12">
                                    <h4 class="dark-blue pb-5 text-capitalize ham-heading"><?php the_field('hamburger_day_heading'); ?></h4>
                                    <div class="row">
                                        <div class="col-lg-7 col-md-12"><p><?php the_field('hamburger_day_text'); ?></p></div>
                                    </div>

                                    <h5 class="orange-text text-uppercase">Read More</h5>
                                </div>
                                <div class="col-lg-4 col-md-12 border-top border-bottom">
                                    <h4 class="up-next text-capitalize font-weight-bold pb-lg-3 pb-md-3">Up Next</h4>
                                    <img src="<?php the_field('women_day_image'); ?>" class="pb-lg-3">
                                    <p><?php the_field('women_day_text'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container quiz-container border-bottom">
        <ul class="list-inline text-uppercase text-right d-xs-none">
            <li class="list-inline-item pl-md-5 pl-md-5">All</li>
            <li class="list-inline-item pl-md-5 pl-md-5">Surveys</li>
            <li class="list-inline-item pl-md-5 pl-md-5">Listicles</li>
            <li class="list-inline-item pl-md-5 pl-md-5">Quizes</li>
        </ul>

        <!--Begin Row 1 -->
        <div class="row">
            <div class="col-md-2">
                <h3 class="home-heading pt-sm-5 pb-sm-5">
                    <?php the_field('home_heading_text'); ?>
                </h3>
            </div>
            <div class="col-md-6">
                <div class="card border-light rounded-0">
                    <img src="<?php the_field('black_friday_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-4">
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
            <div class="col-md-4">
                <div class="card border-light rounded-0">
                    <img src="<?php the_field('cookie_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-6">
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
        <div class="row ml-lg-5 pt-4">
            <div class="col-lg-4">
                <div class="card border-light rounded-0">
                    <img src="<?php the_field('cyber_monday_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-4">
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
                            <div class="col-4">
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
            <div class="col-lg-4">
                <p class="quiz-headings pb-3 pt-3"><?php the_field('cookie_heading'); ?></p>
                <p class="sm-heading">Holiday: <span class="gray-text"><?php the_field('cookie_text'); ?></span> </p>
                <p class="sm-heading">Celebrate On: <span class="gray-text"><?php the_field('cookie_celebrate_on'); ?></span> </p>
            </div>
        </div>
        <!--End Row 2 -->

        <!--Begin Row 3 -->
        <div class="row ml-lg-5 pt-4">
            <div class="col-lg-6">
                <div class="card border-light rounded-0">
                    <img src="<?php the_field('giving_tuesday_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-4">
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
            <div class="col-lg-6">
                <div class="card border-light rounded-0">
                    <img src="<?php the_field('chanukah_image'); ?>" class="card-img">
                    <div class="card-img-overlay">
                        <div class="row">
                            <div class="col-4">
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
        <div class="row ml-lg-5 pt-4">
            <div class="row ml-lg-5 mr-lg-5">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="card border-light rounded-0">
                        <img src="<?php the_field('cookie_day_image'); ?>" class="card-img">
                        <div class="card-img-overlay">
                            <div class="row">
                                <div class="col-4">
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
                <div class="col-lg-5">
                    <div class="card border-light rounded-0">
                        <img src="<?php the_field('singles_day_image'); ?>" class="card-img">
                        <div class="card-img-overlay">
                            <div class="row">
                                <div class="col-4">
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
        <h5 class="orange-text text-uppercase text-right pt-md-1 pb-md-1 pt-lg-3 pb-lg-3">See More</h5>
    </div>
</div>
<?php get_footer(); ?>
