<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'
import { HomeIcon } from '@heroicons/vue/20/solid'
import { ArrowLeftIcon, PaperAirplaneIcon } from '@heroicons/vue/24/outline'

const pages = [
  { name: 'ラーメン', href: '#', current: false },
  { name: 'Project Nero', href: '#', current: true },
]

</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">ラーメンコミュニティ</h2>
    </template>

    <div class="pt-40 py-5">
      <div class="max-w-7xl top-40 mx-auto sm:px-6 lg:px-8">
        <div class="bg-white opacity-85 overflow-hidden shadow-sm sm:rounded-lg">
          <div class="p-6 text-gray-900">
            <Link :href="route('software.index')">
            <ArrowLeftIcon class="h-6 w-6 mb-5" aria-hidden="true" />
            </Link>
            <div>

              ホーム/ラーメン/
            </div>
            <div class="bg-white py-10">
              <section class="text-gray-600 body-font">
                <div class="container px-5 mx-auto">
                  <div class="flex flex-wrap -m-4">
                    <div class="md:w-1/3">
                      <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/attend.png"
                          alt="blog">
                        <div class="p-6">
                          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                          <h1 class="title-font text-lg font-medium text-gray-900">ラーメンフェア</h1>
                          <p class="leading-relaxed mb-3">新宿中のラーメン屋が集結<br>
                            主催者:ラーメン研究会<br>
                            場所:高田馬場駅ロータリー<br>
                            日時:2024/7/11<br>
                            入場料:300円<br>
                          </p>
                          <div class="flex items-center flex-wrap ">
                            <Link :href="route('software.chat')"
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
                    <div class="p-4 md:w-1/3">
                      <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/ramen.png" alt="blog">
                        <div class="p-6">
                          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                          <h1 class="title-font text-lg font-medium text-gray-900">前田商店（インスタント）</h1>
                          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                            microdosing tousled waistcoat.</p>
                          <div class="flex items-center flex-wrap">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">詳細
                              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                              </svg>
                            </a>
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
                    <div class="p-4 md:w-1/3">
                      <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                        <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/images/ramen1.png"
                          alt="blog">
                        <div class="p-6">
                          <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
                          <h1 class="title-font text-lg font-medium text-gray-900">純烈（インスタント）</h1>
                          <p class="leading-relaxed mb-3">Photo booth fam kinfolk cold-pressed sriracha leggings jianbing
                            microdosing tousled waistcoat.</p>
                          <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">詳細
                              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                              </svg>
                            </a>
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