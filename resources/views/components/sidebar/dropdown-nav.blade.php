@props([
    'activeUrl' => '',
    'title' => '',
    'iconName' => '',
    'navItem'=> '',

])

<li class="animate__animated animate__fadeInLeft animate__faster">
    <details  class="group [&_summary::-webkit-details-marker]:hidden"
        @if(\Request::is($activeUrl))
            open
        @endif>
        <summary
            class="flex items-center px-4 py-2  cursor-pointer  rounded-lg  hover:text-white dark:hover:text-primary-600 mb-4 dark:hover:bg-gray-800
            {{\Request::is($activeUrl) ? ' bg-transparent text-gray-300 ' : 'bg-transparent text-gray-300'}}">

            <span class="animate__animated animate__fadeInLeft animate__fast">
            {{$iconName}}
            </span>

            <span class="ml-3 text-sm font-medium myFontSemibold"> {{$title}} </span>

            <span class="ml-auto transition duration-300 shrink-0 group-open:-rotate-180">

                <x-icon name="chevron-down" class="w-4 h-4"/>

            </span>
        </summary>

        <nav class="mt-1.5 ml-8 flex flex-col">
            {{$navItem}}
        </nav>
    </details>
</li>
