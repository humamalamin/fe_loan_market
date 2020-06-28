<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BranchController extends Controller
{
    public function index(Request $request)
    {
        $branches = Http::get(config('services.loan_market.url').'v1/branch')->body();
        $branchesData = json_decode($branches);

        return view('branch', compact('branchesData'));
    }

    public function show($id)
    {
        $branch = Http::get(config('services.loan_market.url').'v1/branch/'.$id.'/show')->body();
        $branchData = json_decode($branch);

        return view('show_branch', compact('branchData'));
    }
}
