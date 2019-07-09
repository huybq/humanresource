<?php
namespace App\Repositories\Api;

use App\Repositories\BaseRepository;
use App\Model\MstCareer;

class MstCareerRepository extends BaseRepository {
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return MstCareer::class;
    }
}