<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->select('name', 'brand', 'price')
            ->orderBy('name', 'asc')
            ->get();

        return view('products.index', compact('products'));
    }

    public function list()
    {
        $categories = DB::table('categories')
            ->select('id', 'description')
            ->get();

        $products = DB::table('products')
            ->join(
                'categories',
                'id',
                '=',
                'categories.id'
            )
            ->select(
                'products.name',
                'products.brand',
                'products.price',
                'categories.description as category'
            )
            ->orderBy('products.name', 'asc')
            ->get();

        return view('products.search', compact('categories', 'products'));
    }

    public function search(Request $request)
    {
        $categories = DB::table('categories')
            ->select('id', 'description')
            ->get();

        $products = DB::table('products')
            ->join(
                'categories',
                'category_id',
                '=',
                'categories.id'
            )
            ->select(
                'products.name',
                'products.brand',
                'products.price',
                'categories.description as category'
            )
            ->where('id', $request->category)
            ->orderBy('products.name', 'asc')
            ->get();

        return view('products.search', compact('categories', 'products'));
    }

    public function create()
    {
        $categories = DB::table('categories')
            ->select('id', 'description')
            ->get();

        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        DB::table('products')->insert([
            'name' => $request->name,
            'brand' => $request->brand,
            'price' => $request->price,
            'stock' => $request->stock,
            'category_id' => $request->id
        ]);

        return redirect()->route('products.index');
    }
}