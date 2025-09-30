<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Pilot extends Model
{
    /**
     * ITEM ATTRIBUTES
     * $this->attributes['id'] - int - contains the item primary key (id)
     * $this->attributes['name'] - string - contains the pilot's name
     * $this->attributes['origin'] - string - contains the pilot's origin city
     * $this->attributes['nitro'] - int - contains the pilot's nitro level
     * $this->attributes['created_at'] - timestamp - contains the pilot creation date
     * $this->attributes['updated_at'] - timestamp - contains the pilot last update date
     */
    public static function validate(Request $request): void
    {
        $request->validate([
            'name' => 'required',
            'origin' => 'required',
            'nitro' => 'required|integer|gt:0',
        ]);
    }

    protected $fillable = ['name', 'origin', 'nitro'];

    public function getId(): int
    {
        return $this->attributes['id'];
    }

    public function getName(): string
    {
        return $this->attributes['name'];
    }

    public function getOrigin(): string
    {
        return $this->attributes['origin'];
    }

    public function getNitro(): int
    {
        return $this->attributes['nitro'];
    }

    public function getCreated_at(): string
    {
        return $this->attributes['created_at'];
    }

    public function getUpdated_at(): string
    {
        return $this->attributes['updated_at'];
    }

    public function setName(string $name): void
    {
        $this->attributes['name'] = $name;
    }

    public function setOrigin(string $origin): void
    {
        $this->attributes['origin'] = $origin;
    }

    public function setNitro(int $nitro): void
    {
        $this->attributes['nitro'] = $nitro;
    }
}
