<?php
namespace App\Repositories\Api;

use App\Repositories\BaseRepository;
use App\Model\MstCompany;

class MstCompanyRepository extends BaseRepository {
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return MstCompany::class;
    }
}