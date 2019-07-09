<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Api\UsersRepository;
use App\Repositories\Api\MstAddressRepository;
use App\Repositories\Api\MstBusinessRepository;
use App\Repositories\Api\MstCareerRepository;
use App\Repositories\Api\MstCompanyRepository;
use App\Repositories\Api\MstEmploymentRepository;
use App\Repositories\Api\MstLevelRepository;

class AdminPageController extends Controller
{
    /**
     * UsersRepository
     */
    protected $usersRepository;
    protected $addressRepository;   
    protected $businessRepository;   
    protected $careerRepository;   
    protected $companyRepository;   
    protected $employmentRepository;   
    protected $levelRepository;   

    public function __construct(UsersRepository $usersRepository, 
                                MstAddressRepository $addressRepository, 
                                MstBusinessRepository $businessRepository, 
                                MstCareerRepository $careerRepository, 
                                MstCompanyRepository $companyRepository, 
                                MstEmploymentRepository $employmentRepository, 
                                MstLevelRepository $levelRepository)
    {
        $this->usersRepository = $usersRepository;
        $this->addressRepository = $addressRepository;
        $this->businessRepository = $businessRepository;
        $this->careerRepository = $careerRepository;
        $this->companyRepository = $companyRepository;
        $this->employmentRepository = $employmentRepository;
        $this->levelRepository = $levelRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $this->usersRepository->getAll();
        return view('admin/index', compact('users'));
    }
}
