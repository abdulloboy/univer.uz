<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Room
 * @package App\Models
 * @version September 21, 2021, 9:17 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $schedules
 * @property string $name
 */
class Room extends Model
{


    public $table = 'rooms';
    



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function schedules()
    {
        return $this->hasMany(\App\Models\Schedule::class);
    }
}
