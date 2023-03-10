<div>
    <table class="table-auto w-full">
        <thead>
        <tr>
            <th class="px-4 py-2">Item</th>
            <th class="px-4 py-2">Status</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @if($list->count() == 0)
            <tr>
                <td class="border px-4 py-2" colspan="3">No items found</td>
            </tr>
        @endif
        {{-- Show the items if only 'user_id', Auth::user()->id are same--}}
        @foreach ($list as $item)
            @if($item->user_id == Auth::user()->id)
                <tr @if($loop->even)class="bg-grey"@endif>
                    <td class="border px-4 py-2">{{ $item->description }}</td>
                    <td class="border px-4 py-2">@if($item->done)Done @else To Do @endif</td>
                    <td class="border px-4 py-2">
                        @if($item->done)
                            <button wire:click="markAsToDo({{ $item->id }})" class="bg-red-100 text-red-600 px-6 rounded-full">
                                Mark as "To Do"
                            </button>
                        @else
                            <button wire:click="markAsDone({{ $item->id }})" class="bg-gray-800 text-white px-6 rounded-full">
                                Mark as "Done"
                            </button>
                        @endif
    
                        <button wire:click="deleteItem({{ $item->id }})" class="bg-red-100 text-red-600 px-6 rounded-full">
                            Delete Permanently
                        </button>
                    </td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>

</div>

