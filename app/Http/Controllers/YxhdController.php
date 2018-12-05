<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YxhdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '文化教育';
        return view('yxhd.yxhd', compact('title'));
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
        $tzlj = 'yxhd.';
        $title = '研学活动--';

        switch ($id) {
            case 'ytwg':
                $tzlj .= 'ytwg';
                $title .= '一塔五馆';
                break;
            case 'tsty':
                $tzlj .= 'tsty';
                $title .= '特色体验';
                break;
            case 'jqld':
                $tzlj .= 'jqld.jqld';
                $title .= '景区联动';
                break;
            case 'yxyd':
                $tzlj .= 'yxyd';
                $title .= '研学营地';
                break;
            default:
                $tzlj = 'yxhd';
                $title = '研学活动';
        }

        return view($tzlj, compact('title'));
    }

    public function jqld($ld){
        $tzlj = 'yxhd.jqld.';
        $title = '景区联动--';

        switch ($ld) {
            case 'blhx':
                $tzlj .= 'blhx';
                $title .= '博览华夏';
                break;
            case 'hsjy':
                $tzlj .= 'hsjy';
                $title .= '红色教育';
                break;
            case 'ddyd':
                $tzlj .= 'ddyd';
                $title .= '大地原点';
                break;
            case 'hsjy2':
                $tzlj .= 'hsjy2';
                $title .= '红色教育';
                break;
            case 'ngty':
                $tzlj .= 'ngty';
                $title .= '农耕体验';
                break;
            case 'spgd':
                $tzlj .= 'spgd';
                $title .= '寿平古渡';
                break;
            case 'sztz':
                $tzlj .= 'sztz';
                $title .= '素质拓展';
                break;
            default:
                $tzlj = 'yxhd';
                $title = '研学活动';
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
