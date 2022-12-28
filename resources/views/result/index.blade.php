@extends('master')

@section('title')
    Manage result
@endsection

@section('body')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="float-start">Manage result </h3>
                    <span>
                        <a href="{{route('results.create')}}" class="btn btn-info float-end">Create</a>
                    </span>
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
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$result->mark}}</td>
                                <td>{{$result->subject}}</td>
                                <td>{{$result->student_id}}</td>
                                <td>

                                    <a href="{{ route('results.edit', $result->id) }}" class="btn btn-md btn-warning" title="Edit Course" style="display: inline-block">
                                        Edit
                                    </a>

                                    <form action="{{ route('results.destroy', $result->id) }}" method="post" style="display: inline-block">
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




