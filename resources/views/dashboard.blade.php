@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard<span class="pull-right"><a href="/listings/create" class="btn btn-success btn-xs">Add Listing</a></span></div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <h3>Your Listings</h3>
                @if (count($listings))
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($listings as $listing)
                            <tr>
                                <td>{{ $listing->name }}</td>
                                <td><a class="pull-right btn btn-default" href="/listings/{{ $listing->id }}/edit">Edit</a></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </table>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
