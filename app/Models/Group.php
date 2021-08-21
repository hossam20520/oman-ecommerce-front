<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public const GROUP_SELECT = [
        'price_group_1' => 'Group 1',
        'price_group_2' => 'Group 2',
        'price_group_3' => 'Group 3',
        'price_group_4' => 'Group 4',
        'price_group_5' => 'Group 5',
        'price_group_6' => 'Group 6',
    ];

    public $table = 'groups';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'group',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
