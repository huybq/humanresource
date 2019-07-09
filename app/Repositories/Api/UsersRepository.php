<?php
namespace App\Repositories\Api;

use App\Repositories\BaseRepository;
use App\Model\Users;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersRepository extends BaseRepository implements UsersRepositoryInterface {
    
    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return Users::class;
    }

    /**
     * @Request | \Illuminate\Http\Request
     */
    public function search(Request $request) 
    {
        $name = $request->query('name');
        $email = $request->query('email');
        $page = $request->query('p');
        $query = DB::table('users as us')
                    ->select('us.id', 'us.name', 'us.email', 'add.city', 'add.district')
                    ->leftJoin('mst_address as add', function($join) {
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
        return response()->json($query->get());
    }
}