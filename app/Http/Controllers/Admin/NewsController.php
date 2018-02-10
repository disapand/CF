<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '城服管理后台';

        $news = News::where('trash', '0') -> paginate(15);
        return view('admin.news.index', compact('title', 'news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = '添加新闻';
//        $author = '';
        return view('admin.news.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = [
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'content' => $request->input('content'),
            'sort' => $request -> input('sort'),
            'count' =>  0,
            'share' =>  0,
            'trash' =>  false,
            'top' =>  true,
            'show' =>  true,
        ];
        $new = News::create($input);
        $new -> save();
        return redirect() -> route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::findOrFail($id);
//        dd($new);
        return view('news.news1', compact('new'));
    }

    public function show_by_sort($sort){
        $news = News::where(['sort' => $sort, 'trash' => false])->paginate(15);
        $tzlj = 'news.';
        switch ($sort){
            case '西咸新区':
                $tzlj .= 'xxxq';
                break;
            case '泾河城服':
                $tzlj .= 'jhcf';
                break;
            case '泾河新城':
                $tzlj .= 'jhxq';
                break;
            default:;
        }
        return view($tzlj, compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $new = News::findOrFail($id);
        $sort = ['西咸新区','泾河新区','泾河城服'];
//        dd($sort);
        return view('admin.news.edit', compact('new', 'sort'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $new = News::findOrFail($id);
        $new -> title = $request -> input('title');
        $new -> content = $request -> input('content');
        $new['sort'] = $request -> input('sort');
//        dd($new);
        $new -> save();
        return redirect() -> route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::findOrFail($id);
        $new -> trash = true;
        $new -> save();
        return redirect() -> route('news.index');
    }
}
