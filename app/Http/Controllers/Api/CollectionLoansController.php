<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Collectionloans;

class CollectionLoansController extends Controller
{
    public $successStatus = 200;

    public function getColLoans()
    {
       $colloans = DB::table('collectionloans')->select('ID','CollectionCount','LateCount', 'ExtendCount', 'LoanCount', 'ReturnCount', 'Member_id', 'Branch_id', 'LocationLibrary_id')->get();

        //return view('some-view')->with('users', $users);
        return response()->json(['success' => $colloans], $this->successStatus);
    }
}
