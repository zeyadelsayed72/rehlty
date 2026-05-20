@extends('layout.master')

@section('title' , 'اتصل بنا')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="images/icons/pg-header-1.svg" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white"> اتصل بنا </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b> اتصل بنا </b></h1>
            </div>
            <img src="images/pg-header-2.png" alt="" class="bg" />
        </section>
        <!-- Start contact-pg  -->
        <section class="contact-pg section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact_card">
                            <img src="images/icons/mail-2.svg " alt="" class="icon filterPrimary mb-4" />
                            <h5 class="title color-dark mb-3">البريد الإلكتروني للمؤسسة</h5>
                            <h5 class="data color-secondary"><b> name@domain.com</b></h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact_card">
                            <img src="images/icons/phone-2.svg " alt="" class="icon filterPrimary mb-4" />
                            <h5 class="title color-dark mb-3">رقم جــوال المؤسسة</h5>
                            <h5 class="data color-secondary"><b>+966-445123310</b></h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact_card">
                            <img src="images/icons/map.svg " alt="" class="icon filterPrimary mb-4" />
                            <h5 class="title color-dark mb-3">عنوان المؤسسة</h5>
                            <h5 class="data color-secondary"><b>هنا تفاصيل العنوان</b></h5>
                        </div>
                    </div>
                </div>
                <div class="form-box mt-4">
                    <div class="sec-head text-center mb-5">
                        <h1 class="sec-title third_title m-auto mb-2"><b>إتصل بنا </b></h1>
                        <p class="det">
                            <small>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما </small>
                        </p>
                    </div>
                    <form>
                        <div class="row col-md-10 m-auto">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="الإســـم" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="البريد الإلكـــتروني" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="رقـــم الجـــوال" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="موضـــوع الرسالة" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="تفاصيل الرســالة" rows="7"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="butn primary_butn m-auto mt-5 py-3 px-5">
                                    <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b> إرسال </b>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
