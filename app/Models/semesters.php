<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class semesters
 * @package App\Models
 * @version August 15, 2020, 5:36 pm UTC
 *
 * @property string $semester_name
 * @property string $semester_code
 * @property string $semester_duration
 * @property string $semester_description
 */
class semesters extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'semester_id';

    public $table = 'semesters';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'semester_name',
        'semester_code',
        'semester_duration',
        'semester_description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'semester_name' => 'string',
        'semester_code' => 'string',
        'semester_duration' => 'string',
        'semester_description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'semester_name' => 'required|string|max:255',
        'semester_code' => 'required|string|max:255',
        'semester_duration' => 'required|string|max:255',
        'semester_description' => 'required|string',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
