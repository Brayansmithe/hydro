
           
            <div class="flex justify-around items-center relative top-12 bottom-10 mb-20">
                <!--<div class="fixed bg-overlay w-screen -h-2/4"></div>-->
                <a href="@yield('menulink')">
                    <i class="fa-solid fa-arrow-left text-white border-white border-2 rounded-full p-1"></i>
                </a>
                <p class="text-3xl font-bold text-stroke uppercase">@yield('menuname')</p>
                <i class="@yield('menuicone') text-white text-2xl text-stroke"></i>
            </div>
        