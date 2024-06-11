---
title: 'main::lang.local.menus.title'
permalink: '/:location?local/menus/:category?'
description: ''
layout: local
'[localReview]':
    pageLimit: 6
    sort: 'created_at asc'
'[localMenu]':
    isGrouped: 1
    collapseCategoriesAfter: 51.0
    menusPerPage: 50.0
    showMenuImages: 1
    menuImageWidth: 450.0
    menuImageHeight: 450.0
    menuCategoryWidth: 1240.0
    menuCategoryHeight: 256.0
    defaultLocationParam: local
    localNotFoundPage: home
    hideMenuSearch: 0
    forceRedirect: 1
---
<div class="nav-breadcrumb d-block mt-4">
    
    <a href="{{ page_url('local/menus') }}">{{ $locationCurrent->location_name }}</a>&nbsp;
    <span>
        <i class="poco-icon-angle-right"></i>&nbsp;
    </span>
    <a href="{{ page_url('local/gallery') }}">Gallery</a>&nbsp;
</div>
<div id="thumb-wrap">
    @partial('localReview::review_menu')
</div>
<div class="bg-white border-bottom my-3 d-flex d-lg-none sticky-category-menu ms-me--15">
    @partial('categories::mobile')
</div>
<div class="box-divider d-block"></div>
    @component('localMenu')