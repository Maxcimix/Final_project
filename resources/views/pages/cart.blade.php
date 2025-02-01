@extends('layouts.app')

@section('title', 'Carrito de Compras')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Tu Carrito de Compras</h1>
    
    <div class="bg-white rounded-lg shadow-md p-6">
        @livewire('cart-items')
    </div>

    <div class="mt-8 text-right">
        <a href="{{ route('checkout') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
            Proceder al pago
        </a>
    </div>
</div>
@endsection