<footer class="footer">
    <div class="newsletter_outer">
        <div class="container">
            <div class="inner">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4">
                        <div class="text">
                            <h1 class="title text-white"><b>إشترك معنا الآن</b></h1>
                            <p class="p color-gray mb-0">قم بكتابة بريدك الإلكتروني والإشتراك ليصلك كل تحديثاتنا</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="البريد الإلكتروني..." type="text"/>
                                <button class="butn white_butn"><b>إشتراك</b></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_outer">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-6">
                    <div class="content">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="logo"/>
                        <p class="det">
                            <small>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ</small>
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="content">
                        <h5 class="title color-secondary mb-4"><b>روابط هامة</b></h5>
                        <div class="links">
                            <a href="{{ route('about') }}">نبذة عنا</a>
                            <a href="{{ route('categories') }}">الأقسام</a>
                            <a href="{{ route('ads') }}">العروض</a>
                            <a href="{{ route('contact') }}">إتصل بنا</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="content">
                        <h5 class="title color-primary mb-4"><b>روابط أخري</b></h5>
                        <div class="links">
                            <a href="{{ route('faq') }}">الأسئلة الشائعة</a>
                            <a href="{{ route('terms') }}">الشروط والأحكام</a>
                            <a href="{{ route('commission') }}">إتفاقية الإستخدام</a>
                            <a href="{{ route('policy') }}">سياسة الخصوصية</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="content">
                        <h5 class="title color-third mb-4"><b>تواصل معنا</b></h5>
                        <div class="links">
                            <p class="contact_p"><i class="bi bi-envelope"></i> name@domain.com</p>
                            <p class="contact_p"><i class="bi bi-telephone"></i> +966- 0457 9087</p>
                            <p class="contact_p"><i class="bi bi-geo-alt"></i> 122 Building name, St name</p>
                        </div>
                        <div class="social_links">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="copyright_p mt-4 mb-0 py-3 text-center">
                جميع الحقوق محفوظة @رحلتي 2022 تصميم وبرمجة <a href="#">اليوم هوست</a>
            </p>
        </div>
    </div>
</footer>
