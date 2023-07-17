<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();

        return view("customers.index", compact("customers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPDF()
    {
        $customers = Customer::where("status", "!=", "batal")->get();

        $totalIncome = $this->getTotalIncome($customers);

        $data = [
            "title" => "Data customers",
            "date" => date("m/d/Y"),
            "customers" => $customers,
            "totalIncome" => $totalIncome
        ];
        $pdf = Pdf::loadView("customers.data", compact("data"))->setOption(['defaultFont' => 'sans-serif']);;

        return $pdf->download('customers.pdf');
    }

    private function getTotalIncome($customers)
    {
        $totalIncome = 0;

        foreach ($customers as $customer) {
            $totalIncome += $customer->price;
        }

        return $totalIncome;
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Customer::create([
            "name" => $request->name,
            "order_date" => $request->order_date,
            "address" => $request->address,
            "product" => $request->product,
            "category" => $request->category,
            "price" => $request->price,
            "payment_method" => $request->payment_method,
            "status" => $request->status,
        ]);

        return redirect()->back()->with("alert", "Data customer berhasil ditambahkan!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $customer = Customer::where("id", "=", $request->customer_id)->first();
        $customer->update([
            "name" => $request->name,
            "order_date" => $request->order_date,
            "address" => $request->address,
            "product" => $request->product,
            "category" => $request->category,
            "price" => $request->price,
            "payment_method" => $request->payment_method,
            "status" => $request->status,
        ]);

        return redirect()->back()->with("alert", "Data customer berhasil diubah!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::where("id", "=", $id)->delete();

        return redirect()->back()->with("alert", "Data customer berhasil dihapus!");
    }
}
