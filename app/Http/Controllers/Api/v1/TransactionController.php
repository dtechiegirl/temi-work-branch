<?php

namespace App\Http\Controllers\Api\v1;

//use App\Http\Requests\StoreCustomerRequest;
//use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Transaction;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Transaction::all();
    }

}
