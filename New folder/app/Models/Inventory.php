<?php

namespace App\Models;

use \DateTimeInterface;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Inventory extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasFactory;

    public const SALE_SELECT = [
        'off' => 'off',
        'on'  => 'on',
    ];

    public const PRODUCT_UNIT_WHOLSE_SELECT = [
        'pic' => 'pic',
        'box' => 'box',
    ];

    public const PRODUCT_UNIT_SELECT = [
        'pic'   => 'pic',
        'box'   => 'box',
        'liter' => 'liter',
    ];

    public $table = 'inventories';

    protected $appends = [
        'image',
        'gallery',
    ];

    protected $dates = [
        'start_sale_date_time',
        'end_sale_date_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'sku',
        'price',
        'inventory',
        'desc',
        'short_desc',
        'category_id',
        'product_unit',
        'box_quantity',
        'product_cost',
        'price_group_1',
        'price_group_2',
        'price_group_3',
        'price_group_4',
        'price_group_5',
        'price_group_6',
        'product_unit_wholse',
        'unit_qty',
        'items_per_unit',
        'sale',
        'discount',
        'start_sale_date_time',
        'end_sale_date_time',
        'howtouse',
        'youtube_link',
        'brand',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getImageAttribute()
    {
        $file = $this->getMedia('image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getGalleryAttribute()
    {
        $files = $this->getMedia('gallery');
        $files->each(function ($item) {
            $item->url = $item->getUrl();
            $item->thumbnail = $item->getUrl('thumb');
            $item->preview = $item->getUrl('preview');
        });

        return $files;
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function getStartSaleDateTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setStartSaleDateTimeAttribute($value)
    {
        $this->attributes['start_sale_date_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    public function getEndSaleDateTimeAttribute($value)
    {
        return $value ? Carbon::createFromFormat('Y-m-d H:i:s', $value)->format(config('panel.date_format') . ' ' . config('panel.time_format')) : null;
    }

    public function setEndSaleDateTimeAttribute($value)
    {
        $this->attributes['end_sale_date_time'] = $value ? Carbon::createFromFormat(config('panel.date_format') . ' ' . config('panel.time_format'), $value)->format('Y-m-d H:i:s') : null;
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
