<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateWizardRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            // Wisher Validation
            'user_id' => 'required|exists:users,id',
            'name' => 'required|string|max:255',
            'phone_no' => 'required|string|max:255',
            'addr1' => 'required|string|max:255',
            'addr2' => 'nullable|string|max:255',
            'addr3' => 'nullable|string|max:255',
            'postcode' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',

            // Wishlist Validation
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:65535',

            // Wishlist Item Validation
            'wishlist_items' => 'required|array',
            'wishlist_items.*.inventory_id' => 'required|exists:inventories,id',
            'wishlist_items.*.status_id' => 'nullable|exists:statuses,id',
        ];
    }
}
