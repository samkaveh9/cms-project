@extends('home::layouts.master')
@section('title', 'صفحه اصلی')
@section('content')
    <article class="container article">
        <div class="ads d-none">
            <a href="" rel="nofollow noopener"><img src="{{ asset('assets/img/ads/1440px/test.jpg') }}" alt=""></a>
        </div>
        <div class="top-info">
            <div class="slideshow">
                @foreach($sliders as $slider)
                    <div class="slide"><img src="/storage/{{ $slider->slide }}" alt="{{ $slider->title }}"></div>
                @endforeach

                <a class="prev" onclick="move(-1)"><span>&#10095</span></a>
                <a class="next" onclick="move(1)"><span>&#10094</span></a>

                <div class="items">
                    <div class="item">
                        <div class="item-inner"></div>
                    </div>
                    <div class="item">
                        <div class="item-inner"></div>
                    </div>
                    <div class="item">
                        <div class="item-inner"></div>
                    </div>
                    <div class="item">
                        <div class="item-inner"></div>
                    </div>
                    <div class="item">
                        <div class="item-inner"></div>
                    </div>
                </div>
            </div>
            <div class="optionals">
                <div><img src="{{ asset('assets/') }}img/banner/laravel-payment-processing.jpg" alt=""></div>
                <div><img src="{{ asset('assets/') }}img/banner/laravel-payment-processing.jpg" alt=""></div>
            </div>
        </div>
        <div class="box-filter">
            <div class="b-head">
                <h2>جدید ترین محصولات</h2>
                <a href="">مشاهده همه</a>
            </div>
            <div class="posts">
                @foreach($latestProducts as $product)
                    <div class="col">
                        <a href="{{ route('single', $product->slug) }}">
{{--                            <div class="course-status">--}}
{{--                                تکمیل شده--}}
{{--                            </div>--}}
{{--                            <div class="discountBadge">--}}
{{--                                <p>45%</p>--}}
{{--                                تخفیف--}}
{{--                            </div>--}}
                            <div class="card-img"><img src="/storage/{{ $product->image }}" alt="{{ $product->title }}"></div>
                            <div class="card-title"><h2>{{ $product->title }}</h2></div>
                            <div class="card-body">
{{--                                <img src="{{ asset('assets/') }}img/profile.jpg" alt="محمد نیکو" >--}}
{{--                                <span>محمد نیکو</span>--}}

                            </div>
                            <div class="card-details">
                                <div class="opacity-0"></div>
                                <div class="price">
                                    @if($product->discount_price)
                                        <div class="discountPrice">{{ $product->discount_price }}</div>
                                    @endif
                                    <div class="endPrice">{{ $product->price }}</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="box-filter">
            <div class="b-head">
                <h2>پر مخاطب ترین دوره ها</h2>
                <a href="all-courses.html">مشاهده همه</a>
            </div>
            <div class="posts">
                <div class="col">
                    <a href="react.html">
                        <div class="course-status">
                            تکمیل شده
                        </div>
                        <div class="discountBadge">
                            <p>45%</p>
                            تخفیف
                        </div>
                        <div class="card-img"><img src="img/banner/reactjs.png" alt="reactjs"></div>
                        <div class="card-title"><h2>دوره مقدماتی تا پیشرفته reactJs</h2></div>
                        <div class="card-body">
                            <img src="img/profile.jpg" alt="محمد نیکو">
                            <span>محمد نیکو</span>
                        </div>
                        <div class="card-details">
                            <div class="time">135:40:00</div>
                            <div class="price">
                                <div class="discountPrice">159,000</div>
                                <div class="endPrice">270,000</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="php.html">
                        <div class="discountBadge">
                            <p>45%</p>
                            تخفیف
                        </div>
                        <div class="card-img"><img src="img/banner/php.png" alt="php"></div>
                        <div class="card-title"><h2>دوره متخصص php بخش مقدماتی</h2></div>
                        <div class="card-body">
                            <img src="img/profile.jpg" alt="محمد نیکو">
                            <span>محمد نیکو</span>
                        </div>
                        <div class="card-details">
                            <div class="time">135:40:00</div>
                            <div class="price">
                                <div class="discountPrice">159,000</div>
                                <div class="endPrice">270,000</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="php.html">
                        <div class="discountBadge">
                            <p>45%</p>
                            تخفیف
                        </div>
                        <div class="card-img"><img src="img/banner/lara.png" alt="laravel"></div>
                        <div class="card-title"><h2>دوره ساخت پیام رسان تحت وب مشابه Telegram با Laravel و ReactJs و
                                WebSocket به صورت Spa</h2></div>
                        <div class="card-body">
                            <img src="img/profile.jpg" alt="محمد نیکو">
                            <span>محمد نیکو</span>
                        </div>
                        <div class="card-details">
                            <div class="time">135:40:00</div>
                            <div class="price">
                                <div class="discountPrice">159,000</div>
                                <div class="endPrice">270,000</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="angular.html">
                        <div class="discountBadge d-none">
                            <p>45%</p>
                            تخفیف
                        </div>
                        <div class="card-img"><img src="img/banner/angularjs.jpg" alt="reactjs"></div>
                        <div class="card-title"><h2>دوره مقدمات تا پیشرفته انگولار به همراه پروژه فروشگاهی</h2></div>
                        <div class="card-body">
                            <img src="img/profile.jpg" alt="محمد نیکو">
                            <span>محمد نیکو</span>
                        </div>
                        <div class="card-details">
                            <div class="time">135:40:00</div>
                            <div class="price">
                                <div class="discountPrice">159,000</div>
                                <div class="endPrice">270,000</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="react.html">
                        <div class="course-status">
                            تکمیل شده
                        </div>
                        <div class="discountBadge">
                            <p>45%</p>
                            تخفیف
                        </div>
                        <div class="card-img"><img src="img/banner/restfull-lara.jpg" alt="reactjs"></div>
                        <div class="card-title"><h2>دوره تولید و توسعه وب سرویس با </h2></div>
                        <div class="card-body">
                            <img src="img/profile.jpg" alt="محمد نیکو">
                            <span>محمد نیکو</span>
                        </div>
                        <div class="card-details">
                            <div class="time">135:40:00</div>
                            <div class="price">
                                <div class="discountPrice">159,000</div>
                                <div class="endPrice">270,000</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="php.html">
                        <div class="discountBadge">
                            <p>45%</p>
                            تخفیف
                        </div>
                        <div class="card-img"><img src="img/banner/php.png" alt="php"></div>
                        <div class="card-title"><h2>دوره متخصص php بخش مقدماتی</h2></div>
                        <div class="card-body">
                            <img src="img/profile.jpg" alt="محمد نیکو">
                            <span>محمد نیکو</span>
                        </div>
                        <div class="card-details">
                            <div class="time">135:40:00</div>
                            <div class="price">
                                <div class="discountPrice">159,000</div>
                                <div class="endPrice">270,000</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="php.html">
                        <div class="discountBadge">
                            <p>45%</p>
                            تخفیف
                        </div>
                        <div class="card-img"><img src="img/banner/lara.png" alt="laravel"></div>
                        <div class="card-title"><h2>دوره مقدماتی تا پیشرفته لاراول</h2></div>
                        <div class="card-body">
                            <img src="img/profile.jpg" alt="محمد نیکو">
                            <span>محمد نیکو</span>
                        </div>
                        <div class="card-details">
                            <div class="time">135:40:00</div>
                            <div class="price">
                                <div class="discountPrice">159,000</div>
                                <div class="endPrice">270,000</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="angular.html">
                        <div class="discountBadge d-none">
                            <p>45%</p>
                            تخفیف
                        </div>
                        <div class="card-img"><img src="img/banner/angularjs.jpg" alt="reactjs"></div>
                        <div class="card-title"><h2>دوره مقدمات تا پیشرفته انگولار به همراه پروژه فروشگاهی</h2></div>
                        <div class="card-body">
                            <img src="img/profile.jpg" alt="محمد نیکو">
                            <span>محمد نیکو</span>
                        </div>
                        <div class="card-details">
                            <div class="time">135:40:00</div>
                            <div class="price">
                                <div class="discountPrice">159,000</div>
                                <div class="endPrice">270,000</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </article>
    <article class="container blog">
        <div class="b-head">
            <h2>آخرین مقالات</h2>
            <a href="https://webamooz.net/blog">مشاهده همه</a>
        </div>
        <div class="articles">
            <div class="col">
                <a href="react.html">
                    <div class="card-img"><img src="img/banner/reactjs.png" alt="reactjs"></div>
                    <div class="card-title"><h2>
                            فاسد در فریم ورک لاراول
                        </h2></div>
                    <div class="card-body">

                    </div>
                    <div class="card-details">
                        <span class="b-view">80</span>
                        <span class="b-category">دسته بندی : وب</span>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="react.html">
                    <div class="card-img"><img src="img/banner/reactjs.png" alt="reactjs"></div>
                    <div class="card-title"><h2>
                            فاسد در فریم ورک لاراول
                        </h2></div>
                    <div class="card-body">

                    </div>
                    <div class="card-details">
                        <span class="b-view">80</span>
                        <span class="b-category">دسته بندی : وب</span>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="react.html">
                    <div class="card-img"><img src="img/banner/reactjs.png" alt="reactjs"></div>
                    <div class="card-title"><h2>
                            فاسد در فریم ورک لاراول
                        </h2></div>
                    <div class="card-body">

                    </div>
                    <div class="card-details">
                        <span class="b-view">80</span>
                        <span class="b-category">دسته بندی : وب</span>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="react.html">
                    <div class="card-img"><img src="img/banner/reactjs.png" alt="reactjs"></div>
                    <div class="card-title"><h2>
                            فاسد در فریم ورک لاراول
                        </h2></div>
                    <div class="card-body">

                    </div>
                    <div class="card-details">
                        <span class="b-view">80</span>
                        <span class="b-category">دسته بندی : وب</span>
                    </div>
                </a>
            </div>
        </div>
    </article>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" media="(max-width:991px)">
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/countDownTimer.js') }}"></script>
@endpush
