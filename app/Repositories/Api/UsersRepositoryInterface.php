<?php
namespace App\Repositories\Api;

use Illuminate\Http\Request;

interface UsersRepositoryInterface {
    public function search(Request $request);
}
?>