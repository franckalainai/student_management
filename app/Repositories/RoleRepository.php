<?php

namespace App\Repositories;

use App\Models\Role;
use App\Repositories\BaseRepository;

/**
 * Class RoleRepository
 * @package App\Repositories
 * @version August 11, 2020, 9:03 pm UTC
*/

class RoleRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];


    protected $primaryKey = 'role_id';

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
        return Role::class;
    }
}
