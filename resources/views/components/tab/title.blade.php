@props([
    'name' => '',
])

<a href="#"
    x-on:click.prevent="tab = {{ $name }}"
    {{ $attributes->merge(['class' => '']) }}
    :class="tab === {{$name}} ? 'text-primary-600 dark:text-primary-400 ' : ' text-gray-500 dark:text-gray-100 hover:text-gray-800'">
    {{$slot}}
</a>
