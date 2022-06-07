@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ ('product Detail') }}
 </div>
 <div class="card-body">
 id : {{ $product->id }}
 <br>
name : {{ $product->name }}
 <br>
 <br>
 unit : {{ $product->unit }}
 <br>
 <br>
 quantity: {{ $product->quantity }}
 <br>
 <br>
 price : {{ $product->price }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('product/list') }}" role="button"> {{ ('Back') }}</a>
 </div>
</div>
@endsection