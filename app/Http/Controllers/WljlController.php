<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WljlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title ="全域旅游";
        return view('wyjl.wljl', compact('title'));
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
        $title = '全域旅游--';
        $tzly = 'wyjl.';
        switch ($id){
            case 'cwtjq':
                $title .= '崇文塔景区';
                $tzly .= 'cwtjq';
                break;
            case 'zbjq':
                $title .= '周边景区';
                $tzly .= 'zbjq';
                break;
            case 'cwbt':
                $title .= '崇文宝塔';
                $tzly .= 'cwbt';
                break;
        }
        return view($tzly, compact('title'));
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
}
