<?php

namespace App\Actions\Fire;

use App\Events\FireDetectionEvent;
use App\Models\Fire;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;
use Kreait\Firebase\Exception\DatabaseException;

class FireAction
{
    public string $reference_table = 'location';

    public function __construct(public Request $inputs)
    {
        $this->inputs->validate([
            'latitude' => 'required',
            'longitude' => 'required',
            'altitude' => 'required',
            'location' => 'required',
        ]);
    }

    /**
     * @throws DatabaseException
     */
    public function store(): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Builder
    {
        $postData = [
            'latitude'=>$this->inputs['latitude'],
            'longitude'=>$this->inputs['longitude'],
            'altitude'=>$this->inputs['altitude'],
            'location'=>$this->inputs['location'],
        ];
        return Fire::query()->create($postData);
    }

    public function update($id): \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder|array|null
    {
        $postData = [
            'latitude'=>$this->inputs['latitude'],
            'longitude'=>$this->inputs['longitude'],
            'altitude'=>$this->inputs['altitude'],
            'location'=>$this->inputs['location'],
        ];
        $fire_local_data = Fire::query()->find($id);
        $fire_local_data->update($postData);
        return Fire::query()->find($id);
    }
}
