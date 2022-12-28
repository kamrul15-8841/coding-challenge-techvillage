@extends('master')

@section('title')
    Home Page
@endsection
@section('body')

    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Home Page</h3>
                </div>
                <div class="card-body table-responsive">
                    <div class="card-body">
                        <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                        <table id="courseTable" class="table table-hover table-striped w-100 nowrap">
                            <thead>
                            <tr>
                                <th>SI NO</th>
                                <th>Mark</th>
                                <th>Subject</th>
                                <th>Student ID</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($results as $result)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$result->mark}}</td>
                                    <td>{{$result->subject}}</td>
                                    <td>{{$result->student_id}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <span>
                        <a href="{{route('highest.mark')}}" class="btn btn-info float-end">Get third highest mark</a>
                    </span>
                    <h3 class="text-center">Third Highest Mark</h3>
                </div>
                <div class="card-body table-responsive">
                    <div class="card-body">
                        <h3 class="text-center text-info">{{Session::has('message') ? Session::get('message') : ''}}</h3>
                        <table id="courseTable" class="table table-hover table-striped w-100 nowrap">
                            <thead>
                            <tr>
                                <th>SI NO</th>
                                <th>Mark</th>
                                <th>Subject</th>
                                <th>Student ID</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($marks as $mark)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$mark->mark}}</td>
                                    <td>{{$mark->subject}}</td>
                                    <td>{{$mark->student_id}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

