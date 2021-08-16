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

    public $table = 'orders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'orderid',
        'payment',
        'payment_status',
        'status',
        'total_cost',
        'street_1',
        'city',
        'state',
        'country',
        'zip',
        'phone',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
