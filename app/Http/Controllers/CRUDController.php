<?php

namespace App\Http\Controllers;

use Freshbitsweb\Laratables\Laratables;
use Illuminate\Http\Request;

class CRUDController extends Controller
{
    public function index($class)
    {
        return view('crud.index',['class' => $class]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($class)
    {
        return view('crud.create',['class' => $class]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$class)
    {

        $this->validate($request,$class::getvalidation());
        $class::create($request->all());
        return redirect($class::route('index'))->with('message','با موفقیت وارد سیستم شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($id,$class)
    {
        $content = $class::FindOrFail($id);
        return view('event.single',compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$class)
    {
        $record = $class::findOrFail($id);
//        dd($record);
        return view('crud.edit',['class' => $class,'record'=>$record]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$class)
    {
        $record = $class::findOrFail($id);
        $this->validate($request,$class::getvalidation());
        $record->update($request->all());
        return redirect($class::route('index'))->with('message','با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$class)
    {
        $record = $class::findOrFail($id);
        $record->delete();
        return redirect($class::route('index'))->with('message','با موفقیت از سیستم حذف شد');

    }

    public function getdata($class){
        return Laratables::recordsOf($class);
    }
}
