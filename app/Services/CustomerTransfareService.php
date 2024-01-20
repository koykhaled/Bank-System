<?php
namespace App\Services;


class CustomerTransfareService
{
    public function applyTransfare($from, $to, $amount)
    {

        if ($from->balance < $amount) {
            notify()->error('Insufficient balance', 'Transfared Failed');
            return to_route('customers.transfares.create', $from->id);
        }
        $transfare = $from->transfares()->create([
            'to' => $to->account,
            'amount' => $amount
        ]);
        $from->balance -= $amount;
        $from->save();

        $to->balance += $amount;
        $to->save();

        return $transfare;
    }
}