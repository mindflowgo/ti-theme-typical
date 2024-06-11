<span
    @if ($menuItemObject->mealtimeIsNotAvailable)
    class="d-inline-block float-end"
    data-bs-tooltip="tooltip"
    title="{{ implode("\r\n", $menuItemObject->mealtimeTitles) }}"
    @endif
>
    <a
    class="btn btn-primary btn-sm btn-cart{{ $menuItemObject->mealtimeIsNotAvailable ? ' disabled' : '' }}"
    @if (!$menuItemObject->mealtimeIsNotAvailable)
    @if ($menuItemObject->hasOptions)
    data-cart-control="load-item"
    data-menu-id="{{ $menuItem->menu_id }}"
    data-quantity="{{ $menuItem->minimum_qty }}"
    @else
    data-request="{{ $updateCartItemEventHandler }}"
    data-request-data="menuId: '{{ $menuItem->menu_id }}', quantity: '{{ $menuItem->minimum_qty }}'"
    data-replace-loading="spinner-grow spinner-grow-sm"
    @endif   
    
    @endif
>
    <i class="poco-icon-{{ $menuItemObject->mealtimeIsNotAvailable ? 'clock' : 'shopping-basket' }}"></i>
</a>
</span>