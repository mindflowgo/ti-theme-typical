<div class="layout-scrollable w-100">
    <ul id="_menu_bar" class="nav nav-categories nav-inline flex-nowrap py-2 w-100">
        <!-- <li class="nav-item">
            <a
                class="nav-link text-nowrap font-weight-bold{{ $selectedCategory ? '' : ' active' }}"
                href="{{ page_url('local/menus', ['category' => null]) }}"
            >@lang('igniter.local::default.text_all_categories')</a>
        </li> -->

        @partial('@items', ['categories' => $categories->toFlatTree(), 'displayAsFlatTree' => true])
    </ul>
</div>
