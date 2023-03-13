<?php

namespace App\Http\Controllers;

use App\Contracts\CalculateServiceContract;
use App\Http\Requests\CalculatorRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculate');
    }

    public function calculate(CalculatorRequest $request, CalculateServiceContract $calculator)
    {
        $request->validated();
        $cal = $calculator->calculat($request->val1, $request->val2);
        return  redirect()->back()->with('result', 'Successfully calculated: ' . $cal . ' ');
    }
}
