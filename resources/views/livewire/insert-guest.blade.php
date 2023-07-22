<div>

    
        <x-dialog-modal wire:model='display'>
            <x-slot name='title'> Wiiiiii</x-slot>
            <x-slot name='content'>
                <h1>You're the love of my life</h1>
            </x-slot>
            <x-slot name='footer'>
                <button wire:click="$set('display', false)" type="button" class="btn btn-secondary">Cerrar</button>
            </x-slot>
        </x-dialog-modal>
</div>
