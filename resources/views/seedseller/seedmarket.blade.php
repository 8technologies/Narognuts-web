@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">Seed Products</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-6" style="display:flex">
            @foreach ($seed_sellers as $seed_sellers)
            <div class="card m-2 p-2" style="width: 18rem;">
                <img src="images/{{ $seed_sellers->image_path }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $seed_sellers->Name }}</h5>
                </div>
                <hr>
                <div class="card-body">
                  <h5 class="card-title">Price: {{ $seed_sellers->Price_Per_Unit }}.shs</h5>
                  
                  <p class="card-text">{{ $seed_sellers->Remarks}} </p>
                  <a href="{{ route('seedseller_show', $seed_sellers->id) }}" class="btn btn-primary">View Detail</a>
                </div>
                <a  href="#" class="btn btn-primary">
                  <i class="nav-icon fa fa-shopping-cart"></i>
                  Add to cart</a>
              </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
