<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Seller
 * @package App\Models
 */
class Seller extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    protected $fillable=[];
    /**
     * @var string
     */
    protected $table='sellers';
}
