<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xxxq = News::where('sort','西咸新区')->limit(7)->where('trash',0)->orderBy('created_at','desc')->get();
        $jhcf = News::where('sort','泾河城服')->limit(7)->where('trash',0)->orderBy('created_at','desc')->get();
        $jhxq = News::where('sort','泾河新城')->limit(7)->where('trash',0)->orderBy('created_at','desc')->get();
        return view('test', compact('xxxq','jhcf', 'jhxq'));
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
        $tzlj = '';
        $title = '泾河城服';
        switch ($id){
            case 'qyjj':
                $tzlj = 'qyjj';
                $title .= '--企业简介';
                break;
            case 'fzyj':
                $tzlj = 'fzyj';
                $title .= '--发展愿景';
                break;
            case 'zzjg':
                $tzlj = 'zzjg';
                $title .= '--组织架构';
                break;
            case 'qyfp':
                $tzlj = 'qyfp.qyfp';
                $title .= '--企业扶贫';
                break;
            case 'tsdj':
                $tzlj = 'qyfp.tsdj';
                $title .= '--特色党建';
                break;
            case 'tdjs':
                $tzlj = 'qyfp.tdjs';
                $title .= '--团队建设';
                break;
            default:
                $tzlj = 'test';
        }

        return view($tzlj, compact('title'));
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
