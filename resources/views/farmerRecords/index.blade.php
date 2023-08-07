@extends('layouts.app')

@section('content')

<h1>Gardens</h1>

<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="case-models-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
    <tbody>
    @forelse ($farmer_records as $farmer_records)
    <tr>
        <td>{{ $farmer_records->id }}</td>
        <td>{{ $farmer_records->FirstName}}</td>
        <td>{{ $farmer_records->LastName }}</td>
         <td><a href = "{{route('farmerrecords_edit',$farmer_records->id)}}"> Edit</a></td>
         <td> --}}
           <form method="DELETE" action="{{route('farmerrecords_destroy',$farmer_records->id)}}">
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