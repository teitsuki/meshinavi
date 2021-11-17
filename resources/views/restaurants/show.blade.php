@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
    @include('partial.restaurant')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <th>{{ __('Name') }}</th>
            <td>
                <p>{{ $restaurant->name }}</p>
                <p>{{ $restaurant->name_kana }}</p>
            </td>
            <tr>
                <th>{{ __('Address') }}</th>
                <th>{{ $restaurant->address }}</th>
            </tr>
            <tr>
                <th>{{ __('Category') }}</th>
                <th>{{ $restaurant->category->name }}</th>
            </tr>
            <tr>
                <th>{{ __('Opentime') }}</th>
                <th>{{ $restaurant->opentime }}</th>
            </tr>
            <tr>
                <th>{{ __('Holiday') }}</th>
                <th>{{ $restaurant->holiday }}</th>
            </tr>
            <tr>
                <th>{{ __('Note') }}</th>
                <th>{{ $restaurant->note }}</th>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('restaurants.index') }}">戻る</a>
@endsection