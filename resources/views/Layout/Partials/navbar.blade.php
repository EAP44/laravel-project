<div class="mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
            <div class="flex-shrink-0">
                <svg class="h-8 w-8" version="1.1" viewBox="0 0 115.09 105.83" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                    <g transform="translate(-50.697 -113.11)" fill="#0e0e0e" stroke-width="1.5988">
                        <path d="m100.18 194.13c0 13.44-10.895 24.336-24.336 24.336s-24.336-10.896-24.336-24.336c3e-6 -13.44 10.895-24.336 24.336-24.336s24.336 10.895 24.336 24.336z" style="paint-order:stroke fill markers"/>
                        <path d="m129.26 125.76c-6.7292-11.634-21.604-15.628-33.244-8.9076-11.639 6.7201-15.627 21.603-8.9074 33.243l2.54e-4 4.4e-4 32.45 56.102c6.7292 11.634 21.604 15.628 33.243 8.9078 11.639-6.72 15.628-21.604 8.9076-33.244z" style="paint-order:stroke fill markers"/>
                    </g>
                </svg>
            </div>
            <div class="ml-10 flex items-baseline space-x-4">
                <a href="/" class="text-black hover:bg-black hover:text-white rounded-md px-3 py-2 text-sm font-medium">Home</a>
                <a href="/about" class="text-black hover:bg-black hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
                <a href="/todo-list" class="text-black hover:bg-black hover:text-white rounded-md px-3 py-2 text-sm font-medium">Todo-list</a>
                <a href="/list-profils" class="text-black hover:bg-black hover:text-white rounded-md px-3 py-2 text-sm font-medium">list-profils</a>
            </div>
        </div>
        <div class="ml-4 flex items-center md:ml-6">
            <button type="button" class="relative rounded-full p-1 text-black hover:text-white hover:bg-black focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                </svg>                          
            </button>
            <div class="relative ml-3">
                <div>
                    <button type="button" class="relative flex max-w-xs items-center rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-black" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <img class="h-8 w-8 rounded-full" src="https://cdn-icons-png.flaticon.com/512/9706/9706583.png" alt="">
                    </button>
                </div>
                <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" id="user-menu">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-200" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-200" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-slate-200" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var button = document.getElementById('user-menu-button');
        var menu = document.getElementById('user-menu');

        button.addEventListener('click', function() {
            menu.classList.toggle('hidden');
        });
    });
</script>