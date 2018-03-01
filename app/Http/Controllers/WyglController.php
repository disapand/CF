<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WyglController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '物业管理';
        return view('wygl.wygl', compact('title'));
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
        $tzlj = 'wygl.';
        $title = '物业管理';
        switch ($id) {
            case 'xzl':
                $tzlj .= 'xzl';
                $title .= '--写字楼';
                break;
            case 'whjq':
                $tzlj .= 'whjq';
                $title .= '--文化景区';
                break;
            case 'cyy':
                $tzlj .= 'cyy';
                $title .= '--产业园';
                break;
            case 'zz':
                $tzlj .= 'zz';
                $title .= '--住宅';
                break;
            case 'sy':
                $tzlj .= 'sy';
                $title .= '--商业';
                break;
            case 'gafj':
                $tzlj .= 'gafj';
                $title .= '--公安分局';
                break;
            case 'jhxf':
                $tzlj .= 'jhxf';
                $title .= '--泾河消防';
                break;
            case 'xfb':
                $tzlj .= 'xfb';
                $title .= '--信访办';
                break;
            case 'shfw':
                $tzlj .= 'shfw';
                $title .= '--社会服务';
                break;
            default:
                $tzlj .= 'wygl';
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
