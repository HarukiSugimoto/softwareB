<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia'

const form = reactive({
    name: null,
    handlename: null,
    email: null,
    password: null,
    address: null,
    age: null,
    gender: null
})

const submitForm = () => {
    // console.log(form)
    Inertia.post(route("software.store"), form)
}
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">ユーザ登録</h2>
        </template>

        <div class="pt-40 py-5">
            <div class="max-w-7xl top-40 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white opacity-85 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-6 lg:px-8">
                            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                            <img class="mx-auto h-5 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company" />
                            <h2 class="mt-5 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">ユーザ登録</h2>
                            </div>

                            <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                                <div>
                                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">氏名</label>
                                <div class="mt-2">
                                    <input id="name" v-model="form.name" name="name" type="text" autocomplete="name" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                </div>

                                <div>
                                <label for="handlename" class="block text-sm font-medium leading-6 text-gray-900">ハンドルネーム</label>
                                <div class="mt-2">
                                    <input id="handlename" v-model="form.handlename" name="handlename" type="text" autocomplete="handlename" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                </div>

                                <div>
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">メールアドレス</label>
                                <div class="mt-2">
                                    <input id="email" name="email" v-model="form.email" type="email" autocomplete="email" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                </div>
                                
                                <div>
                                    <div class="flex items-center justify-between">
                                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">パスワード</label>
                                        <div class="text-sm">
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <input id="password" name="password" v-model="form.password" type="password" autocomplete="current-password" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    </div>
                                </div>
                                
                                <div>
                                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">住所</label>
                                <div class="mt-2">
                                    <input id="address" name="address" type="text" v-model="form.address" autocomplete="address" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                </div>
                                </div>

                                <div class="flex">
                                    <div class="block w-1/2">
                                    <label for="age" class="block text-sm font-medium leading-6 text-gray-900">年齢</label>
                                    <div class="mt-2">
                                        <input id="age" name="age" type="number" v-model="form.age" autocomplete="age" required="" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    </div>
                                    </div>
    
                                    <div class="block ml-2 w-1/2">
                                    <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">性別</label>
                                    <div class="mt-2 flex">
                                        <select v-model="form.gender" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option>---</option>
                                            <option value="1">男</option>
                                            <option value="2">女</option>
                                        </select>
                                    </div>
                                    </div>
                                </div>

                                <div>
                                <button @click="submitForm" class="flex w-full mt-10 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">登録する
                                </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>