<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesOrder;

class salesController extends Controller
{
    //

    public function create()
    {
        return view('sales.createSaleInvoice');
    }

    public function store(Request $request)
    {

        $saleOrder = SalesOrder::create([
            'order_number' => 2121,
            'order_date' => date("Y-m-d"),
            'total_amount' => 2112
        ]);
        foreach ($request->tickets as $ticketData) {
            $saleOrder->tickets()->create($ticketData);
        }

        return redirect()->back()->with('success', 'Sale order created successfully.');
    }
}
