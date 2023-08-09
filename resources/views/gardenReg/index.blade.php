@extends('layouts.app')

@section('content')

<h1>Gardens</h1>

<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="case-models-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>GardenName</th>
                <th>Location</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
    <tbody>
    @forelse ($garden_regs as $garden_reg)
    <tr>
        <td>{{ $garden_reg->id }}</td>
        <td>{{ $garden_reg->GardenName}}</td>
        <td>{{ $garden_reg->SellerLocation }}</td>
         <td><a class="btn btn-info" href = "{{route('gardenreg_edit',$garden_reg->id)}}"> Edit</a></td>
         <td>
            <form method="DELETE" action="{{route('gardenreg_destroy',$garden_reg->id)}}">
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