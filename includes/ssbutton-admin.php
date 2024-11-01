<?php  
// Social Sharing Button admin php //

// ABSPATH Defined
if(! defined('ABSPATH')){
    exit('not valid');
}


// admin menu
add_action('admin_menu', 'ussb_admin_option');
function ussb_admin_option(){
    add_menu_page( 'Social Sharing Button', 'Social Share', 'manage_options', 'ultimate-social-share-buttons', 'ussb_option_callback', USSB_PLUGIN_URL. 'images/ssbutton.png', 30 );
}

// callback function
function ussb_option_callback(){ ?>

    <div class="ssbutton-option">
        <div class="container">
            <!-- form option -->
            <div class="ssbutton-form">
                <h2 class="title"><?php echo esc_html('Social Share Option', 'ultimate-social-share-buttons'); ?></h2>
                <!-- tabs -->
                <div class="ssb-tab">
                    <!-- tab items -->
                    <ul>
                        <li><a href="#icons-form"><?php echo esc_html('Social Icons', 'ultimate-social-share-buttons'); ?></a></li>
                        <li><a href="#setting-form"><?php echo esc_html('settings', 'ultimate-social-share-buttons'); ?></a></li>
                    </ul>
                    <!-- icons form -->
                    <div id="icons-form">
                        <form action="options.php" method="POST">
                            <?php wp_nonce_field('update-options'); ?>
                            <label style="margin: 0;"><?php echo esc_html('Which Icons you want to show?', 'ultimate-social-share-buttons'); ?></label>
                            <small><?php echo esc_html('Default: not set', 'ultimate-social-share-buttons'); ?></small>
                            <!-- facebook -->
                            <label for="ssb-facebook" style="margin-right: 26px;"><?php echo esc_html('Facebook', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-facebook" id="ssb-facebook" <?php if(get_option('ssb-facebook')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- twitter -->
                            <label for="ssb-twitter" style="margin-right: 42px;"><?php echo esc_html('Twitter', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-twitter" id="ssb-twitter" <?php if(get_option('ssb-twitter')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- instagram -->
                            <label for="ssb-instagram" style="margin-right: 20px;"><?php echo esc_html('Instagram', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-instagram" id="ssb-instagram" <?php if(get_option('ssb-instagram')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- Linkedin -->
                            <label for="ssb-linkedin" style="margin-right: 32px;"><?php echo esc_html('LinkedIn', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-linkedin" id="ssb-linkedin" <?php if(get_option('ssb-linkedin')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- WhatsApp -->
                            <label for="ssb-whatsapp" style="margin-right: 18px;"><?php echo esc_html('WhatsApp', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-whatsapp" id="ssb-whatsapp" <?php if(get_option('ssb-whatsapp')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- Messenger -->
                            <label for="ssb-messenger" style="margin-right: 17px;"><?php echo esc_html('Messenger', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-messenger" id="ssb-messenger" <?php if(get_option('ssb-messenger')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- Fb username -->
                            <div class="messenger-user">
                                <label for="ssb-fbuser" style="margin-right: 17px;"><?php echo esc_html('Facebook Username for Messenger', 'ultimate-social-share-buttons'); ?></label>
                                <input type="text" name="ssb-fbuser" id="ssb-fbuser" placeholder="only facebook username here" value="<?php print esc_attr(get_option('ssb-fbuser')); ?>"  style="margin-bottom:5px;">
                            </div>
                            <!-- Medium -->
                            <label for="ssb-medium" style="margin-right: 34px;"><?php echo esc_html('Medium', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-medium" id="ssb-medium" <?php if(get_option('ssb-medium')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- Reddit -->
                            <label for="ssb-reddit" style="margin-right: 47px;"><?php echo esc_html('Reddit', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-reddit" id="ssb-reddit" <?php if(get_option('ssb-reddit')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- Email -->
                            <label for="ssb-email" style="margin-right: 54px;"><?php echo esc_html('Email', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-email" id="ssb-email" <?php if(get_option('ssb-email')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- Viber -->
                            <label for="ssb-viber" style="margin-right: 54px;"><?php echo esc_html('Viber', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-viber" id="ssb-viber" <?php if(get_option('ssb-viber')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- Skype -->
                            <label for="ssb-skype" style="margin-right: 49px;"><?php echo esc_html('Skype', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-skype" id="ssb-skype" <?php if(get_option('ssb-skype')){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <!-- Telegram -->
                            <label for="ssb-telegram" style="margin-right: 26px;"><?php echo esc_html('Telegram', 'ultimate-social-share-buttons'); ?></label>
                            <input type="checkbox" name="ssb-telegram" id="ssb-telegram" <?php if(get_option('ssb-telegram')){echo esc_attr('checked="checked"');} ?> >
                            <br>

                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="page_options" value="ssb-facebook, ssb-twitter, ssb-instagram, ssb-linkedin, ssb-whatsapp, ssb-messenger, ssb-fbuser, ssb-medium, ssb-reddit, ssb-email, ssb-viber, ssb-skype, ssb-telegram">
                            <input type="submit" value="save changes">
                        </form>
                        <!-- script for messenger username -->
                        <script>
                            jQuery(document).ready(function(){
                                // input hide
                                jQuery('.messenger-user').hide();
                                // input toggle
                                jQuery('#ssb-messenger').click(function(){
                                    jQuery('.messenger-user').toggle('.ssb_show');
                                });
                                // condition
                                if(jQuery('#ssb-messenger').is(':checked')){
                                    jQuery('.messenger-user').show();
                                }else{
                                    jQuery('.messenger-user').hide();
                                }
                            });
                        </script>
                    </div>
                    <!-- settings form -->
                    <div id="setting-form">
                        <form action="options.php" method="POST">
                            <?php wp_nonce_field('update-options'); ?>
                            <!-- icons before/after -->
                            <label><?php echo esc_html('Icons Before or After of Content', 'ultimate-social-share-buttons'); ?></label>
                            <small style="display:block;"><?php echo esc_html('default: not set', 'ultimate-social-share-buttons'); ?></small>
                            <label class="radio-label" for="icon-before"><?php echo esc_html('Before', 'ultimate-social-share-buttons'); ?></label>
                            <input type="radio" name="icon-before" id="icon-before" value="before" <?php if(get_option('icon-before') == 'before'){echo esc_attr('checked="checked"');} ?> >
                            <label class="radio-label" for="icon-after"><?php echo esc_html('After', 'ultimate-social-share-buttons'); ?></label>
                            <input type="radio" name="icon-before" id="icon-after" value="after" <?php if(get_option('icon-before') == 'after'){echo esc_attr('checked="checked"');} ?> >
                            <!-- icons blog page -->
                            <label style="margin-top:15px;"><?php echo esc_html('Do you want show icons in blog page?', 'ultimate-social-share-buttons'); ?></label>
                            <small style="display:block;"><?php echo esc_html('default: not', 'ultimate-social-share-buttons'); ?></small>
                            <label class="radio-label" for="icon-bpagey"><?php echo esc_html('Yes', 'ultimate-social-share-buttons'); ?></label>
                            <input type="radio" name="icon-bpagey" id="icon-bpagey" value="yes" <?php if(get_option('icon-bpagey') == 'yes'){echo esc_attr('checked="checked"');} ?> >
                            <label class="radio-label" for="icon-bpagen"><?php echo esc_html('Not', 'ultimate-social-share-buttons'); ?></label>
                            <input type="radio" name="icon-bpagey" id="icon-bpagen" value="not" <?php if(get_option('icon-bpagey') == 'not'){echo esc_attr('checked="checked"');} ?> >
                            <!-- for excerpt content -->
                            <label style="margin-top:15px;"><?php echo esc_html('Do you want show icons in excerpt content?', 'ultimate-social-share-buttons'); ?></label>
                            <small style="display:block;"><?php echo esc_html('default: not', 'ultimate-social-share-buttons'); ?></small>
                            <label class="radio-label" for="icon-inexcerpt"><?php echo esc_html('Yes', 'ultimate-social-share-buttons'); ?></label>
                            <input type="radio" name="icon-inexcerpt" id="icon-inexcerpt" value="yes" <?php if(get_option('icon-inexcerpt') == 'yes'){echo esc_attr('checked="checked"');} ?> >
                            <label class="radio-label" for="icon-inexcerptnot"><?php echo esc_html('Not', 'ultimate-social-share-buttons'); ?></label>
                            <input type="radio" name="icon-inexcerpt" id="icon-inexcerptnot" value="not" <?php if(get_option('icon-inexcerpt') == 'not'){echo esc_attr('checked="checked"');} ?> >
                            <!-- icons style -->
                            <label style="margin-top:15px;"><?php echo esc_html('Do you want style of icons?', 'ultimate-social-share-buttons'); ?></label>
                            <small style="display:block;"><?php echo esc_html('default: not', 'ultimate-social-share-buttons'); ?></small>
                            <label class="radio-label" for="icon-style"><?php echo esc_html('Yes', 'ultimate-social-share-buttons'); ?></label>
                            <input type="radio" name="icon-style" id="icon-style" value="yes" <?php if(get_option('icon-style') == 'yes'){echo esc_attr('checked="checked"');} ?> >
                            <label class="radio-label" for="icon-stylenot"><?php echo esc_html('Not', 'ultimate-social-share-buttons'); ?></label>
                            <input type="radio" name="icon-style" id="icon-stylenot" value="not" <?php if(get_option('icon-style') == 'not'){echo esc_attr('checked="checked"');} ?> >
                            <br>
                            <div class="ssbicon-style">
                                <!-- bg color -->
                                <label for="ssbbg-color" style="margin-top: 10px;"><?php echo esc_html('Icons Background Color', 'ultimate-social-share-buttons'); ?></label>
                                <small><?php echo esc_html('default: #000000', 'ultimate-social-share-buttons'); ?></small>
                                <input type="color" name="ssbbg-color" id="ssbbg-color" value="<?php print esc_attr(get_option('ssbbg-color')); ?>">
                                <!-- hover color -->
                                <label for="ssbhover-color" style="margin-top: 10px;"><?php echo esc_html('Icons Hover Color', 'ultimate-social-share-buttons'); ?></label>
                                <small><?php echo esc_html('default: #000000', 'ultimate-social-share-buttons'); ?></small>
                                <input type="color"  name="ssbhover-color"  id="ssbhover-color" value="<?php print esc_attr(get_option('ssbhover-color')); ?>">
                                <!-- icons round/corner -->
                                <label for="ssbhover-color" style="margin-top: 10px;"><?php echo esc_html('Background Color Round or Corner', 'ultimate-social-share-buttons'); ?></label>
                                <small><?php echo esc_html('default: corner', 'ultimate-social-share-buttons'); ?></small>
                                <select name="ssbicon-roundcorner" id="ssbicon-roundcorner" class="mb-0">
                                    <option value="corner" <?php if(get_option('ssbicon-roundcorner') == 'corner'){echo esc_attr('selected="selected"');} ?>><?php echo esc_html('Corner', 'ultimate-social-share-buttons'); ?></option>
                                    <option value="round" <?php if(get_option('ssbicon-roundcorner') == 'round'){echo esc_attr('selected="selected"');} ?> ><?php echo esc_html('Round', 'ultimate-social-share-buttons'); ?></option>
                                </select>
                            </div>

                            <input type="hidden" name="action" value="update">
                            <input type="hidden" name="page_options" value="icon-before, icon-bpagey, icon-inexcerpt, icon-style, ssbbg-color, ssbhover-color, ssbicon-roundcorner">
                            <input type="submit" value="save changes" class="mt-15">
                        </form>
                        <!-- script for icons style -->
                        <script>
                            jQuery(document).ready(function(){
                                // input hide
                                jQuery('.ssbicon-style').hide();
                                // input toggle
                                jQuery('#icon-style').click(function(){
                                    jQuery('.ssbicon-style').show(500);
                                });
                                jQuery('#icon-stylenot').click(function(){
                                    jQuery('.ssbicon-style').hide(500);
                                });
                                // condition
                                if(jQuery('#icon-style').is(':checked')){
                                    jQuery('.ssbicon-style').show();
                                }else{
                                    jQuery('.ssbicon-style').hide();
                                }
                            });
                        </script>
                    </div>
                </div>
            </div>
            <!-- author details -->
            <div class="ssbutton-author">
                <h2 class="title"><?php echo esc_html('Author', 'ultimate-social-share-buttons'); ?></h2>
                <div class="author-img">
                    <img src="<?php echo esc_url(USSB_PLUGIN_URL . 'images/habibcoder.jpg'); ?>" alt="HabibCoder">
                </div>
                <h4 class="author-name"> <?php esc_html_e('HabibCoder', 'ultimate-social-share-buttons'); ?> </h4>
                <div class="author-description">
                    <p><?php esc_html_e('I\'m ', 'ultimate-social-share-buttons'); ?><a href="<?php echo esc_url('http://habibcoder.com'); ?>" target="_blank"><?php esc_html_e('Habibur Rahman', 'ultimate-social-share-buttons') ?></a> <?php esc_html_e('and a Professional Web Developer and Web Designer. For the last some years, I\'m working in this field with national and international clients. I have done many more projects with client satisfaction.', 'ultimate-social-share-buttons'); ?><br>
                    <?php esc_html_e('This is an open-source WordPress Plugin. If you want to support me, You can', 'ultimate-social-share-buttons'); ?> <b><?php esc_html_e('click on the Buy Me a Coffe Button', 'ultimate-social-share-buttons'); ?></b>. <br> <?php esc_html_e('Thank You !.', 'ultimate-social-share-buttons'); ?> </p>
                </div>
                <div class="donate-btn">
                    <a href="<?php echo esc_url('https://www.buymeacoffee.com/habibcoder1'); ?>" target="_blank">
                    <h4><span>🍦</span><?php esc_html_e('Buy Me A Coffee', 'ultimate-social-share-buttons'); ?></h4>
                    </a>
                </div>
                <h3 class="social-title"> 
                    <?php esc_html_e('Follow Me', 'ultimate-social-share-buttons'); ?>
                </h3>
                <div class="social-icons">
                    <a class="facebook" title="Facebook" href="<?php echo esc_url('http://facebook.com/habibcoder1'); ?>" target="_blank"><img src="<?php echo esc_url( USSB_PLUGIN_URL . 'images/ssb-facebook.png'); ?>" alt="facebook"></a>
                    <a class="linkedin" title="LinkedIn" href="<?php echo esc_url('http://linkedin.com/in/habibcoder'); ?>" target="_blank"><img src="<?php echo esc_url(USSB_PLUGIN_URL . 'images/ssb-linkedin.png'); ?>" alt="LinkedIn"></a>
                    <a class="instagram" title="Instagram" href="<?php echo esc_url('http://instagram.com/habibcoder'); ?>" target="_blank"><img src="<?php echo esc_url(USSB_PLUGIN_URL . 'images/ssb-instagram.png'); ?>" alt="instagram"></a>
                    <a class="website" title="Website" href="<?php echo esc_url('http://habibcoder.com'); ?>" target="_blank"><img src="<?php echo esc_url(USSB_PLUGIN_URL . 'images/website.png'); ?>" alt="HabibCoder"></a>
                </div>
                <div class="thank-you">
                    <span>♥</span>
                    <h5><?php esc_html_e('Thank You', 'ultimate-social-share-buttons'); ?></h5>
                    <span>♥</span>
                </div>
            </div>
        </div>
    </div>

<?php 
}