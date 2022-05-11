<nav class="flex justify-between w-full py-3 xl:px-72 space-x-9 shadow-md bg-purple-50">
    <div class="flex space-x-3 items-center">
        <img src="{{ asset('assets/svg/arrow-bold-left.svg') }}" class="md:h-10 h-12" alt="">
        <span class="mt-0.5 lg:text-3xl text-2xl">Order Me</span>
    </div>
    <ul class="md:flex items-center justify-center space-x-8 lg:text-2xl text-base text-slate-700 uppercase hidden">
        <li><a href="#" class="hover:text-blue-600 transition-all duration-300">Home</a></li>
        <li><a href="#" class="hover:text-blue-600 transition-all duration-300">Menu</a></li>
        <li><a href="#" class="hover:text-blue-600 transition-all duration-300">Category</a></li>
        <li><a href="#" class="hover:text-blue-600 transition-all duration-300">Contact</a></li>
    </ul>
    <div class="flex relative">
        <button class="flex items-center" id="cart">
            <a href="#"><img src="{{ asset('assets/svg/cart-svgrepo-com.svg') }}" class="h-10" alt=""></a>
            <span class="relative border border-purple-500 bottom-1 right-3  rounded-full text-xs bg-purple-400 pt-1 font-bold text-center h-6 w-6">1</span>
        </button>
        <ul id="showCart" class="w-52 bg-white border shadow-lg rounded pl-1 pr-2 absolute space-y-2 md:top-12 top-[52px] right-0 hidden">
            <li class="border-b-[1px]">20rs item 1</li>
            <li class="border-b-[1px]">300rs item 2</li>
            <li class="border-b-[1px]">457rs item 3</li>
            <li class="border-b-[1px]">478rs item 4</li>
            <li class="border-b-[1px] text-center">View More</li>
        </ul>
        <button class="md:hidden border border-slate-500 px-2 py-2 rounded items-center" id="hamburger"><img src="{{ asset('assets/svg/hamburger-menu-svgrepo-com.svg') }}" class="h-8" alt="" srcset=""></button>
    </div>
</nav>
<ul id="showHamburger" class="absolute w-full z-10 bg-white text-xl space-y-2 px-5 py-2 border shadow-md md:hidden hidden">
    <li class="border-b-[1px]"><a href="#" class="hover:text-blue-600 transition-all duration-300">Home</a></li>
    <li class="border-b-[1px]"><a href="#" class="hover:text-blue-600 transition-all duration-300">Menu</a></li>
    <li class="border-b-[1px]"><a href="#" class="hover:text-blue-600 transition-all duration-300">Category</a></li>
    <li class="border-b-[1px]"><a href="#" class="hover:text-blue-600 transition-all duration-300">Contact</a></li>
</ul>
