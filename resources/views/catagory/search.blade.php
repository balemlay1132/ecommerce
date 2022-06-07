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
 product : {{ $product->name }}
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