@extends('master')

@section('title')
    Manage User
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Manage User </h3>
                    <span>
                        <a href="{{route('users.create')}}" class="btn btn-info float-end">Create</a>
                    </span>
                </div>
                <div class="card-body table-responsive">
                <div class="card-body">
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                        <table id="courseTable" class="table table-hover table-striped w-100 nowrap">
                        <thead>
                        <tr>
                            <th>SI NO</th>
                            <th>User ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$user->uuid}}</td>
                                <td>{{$user->first_name}}</td>
                                <td>{{$user->last_name}}</td>
                                <td>{{$user->email}}</td>
                                <td>

                                    <a href="{{ route('users.edit', $user->uuid) }}" class="btn btn-md btn-warning" title="Edit Course" style="display: inline-block">
                                        Edit
                                    </a>

                                    <form action="{{ route('users.destroy', $user->uuid) }}" method="post" style="display: inline-block">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-sm btn-danger "  onclick="return confirm('Are you sure you want to delete this');" title="Delete Course">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection




