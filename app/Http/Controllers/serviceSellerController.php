<?php

namespace App\Http\Controllers;

use App\Models\ServiceSeller;
use Illuminate\Http\Request;

class ServiceSellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
     {
       $service_sellers = ServiceSeller::all();
       return view('serviceseller.index')->with('service_sellers', $service_sellers);
  

}

     public function marketplace(){

         $service_sellers = ServiceSeller::all();
        return view('serviceseller.servicemarket')->with('service_sellers', $service_sellers);
 }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('serviceseller.serviceseller');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // return ('value posted');
        $this->validate($request,[
            'serviceSellerCompany' => ['string', 'max:255'],
            'serviceName' => ['string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'offerType' => ['required', 'string', 'max:255'],
            'conditions' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255',],
            'Remarks' => ['required', 'string', 'max:255'],
            'image_path' => ['mimes:jpg,png,jpeg|max:5048'],
        ]);
        $newImageName = time().'-'.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);
        // dd('$newImageName');  
        $serviceSeller = new ServiceSeller();
        $serviceSeller->serviceSellerCompany = $request->input('serviceSellerCompany');
        $serviceSeller->serviceName = $request->input('serviceName');
        $serviceSeller->type = $request->input('type');
        $serviceSeller->offerType = $request->input('offerType');
        $serviceSeller->conditions = $request->input('conditions');
        $serviceSeller->price = $request->input('price');
        $serviceSeller->Remarks = $request->input('Remarks');
        $serviceSeller->image_path =$newImageName;
        $res = $serviceSeller->save();
        return redirect('serviceseller')->with('success', 'Submitted Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service_sellers = ServiceSeller::find($id);
        return view('serviceseller.show')->with('service_sellers', $service_sellers);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    { $service_sellers = ServiceSeller::find($id);
        return view('serviceseller.edit')->with('service_sellers', $service_sellers);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $this->validate($request,[
            'serviceSellerCompany' => ['string', 'max:255'],
            'serviceName' => ['string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'offerType' => ['required', 'string', 'max:255'],
            'conditions' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255',],
            'Remarks' => ['required', 'string', 'max:255'],
            'image_path' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);
        $newImageName = time().'-'.'.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);

        $serviceSeller = ServiceSeller::find($id);
        $serviceSeller->serviceSellerCompany = $request->input('serviceSellerCompany');
        $serviceSeller->serviceName = $request->input('serviceName');
        $serviceSeller->type = $request->input('type');
        $serviceSeller->offerType = $request->input('offerType');
        $serviceSeller->conditions = $request->input('conditions');
        $serviceSeller->price = $request->input('price');
        $serviceSeller->Remarks = $request->input('Remarks');
        $serviceSeller->image_path =$newImageName;
        $res = $serviceSeller->save();
        return redirect('serviceseller')->with('success', 'Submitted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
        $service_sellers = ServiceSeller::find($id);
        $service_sellers->delete();
        return redirect('/serviceseller')->with('success', 'deleted Successfully');
    }
}
