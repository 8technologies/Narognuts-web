@extends('layouts.app')

@section('content')

<h1>Registered Users</h1>

<a  class="btn btn-dark" href = "{{route('user_create')}}"> AddUser</a>
<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="case-models-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>FirstName</th>
                <th>LastName</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
    <tbody>
    @forelse ($users as $users)
    <tr>
        <td>{{ $users->id }}</td>
        <td>{{ $users->FirstName}}</td>
        <td>{{ $users->LastName }}</td>
        <td>{{ $users->email }}</td>
        @foreach ($users->getDirectPermissions() as $permission)
        <span class="badge text-sm bg-info text-dark">{{$permission->id}}</span>
            
        @endforeach
         <td><a class="btn btn-info" href = "{{route('user_edit',$users->id)}}"> Edit</a></td>
        
         <td><a class="btn btn-danger" href = "{{route('user_edit',$users->id)}}"> reject</a></td>
         <td><a class="btn btn-outline-primary" href = "{{route('user_edit',$users->id)}}"> Accept</a></td>
          <td>
           <form method="DELETE" action="{{route('user_destroy',$users->id)}}">
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