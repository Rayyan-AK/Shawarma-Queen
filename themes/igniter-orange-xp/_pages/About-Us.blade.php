---
title: 'About Us'
permalink: 'About Us'
layout: default
description: ~
isHidden: 0
security:
    - all
'[igniter-orange::account-dashboard]': []
---
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;0,900;1,400;1,700&family=Cormorant+Garamond:ital,wght@0,300;0,400;1,300;1,400&family=Barlow:wght@300;400;500&display=swap" rel="stylesheet">

<style>
  :root {
    --gold:       #FFFFFF;
    --gold-light: #FFFFFF;
    --cream:      #F5EFE0;
    --dark:       #1A1208;
    --red:        #D30000;
    --cedar:      #2E4A2A;
    --text:       #2C1F0E;
    --muted:      #7A6A50;
  }

  *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

  html { scroll-behavior: smooth; }

  body {
    background: var(--dark);
    color: var(--cream);
    font-family: 'Barlow', sans-serif;
    font-weight: 300;
    overflow-x: hidden;
  }
  
  /* ── HERO ───────────────────────────────── */
  .hero {
    position: relative;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
    padding: 4rem 2rem;
  }

  .hero-bg {
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 80% 60% at 50% 100%, rgba(200,146,42,.18) 0%, transparent 70%),
      radial-gradient(ellipse 60% 40% at 20% 20%, rgba(139,34,16,.15) 0%, transparent 60%),
      radial-gradient(ellipse 50% 50% at 80% 10%, rgba(46,74,42,.12) 0%, transparent 60%);
    background-color: var(--dark);
  }

  /* Arabesque geometric pattern overlay */
  .hero-pattern {
    position: absolute;
    inset: 0;
    opacity: .045;
    background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23C8922A' stroke-width='1'%3E%3Cpath d='M40 0 L80 40 L40 80 L0 40 Z'/%3E%3Cpath d='M40 10 L70 40 L40 70 L10 40 Z'/%3E%3Ccircle cx='40' cy='40' r='15'/%3E%3Cpath d='M40 0 L40 10 M80 40 L70 40 M40 80 L40 70 M0 40 L10 40'/%3E%3Cpath d='M20 20 L60 20 L60 60 L20 60 Z'/%3E%3C/g%3E%3C/svg%3E");
    background-size: 80px 80px;
  }

  .hero-ornament {
    position: relative;
    display: flex;
    align-items: center;
    gap: 1.2rem;
    margin-bottom: 2rem;
    animation: fadeDown .9s ease both;
  }

  .ornament-line {
    width: 80px;
    height: 1px;
    background: linear-gradient(90deg, transparent, var(--gold));
  }
  .ornament-line.right {
    background: linear-gradient(90deg, var(--gold), transparent);
  }

  .ornament-diamond {
    width: 10px;
    height: 10px;
    background: var(--gold);
    transform: rotate(45deg);
    flex-shrink: 0;
  }

  .hero-eyebrow {
    font-family: 'Barlow', sans-serif;
    font-weight: 500;
    font-size: .7rem;
    letter-spacing: .35em;
    text-transform: uppercase;
    color: var(--gold);
  }

  .hero-title {
    position: relative;
    font-family: 'Playfair Display', serif;
    font-size: clamp(4rem, 12vw, 9rem);
    font-weight: 900;
    line-height: .92;
    letter-spacing: -.02em;
    animation: fadeUp .9s .2s ease both;
  }

  .hero-title span {
    display: block;
    font-style: italic;
    font-weight: 400;
    color: var(--gold);
    font-size: .55em;
    letter-spacing: .04em;
    margin-bottom: .1em;
  }

  .hero-sub {
    font-family: 'Cormorant Garamond', serif;
    font-size: clamp(1.1rem, 2.5vw, 1.5rem);
    font-style: italic;
    color: rgba(245,239,224,.65);
    margin-top: 1.6rem;
    max-width: 520px;
    line-height: 1.6;
    animation: fadeUp .9s .4s ease both;
  }

  .hero-scroll {
    position: absolute;
    bottom: 2.5rem;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: .5rem;
    color: var(--muted);
    font-size: .65rem;
    letter-spacing: .2em;
    text-transform: uppercase;
    animation: fadeUp 1s .8s ease both;
  }

  .scroll-bar {
    width: 1px;
    height: 50px;
    background: linear-gradient(to bottom, var(--gold), transparent);
    animation: scrollPulse 2s infinite;
  }

  /* ── SECTION SHARED ──────────────────────── */
  section { position: relative; }

  .container {
    max-width: 1100px;
    margin: 0 auto;
    padding: 0 2rem;
  }

  /* ── ORIGIN STORY ────────────────────────── */
  .origin {
    padding: 8rem 0 6rem;
    background: var(--cream);
    color: var(--text);
    position: relative;
    overflow: hidden;
  }

  .origin::before {
    content: '';
    position: absolute;
    top: -1px; left: 0; right: 0;
    height: 80px;
    background: var(--dark);
    clip-path: polygon(0 0, 100% 0, 100% 30%, 50% 100%, 0 30%);
  }

  .origin-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 5rem;
    align-items: center;
    padding-top: 2rem;
  }

  .section-label {
    display: inline-flex;
    align-items: center;
    gap: .8rem;
    font-size: .65rem;
    letter-spacing: .3em;
    text-transform: uppercase;
    color: var(--gold);
    font-weight: 500;
    margin-bottom: 1.5rem;
  }

  .section-label::before {
    content: '';
    width: 30px;
    height: 1px;
    background: var(--gold);
  }

  .section-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2.2rem, 5vw, 3.4rem);
    font-weight: 700;
    line-height: 1.1;
    color: var(--dark);
    margin-bottom: 1.8rem;
  }

  .section-title em {
    font-style: italic;
    color: var(--red);
  }

  .body-text {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.2rem;
    line-height: 1.85;
    color: #4A3520;
    margin-bottom: 1.2rem;
  }

  /* Decorative card */
  .origin-visual {
    position: relative;
  }

  .origin-card {
    background: var(--dark);
    border-radius: 4px;
    padding: 3rem 2.5rem;
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(200,146,42,.25);
  }

  .origin-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background:
      radial-gradient(ellipse 80% 60% at 50% 0%, rgba(200,146,42,.12) 0%, transparent 70%);
  }

  .origin-card-pattern {
    position: absolute;
    inset: 0;
    opacity: .06;
    background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23C8922A' stroke-width='1'%3E%3Cpath d='M30 0 L60 30 L30 60 L0 30 Z'/%3E%3Ccircle cx='30' cy='30' r='12'/%3E%3Cpath d='M15 15 L45 15 L45 45 L15 45 Z'/%3E%3C/g%3E%3C/svg%3E");
    background-size: 60px 60px;
  }

  .stat-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 2px;
    position: relative;
  }

  .stat-item {
    padding: 2rem 1.5rem;
    background: rgba(245,239,224,.03);
    border: 1px solid rgba(200,146,42,.12);
    text-align: center;
    transition: background .3s;
  }

  .stat-item:hover { background: rgba(200,146,42,.08); }

  .stat-num {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    font-weight: 900;
    color: var(--gold);
    display: block;
    line-height: 1;
    margin-bottom: .3rem;
  }

  .stat-label {
    font-size: .7rem;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: rgba(245,239,224,.5);
  }

  .origin-quote {
    position: relative;
    margin-top: 2.5rem;
    padding: 1.8rem 2rem 1.8rem 3rem;
    border-left: 3px solid var(--gold);
    color: rgba(245,239,224,.8);
  }

  .origin-quote::before {
    content: '"';
    position: absolute;
    top: -.5rem;
    left: .8rem;
    font-family: 'Playfair Display', serif;
    font-size: 5rem;
    color: var(--gold);
    opacity: .4;
    line-height: 1;
  }

  .origin-quote p {
    font-family: 'Cormorant Garamond', serif;
    font-style: italic;
    font-size: 1.15rem;
    line-height: 1.7;
    position: relative;
  }

  /* ── VALUES ──────────────────────────────── */
  .values {
    padding: 7rem 0;
    background: var(--dark);
    position: relative;
    overflow: hidden;
  }

  .values-header {
    text-align: center;
    margin-bottom: 5rem;
  }

  .values-header .section-title {
    color: var(--cream);
  }

  .values-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
  }

  .value-card {
    padding: 3rem 2rem;
    background: rgba(245,239,224,.025);
    border: 1px solid rgba(200,146,42,.1);
    position: relative;
    overflow: hidden;
    transition: all .4s ease;
    cursor: default;
  }

  .value-card:hover {
    background: rgba(200,146,42,.07);
    border-color: rgba(200,146,42,.35);
    transform: translateY(-4px);
  }

  .value-card:hover .value-icon-bg {
    transform: scale(1.15);
    opacity: .18;
  }

  .value-icon-bg {
    position: absolute;
    top: -1rem;
    right: -1rem;
    font-size: 7rem;
    opacity: .07;
    transition: all .4s ease;
    pointer-events: none;
    line-height: 1;
  }

  .value-num {
    font-family: 'Playfair Display', serif;
    font-size: 3.5rem;
    font-weight: 900;
    color: rgba(200,146,42,.18);
    line-height: 1;
    margin-bottom: .5rem;
  }

  .value-title {
    font-family: 'Playfair Display', serif;
    font-size: 1.4rem;
    font-weight: 700;
    color: var(--gold-light);
    margin-bottom: 1rem;
  }

  .value-text {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.1rem;
    line-height: 1.75;
    color: rgba(245,239,224,.6);
  }

  /* ── FOUNDER ──────────────────────────────── */
  .founder {
    padding: 8rem 0;
    background: var(--cream);
    color: var(--text);
    position: relative;
    overflow: hidden;
  }

  .founder::before {
    content: '';
    position: absolute;
    top: -1px; left: 0; right: 0;
    height: 60px;
    background: var(--dark);
    clip-path: polygon(0 0, 100% 0, 100% 100%, 0 0);
  }

  .founder-inner {
    display: grid;
    grid-template-columns: 1fr 420px;
    gap: 6rem;
    align-items: center;
  }

  /* Cedar tree decorative element */
  .cedar-emblem {
    width: 420px;
    height: 420px;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .cedar-ring {
    position: absolute;
    border-radius: 50%;
    border: 1px solid rgba(200,146,42,.25);
  }

  .cedar-ring:nth-child(1) { width: 100%; height: 100%; }
  .cedar-ring:nth-child(2) { width: 82%; height: 82%; border-color: rgba(200,146,42,.18); }
  .cedar-ring:nth-child(3) { width: 65%; height: 65%; border-color: rgba(200,146,42,.12); }

  .cedar-center {
    width: 260px;
    height: 260px;
    background: var(--dark);
    border-radius: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    border: 1px solid rgba(200,146,42,.3);
    position: relative;
    z-index: 1;
    padding: 2rem;
  }

  .cedar-year {
    font-family: 'Playfair Display', serif;
    font-size: 1rem;
    color: var(--gold);
    letter-spacing: .2em;
    font-weight: 400;
    margin-bottom: .3rem;
  }

  .cedar-established {
    font-family: 'Playfair Display', serif;
    font-size: 3rem;
    font-weight: 900;
    color: var(--cream);
    line-height: 1;
    margin-bottom: .5rem;
  }

  .cedar-flag {
    font-size: 2rem;
    margin: .5rem 0;
  }

  .cedar-name {
    font-family: 'Cormorant Garamond', serif;
    font-style: italic;
    font-size: 1rem;
    color: rgba(245,239,224,.55);
    line-height: 1.4;
  }

  /* ── TIMELINE ─────────────────────────────── */
  .timeline {
    padding: 7rem 0;
    background: #130E04;
    position: relative;
  }

  .timeline-header {
    text-align: center;
    margin-bottom: 5rem;
  }

  .timeline-header .section-title {
    color: var(--cream);
  }

  .timeline-track {
    position: relative;
    max-width: 700px;
    margin: 0 auto;
  }

  .timeline-track::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0; bottom: 0;
    width: 1px;
    background: linear-gradient(to bottom, transparent, var(--gold), transparent);
    transform: translateX(-50%);
  }

  .tl-item {
    display: flex;
    align-items: flex-start;
    gap: 2rem;
    margin-bottom: 3.5rem;
    position: relative;
  }

  .tl-item:nth-child(even) { flex-direction: row-reverse; }

  .tl-content {
    flex: 1;
    text-align: right;
  }

  .tl-item:nth-child(even) .tl-content { text-align: left; }

  .tl-dot {
    width: 14px;
    height: 14px;
    background: var(--gold);
    border-radius: 50%;
    flex-shrink: 0;
    margin-top: .3rem;
    position: relative;
    z-index: 1;
    box-shadow: 0 0 0 4px rgba(200,146,42,.2), 0 0 0 8px rgba(200,146,42,.07);
  }

  .tl-year {
    font-family: 'Playfair Display', serif;
    font-size: 1.5rem;
    font-weight: 900;
    color: var(--gold);
    margin-bottom: .3rem;
  }

  .tl-text {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.1rem;
    line-height: 1.65;
    color: rgba(245,239,224,.65);
  }

  /* ── CLOSING ──────────────────────────────── */
  .closing {
    padding: 8rem 2rem;
    text-align: center;
    background: var(--dark);
    position: relative;
    overflow: hidden;
  }

  .closing-bg {
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse 70% 50% at 50% 50%, rgba(200,146,42,.1), transparent 70%);
  }

  .closing-title {
    font-family: 'Playfair Display', serif;
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 900;
    line-height: 1.15;
    margin-bottom: 1.5rem;
    position: relative;
  }

  .closing-title em {
    font-style: italic;
    color: var(--gold);
  }

  .closing-text {
    font-family: 'Cormorant Garamond', serif;
    font-size: 1.25rem;
    font-style: italic;
    line-height: 1.8;
    color: rgba(245,239,224,.7);
    max-width: 580px;
    margin: 0 auto 3rem;
    position: relative;
  }

  .btn {
    display: inline-block;
    padding: 1rem 2.8rem;
    background: transparent;
    border: 1px solid var(--gold);
    color: var(--gold);
    font-family: 'Barlow', sans-serif;
    font-size: .75rem;
    font-weight: 500;
    letter-spacing: .25em;
    text-transform: uppercase;
    text-decoration: none;
    position: relative;
    overflow: hidden;
    transition: color .35s;
    cursor: pointer;
  }

  .btn::before {
    content: '';
    position: absolute;
    inset: 0;
    background: var(--gold);
    transform: scaleX(0);
    transform-origin: right;
    transition: transform .35s ease;
    z-index: 0;
  }

  .btn:hover::before { transform: scaleX(1); transform-origin: left; }
  .btn:hover { color: var(--dark); }

  .btn span { position: relative; z-index: 1; }

  /* ── ANIMATIONS ───────────────────────────── */
  @keyframes fadeDown {
    from { opacity: 0; transform: translateY(-20px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  @keyframes fadeUp {
    from { opacity: 0; transform: translateY(30px); }
    to   { opacity: 1; transform: translateY(0); }
  }

  @keyframes scrollPulse {
    0%, 100% { opacity: .4; }
    50%       { opacity: 1; }
  }

  .reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: opacity .8s ease, transform .8s ease;
  }

  .reveal.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .reveal-delay-1 { transition-delay: .15s; }
  .reveal-delay-2 { transition-delay: .3s; }
  .reveal-delay-3 { transition-delay: .45s; }

  /* ── RESPONSIVE ───────────────────────────── */
  @media (max-width: 768px) {
    .origin-grid { grid-template-columns: 1fr; gap: 3rem; }
    .values-grid { grid-template-columns: 1fr; }
    .founder-inner { grid-template-columns: 1fr; }
    .cedar-emblem { width: 280px; height: 280px; margin: 0 auto; }
    .cedar-established { font-size: 2.2rem; }
    .tl-item, .tl-item:nth-child(even) { flex-direction: column; align-items: flex-start; }
    .tl-track::before { left: 7px; }
    .tl-content, .tl-item:nth-child(even) .tl-content { text-align: left; }
    .stat-grid { grid-template-columns: 1fr 1fr; }
  }
</style>
</head>
<body>

<!-- ── HERO ──────────────────────────────────────────── -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-pattern"></div>

  <div class="hero-ornament">
    <div class="ornament-line"></div>
    <div class="ornament-diamond"></div>
    <span class="hero-eyebrow">Est. Windsor, Ontario &nbsp;·&nbsp; 2006</span>
    <div class="ornament-diamond"></div>
    <div class="ornament-line right"></div>
  </div>

  <h1 class="hero-title">
    <span>Our</span>
    Story
  </h1>

  <p class="hero-sub">
    From the streets of Lebanon to the heart of Windsor — a family's journey, told one bite at a time.
  </p>

  <div class="hero-scroll">
    <div class="scroll-bar"></div>
    Scroll
  </div>
</section>

<!-- ── ORIGIN ─────────────────────────────────────────── -->
<section class="origin">
  <div class="container">
    <div class="origin-grid">
      <div class="reveal">
        <div class="section-label">Where It All Began</div>
        <h2 class="section-title">A Dream Carried Across <em>the Ocean</em></h2>
        <p class="body-text">
          Over 20 years ago, our founder left Lebanon during a time of war, carrying nothing but a dream to build a better life for his family. He understood what hard work really meant and he built this restaurant from the ground up, one plate at a time.
        </p>
        <p class="body-text">
          What started as a fresh start in a new country eventually became a local staple. But through every year, every recipe, every customer who walked through that door we never forgot why we started.
        </p>
        <p class="body-text">
          To us, food is personal. It's the recipes passed down through generations, the spices perfected over decades, and the care we put into every single wrap.
        </p>
      </div>

      <div class="reveal reveal-delay-1 origin-visual">
        <div class="origin-card">
          <div class="origin-card-pattern"></div>
          <div class="stat-grid">
            <div class="stat-item">
              <span class="stat-num">20+</span>
              <span class="stat-label">Years of Service</span>
            </div>
            <div class="stat-item">
              <span class="stat-num">🇱🇧</span>
              <span class="stat-label">Lebanese Heritage</span>
            </div>
            <div class="stat-item">
              <span class="stat-num">1</span>
              <span class="stat-label">Family Dream</span>
            </div>
            <div class="stat-item">
              <span class="stat-num">∞</span>
              <span class="stat-label">Stories Shared</span>
            </div>
          </div>
          <div class="origin-quote">
            <p>Real food, done right, with a story in every bite.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── VALUES ─────────────────────────────────────────── -->
<section class="values">
  <div class="container">
    <div class="values-header reveal">
      <div class="section-label" style="justify-content:center;">What We Stand For</div>
      <h2 class="section-title" style="color:var(--cream);">The Pillars of <em style="color:var(--gold)">Shawarma Queen</em></h2>
    </div>

    <div class="values-grid">
      <div class="value-card reveal">
        <div class="value-icon-bg">🫙</div>
        <div class="value-num">01</div>
        <div class="value-title">Generational Recipes</div>
        <p class="value-text">Every spice blend, every marinade has been refined across generations. These aren't shortcuts they're heirlooms.</p>
      </div>
      <div class="value-card reveal reveal-delay-1">
        <div class="value-icon-bg">🏠</div>
        <div class="value-num">02</div>
        <div class="value-title">Guests, Not Customers</div>
        <p class="value-text">We don't see transactions. We see guests in our home. Whether it's your first visit or your hundredth, you belong here.</p>
      </div>
      <div class="value-card reveal reveal-delay-2">
        <div class="value-icon-bg">🌿</div>
        <div class="value-num">03</div>
        <div class="value-title">Community First</div>
        <p class="value-text">Our roots in Lebanon and our love for Windsor grow stronger each year. This city gave us a home we give it our best.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── FOUNDER ─────────────────────────────────────────── -->
<section class="founder">
  <div class="container">
    <div class="founder-inner">
      <div class="reveal">
        <div class="section-label">The Heart Behind It</div>
        <h2 class="section-title">Built by <em>Family,</em><br>for Family</h2>
        <p class="body-text">
          Shawarma Queen isn't just a restaurant — it's a living testament to what courage and love can build. Our founder didn't just bring recipes across the ocean. He brought a philosophy: that good food, made with intention, can make strangers feel like family.
        </p>
        <p class="body-text">
          Twenty years later, that philosophy feeds Windsor every single day. Our children, our neighbours, our regulars everyone who sits down at our table becomes part of this story.
        </p>
        <p class="body-text">
          Shawarma Queen isn't just a part of Windsor. It's a part of our story and we're so glad you're a part of it too.
        </p>
      </div>

      <div class="reveal reveal-delay-1">
        <div class="cedar-emblem">
          <div class="cedar-ring"></div>
          <div class="cedar-ring"></div>
          <div class="cedar-ring"></div>
          <div class="cedar-center">
            <div class="cedar-year">Since</div>
            <div class="cedar-established">2006</div>
            <div class="cedar-flag">🇱🇧</div>
            <div class="cedar-name">From Lebanon<br>to Windsor,<br>with love</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── TIMELINE ─────────────────────────────────────────── -->
<section class="timeline">
  <div class="container">
    <div class="timeline-header reveal">
      <div class="section-label" style="justify-content:center;">Two Decades of Flavour</div>
      <h2 class="section-title" style="color:var(--cream);">Our <em style="color:var(--gold)">Journey</em></h2>
    </div>

    <div class="timeline-track">
      <div class="tl-item reveal">
        <div class="tl-content">
          <div class="tl-year">Lebanon</div>
          <div class="tl-text">A family's story begins. War forces a difficult decision to leave everything behind and chase a safer future.</div>
        </div>
        <div class="tl-dot"></div>
        <div style="flex:1"></div>
      </div>

      <div class="tl-item reveal reveal-delay-1">
        <div style="flex:1"></div>
        <div class="tl-dot"></div>
        <div class="tl-content">
          <div class="tl-year">Windsor</div>
          <div class="tl-text">A new country. A blank canvas. The hard work of building a life from scratch begins in Ontario.</div>
        </div>
      </div>

      <div class="tl-item reveal">
        <div class="tl-content">
          <div class="tl-year">2006</div>
          <div class="tl-text">Shawarma Queen opens its doors in downtown Windsor for the very first time. The dream becomes real.</div>
        </div>
        <div class="tl-dot"></div>
        <div style="flex:1"></div>
      </div>

      <div class="tl-item reveal reveal-delay-1">
        <div style="flex:1"></div>
        <div class="tl-dot"></div>
        <div class="tl-content">
          <div class="tl-year">A Decade</div>
          <div class="tl-text">Word spreads through Windsor. Regulars become friends. The restaurant earns its place as a community cornerstone.</div>
        </div>
      </div>

      <div class="tl-item reveal">
        <div class="tl-content">
          <div class="tl-year">Today</div>
          <div class="tl-text">20+ years on, the recipes are still the same. The care is still the same. The family is still here for you.</div>
        </div>
        <div class="tl-dot"></div>
        <div style="flex:1"></div>
      </div>
    </div>
  </div>
</section>

<!-- ── CLOSING ─────────────────────────────────────────── -->
<section class="closing">
  <div class="closing-bg"></div>
  <h2 class="closing-title reveal">
    Come As a Stranger,<br><em>Leave As Family.</em>
  </h2>
  <p class="closing-text reveal reveal-delay-1">
    Every wrap we make carries a piece of this story. We hope you taste it and we hope to see you soon.
  </p>
  <a href="https://smurad.scweb.ca/tastyigniter/" class="btn reveal reveal-delay-2" target="_blank"><span>Go Home</span></a>
</section>

<script>
  // Intersection Observer for reveal animations
  const reveals = document.querySelectorAll('.reveal');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        observer.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  reveals.forEach(el => observer.observe(el));
</script>
</body>
</html>