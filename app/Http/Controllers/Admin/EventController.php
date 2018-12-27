<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\event;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events = event::all();
        return view('admin.event.show',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.event.post');
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
         $this->validate($request,[
            'title'=>'required',
            'slug'=>'required',
            'lokasi'=>'required',
            'start'=>'required',
            'end'=>'required',
            'status' => 'required',
            'body'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
        }

        $post = new event;
        $post ->image = $fileName;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->lokasi = $request->lokasi;
        $post->start = $request->start;
        $post->end = $request->end;
        $post->status = $request->status;
        $post->body = $request->body;

        $post->save();

        return redirect(route('event.index'));
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
         //edit
        $event = event::where('id', $id)->first();
        return view('admin.event.edit', compact('event'));
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
        //updated data
        $this->validate($request,[
            'title'=>'required',
            'slug'=>'required',
            'lokasi'=>'required',
            'start'=>'required',
            'end'=>'required',
            'status'=>'required',
            'body'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $file->move($destinationPath, $fileName);
        }

        $event = event::find($id);
        $event->title = $request->title;
        $event ->image = $fileName;
        $event->slug = $request->slug;
        $event->lokasi = $request->lokasi;
        $event->start = $request->start;
        $event->end = $request->end;
        $event->status=$request->status;
        $event->body = $request->body;

        $event->save();

        return redirect(route('event.index'));
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
        //Delete function
        event::where('id', $id)->delete();
        return redirect()->back();
    }
}
