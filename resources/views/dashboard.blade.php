<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semi bold text-xl text-gray-800 leading-tight">
            {{ __('首頁') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <p class="font-sans ">歡迎使用 Fonsy Score 評分系統!</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
