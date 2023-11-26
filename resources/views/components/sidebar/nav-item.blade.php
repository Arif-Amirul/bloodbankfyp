@props([
    'route' => '',
    'activeUrl' => '',
    'title' => '',
    'iconName' => '',

])

<li
    class="relative hidden lg:block"
    x-data="{ showDropdown: false }"
    @mouseover="showDropdown = true"
    @mouseout="showDropdown = false"
    >
    <a href="{{ $route }}"
        class="flex items-center px-4 text-base font-normal rounded-lg mb-2
        {{Route::current()->uri == $activeUrl || \Request::is($activeUrl) ? ' bg-gray-50  text-primary-900 dark:bg-slate-800 dark:text-primary-500  py-2 ' : ' hover:text-white bg-transparent text-gray-300 dark:text-white py-1'}}
        ">

        <span class=" animate__animated animate__fadeInLeft animate__fast">
            {{$iconName}}
        </span>
    </a>
    <div
        x-show="showDropdown"
        x-cloak
        x-ref="dropdownContent"
        class="absolute px-4 py-2 w-[11rem] font-semibold z-50  bg-white border dark:border-gray-800 rounded-md shadow-xl top-1 text-primary-600 dark:bg-gray-900 dark:text-primary-500 left-[3.6rem]   text-sm"
        style="z-index: 9999 !important;">
        {{$title}}
    </div>
</li>


<li class="relative block lg:hidden">
    <a href="{{ $route }}"
        class="flex items-center px-4 py-2.5 text-base font-normal rounded-l-lg mb-2
        {{Route::current()->uri == $activeUrl || \Request::is($activeUrl) ? ' bg-gray-50  text-primary-900 dark:bg-slate-800 dark:text-primary-500' : ' hover:text-white bg-transparent text-gray-300 dark:text-white'}}
        ">

        <span class=" animate__animated animate__fadeInLeft animate__fast">
            {{$iconName}}
        </span>
        <span class="ml-3 text-sm font-medium myFontSemibold animate__animated animate__fadeInLeft animate__faster">{{$title}}</span>
    </a>
</li>
