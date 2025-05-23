<!-- Header -->
<header class="w-[95%] mx-auto mt-4 bg-white rounded shadow px-2 py-1">
    <!-- Mobile Header -->
    <div class="flex justify-between items-center md:hidden">
        <button id="mobileMenuBtn" class="text-lg text-gray-600"><i class="fas fa-bars"></i></button>
        <h1 class="text-base font-bold text-orange-500 font-serif">BookStore</h1>
        <div class="flex items-center space-x-3 text-lg text-gray-600">
            <a href="#"><i class="fas fa-user"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
        </div>
    </div>

    <!-- Mobile Search -->
    <div class="mt-2 md:hidden">
        <div class="flex items-center border rounded-full px-2 py-1">
            <i class="fas fa-search text-gray-400 text-sm"></i>
            <input type="text" placeholder="Search books" class="ml-2 w-full focus:outline-none text-xs" />
        </div>
    </div>

    <!-- Desktop Header -->
    <div class="hidden md:flex justify-between items-center h-[56px]">
        <h1 class="text-orange-500 font-bold text-xl font-serif">BookStore</h1>
        <div class="flex items-center space-x-2 w-full max-w-md">
            <input class="py-1.5 px-3 rounded border w-full text-xs focus:outline-none" type="text"
                placeholder="Search books">
            <button class="bg-orange-500 text-white text-xs px-3 py-1 rounded hover:bg-orange-600">Search</button>
        </div>

        <div class="flex items-center space-x-4 text-orange-500 text-sm">
            <!-- Navigation Links -->
            <a href="Books" class="hover:text-orange-600 font-bold">Home</a>
            <a href="contact" class="hover:text-orange-600 font-bold">Contact Us</a>

            <!-- Account -->
            <div class="relative">
                <button id="accountBtn" class="flex items-center space-x-1 font-medium">
                    <i class="fas fa-user"></i><span>Account</span><i class="fas fa-chevron-down text-xs"></i>
                </button>
                <div id="accountMenu"
                    class="hidden absolute right-0 mt-2 w-40 bg-white border rounded shadow z-50 text-sm">
                    <a href="login"
                        class="block px-3 py-2 text-white bg-orange-500 hover:bg-orange-600 rounded-t">Sign In</a>
                    <a href="account" class="block px-3 py-1 hover:bg-gray-100">My Account</a>
                    <a href="orders" class="block px-3 py-1 hover:bg-gray-100">Orders</a>
                    <a href="wishlist" class="block px-3 py-1 hover:bg-gray-100 rounded-b">Wishlist</a>
                </div>
            </div>
            <a href="help.php" class="hover:text-orange-600 flex items-center space-x-1"><i
                    class="fas fa-question-circle"></i><span>Help</span></a>
            <a href="cart.php" class="hover:text-orange-600 flex items-center space-x-1"><i
                    class="fas fa-shopping-cart"></i><span>Cart</span></a>
        </div>
    </div>
</header>

<!-- Sidebar Overlay -->
<div id="sidebarOverlay"
    class="fixed inset-0  bg-opacity-40 z-40 hidden md:hidden transition-opacity duration-300"></div>

<!-- Sidebar -->
<div id="sidebar"
    class="fixed top-[80px] left-0 h-full w-56 bg-white shadow z-50 transform -translate-x-full transition-transform duration-300 md:hidden text-sm">
    <div class="flex justify-between items-center px-3 py-2 border-b">
        <h2 class="text-lg font-semibold text-orange-500 font-serif">BookStore</h2>
        <button id="closeSidebar" class="text-lg text-gray-600"><i class="fas fa-times"></i></button>
    </div>
    <nav class="p-3 space-y-2 text-gray-700">
        <a href="Books" class="block">Home</a>
        <a href="contact" class="block">Contact Us</a>
        <a href="login" class="block">Sign In</a>
        <a href="account" class="block">My Account</a>
        <a href="orders" class="block">Orders</a>
        <a href="wishlist" class="block">Wishlist</a>
        <a href="help" class="block">Help</a>
    </nav>
</div>

<!-- JS -->
<script>
    const accountBtn = document.getElementById('accountBtn');
    const accountMenu = document.getElementById('accountMenu');
    accountBtn?.addEventListener('click', (e) => {
        e.stopPropagation();
        accountMenu.classList.toggle('hidden');
    });
    window.addEventListener('click', (e) => {
        if (!accountMenu.contains(e.target) && !accountBtn.contains(e.target)) {
            accountMenu.classList.add('hidden');
        }
    });

    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('sidebarOverlay');
    const openBtn = document.getElementById('mobileMenuBtn');
    const closeBtn = document.getElementById('closeSidebar');

    openBtn.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
        overlay.classList.remove('hidden');
    });

    const closeSidebar = () => {
        sidebar.classList.add('-translate-x-full');
        overlay.classList.add('hidden');
    };

    closeBtn.addEventListener('click', closeSidebar);
    overlay.addEventListener('click', closeSidebar);
</script>