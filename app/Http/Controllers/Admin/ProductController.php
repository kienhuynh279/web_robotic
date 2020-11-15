<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $filter = [];

        if($request->has("title")) {
            array_push($filter, [
                "Title", "like", "%".$request->get("title")."%"
            ]);
        }
        $category = Category::all();
        $product = Product::where($filter)->paginate(20);

        return view("admin.product.index")->with([
            "product" => $product,
            "cate" => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view("admin.product.create",[
            "category" => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $request->validated();

        Product::create([
            "Title" => $request->get("Title"),
            "Image" => $request->get("Image"),
            "CategoryId" => $request->get("CategoryId"),
            "Specification" => $request->get("Specification"),
            "Dimension" => $request->get("Dimension"),
            "Application" => $request->get("Application"),
            "Description" => $request->get("Description"),
            "Status" => 1,
        ]);

        return redirect()->route("admin.product.index")->withErrors([
            "success" => "Tạo sản phẩm thành công"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::all();
        $product = Product::findOrFail($id);

        return view("admin.product.edit")->with([
            "product" => $product,
            "category" => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        $request->validated();

        $product->Title = $request->get("Title");
        $product->Image = $request->get("Image");
        $product->CategoryId = $request->get("CategoryId");
        $product->Specification = $request->get("Specification");
        $product->Dimension = $request->get("Dimension");
        $product->Application = $request->get("Application");
        $product->Description = $request->get("Description");
        $product->Status = 1;
        $product->save();

        return redirect()->route("admin.product.index")->withErrors([
            "success" => "Chỉnh sửa sản phẩm thành công"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();

        return redirect()->route("admin.product.index")->withErrors([
            "success" => "Xóa sản phấm thành công"
        ]);
    }
}
