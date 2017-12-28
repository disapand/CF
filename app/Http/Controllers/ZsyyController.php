<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ZsyyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '招商运营';
        return view('zsyy.zsyy', compact('title'));
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
        $tzlj = 'zsyy.';
        $title = '招商运营--';

        switch ($id) {
            case 'cyfh':
                $tzlj .= 'cyfh';
                $title .= '产业孵化中心';
                break;
            case 'cwt':
                $tzlj .= 'cwt';
                $title .= '崇文塔景区';
                break;
            case 'cwjy':
                $tzlj .= 'cwjy';
                $title .= '崇文佳苑';
                break;
            case 'cwsx':
                $tzlj .= 'cwsx';
                $title .= '崇文·尚学';
                break;
            default:
                $tzlj = 'zsyy';
                $title = '招商运营';
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
