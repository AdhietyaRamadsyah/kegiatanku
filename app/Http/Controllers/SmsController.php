<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sms()
    {
        $user = User::findOrfail(Auth::user()->$id);
        $activity = Activity::all();
        $register = Register::all();

        Nexmo::message()->send([
            'to' => $phone,
            'from' => 'KEGITANKU',
            'text' => 'Halo, Terimakasih atas pembelian tiketnya'
        ]);
        
    }
}
