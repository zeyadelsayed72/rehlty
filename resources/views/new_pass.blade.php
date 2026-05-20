@extends('layout.master')

@section('title' , 'كلمة مرور جديده')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="images/icons/pg-header-1.svg" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white">تعيين كلمة المرور </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b> تعيين كلمة المرور </b></h1>
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
                                <div class="links mb-4">
                                    <span class="reg-link active">تعيين كلمة المرور الجديده </span>
                                </div>
                            </div>
                            <form>
                                <div class="form-group show_hide_password mb-4">
                                    <input type="password" class="form-control shadow_input" placeholder="كلمة المرور ">
                                    <i class="show_pass togglePassword far fa-eye-slash"></i>
                                </div>
                                <div class="form-group show_hide_password mb-4">
                                    <input type="password" class="form-control shadow_input"
                                        placeholder="تأكيد كلمة المرور ">
                                    <i class="show_pass togglePassword far fa-eye-slash"></i>
                                </div>
                                <button class="butn primary_butn m-auto mt-5 py-3 px-5">
                                    <i class="fa-solid fa-angle-right me-2 ms-0"></i><b> إرسال </b>
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
