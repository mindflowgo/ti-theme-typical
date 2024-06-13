<style>
    .products {
        display: block !important;
    }
    .product {
        padding-left: 5px !important;
        padding-right: 5px !important;
        margin-bottom: 5px !important;
    }
    .product-transition {
        position: absolute;
        bottom: 0px;
        right: 0px;
        width: 136px !important;
        height: 128px !important;
        z-index: 0;
    }
    .product-transition IMG {
        width: 128px !important;
        height: 128px !important;
    }
    .product-caption {
        padding-top: 0px !important;
        padding-bottom: 0px !important;
    }
    .menu-desc {
        width: calc(100% - 95px) !important;
    }
</style>
<ul class="products"> <!--columns-3-->
    @forelse ($menuItems as $menuItemObject)
        @partial('@item', ['menuItem' => $menuItemObject->model, 'menuItemObject' => $menuItemObject])
    @empty
        <p>@lang('igniter.local::default.text_empty')</p>
    @endforelse
</ul>
