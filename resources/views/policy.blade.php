@extends('layout.master')

@section('title' , 'سياسة الخصوصية')

@section('content')
    <main>
        <!-- Start pg-header  -->
        <section class="pg-header section">
            <div class="container">
                <div class="bread wow fadeInDown">
                    <a href="#" class="link">
                        <img src="images/icons/pg-header-1.svg" alt="" class="icon-18" />
                    </a>
                    <span class="this_pg text-white"> سياسة الخصوصية </span>
                </div>
                <h1 class="title text-center text-white wow fadeInUp"><b> سياسة الخصوصية </b></h1>
            </div>
            <img src="images/header-1.png" alt="" class="bg" />
        </section>
        <!-- Start content-pg -->
        <section class="content-pg section">
            <div class="container">
                <div class="inner">
                    <div class="sec-head text-center mb-5">
                        <h1 class="sec-title m-auto mb-0"><b> سياسة الخصوصية </b></h1>
                    </div>
                    <p class="det">
                        هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل
                        الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها
                        تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي"
                        فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب
                        تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال "lorem ipsum" في أي محرك بحث ستظهر
                        العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم
                        إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.
                    </p>
                    <p class="det">
                        لوريم إيبسوم(Lorem Ipsum) هو ببساطة نص شكلي (بمعنى أن الغاية هي الشكل وليس المحتوى) ويُستخدم في
                        صناعات المطابع ودور النشر. كان لوريم إيبسوم ولايزال المعيار للنص الشكلي منذ القرن الخامس عشر عندما
                        قامت مطبعة مجهولة برص مجموعة من الأحرف بشكل عشوائي أخذتها من نص، لتكوّن كتيّب بمثابة دليل أو مرجع
                        شكلي لهذه الأحرف. خمسة قرون من الزمن لم تقضي على هذا النص، بل انه حتى صار مستخدماً وبشكله الأصلي في
                        الطباعة والتنضيد الإلكتروني. انتشر بشكل كبير في ستينيّات هذا القرن مع إصدار رقائق "ليتراسيت"
                        (Letraset) البلاستيكية تحوي مقاطع من هذا النص، وعاد لينتشر مرة أخرى مؤخراَ مع ظهور برامج النشر
                        الإلكتروني مثل "ألدوس بايج مايكر" (Aldus PageMaker) والتي حوت أيضاً على نسخ من نص لوريم إيبسوم.
                    </p>
                </div>
            </div>
            <img src="images/pattern-1.png" alt="" class="pattern1" />
            <img src="images/pattern-2.png" alt="" class="pattern2" />
        </section>
        <!-- Modal -->
        <div class="modal fade" id="agreementModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="modal-body col-lg-11 m-auto pb-5">
                        <img src="images/icons/contract.png" alt="" class="modal_img" />
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
