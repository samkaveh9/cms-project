@extends('home::layouts.master')
@section('content')
    <main id="single">
        <div class="content">

            <div class="container">
                <article class="article">
                    <div class="ads mb-10">
                        <a href="" rel="nofollow noopener"><img src="{{ asset('assets/img/ads/1440px/test.jpg') }}" alt="{{ $product->title }}"></a>
                    </div>
                    <div class="h-t">
                        <h1 class="title">{{ $product->title }}</h1>
                        <div class="breadcrumb">
                            <ul>
                                <li><a href="{{ route('home') }}" title="خانه">خانه</a></li>
{{--                                <li><a href="" title="برنامه نویسی">{{ $product->category->title }}</a></li>--}}
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
            <div class="main-row container">
                <div class="sidebar-right">
                    <div class="sidebar-sticky">
                        <div class="product-info-box">
                            <div class="discountBadge">
                                <p>45%</p>
                                تخفیف
                            </div>
                            <div class="sell_course">
                                <strong>قیمت :</strong>
                                @if($product->discount_price)
                                    <del class="discount-Price">{{ $product->discount_price }}</del>
                                @endif
                                <p class="price">
                        <span class="woocommerce-Price-amount amount">{{ $product->price }}
                            <span class="woocommerce-Price-currencySymbol">تومان</span>
                        </span>
                                </p>
                            </div>

                            @auth()
                                <button class="btn buy text-white" onclick="alert('ok')">خرید محصول</button>
                            @else
                                <a href="{{ route('login') }}" class="btn buy text-white">خرید محصول</a>
                                <h5>قبل از خرید محصول وارد سایت شوید</h5>
                            @endauth
                        </div>
                        <div class="product-info-box">
                            <div class="product-meta-info-list">
                                <div class="total_sales">
                                    تعداد دانشجو : <span>246</span>
                                </div>
                                <div class="meta-info-unit one">
                                    <span class="title">تعداد جلسات منتشر شده :  </span>
                                    <span class="vlaue">110</span>
                                </div>
                                <div class="meta-info-unit two">
                                    <span class="title">مدت زمان دوره تا الان : </span>
                                    <span class="vlaue">135:40:00</span>
                                </div>
                                <div class="meta-info-unit three">
                                    <span class="title">مدت زمان کل دوره : </span>
                                    <span class="vlaue">-</span>
                                </div>
                                <div class="meta-info-unit four">
                                    <span class="title">مدرس دوره : </span>
                                    <span class="vlaue">محمد نیکو</span>
                                </div>
                                <div class="meta-info-unit five">
                                    <span class="title">وضعیت دوره : </span>
                                    <span class="vlaue">تکمیل شده</span>
                                </div>
                                <div class="meta-info-unit six">
                                    <span class="title">پشتیبانی : </span>
                                    <span class="vlaue">دارد</span>
                                </div>
                            </div>
                        </div>
                        <di class="sidebar-banners">

                            <div class="sidebar-pic">
                                <a href="https://t.me/webmooz_net"><img src="{{ asset('assets/img/telgram.png') }}"
                                                                        alt="کانال تلگرام"></a>
                            </div>

                            <div class="sidebar-pic">
                                <a href="https://t.me/webmooz_net"><img src="{{ asset('assets/img/laravel-tel.png') }}"
                                                                        alt="کانال تلگرام"></a>
                            </div>
                            <div class="sidebar-pic">
                                <a href="https:webamooz.net/blog"><img src="{{ asset('assets/img/podcast.png') }}"
                                                                       alt="وبلاگ وب آموز"></a>
                            </div>
                            <div class="sidebar-pic">
                                <a href="https://t.me/webmooz_net"><img src="{{ asset('assets/img/workinja.png') }}"
                                                                        alt="کانال تلگرام"></a>
                            </div>
                            <div class="sidebar-pic">
                                <a href="https://t.me/webmooz_net"><img src="{{ asset('assets/img/blog-pic.png') }}"
                                                                        alt="کانال تلگرام"></a>
                            </div>
                        </di>

                    </div>
                </div>
                <div class="content-left">
                    <div class="preview">
                        <img src="/storage/{{ $product->image }}" alt="{{ $product->title }}"
                             style="display: block; margin: auto" width="856" height="482">
                    </div>
                    {{--                    <a href="#" class="episode-download opacity-0"></a>--}}
                    <div class="course-description">

                        <div class="course-description-title">توضیحات محصول
                            {{--                            <div class="study-mode"></div>--}}
                        </div>

                        <p>
                            {{ $product->description }}
                        </p>

                        <p>
                            {!! $product->content !!}
                        </p>

                        {{--                        <div class="tags">--}}
                        {{--                            <ul>--}}
                        {{--                                <li><a href="">ری اکت</a></li>--}}
                        {{--                                <li><a href="">reactjs</a></li>--}}
                        {{--                                <li><a href="">جاوااسکریپت</a></li>--}}
                        {{--                                <li><a href="">javascript</a></li>--}}
                        {{--                                <li><a href="">reactjs چیست</a></li>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="comments">
                    <div class="comment-main">
                        <div class="ct-header">
                            <h3>نظرات ( 180 )</h3>
                            <p>نظر خود را در مورد این مقاله مطرح کنید</p>
                        </div>
                        <form action="" method="post">
                            <div class="ct-row">
                                <div class="ct-textarea">
                                    <textarea class="txt ct-textarea-field"></textarea>
                                </div>
                            </div>
                            <div class="ct-row">
                                <div class="send-comment">
                                    <button class="btn i-t">ثبت نظر</button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <div class="comments-list">
                        <div id="Modal2" class="modal">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <p>ارسال پاسخ</p>
                                    <div class="close">&times;</div>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="">
                                        <textarea class="txt hi-220px" placeholder="متن دیدگاه"></textarea>
                                        <button class="btn i-t">ثبت پاسخ</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                        <ul class="comment-list-ul">
                            <div class="div-btn-answer">
                                <button class="btn-answer">پاسخ به دیدگاه</button>
                            </div>
                            <li class="is-comment">
                                <div class="comment-header">
                                    <div class="comment-header-avatar">
                                        <img src="img/profile.jpg">
                                    </div>
                                    <div class="comment-header-detail">
                                        <div class="comment-header-name">کاربر : گوگل گوگل گوگل گوگل</div>
                                        <div class="comment-header-date">10 روز پیش</div>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد.
                                    </p>
                                </div>
                            </li>
                            <li class="is-answer">
                                <div class="comment-header">
                                    <div class="comment-header-avatar">
                                        <img src="img/laravel-pic.png">
                                    </div>
                                    <div class="comment-header-detail">
                                        <div class="comment-header-name">مدیر سایت : محمد نیکو</div>
                                        <div class="comment-header-date">10 روز پیش</div>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد.
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد.
                                    </p>
                                </div>
                            </li>
                            <li class="is-comment">
                                <div class="comment-header">
                                    <div class="comment-header-avatar">
                                        <img src="img/profile.jpg">
                                    </div>
                                    <div class="comment-header-detail">
                                        <div class="comment-header-name">کاربر : گوگل</div>
                                        <div class="comment-header-date">10 روز پیش</div>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد.
                                    </p>
                                </div>
                            </li>

                        </ul>
                        <ul class="comment-list-ul">
                            <div class="div-btn-answer">
                                <button class="btn-answer">پاسخ به دیدگاه</button>
                            </div>
                            <li class="is-comment">
                                <div class="comment-header">
                                    <div class="comment-header-avatar">
                                        <img src="img/profile.jpg">
                                    </div>
                                    <div class="comment-header-detail">
                                        <div class="comment-header-name">کاربر : گوگل</div>
                                        <div class="comment-header-date">10 روز پیش</div>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد.
                                    </p>
                                </div>
                            </li>
                            <li class="is-answer">
                                <div class="comment-header">
                                    <div class="comment-header-avatar">
                                        <img src="img/laravel-pic.png">
                                    </div>
                                    <div class="comment-header-detail">
                                        <div class="comment-header-name">مدیر سایت : محمد نیکو</div>
                                        <div class="comment-header-date">10 روز پیش</div>
                                    </div>
                                </div>
                                <div class="comment-content">
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد.
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان
                                        گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                        برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای
                                        کاربردی می باشد.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="toast">
        <div>
            <div class="toast__icon"></div>
            <div class="toast__message"></div>
            <div class="toast__close" onclick="toast__close()"></div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" media="(max-width:991px)">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/countDownTimer.js') }}"></script>
    <script src="{{ asset('assets/js/modal.js') }}"></script>
@endpush
