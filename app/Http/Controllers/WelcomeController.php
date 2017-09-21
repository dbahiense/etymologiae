<?php

namespace etymologiæ\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $json = file_get_contents('https://2459814b.ngrok.io/etym/v1/fluid/English/noun');
        $data = json_decode($json);
        $result = $data;

        return view('welcome', [
                'result' => $result,
                'json' => $json,
                'data' => $data
            ]);
    }
}
