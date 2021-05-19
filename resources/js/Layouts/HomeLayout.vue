<template>
    <div>
        <jet-banner />
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-white border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="flex-shrink-0 flex items-center">
                                <inertia-link :href="route('dashboard')">
                                    <jet-application-mark class="block h-9 w-auto" />
                                </inertia-link>
                            </div>
                        </div>
                    </div>
                </div>

            </nav>

            <!-- Page Content -->
            <main>
                <slot></slot>
            </main>
        </div>
    </div>
</template>
<script>
import JetBanner from '@/Jetstream/Banner'

import JetNavLink from '@/Jetstream/NavLink'
import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink'
export default {
    components:{
        JetBanner,
        JetNavLink,
        JetResponsiveNavLink
    }
}
</script>