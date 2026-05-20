@extends('layout.master')

@section('title' , 'تسجيل الدخول')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="images/icons/pg-header-1.svg" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white"> تسجيل الدخول </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b> تسجيل الدخول </b></h1>
            </div>
            <img src="images/header-1.png" alt="" class="bg" />
        </section>
        <!-- Start register-pg -->
        <section class="register-pg section">
            <div class="container">
                <div class="col-md-7 m-auto">
                    <div class="box">
                        <img src="images/logo.png" alt="" class="logo d-block m-auto">
                        <div class="inner">
                            <div class="head text-center mb-5">
                                <div class="links">
                                    <span class="reg-link active">تسجيل الدخول</span>
                                    <a href="#" class="reg-link"> إنشاء حساب </a>
                                </div>
                                <p class="head_p color-gray2 mt-3">سجل معنا بالبيانات المطلوب لبدأ التصفح </p>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input class="form-control" placeholder="اسم المستخدم" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="كلمة المــرور" id="password"
                                        type="password" />
                                    <span class="togglePassword"><i class="far fa-eye" id="togglePassword"></i></span>
                                    <a href="#" class="forget_pass mt-3">هل نسيت كلمة المرور؟</a>
                                </div>
                                <button class="butn primary_butn m-auto mt-5 py-3 px-4">
                                    <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>تسجيل الدخول</b>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <img src="images/pattern-1.png" alt="" class="pattern1" />
            <img src="images/pattern-2.png" alt="" class="pattern2" />
        </section>
    </main>
@endsection
