<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import Chart from '@/Components/Chart.vue'
import { ArrowLeftIcon, PaperAirplaneIcon } from '@heroicons/vue/24/outline'
const data = reactive({
    // data = res.data.data
    totals: [100, 90, 70, 40, 50, 70, 40, 0, 0],
    labels: ['10代', '20代', "30代", "40代", "50代", "60代", "70代", "80代", "90代"]
})

</script>

<template>
    <Head title="データ分析" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">データ分析</h2>
        </template>

        <div class="pt-40 py-5">
            <div class="max-w-7xl top-40 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white opacity-85 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                      <Link :href="route('software.index')"><ArrowLeftIcon class="h-6 w-6 mb-5" aria-hidden="true" /></Link>
                      <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">ラーメンフェア</h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
                      <Chart :data="data" />
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>