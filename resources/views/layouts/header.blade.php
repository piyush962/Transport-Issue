<!-- <?php

        use App\Models\Role;
        use App\Models\User;
        use App\Models\UserDetail;

        ?> -->
<div class="bg-white rounded-[10px] flex justify-between items-center ">
    <button id="toggle_btn" class="bg-transparent border-none p-0 inline-block xl:hidden mr-4">
        <svg class="w-[28px]" width="32" height="24" viewBox="0 0 32 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M31.5 12C31.5 12.3978 31.342 12.7794 31.0607 13.0607C30.7794 13.342 30.3978 13.5 30 13.5H2C1.60217 13.5 1.22064 13.342 0.939339 13.0607C0.658035 12.7794 0.5 12.3978 0.5 12C0.5 11.6022 0.658035 11.2206 0.939339 10.9393C1.22064 10.658 1.60217 10.5 2 10.5H30C30.3978 10.5 30.7794 10.658 31.0607 10.9393C31.342 11.2206 31.5 11.6022 31.5 12ZM23.5 22C23.5 22.3978 23.342 22.7794 23.0607 23.0607C22.7794 23.342 22.3978 23.5 22 23.5H2C1.60217 23.5 1.22064 23.342 0.939339 23.0607C0.658035 22.7794 0.5 22.3978 0.5 22C0.5 21.6022 0.658035 21.2206 0.939339 20.9393C1.22064 20.658 1.60217 20.5 2 20.5H22C22.3978 20.5 22.7794 20.658 23.0607 20.9393C23.342 21.2206 23.5 21.6022 23.5 22ZM15.5 2C15.5 2.39782 15.342 2.77936 15.0607 3.06066C14.7794 3.34196 14.3978 3.5 14 3.5H2C1.60217 3.5 1.22064 3.34196 0.939339 3.06066C0.658035 2.77936 0.5 2.39783 0.5 2C0.5 1.60217 0.658035 1.22064 0.939339 0.93934C1.22064 0.658036 1.60217 0.5 2 0.5H14C14.3978 0.5 14.7794 0.658035 15.0607 0.93934C15.342 1.22065 15.5 1.60218 15.5 2Z" fill="#13103A" stroke="black" />
        </svg>
    </button>
    <h3 class="hidden xl:block text-xl lg:text-[24px] font-[600] leading-[24px] text-[#1E1E1E] tracking-[0.04em] capitalize">Dashboard</h3>
    <div class="flex justify-center items-center">
        <select class="border border-[rgba(0,0,0,0.1)] text-[#1E1E1E] font-medium text-sm tracking-[-0.04em] mr-[10px] md:mr-[15px] rounded-[8px] pr-4 lg:pr-10  pl-2 lg:pl-4 py-2 lg:py-3">
            <option>Day</option>
            <option>Week</option>
            <option>Month</option>
        </select>
        <div class="dropdown relative ml-[auto] mr-[10px] md:mr-[15px] ">
            <div type="button" class="button flex items-center gap-[10px] cursor-pointer">
                <span class="relative inline-block h-10 lg:h-[48px] w-10 lg:w-[48px] inline-flex items-center justify-center rounded-full bg-[rgba(255,59,48,0.1)]">
                    <!-- Ping Dot -->
                    <span class="absolute top-0 right-0 h-3 w-3 rounded-full bg-red-500 animate-ping"></span>
                    <span class="absolute top-0 right-0 h-3 w-3 rounded-full bg-red-500"></span>
                    <!-- Bell Icon -->
                    <svg class="mx-auto" width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.71912 19.7502H11.7191C11.7191 20.8502 10.8191 21.7502 9.71912 21.7502C8.61912 21.7502 7.71912 20.8502 7.71912 19.7502ZM18.7191 17.7502V18.7502H0.719116V17.7502L2.71912 15.7502V9.75024C2.71912 6.65024 4.71912 3.95024 7.71912 3.05024V2.75024C7.71912 1.65024 8.61912 0.750244 9.71912 0.750244C10.8191 0.750244 11.7191 1.65024 11.7191 2.75024V3.05024C14.7191 3.95024 16.7191 6.65024 16.7191 9.75024V15.7502L18.7191 17.7502ZM14.7191 9.75024C14.7191 6.95024 12.5191 4.75024 9.71912 4.75024C6.91912 4.75024 4.71912 6.95024 4.71912 9.75024V16.7502H14.7191V9.75024Z" fill="#FF3B30" />
                    </svg>
                </span>
                <div class="pr-[7px]">
                    <strong class="flex items-center gap-[10px] text-xs md:text-[13px] font-[500] leading-[15px] text-[#13103A] tracking-[0.01em] capitalize mb-[2px]">
                        <svg width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.18536 1.6261L5.61718 6.05792L10.049 1.6261" stroke="#565656" stroke-width="1.47727" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </strong>
                </div>
            </div>
            <div class="dropdown_menu absolute top-[100%] right-0 z-10 mt-2 w-[200px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                    hiiiiiiiiiiii
                </div>
            </div>
        </div>
        <div class="dropdown relative ml-[auto]">
            <div type="button" class="button flex items-center gap-[10px] cursor-pointer	">

                <span class="relative inline-block h-10 lg:h-[48px] w-10 lg:w-[48px] inline-flex items-center justify-center rounded-full bg-[rgba(255,59,48,0.1)]">
                    <!-- Bell Icon -->
                    <svg width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.48083 8.84204C11.69 8.84204 13.4808 7.05118 13.4808 4.84204C13.4808 2.6329 11.69 0.842041 9.48083 0.842041C7.2717 0.842041 5.48083 2.6329 5.48083 4.84204C5.48083 7.05118 7.2717 8.84204 9.48083 8.84204Z" stroke="#FF3B30" stroke-width="1.5" />
                        <path d="M17.4808 16.342C17.4808 18.827 17.4808 20.842 9.48083 20.842C1.48083 20.842 1.48083 18.827 1.48083 16.342C1.48083 13.857 5.06283 11.842 9.48083 11.842C13.8988 11.842 17.4808 13.857 17.4808 16.342Z" stroke="#FF3B30" stroke-width="1.5" />
                    </svg>

                </span>
                <div class="pr-[7px]">
                    <strong class="flex items-center gap-[10px] text-xs md:text-[13px] font-[500] leading-[15px] text-[#13103A] tracking-[0.01em] capitalize mb-[2px]">
                        <svg width="11" height="7" viewBox="0 0 11 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.18536 1.6261L5.61718 6.05792L10.049 1.6261" stroke="#565656" stroke-width="1.47727" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </strong>
                </div>
            </div>
            <div class="dropdown_menu absolute top-[100%] right-0 z-10 mt-2 w-[200px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black/5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                    <!-- Active: "bg-gray-100 text-gray-900 outline-none", Not Active: "text-gray-700" -->
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1">{{ __('Profile') }}</a> 
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="block px-4 py-2 text-sm text-gray-700" href="route('logout')" role="menuitem" tabindex="-1" id="menu-item-2"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>