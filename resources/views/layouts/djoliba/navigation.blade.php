
    <!-- ========== { HEADER }==========  -->
    <header class="fixed top-0 left-0 right-0 z-50">
        <nav class="bg-gray-900">
            <div class="px-3 mx-auto xl:container sm:px-4 xl:px-2">
                <div class="flex justify-between p-1">
                    <div class="flex items-center px-2 text-xl font-bold capitalize bg-white border mx-w-10">
                        {{-- <x-application-logo class="block w-20 text-gray-800 fill-current h-14" /> --}}
                        <p class="text-red-700">DJOLIBA <span class="text-black">INFO</span></p>
                    </div>

                    <div class="flex flex-row">
                        <!-- nav menu -->
                        <ul class="items-center hidden text-sm font-bold text-gray-400 navbar lg:flex lg:flex-row">
                            <li class="relative border-l border-gray-800 active hover:bg-gray-900">
                                <a class="block px-6 py-3 border-b-2 border-transparent" href="index.html">Accueil</a>
                            </li>
                            {{-- <li class="relative border-l border-gray-800 dropdown hover:bg-gray-900">
                                <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Pages</a>

                                <ul class="absolute left-0 right-auto z-50 font-normal text-left text-gray-700 bg-white border border-b-0 border-gray-100 dropdown-menu top-full" style="min-width: 12rem;">
                                    <li class="relative subdropdown hover:bg-gray-50">
                                        <a class="block px-6 py-2 border-b border-gray-100" href="#">
                                            Homepage
                                        </a>

                                        <!--dropdown submenu-->
                                        <ul class="absolute right-auto z-50 ml-0 mr-0 -mt-10 text-left transform bg-white border border-b-0 border-gray-100 dropdown-menu left-full top-full" style="min-width: 12rem;">
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="index.html">Homepage 1</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="index-2.html">Homepage 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="relative subdropdown hover:bg-gray-50">
                                        <a class="block px-6 py-2 border-b border-gray-100" href="#">
                                            Pages
                                        </a>

                                        <!--dropdown submenu-->
                                        <ul class="absolute right-auto z-50 ml-0 mr-0 -mt-10 text-left transform bg-white border border-b-0 border-gray-100 dropdown-menu left-full top-full" style="min-width: 12rem;">
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="404.html">404</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="author.html">Author</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="category.html">Category</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="search.html">Search</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="page.html">Page</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="contact-us.html">Contact</a></li>
                                        </ul>
                                    </li>
                                    <li class="relative subdropdown hover:bg-gray-50">
                                        <a class="block px-6 py-2 border-b border-gray-100" href="#">
                                            Post
                                        </a>

                                        <!--dropdown submenu-->
                                        <ul class="absolute right-auto z-50 ml-0 mr-0 -mt-10 text-left transform bg-white border border-b-0 border-gray-100 dropdown-menu left-full top-full" style="min-width: 12rem;">
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="single.html">Post default</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="single-2.html">Post fullwidth</a></li>
                                        </ul>
                                    </li>

                                    <li class="relative subdropdown hover:bg-gray-50">
                                        <a class="block px-6 py-2 border-b border-gray-100" href="#">
                                            Documentation
                                        </a>

                                        <!--dropdown submenu-->
                                        <ul class="absolute right-auto z-50 ml-0 mr-0 -mt-10 text-left transform bg-white border border-b-0 border-gray-100 dropdown-menu left-full top-full" style="min-width: 12rem;">
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="docs/index.html">Get started</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="docs/components.html">Components</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="docs/credits.html">Credits</a></li>
                                            <li class="relative hover:bg-gray-50"><a class="block px-6 py-2 border-b border-gray-100" href="docs/changelogs.html">Changelogs</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block px-6 py-3 border-b-2 border-transparent" href="#">News</a>
                            </li>
                            <li class="relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Interviews</a>
                            </li>
                            <li class="relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Politique</a>
                            </li>
                            <li class="relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Economie</a>
                            </li>
                            <li class="relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block px-6 py-3 border-b-2 border-transparent" href="#">Region</a>
                            </li>
                            <li class="relative border-l border-gray-800 hover:bg-gray-900">
                                <a class="block px-6 py-3 border-b-2 border-transparent" href="#">More</a>
                            </li>
                        </ul>

                        <!-- search form & mobile nav -->
                        <div class="flex flex-row items-center text-gray-300">
                            <div class="relative border-r border-gray-800 search-dropdown lg:border-l hover:bg-gray-900">
                                <button class="block px-6 py-3 border-b-2 border-transparent">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="open bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="close bi bi-x-lg" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z" />
                                        <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z" />
                                    </svg>
                                </button>
                                <div class="absolute right-0 left-auto z-50 p-3 mt-1 text-left text-gray-700 bg-white border border-gray-100 dropdown-menu top-full" style="min-width: 15rem;">
                                    <div class="relative flex flex-wrap items-stretch w-full">
                                        <input type="text" class="relative flex-1 flex-grow flex-shrink w-px max-w-full px-5 py-2 overflow-x-auto leading-5 text-gray-800 bg-white border border-gray-300 focus:outline-none focus:border-gray-400 focus:ring-0 dark:text-gray-400 dark:bg-gray-700 dark:border-gray-700 dark:focus:border-gray-600" name="text" placeholder="Search..." aria-label="search">
                                        <div class="flex -mr-px">
                                            <button class="flex items-center px-5 py-2 -ml-1 leading-5 text-gray-100 bg-black hover:text-white hover:bg-gray-900 hover:ring-0 focus:outline-none focus:ring-0" type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative block hover:bg-gray-800 lg:hidden">
                                <button type="button" class="block px-6 py-3 border-b-2 border-transparent menu-mobile">
                                    <span class="sr-only">Mobile menu</span>
                                    <svg class="inline-block w-6 h-6 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                                    </svg> Menu
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header><!-- end header -->

    <!-- Mobile menu -->
    <div class="fixed inset-0 z-50 w-full h-full side-area">
        <!-- bg open -->
        <div class="fixed inset-x-0 top-0 w-full h-full bg-gray-900 back-menu bg-opacity-70">
            <div class="absolute p-2 text-white cursor-pointer right-64">
                <svg class="bi bi-x" width="2rem" height="2rem" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 010 .708l-7 7a.5.5 0 01-.708-.708l7-7a.5.5 0 01.708 0z" clip-rule="evenodd"></path>
                    <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 000 .708l7 7a.5.5 0 00.708-.708l-7-7a.5.5 0 00-.708 0z" clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>

        <!-- Mobile navbar -->
        <nav id="mobile-nav" class="fixed top-0 right-0 z-40 flex flex-col w-64 h-full overflow-auto bg-white side-menu dark:bg-gray-800">
            <div class="mb-auto">
                <!--navigation-->
                <nav class="relative flex flex-wrap">
                    <div class="w-full py-4 font-bold text-center bg-white border-b border-gray-100">
                        
                        <p class="font-bold text-red-700">DJOLIBA <span class="text-black">INFO</span></p>
                    </div>
                    <ul id="side-menu" class="flex flex-col float-none w-full">
                        <li class="relative">
                            <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Home</a>
                        </li>

                        <!-- dropdown with submenu-->
                        <li class="relative dropdown">
                            <a class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50" href="javascript:;">
                                News
                            </a>

                            <!-- dropdown menu -->
                            <ul class="dropdown-menu block rounded rounded-t-none top-full z-50 ml-4 py-0.5 text-left bg-white dark:bg-gray-800 mb-4" style="min-width: 12rem">
                                <!--submenu-->
                                <li class="relative subdropdown">
                                    <a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50" href="javascript:;">
                                        Dropdown item
                                    </a>

                                    <!--dropdown submenu-->
                                    <ul class="dropdown-menu block rounded rounded-t-none top-full z-50 ml-4 py-0.5 text-left bg-white dark:bg-gray-800" style="min-width: 12rem">
                                        <li><a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                                        <li><a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                                        <li><a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                                        <li><a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown sub item</a></li>
                                    </ul>
                                </li>
                                <!--end submenu-->
                                <li class="relative"><a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown item</a></li>
                                <li class="relative"><a class="block w-full px-5 py-2 border-b border-gray-100 hover:bg-gray-50" href="#">Dropdown item</a></li>
                            </ul>
                        </li>

                        <li class="relative">
                            <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Sport</a>
                        </li>

                        <li class="relative">
                            <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Travel</a>
                        </li>

                        <li class="relative">
                            <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Techno</a>
                        </li>

                        <li class="relative">
                            <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Worklife</a>
                        </li>

                        <li class="relative">
                            <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">Future</a>
                        </li>

                        <li class="relative">
                            <a href="#" class="block px-5 py-2 border-b border-gray-100 hover:bg-gray-50">More</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- copyright -->
            <div class="px-6 py-4 mt-6 text-sm text-center">
                <p>Copyright <a href="#">Tailnews</a> - All right reserved</p>
            </div>
        </nav>
    </div><!-- End Mobile menu -->