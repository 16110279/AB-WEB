<?php

namespace App\Http\Controllers;
use App\Loker;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nav = 'Home';
        $title = 'Alumni Berbagi';
        $loker = Loker::where('jenis','Umum')->get();
        return view('public.index', compact('loker','title','nav'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function slug($slug)
    {
        $nav = 'Lowongan';
        $loker = Loker::where('slug',$slug)->first();
        $title = 'Detail Lowongan - ' .$loker->judul;
        // echo $loker->judul;
        
        if(empty($loker))
        {
            return abort(404);
        }
        else
        {
        return view('public.job-detail', compact('loker','title','nav'));
        }

    }

    public function about()
    {
        $title = 'About Alumni Berbagi';
        $nav = 'About';
        return view('public.about', compact('title','nav'));
    }
    public function blog()
    {
        $title = 'Blog Alumni Berbagi';
        $nav = 'Blog';
        return view('public.blog', compact('title','nav'));
    }
    public function contact()
    {
        $title = 'Contact Alumni Berbagi';
        $nav = 'Contact';
        return view('public.contact', compact('title','nav'));
    }
    public function loker()
    {
        $title = 'Loker Alumni Berbagi';
        $nav = 'Lowongan';
        return view('public.loker', compact('title','nav'));
    }


}
