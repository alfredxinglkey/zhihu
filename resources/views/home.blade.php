@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            @include('shared._create_post')
            @include('posts._post')
        </div>

        <div class="col-md-3">
            @include('shared._aside')
        </div>
    </div>
</div>
@endsection
