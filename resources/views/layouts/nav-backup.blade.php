@if(!isset($innerLoop))
    <ul class="nav navbar-nav">
@else
    <ul class="dropdown-menu">
@endif

    @foreach ($items->sortBy('order') as $item)

        @php

        $listItemClass = null;
        $styles = null;
        $icon = null;
        $caret = null;

        // Background Color or Color
        if (isset($options->color) && $options->color == true) {
        $styles = 'color:'.$item->color;
        }
        if (isset($options->background) && $options->background == true) {
        $styles = 'background-color:'.$item->color;
        }

        // With Children Attributes
        if(!$item->children->isEmpty()) {
        $linkAttributes =  'class="dropdown-toggle" data-toggle="dropdown"';
        $caret = '<span class="caret"></span>';

        if(url($item->link()) == url()->current()){
        $listItemClass = 'dropdown active';
        }else{
        $listItemClass = 'dropdown';
        }
        }

        // With no Children Attributes
        if($item->children->isEmpty()) {
        $linkAttributes =  'class="d" data-toggle="dropdownnn"';


        if(url($item->link()) == url()->current()){
        $listItemClass = 'dropdown active';
        }else{
        $listItemClass = 'dropdown';
        }
        }

        // Set Icon
        if(isset($options->icon) && $options->icon == true){
        $icon = '<i class="' . $item->icon_class . '"></i>';
        }

        @endphp

        <li class="{{ $listItemClass }}">
            <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes or '' !!}>
                {!! $icon !!}
                <span>{{ $item->title }}</span>
                {!! $caret !!}
            </a>
            @if(!$item->children->isEmpty())
                @include('layouts.nav', ['items' => $item->children, 'options' => $options, 'innerLoop' => true])
            @endif
        </li>
    @endforeach

</ul>
