@forelse ($groupedMenuItems as $categoryId => $menuList)
    @if ($categoryId > 0)
        @php
            $menuCategory = array_get($menuListCategories, $categoryId);
            $menuCategoryAlias = strtolower(str_slug($menuCategory->name));
        @endphp
        <div id="category-{{ $menuCategoryAlias }}-heading" role="tab">
            <h4
                class="category-title cursor-pointer {{ $loop->iteration >= $menuCollapseCategoriesAfter ? 'collapsed' : '' }}"
                data-bs-toggle="collapse"
                data-target="#category-{{ $menuCategoryAlias }}-collapse"
                aria-expanded="false"
                aria-controls="category-{{ $menuCategoryAlias }}-heading"
            >{{ $menuCategory->name }}<span class="collapse-toggle text-muted pull-right"></span></h4>
        </div>
        <div
            id="category-{{ $menuCategoryAlias }}-collapse"
            class="collapse {{ $loop->iteration < $menuCollapseCategoriesAfter ? 'show' : '' }}"
            role="tabpanel" aria-labelledby="{{ $menuCategoryAlias }}"
        >
            

            @partial('@items', ['menuItems' => $menuList])
        </div>
    @else
        @partial('@items', ['menuItems' => $menuList])
    @endif
@empty
    <div class="menu-group-item">
        <p>@lang('igniter.local::default.text_no_category')</p>
    </div>
@endforelse
