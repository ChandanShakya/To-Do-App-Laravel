<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{

    public function edit(TodoItem $item)
    {
        // Authorize user's access to edit the item
        $this->authorize('update', $item);

        return view('items.edit', compact('item'));
    }
}
