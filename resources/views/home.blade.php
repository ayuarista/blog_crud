<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div>
        <h1 class="text-4xl font-bold text-black">Blog Website</h1>
        <p class="text-gray-400 text-[15px] text-pretty mt-2 max-w-80">The latest and best lifestyle articles selected by our editorial office</p>
    </div>

    <div class="flex items-center justify-center gap-4 mt-4">
        <div class="grid grid-cols-2 gap-4 max-w-2xl">
            <div class="grid col-span-2">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1735889103738-90ed3c3e2255?q=80&w=2128&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded-md">
                    <div class="absolute top-8 left-8">
                        <p class="text-sm text-white/80">FOOD</p>
                        <h1 class="font-bold text-4xl text-white">Wake up and smell <br> the coffee</h1>
                    </div>
                    <div class="absolute bottom-10 left-8">
                        <a href="/posts/create" class="px-8 py-2 font-medium rounded-md bg-white text-black hover:bg-white/80
                         transition-all duration-300">Create Blog</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div class="relative">
                    <img src="https://plus.unsplash.com/premium_photo-1722781230060-63a256150359?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-full rounded-md">
                    <div class="absolute top-8 left-8">
                        <p class="text-sm text-white/80">EDUCATION</p>
                        <h1 class="font-bold text-3xl text-white">Time to learn anything</h1>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1594057720001-d1c340b36730?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-full rounded-md shadown-xl">
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 max-w-2xl">
            <div class="grid grid-cols-1">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1543920926-1125e0a12243?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="w-full rounded-md shadown-xl">
                    <div class="absolute top-8 left-4">
                        <a href="/posts" class="px-8 py-2 font-medium rounded-md bg-black text-white hover:bg-black/80
                         transition-all duration-300">Read Blog</a>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1730033135221-cf2da5ab25cb?q=80&w=1972&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded-md">
                    <div class="absolute bottom-3 left-5">
                        <p class="text-sm text-white/80">INTERIOR</p>
                        <h1 class="font-bold text-3xl text-white">The Ways Japanese people create home</h1>
                    </div>
                </div>
            </div>
            <div class="grid col-span-2">
                <div class="relative">
                    <img src="https://images.unsplash.com/photo-1742317402143-449e8b4cbf91?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded-md h-[23.5rem] w-full">
                    <div class="absolute bottom-8 left-8">
                        <p class="text-sm text-white/80">FOOD</p>
                        <h1 class="font-bold text-4xl text-white">Wake up and smell <br> the coffee</h1>
                    </div>
                    <div class="absolute top-10 left-8">
                        <a href="/posts/create" class="px-8 py-2 font-medium rounded-md bg-white text-black hover:bg-white/80
                         transition-all duration-300">Create Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>