@extends('layouts.app')

@section('content')

<h1>Sellers Of Seed</h1>

<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="case-models-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Quantity</th>
                <th>Unit</th>
                <th>Price_Per_Unit</th>
                <th>PaymentMode</th>
                <th>Remarks</th>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
    <tbody>
    @forelse ($seed_sellers as $seed_sellers)
    <tr>
        <td>{{ $seed_sellers->id }}</td>
        <td>{{ $seed_sellers->Name}}</td>
        <td>{{ $seed_sellers->Quantity}}</td>
        <td>{{ $seed_sellers->Unit }}</td>
        <td>{{ $seed_sellers->Price_Per_Unit }}</td>
        <td>{{ $seed_sellers->PaymentMode }}</td>
        <td>{{ $seed_sellers->Remarks }}</td>
        <td> <img  src = "{{asset('/images/'.$seed_sellers->image_path)}}" height="70px" alt="..."></td>
         <td><a class="btn btn-info" href = "{{route('seedseller_show',$seed_sellers->id)}}"> show</a></td>
         <td><a class="btn btn-primary" href = "{{route('seedseller_edit',$seed_sellers->id)}}"> Edit</a></td>
         <td>
            <form method="DELETE" action="{{route('seedseller_destroy',$seed_sellers->id)}}">
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