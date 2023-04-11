<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function getAllCustomers(Request $request): View
    {
        $query = DB::table('customers')->where('name', 'LIKE', $request->input('name') . '%');
        if ($request->filled('email'))
        {
            $query = $query->where('email', '=', $request->input('email'));
        }
        if ($request->filled('phone'))
        {
            $query = $query->where('phone', '=', $request->input('phone'));
        }
        $query = $query->where('blocked', '=', $request->input('blocked'));
        return view('customer', [
            'customers' => $query->paginate(10)
        ]);
    }

    public function show($id): View
    {
        $customer = Customer::find($id);

        if (!$customer) {
            abort(404);
        }

        $addresses = $customer->addresses()->orderBy('created_at', 'desc')->get();

        return view('customers.show', compact('customer', 'addresses'));
    }
}

