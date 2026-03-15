<?php

namespace App\Repositories;

use App\Models\scorder;
use App\Repositories\BaseRepository;

/**
 * Class scorderRepository
 * @package App\Repositories
 * @version March 15, 2026, 5:51 pm UTC
*/

class scorderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
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
        return scorder::class;
    }
}
