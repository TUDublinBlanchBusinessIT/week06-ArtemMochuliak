<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class orderdetail
 * @package App\Models
 * @version March 15, 2026, 5:51 pm UTC
 *
 * @property integer $order_id
 * @property integer $product_id
 * @property integer $quantity
 * @property number $price
 */
class orderdetail extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'orderdetails';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order_id' => 'integer',
        'product_id' => 'integer',
        'quantity' => 'integer',
        'price' => 'decimal:2'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order_id' => 'required',
        'product_id' => 'required',
        'quantity' => 'required|numeric',
        'price' => 'required|numeric'
    ];

    
}
