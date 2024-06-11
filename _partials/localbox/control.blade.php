@if (count($locationOrderTypes) <= $__SELF__->property('maxOrderTypeButtons', 2))
    <ul
        class="radio-switch"
        data-control="order-type-toggle"
        data-handler="{{ $orderTypeEventHandler }}"
    >
        @foreach($locationOrderTypes as $orderType)
            @continue($orderType->isDisabled())
            <li class="list-unstyled radio-switch__item">
                <input
                    id="btn-check-{{$orderType->getCode()}}"
                    type="radio"
                    name="order_type"
                    class="radio-switch__input visually-hidden"
                    value="{{ $orderType->getCode() }}"
                    {!! $orderType->isActive() ? 'checked="checked"' : '' !!}
                    
                />
                <label
                    @if ($orderType->getCode() == 'delivery')
                    data-bs-tooltip="tooltip"
                    data-bs-placement="bottom"             
                        @if ($minOrderTotal = $location->minimumOrder($cart->subtotal()))
                            title="@lang('igniter.local::default.text_min_total'): {{ currency_format($minOrderTotal) }}"
                        @else
                            title="@lang('igniter.local::default.text_no_min_total')"
                        @endif
                    @endif
                    for="btn-check-{{$orderType->getCode()}}"
                    class="radio-switch__label {{ $orderType->isActive() ? 'active' : '' }}"
                >@partial('@control_info', ['orderType' => $orderType])</label>
                {!! $orderType->getCode() == 'collection' ? '<div class="radio-switch__marker" aria-hidden="true"></div>' : '' !!}
                
            </li>
            
        @endforeach
    </ul>
@else
    <div
        class="dropdown"
        data-control="order-type-toggle"
        data-handler="{{ $orderTypeEventHandler }}"
    >
        <button
            class="btn btn-light btn-block dropdown-toggle"
            type="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
        >
            @partial('@control_info', ['orderType' => $location->getOrderType()])
        </button>
        <div class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton">
            @foreach($locationOrderTypes as $orderType)
                @continue($orderType->isDisabled())
                <a
                    role="button"
                    class="dropdown-item text-center {{ $orderType->isActive() ? 'active' : '' }}"
                    data-order-type-code="{{ $orderType->getCode() }}"
                >
                    @partial('@control_info', ['orderType' => $orderType])
                </a>
            @endforeach
        </div>
    </div>
@endif
