<x-nobody-layout>
    <div class="max-w-5xl mx-auto px-2 py-6">
        <div>
            <h1 class="text-5xl font-semibold dark:text-white">{{ $data->title }}</h1>
            <span class="text-l text-gray-600 dark:text-gray-500">
                {{ $data->created_at->diffForHumans() }} by {{ $data->author->name }}
            </span>
        </div>
        <article class="prose prose-invert mt-6">
            {!! $data->html !!}
        </article>
    </div>
</x-nobody-layout>
