<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? 'My app' }}</title>
    </head>

    <body {{ $attributes }}>
        <div class="min-h-full">
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="flex h-16 items-center justify-between">
                        <div class="flex items-center">
                            <div class="shrink-0">
                                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                                    alt="Your Company" class="size-8" />
                            </div>
                            <div class="hidden md:block">
                                <div class="ml-10 flex items-baseline space-x-4">
                                    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
                                        <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>

                                        <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>

                                        <x-nav-link href="/contact"
                                            :active="request()->is('contact')">Contact</x-nav-link>
                                    </div>

                                </div>
                            </div>
                        </div>
                        @auth
                            <form action="/logout" method="POST">
                                @csrf

                                <div class="ml-4 flex items-center md:ml-6">
                                    <x-form-submit-button>Logout</x-form-submit-button>
                                </div>
                            </form>
                        @endauth

                        @guest
                            <div class="ml-4 flex items-center md:ml-6">
                                <x-nav-link href="/register" :active="request()->is('/register')">Register</x-nav-link>
                                <x-nav-link href="/login" :active="request()->is('/login')">Login</x-nav-link>
                            </div>
                        @endguest
                    </div>
                </div>
            </nav>

            <header class="relative bg-white shadow-sm">
                <div class="flex justify-between items-center mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                    <x-link href="/jobs/create">
                        Create Job
                    </x-link>
                </div>
            </header>

            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>

</html>