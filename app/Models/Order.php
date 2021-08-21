<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public const PAYMENT_STATUS_SELECT = [
        'accepted' => 'accepted',
        'rejected' => 'rejected',
    ];

    public const STATUS_SELECT = [
        'pending'                 => 'Pending',
        'accepted'                => 'Accepted',
        'delivered'               => 'Delivered',
        'cancelled'               => 'Cancelled',
        'shippedAwaitingDelivery' => 'shippedAwaitingDelivery',
    ];

    public const GROUP_SELECT = [
        'price_group_1' => 'group 1',
        'price_group_2' => 'group 2',
        'price_group_3' => 'group 3',
        'price_group_4' => 'group 4',
        'price_group_5' => 'group 5',
        'price_group_6' => 'group 6',
    ];

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'fname',
        'lname',
        'group',
        'username',
        'email',
        'orderid',
        'payment',
        'payment_status',
        'status',
        'street_1',
        'city',
        'state',
        'country',
        'zip',
        'phone',
        'total_cost',
        'date',
        'notes',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
