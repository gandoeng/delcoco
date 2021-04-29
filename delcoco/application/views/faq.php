<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php include 'favicon.php' ?>
        <title>Delcoco</title>
        <script src="<?= base_url(); ?>js/jquery-1.12.0.min.js"></script>
        <link rel="stylesheet" href="<?= base_url(); ?>plugin/bootstrap/css/bootstrap.min.css" />
        <link href="<?= base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>css/style_menu.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>css/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= base_url(); ?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <section class="faq1">
            <?php $this->load->view('menu');?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 nopad faq-pict" style="background-image: url(<?=base_url();?>images/image-about-2.jpg);"><div class="col-xs-12 col-sm-12 nopad faq-fill"></div></div>
                </div>
                <div class="faq-stay-1"><img src="<?= base_url(); ?>images/faq-stay-1.png" /></div>
                <div class="faq-stay-2"><img src="<?= base_url(); ?>images/faq-stay-2.png" /></div>
            </div>
        </section>
        <section class="faq2">
            <div class="container-fluid sec-faq-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-12">
                            <div class="title-top-pict"><img src="<?= base_url(); ?>images/stay5.png" /></div>
                            <h1><?= $arr_section[0]->title; ?></h1>
                            <p><?= $arr_section[0]->subtitle; ?></p>
                        </div>
                        <div class="col-xs-12 col-sm-12 faq-panel-wrap">
                            <div class="panel-group" id="accordion">
                                <?php foreach ($arr_faq as $key =>
                                $faq): ?><?php $count = $key + 1; ?>
                                <div class="panel panel-default faq-panel-bar">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        <div class="panel-heading row faq-panel-head" onclick="putar('#pict1');">
                                            <div class="col-xs-9 col-sm-9 v-center subtitle">
                                                <h4>
                                                    <?= $count; ?>.
                                                    <?= $faq->question; ?>
                                                </h4>
                                            </div>
                                            <!---->
                                            <div class="col-xs-3 col-sm-3 text-right v-center faq-panel-pict"><img src="images/faq-toggle.png" class="rot" id="pict1" /></div>
                                        </div>
                                    </a>
                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="panel-body faq-panel-content">
                                            <div class="col-xs-12 col-sm-12 faq-panel-par"><?= $faq->answer; ?></div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 nopad line6"><hr /></div>
                                </div>
                                <?php endforeach; ?>
                            </div>
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
            function putar(id) {
                $(".rot").css("transform", "");
                if ($(id).hasClass("rotate")) {
                    $(id).css("transform", "");
                    $(id).removeClass("rotate");
                } else {
                    $(id).css("transform", "rotate(45deg)");
                    $(".rot").removeClass("rotate");
                    $(id).addClass("rotate");
                }
            }
        </script>
    </body>
</html>
