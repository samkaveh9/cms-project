@extends('dashboard::layouts.master')

@section('content')
    <div class="main-content padding-0">
        <p class="box__title">ویرایش محصول</p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                <form action="{{ route('products.update', $product->id) }}" method="post" class="padding-30" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="text" name="title" id="title"  class="text" placeholder="عنوان محصول" value="{{ $product->title }}">
                    @error('title')
                    <span>{{ $message }}</span>
                    @enderror
                    <select name="category_id" class="text">
                        <option value="">دسته بندی محصول</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span>{{ $message }}</span>
                    @enderror
                    <textarea name="description" id="description" cols="3" rows="3" placeholder="توضیحات مختصر">{{ $product->description }}</textarea>
                    @error('description')
                    <span>{{ $message }}</span>
                    @enderror
                    <input type="text" name="price" id="price" class="text" placeholder="قیمت محصول" value="{{ $product->price }}">
                    @error('price')
                    <span>{{ $message }}</span>
                    @enderror
                    <input type="text" name="discount_price" id="discount_price"  class="text" placeholder="تخفیف محصول" value="{{ $product->discount_price }}">
                    @error('discount_price')
                    <span>{{ $message }}</span>
                    @enderror
                    <select name="status" class="text">
                        <option value="">وضعیت محصول</option>
                        <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>فعال</option>
                        <option value="inactive" {{ $product->status == 'inactive' ? 'selected' : '' }}>غیر فعال</option>
                    </select>
                    @error('status')
                    <span>{{ $message }}</span>
                    @enderror
                    <div class="file-upload">
                        <div class="i-file-upload">
                            <span>آپلود تصویر</span>
                            <input type="file" class="file-upload" name="image" value="{{ $product->image }}"/>
                        </div>
                        <span class="filesize"></span>
{{--                        <span class="selectedFiles">فایلی انتخاب نشده است</span>--}}
                        <div><img src="/storage/{{ $product->image }}" width="130" height="80"></div>
                    </div>
                    @error('image')
                    <span>{{ $message }}</span>
                    @enderror

                    <textarea name="content" id="editor" cols="30" rows="10" placeholder="توضیحات">{{ $product->content }}</textarea>
                    @error('content')
                    <span>{{ $message }}</span>
                    @enderror

                    <button type="submit" class="btn btn-webamooz_net mt-3">ذخیره</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('assets/plugins/ckeditor/samples/js/sample.js') }}"></script>
    <script>
        initSample();
    </script>
@endpush
