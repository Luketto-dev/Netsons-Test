<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComicController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

        

        $comics = DB::table('comics')->get();

        $comics = json_decode($comics, true);

        

        return view('comics.home', ['comics' => $comics, 'request'=> $request]);
    }


    public function show($id)
    {
        $comic = Comic::where('id', $id)->get();

        $comic = json_decode($comic, true);
        

        return view('comics.show', ['comic' => $comic]);
        
        
    }
}
