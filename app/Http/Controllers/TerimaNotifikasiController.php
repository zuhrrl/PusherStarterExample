<?php

namespace App\Http\Controllers;

use App\Events\ShowNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class TerimaNotifikasiController extends Controller
{
    public function kirimNotifikasi()
    {
        return event(new ShowNotification([
            "notifikasi" => "notifikasi test"
        ]));
    }
}
