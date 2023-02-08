<?php get_header(); ?>
<section class="contact contactForm7">
    <div class="container">
        <h1 class="c-heading-archive">Form liên hệ sử dụng plugin Contact Form 7</h1>
        <!-- <div class="contact-form">
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">Email</dt>
                <dd class="contact-form__dd">
                    <input type="email" name="mail" class="contact-form__input" placeholder="VD: example@gmail.com">
                </dd>
            </dl>
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">Họ và Tên</dt>
                <dd class="contact-form__dd">
                    <input type="text" name="name" class="contact-form__input" placeholder="VD: A/C ABC">
                </dd>
            </dl>
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">Số điện thoại</dt>
                <dd class="contact-form__dd">
                    <input type="text" name="phone" class="contact-form__input" placeholder="VD: 0900000000">
                </dd>
            </dl>
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">Bất động sản quan tâm</dt>
                <dd class="contact-form__dd">
                    <ul class="contact-form__radio-wrap">
                        <li class="contact-form__check-item">
                            <input type="checkbox" name="type" value="Căn hộ chung cư" class="contact-form__check" id="type01">
                            <label for="type01" class="contact-form__check-label">Căn hộ chung cư</label>
                        </li>
                        <li class="contact-form__check-item">
                            <input type="checkbox" name="type" value="Nhà biệt thự liền kề" class="contact-form__check" id="type02">
                            <label for="type02" class="contact-form__check-label">Nhà biệt thự liền kề</label>
                        </li>
                        <li class="contact-form__check-item">
                            <input type="checkbox" name="type" value="Nhà mặt phố" class="contact-form__check" id="type03">
                            <label for="type03" class="contact-form__check-label">Nhà mặt phố</label>
                        </li>
                        <li class="contact-form__check-item">
                            <input type="checkbox" name="type" value="Nhà riêng" class="contact-form__check" id="type04">
                            <label for="type04" class="contact-form__check-label">Nhà riêng</label>
                        </li>
                        <li class="contact-form__check-item">
                            <input type="checkbox" name="type" value="Shophouse, nhà phố thương mại" class="contact-form__check" id="type05">
                            <label for="type05" class="contact-form__check-label">Shophouse, nhà phố thương mại</label>
                        </li>
                        <li class="contact-form__check-item">
                            <input type="checkbox" name="type" value="Văn phòng" class="contact-form__check" id="type06">
                            <label for="type06" class="contact-form__check-label">Văn phòng</label>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">Làm thế nào để trả lời</dt>
                <dd class="contact-form__dd">
                    <ul class="contact-form__radio-wrap answer">
                        <li class="contact-form__radio-item">
                            <input type="radio" name="answerby" id="answerby01" class="contact-form__radio">
                            <label for="answerby01" class="contact-form__radio-label">E-mail</label>
                        </li>
                        <li class="contact-form__radio-item">
                            <input type="radio" name="answerby" id="answerby02" class="contact-form__radio">
                            <label for="answerby02" class="contact-form__radio-label">điện thoại</label>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">Nội dung tin nhắn</dt>
                <dd class="contact-form__dd">
                    <textarea name="content" class="contact-form__textarea"></textarea>
                </dd>
            </dl>
            <div class="contact-form__agree">
                <span class="contact-form__agree-wrap">
                    <input type="checkbox" name="agree" id="agree" class="contact-form__check">
                    <label for="agree" class="contact-form__check-label">Tôi đồng ý với chính sách bảo mật</label>
                </span>
            </div>
            <button class="contact-form__button">Gửi</button>
        </div> -->
        <?php echo do_shortcode('[contact-form-7 id="691" title="Liên hệ"]'); ?>
    </div>
</section>
<?php get_footer(); ?>