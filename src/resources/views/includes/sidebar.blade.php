<nav aria-hidden="true" class="menu menu-left nav-drawer nav-drawer-md" id="ui_menu" tabindex="-1">
    <div class="menu-scroll">
        <div class="menu-content">
            <a class="menu-logo" href="/"><i class="icon icon-lg">web</i>&nbsp;{{ $sidebar_name }}</a>
            <ul class="nav">
                <li>
                    @foreach($menu as $k => $v)
                        @if(isset($v['entries']))
                            @include('theme-material::includes.sidebar_components.multi', ['key' => $k, 'item' => $v])
                        @else
                            @include('theme-material::includes.sidebar_components.single', ['key' => $k])
                        @endif
                    @endforeach

{{--                 

                    {if $user->isAdmin()}
                <li>
                    <a href="/admin"><i class="icon icon-lg">person_pin</i>&nbsp;管理面板</a>
                </li>
                {/if}

                {if $can_backtoadmin}
                    <li>
                        <a class="padding-right-cd waves-attach" href="/user/backtoadmin"><span
                                    class="icon icon-lg margin-right">backtoadmin</span>返回管理员身份</a>
                    </li>
                {/if} --}}
            </ul>
        </div>
    </div>
</nav>
