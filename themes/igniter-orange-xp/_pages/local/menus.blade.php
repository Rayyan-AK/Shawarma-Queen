---
title: 'igniter.orange::default.menus_title'
permalink: '/:location?local/menus/:category?'
description: ''
layout: default
hideFooter: 1
'[igniter-orange::local-header]': []
'[igniter-orange::fulfillment]':
    previewMode: 0
'[igniter-orange::category-list]':
    menusPage: local.menus
    hideEmpty: 1
    useLinkAnchor: 1
'[igniter-orange::menu-item-list]':
    isGrouped: 1
    collapseCategoriesAfter: 1
    itemsPerPage: 200
    sortOrder: 'menu_priority asc'
    showThumb: 1
    menuThumbWidth: 95
    menuThumbHeight: 80
    categoryThumbWidth: 1240
    categoryThumbHeight: 256
    ingredientThumbWidth: 28
    ingredientThumbHeight: 28
    hideMenuSearch: 0
    hideUnavailableItems: 0
'[igniter-orange::cart-box]': []
'[igniter-orange::fulfillment-modal]':
    previewMode: 0
    defaultOrderType: collection
    menusPage: local.menus
    searchAutocompleteEnabled: 1
---
<div class="bg-white border-bottom border-1">
    <div class="container py-4">
        <div class="mb-3" wire:ignore>
            <a
                class="text-decoration-none"
                href="{{page_url('locations')}}"
            >
                <i class="fa fa-arrow-left-long"></i>&nbsp;&nbsp;
                @lang('igniter.orange::default.button_back')
            </a>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-8">
                <x-igniter-orange::local-header/>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="d-flex justify-content-end">
                    <div class="local-control p-3 border rounded">
                        <div class="d-inline-block w-100 fw-bold text-sm-left text-md-center">
                            <x-igniter-orange::fulfillment/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sticky-top bg-white border-bottom border-1">
    <div class="container">
        <x-igniter-orange::category-list/>
    </div>
</div>
<div class="container pt-3 pb-5">
    <div class="row">
        <div class="col-lg-8">
            <livewire:igniter-orange::menu-item-list/>
        </div>

        <div class="col-lg-4 d-none d-lg-inline-block">
            <livewire:igniter-orange::cart-box/>
        </div>
    </div>
</div>
<livewire:igniter-orange::fulfillment-modal/>