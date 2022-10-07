@extends('champions.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>League Champions</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('champions.create') }}"> Add Champion</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div class="container">
    <div class="row imagetiles">
        @foreach ($champions as $champion)
        <div class="col-lg-3 col-md-3 col-sm col-xs-6 text-center card-block">
            <a href="{{ route('champions.show',$champion->id) }}" class="btn">
            <img src="{{ $champion->image_url }}" class="img-responsive">
            <div class="card-title">{{ $champion -> name }}</div>
            </a>
        </div>

        @endforeach
    </div>
</div>

{!! $champions->links() !!}

@endsection