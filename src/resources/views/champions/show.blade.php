@extends('champions.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Champion: {{ $champion->name }}</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('champions.edit',$champion->id) }}">Edit</a>
            <a class="btn btn-primary" href="{{ route('champions.index') }}"> Back</a>
            <form action="{{ route('champions.destroy',$champion->id) }}" method="POST" class="pull-right p-l">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>


<div class="row">
    @if(!empty($champion->image_url))
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <img class="img-thumbnail" src="{{ $champion->image_url }}">
        </div>
    </div>
    @endif
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $champion->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $champion->detail }}
        </div>
    </div>
</div>
@endsection