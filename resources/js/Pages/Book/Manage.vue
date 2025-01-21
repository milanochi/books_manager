<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import Card from "./Components/Card.vue";
import Layout from "./Components/Layout.vue";
import { router } from "@inertiajs/vue3";

defineProps({
    books: Object,
});

const form = useForm({
    title: "",
    author: "",
    published_year: "",
    genre: "",
});

const handleDelete = (id) => {
    if (confirm("Are you sure you want to delete this book?")) {
        form.delete(`/books/${id}`);
    }
};
</script>

<template>
    <Layout>
        <div class="p-12 mb-4 flex flex-col items-center bg-gray-80">
            <template v-for="book in books" :key="book.id">
                <div
                    class="flex flex-col bg-gray-200 items-left md:justify-center rounded-md mb-4 p-12 w-full bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mt-6"
                >
                    <div class="flex-col md:flex md:justify-between">
                        <div>
                            <h1 class="text-#333 mb-2 uppercase font-bold">
                                {{ book.title }}
                            </h1>
                        </div>

                        <div>
                            <div class="mb-3">
                                <p class="text-md">Author: {{ book.author }}</p>
                            </div>

                            <div class="block items-center mb-3">
                                <p class="text-md">
                                    Genre:
                                    <span
                                        class="bg-gray-300 py-1 px-2 text-sm text-[#333] rounded font-semibold"
                                        >{{ book.genre }}</span
                                    >
                                </p>
                            </div>

                            <div class="mb-4">
                                <code class="text-md font-bold">
                                    Released: {{ book.published_year }}
                                </code>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between w-[300px]">
                        <Link
                            :href="`/books/${book.id}/edit`"
                            as="button"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded uppercase px-4 py-2"
                        >
                            Edit Book
                        </Link>

                        <button
                            @click="handleDelete(book.id)"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold rounded uppercase px-4 py-2"
                        >
                            Delete Book
                        </button>
                    </div>
                </div>
            </template>
        </div>
    </Layout>
</template>
