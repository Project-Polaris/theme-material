<li>
    <a href="{{ isset($item['route']) ? route($item['route']) : '#' }}">
        @if (array_key_exists('label', $item))
        <i class="fa {{ $item['icon'] }}">{{ $key }}</i> <span>{{ trans($item['label']) }}</span>
        @else
        <i class="fa {{ $item['icon'] }}">{{ $key }}</i> <span>{{ $item['name'] }}</span>
        @endif
    </a>
</li>
