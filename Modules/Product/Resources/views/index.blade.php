@extends('dashboard::layouts.master')

@section('content')
    <div class="main-content">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route('products.index') }}">لیست محصولات</a>
                <a class="tab__item" href="{{ route('products.create') }}">ایجاد محصول</a>
            </div>
        </div>
        <div class="bg-white padding-20">
            <div class="t-header-search">
{{--                <form action="" onclick="event.preventDefault();">--}}
{{--                    <div class="t-header-searchbox font-size-13">--}}
{{--                        <input type="text" class="text search-input__box font-size-13" placeholder="جستجوی دوره">--}}
{{--                        <div class="t-header-search-content ">--}}
{{--                            <input type="text"  class="text"  placeholder="نام دوره">--}}
{{--                            <input type="text"  class="text" placeholder="ردیف">--}}
{{--                            <input type="text"  class="text" placeholder="قیمت">--}}
{{--                            <input type="text"  class="text" placeholder="نام مدرس">--}}
{{--                            <input type="text"  class="text margin-bottom-20" placeholder="دسته بندی">--}}
{{--                            <btutton class="btn btn-webamooz_net">جستجو</btutton>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
            </div>
        </div>
        <div class="table__box">
            <table class="table">
                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th>شناسه</th>
                    <th>تصویر محصول</th>
                    <th>عنوان</th>
                    <th>قیمت (تومان)</th>
                    <th>وضعیت</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                   @if(count($products) > 0)
                       @foreach($products as $product)
                           <tr role="row" class="">
                               <td>{{ $product->id }}</td>
                               <td><img src="/storage/{{ $product->image }}" width="130" height="80"></td>
                               <td>{{ $product->title }}</td>
                               <td>{{ $product->price }}</td>
                               <td>@lang($product->status)</td>
                               <td>{{ \Carbon\Carbon::parse($product->created_at)->diffForHumans() }}</td>
                               <td>
                                   <a href="{{ route('products.edit', $product->id) }}" class="item-edit " title="ویرایش"></a>
                                   <form action="{{ route('products.destroy', $product->id) }}" method="post" class="d-contents">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="item-delete mlg-15" title="حذف"></button>
                                   </form>
                               </td>
                           </tr>
                       @endforeach
                   @else
                       <tr role="row" >
                            <th colspan="6" style="margin: 2rem 0">محصولی یافت نشد</th>
                       </tr>
                   @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
