@if ($paginator->hasPages())
<ul>
    @foreach ($elements as $element)
    @foreach ($element as $page => $url)
    <li class="active" aria-current="page"><a href="{{  $url}}">{{ $page }}</a></li>
    @endforeach
    @endforeach
</ul>
@endif
