<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class scorder
 * @package App\Models
 * @version March 15, 2026, 5:51 pm UTC
 *
 * @property string $order_number
 * @property string $customer_name
 * @property string $customer_email
 * @property number $total_price
 * @property string $status
 */
class scorder extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'scorders';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'order_number',
        'customer_name',
        'customer_email',
        'total_price',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'order_number' => 'string',
        'customer_name' => 'string',
        'customer_email' => 'string',
        'total_price' => 'decimal:2',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'order_number' => 'required',
        'customer_name' => 'required',
        'customer_email' => 'required|email',
        'total_price' => 'required|numeric',
        'status' => 'required'
    ];

    
}
