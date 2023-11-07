@props([
    'name' => '',
])

<a href="#"
    x-on:click.prevent="tab = {{ $name }}"
    {{ $attributes->merge(['class' => 'px-3']) }}
    :class="tab === {{$name}} ? 'bg-gray-50 text-primary-600 rounded-lg border dark:bg-slate-900 dark:border-slate-800 dark:text-primary-500' : ' text-gray-500 dark:text-gray-400 hover:text-gray-800 '">
    {{$slot}}
</a>
