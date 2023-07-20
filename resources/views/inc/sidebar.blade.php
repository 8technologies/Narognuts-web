
@vite(['resources/css/custom.scss', 'resources/js/app.js'])
{{-- <link rel="stylesheet" href="{{sass('custom.css')}}">  --}}
{{-- <div class = "relative min-h-screen flex absolute">  --}}


    
 <div class=" flex-column flex-md-row p-3 col-md-2 d-none d-md-block bg-light text-light" style="width: 280px;">
    <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
        <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-5 fw-semibold">NARO GROUNDNUT SYSTEM</span>
    </a>
    <ul class="list-unstyled ps-0">
        <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
            Registration
        </button>
        <div class="collapse show container mt-4" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li role="main"><a href="{{route('farmerRecordsIndex')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">FarmerRecords</a></li>
            <li><a href="{{route('multiplierRecords')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">multiplierRecords</a></li>
            <li><a href="{{route('serviceProviderRecords')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">service providers</a></li>
            </ul>
        </div>
        </li>
        <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
            Farm Management
        </button>
        <div class ="collapse show container mt-4" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="{{route('gardenReg')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Garden Registration</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Records Management</a></li>
            </ul>
        </div>
        </li>
        <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
            Paste And Disease
        </button>
        <div class="collapse" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">New</a></li>
           
            </ul>
        </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            Market Place
        </button>
        <div class="collapse" id="account-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Sellers</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Orders</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Pre Order</a></li>
           
            </ul>
        </div>
        </li>

        <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
            Ask the Expert
        </button>
        <div class="collapse" id="account-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Record Video</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Record Image</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded">Text Input</a></li>
           
            </ul>
        </div>
        </li>
    </ul>
    </div>
</div>