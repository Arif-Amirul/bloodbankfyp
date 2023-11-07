
@props([
    'title' => '',
    'bgImg' => '',
    'route' => '',
])

<a href="{{$route}}"
    {{ $attributes->merge(['class' => 'relative block overflow-hidden rounded-xl  bg-cover bg-center bg-no-repeat shadow-lg']) }}>
    <div class="absolute inset-0 bg-black/70"></div>

    <div class="relative flex items-start justify-between p-4 sm:p-6 lg:p-8">
        <div class="pt-12 text-white sm:pt-18 lg:pt-24">
            <h3 class="text-xl font-bold sm:text-2xl">{{$title}}</h3>

            <p class="text-sm">Module</p>
        </div>

        <span class="inline-flex items-center gap-0.5 rounded-full bg-primary-500 px-4 py-1 text-xs font-semibold text-white ">
            Go to
            <x-icon name="arrow-right" class="w-4 h-4 ml-2 animate-bounce"/>
        </span>
    </div>
</a>
