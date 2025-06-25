<?php

namespace App\Repositories;

use App\Models\Wisher;
use App\Models\Wishlist;
use App\Repositories\BaseRepository;

use Illuminate\Support\Facades\DB;

class WisherRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Wisher::class;
    }

    public function getWishers()
    {
        return Wisher::all();
    }

    public function count()
    {
        return Wisher::count();
    }

    public function getWisherByUser()
    {
        return Wisher::where('user_id', auth()->id())->latest()->first();
    }

    public function createWithWishlist(array $data): Wisher
    {
        return DB::transaction(function () use ($data) {
            // 1. If wisher_id is given, fetch existing
            if (!empty($data['wisher_id'])) {
                $wisher = $this->find($data['wisher_id']);
            } else {
                // 2. Otherwise, create new Wisher
                $wisher = $this->create([
                    'user_id' => $data['user_id'],
                    'name' => $data['name'],
                    'phone_no' => $data['phone_no'],
                    'addr1' => $data['addr1'],
                    'addr2' => $data['addr2'] ?? null,
                    'addr3' => $data['addr3'] ?? null,
                    'postcode' => $data['postcode'],
                    'city' => $data['city'],
                    'state' => $data['state'],
                ]);
            }

            // 3. Create associated wishlist
            $wishlist = new Wishlist([
                'title' => $data['title'],
                'description' => $data['description'] ?? null,
            ]);

            $wishlist->wisher()->associate($wisher);
            $wishlist->save();

            return $wisher;
        });
    }
}
