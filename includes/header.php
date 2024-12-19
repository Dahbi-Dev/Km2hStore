
// includes/header.php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>

// includes/navbar.php
<nav class="bg-white shadow-lg" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between h-16">
            <div class="flex">
                <a href="/" class="flex-shrink-0 flex items-center">
                    <img class="h-8 w-auto" src="/assets/images/logo.png" alt="Logo">
                </a>
                
                <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                    <!-- Clothes Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="text-gray-500 hover:text-gray-700 px-3 py-2 rounded-md text-sm font-medium">
                            Clothes
                        </button>
                        <div x-show="open" @click.away="open = false" class="absolute z-50 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5">
                            <a href="/products/clothes/men.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Men</a>
                            <a href="/products/clothes/women.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Women</a>
                            <a href="/products/clothes/kids.php" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Kids</a>
                        </div>
                    </div>
                    <!-- Similar dropdowns for Shoes and Gadgets -->
                </div>
            </div>
            
            <div class="flex items-center">
                <a href="/cart.php" class="p-2 text-gray-400 hover:text-gray-500">
                    <span class="sr-only">Cart</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <span id="cart-count" class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 bg-red-600 rounded-full">0</span>
                </a>
            </div>
        </div>
    </div>
</nav>
