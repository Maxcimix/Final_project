<div x-data="{ cartOpen: false }" class="relative">
    <button @click="cartOpen = !cartOpen" class="flex items-center">
        <span class="ml-2">{{ $count }}</span>
    </button>
</div>