@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="page-title">Result</h3>
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($results) > 0 ? 'datatable' : '' }}">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Date</th>
                        <th>Result</th>
                    </tr>
                </thead>

                <tbody>
                    @if (count($results) > 0)
                        @foreach ($results as $result)
                            <tr>
                                <td>{{ $result->user->name }} ({{ $result->user->email}})</td>
                                <td>{{ $result->created_at }}</td>
                                <td>{{ $result->result }}/ {{ $questions->count() }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">No data found</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop
