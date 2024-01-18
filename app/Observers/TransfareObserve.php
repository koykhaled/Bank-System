<?php

namespace App\Observers;

use App\Models\Customer;

class TransfareObserve
{
    //

    public function transfare(Customer $from, Customer $to, $amount)
    {
        if ($from->balance < $amount) {
            throw new \Exception('Insufficient balance');
        }

        dd($from->balance);

        $from->balance -= $amount;
        $from->save();

        $to->balance += $amount;
        $to->save();
    }
}