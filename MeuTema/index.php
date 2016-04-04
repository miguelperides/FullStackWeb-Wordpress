<?php get_header(); ?>

<header class="jumbotron">

        <!-- Main component for a primary marketing message or call to action -->

<div class="container">

<div class="row row-header">
                <div class="col-xs-12 col-sm-8">
                    <h1>Ristorante con Fusion</h1>
                    <p style="padding:40px;"></p>
                    <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding: 20px;"></p>
                    <img src="wp-content/themes/MeuTema/img/logo.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-2">
                    <p style="padding: 40px;"></p>
                    <a type="button" class="btn btn-warning btn-block" id="btnReserve">Reserve Table</a>
                </div>
            </div>
        </div>
</header>

        <div id="reserveModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal Content -->
                <div class="modal-content">

                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reserve Table</h4>
                    </div>

                    <div class="modal-body">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label class="col-xs-12 control-label col-sm-2">Number of Guests</label>
                                <div class="col-xs-12 col-sm-10">
                                    <label class="radio-inline" for="inLineRadioOptions">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 1
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 2
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 3
                                    </label>
                                    <label class="radio-inline" for="inLineRadioOptions">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option1"> 4
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option2"> 5
                                    </label>
                                    <label class="radio-inline">
                                      <input type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option3"> 6
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 control-label col-sm-2" for="section">Section</label>
                                <div class="btn-group col-xs-12 col-sm-5" data-toggle="buttons">
                                    <label class="btn btn-success active">
                                        <input type="radio" name="nonSmoking" id="nonSmoking">Non-Smoking
                                    </label>
                                    <label class="btn btn-danger">
                                        <input type="radio" name="smoking" id="smoking">Smoking
                                    </label>
                                </div>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="col-xs-12 control-label col-sm-2" for="input-date">Date and time</label>
                                <div class="col-xs-12 col-sm-4">
                                    <input type="text" class="form-control" id="input-date" placeholder="Date">
                                    <span class="glyphicon glyphicon-calendar form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <input type="text" class="form-control" id="input-time" placeholder="Time">
                                    <span class="glyphicon glyphicon-time form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Reserve</button>
                                <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </form>
                            <div class="alert alert-warning alert-dismissable" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <strong>Warning:</strong> Please <a href="tel:9999999" class="alert-link">call</a> us to reserve for more than six guests.
                            </div>
                    </div>

                </div>
            </div>
        </div>


    <div class="container">

        <div class="row row-content">
            <div class="col-xs-12">
                <div id="mycarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1"></li>
                    <li data-target="#mycarousel" data-slide-to="2"></li>
                </ol>
                    <!-- wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img class="img-responsive" src="wp-content/themes/MeuTema/img/uthappizza.png" alt="Uthappizza">
                            <div class="carousel-caption">
                                <h2>Uthappizza <span class="label label-danger label-xs">Hot</span> <span class="badge">$4.99</span></h2>
                                <p>A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                            </div>
                        </div>

                        <div class="item">
                            <img class="img-responsive" src="wp-content/themes/MeuTema/img/buffet.png" alt="Buffet">
                            <div class="carousel-caption">
                                <h2>Weekend Grand Buffet <span class="label label-danger label-xs">New</span></h2>
                                <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person</p>
                                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                            </div>
                        </div>

                        <div class="item">
                            <img class="img-responsive" src="wp-content/themes/MeuTema/img/alberto.png" alt="Alberto">
                            <div class="carousel-caption">
                                <h2>Alberto Somayya</h2>
                                <h4>Executive Chef</h4>
                                <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>
                                <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                            </div>
                        </div>

                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <div class="btn-group" id="carouselButtons">
                        <button class="btn btn-danger btn-xs" id="carousel-pause"><span class="glyphicon glyphicon-pause" aria-hidden="true"></span></button>
                        <button class="btn btn-danger btn-xs" id="carousel-play"><span class="glyphicon glyphicon-play" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="row row-content">
            <div class="col-sm-2">
                <ul class="nav nav-pills nav-stacked">
                    <?php wp_list_categories('orderby=name&title_li'); ?>
                </ul>
            </div>
            <div class="col-sm-10">
            <?php query_posts('posts_per_page=6');
                            while (have_posts()) : the_post(); ?>
                    <div class="col-xs-4">
                        <h2>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>
                        <p><?php the_excerpt(); ?></p>
                        <p class="text-muted">Posted by: <?php the_author(); ?> on <?php the_time('j/F/Y'); ?></p>
                    </div>
            <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
             

        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center>Our Lipsmacking Culinary Creations</h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                            <img class="media-object img-thumbnail" src="wp-content/themes/MeuTema/img/uthappizza.png" alt="Uthapizza">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Uthappizza   <span class="label label-danger label-xs">Hot</span>  <span class="badge">$4,99</span></h2>
                        <p>A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>


        <div class="row row-content">
            <div class="col-xs-12 col-sm-3">
                <p style="padding:20px;"></p>
                <h3 align=center>This Month's Promotions</h3>
            </div>
                <div class="col-xs-12 col-sm-9">
                <div class="media">
                    <div class="media-body">
                        <h2 class="media-heading">Weekend Grand Buffet <span class="label label-danger label-xs">New</span></h2>
                        <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                    <div class="media-right media-middle">
                        <a href="#">
                            <img class="media-object img-thumbnail" src="wp-content/themes/MeuTema/img/buffet.png" alt="Buffet">
                        </a>
                    </div>
                </div>
                </div>
        </div>

        <div class="row row-content">
            <div class="col-xs-12 col-sm-3 col-sm-push-9">
                <p style="padding:20px;"></p>
                <h3 align=center>Meet our Culinary Specialists</h3>
            </div>
            <div class="col-xs-12 col-sm-9 col-sm-pull-3">
                <div class="media">
                    <div class="media-left media-middle">
                        <a href="#">
                        <img class="media-object img-thumbnail"
                         src="wp-content/themes/MeuTema/img/alberto.png" alt="Alberto Somayya">
                        </a>
                    </div>
                    <div class="media-body">
                        <h2 class="media-heading">Alberto Somayya</h2>
                        <h4>Executive Chef</h4>
                        <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>
                        <p><a class="btn btn-primary btn-xs" href="#">More &raquo;</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php get_footer(); ?>