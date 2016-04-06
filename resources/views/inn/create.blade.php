@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add inn</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form id="innForm" action="/inns" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="description">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="detail">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection