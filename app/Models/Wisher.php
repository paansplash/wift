<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisher extends Model
{
    public $table = 'wishers';

    public $fillable = [
        'user_id',
        'name',
        'phone_no',
        'addr1',
        'addr2',
        'addr3',
        'postcode',
        'city',
        'state'
    ];

    protected $casts = [
        'name' => 'string',
        'phone_no' => 'string',
        'addr1' => 'string',
        'addr2' => 'string',
        'addr3' => 'string',
        'postcode' => 'string',
        'city' => 'string',
        'state' => 'string'
    ];

    public static array $rules = [
        'user_id' => 'required',
        'name' => 'required|string|max:255',
        'phone_no' => 'required|string|max:255',
        'addr1' => 'required|string|max:255',
        'addr2' => 'nullable|string|max:255',
        'addr3' => 'nullable|string|max:255',
        'postcode' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    
}
