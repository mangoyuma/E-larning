<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;//DBのマイグレーションを使う 
use App\song;// "song.php" モデルを使う
// モデルからデータを持ってくる
class SongsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('songs.index');
            // view('URL.viewファイル名') index.blade.php

// "create_my_songs_table.php"で定義した[my_songs]テーブルから持ってくる
        $songs = DB::table('my_songs')->get();　// "my_songs" テーブル全データ...やり方１

      //$song = song::all();  "song.phpモデル"のクラス名"song"で　"my_songs"テーブル全データを持ってくると定義...やり方２

        return view('songs.index',compact('songs'));
        // // URL:"songs". "index.blade.php", '$songs'  
        //  URL:"songs"に行ったら "index.blade.php"画面に　my_songsテーブル全データが出力
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
