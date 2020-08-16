<?php

namespace App\Repositories;

use App\Models\semesters;
use App\Repositories\BaseRepository;

/**
 * Class semestersRepository
 * @package App\Repositories
 * @version August 15, 2020, 5:36 pm UTC
*/

class semestersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'semester_name',
        'semester_code',
        'semester_duration',
        'semester_description'
    ];

    protected $primaryKey = 'semester_id';

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
        return semesters::class;
    }
}
