<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In | TailAdmin - Tailwind CSS Admin Dashboard Template</title>
    @vite(['resources/css/admin.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-outfit text-base font-normal text-gray-700 dark:text-gray-200 bg-gray-100 dark:bg-gray-900">

    <div class="flex h-screen overflow-hidden">
        <!-- Left Column: Form -->
        <div class="w-full xl:w-1/2 xl:py-20 xl:px-20 px-4 py-10 flex flex-col justify-center bg-white dark:bg-gray-800 h-full overflow-y-auto">
            <div class="max-w-[500px] w-full mx-auto">
                <a href="{{ route('admin.dashboard') }}" class="mb-10 inline-flex items-center gap-2 text-sm font-medium text-gray-500 hover:text-primary">
                    <svg class="fill-current" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.7083 5.29166L8.125 9.99999L12.7083 14.7083C13.1042 15.1042 13.1042 15.75 12.7083 16.1458C12.3125 16.5417 11.6667 16.5417 11.2708 16.1458L6.00001 10.7292C5.60418 10.3333 5.60418 9.68749 6.00001 9.29166L11.2708 3.875C11.6667 3.47916 12.3125 3.47916 12.7083 3.875C13.1042 4.27083 13.1042 4.91666 12.7083 5.29166Z" fill=""/>
                    </svg>
                    Back to dashboard
                </a>

                <h2 class="mb-2 text-2xl font-bold text-gray-800 dark:text-white sm:text-title-xl2">
                    Sign In
                </h2>
                <p class="mb-6 text-gray-500 dark:text-gray-400">
                    Enter your email and password to sign in!
                </p>

                <div class="mb-6 flex gap-4">
                    <button class="flex w-full items-center justify-center gap-2 rounded-lg border border-gray-200 bg-gray-50 py-3 px-4 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <svg class="h-5 w-5" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.5 12.2857C23.5 11.4571 23.4286 10.6643 23.2929 9.9H12V14.5429H18.45C18.1714 16.0429 17.3286 17.3143 16.0571 18.1643V21.1714H19.9214C22.1857 19.0857 23.5 16.0143 23.5 12.2857Z" fill="#4285F4"/>
                            <path d="M12 24C15.2357 24 17.95 22.9286 19.9286 21.1L16.0643 18.1C14.9929 18.8143 13.6214 19.2357 12 19.2357C8.87857 19.2357 6.23571 17.1286 5.29286 14.2929H1.29286V17.3929C3.21429 21.2071 7.27143 24 12 24Z" fill="#34A853"/>
                            <path d="M5.29286 14.2929C5.05 13.5714 4.92143 12.8 4.92143 12C4.92143 11.2 5.05 10.4286 5.29286 9.70714V6.60714H1.29286C0.464286 8.25714 0 10.0857 0 12C0 13.9143 0.464286 15.7429 1.29286 17.3929L5.29286 14.2929Z" fill="#FBBC05"/>
                            <path d="M12 4.76429C13.7571 4.76429 15.3357 5.37143 16.5786 6.55L20.0143 3.11429C17.9429 1.18571 15.2286 0 12 0C7.27143 0 3.21429 2.79286 1.29286 6.60714L5.29286 9.70714C6.23571 6.87143 8.87857 4.76429 12 4.76429Z" fill="#EA4335"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-400">Sign in with Google</span>
                    </button>
                    <button class="flex w-full items-center justify-center gap-2 rounded-lg border border-gray-200 bg-gray-50 py-3 px-4 hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <svg class="h-5 w-5 text-gray-800 dark:text-white" width="20" height="20" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.33333 6.92833L14.5458 1H13.3108L8.785 6.14833L5.16917 1H1L6.475 8.78083L1 15.0083H2.235L7.0225 9.56083L10.8658 15.0083H15.035L9.33333 6.92833ZM3.38 1.91667H5.2775L12.6525 14.0917H10.755L3.38 1.91667Z" fill="currentColor"/>
                        </svg>
                        <span class="text-sm font-medium text-gray-600 dark:text-gray-400">Sign in with X</span>
                    </button>
                </div>

                <div class="mb-6 flex items-center gap-4">
                    <span class="h-px w-full bg-gray-200 dark:bg-gray-700"></span>
                    <span class="text-sm text-gray-500 dark:text-gray-400">Or</span>
                    <span class="h-px w-full bg-gray-200 dark:bg-gray-700"></span>
                </div>

                <form action="#" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label class="mb-2.5 block font-medium text-gray-700 dark:text-gray-200">Email <span class="text-red-500">*</span></label>
                        <input type="email" placeholder="info@gmail.com" class="w-full rounded-lg border border-gray-300 bg-transparent py-4 pl-6 pr-10 outline-none focus:border-blue-600 focus-visible:shadow-none dark:border-gray-600 dark:bg-gray-700 dark:focus:border-blue-500" />
                    </div>

                    <div class="mb-6" x-data="{ show: false }">
                        <label class="mb-2.5 block font-medium text-gray-700 dark:text-gray-200">Password <span class="text-red-500">*</span></label>
                        <div class="relative">
                            <input :type="show ? 'text' : 'password'" placeholder="Enter your password" class="w-full rounded-lg border border-gray-300 bg-transparent py-4 pl-6 pr-10 outline-none focus:border-blue-600 focus-visible:shadow-none dark:border-gray-600 dark:bg-gray-700 dark:focus:border-blue-500" />
                            <span @click="show = !show" class="absolute right-4 top-4 cursor-pointer">
                                <svg x-show="!show" class="fill-current text-gray-500 hover:text-blue-600" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4.125C6.1875 4.125 2.0625 7.21875 0.6875 11C2.0625 14.7812 6.1875 17.875 11 17.875C15.8125 17.875 19.9375 14.7812 21.3125 11C19.9375 7.21875 15.8125 4.125 11 4.125ZM11 15.8125C8.34375 15.8125 6.1875 13.6562 6.1875 11C6.1875 8.34375 8.34375 6.1875 11 6.1875C13.6562 6.1875 15.8125 8.34375 15.8125 11C15.8125 13.6562 13.6562 15.8125 11 15.8125ZM11 8.25C9.48438 8.25 8.25 9.48438 8.25 11C8.25 12.5156 9.48438 13.75 11 13.75C12.5156 13.75 13.75 12.5156 13.75 11C13.75 9.48438 12.5156 8.25 11 8.25Z" fill=""/>
                                </svg>
                                <svg x-show="show" class="fill-current text-gray-500 hover:text-blue-600" width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                    <path d="M11 4.125C6.1875 4.125 2.0625 7.21875 0.6875 11C2.0625 14.7812 6.1875 17.875 11 17.875C15.8125 17.875 19.9375 14.7812 21.3125 11C19.9375 7.21875 15.8125 4.125 11 4.125ZM11 15.8125C8.34375 15.8125 6.1875 13.6562 6.1875 11C6.1875 8.34375 8.34375 6.1875 11 6.1875C13.6562 6.1875 15.8125 8.34375 15.8125 11C15.8125 13.6562 13.6562 15.8125 11 15.8125ZM11 8.25C9.48438 8.25 8.25 9.48438 8.25 11C8.25 12.5156 9.48438 13.75 11 13.75C12.5156 13.75 13.75 12.5156 13.75 11C13.75 9.48438 12.5156 8.25 11 8.25Z" fill=""/>
                                    <path d="M2.5 2.5L19.5 19.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="mb-5 flex items-center justify-between gap-4">
                        <label class="flex cursor-pointer select-none items-center gap-2 text-sm text-gray-600 dark:text-gray-400">
                            <input type="checkbox" class="sr-only" x-data="{ checked: false }" @change="checked = !checked">
                            <span class="flex h-5 w-5 items-center justify-center rounded border border-gray-300 bg-transparent dark:border-gray-600">
                                <span :class="checked ? '!opacity-100' : 'opacity-0'" class="opacity-0">
                                    <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3.5 6.66667L0.166656 3.33334L1.33332 2.16667L3.5 4.33334L8.66666 0.833344L9.83332 2.00001L3.5 6.66667Z" fill="#3C50E0"/>
                                    </svg>
                                </span>
                            </span>
                            Keep me logged in
                        </label>
                        <a href="#" class="text-sm text-blue-600 hover:underline dark:text-blue-500">Forgot password?</a>
                    </div>

                    <button type="submit" class="w-full cursor-pointer rounded-lg bg-blue-600 p-4 text-white transition hover:bg-opacity-90">
                        Sign in
                    </button>

                    <div class="mt-6 text-center">
                        <p class="text-gray-600 dark:text-gray-400">
                            Don't have an account?
                            <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Sign Up</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>

        <!-- Right Column: Image/Branding -->
        <div class="hidden xl:flex xl:w-1/2 relative h-full flex-col items-center justify-center bg-[#0F172A] overflow-hidden">
             <!-- Background Grid -->
             <div class="absolute inset-0 z-0">
                <img src="{{ asset('images/grid-image/image-01.png') }}" alt="Grid Background" class="h-full w-full object-cover opacity-30">
             </div>

             <!-- Content -->
             <div class="relative z-10 text-center">
                 <a href="/" class="mb-5.5 inline-block">
                     <img src="{{ asset('images/logo/auth-logo.svg') }}" alt="Logo" class="w-48 mx-auto">
                 </a>
                 <p class="text-2xl font-semibold text-white px-10 mt-10">
                    Free and Open-Source Tailwind CSS Admin Dashboard Template
                 </p>
                 <p class="text-gray-400 mt-4 max-w-md mx-auto">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.
                 </p>
             </div>

             <!-- Theme Toggle (Visual only for now) -->
             <div class="absolute bottom-10 right-10 z-20">
                 <div class="bg-gray-800 p-2 rounded-full cursor-pointer">
                     <svg class="fill-current text-white" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10 15C12.7614 15 15 12.7614 15 10C15 7.23858 12.7614 5 10 5C7.23858 5 5 7.23858 5 10C5 12.7614 7.23858 15 10 15Z" fill=""/>
                     </svg>
                 </div>
             </div>
        </div>
    </div>
</body>
</html>
