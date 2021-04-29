<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Your Coconut Journey Starts Here">
    <meta name="keywords" content="delcoco, coconut, kelapa, air, minuman, segar">
    <?php include 'favicon.php' ?>
    <title>Delcoco</title>
    <script src="<?= base_url(); ?>js/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="<?= base_url(); ?>plugin/bootstrap/css/bootstrap.min.css">
    <link href="<?= base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>css/style_menu.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>css/style-comparison.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <section class="index1">
        <?php $this->load->view('menu');?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="wrapper-box">
                        <div class="center-box text-center center-block">
                            <div class="wrapper-text text-center">
                                <h1>
                                    <?= $arr_section[0]->title; ?>
                                </h1>
                                <p>
                                    <?= $arr_section[0]->subtitle; ?>
                                </p><a href="<?= base_url(); ?>product"><button id="readmore" class="btn readmore-btn"><?php echo $this->lang->line('readMore') ?></button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coco1" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 1200%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);"><img src="<?= base_url(); ?>images/fly1.png" /></div>
            <div class="coco2" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 2200%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);"><img class="img-responsive" src="<?= base_url(); ?>images/fly2.png" /></div>
            <div class="coco3" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 1400%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);"><img src="<?= base_url(); ?>images/fly3.png" /></div>
            <div class="coco4 text-right" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 700%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);"><img src="<?= base_url(); ?>images/fly4.png" /></div>
            <div class="coco5 text-right" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 1800%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);"><img src="<?= base_url(); ?>images/fly5.png" /></div>
            <div class="coco6" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 1100%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);"><img src="<?= base_url(); ?>images/fly6.png" /></div>
            <div class="stay1 text-left"><img src="<?= base_url(); ?>images/stay1.png" /></div>
            <div class="stay2 text-right"><img src="<?= base_url(); ?>images/stay2.png" /></div>
            <div class="sd"><img src="<?= base_url(); ?>images/scroll.png" /></div>
        </div>
    </section>
    <section class="index2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="wrapper-box2">
                        <div class="center-box text-center center-block">
                            <div class="wrapper-text2 text-center">
                                <h3>“
                                    <?= $arr_section[1]->subtitle; ?>”</h3>
                                <p>-
                                    <?= $arr_section[1]->title; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stay3"><img src="<?= base_url(); ?>images/stay3.png" /></div>
        </div>
    </section>
    <section class="index3">
        <div class="container-fluid section3">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="col-xs-12 col-sm-6 v-center image-wrap">
                        <div class="col-xs-12 col-sm-12 nopad index3-pict" style="background-image:url(<?= base_url(); ?>images/website/<?= $arr_section[2]->image_name; ?>);">
                            <div class="col-xs-12 col-sm-12 nopad index3-pattern" style="background-image:url(<?= base_url(); ?>images/pattern1.png);">
                                <div class="padtop"></div>
                            </div>
                        </div>
                    </div><!----><div class="col-xs-12 col-sm-6 v-center padright index3-content">
                        <div class="col-xs-12 col-sm-12"><img src="<?= base_url(); ?>images/stay5.png" />
                            <h1>
                                <?= $arr_section[2]->title; ?>
                            </h1>
                            <h4>
                                <?= $arr_section[2]->subtitle; ?>
                            </h4>
                            <div>
                                <?= $arr_section[2]->content; ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 nopad read-index3"><a href="<?= base_url(); ?>aboutus"><button id="readmore" class="btn readmore-btn"><?php echo $this->lang->line('readMore') ?></button></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coco7" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, -1500%, 0px);"><img src="<?= base_url(); ?>images/fly7.png" /></div>
            <div class="coco8" data-start="transform:translate3d(0px, 0px, 0px);" data-end="transform:translate3d(0px, -1400%, 0px);"><img src="<?= base_url(); ?>images/fly8.png" /></div>
            <div class="stay4 text-right"><img src="<?= base_url(); ?>images/stay4.png" /></div>
        </div>
    </section>
    <section class="index4">
        <div class="container-fluid section4">
            <div class="row">
                <div class="col-xs-12 col-sm-12 text-center">
                    <h2>
                        <?= $arr_section[3]->title; ?>
                    </h2>
                    <div class="line">
                        <hr />
                    </div>
                    <div class="col-xs-12 col-sm-8">
                        <div id="dragger-container" class="col-xs-12 col-sm-6 col-sm-offset-6 nopad coco-box">
                            <div id="comparison">
                                <figure>
                                    <div id="divisor"></div>
                                </figure>
                                <div id="dragger-wrap" class="dragger-wrap">
                                    <div class="standline"></div>
                                    <div class="drag1"><img src="<?= base_url(); ?>images/drag.png" /></div>
                                    <div class="drag2"><img src="<?= base_url(); ?>images/drag-end.png" /></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 coco-content1 text-right">
                                <div class="col-xs-8 col-sm-8 coco-content1-desc">
                                    <h4>
                                        <?= $arr_motion_section_item[0]->title; ?>
                                    </h4>
                                    <p>
                                        <?= $arr_motion_section_item[0]->content; ?>
                                    </p>
                                </div>
                                <div class="col-xs-4 col-sm-5 coco-content1-panel"><img src="<?= base_url(); ?>images/arrow1-rev.png" /></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 coco-content2 text-right">
                                <div class="col-xs-8 col-sm-8 coco-content2-desc">
                                    <h4>
                                        <?= $arr_motion_section_item[1]->title; ?>
                                    </h4>
                                    <p>
                                        <?= $arr_motion_section_item[1]->content; ?>
                                    </p>
                                </div>
                                <div class="col-xs-6 col-sm-6 coco-content2-panel"><img src="<?= base_url(); ?>images/arrow2-rev.png" /></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 coco-content3 text-right">
                                <div class="col-xs-8 col-sm-8 coco-content3-desc">
                                    <h4>
                                        <?= $arr_motion_section_item[2]->title; ?>
                                    </h4>
                                    <p>
                                        <?= $arr_motion_section_item[2]->content; ?>
                                    </p>
                                </div>
                                <div class="col-xs-6 col-sm-6 coco-content3-panel"><img src="<?= base_url(); ?>images/arrow3-rev.png" /></div>
                            </div>
                        </div>
                        <div class="col-xs-12 compare-content-mobile">
                            <div class="col-xs-12 compare-image-mobile"><img src="<?= base_url(); ?>images/comparison.png" /></div>
                            <div class="col-xs-12 col-sm-12 coco-content1 text-right">
                                <div class="col-xs-8 col-sm-8 coco-content1-desc">
                                    <h4>1</h4>
                                </div>
                                <div class="col-xs-5 col-sm-5 coco-content1-panel"><img src="<?= base_url(); ?>images/arrow1-rev.png" /></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 coco-content2 text-right">
                                <div class="col-xs-8 col-sm-8 coco-content2-desc">
                                    <h4>2</h4>
                                </div>
                                <div class="col-xs-6 col-sm-6 coco-content2-panel"><img src="<?= base_url(); ?>images/arrow2-rev.png" /></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 coco-content3 text-right">
                                <div class="col-xs-8 col-sm-8 coco-content3-desc">
                                    <h4>3</h4>
                                </div>
                                <div class="col-xs-6 col-sm-6 coco-content3-panel"><img src="<?= base_url(); ?>images/arrow3-rev.png" /></div>
                            </div>
                            <div class="col-xs-12 col-sm-12 shadow"><img src="<?= base_url(); ?>images/shadow.png" /></div>
                        </div>
                        <!--<div class="col-xs-12 text-left nopad comparison-text"><div class="col-xs-12 col-sm-12 nopad graypar"><ol><li>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</li><li>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</li><li>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.</li></ol></div></div>-->
                    </div>
                    <div class="col-xs-12 col-sm-4 section4-content">
                        <div class="col-xs-12 col-sm-12">
                            <h4>
                                <?= $arr_section[3]->subtitle; ?>
                            </h4>
                        </div>
                        <div class="col-xs-12 col-sm-12 line1">
                            <hr />
                        </div>
                        <div class="col-xs-12 col-sm-12 coconut">
                            <div class="col-xs-2 col-sm-2 v-center"><img src="<?= base_url(); ?>images/milk.png" /></div>
                            <!---->
                            <div class="col-xs-10 col-sm-10 text-left v-center">
                                <div class="col-xs-12 col-sm-12 nopad greenpar">
                                    <p>
                                        <?= $arr_detail_section_item[0]->title; ?>
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 nopad graypar">
                                    <p>
                                        <?= $arr_detail_section_item[0]->content; ?>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 line1">
                            <hr />
                        </div>
                        <div class="col-xs-12 col-sm-12 coconut">
                            <div class="col-xs-2 col-sm-2 v-center"><img src="<?= base_url(); ?>images/oil.png" /></div><!----><div class="col-xs-10 col-sm-10 text-left v-center">
                                <div class="col-xs-12 col-sm-12 nopad greenpar">
                                    <p>
                                        <?= $arr_detail_section_item[1]->title; ?>
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 nopad graypar">
                                    <p>
                                        <?= $arr_detail_section_item[1]->content; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 line1">
                            <hr />
                        </div>
                        <div class="col-xs-12 col-sm-12 coconut">
                            <div class="col-xs-2 col-sm-2 v-center"><img src="<?= base_url(); ?>images/jelly.png" /></div>
                            <!---->
                            <div class="col-xs-10 col-sm-10 text-left v-center">
                                <div class="col-xs-12 col-sm-12 nopad greenpar">
                                    <p>
                                        <?= $arr_detail_section_item[2]->title; ?>
                                    </p>
                                </div>
                                <div class="col-xs-12 col-sm-12 nopad graypar">
                                    <p>
                                        <?= $arr_detail_section_item[2]->content; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 line1">
                            <hr />
                        </div>
                        <div class="col-xs-12 col-sm-12 read-index4"><a href="<?= base_url(); ?>product"><button id="readmore" class="btn readmore-btn"><?php echo $this->lang->line('readMore') ?></button></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $this->load->view('footer');?>
    <script src="<?= base_url(); ?>plugin/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/skrollr.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>js/main.js"></script>
    <script src="<?= base_url(); ?>plugin/jqueryui/jquery-ui.min.js"></script>
    <script type="text/javascript">
    $(function() { init();
        click();
        drag(); });
    $(document).ready(function() { bounce(); });
    $(window).on('resize', function() { gainWidth(); });

    function bounce() { $('.coco1').addClass('animated bounceInUp');
        $('.coco2').addClass('animated bounceInUp');
        $('.coco3').addClass('animated bounceInUp');
        $('.coco4').addClass('animated bounceInUp');
        $('.coco5').addClass('animated bounceInUp');
        $('.coco6').addClass('animated bounceInUp');
        setInterval(function() { $('.coco1').removeClass('animated bounceInUp');
            $('.coco2').removeClass('animated bounceInUp');
            $('.coco3').removeClass('animated bounceInUp');
            $('.coco4').removeClass('animated bounceInUp');
            $('.coco5').removeClass('animated bounceInUp');
            $('.coco6').removeClass('animated bounceInUp'); }, 1200); }

    function init() { if ((window).innerWidth > 768) { skrollr.init({ forceHeight: false }); } }

    function drag() { $('#dragger-wrap').draggable({ axis: "x", containment: '#dragger-container', scroll: false, drag: function() { gainWidth(); }, }); }

    function click() { $('#readmore').click(function() {}); }

    function gainWidth() { var draggerPosition = $('#dragger-wrap').position(); var containerWidth = $('#dragger-container').width(); var widthNormal = (draggerPosition.left / containerWidth) * 100;
        width = widthNormal + '%';
        $('#divisor').css('width', width);
        motion(widthNormal); }

    function motion(widthNormal) { if (widthNormal < 29) { $('.coco-content1').fadeOut(300); } if (widthNormal >= 29) { $('.coco-content1').fadeIn(300); } if (widthNormal < 33) { $('.coco-content2').fadeOut(300); } if (widthNormal >= 33) { $('.coco-content2').fadeIn(300); } if (widthNormal < 30) { $('.coco-content3').fadeOut(300); } if (widthNormal >= 30) { $('.coco-content3').fadeIn(300); } }
    </script>
</body>

</html>