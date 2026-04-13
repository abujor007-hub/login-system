<!-- ড্যাশবোর্ড লিংক সবসময় দেখাবে -->
<x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
    {{ __('Dashboard') }}
</x-nav-link>