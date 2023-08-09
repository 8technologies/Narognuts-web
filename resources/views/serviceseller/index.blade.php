@extends('layouts.app')

@section('content')

<h1>Sellers Of Service</h1>

<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="case-models-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>ServiceSeller Company</th>
                <th>ServiceName</th>
                <th>Type</th>
                <th>OfferType</th>
                <th>price</th>
                <th>Remarks</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
    <tbody>
    @forelse ($service_sellers as $service_sellers)
    <tr>
        <td>{{ $service_sellers->id }}</td>
        <td>{{ $service_sellers->serviceSellerCompany}}</td>
        <td>{{ $service_sellers->serviceName}}</td>
        <td>{{ $service_sellers->type }}</td>
        <td>{{ $service_sellers->offerType }}</td>
        <td>{{ $service_sellers->price }}</td>
        <td>{{ $service_sellers->Remarks }}</td>
        <td> <img  src = "{{asset('/images/'.$service_sellers->image_path)}}" height="70px" alt="..."></td>
         <td><a class="btn btn-info" href = "{{route('serviceseller_show',$service_sellers->id)}}"> show</a></td>
         <td><a class="btn btn-primary" href = "{{route('serviceseller_edit',$service_sellers->id)}}"> Edit</a></td>
         <td>
            <form method="DELETE" action="{{route('serviceseller_destroy',$service_sellers->id)}}">
                @csrf
                 @method('DELETE') 
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td> 
    </tr>

    @empty
    <p> No Records Found</p>

    @endforelse

        </tbody>
    </table>
</div>

@endsection