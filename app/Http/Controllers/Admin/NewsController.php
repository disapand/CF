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

        $news = News::where('trash', '0')->orderBy('created_at', 'desc')->paginate(15);
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
        $content = $request->input('content');
        $content = str_replace('\r\n', '', $content);
        $content = str_replace('\n', '', $content);
        $content = str_replace('\t', '', $content);
        $content = preg_replace("'<s[\s\S]*</style>'", '', $content);
        $input = [
            'title' => $request->input('title'),
            'author' => $request->input('author'),
            'content' => $content,
            'sort' => $request -> input('sort'),
            'count' =>  $request->input('count'),
            'share' =>  rand(10, 100),
            'trash' =>  false,
            'top' =>  true,
            'show' =>  true,
            'zrbj' => $request -> input('zrbj'),
        ];

        $uu = $request->input('url');
        if($uu == null || $uu == ''){
            $uu = '';
        }
        /*else if (!strstr($uu, 'http://') && !strstr($uu, 'https://')){
            $uu = 'http://' . $uu;
        }*/
        elseif (!preg_match('/https?:/', $uu)) {
            $uu = 'http://' . $uu;
        }

        $input['url'] = $uu;

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
        if (isset($new['url']) && $new['url'] != '')
            return redirect($new['url']);
        $new['count'] += 1;
        $new->save();
        return view('news.news1', compact('new'));
    }

    public function show_by_sort($sort){
        $news = News::where(['sort' => $sort, 'trash' => false])->paginate(7);
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
        $sort = ['西咸新区','泾河新城','泾河城服'];
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

        $content = $request->input('content');
        $content = str_replace('\r\n', '', $content);
        $content = str_replace('\n', '', $content);
        $content = str_replace('\t', '', $content);
        $content = preg_replace("'<s[\s\S]*</style>'", '', $content);
        $new -> content = $content;

        $uu = $request->input('url');
        if($uu == null || $uu == ''){
            $uu = '';
        }
        /*else if (!strstr($uu, 'http://') && !strstr($uu, 'https://')){
            $uu = 'http://' . $uu;
        }*/
        elseif (!preg_match('/https?:/', $uu)) {
            $uu = 'http://' . $uu;
        }
        $new -> url = $uu;
        
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
