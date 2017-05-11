<ul class="main-nav">
    <?php
$c = count($items);
$n = 1;
?>
    @foreach($items->sortBy('order') as $item)
        @if(($c / 2 + 1) == $n)
            <li class="small-logo"><a href="#header"><img src="img/small-logo.svg" height="57" width="55" alt=""></a></li>
        @endif
                <li><a href="#{{ str_replace('/', '', $item->url) }}">{{ $item->title }}</a></li>
        <?php $n++;?>
    @endforeach
</ul>
