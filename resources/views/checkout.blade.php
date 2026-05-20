@extends('layout.master')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="images/icons/pg-header-1.svg" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white"> إتمام الدفع </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b>إتمام الدفع</b></h1>
            </div>
            <img src="images/pg-header-2.png" alt="" class="bg" />
        </section>
        <!-- Start checkout-pg  -->
        <section class="section payment-pg">
            <div class="container">
                <div class="inner text-center py-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h3>طريقة الدفع</h3>
                            <div class="payment_way mt-5">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="payment" id="payment1"
                                        value="option1">
                                    <label class="form-check-label" for="payment1">
                                        <div class="img">
                                            <img src="images/pay/visa.png" alt="" class="pay_logo" />
                                            <h6>فيزا</h6>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="payment" id="payment2"
                                        value="option2">
                                    <label class="form-check-label" for="payment2">
                                        <div class="img">
                                            <img src="images/pay/master.png" alt="" class="pay_logo" />
                                            <h6> ماستر كارد</h6>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="payment" id="payment3"
                                        value="applePayRadio">
                                    <label class="form-check-label" for="payment3">
                                        <div class="img">
                                            <img src="images/pay/apple-pay.svg" alt="" class="pay_logo" />
                                            <h6 class="name mb-0">Apple Pay</h6>
                                        </div>
                                    </label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="payment" id="payment5"
                                        value="bankTransfer">
                                    <label class="form-check-label" for="payment5">
                                        <div class="img">
                                            <img src="images/pay/bank-transfer.png" alt="" class="pay_logo" />
                                            <h6 class="name mb-0">التحويل البنكي</h6>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="bankTransfer-form mt-5">
                                <table class="table mb-4">
                                    <thead>
                                        <tr>
                                            <th>إسم الحساب</th>
                                            <th>رقم الحساب</th>
                                            <th>رقم الآيبان</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>الاسم هنا</td>
                                            <td>123456789</td>
                                            <td>
                                                123456789
                                                <button class="copy_butn"><i class="fa-regular fa-copy"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>الاسم هنا</td>
                                            <td>123456789</td>
                                            <td>
                                                123456789
                                                <button class="copy_butn"><i class="fa-regular fa-copy"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>الاسم هنا</td>
                                            <td>123456789</td>
                                            <td>
                                                123456789
                                                <button class="copy_butn"><i class="fa-regular fa-copy"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <h5 class="heading mb-4 color-gray2"><b>أدخل إيصال التحويل </b></h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="file-upload" id="companyFile">
                                                <div class="file-select">
                                                    <div class="file-select-button" id="fileName"><i
                                                            class="fa-solid fa-link"></i></div>
                                                    <div class="file-select-name" id="noFile">إرفاق إيصال التحويل</div>
                                                    <input type="file" name="chooseFile" id="chooseFile">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="alert_p mt-5" id="alertApplePay">
                                <i class="fa-solid fa-triangle-exclamation color-secondary me-2"></i>
                                يرجي العلم ان الدفع من خلال ابل باي يكون من خلال نسخة الايفون
                            </p>
                        </div>
                    </div>
                </div>
                <div class="inner text-center py-5 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h3>كوبون الخصم</h3>
                            <div class="disc_copon mt-5 mb-4">
                                <div class="form-group mb-3">
                                    <input type="text" class="form-control" placeholder="...أدخل الكود هنا"
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <button class="butn secondary_butn px-5" type="button"
                                        id="button-addon1">تطبيق</button>
                                </div>
                            </div>
                            <h5> نسبة الخصم <span class="color-primary"> 15% </span></h5>
                        </div>
                    </div>
                </div>
                <div class="inner text-center py-5 ">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <h3>تفاصيل الدفع</h3>
                            <p class="alert_p mb-4">
                                <small>
                                    <i class="fa-solid fa-triangle-exclamation color-secondary me-2"></i>
                                    يرجى العلم ان السعر شامل ضريبة القيمة المضافه
                                </small>
                            </p>
                            <div class="pay_price mt-5">
                                <ul>
                                    <li>
                                        <span> رسوم الاعلان </span>
                                        <span>500 SR</span>
                                    </li>
                                    <li>
                                        <span> نسبة الخصم </span>
                                        <span> 15 %</span>
                                    </li>
                                    <li class="total">
                                        <span>المجموع الكلي</span>
                                        <span>500 SR</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="butn primary_butn m-auto mt-5 py-3 px-5" type="button" data-bs-toggle="modal"
                    data-bs-target="#payModal">
                    <i class="fa-solid fa-angle-right me-2 ms-0"></i> <b>الدفع</b>
                </button>
            </div>
        </section>
    </main>
@endsection
