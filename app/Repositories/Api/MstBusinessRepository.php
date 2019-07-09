<?php
namespace App\Repositories\Api;

use App\Repositories\BaseRepository;
use App\Model\MstBusiness;

class MstBusinessRepository extends BaseRepository {
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return MstBusiness::class;
    }
}