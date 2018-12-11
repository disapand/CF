<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Sodium\compare;

class ZhjwController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect(url('/zhfw/zhcs'));
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
        $title = '综合服务--';
        $tzlj = 'zhfw.';
        switch ($id) {
            case 'szgc':
                $title .= '城市配套维护';
                $tzlj .= 'szgc';
                break;
            case 'ggjt':
                $title .= '汽车租赁';
                $tzlj .= 'ggjt';
                break;
            case 'jjny':
                $title .= '洁净能源';
                $tzlj .= 'jjny';
                break;
            case 'cygn':
                $title .= '餐饮管理';
                $tzlj .= 'cygl';
                break;
            case 'zhcs':
                $title .= '智慧城市';
                $tzlj .= 'zhcs';
                break;
            default:

        }

        return view($tzlj, compact('title'));
    }

    public function szgc($bt){
        $title = '城市配套维护--';
        $tzlj = 'zhfw.';
        switch ($bt) {
            case 'lmwx':
                $title .= '路面维护';
                $tzlj .= 'lmwx';
                break;
            case 'ldwx':
                $title .= '路灯维护';
                $tzlj .= 'ldwx';
                break;
            case 'ldlh':
                $title .= '管网维护';
                $tzlj .= 'ldlh';
                break;
            case 'fwts':
                $title .= '亮化提升';
                $tzlj .= 'fwts';
                break;
            default:

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
