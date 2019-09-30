<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    protected $result = 0;

    public function index()
    {
        return view('wellcome', ['result' => $this->result]);
    }

    public function addition(Request $request)
    {
        $firstNumber = $request->firstNumber;
        $secondNumber = $request->secondNumber;
        $this->result = $firstNumber + $secondNumber;
        return view('wellcome', ['result' => $this->result]);

    }

    public function minus(Request $request)
    {
        $firstNumber = $request->firstNumber;
        $secondNumber = $request->secondNumber;
        $this->result = $firstNumber - $secondNumber;
        return view('wellcome', ['result' => $this->result]);
    }
}
