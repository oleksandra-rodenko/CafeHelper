<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * Class ClientsEntity
 * @package App\Models\Entities
 *
 * @property int $id
 * @property int $order_id
 * @property int $client_id
 * @property int $product_id
 * @property int $amount
 * @property float $price
 * @property string $description
 * @property int $warehouse_id
 * @property int $creator_id
 * @property int $updater_id
 * @property string $created_at
 * @property string $updated_at
 *
 */

class RealizationsEntity extends Model
{
    protected $table = 'realization';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'client_id',
        'product_id',
        'amount',
        'price',
        'warehouse_id',
        'description',
        'creator_id',
        'updater_id',
    ];

    public function creator(): HasOne
    {
        return $this->hasOne(UserEntity::class, 'id', 'creator_id');
    }
}
