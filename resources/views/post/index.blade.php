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
                    <p>Post : {{ $post->title.",\n".$post->content }}</p>
                @endforeach
            </div>
        </section>

    </div>
</x-layout.app>