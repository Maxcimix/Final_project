<div>
    @foreach($items as $item)
        <div class="cart-item">
            <img src="{{ $item->product->image }}" alt="{{ $item->product->name }}">
            <h3>{{ $item->product->name }}</h3>
            <p>{{ $item->product->price }}</p>
            <button wire:click="removeFromCart({{ $item->id }})">Eliminar</button>
        </div>
    @endforeach
</div>