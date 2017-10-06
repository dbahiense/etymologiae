<?php
namespace etymologiæ\Http\Controllers;
use Illuminate\Http\Request;
class SearchController extends Controller
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
        $word = $_POST['word'];
        $json = file_get_contents('https://2459814b.ngrok.io/etym/v1/'.$word.'/English/noun');
        $data = json_decode($json);
        $result = $data;
        return view('result', [
                'word' => $word,
                'result' => $result,
                'json' => $json,
                'data' => $data
            ]);
    }
}