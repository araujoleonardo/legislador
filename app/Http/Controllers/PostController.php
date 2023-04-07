<?php

namespace App\Http\Controllers;

use App\Models\Post;
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
        $posts = Post::with('user:id,name')
            ->get();

        return view('welcome', compact('posts'));
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
    public function store(Request $request)
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

            $requestImage->move(public_path('img/users'), $imageName);

            $post->image = $imageName;

        }

        if($request->video) {

            $video = $this->youtube_embed($request->video);

            $post->video = $video;
        }

        $post->save();

        return redirect()->route('post-create')->with('status', 'Post feito com sucesso!');
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
            return '<iframe width="300" src="https://www.youtube.com/embed/'.$video_id.'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
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
        //
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
