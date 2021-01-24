<?php

namespace App\Exports;

use App\Exports;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromArray;
use Illuminate\Support\Facades\DB;

class UsersExport implements FromArray
{
    public function array() : array
    {
        $user = Auth::user();
        
        return [
            ["User Data"], 
            ["id"     , "name"     , "email"     , "email_verified_at"     , "created_at", "updated_at"], 
            [$user->id, $user->name, $user->email, $user->email_verified_at, $user->created_at, $user->updated_at],
      
        ];
    }
}