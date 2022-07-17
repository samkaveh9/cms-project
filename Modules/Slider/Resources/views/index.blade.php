@extends('dashboard::layouts.master')
@section('content')
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route('slider.index') }}">لیست اسلاید ها</a>
                <a class="tab__item " href="{{ route('slider.create') }}">ایجاد اسلاید جدید</a>

            </div>
        </div>
        <div class="table__box">
            <table class="table">

                <thead role="rowgroup">
                <tr role="row" class="title-row">
                    <th class="p-r-90">شناسه</th>
                    <th>عنوان</th>
                    <th>تصویر</th>
                    <th>تاریخ ایجاد</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($sliders as $slider)
                        <tr role="row" class="">
                            <td>{{ $slider->id }}</td>
                            <td>{{ $slider->title ?? 'بدون عنوان' }}</td>
                            <td><img class="img__slideshow" src="/storage/{{ $slider->slide }}" width="130" height="80"></td>
                            <td>{{ \Carbon\Carbon::parse($slider->created_at)->diffForHumans() }}</td>
                            <td>
                                <a href="{{ route('slider.edit', $slider->id) }}" class="item-edit" title="ویرایش"></a>
                                <form action="{{ route('slider.destroy', $slider->id) }}" method="post" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="item-delete mlg-15" title="حذف"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
