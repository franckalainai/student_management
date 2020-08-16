<?php

namespace App\Repositories;

use App\Models\Academic;
use App\Repositories\BaseRepository;

/**
 * Class AcademicRepository
 * @package App\Repositories
 * @version August 11, 2020, 8:51 pm UTC
*/

class AcademicRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'academic_year'
    ];

    protected $primaryKey = 'academic_id';

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
        return Academic::class;
    }
}
