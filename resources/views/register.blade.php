@extends('layout.master')

@section('title' , 'إنشاء حساب')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="{{ asset('images/icons/pg-header-1.svg') }}" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white"> إنشاء حساب </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b> إنشاء حساب </b></h1>
            </div>
            <img src="{{ asset('images/header-1.png') }}" alt="" class="bg" />
        </section>
        <!-- Start register-pg -->
        <section class="register-pg section">
            <div class="container">
                <div class="col-md-7 m-auto">
                    <div class="box">
                        <img src="{{ asset('images/logo.png') }}" alt="" class="logo d-block m-auto">
                        <div class="inner">
                            <div class="head text-center mb-5">
                                <div class="links">
                                    <a href="#" class="reg-link ">تسجيل الدخول</a>
                                    <span class="reg-link active"> إنشاء حساب </span>
                                </div>
                                <p class="head_p color-gray2 mt-3">سجل معنا بالبيانات المطلوب لبدأ التصفح </p>
                            </div>
                            <form>
                                <div class="registerRadios row">
                                    <h6 class="title mb-4"><b>تفعيل الحساب عن طريق :</b></h6>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="mailRadio"
                                                name="RegisterRadio" id="RegisterRadio1">
                                            <label class="form-check-label" for="RegisterRadio1">
                                                <img src="{{ asset('images/icons/mail.svg') }}" alt="" class="icon" />
                                                البريد الالكتروني
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" value="phoneRadio"
                                                name="RegisterRadio" id="RegisterRadio2">
                                            <label class="form-check-label" for="RegisterRadio2">
                                                <img src="{{ asset('images/icons/phone.svg') }}" alt="" class="icon" />
                                                رقم الجـــوال
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" id="mailInput">
                                    <input class="form-control" placeholder="البريد الإلكتروني" />
                                </div>
                                <div class="form-group" id="phoneInput">
                                    <input class="form-control" placeholder=" رقم الجوال  " />
                                </div>
                                <button class="butn primary_butn m-auto mt-5 py-3 px-5" type="button"
                                    data-bs-toggle="modal" data-bs-target="#agreementModal">
                                    <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b> التالي </b>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('images/pattern-1.png') }}" alt="" class="pattern1" />
            <img src="{{ asset('images/pattern-2.png') }}" alt="" class="pattern2" />
        </section>
        <!-- Modal -->
        <div class="modal fade" id="agreementModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <img src="{{ asset('images/icons/contract.png') }}" alt="" class="modal_img" />
                        <h2 class="title text-center mb-4"><b> اتفاقية الاستخدام </b></h2>
                        <p class="det">
                            هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                            الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم
                            لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد
                            محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير
                            صفحات الويب تستخدم
                        </p>
                        <form>
                            <div class="form-check w-fit m-auto">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    موافق
                                </label>
                            </div>
                        </form>
                        <button class="butn primary_butn m-auto mt-4 py-3 px-5">
                            <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>التالي</b>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
