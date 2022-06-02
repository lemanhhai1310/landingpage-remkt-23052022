<?php $data["title"] = "Trang chủ"; ?>
<?php $body = '' ?>
<?php require "template-parts/layouts/header.php"; ?>

<!--Huongdan-->
<div class="uk-section-small home__blockHuongdan uk-height-medium">
    <div class="uk-container">

    </div>
</div>
<!--/Huongdan-->

<!--Nganhhot-->
<div class="uk-section-small home__blockNganhhot">
    <div class="home__blockNganhhot__circleTop"></div>
    <div class="home__blockNganhhot__circleBottom"></div>
    <div class="uk-position-relative uk-width-1-1">
        <div class="uk-container">
            <div class="item__65">
                <h2 class="uk-h2 uk-text-center home__title">Những ngành học HOT xét học bạ</h2>
            </div>
            <div class="item__65 uk-text-center">
                <div class="uk-grid uk-child-width-1-3@m" uk-grid>
                    <div class="uk-width-1-2@m">
                        <div class="item__16">
                            <div class="home__blockNganhhot__txt">NGÀNH QUẢN TRỊ KINH DOANH</div>
                        </div>
                        <div class="item__16">
                            <div class="item__18 uk-text-center">
                                <div class="home__blockNganhhot__boxImg uk-cover-container uk-border-circle uk-flex-inline" data-src="images/nganhhot/1x/qtkd.png" uk-img>
                                    <canvas width="162" height="162"></canvas>
                                </div>
                            </div>
                            <div class="item__18">
                                <ul class="uk-list home__blockNganhhot__list">
                                    <li>Digital Marketing</li>
                                    <li>Kinh doanh quốc tế</li>
                                    <li>Quản trị khách sạn</li>
                                    <li>Quản trị dịch vụ du lịch & lữ hành</li>
                                    <li>Quản trị truyền thông đa phương tiện</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-1-2@m">
                        <div class="item__16">
                            <div class="home__blockNganhhot__txt">NGÀNH CÔNG NGHỆ THÔNG TIN</div>
                        </div>
                        <div class="item__16">
                            <div class="item__18 uk-text-center">
                                <div class="home__blockNganhhot__boxImg uk-cover-container uk-border-circle uk-flex-inline" data-src="images/nganhhot/1x/cntt.png" uk-img>
                                    <canvas width="162" height="162"></canvas>
                                </div>
                            </div>
                            <div class="item__18">
                                <ul class="uk-list home__blockNganhhot__list">
                                    <li>Kỹ thuật phần mềm</li>
                                    <li>Hệ thống thông tin</li>
                                    <li>Trí tuệ nhân tạo</li>
                                    <li>An toàn thông tin</li>
                                    <li>IoT</li>
                                    <li>Hệ thống Ô tô và điều khiển (dự kiến)</li>
                                    <li>Xử lý dịch vụ số (dự kiến)</li>
                                    <li>Thiết kế Mỹ thuật số</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="item__16">
                            <div class="home__blockNganhhot__txt">NGÀNH NGÔN NGỮ ANH </div>
                        </div>
                        <div class="item__16">
                            <div class="item__18 uk-text-center">
                                <div class="home__blockNganhhot__boxImg uk-cover-container uk-border-circle uk-flex-inline" data-src="images/nganhhot/1x/uk.png" uk-img>
                                    <canvas width="162" height="162"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="item__16">
                            <div class="home__blockNganhhot__txt">NGÀNH NGÔN NGỮ NHẬT</div>
                        </div>
                        <div class="item__16">
                            <div class="item__18 uk-text-center">
                                <div class="home__blockNganhhot__boxImg uk-cover-container uk-border-circle uk-flex-inline" data-src="images/nganhhot/1x/jp.png" uk-img>
                                    <canvas width="162" height="162"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="item__16">
                            <div class="home__blockNganhhot__txt">NGÀNH NGÔN NGỮ HÀN QUỐC</div>
                        </div>
                        <div class="item__16">
                            <div class="item__18 uk-text-center">
                                <div class="home__blockNganhhot__boxImg uk-cover-container uk-border-circle uk-flex-inline" data-src="images/nganhhot/1x/korea.png" uk-img>
                                    <canvas width="162" height="162"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Nganhhot-->

<!--Review-->
<div class="uk-section-xsmall home__blockReview uk-padding-remove-bottom uk-light">
    <div class="uk-container uk-container-small">
        <div class="item__42">
            <h2 class="uk-h2 uk-text-center home__title">Review về ĐH FPT </h2>
        </div>
        <div class="item__42">
            <div class="uk-grid uk-flex-center" uk-grid>
                <div class="uk-width-4-5@m">
                    <div class="uk-slider-container-offset" uk-slider>

                        <div class="uk-position-relative">

                            <div class="uk-slider-container uk-light">
                                <ul class="uk-slider-items uk-child-width-1-1">
                                    <?php for ($i=1;$i<=4;$i++): ?>
                                    <li>
                                        <div class="home__blockReview__card uk-border-rounded uk-card uk-card-body uk-card-default">
                                            <div class="uk-grid uk-grid-small" uk-grid>
                                                <div class="uk-width-auto@s uk-text-center">
                                                    <div class="uk-cover-container uk-border-circle uk-flex-inline">
                                                        <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover="">
                                                        <canvas width="167" height="167"></canvas>
                                                    </div>
                                                </div>
                                                <div class="uk-width-expand">
                                                    <div class="item__17">
                                                        <div class="home__blockReview__txt1">“Đại học FPT như một bước đệm lớn vậy. Trường có chương trình đào tạo rất tốt, chất lượng và mang tính thực tiễn, không bị đè nặng bởi các môn đại cương. Bên cạnh đó là cơ sở vật chất của trường rất tốt, hơn hẳn nhiều trường đại học khác, trường lại có nhiều hoạt động tốt cho sinh viên, rất phù hợp để mình có thể cải thiện những kỹ năng bản thân. Và đặc biệt là mình bị thu hút bởi những cơ hội việc làm và thực tập cho sinh viên của trường.”</div>
                                                    </div>
                                                    <div class="item__17">
                                                        <div class="home__blockReview__txt2">Nguyễn Sỹ Hoan - cựu học sinh trường THPT chuyên Nguyễn Du, Đắk Lắk</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php endfor; ?>
                                </ul>
                            </div>

                            <div class="uk-hidden@s uk-light">
                                <a class="uk-position-center-left uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                            <div class="uk-visible@s">
                                <a class="uk-position-center-left-out uk-position-small" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                                <a class="uk-position-center-right-out uk-position-small" href="#" uk-slidenav-next uk-slider-item="next"></a>
                            </div>

                        </div>

                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Review-->

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