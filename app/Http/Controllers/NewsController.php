<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function __construct(News $news)
    {
    	$this->news = $news;
    }

    public function index()
    {
    	$news = $this->news->paginate(10);

    	return view('home',compact('news'));
    }

    public function create()
    {
    	return view('pages.form',compact('news'));
    }

    public function store(Request $request)
    {
    	$dataForm = $request->all();

    	if($request->hasFile('sub_image'))
        {
            $arquivo = $request->sub_image->getClientOriginalName();
            $request->sub_image->storeAs('public/news', utf8_decode($arquivo));
            $dataForm['sub_image'] = $request->sub_image->getClientOriginalName();
        }

    	$this->news->create($dataForm);

    	return redirect()->route('index');
    }

    public function show($id)
    {
    	$new = $this->where('uuid', $id)->firstOrFail();

    	return view('pages.show',compact('new'));
    }
}
