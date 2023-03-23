<script setup>

import PrimaryButton from "@/Components/PrimaryButton.vue";
import InputError from '@/Components/InputError.vue';
import { useForm, Head } from '@inertiajs/vue3';
import LinkAdvice from "@/Components/LinkAdvice.vue";
import Advice from "@/Components/Advice.vue";


const form = useForm({
    message: '',
});

const props = defineProps({
    advices: {
        type: Object,
        default: () => ({}),
    },
});

</script>

<template>
    <Head title="Universe Advices" />

    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white"
    >
       
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                
              
            </div>

            <div class="mt-16">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                    
                    <div class="rotate-45 hover:rotate-0 scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                        <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
                                <Advice                                                         
                                :data="advices"
                                ></Advice>
                                <InputError :message="form.errors.message" class="mt-2" />                               
                                <LinkAdvice as="button" :href="route('advices.index')" method="get">
                                    New amazing advice
                                </LinkAdvice>                             
                           
                        </div>     
                    </div> 
                    <div class=" rounded-full scale-100 p-4 bg-sky-900 from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 dark:shadow-none flex transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                                                
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-6 lg:gap-8">
                            <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full animate-bounce">
                                
                            </div>
                            <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full animate-ping">
                                    
                            </div>
                            <div class="h-8 w-8 bg-red-50 flex items-center justify-center rounded-full animate-pulse">
                                    
                            </div>
                            <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full animate-bounce">
                                
                            </div>
                            <div class="h-14 w-14 bg-red-50 flex items-center justify-center rounded-full animate-ping">
                                    
                            </div>
                            <div class="h-11 w-11 bg-red-50 flex items-center justify-center rounded-full animate-pulse">
                                    
                            </div>
                            <div class="h-20 w-20 bg-red-50 flex items-center justify-center rounded-full animate-bounce">
                                
                            </div>
                            <div class="h-6 w-6 bg-red-50 flex items-center justify-center rounded-full animate-pulse">
                                    
                            </div>
                            
                        </div>

                    </div>
                                          
                </div>
            </div>
            
            <div class="flex justify-center mt-16 px-6 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                    <div class="flex items-center gap-4">
                     
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.5"
                                class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"
                                />
                            </svg>
                            Universe is sensitive                   
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<style>
.bg-dots-darker {
    background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E");
}
@media (prefers-color-scheme: dark) {
    .dark\:bg-dots-lighter {
        background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.10)'/%3E%3C/svg%3E");
    }
}


</style>
