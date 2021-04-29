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
    <section class="index1">
      <?php $this->load->view('menu');?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <div class="wrapper-box">
              <div class="center-box text-center center-block">
                <div class="wrapper-text text-center">
                  <h1><?= $arr_section[0]->title; ?></h1>
                  <p><?= $arr_section[0]->subtitle; ?></p>
                  <button id="readmore" class="btn readmore-btn"><?php echo $this->lang->line('readMore') ?></button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="coco-about-1" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 1300%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);">
          <img src="<?= base_url(); ?>images/fly-about-1.png" />
        </div>
        <div class="coco-about-2" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 500%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);">
          <img src="<?= base_url(); ?>images/fly-about-2.png" />
        </div>
        <div class="coco-about-3" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 700%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);">
          <img src="<?= base_url(); ?>images/fly-about-3.png" />
        </div>
        <div class="coco-about-4" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 900%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);">
          <img src="<?= base_url(); ?>images/fly-about-4.png" />
        </div>
        <div class="coco-about-5" data-start="transform:translate3d(0px, 0px, 0px);" data-100-end="transform:translate3d(0px, 1900%, 0px);" data-end="transform:translate3d(0px, 200%, 0px);">
          <img src="<?= base_url(); ?>images/fly-about-5.png" />
        </div>
        <div class="stay1 text-left"><img src="<?= base_url(); ?>images/stay1.png" /></div>
        <div class="stay2 text-right"><img src="<?= base_url(); ?>images/stay2.png" /></div>
        <div class="sd"><img src="<?= base_url(); ?>images/scroll.png" /></div>
      </div>
    </section>
    <section id="about-us" class="about2">
      <div class="container-fluid sec-about-2">
        <div class="row">
          <div class="col-xs-12 col-sm-12 about2-content1">
            <img src="<?= base_url(); ?>images/stay5.png" />
            <h1><?= $arr_section[1]->title; ?></h1>
            <h4><?= $arr_section[1]->subtitle; ?></h4>
            <div class="col-xs-12 col-sm-12 nopad about2-pict" style="background-image: url(<?=base_url();?>images/website/<?=$arr_section[1]->image_name;?>);">
              <div class="col-xs-12 col-sm-12 nopad about2-pattern" style="background-image: url(<?=base_url();?>images/pattern2.png);"><div class="padding-landscape"></div></div>
            </div>
            <div><?= $arr_section[1]->content; ?></div>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12">
            <div class="col-xs-12 col-sm-7 v-center about2-content2">
              <img src="<?= base_url(); ?>images/stay5.png" />
              <h4><?= $arr_section[2]->title; ?></h4>
              <div><?= $arr_section[2]->content; ?></div>
            </div><!----><div class="col-xs-12 col-sm-5 v-center padding-pict-about2">
              <div class="col-xs-12 col-sm-12 nopad about2-pict2" style="background-image: url(<?=base_url();?>images/website/<?=$arr_section[2]->image_name;?>);">
                <div class="col-xs-12 col-sm-12 nopad about2-pattern" style="background-image: url(<?=base_url();?>images/pattern1.png);"><div class="padding-portrait"></div></div>
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
      $(function () {
        init();
        click();
      });
      $(document).ready(function () {
        bounce();
      });
      $(window).on("resize", function () {
        gainWidth();
      });
      function bounce() {
        $(".coco-about-1").addClass("animated bounceInUp");
        $(".coco-about-2").addClass("animated bounceInUp");
        $(".coco-about-3").addClass("animated bounceInUp");
        $(".coco-about-4").addClass("animated bounceInUp");
        $(".coco-about-5").addClass("animated bounceInUp");
        setInterval(function () {
          $(".coco-about-1").removeClass("animated bounceInUp");
          $(".coco-about-2").removeClass("animated bounceInUp");
          $(".coco-about-3").removeClass("animated bounceInUp");
          $(".coco-about-4").removeClass("animated bounceInUp");
          $(".coco-about-5").removeClass("animated bounceInUp");
        }, 1200);
      }
      function click() {
        $("#readmore").click(function () {
          $("html, body").animate({ scrollTop: $("#about-us").offset().top + 50 }, 1000);
        });
      }
      function init() {
        if (window.innerWidth > 768) {
          skrollr.init({ forceHeight: false });
        }
      }
    </script>
  </body>
</html>
