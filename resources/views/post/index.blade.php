<x-layouts.app :title="__('Posts')">
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold text-4xl">Posts Index</h1>

        </section>
        <section class="pt-10">
            <h3>Posts</h3>

            <div class="inline block">
                <div class="text-center">
                    <p>Posts:</p>
                </div>
                @foreach ($posts as $post)
                    <div class="bg-gray-800 text-white rounded p-4 mb-4">
                        <h3 class="text-xl font-bold">{{ $post->title }}</h3>
                        <h6 class="text-xs">{{ $post->user->email }}</h6>
                        </br>
                        <p>{{ $post->content }}</p>
                    </div>
                @endforeach
            </div>
        </section>

    </div>
</x-layout.app>