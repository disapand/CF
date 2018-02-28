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
            case 'cwgxg':
                $title .= '崇文国学馆';
                $tzly .= 'cwgxg';
                break;
            case 'sqfybwg':
                $title .= '三秦非遗博物馆';
                $tzly .= 'sqfybwg';
                break;
            case 'sswhblg':
                $title .= '陕商文化博览馆';
                $tzly .= 'sswhblg';
                break;
            case 'gyqqg':
                $title .= '国艺秦腔馆';
                $tzly .= 'gyqqg';
                break;
            case 'fcz':
                $title .= '伏茶镇';
                $tzly .= 'fcz';
                break;
            case 'lhc':
                $title .= '乐华城';
                $tzly .= 'lhc';
                break;
            case 'spmsxz':
                $title .= '寿平民宿小镇';
                $tzly .= 'spmsxz';
                break;
            case 'jhzhnyy':
                $title .= '泾河智慧农业园';
                $tzly .= 'jhzhnyy';
                break;
            case 'ddyd':
                $title .= '大地原点';
                $tzly .= 'ddyd';
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
