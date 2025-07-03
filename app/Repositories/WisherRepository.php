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

            $wishlist = new Wishlist([
                'title' => $data['title'],
                'description' => $data['description'] ?? null,
            ]);
            $wishlist->wisher()->associate($wisher);
            $wishlist->save();

            return $wisher;
        });
    }

    public function updateWithWishlist(array $data, int $id): Wisher
    {
        return DB::transaction(function () use ($data, $id) {
            $wisher = $this->find($id);

            $wisher->update([
                'name' => $data['name'],
                'phone_no' => $data['phone_no'],
                'addr1' => $data['addr1'],
                'addr2' => $data['addr2'] ?? null,
                'addr3' => $data['addr3'] ?? null,
                'postcode' => $data['postcode'],
                'city' => $data['city'],
                'state' => $data['state'],
            ]);

            $wishlist = $wisher->wishlist()->first();
            if ($wishlist) {
                $wishlist->update([
                    'title' => $data['title'],
                    'description' => $data['description'] ?? null,
                ]);
            } else {
                $wishlist = new Wishlist([
                    'title' => $data['title'],
                    'description' => $data['description'] ?? null,
                ]);
                $wishlist->wisher()->associate($wisher);
                $wishlist->save();
            }

            return $wisher;
        });
    }
}
