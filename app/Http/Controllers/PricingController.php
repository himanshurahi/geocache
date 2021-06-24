<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    protected function index(){
        $pricings = Pricing::all();
        return view('Pricing.index', compact('pricings'));
    }
    protected function create(){
        
        return view('Pricing.create');
    }
}
