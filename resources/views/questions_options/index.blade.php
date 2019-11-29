@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <h3 class="page-title">Question's Answer</h3>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($questions_options) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;">Sr. No.</th>
                        <th>Question</th>
                        <th>Options</th>
                        <th>Correct Option</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($questions_options) > 0)
                        @foreach ($questions_options as $index => $questions_option)
                            <tr data-entry-id="{{ $questions_option->id }}">
                                <td>{{ $index+1 }}</td>
                                <td>{{ $questions_option->question->question_text}}</td>
                                <td>{{ $questions_option->option }}</td>
                                <td>{{ $questions_option->correct == 1 ? 'Yes' : 'No' }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="5">No data found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop