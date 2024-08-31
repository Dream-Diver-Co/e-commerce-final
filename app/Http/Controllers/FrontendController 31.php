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
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(12);
        $summers = Summer::all();
        $winters = Winter::all();
        $heroes = Hero::all();
        return view('frontend.index', compact('heroes', 'summers','winters','categories'));
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
        return view('frontend.page.shop',compact('categories'));
    }

    public function subcategory()
    {
        $subcategories = SubCategory::withCount('products')->get();
        return view('frontend.page.subcategory', compact('subcategories'));
    }

    public function product()
    {
        $products = Product::with('subcategory', 'category')->get();
        return view('frontend.page.product', compact('products'));
    }

    public function showSubcategories($categoryId)
    {
        $category = Category::with('subCategories')->findOrFail($categoryId);
        return view('frontend.page.subcategory', compact('category'));
    }

    public function showProducts($subcategoryId)
    {
        // Find the subcategory
        $subcategory = SubCategory::findOrFail($subcategoryId);

        // Get paginated products for the subcategory
        $products = $subcategory->products()->paginate(8); // Adjust the number per page as needed

        return view('frontend.page.product', compact('subcategory', 'products'));
    }


    public function product_details($id)
    {
        $product = Product::findOrFail($id); // Fetch the product details by ID

        return view('frontend.page.product_details', compact('product')); // Pass the product data to the view
    }

    public function showSubcategoryProducts($id)
    {
        $subcategory = Subcategory::with(['products' => function ($query) {
            $query->paginate(8); // Adjust the number per page as needed
        }])->findOrFail($id);

        return view('frontend.products', compact('subcategory'));
    }

    public function cart()
    {
        return view('frontend.page.cart');
    }

    public function checkout()
    {
        return view('frontend.page.checkout');
    }

    public function women()
    {
        return view('frontend.page.women');
    }

    public function baby()
    {
        return view('frontend.page.baby');
    }


    public function men()
    {
        return view('frontend.page.men');
    }

    public function offer()
    {
        return view('frontend.page.offer');
    }







}
