<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workspace extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'location',
        'img_url',
        'price',
        'rating',
        // 'status',
        // 'features',
        'owner_id',
        // 'user_id',
        'city_id',
    ];

    protected $casts = [
        'img_url' => 'json',
        // 'features' => 'json',
    ];

    // Relation With Owner
    public function owner(){
        return $this->belongsTo(Owner::class);
    }

    // Relation With City
    public function city(){
        return $this->belongsTo(City::class);
    }

}
