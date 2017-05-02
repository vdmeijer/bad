@extends('layouts.app')

@section('title')
<title>{{ $content->title }} - {{ config('app.name', 'Brabantse Airsoft Division') }}</title>
@endsection

@section('meta')
<meta name="keywords" content="{{ $content->meta_keywords }}">
<meta name="description" content="{{ $content->meta_description }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <h1>Contact</h1>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">E-mail adres</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We zullen uw e-mail adres nooit met een derde partij delen.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Onderwerp</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Verzenden</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
