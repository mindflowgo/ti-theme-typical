@if (count($featuredMenuItems))
    <div id="featured-menu-box" class="module-box py-2">
        <div class="text-center">
            <h2 class="mb-3">{{ $featuredTitle }}</h2>

            <ul class="products colum-3">
                @foreach ($featuredMenuItems as $featuredItem)
                    <li class="product">
                        <div class="product-item">
                            <div class="product-transition">
                                <div class="product-image">
                            @if ($featuredItem->hasMedia())
                                <img
                                    class=""
                                    src="{{ $featuredItem->getThumb([
                                        'width' => $featuredWidth,
                                        'height' => $featuredHeight,
                                    ]) }}" alt="{{ $featuredItem->getBuyableName() }}"
                                />
                            @endif
                                </div>
                            </div>
                            <div class="product-caption">
                                <h4 class="card-title">
                                    {{ $featuredItem->getBuyableName() }}
                                    <small>{{ currency_format($featuredItem->getBuyablePrice()) }}</small>
                                </h4>
                                <p class="card-text">{{ $featuredItem['menu_description'] }}</p>
                                <a type="button" href="{{ restaurant_url('local/menus') }}" 
                                class="btn btn-primary btn-lg text-uppercase">Order Now</a> 
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
{{-- <li id="menu{{ $menuItem->menu_id }}" class="product">
    <div class="product-item">
        @if ($menuItemObject->specialIsActive)
            <span class="badge-sale"
            data-bs-tooltip="tooltip"
            data-bs-placement="bottom"
            title="{!! sprintf(lang('igniter.local::default.text_end_elapsed'),
            $menuItemObject->specialDaysRemaining) !!}">
            Sale!</span>
        @endif
        <div class="product-transition">
            <div class="product-image">
                @if ($showMenuImages == 1 && $menuItemObject->hasThumb)
                <img class="" 
                src= "{{ $menuItem->getThumb() }}"
                width="{{$menuImageWidth}}" height="{{$menuImageHeight}}"
                >
                @endif
            </div>
        </div>
        <div class="d-flex flex-wrap align-items-center allergens">
            @partial('@allergens', ['menuItem' => $menuItem, 'menuItemObject' => $menuItemObject])
        </div>
        <div class="product-caption">
            <div class="menu-content flex-grow-1 mr-3">
            <h5 class="menu-name">{{ $menuItem->menu_name }}</h5>
            <p class="menu-desc">
                {!! nl2br($menuItem->menu_description) !!}
            </p>
        </div>
            @if ($menuItemObject->specialIsActive)
            <span class="menu-meta text-muted pr-2">
                <i class="bi bi-star-fill text-warning" 
                data-bs-tooltip="tooltip"
                title="{!! sprintf(lang('igniter.local::default.text_end_elapsed'), $menuItemObject->specialDaysRemaining) !!}"></i>
            </span>
            @endif

            <span class="price">
                <del><span>
                    @if ($menuItemObject->specialIsActive)
                    <bdi>{!! currency_format($menuItemObject->menuPriceBeforeSpecial) !!}</bdi>
                    @endif
                </span></del>
                <ins><span>
                    <bdi>{!! $menuItemObject->menuPrice > 0 ? currency_format($menuItemObject->menuPrice) : lang('main::lang.text_free') !!}</bdi></span></ins></span>
            @isset($updateCartItemEventHandler)            
                @partial('@button', ['menuItem' => $menuItem, 'menuItemObject' => $menuItemObject ])            
            @endisset        
        
        </div>
                
    </div>
</li> --}}
