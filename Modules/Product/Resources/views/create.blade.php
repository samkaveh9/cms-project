@extends('dashboard::layouts.master')

@section('content')
    <div class="main-content padding-0">
        <p class="box__title">ایجاد محصول</p>
        <div class="row no-gutters bg-white">
            <div class="col-12">
                @if($errors->any())
                    <div class="alert ">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('products.store') }}" method="post" class="padding-30"
                      enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" id="title" class="text" placeholder="عنوان محصول" value="{{ old('title') }}">
                    @error('title')
                    <span>{{ $message }}</span>
                    @enderror
                    <select name="category_id" class="text">
                        <option value="">دسته بندی محصول</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <span>{{ $message }}</span>
                    @enderror
                    <textarea name="description" id="description" cols="30" rows="10"
                              placeholder="توضیحات مختصر">{{ $category->title }}</textarea>
                    @error('description')
                    <span>{{ $message }}</span>
                    @enderror
                    <input type="text" name="price" id="price" class="text" placeholder="قیمت محصول" value="{{ old('price') }}">
                    @error('price')
                    <span>{{ $message }}</span>
                    @enderror
                    <input type="text" name="discount_price" id="discount_price" class="text" placeholder="تخفیف محصول" value="{{ old('discount_price') }}">
                    @error('discount_price')
                    <span>{{ $message }}</span>
                    @enderror
                    <select name="status" class="text">
                        <option value="">وضعیت محصول</option>
                        <option value="active">فعال</option>
                        <option value="inactive">غیر فعال</option>
                    </select>
                    @error('status')
                    <span>{{ $message }}</span>
                    @enderror
                    <div class="file-upload">
                        <div class="i-file-upload">
                            <span>آپلود تصویر</span>
                            <input type="file" class="file-upload" name="image" value="{{ old('image') }}"/>
                        </div>
                        <span class="filesize"></span>
                        <span class="selectedFiles">فایلی انتخاب نشده است</span>
                    </div>
                    @error('image')
                    <span>{{ $message }}</span>
                    @enderror

                    <textarea name="content" id="editor" cols="30" rows="10" placeholder="توضیحات">{{ $category->content }}</textarea>
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
