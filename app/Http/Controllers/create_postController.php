<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class create_postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createpost.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('createpost.list');
        
    }
               

               
                
             
                
           
        
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
        {
            $request->validate([
            'title'=>'required',
            'caption'=>'required',
            'body'=>'required',
            'image'=>'required',
           ]);

        $fileName = time().'_'.$request->file('image')->getClientOriginalName();
        $filePath = $request->file('image')->storeAs('images', $fileName , 'public');

        
           $create_post = new create_post;
   
           $create_post->title = $request->title;
           $create_post->caption = $request->caption;
           $create_post->body = $request->body;
          
           $create_post->save();
           return redirect()->route('createpost.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $create_post = create_post::find($id);
           return view('createpost.list',['create_post'=>$create_post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $create_post = create_post::find($id);
           return view('createpost.edit',['create_post'=>$create_post]);
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
        $request->validate([
            'title'=>'required',
            'caption'=>'required',
            'body'=>'required',
            'image'=>'required',
           ]);

        $fileName = time().'_'.$request->file('image')->getClientOriginalName();
        $filePath = $request->file('image')->storeAs('images', $fileName , 'public');

        
           $create_post = new create_post;
   
           $create_post->title = $request->title;
           $create_post->caption = $request->caption;
           $create_post->body = $request->body;
          
           $create_post->save();
           return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $create_post = create_post::find($id);
        $create_post->delete();
        return redirect()->route('home');
    }
}
