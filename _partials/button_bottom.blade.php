<div class="footer-bar footer-bar2">
    <div class="collapse" id="searchCollapse">
        
            @partial('localMenu::searchbar')

    </div>
    <ul class="columns-5 list-group list-group-horizontal">
        <li class="shop"> 
            <a href="{{ restaurant_url('local/menus') }}">
                <span class="title">Shop</span>
            </a>
        </li>
        <li class="my-account">
            <a href="{{ site_url('account/account') }}">
                <span class="title">My Account</span>
            </a>
        </li>
        <li class="search">
            <a data-bs-toggle="collapse" href="#searchCollapse">
                <span class="title">Search</span>
            </a>            
        </li>
        <li class="address">
            <a class="footer-address" 
                href="#"
                data-bs-toggle="modal" 
                data-bs-target="#addressModal"
                data-bs-tooltip="tooltip" 
                data-bs-placement="bottom"
                title="Add or change a delivery Address">
                <span class="title">Address</span>
            </a>
        </li>
        <li class="cart"> 
            <a class="footer-cart-contents" href="{{ site_url('cart') }}" title="View your shopping cart">
                <span data-cart-count class="count">
                    {{ $cart->count() }}
                </span>
                <span class="title">Cart</span>
            </a>
        </li>
    </ul>
</div>

<!-- Modal Address-->
<div class="modal fade" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-header border-bottom-0 d-flex align-items-end">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-2 p-md-5">
                    <div class="text-center">
                        <h2 class="modal-title">Select a delivery Address</h2>
                    </div>                                    
                    @component('localSearch')                             
            </div>
        </div>
    </div>
</div>