<?php get_header(); ?>
<section class="contact">
    <div class="container">
        <h1 class="c-heading-archive">Form liên hệ sử dụng plugin MWWP Form</h1>
        <div class="contact-form">
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">Kinh doanh của bạn</dt>
                <dd class="contact-form__dd">
                    <ul class="contact-form__radio-wrap">
                        <li class="contact-form__radio-item">
                            <input type="radio" name="type" class="contact-form__radio" id="type01">
                            <label for="type01" class="contact-form__radio-label">Thắc mắc (Dành cho những bạn muốn xác nhận trước khi gọi điện hoặc gặp mặt)</label>
                        </li>
                        <li class="contact-form__radio-item">
                            <input type="radio" name="type" class="contact-form__radio" id="type02">
                            <label for="type02" class="contact-form__radio-label">Yêu cầu gặp mặt (dành cho người mới muốn nghe chuyện trước)</label>
                        </li>
                        <li class="contact-form__radio-item">
                            <input type="radio" name="type" class="contact-form__radio" id="type03">
                            <label for="type03" class="contact-form__radio-label">Yêu cầu báo giá (nếu bạn muốn biết chi phí sản xuất gần đúng)</label>
                        </li>
                    </ul>
                </dd>
            </dl>
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">Tên công ty</dt>
                <dd class="contact-form__dd">
                    <input type="text" name="company" class="contact-form__input" placeholder="VD: Công ty ABC">
                </dd>
            </dl>
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">Địa chỉ</dt>
                <dd class="contact-form__dd">
                    <span class="contact-form__select-wrap">
                        <select name="address" class="contact-form__select">
                            <option value="">Vui lòng chọn</option>
                            <option value="HCM">Hồ Chí Minh</option>
                            <option value="HN">Hà Nội</option>
                        </select>
                    </span>
                </dd>
            </dl>
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">Tên người phụ trách</dt>
                <dd class="contact-form__dd">
                    <input type="text" name="name" class="contact-form__input" placeholder="VD: A/C ABC">
                </dd>
            </dl>
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">số điện thoại</dt>
                <dd class="contact-form__dd">
                    <input type="text" name="phone" class="contact-form__input" placeholder="VD: 0900000000">
                </dd>
            </dl>
            <dl class="contact-form__dl">
                <dt class="contact-form__dt required">địa chỉ email</dt>
                <dd class="contact-form__dd">
                    <input type="mail" name="mail" class="contact-form__input" placeholder="VD: example@gmail.com">
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
                <dt class="contact-form__dt required">Nội dung điều tra</dt>
                <dd class="contact-form__dd">
                    <textarea name="content" class="contact-form__textarea"></textarea>
                </dd>
            </dl>
            <div class="contact-form__agree">
                <span class="contact-form__agree-wrap">
                    <input type="checkbox" name="agree" id="agree" class="contact-form__agree-check">
                    <label for="agree" class="contact-form__agree-label">Tôi đồng ý với chính sách bảo mật</label>
                </span>
            </div>
            <button class="contact-form__button">Gửi</button>
        </div>
    </div>
</section>
<?php get_footer(); ?>