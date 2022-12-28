@extends('master')

@section('title')
    Create User
@endsection
@section('body')
    <div class="row py-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Add User</h3>
                    <a href="{{route('users.index')}}" class="btn btn-info float-end">Manage</a>
                </div>
                <div class="card-body">
                    @foreach($errors->all() as $error)
                        <span class="text-danger text-center">{{ $error }}</span>
                        <br>
                    @endforeach
                    {{--                    <h3 class="text-center text-info">{{Session::get('message')}}</h3>--}}
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mt-3">
                            <label for="" class="col-md-4">First Name</label>
                            <div class="col-md-8">
                                <input type="text" name="first_name" class="form-control">
{{--                                @error('title') <span class="text-danger">{{ $errors->first('') }}</span> @enderror--}}

                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Last Name</label>
                            <div class="col-md-8">
                                <input type="text" name="last_name" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Email</label>
                            <div class="col-md-8">
                                <input type="email" name="email" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Password</label>
                            <div class="col-md-8">
                                <input type="password" name="password" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-outline-info" value="Create User">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection





