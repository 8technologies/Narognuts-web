@extends('layouts.app')

@section('content')

<h1>Multipliers</h1>

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
    @forelse ($multiplier_records as $multiplier_records)
    <tr>
        <td>{{ $multiplier_records->id }}</td>
        <td>{{ $multiplier_records->FirstName}}</td>
        <td>{{ $multiplier_records->LastName }}</td>
         <td><a href = "{{route('multiplierrecords_edit',$multiplier_records->id)}}"> Edit</a></td>
         <td>
            <form method="DELETE" action="{{route('multiplierrecords_destroy',$multiplier_records->id)}}">
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