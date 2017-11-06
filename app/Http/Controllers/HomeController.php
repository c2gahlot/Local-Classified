<?php

namespace App\Http\Controllers;

use App\Category;
use App\Advertisement;
use Illuminate\Http\Request;
use App\Repositories\HomeRepository;

class HomeController extends Controller
{
    public $homeRepository;

    /**
     * Create a new controller instance.
     */
    public function __construct(HomeRepository $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    /**
     * Show the index.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categories = Category::get();

        $advertisements = [];

        if($request->getQueryString()){

            $advertisements = $this->homeRepository->filter($request->all());
        }

        return view('index', compact('categories', 'advertisements'));
    }
}
