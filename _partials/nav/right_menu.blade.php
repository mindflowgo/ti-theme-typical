---
description: ''
---
<div class="column-wrap">
    <div class="widget-wrap">
        <div class="main-widget-container">
            <div class="widget-container">
                <div class="icon-box-wraper">
                    <div class="icon-box-icon">
                        <span class="eicon animation-">
                            <i aria-hidden="true" class="poco-icon-scooter"></i>
                        </span>
                    </div>
                    <div class="icon-box-content">
                        <h3 class="icon-box-title"> <span>Call and Order in</span></h3>
                        @if ($contactLocation = $contact->location)
                        <p class="icon-box-description" type="tel">{{ $contactLocation->getTelephone() }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="main-container-buttons">
            <div class="header-group-action">
                <div class="site-header-address">
                    <a href="#" class="tooltip-test button-search-popup" 
                    data-bs-toggle="modal" 
                    data-bs-target="#addressModal"
                    data-bs-tooltip="tooltip" 
                    data-bs-placement="bottom"
                    title="Add or change a delivery Address">
                    <i class="bi bi-geo-alt-fill"></i>
                </a>
            </div>
            <div class="site-header-account dropdown-p">
                <a href="{{ site_url('account/login') }}">
                    <i class="poco-icon-user"></i>
                </a>
                <div class="dropdown-menu dropdown-account">
                    <div class="account-wrap">
                        <div class="account-inner ">
                            @if (!Auth::isLogged())
                            <div class="p-4">
                                <div class="login-form-head">
                                    <span class="login-form-title">Sign in</span>
                                    <span>
                                        <a class="register-link"
                                        href="{{ site_url('account/register') }}"
                                        data-bs-tooltip="tooltip" 
                                        data-bs-placement="bottom"   
                                        title="Register">Create an Account
                                    </a> 
                                </span>
                            </div>
                            @partial('account::login')
                            <div class="login-form-bottom">
                                <a href="{{ site_url('account/reset') }}" class="lostpass-link"
                                data-bs-tooltip="tooltip" 
                                data-bs-placement="top"  
                                title="Lost your password?">@lang('main::lang.account.login.text_forgot')</a>
                            </div>
                        </div>                        
                        @else
                        @php $items = $rightMenu->menuItems(); @endphp
                        @foreach ($items as $navItem)
                        @foreach ($navItem->items as $item)
                        <a
                        class="dropdown-item{{ ($item->isActive ? ' active' : '') }}"
                        href="{{ $item->url }}"
                        {!! $item->extraAttributes !!}
                        >@lang($item->title)</a>
                        @endforeach
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="site-header-cart menu">
            <a class="cart-contents" id="{{ !$pageIsCheckout ? 'sidebarCollapse' : '' }}"
            data-bs-tooltip="tooltip" 
            data-bs-placement="bottom"
            title="View your shopping cart">
            <span data-cart-count class="count">
                {{ $cart->count() }}
            </span>
            <span class="Price-amount amount"><bdi>
                <span class="Price-currencySymbol">£</span>0.00</bdi></span>
            </a>
        </div>
    </div>
</div>
</div>
</div>

<!-- Modal Address-->
<div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 d-flex align-items-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-5">
                <h2 class="modal-title text-center">Select a delivery Address</h2>                
                @component('localSearch')              
            </div>
        </div>
    </div>
</div>
