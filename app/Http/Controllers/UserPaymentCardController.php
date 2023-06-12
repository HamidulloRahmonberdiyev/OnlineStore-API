<?php

namespace App\Http\Controllers;

use App\Models\UserPaymentCard;
use App\Http\Requests\StoreUserPaymentCardRequest;
use App\Http\Requests\UpdateUserPaymentCardRequest;

class UserPaymentCardController extends Controller
{
    public function index()
    {
        return UserPaymentCard::all();
    }

    public function create()
    {
        //
    }

    public function store(StoreUserPaymentCardRequest $request)
    {
        //
    }

    public function show(UserPaymentCard $userPaymentCard)
    {
        //
    }

    public function edit(UserPaymentCard $userPaymentCard)
    {
        //
    }

    public function update(UpdateUserPaymentCardRequest $request, UserPaymentCard $userPaymentCard)
    {
        //
    }

    public function destroy(UserPaymentCard $userPaymentCard)
    {
        //
    }
}
