<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CountAddress extends Command
{
    protected $signature = 'customer:count-addresses {customerId}';

    protected $description = 'Number of customers addresses';

    public function handle():void
    {
        $customerId = $this->argument('customerId');
        $customer = Customer::find($customerId);
        if($customer !== null)
        {
            $count= DB::table('addresses')->where('customer_id','=',$customerId)->count();
            $this->info($count);
        } else {
            $this->info('There is no such customer');
        }
    }
}
