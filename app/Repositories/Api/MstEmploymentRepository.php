<?php
namespace App\Repositories\Api;

use App\Repositories\BaseRepository;
use App\Model\MstEmployment;

class MstEmploymentRepository extends BaseRepository {
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return MstEmployment::class;
    }
}