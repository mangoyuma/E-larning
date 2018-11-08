@extends('layout.app')
@section('body')
　  {{$song->title}} <br>
    {{$song->artist}}<!-- $song= "SongsController.php" でデータベースの情報を定義した -->
<!-- {{＄データ -> カラム名}} -->

@endsection