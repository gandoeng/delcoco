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
        <link rel="stylesheet" href="<?= base_url(); ?>plugin/owl/css/owl.carousel.css" />
        <link rel="stylesheet" href="<?= base_url(); ?>plugin/owl/css/owl.theme.css" />
    </head>
    <body>
        <section class="recipe1">
            <?php $this->load->view('menu');?>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 nopad">
                        <div class="owl-carousel owl-theme owl-slide">
                            <?php foreach ($arr_slideshow as $slideshow): ?>
                            <div class="item">
                                <div class="slider-image" style="background-image: url(<?=base_url();?>images/website/<?=$slideshow->image_name;?>);">
                                    <div class="wrapper-box-recipe-2">
                                        <div class="center-box center-block">
                                            <div class="wrapper-text-recipe-2 text-left">
                                                <h1><?= $slideshow->title; ?></h1>
                                                <p><?= $slideshow->content; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="recipe-stay-1"><img src="<?= base_url();?>images/recipe-slider-stay-1.png" /></div>
                        <div class="recipe-stay-2"><img src="<?= base_url();?>images/recipe-slider-stay-2.png" /></div>
                    </div>
                </div>
            </div>
        </section>
        <section class="recipe-detail-2">
            <div class="container-fluid recipe-section-2">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 title-top-pict">
                        <img src="<?= base_url(); ?>images/stay5.png" />
                        <h1><?= $recipe->name; ?></h1>
                        <div class="line4"><hr /></div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-6 recipe-detail-big-pict" style="background-image: url(<?=base_url();?>images/website/<?=$recipe->image_name;?>);">
                            <div class="col-xs-12 col-sm-12 nopad" style="background-image: url(<?=base_url();?>images/pattern3.png);"><div class="recipe-detail-pict-padding"></div></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 recipe-ing-wrap">
                            <div class="col-xs-12 col-sm-12 recipe-ing-border">
                                <h3>Ingredients:</h3>
                                <div class="line1"><hr /></div>
                                <?= $recipe->ingredients; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 detail-recipe-prep">
                        <h3><?php echo $this->lang->line('preparations') ?>:</h3>
                        <div class="line5"><hr /></div>
                        <?= $recipe->preparations; ?>
                    </div>
                    <div class="col-xs-12 col-sm-12 detail-recipe-msg">
                        <h3><?php echo $this->lang->line('leave_m') ?></h3>
                        <div class="line5"><hr /></div>
                        <div class="col-xs-12 col-sm-6 left-side group-pad">
                            <div class="form-group"><label for="name"><?php echo $this->lang->line('contact_name') ?></label><input type="text" class="form-control input-lg trp patobo" id="name" placeholder="<?php echo $this->lang->line('contact_nameP') ?>" /></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 right-side group-pad">
                            <div class="form-group"><label for="phn"><?php echo $this->lang->line('contact_phone') ?></label><input type="text" class="form-control input-lg trp patobo" id="phn" placeholder="<?php echo $this->lang->line('contact_phoneP') ?>" /></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 left-side group-pad">
                            <div class="form-group"><label for="email"><?php echo $this->lang->line('contact_email') ?></label><input type="text" class="form-control input-lg trp patobo" id="email" placeholder="<?php echo $this->lang->line('contact_email') ?>" /></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 right-side group-pad">
                            <div class="form-group"><label for="confirm"><?php echo $this->lang->line('contact_email_conf') ?></label><input type="text" class="form-control input-lg trp patobo" id="confirm" placeholder="<?php echo $this->lang->line('contact_email_confP') ?>" /></div>
                        </div>
                        <div class="col-xs-12 col-sm-12 nopad group-pad">
                            <div class="form-group"><label for="comment"><?php echo $this->lang->line('contact_message') ?></label><textarea class="form-control input-lg trp" rows="5" id="comment" placeholder="<?php echo $this->lang->line('contact_messageP') ?>"></textarea></div>
                        </div>
                        <div class="col-xs-12 col-sm-6 left-side group-pad">
                            <div class="form-group">
                                <label for="captcha">
                                    Captcha
                                    <div><?= $captcha['image'] ?></div>
                                </label>
                                <input type="text" class="form-control input-lg trp patobo" id="captcha" placeholder="Type the number" />
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 nopad"><button id="submit" class="submit-btn" onclick="submitEnquiry();"><?php echo $this->lang->line('contact_send') ?></button></div>
                    </div>
                </div>
                <div class="recipe-detail-stay-1"><img src="<?= base_url(); ?>images/recipe-detail-stay-1.png" /></div>
                <div class="recipe-detail-stay-2"><img src="<?= base_url(); ?>images/stay4.png" /></div>
            </div>
        </section>
        <section class="recipe-detail-3">
            <div class="container-fluid recipe-detail-section-3">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="col-xs-12 col-sm-12 title-top-pict"><img src="<?= base_url(); ?>images/stay5.png" /></div>
                        <div class="col-xs-12 col-sm-7 v-center">
                            <h1><?= $arr_section[1]->title; ?></h1>
                        </div>
                        <!---->
                        <div class="col-xs-12 col-sm-5 v-center searching-wrapper">
                            <input id="recipe-search" type="text" class="form-control find" name="find" placeholder="Find a recipe" value="" />
                            <button id="btn-search" class="btn search" onclick="search();"><img src="<?= base_url(); ?>images/loop.png" /></button>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12">
                        <?php foreach ($arr_related_recipe as $key =>
                        $related_recipe): ?>
                        <div class="col-xs-12 col-sm-4 recipe-list">
                            <div class="col-xs-12 col-sm-12 recipe-image-wrap"><div class="col-xs-12 col-sm-12 recipe-image" style="background-image: url(<?=base_url();?>images/website/<?=$related_recipe->image_name;?>);"></div></div>
                            <div class="col-xs-12 col-sm-12 recipe-content-wrap">
                                <div class="col-xs-12 col-sm-12 recipe-title">
                                    <h4><?= $related_recipe->name; ?></h4>
                                </div>
                                <div class="col-xs-12 col-sm-12 recipe-text">
                                    <p><?= $related_recipe->description; ?></p>
                                    <p></p>
                                </div>
                                <div class="col-xs-12 col-sm-12 line2"><hr /></div>
                                <div class="col-xs-12 col-sm-12 socmed-wrap">
                                    <div class="col-xs-5 col-sm-5 v-center nopad">
                                        <span class="fa-stack fa-lg recipe-socmed">
                                            <a onclick="fbShare($(this));" style="cursor: pointer;" data-name="<?= $recipe->name; ?>" data-image-name="<?= $recipe->image_name; ?>">
                                                <i class="fa fa-circle fa-stack-2x fb-circle"></i><i class="fa fa-facebook fa-stack-1x fa-inverse fb-icon"></i>
                                            </a>
                                        </span>
                                        <span class="fa-stack fa-lg recipe-socmed">
                                            <a onclick="javascript:window.open('https://twitter.com/share?url=<?= current_url(); ?>&text=<?= $related_recipe->name; ?>','mywindowtitle','width=500,height=445')" style="cursor: pointer;">
                                                <i class="fa fa-circle fa-stack-2x twit-circle"></i><i class="fa fa-twitter fa-stack-1x fa-inverse twit-icon"></i>
                                            </a>
                                        </span>
                                    </div>
                                    <!---->
                                    <div class="col-xs-7 col-sm-7 nopad v-center notif">
                                        <div class="love-wrap-related">
                                            <a href="#"><img class="love" src="<?= base_url(); ?>images/love.png" /></a>
                                            <h6><?= $related_recipe->likes; ?> Likes</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($key % 2 == 0): ?>
                        <div class="col-xs-12 hidden-sm hidden-desktop"></div>
                        <?php endif; ?><?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
        <?php $this->load->view('footer');?>
        <script src="<?= base_url(); ?>plugin/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/skrollr.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>js/main.js"></script>
        <script src="<?= base_url(); ?>plugin/jqueryui/jquery-ui.min.js"></script>
        <script src="<?= base_url(); ?>plugin/owl/js/owl.carousel.js"></script>
        <script src="<?= base_url(); ?>js/jquery.base64.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function () {
                slide();
                keypress();
                initFacebookSDK();
            });
            function fbShare(obj) {
                var name = obj.attr("data-name");
                var imageName = obj.attr("data-image-name");
                FB.ui({ method: "feed", link: "<?= base_url(); ?>", caption: name, picture: "<?= base_url(); ?>images/website/" + imageName }, function (response) {});
            }
            function initFacebookSDK() {
                window.fbAsyncInit = function () {
                    FB.init({ appId: "549649298546997", xfbml: true, version: "v2.6" });
                };
                (function (d, s, id) {
                    var js,
                        fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) {
                        return;
                    }
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js";
                    fjs.parentNode.insertBefore(js, fjs);
                })(document, "script", "facebook-jssdk");
            }
            function isEmail(email) {
                var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                return regex.test(email);
            }
            function keypress() {
                $("#recipe-search").keypress(function (e) {
                    if (e.which == 13) {
                        search(1);
                    }
                });
            }
            function reset() {
                $("#name").val("");
                $("#phn").val("");
                $("#email").val("");
                $("#confirm").val("");
                $("#comment").val("");
                $("#captcha").val("");
            }
            function search() {
                var query = $("#recipe-search").val() != "" ? $.base64("encode", $("#recipe-search").val()) : "";
                window.location.href = "<?= base_url(); ?>recipe/all/<?= $recipe->category_id; ?>/1/" + query + "/";
            }
            function slide() {
                var owl = $(".owl-slide");
                owl.owlCarousel({ autoPlay: true, itemsMobile: true, pagination: true, singleItem: true, paginationSpeed: 900 });
            }
            function submitEnquiry() {
                var name = $("#name").val();
                var phone = $("#phn").val();
                var email = $("#email").val();
                var confirm = $("#confirm").val();
                var message = $("#comment").val();
                var captcha = $("#captcha").val();
                var sessionCaptcha = "<?= $captcha['word'] ?>";
                if (name == "" || phone == "" || email == "" || confirm == "" || message == "" || captcha == "") {
                    alert("All field must be filled!");
                    return;
                }
                if (!isEmail(email || !isEmail(confirm))) {
                    alert("Invalid Email!");
                    return;
                }
                if (email != confirm) {
                    alert("Invalid Email!");
                    return;
                }
                if (captcha != sessionCaptcha) {
                    alert("Invalid Captcha!");
                    return;
                }
                $.ajax({
                    data: { name: name, phone: phone, email: email, message: message },
                    dataType: "JSON",
                    error: function () {
                        alert("Server Error.");
                    },
                    success: function (data) {
                        if (data.status == "success") {
                            $("#newsletter-email").val("");
                            alert("Email Sent.");
                        } else {
                            alert("Server Error.");
                        }
                    },
                    type: "POST",
                    url: "<?= base_url() ?>contactus/ajax_send_email/",
                });
            }
        </script>
    </body>
</html>
