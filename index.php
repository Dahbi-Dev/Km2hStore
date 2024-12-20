
// index.php
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<div class="relative bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto">
        <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <div class="slider">
                <!-- Dynamic slider content will be loaded here -->
            </div>
            <div class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                <div class="text-center lg:text-left">
                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
                        <span class="block xl:inline">Welcome to Our</span>
                        <span class="block text-indigo-600 xl:inline">E-commerce Store</span>
                    </h1>
                    <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                        Discover our latest collection of clothes, shoes, and gadgets.
                    </p>
                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                        <div class="rounded-md shadow">
                            <a href="#products" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 md:py-4 md:text-lg md:px-10">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Products Section -->
<div id="products" class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Featured Products</h2>
        
        <!-- Filters -->
        <div class="flex flex-col md:flex-row gap-4 mt-6">
            <select class="form-select" id="category-filter">
                <option value="">All Categories</option>
                <option value="clothes">Clothes</option>
                <option value="shoes">Shoes</option>
                <option value="gadgets">Gadgets</option>
            </select>
            <select class="form-select" id="price-filter">
                <option value="">Price Range</option>
                <option value="0-50">$0 - $50</option>
                <option value="51-100">$51 - $100</option>
                <option value="101+">$101+</option>
            </select>
        </div>

        <!-- Products Grid -->
        <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8" id="products-grid">
            <!-- Products will be dynamically loaded here -->
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
