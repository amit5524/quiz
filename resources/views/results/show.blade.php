@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="page-title">Result</h3>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        
                        <tr>
                            <th>User</th>
                            <td>{{ $test->user->name }} ({{ $test->user->email }})</td>
                        </tr>
                        
                        <tr>
                            <th>Result</th>
                            <td>{{ $test->result }}/ {{$questions->count()}}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <a href="{{ route('tests.index') }}" class="btn btn-default">Take Another Quiz</a>
            <a href="{{ route('results.index') }}" class="btn btn-default">See Results</a>
        </div>
    </div>
</div>
@stop
