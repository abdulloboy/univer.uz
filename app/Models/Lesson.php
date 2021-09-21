<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Lesson
 * @package App\Models
 * @version September 21, 2021, 9:16 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $schedules
 * @property string $name
 */
class Lesson extends Model
{


    public $table = 'lessons';
    



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
