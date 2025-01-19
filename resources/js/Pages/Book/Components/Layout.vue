<script>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <nav>
        <div
            class="mx-auto px-4 py-2 flex justify-between items-center bg-[#161623] fixed top-0 right-0 left-0"
        >
            <div class="flex items-center">
                <a
                    href="/"
                    class="text-white font-bold text-xs md:text-xl ml-4 py-2"
                    >books</a
                >
            </div>
        </div>
    </nav>

    <main>
        <slot />
    </main>

    <footer class="bg-[#161623] text-gray-300 py-8">
        <div class="mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-around items-center">
                <div class="mb-6 md:mb-0">
                    <div class="flex justify-center">
                        <a href="#" class="font-bold text-lg">Books | Manage</a>
                    </div>
                    <p class="mt-2">
                        Copyright © 2025 My Company. All Rights Reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>
</template>
