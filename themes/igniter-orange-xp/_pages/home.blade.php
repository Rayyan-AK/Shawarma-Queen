---
title: 'igniter.orange::default.home_title'
description: ~
permalink: /
layout: default
isHidden: 0
security:
    - all
'[igniter-orange::local-search]': []
'[igniter-orange::contact]': []
'[igniter-orange::menu-item-list]':
    isGrouped: 1
    collapseCategoriesAfter: 5
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
---
<!-- Hero Section -->
<div id="hero" style="
    background-image: url('https://bannaphotography.com/wp-content/uploads/2026/02/image-1772221675524-821.webp');
    background-size: cover;
    background-position: center;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    position: relative;
">
    <div style="
        position: absolute;
        inset: 0;
        background: rgba(0,0,0,0.65);
    "></div>
    <div style="position: relative; z-index: 1;">
        <h1 style="
            font-size: 4rem;
            font-weight: bold;
            text-shadow: 2px 4px 8px rgba(0,0,0,0.9);
            letter-spacing: 2px;
        ">Shawarma Queen</h1>
        <p style="
            font-size: 1.4rem;
            margin-top: 1rem;
            text-shadow: 1px 2px 6px rgba(0,0,0,0.9);
            font-weight: 500;
        ">Experience the rich flavours of Lebanon with our traditional recipes.</p>
        <p style="
            font-size: 1.4rem;
            margin-top: 0.5rem;
            text-shadow: 1px 2px 6px rgba(0,0,0,0.9);
            font-weight: 500;
        ">Made fresh daily, with premium ingredients.</p>
        <a href="#menu" onclick="document.getElementById('menu').scrollIntoView({behavior:'smooth'}); return false;"
           style="
               display: inline-block;
               margin-top: 2rem;
               padding: 0.85rem 2.5rem;
               background-color: #e44d26;
               color: white;
               border-radius: 50px;
               text-decoration: none;
               font-size: 1.1rem;
               font-weight: bold;
               box-shadow: 0 4px 15px rgba(0,0,0,0.4);
           ">
            View Our Menu
        </a>
    </div>
</div>

<!-- Menu Section -->
<div id="menu" style="background-color: #f9f9f9;">

    <!-- Search Bar -->
    <div style="
        /*background-color: #f7f7f7;*/
        padding: 2rem 1rem 1rem;
        text-align: center;
        /*border-bottom: 1px solid #eee;*/
    ">
        <h2 style="
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #222;
            letter-spacing: 1px;
        ">Our Menu</h2>
{{--        <div style="--}}
{{--            display: flex;--}}
{{--            justify-content: center;--}}
{{--            margin-bottom: 1.5rem;--}}
{{--        ">--}}
{{--            <div style="--}}
{{--                display: flex;--}}
{{--                align-items: center;--}}
{{--                background: #f4f4f4;--}}
{{--                border-radius: 50px;--}}
{{--                padding: 0.5rem 1.25rem;--}}
{{--                width: 100%;--}}
{{--                max-width: 480px;--}}
{{--                border: 1px solid #ddd;--}}
{{--            ">--}}
{{--                <span style="color: #999; margin-right: 0.5rem;">🔍</span>--}}
{{--                <input--}}
{{--                    type="text"--}}
{{--                    placeholder="Search our delicious menu..."--}}
{{--                    style="--}}
{{--                        border: none;--}}
{{--                        background: transparent;--}}
{{--                        outline: none;--}}
{{--                        width: 100%;--}}
{{--                        font-size: 1rem;--}}
{{--                        color: #333;--}}
{{--                    "--}}
{{--                    oninput="filterMenu(this.value)"--}}
{{--                />--}}
            </div>
        </div>

        <!-- Category Buttons -->
        <div style="
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 0.6rem;
            padding-bottom: 1rem;
        ">
            <a href="#" onclick="scrollToCategory(event, 'all')" style="
                display: inline-block;
                padding: 0.5rem 1.4rem;
                background-color: #e44d26;
                color: white;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 600;
                box-shadow: 0 2px 8px rgba(228,77,38,0.3);
                transition: all 0.2s;
            ">All</a>
            <a href="#" onclick="scrollToCategory(event, 'Soups')" style="
                display: inline-block;
                padding: 0.5rem 1.4rem;
                background-color: #fff;
                color: #e44d26;
                border: 2px solid #e44d26;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 600;
                transition: all 0.2s;
            ">Soups</a>
            <a href="#" onclick="scrollToCategory(event, 'Salads')" style="
                display: inline-block;
                padding: 0.5rem 1.4rem;
                background-color: #fff;
                color: #e44d26;
                border: 2px solid #e44d26;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 600;
                transition: all 0.2s;
            ">Salads</a>
            <a href="#" onclick="scrollToCategory(event, 'Sandwiches')" style="
                display: inline-block;
                padding: 0.5rem 1.4rem;
                background-color: #fff;
                color: #e44d26;
                border: 2px solid #e44d26;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 600;
                transition: all 0.2s;
            ">Sandwiches</a>
            <a href="#" onclick="scrollToCategory(event, 'Plates')" style="
                display: inline-block;
                padding: 0.5rem 1.4rem;
                background-color: #fff;
                color: #e44d26;
                border: 2px solid #e44d26;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 600;
                transition: all 0.2s;
            ">Plates</a>
            <a href="#" onclick="scrollToCategory(event, 'Burgers')" style="
                display: inline-block;
                padding: 0.5rem 1.4rem;
                background-color: #fff;
                color: #e44d26;
                border: 2px solid #e44d26;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 600;
                transition: all 0.2s;
            ">Burgers</a>
            <a href="#" onclick="scrollToCategory(event, 'Combos')" style="
                display: inline-block;
                padding: 0.5rem 1.4rem;
                background-color: #fff;
                color: #e44d26;
                border: 2px solid #e44d26;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 600;
                transition: all 0.2s;
            ">Combos</a>
            <a href="#" onclick="scrollToCategory(event, 'Sides')" style="
                display: inline-block;
                padding: 0.5rem 1.4rem;
                background-color: #fff;
                color: #e44d26;
                border: 2px solid #e44d26;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 600;
                transition: all 0.2s;
            ">Sides</a>
            <a href="#" onclick="scrollToCategory(event, 'Beverages')" style="
                display: inline-block;
                padding: 0.5rem 1.4rem;
                background-color: #fff;
                color: #e44d26;
                border: 2px solid #e44d26;
                border-radius: 50px;
                text-decoration: none;
                font-size: 0.9rem;
                font-weight: 600;
                transition: all 0.2s;
            ">Beverages</a>
        </div>
    </div>

    <!-- Menu Items -->
    <div class="container pt-4 pb-5">
        <div class="row">
            <div class="col-lg-8">
                <livewire:igniter-orange::menu-item-list/>
            </div>
            <div class="col-lg-4 d-none d-lg-inline-block" style="
    position: sticky;
    top: 100px;
    align-self: flex-start;
">
                <livewire:igniter-orange::cart-box/>
            </div>
        </div>
    </div>

    <livewire:igniter-orange::fulfillment-modal/>
</div>

<script>
function scrollToCategory(e, category) {
    e.preventDefault();
    if (category === 'all') {
        document.getElementById('menu').scrollIntoView({behavior: 'smooth'});
        return;
    }
    // Find the category heading and scroll to it
    const headings = document.querySelectorAll('h2, h3, h4');
    for (let heading of headings) {
        if (heading.textContent.trim().toLowerCase() === category.toLowerCase()) {
            heading.scrollIntoView({behavior: 'smooth', block: 'start'});
            return;
        }
    }
}
</script>