<x-app-layout>
    <div class="flex flex-wrap items-center mb-2.5 ">
        <div class="w-full md:w-6/12 ">
            <h3 class="text-[#1E1E1E] font-medium text-lg tracking-[-0.04em] py-3">Deliveries</h3>
        </div>
        <div class="w-full md:w-6/12">
            <div class="flex justify-end items-center pb-2.5">
                <div class="relative  w-full md:w-auto mr-2 lg:mr-4">
                    <input type="text" name="search" placeholder="Search Category Name" class="w-full rounded-[7px] border border-[rgba(0,0,0,0.1)] text-[#595959] text-sm tracking-[-0.03em] pl-10" value="">
                    <img class="absolute left-3 top-1/2 -translate-y-1/2 cursor-pointer" src="{{asset('assets/images/search.png')}}" alt="search icon">
                </div>
                <button class="filter flex text-[#1E1E1E] text-sm tracking-[-0.04em] rounded-md border border-[rgba(0,0,0,0.1)] py-2  pl-2.5 lg:pl-3 pr-3 lg:pr-3.5 bg-white hover:bg-[#FF3B30] hover:text-white mr-2 lg:mr-4">
                    <svg class="inline mr-3 lg:mr-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.0747 7.8446H5.56136M2.20339 7.8446H0.829712M2.20339 7.8446C2.20339 7.39941 2.38024 6.97245 2.69504 6.65765C3.00984 6.34286 3.4368 6.166 3.88199 6.166C4.32718 6.166 4.75414 6.34286 5.06894 6.65765C5.38374 6.97245 5.56059 7.39941 5.56059 7.8446C5.56059 8.2898 5.38374 8.71675 5.06894 9.03155C4.75414 9.34635 4.32718 9.5232 3.88199 9.5232C3.4368 9.5232 3.00984 9.34635 2.69504 9.03155C2.38024 8.71675 2.20339 8.2898 2.20339 7.8446ZM15.0747 12.932H10.6488M10.6488 12.932C10.6488 13.3773 10.4715 13.8047 10.1566 14.1196C9.84173 14.4345 9.41468 14.6114 8.96938 14.6114C8.52419 14.6114 8.09723 14.4337 7.78243 14.1189C7.46763 13.8041 7.29078 13.3772 7.29078 12.932M10.6488 12.932C10.6488 12.4867 10.4715 12.06 10.1566 11.7452C9.84173 11.4303 9.41468 11.2534 8.96938 11.2534C8.52419 11.2534 8.09723 11.4302 7.78243 11.745C7.46763 12.0598 7.29078 12.4868 7.29078 12.932M7.29078 12.932H0.829712M15.0747 2.75721H12.6839M9.32589 2.75721H0.829712M9.32589 2.75721C9.32589 2.31202 9.50274 1.88506 9.81754 1.57026C10.1323 1.25547 10.5593 1.07861 11.0045 1.07861C11.2249 1.07861 11.4432 1.12203 11.6469 1.20639C11.8505 1.29075 12.0356 1.41439 12.1914 1.57026C12.3473 1.72614 12.471 1.91118 12.5553 2.11484C12.6397 2.3185 12.6831 2.53678 12.6831 2.75721C12.6831 2.97765 12.6397 3.19593 12.5553 3.39959C12.471 3.60324 12.3473 3.78829 12.1914 3.94416C12.0356 4.10003 11.8505 4.22368 11.6469 4.30804C11.4432 4.39239 11.2249 4.43581 11.0045 4.43581C10.5593 4.43581 10.1323 4.25896 9.81754 3.94416C9.50274 3.62936 9.32589 3.20241 9.32589 2.75721Z" stroke="currentColor" stroke-width="1.155" stroke-miterlimit="10" stroke-linecap="round" />
                    </svg>
                    Filter
                </button>
                <button class="filter flex text-[#1E1E1E] text-sm tracking-[-0.04em] rounded-md border border-[rgba(0,0,0,0.1)] py-2  pl-2.5 lg:pl-3 pr-3 lg:pr-3.5 bg-white hover:bg-[#FF3B30] hover:text-white mr-2 lg:mr-4">
                    <svg class="inline middle mt-.5 mr-2.5 lg:mr-3" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.1549 3.83541e-05C8.5769 -0.00296165 8.9989 0.170038 9.3209 0.516038L11.2709 2.56604C11.4839 2.79404 11.4839 3.16604 11.2709 3.39404C11.2222 3.44789 11.1627 3.49093 11.0963 3.52038C11.0299 3.54984 10.958 3.56505 10.8854 3.56505C10.8128 3.56505 10.7409 3.54984 10.6745 3.52038C10.6081 3.49093 10.5487 3.44789 10.4999 3.39404L8.6499 1.45104V9.44404C8.6499 9.75104 8.4259 10 8.1499 10C7.8739 10 7.6499 9.75104 7.6499 9.44404V1.48404L5.8299 3.39404C5.78116 3.44773 5.72173 3.49062 5.65543 3.51998C5.58912 3.54934 5.51741 3.5645 5.4449 3.5645C5.37239 3.5645 5.30068 3.54934 5.23438 3.51998C5.16807 3.49062 5.10864 3.44773 5.0599 3.39404C4.95696 3.28053 4.89993 3.13278 4.89993 2.97954C4.89993 2.8263 4.95696 2.67855 5.0599 2.56504L7.0099 0.515038C7.15486 0.356117 7.33074 0.228468 7.52676 0.139913C7.72279 0.0513571 7.93483 0.00376018 8.1499 3.83541e-05H8.1549ZM3.8299 6.00004C3.3569 6.00004 2.9499 6.29404 2.8579 6.70304L1.6689 11.953C1.65761 12.0097 1.65125 12.0673 1.6499 12.125C1.6499 12.608 2.0939 13 2.6399 13H13.6599C13.7252 13 13.7899 12.9944 13.8539 12.983C14.3909 12.888 14.7389 12.427 14.6319 11.953L13.4419 6.70304C13.3499 6.29404 12.9429 6.00004 12.4719 6.00004H3.8299ZM5.6499 5.00004V6.00004H10.6499V5.00004H12.4749C13.4209 5.00004 14.2349 5.60604 14.4209 6.44704L15.6109 11.847C15.8259 12.822 15.1289 13.77 14.0549 13.965C13.9264 13.9894 13.7957 14.0012 13.6649 14H2.6349C1.5379 14 0.649902 13.194 0.649902 12.2C0.649902 12.0807 0.662902 11.963 0.688902 11.847L1.8789 6.44704C2.0639 5.60604 2.8789 5.00004 3.8239 5.00004H5.6499Z" fill="currentColor" />
                    </svg>
                    Export
                </button>
                <a href="/user/driver/add" class="inline-block filter flex text-white text-sm tracking-[-0.04em] rounded-md border border-[rgba(0,0,0,0.1)] py-2 pl-3 lg:pl-3.5 pr-3 lg:pr-5  bg-[#FF3B30] hover:bg-[#cd251c] hover:text-white">
                    +&nbsp;New Deliveries
                </a>
            </div>

        </div>
    </div>
    <div class="p-4 lg:p-5 bg-white rounded-[20px] ">
        <div class="overflow-x-auto">
            <table class="min-w-full">
                <thead>
                    <tr class="bg-[rgba(255,59,48,0.1)]">
                        <td class="px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4 text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Id</td>
                        <td class=" px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4  text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Driver name</td>
                        <td class="px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4   text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Issue marked date</td>
                        <td class="px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4   text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Resolved issue date & time</td>
                        <td class="px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4   text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Resolver</td> 
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">ISS-001</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Mukesh</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01 | 4:30</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Suresh</td> 

                    </tr> 
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">ISS-001</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Mukesh</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01 | 4:30</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Suresh</td> 

                    </tr>
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">ISS-001</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Mukesh</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01 | 4:30</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Suresh</td> 

                    </tr>
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">ISS-001</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Mukesh</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01 | 4:30</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Suresh</td> 

                    </tr>
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">ISS-001</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Mukesh</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01 | 4:30</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Suresh</td> 

                    </tr>
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">ISS-001</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Mukesh</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01 | 4:30</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Suresh</td> 

                    </tr> 
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">ISS-001</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Mukesh</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01 | 4:30</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Suresh</td> 

                    </tr>
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">ISS-001</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Mukesh</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01 | 4:30</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Suresh</td> 

                    </tr>
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">ISS-001</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Mukesh</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01 | 4:30</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Suresh</td> 

                    </tr>
                    <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">ISS-001</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Mukesh</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">2025-5-01 | 4:30</td>
                        <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Suresh</td> 

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>