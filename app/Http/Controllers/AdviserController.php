<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AdviserController extends Controller
{
    public function index(Request $request)
    {
        $branches = Http::get(config('services.loan_market.url').'v1/branch')->body();
        $branchesData = json_decode($branches);

        if (empty($request->branch_id)) {
            $advisers = Http::get(config('services.loan_market.url').'v1/adviser')->body();
        } else {
            $advisers = Http::get(config('services.loan_market.url').'v1/adviser/branch/'.$request->branch_id)->body();
        }

        $adviserData = json_decode($advisers);

        return view('welcome', compact('branchesData', 'adviserData'));
    }

    public function show($id)
    {
        $adviser = Http::get(config('services.loan_market.url').'v1/adviser/'.$id.'/show')->body();
        $adviserData = json_decode($adviser);

        return view('show_adviser', compact('adviserData'));
    }
}
