<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller {

    public function __construct() {

        $this->middleware('auth');
    }


    public function notifications(Request $request) {

        // recuperando as notificaçoes do user.
        $data = $request->user()->notifications();

        return response()->json(compact('data'));
    }
}
