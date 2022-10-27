<nav
    id="menu-{{ $menu->location }}"
    class="site-menu"
    role="navigation"
>
    <div class="level">
        @foreach($menu->root_items as $item)
            @include('partials.menu-item', ['item' => $item, 'depth' => 0])
        @endforeach
    </div>
</nav>
