@extends('layouts.app')

@section('content')

<h1>Service Providers</h1>

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
    @forelse ($Service_provider_records as $Service_provider_records)
    <tr>
        <td>{{ $Service_provider_records->id }}</td>
        <td>{{ $Service_provider_records->FirstName}}</td>
        <td>{{ $Service_provider_records->LastName }}</td>
         <td><a class="btn btn-info" href = "{{route('serviceproviderrecords_edit',$Service_provider_records->id)}}"> Edit</a></td>
         <td>
            <form method="DELETE" action="{{route('serviceproviderrecords_destroy',$Service_provider_records->id)}}">
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