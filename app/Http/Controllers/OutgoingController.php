<?php

namespace App\Http\Controllers;

use App\Models\Outgoing;
use Illuminate\Http\Request;

class OutgoingController extends Controller
{
    public function index()
    {
        $outgoings = Outgoing::all();
        return view('index')->with('outgoings', $outgoings);
    }
}
