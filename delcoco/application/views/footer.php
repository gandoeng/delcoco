<section class="footer">
    <div class="container-fluid footer-section">
        <div class="row row-footer">
            <div class="col-xs-12 col-sm-12 text-center">
                <div class="col-xs-6 col-sm-4 text-left footer-address">
                    <p>
                        <?= $setting->company_name; ?>
                    </p>
                    <?= $setting->company_address; ?>
                </div>
                <div class="col-xs-6 col-sm-4 text-left">
                    <div class="col-xs-12 col-sm-12 nopad">
                        <div class="col-xs-12 col-sm-12 nopad">
                            <p><?php echo $this->lang->line('footer_contact') ?><p>
                        </div>
                        <div class="col-xs-12 col-sm-12 nopad line-footer">
                            <hr />
                        </div>
                        <div class="col-xs-12 col-sm-12 nopad">
                            <h6><?php echo $this->lang->line('footer_phone') ?> :
                                <?= $setting->company_phone; ?>
                            </h6>
                            <h6><?php echo $this->lang->line('footer_email') ?> :
                                <?= $setting->company_email; ?>
                            </h6>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 nopad news">
                        <div class="col-xs-12 col-sm-12 nopad">
                            <p><?php echo $this->lang->line('footer_newsletter') ?><p>
                        </div>
                        <div class="col-xs-12 col-sm-12 nopad line-footer">
                            <hr />
                        </div>
                        <div class="col-xs-12 col-sm-12 nopad news-fill">
                            <div class="col-xs-12 col-sm-5 nopad"><input type="text" id="newsletter-email" class="form-control email" name="email" placeholder="Email"><br></div>
                            <div class="col-xs-12 col-sm-3 submit-box"><button id="submit" class="btn submit" onclick="submitNewsletter();" ;><?php echo $this->lang->line('submit') ?></button></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 text-left footer-margin">
                    <div class="col-xs-12 col-sm-12 nopad">
                        <div class="col-xs-12 col-sm-12 nopad">
                            <p><?php echo $this->lang->line('about_usB') ?><p>
                        </div>
                        <div class="col-xs-12 col-sm-12 nopad line-footer">
                            <hr />
                        </div>
                        <div class="col-xs-12 col-sm-12 nopad">
                            <h6><a href="<?= base_url();?>aboutus"><?php echo $this->lang->line('about_us') ?></a></h6>
                            <h6><a href="<?= base_url();?>recipe"><?php echo $this->lang->line('recipes') ?></a></h6>
                            <h6><a href="<?= base_url();?>product"><?php echo $this->lang->line('products') ?></a></h6>
                            <h6><a href="<?= base_url();?>faq"><?php echo $this->lang->line('FAQ') ?></a></h6>
                            <h6><a href="<?= base_url();?>career"><?php echo $this->lang->line('careers') ?></a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-2 text-left footer-margin">
                    <div class="col-xs-12 col-sm-12 nopad">
                        <div class="col-xs-12 col-sm-12 nopad">
                            <p><?php echo $this->lang->line('social') ?><p>
                        </div>
                        <div class="col-xs-12 col-sm-12 nopad line-footer">
                            <hr />
                        </div>
                        <div class="col-xs-12 col-sm-12 nopad">
                            <div class="col-xs-12 col-sm-12 nopad fb">
                                <?php if ($setting->setting__social_media_facebook_link != ''): ?><a href="<?= $setting->setting__social_media_facebook_link; ?>" target="_blank">
                                    <div class="fb-box text-center"><i class="fa fa-facebook v-center fb-icon"></i></div>
                                    <div class="fb-text">
                                        <h6>Facebook</h6>
                                    </div>
                                </a>
                                <?php endif; ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 nopad twit">
                                <?php if ($setting->setting__social_media_twitter_link != ''): ?><a href="<?= $setting->setting__social_media_twitter_link; ?>" target="_blank">
                                    <div class="twit-box text-center"><i class="fa fa-twitter v-center twit-icon"></i></div>
                                    <div class="twit-text">
                                        <h6>Twitter</h6>
                                    </div>
                                </a>
                                <?php endif; ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 nopad yt">
                                <?php if ($setting->setting__social_media_youtube_link != ''): ?><a href="<?= $setting->setting__social_media_youtube_link; ?>" target="_blank">
                                    <div class="yt-box text-center"><i class="fa fa-youtube-play v-center yt-icon"></i></div>
                                    <div class="yt-text">
                                        <h6>Youtube</h6>
                                    </div>
                                </a>
                                <?php endif; ?>
                            </div>
                            <div class="col-xs-12 col-sm-12 nopad ig">
                                <?php if ($setting->setting__social_media_instagram_link != ''): ?><a href="<?= $setting->setting__social_media_instagram_link; ?>" target="_blank">
                                    <div class="ig-box text-center"><i class="fa fa-instagram v-center ig-icon"></i></div>
                                    <div class="ig-text">
                                        <h6>Instagram</h6>
                                    </div>
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="copyright">
    <div class="container-fluid section-copyright">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="col-xs-6 col-sm-6 text-left">
                    <h6>
                        <?= $setting->system_copyright; ?>
                        <?= $setting->system_company_name; ?>
                    </h6>
                </div>
                <div class="col-xs-6 col-sm-6 text-right footer-label">
                    <h6>Imagined by
                        <?= $setting->system_vendor_name; ?>
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
$(function() { newsletterReset(); });

function newsletterReset() { $('#newsletter-email').val(''); }

function submitNewsletter() { var email = $('#newsletter-email').val(); if (email == '' || !isEmail(email)) { alert('Server Error'); return; } $.ajax({ data: { email: email, }, dataType: 'JSON', error: function() { alert('server Error.'); }, success: function(data) { if (data.status == 'success') { $('#newsletter-email').val('');
                alert('Email Subscribed.'); } else { alert('Server Error.'); } }, type: 'POST', url: '<?= base_url() ?>main/ajax_add_subscribe/' }); }
</script>