@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">services To Sell</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-6" style="display:flex">
            @foreach ($service_sellers as $service_sellers)
            <div class="card m-2 p-2" style="width: 18rem;">
                <img src="images/{{ $service_sellers->image_path }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $service_sellers->serviceName }}</h5>
                  <h5 class="card-title">{{ $service_sellers->serviceSellerCompany }}</h5>
                  <h5 class="card-title">Price: {{ $service_sellers->price }}.shs</h5>
                  {{-- <hr> --}}
                  <p class="card-text">{{ $service_sellers->Remarks}} </p>
                  <a href="{{ route('serviceseller_show', $service_sellers->id) }}" class="btn btn-primary">View Detail</a>
                </div>
                <a  href="#" class="btn btn-success">
                  <i class="nav-icon fa fa-shopping-cart"></i>
                  Buy</a>
              </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
