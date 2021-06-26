<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PricingController extends Controller
{
    public function index()
    {
        $pricings = Pricing::all();
        $plans = Plan::all();
        return view('Pricing.index', compact('pricings', 'plans'));
    }
    public function create()
    {

        return view('Pricing.create');
    }

    public function store(Request $request)
    {
        $pricing = new Plan();
        $pricing->name = $request->name;
        $pricing->plan =  $request->data;
        $pricing->user_id = Auth::user()->id;
        $pricing->save();
        return;
    }

    public function edit(Plan $id)
    {
        $plan = $id;
        return view('Pricing.edit', compact('plan'));
    }

    public function update(Request $request, Plan $id)
    {
        $plan = $id;
        $plan->name = $request->name;
        $plan->plan = $request->data;
        $plan->save();
    }
    public function list()
    {
        $plans = Plan::all();
        return view('Pricing.plans_list', compact('plans'));
    }

    public function destroy($id)
    {
        Plan::find($id)->delete();
        return redirect('/pricing/list');
    }
}
