<x-app-layout>
    <div class="space-y-4 lg:space-y-5">
        <div class="flex flex-wrap -mx-4 space-y-3 sm:space-y-0">
            <div class="w-full sm:w-6/12 lg:w-3/12 px-4 mb-0 sm:mb-3 lg:mb-0 ">
                <div class="border border-[rgba(255,59,48,0.5)] rounded-[20px] bg-white px-3 py-4 lg:py-4 relative">
                    <h3 class="uppercase text-sm font-normal text-[#7A7A7A] tracking-[-0.04em] mb-1">Total Deliveries</h3>
                    <div class="text-[#1E1E1E] text-4xl lg:text-[55px] tracking-[-0.04em] font-medium lg:leading-[62px]">25</div>
                    <p class="uppercase text-sm font-normal text-[#7A7A7A] tracking-[-0.04em]  mt-2">Last 30 days</p>
                    <span class="bg-[rgba(255,193,7,0.1)] h-10 lg:h-[52px] w-10 lg:w-[52px] rounded-full absolute right-10 top-5 flex items-center justify-center">
                        <img src="{{asset('assets/images/userwitharrow.png')}}" alt="icon" />
                    </span>
                </div>
            </div>
            <div class="w-full sm:w-6/12 lg:w-3/12 px-4 mb-0 sm:mb-3 lg:mb-0 ">
                <div class="border border-[rgba(255,59,48,0.5)] rounded-[20px] bg-white px-3 py-4 lg:py-4 relative">
                    <h3 class="uppercase text-sm font-normal text-[#7A7A7A] tracking-[-0.04em] mb-1">Delayed Trips</h3>
                    <div class="text-[#1E1E1E] text-4xl lg:text-[55px] tracking-[-0.04em] font-medium lg:leading-[62px]">15</div>
                    <p class="uppercase text-sm font-normal text-[#7A7A7A] tracking-[-0.04em]  mt-2">Last 30 days</p>
                    <span class="bg-[rgba(76,175,80,0.1)] h-10 lg:h-[52px] w-10 lg:w-[52px] rounded-full absolute right-10 top-5 flex items-center justify-center">
                        <img src="{{asset('assets/images/truck.png')}}" alt="icon" />
                    </span>
                </div>
            </div>
            <div class="w-full sm:w-6/12 lg:w-3/12 px-4 ">
                <div class="border border-[rgba(255,59,48,0.5)] rounded-[20px] bg-white px-3 py-4 lg:py-4 relative">
                    <h3 class="uppercase text-sm font-normal text-[#7A7A7A] tracking-[-0.04em] mb-1">Support Response Time</h3>
                    <div class="text-[#1E1E1E] text-4xl lg:text-[55px] tracking-[-0.04em] font-medium lg:leading-[62px]">20</div>
                    <p class="uppercase text-sm font-normal text-[#7A7A7A] tracking-[-0.04em]  mt-2">Last 30 days</p>
                    <span class="bg-[rgba(255,152,0,0.1)] h-10 lg:h-[52px] w-10 lg:w-[52px] rounded-full absolute right-10 top-5 flex items-center justify-center">
                        <img src="{{asset('assets/images/response.png')}}" alt="icon" />
                    </span>
                </div>
            </div>
            <div class="w-full sm:w-6/12 lg:w-3/12 px-4 ">
                <div class="border border-[rgba(255,59,48,0.5)] rounded-[20px] bg-white px-3 py-4 lg:py-4 relative">
                    <h3 class="uppercase text-sm font-normal text-[#7A7A7A] tracking-[-0.04em] mb-1">SOS Reports</h3>
                    <div class="text-[#1E1E1E] text-4xl lg:text-[55px] tracking-[-0.04em] font-medium lg:leading-[62px]">4</div>
                    <p class="uppercase text-sm font-normal text-[#7A7A7A] tracking-[-0.04em]  mt-2">Last 30 days</p>
                    <span class="bg-[rgba(255,59,48,0.1)] h-10 lg:h-[52px] w-10 lg:w-[52px] rounded-full absolute right-10 top-5 flex items-center justify-center">
                        <img src="{{asset('assets/images/sos.png')}}" alt="icon" />
                    </span>
                </div>
            </div>
        </div>

        <!-- User information -->
        <div class="p-4 lg:p-5 bg-white rounded-[20px] ">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-7/12  lg:w-8/12 px-4">
                    <h3 class="text-[#1E1E1E] font-medium text-base tracking-[-0.05em] py-3">User information</h3>
                    <div class="overflow-x-auto">
                        <table class="min-w-full">
                            <thead>
                                <tr class="bg-[rgba(255,59,48,0.1)]">
                                    <td class="px-3 lg:px-4 py-3 lg:py-4 whitespace-nowrap text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Name</td>
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 whitespace-nowrap  text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">phone NUMBER</td>
                                    <td class="px-3 lg:px-4 py-3 lg:py-4 whitespace-nowrap   text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">role</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rakesh</td>
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">9929557726</td>
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">User</td>
                                </tr>
                                <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rakesh</td>
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">9929557727</td>
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Driver</td>
                                </tr>
                                <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rakesh</td>
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">9929557728</td>
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Support team</td>
                                </tr>
                                <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rakesh</td>
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">9929557729</td>
                                    <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Admin</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="w-full md:w-5/12 lg:w-4/12 px-4">
                    <div class="flex flex-wrap justify-between items-center pb-2.5">
                        <h3 class="text-[#1E1E1E] font-medium text-base tracking-[-0.05em]">Top 5 Delay Reasons</h3>
                        <button class="filter text-[#1E1E1E] text-sm tracking-[-0.04em] rounded-md border border-[rgba(0,0,0,0.1)] py-2  pl-2.5 lg:pl-3 pr-3 lg:pr-3.5 hover:bg-[#FF3B30] hover:text-white">
                            <svg class="inline mr-3 lg:mr-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0747 7.8446H5.56136M2.20339 7.8446H0.829712M2.20339 7.8446C2.20339 7.39941 2.38024 6.97245 2.69504 6.65765C3.00984 6.34286 3.4368 6.166 3.88199 6.166C4.32718 6.166 4.75414 6.34286 5.06894 6.65765C5.38374 6.97245 5.56059 7.39941 5.56059 7.8446C5.56059 8.2898 5.38374 8.71675 5.06894 9.03155C4.75414 9.34635 4.32718 9.5232 3.88199 9.5232C3.4368 9.5232 3.00984 9.34635 2.69504 9.03155C2.38024 8.71675 2.20339 8.2898 2.20339 7.8446ZM15.0747 12.932H10.6488M10.6488 12.932C10.6488 13.3773 10.4715 13.8047 10.1566 14.1196C9.84173 14.4345 9.41468 14.6114 8.96938 14.6114C8.52419 14.6114 8.09723 14.4337 7.78243 14.1189C7.46763 13.8041 7.29078 13.3772 7.29078 12.932M10.6488 12.932C10.6488 12.4867 10.4715 12.06 10.1566 11.7452C9.84173 11.4303 9.41468 11.2534 8.96938 11.2534C8.52419 11.2534 8.09723 11.4302 7.78243 11.745C7.46763 12.0598 7.29078 12.4868 7.29078 12.932M7.29078 12.932H0.829712M15.0747 2.75721H12.6839M9.32589 2.75721H0.829712M9.32589 2.75721C9.32589 2.31202 9.50274 1.88506 9.81754 1.57026C10.1323 1.25547 10.5593 1.07861 11.0045 1.07861C11.2249 1.07861 11.4432 1.12203 11.6469 1.20639C11.8505 1.29075 12.0356 1.41439 12.1914 1.57026C12.3473 1.72614 12.471 1.91118 12.5553 2.11484C12.6397 2.3185 12.6831 2.53678 12.6831 2.75721C12.6831 2.97765 12.6397 3.19593 12.5553 3.39959C12.471 3.60324 12.3473 3.78829 12.1914 3.94416C12.0356 4.10003 11.8505 4.22368 11.6469 4.30804C11.4432 4.39239 11.2249 4.43581 11.0045 4.43581C10.5593 4.43581 10.1323 4.25896 9.81754 3.94416C9.50274 3.62936 9.32589 3.20241 9.32589 2.75721Z" stroke="currentColor" stroke-width="1.155" stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                            Filter
                        </button>
                    </div>
                    <div class="bg-[#FFEBEA] p-5 rounded-[10px]">
                         <img  src="{{asset('assets/images/graph.png')}}" alt="search icon">
                    </div>
                </div>
            </div>
        </div>
        <div class="p-4 lg:p-5 bg-white rounded-[20px] ">
            <div class="flex flex-wrap items-center mb-2.5">
                <div class="w-full md:w-6/12">
                    <h3 class="text-[#1E1E1E] font-medium text-base tracking-[-0.05em] py-3">Recent Reports</h3>
                </div>
                <div class="w-full md:w-6/12">
                    <div class="flex justify-end items-center pb-2.5">
                        <div class="relative  w-full md:w-auto mr-2 lg:mr-4">
                            <input type="text" name="search" placeholder="Search Category Name" class="w-full rounded-[10px] border border-[rgba(0,0,0,0.1)] text-[#595959] text-sm tracking-[-0.03em] pl-10" value="">
                            <img class="absolute left-3 top-1/2 -translate-y-1/2 cursor-pointer" src="{{asset('assets/images/search.png')}}" alt="search icon">
                        </div>
                        <button class="filter flex text-[#1E1E1E] text-sm tracking-[-0.04em] rounded-md border border-[rgba(0,0,0,0.1)] py-2  pl-2.5 lg:pl-3 pr-3 lg:pr-3.5 hover:bg-[#FF3B30] hover:text-white">
                            <svg class="inline mr-3 lg:mr-4" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.0747 7.8446H5.56136M2.20339 7.8446H0.829712M2.20339 7.8446C2.20339 7.39941 2.38024 6.97245 2.69504 6.65765C3.00984 6.34286 3.4368 6.166 3.88199 6.166C4.32718 6.166 4.75414 6.34286 5.06894 6.65765C5.38374 6.97245 5.56059 7.39941 5.56059 7.8446C5.56059 8.2898 5.38374 8.71675 5.06894 9.03155C4.75414 9.34635 4.32718 9.5232 3.88199 9.5232C3.4368 9.5232 3.00984 9.34635 2.69504 9.03155C2.38024 8.71675 2.20339 8.2898 2.20339 7.8446ZM15.0747 12.932H10.6488M10.6488 12.932C10.6488 13.3773 10.4715 13.8047 10.1566 14.1196C9.84173 14.4345 9.41468 14.6114 8.96938 14.6114C8.52419 14.6114 8.09723 14.4337 7.78243 14.1189C7.46763 13.8041 7.29078 13.3772 7.29078 12.932M10.6488 12.932C10.6488 12.4867 10.4715 12.06 10.1566 11.7452C9.84173 11.4303 9.41468 11.2534 8.96938 11.2534C8.52419 11.2534 8.09723 11.4302 7.78243 11.745C7.46763 12.0598 7.29078 12.4868 7.29078 12.932M7.29078 12.932H0.829712M15.0747 2.75721H12.6839M9.32589 2.75721H0.829712M9.32589 2.75721C9.32589 2.31202 9.50274 1.88506 9.81754 1.57026C10.1323 1.25547 10.5593 1.07861 11.0045 1.07861C11.2249 1.07861 11.4432 1.12203 11.6469 1.20639C11.8505 1.29075 12.0356 1.41439 12.1914 1.57026C12.3473 1.72614 12.471 1.91118 12.5553 2.11484C12.6397 2.3185 12.6831 2.53678 12.6831 2.75721C12.6831 2.97765 12.6397 3.19593 12.5553 3.39959C12.471 3.60324 12.3473 3.78829 12.1914 3.94416C12.0356 4.10003 11.8505 4.22368 11.6469 4.30804C11.4432 4.39239 11.2249 4.43581 11.0045 4.43581C10.5593 4.43581 10.1323 4.25896 9.81754 3.94416C9.50274 3.62936 9.32589 3.20241 9.32589 2.75721Z" stroke="currentColor" stroke-width="1.155" stroke-miterlimit="10" stroke-linecap="round" />
                            </svg>
                            Filter
                        </button>
                    </div>

                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full">
                    <thead>
                        <tr class="bg-[rgba(255,59,48,0.1)]">
                            <td class="px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4 text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Driver Name</td>
                            <td class=" px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4  text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Vehicle no.</td>
                            <td class="px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4   text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Issue Type</td>
                            <td class="px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4   text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Date</td>
                            <td class="px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4   text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]">Region</td>
                            <td class="px-3 lg:px-4 py-3 whitespace-nowrap lg:py-4   text-sm font-medium text-[#1E1E1E]  text-left uppercase tracking-[-0.04em]  w-[110px]">Status</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rakesh</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">RJ2065</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Tyre Puncture</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] whitespace-nowrap font-medium text-[#1E1E1E] tracking-[-0.04em]">12-3-2025</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rajasthan, Jaipur</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">
                                <label class="bg-[rgba(76,175,80,0.1)] text-[#4CAF50] rounded-[10px] min-w-[96px] text-[15px] fonte-medium tracking-[-0.04em] py-2 px-2 text-center inline-block">Resolved</label>
                            </td>
                             
                        </tr>
                        <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rakesh</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">RJ2065</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Tyre Puncture</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">12-3-2025</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rajasthan, Jaipur</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">
                                <label class="bg-[rgba(255,59,48,0.1)] text-[#FF3B30] rounded-[10px] min-w-[96px] text-[15px] fonte-medium tracking-[-0.04em] py-2 px-2 text-center inline-block">Escalated</label>
                            </td>
                             
                        </tr>
                        <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rakesh</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">RJ2065</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Tyre Puncture</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">12-3-2025</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rajasthan, Jaipur</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">
                                <label class="bg-[rgba(255,193,7,0.1)] text-[#FFC107] rounded-[10px] min-w-[96px] text-[15px] fonte-medium tracking-[-0.04em] py-2 px-2 text-center inline-block">Pending</label>
                            </td>
                             
                        </tr>
                       <tr class="bg-white border-t transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rakesh</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">RJ2065</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Tyre Puncture</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">12-3-2025</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">Rajasthan, Jaipur</td>
                            <td class=" px-3 lg:px-4 py-3 lg:py-4 text-[15px] font-medium text-[#1E1E1E] tracking-[-0.04em]">
                               <label class="bg-[rgba(76,175,80,0.1)] text-[#4CAF50] rounded-[10px] min-w-[96px] text-[15px] fonte-medium tracking-[-0.04em] py-2 px-2 text-center inline-block">Resolved</label>
                            </td>
                             
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</x-app-layout>