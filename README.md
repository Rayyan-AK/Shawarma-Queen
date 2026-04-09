# 🍖 Shawarma Queen — Website README

> **Live Site:** [smurad.scweb.ca/tastyigniter](https://smurad.scweb.ca/tastyigniter/)
> **Platform:** TastyIgniter (Laravel-based restaurant management system)
> **Established:** Windsor, Ontario — 2006

---

## 📌 Overview

Shawarma Queen is a Lebanese restaurant located at **61 University Ave W, Windsor, Ontario, N9G 0B2** (phone: 519-252-4555). This website serves as both a **public-facing storefront** and a **full restaurant management system**, built on the [TastyIgniter](https://tastyigniter.com/) platform. It allows customers to browse the menu, place pickup orders, and make reservations — while giving staff a complete back-office dashboard to manage everything.

---

## 🌐 Public-Facing Pages

### 1. Home Page (`/`)
The landing page features:
- A full-screen hero image of Lebanese food spread
- Restaurant tagline: *"Experience the rich flavours of Lebanon with our traditional recipes. Made fresh daily, with premium ingredients."*
- A prominent **"View Our Menu"** call-to-action button
- Navigation bar with: Login, Register, Contact Us, About Us

- <img width="2878" height="1630" alt="image" src="https://github.com/user-attachments/assets/e4ee9e63-08e5-47e5-b405-8c2a8e47488f" />


### 2. Menu Page (`/` or linked from homepage)
The menu page is the core ordering interface:
- **Category filter tabs** across the top: All, Soups, Salads, Sandwiches, Plates, Burgers, Combos, Sides, Beverages
- **Search bar** to find menu items by name
- **Menu items displayed** as cards with photo, name, description, and price
- Known menu categories and sample items:

- <img width="2878" height="1636" alt="image" src="https://github.com/user-attachments/assets/c42f0d0d-f71b-40d5-ad21-5962b3acba79" />


| Category | Sample Items |
|---|---|
| Soups | Lentil Soup ($5.99) |
| Salads | Tabbouleh Salad ($7.99), Fattoush Salad ($7.99), Greek Salad, Chicken Salad |
| Sides | Lentil Rice ($7.99), Rice ($7.99), Onion Rings ($8.99), Egg Roll ($3.99), Grape Leaves 6pc ($6.99), Hummus ($7.99), Fries ($7.99), Spicy Potatoes ($7.99), Side Pita ($1.25), Side Garlic ($1.99) |
| Beverages | Pop Bottle ($4.25), Pop Can ($2.25) |
| Sandwiches | (available — full list in admin) |
| Plates | (available — full list in admin) |
| Burgers | (available — full list in admin) |
| Combos | (available — full list in admin) |

- **Basket / Cart** (right sidebar) shows items added, quantity controls (+/−), coupon code field, subtotal, and a **Checkout** button showing the running total

### 3. Checkout Page
Reached after clicking Checkout from the basket:
- **"Your Details"** form: First Name, Last Name, Email, Telephone
- **Pickup time:** Defaults to "Pick-up · in 15 min" with a **change** link
- **Leave a note** (general) and **Leave a note for the driver** text areas
- **Payment Method:** Cash On Delivery — *"Pay with cash when you pick up your order or when it is delivered"*
- Terms & Conditions checkbox (links to T&C page)
- **Confirm** button to place the order
- Basket summary shown on the right (items + subtotal + order total)
- Prompt: *"Already have an account? Login Here"*

- <img width="2878" height="1632" alt="image" src="https://github.com/user-attachments/assets/9f55fe26-5e70-4f54-9179-390083741cd7" />


### 4. Contact Us Page (`/contact`)
- Displays restaurant info: name, address (61 University Ave W, Windsor N9G 0B2, Ontario), phone (5192524555)
- **Contact form** with: Enquiry Subject (dropdown), Full Name, Email Address, Telephone, Comment fields
- **SEND** button
- Footer with links: View Menu, Reservation, Contact Us, About-Us, and Facebook social link

- <img width="2878" height="1632" alt="image" src="https://github.com/user-attachments/assets/63b57e45-eef0-4bb8-a1d8-24a18cda88eb" />


### 5. About Us Page (`/about`)
A premium-designed storytelling page with two main sections:

<img width="2878" height="1628" alt="image" src="https://github.com/user-attachments/assets/c746cfe3-3086-408f-a798-2d8b0af16f27" />


<img width="2878" height="1632" alt="image" src="https://github.com/user-attachments/assets/52a93f09-a6b0-4839-a43a-9ff114d87cca" />


<img width="2878" height="1636" alt="image" src="https://github.com/user-attachments/assets/c9dfdaec-1f84-4063-b122-8201c276f758" />


<img width="2874" height="1632" alt="image" src="https://github.com/user-attachments/assets/5d036867-cd48-443b-84bb-fbee8ee78cc0" />

**Hero Section:**
- Dark, textured background
- Badge: *"EST. WINDSOR, ONTARIO · 2006"*
- Title: *"Our Story"* (italic/serif typography)
- Subtitle: *"From the streets of Lebanon to the heart of Windsor — a family's journey, told one bite at a time."*

**"A Dream Carried Across the Ocean" Section:**
- Cream/off-white background
- Story text: The founder left Lebanon during wartime, built the restaurant from the ground up over 20+ years
- Key quote: *"Real food, done right, with a story in every bite."*
- Stats grid: **20+ Years of Service** · 🇱🇧 Lebanese Heritage · **1 Family Dream** · ∞ Stories Shared

**"The Pillars of Shawarma Queen" Section:**
- Dark background with three value cards:
  - **01 — Generational Recipes:** Every spice blend and marinade refined across generations
  - **02 — Guests, Not Customers:** Every visitor is treated as a guest in the home
  - **03 — Community First:** Rooted in Lebanon, committed to Windsor

---

## 🔐 Authentication

| Page | Description |
|---|---|
| Login | Returning customers sign in to their account |
| Register | New customers create an account to track orders |

Customers are prompted to log in or register at checkout. Guest checkout is also supported.

<img width="2878" height="1634" alt="image" src="https://github.com/user-attachments/assets/37468bcd-0e31-4773-8e37-ab54c9fd475d" />


<img width="2878" height="1634" alt="image" src="https://github.com/user-attachments/assets/51af6288-5269-4297-9db2-02b75e97b6d5" />


---

## 🛠️ Admin Dashboard (Staff Only)

Accessible via a separate admin login. The dashboard is powered by TastyIgniter's back-office panel.

### Dashboard
- **Date range selector** for filtering reports (e.g., Mar 11 – Apr 9, 2026)
- **Reports Chart** displaying: Customers, Orders, Reservations over time
- **KPI Cards:**
  - Total Cash Payments: $477.93
  - Total Sales: $477.93
  - Total Lost Sales: $69.92
  - Number of Completed Orders: 3
 
  - <img width="2878" height="1628" alt="image" src="https://github.com/user-attachments/assets/f87e6e7e-9c12-4c91-bd92-34f33055c2a1" />


### Orders
Full order management table with columns:
- ID, Customer Name, Type (Pick-up/Delivery), Order Time Is ASAP, Order Time, Ready Time/Date, Status, Payment, Order Total
- Status options: **Completed** (green), **Incomplete** (grey)
- All current orders are Pick-up type, ASAP timing
- Edit button (pencil icon) per order

- <img width="2878" height="1636" alt="image" src="https://github.com/user-attachments/assets/92e4a656-8b89-4b60-9070-90b8aa858602" />


**Sample recent orders (as of Apr 9, 2026):**

| ID | Customer | Date | Status | Payment | Total |
|---|---|---|---|---|---|
| 14 | test test | Apr 9, 2026 | Completed | Cash On Delivery | $208.32 |
| 12 | shaheen murad | Apr 7, 2026 | Completed | Cash On Delivery | $235.97 |
| 11 | — | Apr 7, 2026 | Completed | Cash On Delivery | $235.97 |
| 10 | shaheen murad | Apr 7, 2026 | Completed | Cash On Delivery | $5.99 |

### Reservations
Manage table reservations from customers.

<img width="2878" height="1632" alt="image" src="https://github.com/user-attachments/assets/b196fa90-d025-4bdd-a50e-68aa93e57e8e" />


### Customers
View and manage registered customer accounts.

<img width="2878" height="1630" alt="image" src="https://github.com/user-attachments/assets/9a2a2f7c-7fc3-4043-9346-c112ec2f3033" />


### Restaurant (Menu Management)
Sub-sections:
- **Menu Items** — Full list of all menu items with name, category, price, stock qty, special status, and enabled/disabled toggle
- **Mealtimes** — Set service hours for different meal periods
- **Inventory** — Track stock levels
- **Dining Areas** — Manage seating areas

### Marketing
Tools for promotions, coupons, and customer outreach.

### Design
Customize the appearance of the public-facing site.

### Tools
Utility tools for the restaurant system.

### Manage
General settings and site management.

---

## 🍽️ Menu Items (Full Admin View — Sides & Beverages)

| Item | Category | Price |
|---|---|---|
| Lentil Rice | Sides | $7.99 |
| Rice | Sides | $7.99 |
| Onion Rings | Sides | $8.99 |
| Egg Roll | Sides | $3.99 |
| Grape Leaves (6 pcs) | Sides | $6.99 |
| Hummus | Sides | $7.99 |
| Fries | Sides | $7.99 |
| Spicy Potatoes | Sides | $7.99 |
| Side Pita | Sides | $1.25 |
| Side Garlic | Sides | $1.99 |
| Pop (Bottle) | Beverages | $4.25 |
| Pop (Can) | Beverages | $2.25 |

---

## 🏗️ Technical Stack

| Layer | Technology |
|---|---|
| Platform | [TastyIgniter](https://tastyigniter.com/) |
| Backend Framework | Laravel (PHP) |
| Frontend | Blade templates, custom CSS, JS |
| Hosting | scweb.ca (shared/managed hosting) |
| Payment | Cash On Delivery (only method currently active) |
| Order Type | Pick-up (primary); delivery notes field present |

---

## 📂 Key URLs

| URL | Page |
|---|---|
| `/` | Home |
| `/` | Menu & Ordering |
| `/checkout` | Checkout |
| `/contact` | Contact Us |
| `/about` | About Us |
| `/login` | Customer Login |
| `/register` | Customer Registration |
| `/admin` | Admin Dashboard (staff only) |

---

## 📱 Social & Contact

- **Facebook:** Linked in footer
- **Phone:** 519-252-4555
- **Address:** 61 University Ave W, Windsor, Ontario N9G 0B2

---

## 📝 Notes for Developers

- The site is hosted at `smurad.scweb.ca/tastyigniter/` — the `/tastyigniter/` subdirectory is the app root
- All orders currently use **Cash On Delivery** — no online payment gateway is connected
- The admin panel shows some orders with `$0.00` total and no customer name, suggesting test/incomplete sessions
- Lost sales ($69.92) represent orders that were started but not completed
- Stock Qty shows `0` for all menu items — inventory tracking appears not to be actively used
- The site's `robots.txt` disallows web crawlers from indexing the site

---
