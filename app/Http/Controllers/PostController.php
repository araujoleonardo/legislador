<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComentPostRequest;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use App\Models\PostComent;
use App\Models\PostView;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $posts = Post::with('user:id,name,image', 'coments', 'views')
            ->orderBy('created_at', 'desc')->get();

        $count = Post::count();

        return view('welcome', compact('posts', 'count'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.novoPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostRequest $request)
    {
        $user = auth()->user();

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = $user->id;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $requestImage->move(public_path('img/posts'), $imageName);

            $post->image = $imageName;

        }

        if($request->video) {

            $video = $this->youtube_embed($request->video);

            $post->video = $video;
        }

        $post->save();

        return redirect()->route('post-create')->with('postCreate', 'Post feito com sucesso!');
    }

    public function youtube_embed($url)
    {
        // Verifica se o URL fornecido é válido
        if (empty($url)) {
            return '';
        }

        // Extrai o ID do vídeo do URL fornecido
        if (strpos($url, 'youtu.be') !== false) {
            $video_id = substr($url, strpos($url, 'youtu.be/') + 9);
        } else {
            parse_str(parse_url($url, PHP_URL_QUERY), $query_params);
            $video_id = $query_params['v'] ?? '';
        }

        // Monta o código embed para o vídeo do YouTube
        if (!empty($video_id)) {
            return '<iframe src="https://www.youtube.com/embed/'.$video_id.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        }

        return '';
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!auth()->user()) {
            return redirect()->route('post-list')->with('error', 'Você precisa estar logado para ver postagens!');
        }
        $user = auth()->user();

        $post = Post::findOrFail($id);

        $view = new PostView();
        $view->post_id = $id;
        $view->user_id = $user->id;
        $view->save();

        $coments = PostComent::where('post_id', $id)
            ->with('user:id,name,image')
            ->orderBy('created_at', 'desc')->get();

        $count = $coments->count();

        return view('post.viewPost', compact('post', 'coments', 'count'));
    }

    public function postComent(ComentPostRequest $request)
    {
        $user = auth()->user()->id;

        $coment = new PostComent();
        $coment->comentario = $request->comentario;
        $coment->user_id = $user;
        $coment->post_id = $request->post_id;
        $coment->save();

        return redirect()->back();
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
