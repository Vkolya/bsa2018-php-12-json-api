<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Entity\Wallet;
use App\Entity\User;
use App\Entity\Currency;
use App\Requests\CreateWalletRequest;


class WalletService implements WalletServiceInterface
{
    public function findByUser(int $userId): ?Wallet
    {
        if($user = User::find($userId)) {
            return $user->wallet;
        }
        return null;
    }

    public function create(CreateWalletRequest $request): Wallet
    {
       
        $user = User::find($request->getUserId());
        
        if(empty($user->wallet)) {
            $wallet = new Wallet();
            $user->wallet()->save($wallet);
            return $wallet;
        }else {
            throw new \LogicException("Wallet already exists!");
        }
    }

    public function findCurrencies(int $walletId): Collection
    {
        $currencies = Currency::join('money', 'currency.id', '=', 'money.currency_id')->select('currency.*')->get();
        return $currencies;
    }
}