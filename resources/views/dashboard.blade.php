<x-layouts.app :title="__('Dashboard')">
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        @if(auth()->user()->posts()->count()===0)
        No Post Yet
        <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div>
        @else
        Your Posts :
        <div class="grid auto-rows-min gap-2 md:grid-cols-3">
                @foreach (auth()->user()->posts as $post)
                    <div class="bg-gray-800 text-white rounded p-5">
                        <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                        <h6 class="text-xs">{{ $post->user->email }}</h6>
                        </br>
                        <p>{{ $post->content }}</p>
                    </div>
                @endforeach
        </div>
        @endif
    </div>
</x-layouts.app>
