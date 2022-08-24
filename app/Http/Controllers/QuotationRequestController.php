<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotations;

class QuotationRequestController extends Controller
{
    public function index()
    {
        $quotations = Quotations::all();
        return view('quotation_request', compact('quotations'));
    }
}
