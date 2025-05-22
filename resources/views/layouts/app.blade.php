<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
     <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">

    <div class="flex flex-wrap h-[100vh]">
        <div id="sidebar" class="hidden xl:block bg-white shadow-lg xl:shadow-none w-[270px]  transform transition-transform duration-500 ease-in-out -translate-x-full xl:translate-x-0 fixed xl:relative top-0 left-0 z-[99] md:z-[2] ">
            <div class="space-y-4 lg:space-y-5 h-[100vh] lg:h-[calc(100vh-54px)] max-h-[100vh] lg:max-h-[calc(100vh-54px)] px-[18px] md:px-[25px] py-6 lg:py-[20px] overflow-y-auto ">
                @include('layouts.sidebar')
            </div>
        </div>
        <div class="w-full xl:w-[calc(100%-270px)]">
            <div class="bg-[#fdfeff] admin-header sticky top-0 z-[9] px-[15px] md:px-[30px] py-5 lg:py-8 ">
                @include('layouts.header')
            </div>
            <div class="main-right-content xl:h-[calc(100vh-166px)] xl:max-h-[calc(100vh-166px)] overflow-y-auto  py-[20px] lg:py-[30px] px-[15px]  lg:px-[30px] overflow-hidden bg-[rgba(255,59,48,0.1)] rounded-tl-[30px] lg:rounded-tl-[50px]">
                <!-- @yield('content') -->
                {{ $slot }}
            </div>
        </div>
        <div class="fixed right-0 w-full xl:w-[calc(100%-270px)] bottom-0 z-[9] w-full mt-[auto] bg-white text-center h-[54px] flex items-center justify-center ">
            @include('layouts.footer')
        </div>
    </div>
     <script>
        jQuery(document).on('click', '#toggle_btn', function() {
            if (jQuery('#sidebar').hasClass('hidden')) {
                jQuery('#sidebar').removeClass('hidden');
                jQuery('#sidebar').removeClass('-translate-x-full');
            } else {
                jQuery('#sidebar').addClass('hidden');
                jQuery('#sidebar').addClass('-translate-x-full');
            }
        });

        jQuery(document).click(function(e) {
            e.stopPropagation();
            var container = jQuery("#sidebar");
            var container2 = jQuery("#toggle_btn");

            //check if the clicked area is dropDown or not
            if (container.has(e.target).length === 0 && container2.has(e.target).length === 0) {
                jQuery('#sidebar').addClass('hidden');
                jQuery('#sidebar').addClass('-translate-x-full');
            }
        })

    
  
    
    


        jQuery(document).on('click', '.dropdown .button', function(event) {
            event.stopPropagation(); // Prevent event from bubbling up
            jQuery('.dropdown_menu').addClass('hidden');
            let dropdownMenu = jQuery(this).parent().find('.dropdown_menu');
            if (dropdownMenu.hasClass('hidden')) {
                dropdownMenu.removeClass('hidden');
            }else{
                dropdownMenu.addClass('hidden');
            }
        }); 

        jQuery(document).on('click', 'table .dropdown .button', function() {
           
            const $menu = jQuery(this).parent().find('.dropdown_menus');
            let dataId = jQuery(this).attr('data-id');
            if (!dataId) {
                let random = Math.floor(Math.random() * 10);
                jQuery(this).attr('data-id', random);
                jQuery($menu).attr('data-id', random);
            }
            if ($menu.hasClass('hidden')) {

                const offset = jQuery(this).offset();
                $menu.appendTo('body').css({
                    position: 'absolute',
                    top: offset.top + jQuery(this).outerHeight(),
                    left: offset.left - 85,
                    zIndex: 9999,
                }).removeClass('hidden');
            } else {
                let ele = jQuery(`.dropdown_menus[data-id="${dataId}"]`);
                console.log('55555: ', ele);
                jQuery(ele).addClass('hidden');
                jQuery(this).parent().append(ele);
            }
        });

        jQuery(document).click(function(e) {
            e.stopPropagation();
            var container = jQuery("table .dropdown");

            //check if the clicked area is dropDown or not
            if (container.has(e.target).length === 0) {
                jQuery('.dropdown_menus').each(function() {
                    const dataId = jQuery(this).attr('data-id');
                    let ele = jQuery(`table .dropdown .button[data-id="${dataId}"]`);                    
                    jQuery(this).addClass('hidden');
                    jQuery(ele).parent().append(jQuery(this));
                });
            }
        });

        jQuery(document).click(function(e) {
            e.stopPropagation();
            var container = jQuery(".dropdown");

            //check if the clicked area is dropDown or not
            if (container.has(e.target).length === 0) {               
                jQuery('.dropdown_menu').addClass('hidden');
            }
        });

        jQuery(document).on('click', '.accordian .item>a', function() {
            if (!jQuery(this).hasClass('nav-link')) {
                jQuery(this).parent().children('.accordian_body').slideDown();
                jQuery(this).parent().siblings().children('.accordian_body').slideUp();
                let tabId = jQuery(this).attr('data-id');                
                jQuery(`#${tabId}`).removeClass('hidden');
                jQuery(`#${tabId}`).siblings().addClass('hidden');
            } else {
                jQuery(this).parent().children('.accordian_body').slideToggle();
                jQuery(this).parent('.has-sub-submenu').toggleClass('open');
                jQuery(this).parent().siblings().children('.accordian_body').slideUp();
                jQuery(this).parent('.has-sub-submenu').siblings().removeClass('open');
            }
        })


  

        // Lead Tabbing
 

    </script>

    @stack('footer')
</body>

</html>