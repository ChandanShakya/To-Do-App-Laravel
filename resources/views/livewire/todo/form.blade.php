<x-form-section submit="createItem">
    <x-slot name="title">
        {{ __('Create New To-Do Item') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Create a new item in your to-do list.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="description" value="{{ __('Item Description') }}" />
            <x-input id="description" type="text" class="mt-1 block w-full" wire:model.defer="description" autocomplete="description" />
            <x-input-error for="description" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-action-message>

        <x-button>
            {{ __('Save') }}
        </x-button>
    </x-slot>
</x-form-section>