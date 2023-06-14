@extends('layouts.master')



@section('content')


@foreach ($products as $product)


<div class="col-md-6">
 <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
   <div class="col p-4 d-flex flex-column position-static">
     <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
     <h5 class="mb-0">{{ $product->title }}</h5>
     <div class="mb-1 text-body-secondary">{{ $product->created_at->format('d/m/Y') }}</div>
     <p class="mb-auto">{{ $product->subtitle }}</p>
     <strong class="mb-auto">{{ $product->getPrice() }}</strong>
     <a href="{{  route('products.show', $product->slug)  }}" class="icon-link gap-1 icon-link-hover stretched-link  btn btn-info">
       Voir l'article
       <svg class="bi"><use xlink:href="#chevron-right"/></svg>
     </a>
   </div>
   <div class="col-auto d-none d-lg-block">
     <img src="{{ $product->image }}" alt="" srcset="">
   </div>
 </div>
</div>
    
@endforeach
    
@endsection