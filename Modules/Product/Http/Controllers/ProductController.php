<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Routing\Controller;
use Exception;
use Modules\Category\Models\Category;
use Modules\Product\Http\Requests\ProductRequest;
use Modules\Product\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('product::index', ['products' => Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('product::create', ['categories' => Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     * @param ProductRequest $request
     * @return Renderable
     */
    public function store(ProductRequest $request)
    {
//        try {
            if ($request->hasFile('image'))
            {
                $file = $request->file('image');
                $fileExtension = strtolower($file->getClientOriginalExtension());
                $fileName = date('Ymdhis') . '.' . $fileExtension;
                $file->move(storage_path('app/public/'), $fileName);
                Product::create(array_merge($request->validated(), ['image' => $fileName]));
                flash()->title('successfully action')->message("محصول با موفقیت اضافه شد")->success()->flash();
            }
            return redirect(route('products.index'));
//        }catch (Exception $e){
//            flash()->title('مشکلی رخ داده')->message("خطای اتفاق افتاده دوباره تلاش کنید")->error()->flash();
//            return back();
//        }
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('product::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Product $product
     * @return Renderable
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('product::edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param ProductRequest $request
     * @param Product $product
     * @return Renderable
     */
    public function update(ProductRequest $request, Product $product)
    {
//        try {
            if ($request->hasFile('image'))
            {
                unlink(storage_path('app/public/'. $product->image));
                $file = $request->file('image');
                $fileExtension = strtolower($file->getClientOriginalExtension());
                $fileName = date('Ymdhis') . '.' . $fileExtension;
                $file->move(storage_path('app/public/'), $fileName);
                $product->update(array_merge($request->validated(), ['image' => $fileName]));
                flash()->title('successfully action')->message("محصول با موفقیت ویرایش شد")->success()->flash();
            }else{
                $product->update(array_merge($request->validated(), ['image' => $product->image]));
                flash()->title('successfully action')->message("محصول با موفقیت ویرایش شد")->success()->flash();
            }
            return redirect(route('products.index'));
//        }catch (Exception $e){
//            flash()->title('مشکلی رخ داده')->message("خطای اتفاق افتاده دوباره تلاش کنید")->error()->flash();
//            return back();
//        }
    }

    /**
     * Remove the specified resource from storage.
     * @param Product $product
     * @return Renderable
     */
    public function destroy(Product $product)
    {
//        try {
            unlink(storage_path('app/public/'. $product->image));
            $product->delete();
            flash()->title('successfully action')->message("محصول با موفقیت حذف شد")->success()->flash();
            return back();
//        }catch (Exception $e){
//            flash()->title('مشکلی رخ داده')->message("خطای اتفاق افتاده دوباره تلاش کنید")->error()->flash();
//            return back();
//        }

    }

    public function buy($id)
    {

    }

}
