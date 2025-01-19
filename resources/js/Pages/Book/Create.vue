<script setup>
import { Head, Link } from "@inertiajs/vue3";
import Card from "./Components/Card.vue";
import Layout from "./Components/Layout.vue";
import { reactive, ref } from "vue";
import { router } from "@inertiajs/vue3";
defineProps();

const formData = reactive({
    title: "",
    author: "",
    published_year: "",
    genre: "",
});

const errors = ref({});

const handleSubmit = () => {
    router.post("/books", formData, {
        onSuccess: () => {
            formData.value = {
                title: "",
                author: "",
                published_year: "",
                genre: "",
            };
            errors.value = {};
        },
        onError: (errors) => {
            errors.value = errors;
        },
    });
};
</script>

<template>
    <Layout>
        <Card>
            <div>
                <h1 class="text-2xl font-bold text-center mb-4">
                    Create a Book
                </h1>
            </div>

            <form
                @submit.prevent="handleSubmit"
                method="POST"
                enctype="multipart/form-data"
            >
                <div class="mb-6">
                    <label for="title" class="inline-block text-lg mb-2"
                        >Book Title</label
                    >
                    <input
                        type="text"
                        id="title"
                        name="title"
                        v-model="formData.title"
                        class="border border-gray-200 rounded p-2 w-full"
                        required
                    />
                    <span v-if="errors.title" class="text-red-500">{{
                        errors.title[0]
                    }}</span>
                </div>

                <div class="mb-6">
                    <label for="author" class="inline-block text-lg mb-2"
                        >Author</label
                    >
                    <input
                        type="text"
                        id="author"
                        name="author"
                        v-model="formData.author"
                        class="border border-gray-200 rounded p-2 w-full"
                        required
                    />
                    <span v-if="errors.author" class="text-red-500">{{
                        errors.author[0]
                    }}</span>
                </div>
                <div class="mb-6">
                    <label for="Published" class="inline-block text-lg mb-2"
                        >Published</label
                    >
                    <input
                        type="number"
                        id="published_year"
                        name="published_year"
                        min="1800"
                        max="2025"
                        v-model="formData.published_year"
                        class="border border-gray-200 rounded p-2 w-full"
                        required
                    />
                    <span v-if="errors.published_year" class="text-red-500">{{
                        errors.published_year[0]
                    }}</span>
                </div>

                <div class="mb-6">
                    <label for="Genre" class="inline-block text-lg mb-2"
                        >Genre</label
                    >
                    <input
                        type="text"
                        class="border border-gray-200 rounded p-2 w-full"
                        id="genre"
                        name="genre"
                        v-model="formData.genre"
                        required
                    />
                    <span v-if="errors.genre" class="text-red-500">{{
                        errors.genre[0]
                    }}</span>
                </div>
                <div class="flex justify-between items-center">
                    <div>
                        <button
                            class="bg-black text-white px-6 py-2 rounded font-semibold"
                            type="submit"
                        >
                            Submit
                        </button>
                    </div>

                    <div>
                        <a
                            href="/"
                            class="px-6 py-2 rounded font-semibold border border-black text-black ml-4"
                            >Back
                        </a>
                    </div>
                </div>
            </form>
        </Card>
    </Layout>
</template>
