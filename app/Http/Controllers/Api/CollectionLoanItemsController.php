<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\CollectionLoanItems;

class CollectionLoanItemsController extends Controller
{
    public $successStatus = 200;

    public function getColLoanItems()
    {
       $colloanitems = DB::table('collectionloanitems')->select('ID','CollectionLoan_id','LoanDate', 'DueDate', 'ActualReturn', 'LateDays', 'LoanStatus', 'Collection_id','member_id', 'CreateBy', 'UpdateBy')->get();

        //return view('some-view')->with('users', $users);
        return response()->json(['success' => $colloanitems], $this->successStatus);
    }
}
