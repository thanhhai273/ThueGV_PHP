@extends('layouts.app')
@section('content')
<div class='container'>
    @foreach($products as $product)
    <div class='row'>
        <div class='col-md-4'>
            <img src="{{ $product->link }}" class="img-fluid img-thumbnail" style="height:200px; width:200px" alt="Avatar">
        </div>
        <div class='col-md-8'>
            <h1>{{ $product->name }}</h1>
        </div>
    </div>
    @endforeach
</div>
@endsection