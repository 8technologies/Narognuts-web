@extends('layouts.app')

@section('content')

<h1>Registered Users</h1>

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
    @forelse ($users as $users)
    <tr>
        <td>{{ $users->id }}</td>
        <td>{{ $users->FirstName}}</td>
        <td>{{ $users->LastName }}</td>
         <td><a href = "{{route('gardenreg_edit',$users->id)}}"> Edit</a></td>
         {{-- <td>
           <form method="DELETE" action="{{route('farmerRecords_destroy',$farmer_records->id)}}">
                @csrf
                 @method('DELETE') 
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td> --}}
    </tr>

    @empty
    <p> No Records Found</p>

    @endforelse

        </tbody>
    </table>
</div>

@endsection