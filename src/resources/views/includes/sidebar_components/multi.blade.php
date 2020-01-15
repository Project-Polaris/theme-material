<li>
    <a class="waves-attach" data-toggle="collapse" href="#ui_menu_{{ $key }}">
        <i class="fa {{ $item['icon'] }}">{{ $key }}</i>

        @if (array_key_exists('label', $item))
            <span>
                {{ trans($item['label']) }}
            </span>
        @else
            <span>{{ $item['name'] }}</span>
        @endif

        {{-- @if(array_key_exists('entries', $item))
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
        @endif --}}
    </a>
    <ul class="menu-collapse collapse in" id="ui_menu_{{ $key }}">
        @foreach($item['entries'] as $subkey => $subitem)
            <li>
                <a href="{{ isset($subitem['route']) ? route($subitem['route']) : '#' }}">
                    <i class="fa {{ $subitem['icon'] }}">{{ $subkey }}</i>
                    @if (array_key_exists('label', $subitem))
                        <span>
                            {{ trans($subitem['label']) }}
                        </span>
                    @else
                        <span>{{ $subitem['name'] }}</span>
                    @endif
                </a>
            </li>
        @endforeach
    </ul>
</li>
