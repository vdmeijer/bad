@extends('layouts.app')

@section('title')
<title>{{ $content->title }} - {{ config('app.name', 'Brabantse Airsoft Division') }}</title>
@endsection

@section('meta')
<meta name="keywords" content="{{ $content->meta_keywords or '' }}">
<meta name="description" content="{{ $content->meta_description or '' }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($members as $member)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $content->title }}
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-9">
                                <table>
                                    <tbody>
                                        <tr>
                                            <th>Naam</th>
                                            <td>{{ $member->name }} {{ $member->surname_prefixes }} {{ $member->surname }}</td>
                                        </tr>
                                        <tr>
                                            <th>Alias</th>
                                            <td>{{ $member->nickname }}</td>
                                        </tr>
                                        <tr>
                                            <th>Woonachtig</th>
                                            <td>{{ $member->place_of_residence }}</td>
                                        </tr>
                                        <tr>
                                            <th>Nationaliteit</th>
                                            <td>{{ $member->nationality }}</td>
                                        </tr>
                                        <tr>
                                            <th>Primaire Airsoft Apparaat</th>
                                            <td>{{ $member->primary_weapon }}</td>
                                        </tr>
                                        <tr>
                                            <th>Secundair Airsoft Apparaat</th>
                                            <td>{{ $member->secondary_weapon }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
