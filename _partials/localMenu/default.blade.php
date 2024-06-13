@if (!$hideMenuSearch)
    <div class="menu-search d-none">
        @partial('@searchbar')
    </div>
@endif

@if (1 || $menuIsGrouped)
    @partial('@grouped', ['groupedMenuItems' => $menuList])
@else
    @partial('@items', ['menuItems' => $menuList])
@endif

<nav class="typical-pagination mb-5">
    @partial('pagination/default', ['paginator' => $menuList])
</nav>
