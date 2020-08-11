<?php

namespace App\Repositories;

use App\Models\ClassAssigning;
use App\Repositories\BaseRepository;

/**
 * Class ClassAssigningRepository
 * @package App\Repositories
 * @version August 11, 2020, 8:54 pm UTC
*/

class ClassAssigningRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'course_id',
        'level_id',
        'shift_id',
        'classroom_id',
        'batch_id',
        'day_id',
        'time_id'
    ];

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
        return ClassAssigning::class;
    }
}
