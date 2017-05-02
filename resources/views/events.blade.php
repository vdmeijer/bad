@extends('layouts.app')

@section('title')
<title>{{ $content->title }} - {{ config('app.name', 'Brabantse Airsoft Division') }}</title>
@endsection

@section('meta')
<meta name="keywords" content="{{ $content->meta_keywords }}">
<meta name="description" content="{{ $content->meta_description }}">
@endsection

@section('style')
<?php $image = 'storage/' . str_replace('%2F', '/', $events->first()->image);?>
<style type="text/css">
    .jumbotron {
        background: url('{{ $image }}') no-repeat 40% 40%;
        background-size: cover;
        color: black;
        font-weight: bold;
        text-shadow: 1px 1px #ffffff;
    }
</style>
@endsection

@section('jumbotron')
<h1 class="text-capitalize">{{ Route::getFacadeRoot()->current()->uri() }}</h1>
<p>Volgende evenement: {{ $events->first()->event }}</p>
<p>Datum: <strong>{{ date("d-m-Y", strtotime($events->first()->date)) }}</strong></p>
<p><a class="btn btn-primary btn-lg" href="{{ $events->first()->url }}" role="button">Inschrijven</a></p>
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            @foreach($events as $event)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $event->event }}
                        <span class="pull-right">
                            <strong>{{ date("d-m-Y", strtotime($event->date)) }}</strong>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3"><img class="event-image-contain" src="./storage/{{ $event->image }}"></div>
                            <div class="col-md-9">
                                <table class="full-width">
                                    <tbody>
                                        <tr>
                                            <th>Event</th>
                                            <td>{{ $event->event }}</td>
                                        </tr>
                                        <tr>
                                            <th>Adres</th>
                                            <td>{{ $event->street }} {{ $event->number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Plaats</th>
                                            <td><a href="https://www.google.nl/maps/place/{{ $event->street }}+{{ $event->number}},{{ $event->city }}/">{{ $event->city }}</td>
                                        </tr>
                                        <tr>
                                            <th>Inschrijven</th>
                                            <td><a href="{{ $event->url }}">{{ $event->url }}</a></td>
                                        </tr>
                                        <tr>
                                            <th>Beschrijving</th>
                                            <td>{{ $event->description }}</td>
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
