<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\FronteBlog;
use Illuminate\Support\Facades\DB;

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
    public function blogs()
    {
        $blogComments = DB::table('fronte_blogs')
                    ->join('users', 'users.id', '=', 'fronte_blogs.user_id')
                    ->join('blogs', 'blogs.id', '=', 'fronte_blogs.blog_id')
                    ->select('users.name', 'fronte_blogs.status' , 'fronte_blogs.comment', 'fronte_blogs.id', 'fronte_blogs.created_at', 'blogs.id as blog_ids')
                    ->where('fronte_blogs.status', 1)
                    ->orderBy('fronte_blogs.id','desc')
                    ->get();
        return view('frontend.content.pages.blogs',  compact('blogComments'));
    }
    public function blogComments(Request $request)
    {
        // dd($request->all());
        if( Auth::check() ){
            $frontBlog = new FronteBlog();

            $frontBlog->user_id = Auth::user()->id;
            $frontBlog->blog_id = $request->blog_id;
            $frontBlog->comment = $request->comment;
            $frontBlog->status  = 1;

            $frontBlog->save();

            return response()->json(['status'=> true, 'data' => $frontBlog], 200);
        }
        else{
            return response()->json(['status'=> false]);
        }
    }
}
