<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\Api\UsersRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Model\Users;

class UsersController extends Controller
{

    /**
     * @var UsersRepositoryInterface | \App\Repositories\Api\UsersRepositoryInterface
     */
    protected $usersRepository;

    /**
     * Constructer
     */
    public function __construct(UsersRepositoryInterface $usersRepository) 
    {
        $this->usersRepository = $usersRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = $this->usersRepository->getAll();
        return response()->json($users);
        //return view('welcome', compact('users', 'address'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = $this->usersRepository->create($request->all());
        return response()->json($user, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->usersRepository->find($id);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $result = $this->usersRepository->update($id, $request->all());
        if (!$result) {
            return response()->json(Response::$statusTexts[Response::HTTP_NOT_FOUND], Response::HTTP_NOT_FOUND);
        }
        return $result;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->usersRepository->delete($id);
        if (!$result) {
            return response()->json(Response::$statusTexts[Response::HTTP_NOT_FOUND], Response::HTTP_NOT_FOUND);
        }
        return $result;
    }

    /**
     * Search with param
     * @package Request $request
     */
    public function search(Request $request)
    {
        return $this->usersRepository->search($request);
    }
}
