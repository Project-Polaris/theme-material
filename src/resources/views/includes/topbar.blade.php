<header class="header header-orange header-transparent header-waterfall ui-header">
    <ul class="nav nav-list pull-left">
        <div>
            <a data-toggle="menu" href="#ui_menu">
                <span class="icon icon-lg text-white">menu</span>
            </a>
        </div>
    </ul>

    <ul class="nav nav-list pull-right">
        <div class="dropdown margin-right">
            <a class="dropdown-toggle padding-left-no padding-right-no" data-toggle="dropdown">
                @if(auth()->guest())
                    <span class="access-hide">未登录</span>
                    <span class="icon icon-lg margin-right">account_circle</span>
                @else
                    <span class="access-hide">{{ auth()->user()->name }}</span>
                    <span class="avatar avatar-sm"><img src="{$user->gravatar}"></span>
                @endif
            </a>
            <ul class="dropdown-menu dropdown-menu-right">
                @if(auth()->guest())
                    <li>
                        <a class="padding-right-lg waves-attach" href="/auth/login"><span class="icon icon-lg margin-right">account_box</span>登录</a>
                    </li>
                    <li>
                        <a class="padding-right-lg waves-attach" href="/auth/register"><span
                                    class="icon icon-lg margin-right">pregnant_woman</span>注册</a>
                    </li>
                @else
                    <li>
                        <a class="waves-attach" href="/user/"><span class="icon icon-lg margin-right">account_box</span>用户中心</a>
                    </li>

                    <li>
                        <a class="padding-right-cd waves-attach" href="/user/logout"><span
                                    class="icon icon-lg margin-right">exit_to_app</span>登出</a>
                    </li>
                    <li> 
                        <a href="//en.gravatar.com/" target="view_window"><i class="icon icon-lg margin-right">insert_photo</i>设置头像</a>
                    </li>
                @endif
            </ul>
            {else}
        </div>
    </ul>
</header>
