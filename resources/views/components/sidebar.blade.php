<div id="hs-application-sidebar" class="hs-overlay  [--auto-close:lg]
  hs-overlay-open:translate-x-0
  -translate-x-full transition-all duration-300 transform
  w-[260px] h-full
  hidden
  fixed inset-y-0 start-0 z-[60]
  bg-white border-e border-gray-200
  lg:block lg:translate-x-0 lg:end-auto lg:bottom-0" role="dialog" tabindex="-1" aria-label="Sidebar">
    <div class="relative flex flex-col h-full max-h-full">
        <div class="px-6 pt-4 flex justify-center mb-4">
            <!-- Logo -->
            <a class="flex-none rounded-xl text-2xl inline-block font-bold focus:outline-none focus:opacity-80" href="/" aria-label="Property Listing">
                Property Listing
            </a>
            <!-- End Logo -->
        </div>

        <!-- Content -->
        <div class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
            <nav class="hs-accordion-group p-3 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
                <ul class="flex flex-col space-y-1">
                    <li>
                        <a href="/"
                            class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 {{ Request::is('/') ? 'bg-gray-100' : '' }}">
                            <i class="fas fa-building"></i>
                            Dashboard
                        </a>

                    </li>
                    <li>
                        <a href="/listing-agents"
                            class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 {{ Request::is('listing-agents') ? 'bg-gray-100' : '' }}">
                            <i class="fas fa-user-tie"></i>
                            Listing Agents
                        </a>
                    </li>
                    <li>
                        <a href="/locations"
                            class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 {{ Request::is('locations') ? 'bg-gray-100' : '' }}">
                            <i class="fas fa-map-marker-alt"></i>
                            Locations
                        </a>
                    </li>
                    <li>
                        <a href="/bayut-locations"
                            class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 {{ Request::is('bayut-locations') ? 'bg-gray-100' : '' }}">
                            <i class="fas fa-map-marker-alt"></i>
                            Bayut Locations
                        </a>
                    </li>
                    <li>
                        <a href="/landlords"
                            class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 {{ Request::is('landlords') ? 'bg-gray-100' : '' }}">
                            <i class="fas fa-user-shield"></i>
                            Landlords
                        </a>
                    </li>
                    <li>
                        <a href="/developers"
                            class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 {{ Request::is('developers') ? 'bg-gray-100' : '' }}">
                            <i class="fas fa-tools"></i>
                            Developers
                        </a>
                    </li>
                    <li>
                        <a href="/settings"
                            class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-800 rounded-lg hover:bg-gray-100 {{ Request::is('settings') ? 'bg-gray-100' : '' }}">
                            <i class="fas fa-cog"></i>
                            Settings
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- End Content -->

        <div class="flex-shrink-0">
            <!-- Footer -->
            <div class="p-6 text-xs text-center text-gray-800">
                &copy; Copyright {{ date('Y') }}. <a href="https://vortexweb.cloud/" class="underline" target="_blank">VortexWeb</a>
            </div>
            <!-- End Footer -->
        </div>
    </div>
</div>