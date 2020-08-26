<?php

namespace App\Repositories;

use App\Models\Admision;
use App\Repositories\BaseRepository;

/**
 * Class AdmisionRepository
 * @package App\Repositories
 * @version August 11, 2020, 9:00 pm UTC
*/

class AdmisionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'student_id',
        'first_name',
        'last_name',
        'father_name',
        'father_phone',
        'mother_name',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'current_address',
        'nationality',
        'passport',
        'status',
        'dateregistered',
        'user_id',
        'class_id',
        'image'
    ];

    protected $primaryKey = 'student_id';



    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Admision::class;
    }
}
