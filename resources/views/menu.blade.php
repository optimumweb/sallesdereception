<nav
    id="menu-{{ $menu->name }}"
    class="menu"
    role="navigation"
>
    <ul>
        @foreach($menu->root_items as $item)
            @include('partials.menu-menu', ['item' => $item, 'depth' => 0])
        @endforeach
    </ul>
</nav>
