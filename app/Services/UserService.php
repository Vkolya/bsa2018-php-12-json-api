<?php

namespace App\Services;

use Illuminate\Support\Collection;
use App\Entity\User;
use App\Requests\SaveUserRequest;

class UserService implements UserServiceInterface
{
    public function findAll(): Collection
    {
        return User::all();
    }

    public function findById(int $id): ?User
    {
        return User::find($id);
    }

    public function save(SaveUserRequest $request): User
    {
         
        if(empty($request->getId())){
            $user = new User();
            $user->id = $request->getId();
        }else{
            $user = User::find($request->getId());
        }
        $user->name = $request->getName();
        $user->email = $request->getEmail();
        $user->save();
        
        return $user;
    }

    public function delete(int $id): void
    {
        $user = User::find($id)->delete();
    }
}