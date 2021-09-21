<?php

namespace App\Models;

use Eloquent as Model;



/**
 * Class Schedule
 * @package App\Models
 * @version September 21, 2021, 9:14 am UTC
 *
 * @property \App\Models\Group $group
 * @property \App\Models\Lesson $lesson
 * @property \App\Models\Room $room
 * @property \App\Models\User $user
 * @property string $begins_at
 * @property string $ends_at
 * @property integer $group_id
 * @property integer $lesson_id
 * @property integer $room_id
 * @property integer $user_id
 */
class Schedule extends Model
{


    public $table = 'schedules';
    



    public $fillable = [
        'begins_at',
        'ends_at',
        'group_id',
        'lesson_id',
        'room_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'group_id' => 'integer',
        'lesson_id' => 'integer',
        'room_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function group()
    {
        return $this->belongsTo(\App\Models\Group::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function lesson()
    {
        return $this->belongsTo(\App\Models\Lesson::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function room()
    {
        return $this->belongsTo(\App\Models\Room::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }
}
