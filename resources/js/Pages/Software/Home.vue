<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { reactive, onMounted, ref } from 'vue'

const communities = [
  { name: 'ラーメン', img: '/images/a.webp', category: 'ラーメン', detail: '新宿中のラーメンコミュニティ' },
  { name: 'お寿司', img: '/images/sushi.jpg', category: '寿司', detail: '新宿中の寿司屋コミュニティ' },
  { name: 'マーケット', img: '/images/market.jpeg', category: 'マーケット', detail: '新宿中のマーケットコミュニティ' },
  { name: 'フェス', img: '/images/fes.jpg', category: 'フェス', detail: '新宿中のフェスコミュニティ' },
  { name: '焼肉', img: '/images/niku.avif', category: '焼肉', detail: '新宿中の焼肉屋が集結' },
]
const results = ref([])
onMounted(() => {
  communities.forEach(item => {
    results.value.push({
      name: item.name,
      img: item.img,
      category: item.category,
      detail: item.detail
    })
  })
})

const form = reactive({
  word: null
})
const search = () => {
  results.value = []
  communities.forEach(item => {
    if (item.name == form.word) {
      results.value.push({
        name: item.name,
        img: item.img,
        category: item.category,
        detail: item.detail
      })
    }
  })
}
</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">コミュニティ一覧</h2>
    </template>

    <div class="pt-40 py-5">
      <div class="max-w-7xl top-40 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white opacity-85 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <div class="mb-4">

              ホーム/
            </div>
            <div class="bg-white">
              <section class="text-gray-600 body-font">
                <div class="w-full sm:max-w-xs grid grid-cols-4 mb-10 items-center">
                  <input type="text" v-model="form.word" name="email" id="email"
                    class="col-span-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                  <button @click="search"
                    class="col-span-1 inline-flex items-center justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:ml-3 sm:mt-0 sm:w-auto">検索</button>
                </div>
                <div class="container px-5 mx-auto">
                  <div class="flex flex-wrap -m-4">
                    <div class="md:w-1/3" v-for="result in results">
                      <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" :src="result.img" alt="blog">
                        <div class="p-6">
                          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ result.category
                          }}</h2>
                          <h1 class="title-font text-lg font-medium text-gray-900">{{ result.name }}</h1>
                          <p class="leading-relaxed mb-3" v-html="result.detail">
                          </p>
                          <div class="flex items-center flex-wrap ">
                            <Link :href="route('software.ramen')"
                              class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">詳細
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                              fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                            </svg>
                            </Link>
                            <span
                              class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                              </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                              <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path
                                  d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                </path>
                              </svg>6
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</AuthenticatedLayout></template>