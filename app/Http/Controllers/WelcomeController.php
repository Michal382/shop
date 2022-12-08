<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use App\Models\ProductCategory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\JsonResponse;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view("welcome", [
            'products' => Product::paginate(10),
            'categories' => ProductCategory::orderBy('name', 'ASC')->get(),

        ]);
    }
}