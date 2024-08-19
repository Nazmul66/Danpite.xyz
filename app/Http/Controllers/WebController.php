<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function allServices()
    {
        return view('frontend.content.pages.service.allservices');
    }

    public function interior()
    {
        return view('frontend.content.pages.service.interior');
    }

    public function priceing()
    {
        return view('frontend.content.pages.priceing');
    }

    public function contact()
    {
        return view('frontend.content.pages.contact');
    }

    public function blogs()
    {
        return view('frontend.content.pages.blogs');
    }

    public function aboutus()
    {
        return view('frontend.content.pages.aboutus');
    }
    public function services()
    {
        return view('frontend.content.pages.services');
    }
    public function terms()
    {
        return view('frontend.content.pages.terms');
    }
    public function privacy()
    {
        return view('frontend.content.pages.privacy');
    }
}
