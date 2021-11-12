@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
    @include('partial.restaurant')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <th>店名</th>
            <td>
                <p>{{ $restaurant->name }}</p>
                <p>{{ $restaurant->name_kana }}</p>
            </td>
            <tr>
                <th>住所</th>
                <th>{{ $restaurant->address }}</th>
            </tr>
            <tr>
                <th>営業時間</th>
                <th>{{ $restaurant->opentime }}</th>
            </tr>
            <tr>
                <th>定休日</th>
                <th>{{ $restaurant->holiday }}</th>
            </tr>
            <tr>
                <th>その他</th>
                <th>{{ $restaurant->note }}</th>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('restaurants.index') }}">戻る</a>
@endsection