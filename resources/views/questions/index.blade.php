@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-9">
            <h3 class="page-title">Questions List</h3>
        </div>
        <div class="col-md-3">
            <a style="float: right;" href="{{ route('questions.create') }}" class="btn btn-success">Add</a>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($questions) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;">#</th>
                        <th>Quiz</th>
                        <th>Question Text</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($questions) > 0)
                        @foreach ($questions as $index => $question)
                            <tr data-entry-id="{{ $question->id }}">
                                <td>{{ $index+1 }}</td>
                                <td>{{ $question->topic->title }}</td>
                                <td>{!! $question->question_text !!}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">No data found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop