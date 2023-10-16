<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexhome()
    {
        // $products = Product::select('*', DB::raw('LEFT(description, 50) as truncated_description'), DB::raw('SUBSTRING(description, 50, 1000) as showmore_description'), DB::raw('LEFT(volunteer_name, 30) as shortname'))

        // $products = Product::select('*', DB::raw('LEFT(name, 30) as shortname'))
        $products =
        Product::take(10)->get();
        // ->where('categoryId', $id)
        //     ->sortBy('name');
        // ->paginate(6);
        // foreach ($products as $product) {
        //     $donate = 0;
        //     $volnteerDetails = Volnteerdetail::where('volunteer_id', $product->id)->get();
        //     if ($volnteerDetails->count() > 0) {
        //         foreach ($volnteerDetails as $value) {
        //             $donate += $value->price;
        //         }
        //     }
        //     $product->donate = $donate;
        // }

        


        $categories = ProductCategory::all();
       
        return view( 'pages.index', [
            'categories' => $categories
            ,'products' => $products

        ]);
    }

    public function indexproduct($id)
    {
        // $products = Product::select('*', DB::raw('LEFT(description, 50) as truncated_description'), DB::raw('SUBSTRING(description, 50, 1000) as showmore_description'), DB::raw('LEFT(volunteer_name, 30) as shortname'))

        // $products = Product::select('*', DB::raw('LEFT(name, 30) as shortname'))
        // $products = Product::all()
        // ->where('productId', $id);

        $product = Product::find($id);
            // ->sortBy('name');
        // ->paginate(6);
        // foreach ($products as $product) {
        //     $donate = 0;
        //     $volnteerDetails = Volnteerdetail::where('volunteer_id', $product->id)->get();
        //     if ($volnteerDetails->count() > 0) {
        //         foreach ($volnteerDetails as $value) {
        //             $donate += $value->price;
        //         }
        //     }
        //     $product->donate = $donate;
        // }

        


        // $categories = ProductCategory::all();
       
        return view('pages.single', [
            // 'categories' => $categories
            'product' => $product

        ]);
    }
    public function index($id)
    {
        // $products = Product::select('*', DB::raw('LEFT(description, 50) as truncated_description'), DB::raw('SUBSTRING(description, 50, 1000) as showmore_description'), DB::raw('LEFT(volunteer_name, 30) as shortname'))

        // $products = Product::select('*', DB::raw('LEFT(name, 30) as shortname'))
        $products = Product::all()
        ->where('categoryId', $id)
            ->sortBy('name');
        // ->paginate(6);
        // foreach ($products as $product) {
        //     $donate = 0;
        //     $volnteerDetails = Volnteerdetail::where('volunteer_id', $product->id)->get();
        //     if ($volnteerDetails->count() > 0) {
        //         foreach ($volnteerDetails as $value) {
        //             $donate += $value->price;
        //         }
        //     }
        //     $product->donate = $donate;
        // }

        


        $categories = ProductCategory::all();
       
        return view('pages.allproducts', [
            'categories' => $categories
            ,'products' => $products

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCategory $productCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductCategory $productCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCategory $productCategory)
    {
        //
    }



    public function search(Request $request)
    {

        $categories = ProductCategory::all();
        // $query = Product::all();
        $query = Product::query();
        if (isset($request->name) && $request->name != null) {


            $query->where('name', 'LIKE', '%' . $request->name. '%');
        }
        // $products = $query->paginate(6);
        // $products = $query;
        $products = $query->get();
        // foreach ($products as $product) {
        //     $donate = 0;
        //     $volnteerDetails = Volnteerdetail::where('volunteer_id', $product->id)->get();
        //     if ($volnteerDetails->count() > 0) {
        //         foreach ($volnteerDetails as $value) {
        //             $donate += $value->price;
        //         }
        //     }
        //     $product->donate = $donate;
        // }


        return view('pages.allproducts', ['products' => $products, 'categories' => $categories]);
        // }
    }

}
