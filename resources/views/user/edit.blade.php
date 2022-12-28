@extends('master')

@section('title')
    Edit User
@endsection
@section('body')
    <div class="row py-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Edit User</h3>
                    <a href="{{route('users.index')}}" class="btn btn-info float-end">Manage</a>
                </div>
                <div class="card-body">
                    @foreach($errors->all() as $error)
                        <span class="text-danger text-center">{{ $error }}</span>
                        <br>
                    @endforeach
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <form method="POST" action="{{route('users.update' , $users->uuid)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mt-3">
                            <label for="" class="col-md-4">UUID</label>
                            <div class="col-md-8">
                                <input type="text" value="{{ $users->uuid }}" name="uuid" class="form-control">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-4">First Name</label>
                            <div class="col-md-8">
                                <input type="text" value="{{ $users->first_name }}" name="first_name" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">First Name</label>
                            <div class="col-md-8">
                                <input type="text" value="{{ $users->last_name }}" name="last_name" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="email" value="{{ $users->email }}" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Password</label>
                            <div class="col-md-8">
                                <input type="password" value="{{ $users->password }}" name="password" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-outline-info" value="Update User">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection






