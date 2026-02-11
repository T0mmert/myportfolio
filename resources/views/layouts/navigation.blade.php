<nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300" id="main-nav" style="background: rgba(2, 6, 23, 0.7); backdrop-filter: blur(20px); border-bottom: 1px solid rgba(59, 130, 246, 0.1);">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 transition-transform duration-300 group-hover:rotate-12">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <span class="text-xl font-bold bg-gradient-to-r from-white to-blue-400 bg-clip-text text-transparent">
                        {{ config('app.name', 'Laravel') }}
                    </span>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden sm:flex sm:items-center sm:space-x-8">
                <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-blue-300 hover:text-white transition-colors relative group">
                    {{ __('Home') }}
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-600 transition-all duration-300 group-hover:w-full"></span>
                </x-nav-link>

                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-blue-300 hover:text-white transition-colors relative group">
                    {{ __('Dashboard') }}
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-600 transition-all duration-300 group-hover:w-full"></span>
                </x-nav-link>
                
                <x-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="text-blue-300 hover:text-white transition-colors relative group">
                    {{ __('Contact') }}
                    <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-600 transition-all duration-300 group-hover:w-full"></span>
                </x-nav-link>

                @auth
                    <x-nav-link :href="route('admin.projects.index')" :active="request()->routeIs('admin.projects.*')" class="text-blue-300 hover:text-white transition-colors relative group">
                        {{ __('Projects') }}
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-600 transition-all duration-300 group-hover:w-full"></span>
                    </x-nav-link>

                    <x-nav-link :href="route('admin.contacts')" :active="request()->routeIs('admin.contacts')" class="text-blue-300 hover:text-white transition-colors relative group">
                        {{ __('Messages') }}
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-500 to-purple-600 transition-all duration-300 group-hover:w-full"></span>
                    </x-nav-link>

                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-blue-300 bg-blue-500/10 hover:text-white hover:bg-blue-500/20 focus:outline-none transition-all duration-300">
                                    <div>{{ Auth::user()->name }}</div>
                                    <div class="ml-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile.edit')" class="text-gray-300 hover:text-white hover:bg-blue-500/10">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-gray-300 hover:text-white hover:bg-blue-500/10">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <div class="hidden sm:flex sm:items-center sm:space-x-4">
                        <a href="{{ route('login') }}" class="text-blue-300 hover:text-white transition-colors text-sm font-medium">
                            {{ __('Log in') }}
                        </a>
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full text-sm font-medium hover:shadow-lg hover:shadow-blue-500/30 transition-all duration-300 hover:-translate-y-0.5">
                            {{ __('Register') }}
                        </a>
                    </div>
                @endauth
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-blue-400 hover:text-white hover:bg-blue-500/20 focus:outline-none transition-all duration-300">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden bg-slate-950/95 backdrop-blur-xl border-b border-blue-500/10">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" class="text-blue-300 hover:text-white hover:bg-blue-500/10">
                {{ __('Home') }}
            </x-responsive-nav-link>

            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-blue-300 hover:text-white hover:bg-blue-500/10">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            
            <x-responsive-nav-link :href="route('contact')" :active="request()->routeIs('contact')" class="text-blue-300 hover:text-white hover:bg-blue-500/10">
                {{ __('Contact') }}
            </x-responsive-nav-link>

            @auth
                <x-responsive-nav-link :href="route('admin.projects.index')" :active="request()->routeIs('admin.projects.*')" class="text-blue-300 hover:text-white hover:bg-blue-500/10">
                    {{ __('Projects') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="route('admin.contacts')" :active="request()->routeIs('admin.contacts')" class="text-blue-300 hover:text-white hover:bg-blue-500/10">
                    {{ __('Messages') }}
                </x-responsive-nav-link>
            @endauth
        </div>

        @auth
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-blue-500/10">
                <div class="px-4">
                    <div class="font-medium text-base text-white">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-blue-400">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')" class="text-blue-300 hover:text-white hover:bg-blue-500/10">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-blue-300 hover:text-white hover:bg-blue-500/10">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @else
            <div class="pt-4 pb-4 border-t border-blue-500/10 px-4 space-y-2">
                <a href="{{ route('login') }}" class="block w-full text-center px-4 py-2 text-blue-300 border border-blue-500/30 rounded-full hover:bg-blue-500/10 transition-all">
                    {{ __('Log in') }}
                </a>
                <a href="{{ route('register') }}" class="block w-full text-center px-4 py-2 bg-gradient-to-r from-blue-600 to-purple-600 text-white rounded-full hover:shadow-lg transition-all">
                    {{ __('Register') }}
                </a>
            </div>
        @endauth
    </div>
</nav>

<!-- Spacer for fixed header -->
<div class="h-20"></div>

<style>
    /* Custom styles for active states */
    .nav-link-active {
        color: white !important;
    }
    .nav-link-active::after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(to right, #3b82f6, #9333ea);
    }
</style>

<script>
    // Header scroll effect
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('main-nav');
        if (window.scrollY > 50) {
            nav.style.background = 'rgba(2, 6, 23, 0.95)';
            nav.style.boxShadow = '0 4px 30px rgba(0, 0, 0, 0.3)';
        } else {
            nav.style.background = 'rgba(2, 6, 23, 0.7)';
            nav.style.boxShadow = 'none';
        }
    });
</script>