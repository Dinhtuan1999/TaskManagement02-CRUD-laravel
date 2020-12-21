<?php

namespace App\Http\Controllers;

use App\Models\CustomerModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $customers = CustomerModel::all();
        return view('index' ,compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new CustomerModel();
        $customer->name = $request->name;
        $customer->age = $request->age;
        $customer->phone = $request->phone;
        // Nếu file không tồn tại thì trường image gán bằng NULL
       if ($request->hasFile('img')) {

           $image = $request->file('img');
           $path = $image->store('images' , 'public');
           $customer->img = $path;
       }
        $customer->save();
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = CustomerModel::findOrFail($id);
        return  view('edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer = CustomerModel::findOrFail($id);
        $customer->fill($request->all());

        if ($request->hasFile('img')) {

            $currentImg = $customer->img;
            if ($currentImg) {
                Storage::delete('/public/'. $currentImg);
            }
            $image = $request->file('img');
            $path  = $image->store('images' , 'public');
            $customer->img  = $path;
        }

        $customer->save();
        return  redirect()->route('customer.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
$customer = CustomerModel::findOrFail($id);
$customer->delete();
        return  redirect()->route('customer.index');

    }
}
