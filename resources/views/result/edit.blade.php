@extends('master')

@section('title')
    Edit Result
@endsection
@section('body')
    <div class="row py-3">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Edit Result</h3>
                    <a href="{{route('results.index')}}" class="btn btn-info float-end">Manage</a>
                </div>
                <div class="card-body">
                    @foreach($errors->all() as $error)
                        <span class="text-danger text-center">{{ $error }}</span>
                        <br>
                    @endforeach
                    <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                    <form method="POST" action="{{route('results.update', $result->id)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row mt-3">
                            <label for="" class="col-md-4">Mark</label>
                            <div class="col-md-8">
                                <input type="number" value="{{ $result->mark }}" name="mark" class="form-control">

                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Subject</label>
                            <div class="col-md-8">
                                <select name="subject"   class="form-control">
                                    <option >{{ $result->subject }}</option>
                                    <option >Bangla</option>
                                    <option >Math</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4">Student Id</label>
                            <div class="col-md-8">
                                <input type="text" value="{{ $result->student_id }}" name="student_id" class="form-control">
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-8">
                                <input type="submit"  class="btn btn-outline-info" value="Update Result">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection





