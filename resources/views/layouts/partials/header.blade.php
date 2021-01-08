<div class="flex flex-wrap items-center mb-5 border-b shadow">
    <div class="w-1/6 sm:w-3/12">
        <div class="text-xl sm:text-3xl ml-3">
            <a href="/">
                <span class="hidden sm:inline">
                    <img src="https://raw.githubusercontent.com/rapidez/art/master/logo.svg" alt="" class="h-12">
                </span>
                <span class="inline sm:hidden">🚀</span>
            </a>
        </div>
    </div>
    <div class="w-6/12 h-12 flex items-center">
        @include('rapidez::layouts.partials.header.autocomplete')
    </div>
    <div class="w-1/3 sm:w-1/4 flex justify-end pr-3">
        @include('rapidez::layouts.partials.header.account')
        @include('rapidez::layouts.partials.header.minicart')
    </div>
    <div class="w-full">
        {{-- Because the lack of an @includeIf or @includeWhen equivalent for Blade components we're using a placeholder --}}
        <x-dynamic-component :component="App::providerIsLoaded('Rapidez\Menu\MenuServiceProvider') ? 'menu' : 'placeholder'" />
    </div>
</div>