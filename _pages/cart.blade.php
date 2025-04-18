---
title: main::lang.cart.title
layout: default
permalink: /cart

'[localSearch]':

'[localBox]':

'[cartBox]':
    pageIsCart: 1

'[localMenu]':
    forceRedirect: 0
---
<div class="col-ful">
    <div class="row py-4">
        <div class="col col-lg-6 m-auto">
            <div class="cart-buttons">
                <a
                    class="btn btn-link btn-block btn-md"
                    href="{{ restaurant_url('local/menus') }}"
                >@lang('igniter.cart::default.text_add_more_items')</a>
            </div>

            @partial('cartBox::container')
        </div>
    </div>
</div>
