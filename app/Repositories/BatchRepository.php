<?php

namespace App\Repositories;

use App\Models\Batch;
use App\Repositories\BaseRepository;

/**
 * Class BatchRepository
 * @package App\Repositories
 * @version August 11, 2020, 8:25 pm UTC
*/

class BatchRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'year'
    ];

    protected $primaryKey = 'batch_id';

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
        return Batch::class;
    }
}
