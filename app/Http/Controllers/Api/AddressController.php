<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Model\Address;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    public function __construct() 
    {
        
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $address = Address::all();
        //return response()->json($address, Response::HTTP_OK);
        return $address;
    }

    public function search(Request $request) {
        $name = $request->query('name');
        $email = $request->query('email');
        $page = $request->query('p');
        $query = DB::table('users as us')
                    ->select('us.id', 'us.name', 'us.email', 'add.city', 'add.district')
                    ->leftJoin('address as add', function($join) {
                        $join->on('us.id', '=', 'add.id');
                             //-> where('add.id', 1);
                    });
        if (!is_null($name)) {
            $query->where('us.name', 'like', '%'.$name.'%');
        }
        if (!is_null($email)) {
            $query->where('us.email', 'like', '%'.$email.'%');
        }
        
        $query->orderBy('us.id','desc');
        //$query->limit(5)->offset(0);
        return response()->json($query->get());
    }
}
