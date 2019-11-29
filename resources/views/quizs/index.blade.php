@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h3 class="page-title">Quiz List</h3>
        </div>
        <div class="col-md-3">
            <a style="float: right;" href="{{ route('quizs.create') }}" class="btn btn-success">Add</a>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($quizs) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Title</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($quizs) > 0)
                        @foreach ($quizs as $index => $topic)
                            <tr data-entry-id="{{ $topic->id }}">
                                <td>{{$index+1}}</td>
                                <td>{{ $topic->title }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3">No data found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop