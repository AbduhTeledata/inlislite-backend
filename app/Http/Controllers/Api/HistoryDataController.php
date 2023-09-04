<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\HistoryData;

class HistoryDataController extends Controller
{
    public $successStatus = 200;

    public function getHistoryData()
    {
       $history = DB::table('historydata')->select('ID','Action','TableName', 'IDRef', 'Note', 'CreatedBy', 'UpdateBy','Member_id')->get();

        //return view('some-view')->with('users', $users);
        return response()->json(['success' => $history], $this->successStatus);
    }
}
