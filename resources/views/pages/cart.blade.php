@extends('layouts.app')

@section('title', 'Carrito - Square1')

@section('content')
    <h1>Tu Carrito</h1>
    @if(count($cart) > 0)
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $details)
                    <tr>
                        <td>
                            <img src="{{ asset('images/' . $details['image']) }}" alt="{{ $details['name'] }}" width="100">
                            {{ $details['name'] }}
                        </td>
                        <td>{{ $details['quantity'] }}</td>
                        <td>{{ $details['price'] }} €</td>
                        <td>{{ $details['price'] * $details['quantity'] }} €</td>
                        <td>
                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="cart-total">
            <h2>Total: {{ $total }} €</h2>
            <a href="#" class="btn btn-primary">Proceder al Pago</a>
        </div>
    @else
        <p>Tu carrito está vacío.</p>
    @endif
@endsection