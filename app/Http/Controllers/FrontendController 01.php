<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Summer;
use App\Models\Winter;
use App\Models\Admincontact;
use App\Models\About;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\CartItem;
use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
{
    $categories = Category::paginate(12);
    $summers = Summer::all();
    $winters = Winter::all();
    $heroes = Hero::all();

    // Fetch products with status 'Featured'
    $featuredProducts = Product::where('status', 'Featured')->get();

    // Fetch products with status 'Recent'
    $recentProducts = Product::where('status', 'Recent')->get();

    return view('frontend.index', compact('heroes', 'summers', 'winters', 'categories', 'featuredProducts', 'recentProducts'));
}


    public function about()
    {
        $abouts = About::all();
        return view('frontend.page.about', compact('abouts'));
    }

    public function contact()
    {
        $admincontacts = Admincontact::all();
        return view('frontend.page.contact', compact('admincontacts'));
    }

    public function shop()
    {
        $categories = Category::withCount('subcategories')->get();
        return view('frontend.page.shop', compact('categories'));
    }

    public function subcategory()
    {
        $subcategories = SubCategory::withCount('products')->get();
        return view('frontend.page.subcategory', compact('subcategories'));
    }

    public function product()
    {
        // Fetch products with "regular" status
        $products = Product::where('status', 'regular')
            ->with('subcategory', 'category')
            ->get();

        return view('frontend.page.product', compact('products'));
    }

    public function showSubcategories($categoryId)
    {
        $category = Category::with('subCategories')->findOrFail($categoryId);
        return view('frontend.page.subcategory', compact('category'));
    }

    public function showProducts($subcategoryId)
    {
        // Fetch products with "regular" status in the specified subcategory
        $subcategory = SubCategory::findOrFail($subcategoryId);
        $products = $subcategory->products()
            ->where('status', 'regular')
            ->paginate(8); // Adjust the number per page as needed

        return view('frontend.page.product', compact('subcategory', 'products'));
    }

    public function product_details($id)
    {

        // Fetch the product details by ID with "regular" status
        $product = Product::where('id', $id)
            ->where('status', 'regular')
            ->firstOrFail();

        return view('frontend.page.product_details', compact('product'));
    }

    public function showSubcategoryProducts($id)
    {
        $subcategory = Subcategory::with(['products' => function ($query) {
            $query->where('status', 'regular')->paginate(8); // Adjust the number per page as needed
        }])->findOrFail($id);

        return view('frontend.products', compact('subcategory'));
    }

    public function offer()
    {

        $offerProducts = Product::where('status', 'Offer')->get();
        return view('frontend.page.offer', compact('offerProducts'));

    }


}
