<?php
namespace App\Repositories\Api;

use App\Repositories\BaseRepository;
use App\Model\MstLevel;

class MstLevelRepository extends BaseRepository {
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return MstLevel::class;
    }
}