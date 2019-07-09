<?php
namespace App\Repositories\Api;

use App\Repositories\BaseRepository;
use App\Model\MstAddress;

class MstAddressRepository extends BaseRepository {
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return MstAddress::class;
    }
}