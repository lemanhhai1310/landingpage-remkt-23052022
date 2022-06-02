<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Block dangky-->
<div class="home__blockDangky uk-overflow-hidden">
    <div class="uk-container uk-container-small">
        <div class="uk-grid uk-flex-between" uk-grid>
            <div class="uk-width-1-3@m">
                <div class="uk-section-small">
                    <div class="item__24">
                        <div class="item__22">
                            <h4 class="uk-h4 home__blockDangky__title">Đăng ký nhận tư vấn miễn phí</h4>
                        </div>
                        <div class="item__22">
                            <div class="item__12">
                                <input class="uk-input home__blockDangky__input" type="text" placeholder="Họ và tên">
                            </div>
                            <div class="item__12">
                                <input class="uk-input home__blockDangky__input" type="text" placeholder="Email">
                            </div>
                            <div class="item__12">
                                <input class="uk-input home__blockDangky__input" type="text" placeholder="Số điện thoại">
                            </div>
                            <div class="item__12">
                                <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                                    <select>
                                        <option value="">Tỉnh thành</option>
                                        <option value="1">Option 01</option>
                                        <option value="2">Option 02</option>
                                        <option value="3">Option 03</option>
                                        <option value="4">Option 04</option>
                                    </select>
                                    <button class="home__blockDangky__select uk-width-1-1 uk-button uk-button-default" type="button" tabindex="-1">
                                        <span></span>
                                        <span class="uk-position-center-right" uk-icon="icon: chevron-down"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item__24">
                        <button type="button" class="home__blockDangky__btn uk-button uk-button-default uk-border-pill uk-width-1-1"><span>ĐĂNG KÝ TƯ VẤN</span></button>
                    </div>
                </div>
            </div>
            <div class="uk-width-2-5@m uk-flex-first@m">
                <img class="home__blockDangky__bgImg" src="images/DSC_0035.png" alt="">
            </div>
        </div>
    </div>
</div>
<!--/Block dangky-->
<?php require "template-parts/layouts/footer.php"; ?>