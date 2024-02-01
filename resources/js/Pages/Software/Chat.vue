<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import { ArrowLeftIcon, PaperAirplaneIcon } from '@heroicons/vue/24/outline'

const form = reactive({
    name: null,
    handlename: null,
    email: null,
    password: null,
    address: null,
    age: null,
    gender: null
})
const people = [
    {
        name: 'ラーメン研究会(管理者)',
        image:
            '/images/attend.png',
    },
    {
        name: 'ラーメン好き',
        image:
            '/images/ramen.png',
    },
    {
        name: 'めんたろう',
        image:
            '/images/ramen1.png',
    },
]

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">イベント参加</h2>
        </template>

        <div class="pt-40 py-5">
            <div class="max-w-7xl top-40 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white opacity-85 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <Link :href="route('software.ramen')">
                        <ArrowLeftIcon class="h-6 w-6 mb-5" aria-hidden="true" />
                        </Link>
                        <!-- Heading -->
                        <div class="flex flex-col space-y-1.5 mb-5">
                            <h2 class="font-semibold text-lg tracking-tight">2024ラーメン研究会フェス</h2>
                            <p class="text-sm text-[#6b7280] leading-3">簡単な説明やお知らせ</p>
                        </div>

                        <div class="border h-48 overflow-auto">

                            <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1 justify-end">
                                <p class="leading-relaxed"><span
                                        class="block font-bold text-gray-700 text-right">ラーメン好き</span>ラーメンの量はどのくらいでしょうか</p>
                                <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                    <div class="rounded-full bg-gray-100 border p-1">
                                        <svg stroke="none" fill="black" stroke-width="0" viewBox="0 0 16 16" height="20"
                                            width="20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                                            </path>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                            <!-- Chat Message AI -->
                            <div class="flex gap-3 my-4 mt-5 text-gray-600 text-sm flex-1"><span
                                    class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                    <div class="rounded-full bg-gray-100 border p-1"><svg stroke="none" fill="black"
                                            stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="20" width="20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                            </path>
                                        </svg></div>
                                </span>
                                <p class="leading-relaxed"><span
                                        class="block font-bold text-gray-700">ラーメン研究会(管理者)</span>量は店で食べる量より少なめです。
                                </p>
                            </div>

                            <div class="flex gap-3 my-4 text-gray-600 text-sm flex-1 justify-end">
                                <p class="leading-relaxed"><span
                                        class="block font-bold text-gray-700 text-right">めんたろう</span>持ち帰り対応はありますか？？</p>
                                <span class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                    <div class="rounded-full bg-gray-100 border p-1">
                                        <svg stroke="none" fill="black" stroke-width="0" viewBox="0 0 16 16" height="20"
                                            width="20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z">
                                            </path>
                                        </svg>
                                    </div>
                                </span>
                            </div>
                            <div class="flex gap-3 my-4 mt-5 text-gray-600 text-sm flex-1"><span
                                    class="relative flex shrink-0 overflow-hidden rounded-full w-8 h-8">
                                    <div class="rounded-full bg-gray-100 border p-1"><svg stroke="none" fill="black"
                                            stroke-width="1.5" viewBox="0 0 24 24" aria-hidden="true" height="20" width="20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9.813 15.904L9 18.75l-.813-2.846a4.5 4.5 0 00-3.09-3.09L2.25 12l2.846-.813a4.5 4.5 0 003.09-3.09L9 5.25l.813 2.846a4.5 4.5 0 003.09 3.09L15.75 12l-2.846.813a4.5 4.5 0 00-3.09 3.09zM18.259 8.715L18 9.75l-.259-1.035a3.375 3.375 0 00-2.455-2.456L14.25 6l1.036-.259a3.375 3.375 0 002.455-2.456L18 2.25l.259 1.035a3.375 3.375 0 002.456 2.456L21.75 6l-1.035.259a3.375 3.375 0 00-2.456 2.456zM16.894 20.567L16.5 21.75l-.394-1.183a2.25 2.25 0 00-1.423-1.423L13.5 18.75l1.183-.394a2.25 2.25 0 001.423-1.423l.394-1.183.394 1.183a2.25 2.25 0 001.423 1.423l1.183.394-1.183.394a2.25 2.25 0 00-1.423 1.423z">
                                            </path>
                                        </svg></div>
                                </span>
                                <p class="leading-relaxed"><span
                                        class="block font-bold text-gray-700">ラーメン研究会(管理者)</span>すべて持ち帰りできる容器になってます。
                                </p>
                            </div>
                        </div>
                        <!-- Input box  -->
                        <div class="flex items-center pt-0 mt-5">
                            <div class="flex items-center justify-center w-full space-x-2">
                                <input
                                    class="flex h-10 w-full rounded-md border border-[#e5e7eb] px-3 py-2 text-sm placeholder-[#6b7280] focus:outline-none focus:ring-2 focus:ring-[#9ca3af] disabled:cursor-not-allowed disabled:opacity-50 text-[#030712] focus-visible:ring-offset-2"
                                    placeholder="テキストを入力してください" value="">
                                <button
                                    class="inline-flex items-center justify-center rounded-md text-sm font-medium text-[#f9fafb] disabled:pointer-events-none disabled:opacity-50 bg-indigo-600 hover:bg-indigo-500 h-10 px-4 py-2">
                                    <PaperAirplaneIcon class="h-6 w-6" aria-hidden="true" />
                                </button>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-1.5 pb-20 mt-10">
                            <h2 class="font-semibold text-lg tracking-tight">参加者リスト</h2>
                            <div class="flow-root">
                                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="inline-block min-w-full align-middle sm:px-6 lg:px-8">
                                        <table class="min-w-full divide-gray-300">
                                            <!-- <thead>
                                    <tr>
                                        <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0"></th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                        <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                    </thead> -->
                                            <tbody class="divide-y divide-gray-200 bg-white">
                                                <tr v-for="person in people" :key="person.email">
                                                    <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                                        <div class="flex items-center">
                                                            <div class="h-9 w-9 flex-shrink-0">
                                                                <img class="h-9 w-9 rounded-full" :src="person.image"
                                                                    alt="" />
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="font-medium text-gray-900">{{ person.name }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="relative whitespace-nowrap py-5 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">フォロー<span
                                                                class="sr-only">, {{ person.name }}</span></a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="/software/attend"
                                    class="flex w-full mt-10 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">参加する
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</AuthenticatedLayout></template>