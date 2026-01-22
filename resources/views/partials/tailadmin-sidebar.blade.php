<aside
    class="fixed mt-16 flex flex-col lg:mt-0 top-0 px-5 left-0 bg-white dark:bg-gray-900 dark:border-gray-800 text-gray-900 h-screen transition-all duration-300 ease-in-out z-50 border-r border-gray-200"
    :class="{
        'w-[290px]': isExpanded || isMobileOpen || isHovered,
        'w-[90px]': !isExpanded && !isMobileOpen && !isHovered,
        'translate-x-0': isMobileOpen,
        '-translate-x-full': !isMobileOpen,
        'lg:translate-x-0': true
    }"
    @mouseenter="if(!isExpanded) isHovered = true"
    @mouseleave="isHovered = false"
>
    <div class="py-8 flex" :class="!isExpanded && !isHovered ? 'lg:justify-center' : 'justify-start'">
        <a href="{{ route('admin.dashboard') }}">
            <template x-if="isExpanded || isHovered || isMobileOpen">
                <div>
                    <img class="dark:hidden" src="{{ asset('images/logo/logo.svg') }}" alt="Logo" width="150" height="40" />
                    <img class="hidden dark:block" src="{{ asset('images/logo/logo-dark.svg') }}" alt="Logo" width="150" height="40" />
                </div>
            </template>
            <template x-if="!(isExpanded || isHovered || isMobileOpen)">
                <img src="{{ asset('images/logo/logo-icon.svg') }}" alt="Logo" width="32" height="32" />
            </template>
        </a>
    </div>

    <div class="flex flex-col overflow-y-auto duration-300 ease-linear no-scrollbar">
        <nav class="mb-6">
            <div class="flex flex-col gap-4">
                <div>
                    <h2 class="mb-4 text-xs uppercase flex leading-[20px] text-gray-400" :class="!isExpanded && !isHovered ? 'lg:justify-center' : 'justify-start'">
                        <template x-if="isExpanded || isHovered || isMobileOpen">
                            <span>Menu</span>
                        </template>
                        <template x-if="!(isExpanded || isHovered || isMobileOpen)">
                            <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5 10C3.9 10 3 10.9 3 12C3 13.1 3.9 14 5 14C6.1 14 7 13.1 7 12C7 10.9 6.1 10 5 10Z" fill="currentColor" opacity="0.5"/><path d="M19 10C17.9 10 17 10.9 17 12C17 13.1 17.9 14 19 14C20.1 14 21 13.1 21 12C21 10.9 20.1 10 19 10Z" fill="currentColor" opacity="0.5"/><path d="M12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z" fill="currentColor" opacity="0.5"/></svg>
                        </template>
                    </h2>

                    <ul class="flex flex-col gap-4">
                        <!-- Dashboard Link -->
                        <li>
                            <a href="{{ route('admin.dashboard') }}" class="menu-item group" :class="(isActive('{{ route('admin.dashboard') }}') || {{ request()->routeIs('admin.dashboard') ? 'true' : 'false' }}) ? 'menu-item-active' : 'menu-item-inactive'">
                                <span class="menu-item-icon-size" :class="(isActive('{{ route('admin.dashboard') }}') || {{ request()->routeIs('admin.dashboard') ? 'true' : 'false' }}) ? 'menu-item-icon-active' : 'menu-item-icon-inactive'">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.5 3.25C4.25736 3.25 3.25 4.25736 3.25 5.5V8.99998C3.25 10.2426 4.25736 11.25 5.5 11.25H9C10.2426 11.25 11.25 10.2426 11.25 8.99998V5.5C11.25 4.25736 10.2426 3.25 9 3.25H5.5ZM4.75 5.5C4.75 5.08579 5.08579 4.75 5.5 4.75H9C9.41421 4.75 9.75 5.08579 9.75 5.5V8.99998C9.75 9.41419 9.41421 9.74998 9 9.74998H5.5C5.08579 9.74998 4.75 9.41419 4.75 8.99998V5.5ZM5.5 12.75C4.25736 12.75 3.25 13.7574 3.25 15V18.5C3.25 19.7426 4.25736 20.75 5.5 20.75H9C10.2426 20.75 11.25 19.7427 11.25 18.5V15C11.25 13.7574 10.2426 12.75 9 12.75H5.5ZM4.75 15C4.75 14.5858 5.08579 14.25 5.5 14.25H9C9.41421 14.25 9.75 14.5858 9.75 15V18.5C9.75 18.9142 9.41421 19.25 9 19.25H5.5C5.08579 19.25 4.75 18.9142 4.75 18.5V15ZM12.75 5.5C12.75 4.25736 13.7574 3.25 15 3.25H18.5C19.7426 3.25 20.75 4.25736 20.75 5.5V8.99998C20.75 10.2426 19.7426 11.25 18.5 11.25H15C13.7574 11.25 12.75 10.2426 12.75 8.99998V5.5ZM15 4.75C14.5858 4.75 14.25 5.08579 14.25 5.5V8.99998C14.25 9.41419 14.5858 9.74998 15 9.74998H18.5C18.9142 9.74998 19.25 9.41419 19.25 8.99998V5.5C19.25 5.08579 18.9142 4.75 18.5 4.75H15ZM15 12.75C13.7574 12.75 12.75 13.7574 12.75 15V18.5C12.75 19.7426 13.7574 20.75 15 20.75H18.5C19.7426 20.75 20.75 19.7427 20.75 18.5V15C20.75 13.7574 19.7426 12.75 18.5 12.75H15ZM14.25 15C14.25 14.5858 14.5858 14.25 15 14.25H18.5C18.9142 14.25 19.25 14.5858 19.25 15V18.5C19.25 18.9142 18.9142 19.25 18.5 19.25H15C14.5858 19.25 14.25 18.9142 14.25 18.5V15Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <template x-if="isExpanded || isHovered || isMobileOpen">
                                    <span class="menu-item-text">Dashboard</span>
                                </template>
                            </a>
                        </li>
                        <!-- Add more items as needed -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</aside>
