@foreach ($categories as $category)
    @continue(in_array($category->getKey(), $hiddenCategories))
    @continue($category->count_menus < 1)   <!-- $hideEmptyCategory &&  -->

    <li class="nav-item">
        <a
            class="nav-link font-weight-bold{{ ($selectedCategory && $category->permalink_slug == $selectedCategory->permalink_slug) ? ' active' : '' }}"
            href="#heading_{{ $category->getKey() }}"
        >{{ $category->name }}</a>

        @if ((!isset($displayAsFlatTree) || !$displayAsFlatTree) && count($category->children))
            <ul id='_menuBar' class="nav flex-column ml-3 my-1">
                @partial('@items', ['categories' => $category->children])
            </ul>
        @endif
    </li>
@endforeach
