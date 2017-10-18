<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Footer -->
<div class="footer" id="footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 social">
                    <p>
                        <label>Kênh thông tin từ chúng tôi:</label><br>
                        <a href="<?php echo $website->facebook; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="<?php echo $website->twitter; ?>"><i class="fa fa-twitter"></i></a>
                        <a href="<?php echo $website->google_plus; ?>"><i class="fa fa-google-plus"></i></a>
                    </p>
                </div>
                <div class="col-xs-12 col-md-8">
                    <div class="form-newsletter">
                        <label>
                            Đăng ký nhận email từ chúng tôi
                        </label>
                        <div class="form-group">
                            <input class="input-control" type="text" id="customer_email">
                            <button onclick="receiveEmail('<?php echo base_url(); ?>')"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container mid-footer">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="logo"><img src="<?php echo public_helper('upload/images/logo.png'); ?>" class="img-responsive" alt="Image"></div>
                <p><?php echo $website->slogan; ?></p>
                <p><i class="fa fa-phone"></i> Điện thoại : <a href="tel:01234 4321 32"><?php echo $website->phone; ?></a></p>
                <p><i class="fa fa-envelope-o"></i> Email : <a href="mailto:<?php echo $website->email; ?>"><?php echo $website->email; ?></a></p>
                <p><i class="fa fa-map-marker"></i> Address : <a href="#"><?php echo $website->address; ?></a></p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="title">Bài viết mới</div>
                <ul class="list-unstyled">
                    <?php foreach ($news as $item) { ?>
                        <li><a href="<?php echo base_url('tin-tuc/'.$item->id.'-'.create_slug($item->title)); ?>"><?php echo $item->title; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-2">
                <div class="title">Keyword</div>
                <ul class="list-unstyled">
                    <div class="tagcloud">
                        <?php echo $website->keyword; ?>
                    </div>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="title">Facebook</div>
                <div class="fb-page" data-href="https://www.facebook.com/Ehouse.hcmc/" data-small-header="false" data-adapt-container-width="true"
                data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="<?php echo $website->facebook; ?>" class="fb-xfbml-parse-ignore">
                    <a href="<?php echo $website->facebook; ?>"><?php echo $website->website_name; ?></a>
                </blockquote>
            </div>
            <script>
                (function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
        </div>
    </div>
</div>
</div>
    <!-- end Footer -->