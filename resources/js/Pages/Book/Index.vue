<script setup>
import { Link } from "@inertiajs/vue3";
import Layout from "./Components/Layout.vue";
defineProps({
    books: Object,
});
</script>

<template>
    <Layout>
        <section class="bg-gray-100 min-h-[300px] mb-4">
            <div class="bg-[#161623] mx-auto px-4 py-16 h-full">
                <div
                    class="flex flex-col md:flex-row items-center justify-between"
                >
                    <div class="w-full text-center">
                        <h1
                            class="text-4xl md:text-6xl font-bold text-gray-300 mb-4 py-6"
                        >
                            BOOK | MANAGER
                        </h1>
                        <p class="text-lg md:text-xl text-gray-300 mb-8">
                            Create, Show, Edit, Update and Delete Books!
                        </p>
                        <div class="flex justify-center">
                            <Link
                                href="/books/create"
                                as="button"
                                class="bg-blue-500 mr-6 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded uppercase"
                            >
                                Create a Book
                            </Link>

                            <Link
                                href="/books/manage"
                                as="button"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded uppercase"
                            >
                                Manage Books
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <main class="grid grid-cols-1 md:grid-cols-2 gap-2 px-4">
            <template v-for="book in books" :key="book.id">
                <div
                    class="flex flex-col items-center bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mt-6"
                >
                    <div>
                        <h1 class="text-#333 mb-2 uppercase font-bold">
                            {{ book.title }}
                        </h1>
                    </div>
                    <div class="block items-center mb-3">
                        <p class="text-md">Author: {{ book.author }}</p>
                    </div>
                    <div class="block items-center mb-4">
                        <code class="text-md font-bold">
                            Released: {{ book.published_year }}
                        </code>
                    </div>
                </div>
            </template>
        </main>
        <div v-if="books.length == 0" class="text-red-400 p-8">
            No Books Found!
        </div>

        <div class="mt-6 p-4">
            {{ books.links }}
        </div>
    </Layout>
</template>
