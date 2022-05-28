<!DOCTYPE html>
<html lang="en" class="a0">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Startup Tailwind CSS Template</title>
    <meta name="title" content="CoderDairy" />
    <meta name="description" content="" />

    <meta property="og:type" content="website" />
    <meta property="og:url" content="index.html" />
    <meta property="og:title" content="coderdairy" />
    <meta property="og:description" content="coderdairy" />
    <meta property="og:image" content="" />

    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://saas-tailwind.preview.uideck.com/" />
    <meta property="twitter:title" content="Startup Tailwind | SaaS Web Template for Tailwind CSS" />
    <meta property="twitter:description" content="coderdairy" />
    <meta property="twitter:image" content="" />

    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom.css') }}">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('admin/css/animate.css') }}" />
    <link rel="stylesheet" href="css/glightbox.min.css" />
    <link rel="stylesheet" href="{{ asset('admin/css/tailwind.css') }}" />
    <script src="{{ asset('admin/js/wow.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        // ===== wow js
        new WOW().init();
    </script>
</head>

<body class="dark:a1">

    <header class=" header a2 a3 a4 a5 a6 a7 a8 a9">
        <div class="aa">
            <div class="
            a8 ab[-16px] a9 ac ad
          ">
                <div class="ae af ag">
                    <a href="index.html" class="a7 ah ai header-logo">
                        <img src="images/logo/logo-2.svg" alt="logo" class="a7 dark:aj" />
                        <img src="images/logo/logo.svg" alt="logo" class="a7 aj dark:ah" />
                    </a>
                </div>
                <div class="a8 ae ac a9 a7">
                    <div>
                        <button id="navbarToggler" aria-label="Mobile Menu"
                            class="
                  ah
                  a3
                  ak
                  al/2
                  am[-50%]
                  lg:aj
                  focus:an
                  ao ap aq[6px] ar
                ">
                            <span
                                class="
                    ad
                    as[30px]
                    at[2px]
                    au[6px]
                    ah
                    av
                    dark:aw
                  "></span>
                            <span
                                class="
                    ad
                    as[30px]
                    at[2px]
                    au[6px]
                    ah
                    av
                    dark:aw
                  "></span>
                            <span
                                class="
                    ad
                    as[30px]
                    at[2px]
                    au[6px]
                    ah
                    av
                    dark:aw
                  "></span>
                        </button>
                        <nav id="navbarCollapse"
                            class="
                  a3 ax
                  lg:ay lg:ae
                  xl:az
                  aw
                  dark:av
                  lg:dark:a2 lg:a2
                  aA ar aB[250px] a7
                  lg:ag lg:a7
                  ak aC aj
                  lg:ah lg:aD lg:aE
                ">
                            <ul class="aF lg:a8">
                                <li class="ad aG">
                                    <a href="{{ route('frontend.index') }}"
                                        class="menu-scroll aH text-dark dark:aI group-hover:aJ aK lg:aL lg:aM lg:aN a8 aO lg:aP ">
                                        Home
                                    </a>
                                </li>
                                <li class="ad aG">
                                    <a href="#about"
                                        class=" menu-scroll aH text-dark dark:aI group-hover:aJ aK lg:aL lg:aM lg:aN a8 aO lg:aP lg:aQ xl:aR">
                                        About
                                    </a>
                                </li>
                                <li class="ad aG">
                                    <a href="{{ route('problems') }}"
                                        class=" menu-scroll aH text-dark dark:aI group-hover:aJ aK lg:aL lg:aM lg:aN a8 aO lg:aP lg:aQ xl:aR">
                                        Problems
                                    </a>
                                </li>

                                <div class="m-auto mx-16">
                                    <div class="flex justify-center">
                                        <div class="mt-2 xl:w-96">
                                            <form action="{{ route('query') }}" method="get">
                                                <div class="input-group relative flex items-stretch  mb-4">
                                                    <input type="search" name="search" placeholder="Search"
                                                        aria-label="Search" aria-describedby="button-addon2"
                                                        class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none">
                                                    <button
                                                        class="btn mx-3 px-6 py-2 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-teal-600 hover:shadow-lg hover:text-white focus:bg-teal-600  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-teal-600 active:shadow-lg transition duration-300 ease-in-out flex items-center"
                                                        type="submit" id="button-addon2">
                                                        <svg aria-hidden="true" focusable="false" data-prefix="fas"
                                                            data-icon="search" class="w-4" role="img"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                            <path fill="currentColor"
                                                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </nav>






                    </div>
                    <div class="a8 a1d a9 a1e lg:a1f">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class=" aj md:ah aH a1g a1h dark:aI hover:aJ a1i a1j">
                                    Dashboard </a>
                            @else
                                <a href="{{ route('login') }}" class=" aj md:ah aH a1g a1h dark:aI hover:aJ a1i a1j">
                                    Sign In</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"
                                        class="aj md:ah aH a1g aI a1k a1i a1l md:a1m lg:az xl:a1m hover:a1n hover:a1o a13 a1p a1q a1a">
                                        Sign Up</a>
                                @endif
                            @endauth
                        @endif


                        <div>
                            <label for="darkToggler"
                                class=" a1r a1s a1t md:a1u md:a1v a1w a8 a9 a1x a1y dark:a1z a1A dark:aI">
                                <input type="checkbox" name="darkToggler" id="darkToggler" class="a1B"
                                    aria-label="darkToggler" />
                                <svg viewBox="0 0 23 23" class=" a1C dark:aj a1D a1E md:a1F md:a1G" fill="none">
                                    <path
                                        d="M9.55078 1.5C5.80078 1.5 1.30078 5.25 1.30078 11.25C1.30078 17.25 5.80078 21.75 11.8008 21.75C17.8008 21.75 21.5508 17.25 21.5508 13.5C13.3008 18.75 4.30078 9.75 9.55078 1.5Z"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <svg viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                                    class=" aj dark:ah a1D a1E md:a1F md:a1G">
                                    <mask id="path-1-inside-1_977:1934" fill="white">
                                        <path
                                            d="M12.0508 16.5C10.8573 16.5 9.71271 16.0259 8.8688 15.182C8.02489 14.3381 7.55078 13.1935 7.55078 12C7.55078 10.8065 8.02489 9.66193 8.8688 8.81802C9.71271 7.97411 10.8573 7.5 12.0508 7.5C13.2443 7.5 14.3888 7.97411 15.2328 8.81802C16.0767 9.66193 16.5508 10.8065 16.5508 12C16.5508 13.1935 16.0767 14.3381 15.2328 15.182C14.3888 16.0259 13.2443 16.5 12.0508 16.5ZM12.0508 18C13.6421 18 15.1682 17.3679 16.2934 16.2426C17.4186 15.1174 18.0508 13.5913 18.0508 12C18.0508 10.4087 17.4186 8.88258 16.2934 7.75736C15.1682 6.63214 13.6421 6 12.0508 6C10.4595 6 8.93336 6.63214 7.80814 7.75736C6.68292 8.88258 6.05078 10.4087 6.05078 12C6.05078 13.5913 6.68292 15.1174 7.80814 16.2426C8.93336 17.3679 10.4595 18 12.0508 18ZM12.0508 0C12.2497 0 12.4405 0.0790176 12.5811 0.21967C12.7218 0.360322 12.8008 0.551088 12.8008 0.75V3.75C12.8008 3.94891 12.7218 4.13968 12.5811 4.28033C12.4405 4.42098 12.2497 4.5 12.0508 4.5C11.8519 4.5 11.6611 4.42098 11.5205 4.28033C11.3798 4.13968 11.3008 3.94891 11.3008 3.75V0.75C11.3008 0.551088 11.3798 0.360322 11.5205 0.21967C11.6611 0.0790176 11.8519 0 12.0508 0V0ZM12.0508 19.5C12.2497 19.5 12.4405 19.579 12.5811 19.7197C12.7218 19.8603 12.8008 20.0511 12.8008 20.25V23.25C12.8008 23.4489 12.7218 23.6397 12.5811 23.7803C12.4405 23.921 12.2497 24 12.0508 24C11.8519 24 11.6611 23.921 11.5205 23.7803C11.3798 23.6397 11.3008 23.4489 11.3008 23.25V20.25C11.3008 20.0511 11.3798 19.8603 11.5205 19.7197C11.6611 19.579 11.8519 19.5 12.0508 19.5ZM24.0508 12C24.0508 12.1989 23.9718 12.3897 23.8311 12.5303C23.6905 12.671 23.4997 12.75 23.3008 12.75H20.3008C20.1019 12.75 19.9111 12.671 19.7705 12.5303C19.6298 12.3897 19.5508 12.1989 19.5508 12C19.5508 11.8011 19.6298 11.6103 19.7705 11.4697C19.9111 11.329 20.1019 11.25 20.3008 11.25H23.3008C23.4997 11.25 23.6905 11.329 23.8311 11.4697C23.9718 11.6103 24.0508 11.8011 24.0508 12ZM4.55078 12C4.55078 12.1989 4.47176 12.3897 4.33111 12.5303C4.19046 12.671 3.99969 12.75 3.80078 12.75H0.800781C0.601869 12.75 0.411103 12.671 0.270451 12.5303C0.129799 12.3897 0.0507813 12.1989 0.0507812 12C0.0507813 11.8011 0.129799 11.6103 0.270451 11.4697C0.411103 11.329 0.601869 11.25 0.800781 11.25H3.80078C3.99969 11.25 4.19046 11.329 4.33111 11.4697C4.47176 11.6103 4.55078 11.8011 4.55078 12ZM20.5363 3.5145C20.6769 3.65515 20.7559 3.84588 20.7559 4.04475C20.7559 4.24362 20.6769 4.43435 20.5363 4.575L18.4153 6.6975C18.3455 6.76713 18.2628 6.82235 18.1717 6.86C18.0806 6.89765 17.983 6.91699 17.8845 6.91692C17.6855 6.91678 17.4947 6.83758 17.354 6.69675C17.2844 6.62702 17.2292 6.54425 17.1915 6.45318C17.1539 6.36211 17.1345 6.26452 17.1346 6.16597C17.1348 5.96695 17.214 5.77613 17.3548 5.6355L19.4758 3.5145C19.6164 3.3739 19.8072 3.29491 20.006 3.29491C20.2049 3.29491 20.3956 3.3739 20.5363 3.5145ZM6.74678 17.304C6.88738 17.4446 6.96637 17.6354 6.96637 17.8342C6.96637 18.0331 6.88738 18.2239 6.74678 18.3645L4.62578 20.4855C4.48433 20.6221 4.29488 20.6977 4.09823 20.696C3.90158 20.6943 3.71347 20.6154 3.57442 20.4764C3.43536 20.3373 3.35648 20.1492 3.35478 19.9526C3.35307 19.7559 3.42866 19.5665 3.56528 19.425L5.68628 17.304C5.82693 17.1634 6.01766 17.0844 6.21653 17.0844C6.4154 17.0844 6.60614 17.1634 6.74678 17.304ZM20.5363 20.4855C20.3956 20.6261 20.2049 20.7051 20.006 20.7051C19.8072 20.7051 19.6164 20.6261 19.4758 20.4855L17.3548 18.3645C17.2182 18.223 17.1426 18.0336 17.1443 17.8369C17.146 17.6403 17.2249 17.4522 17.3639 17.3131C17.503 17.1741 17.6911 17.0952 17.8877 17.0935C18.0844 17.0918 18.2738 17.1674 18.4153 17.304L20.5363 19.425C20.6769 19.5656 20.7559 19.7564 20.7559 19.9552C20.7559 20.1541 20.6769 20.3449 20.5363 20.4855ZM6.74678 6.6975C6.60614 6.8381 6.4154 6.91709 6.21653 6.91709C6.01766 6.91709 5.82693 6.8381 5.68628 6.6975L3.56528 4.575C3.49365 4.50582 3.43651 4.42306 3.39721 4.33155C3.3579 4.24005 3.33721 4.14164 3.33634 4.04205C3.33548 3.94247 3.35445 3.84371 3.39216 3.75153C3.42988 3.65936 3.48557 3.57562 3.55598 3.5052C3.6264 3.43478 3.71014 3.37909 3.80232 3.34138C3.89449 3.30367 3.99325 3.2847 4.09283 3.28556C4.19242 3.28643 4.29083 3.30712 4.38233 3.34642C4.47384 3.38573 4.5566 3.44287 4.62578 3.5145L6.74678 5.6355C6.81663 5.70517 6.87204 5.78793 6.90985 5.87905C6.94766 5.97017 6.96712 6.06785 6.96712 6.1665C6.96712 6.26515 6.94766 6.36283 6.90985 6.45395C6.87204 6.54507 6.81663 6.62783 6.74678 6.6975Z" />
                                    </mask>
                                    <path
                                        d="M12.0508 16.5C10.8573 16.5 9.71271 16.0259 8.8688 15.182C8.02489 14.3381 7.55078 13.1935 7.55078 12C7.55078 10.8065 8.02489 9.66193 8.8688 8.81802C9.71271 7.97411 10.8573 7.5 12.0508 7.5C13.2443 7.5 14.3888 7.97411 15.2328 8.81802C16.0767 9.66193 16.5508 10.8065 16.5508 12C16.5508 13.1935 16.0767 14.3381 15.2328 15.182C14.3888 16.0259 13.2443 16.5 12.0508 16.5ZM12.0508 18C13.6421 18 15.1682 17.3679 16.2934 16.2426C17.4186 15.1174 18.0508 13.5913 18.0508 12C18.0508 10.4087 17.4186 8.88258 16.2934 7.75736C15.1682 6.63214 13.6421 6 12.0508 6C10.4595 6 8.93336 6.63214 7.80814 7.75736C6.68292 8.88258 6.05078 10.4087 6.05078 12C6.05078 13.5913 6.68292 15.1174 7.80814 16.2426C8.93336 17.3679 10.4595 18 12.0508 18ZM12.0508 0C12.2497 0 12.4405 0.0790176 12.5811 0.21967C12.7218 0.360322 12.8008 0.551088 12.8008 0.75V3.75C12.8008 3.94891 12.7218 4.13968 12.5811 4.28033C12.4405 4.42098 12.2497 4.5 12.0508 4.5C11.8519 4.5 11.6611 4.42098 11.5205 4.28033C11.3798 4.13968 11.3008 3.94891 11.3008 3.75V0.75C11.3008 0.551088 11.3798 0.360322 11.5205 0.21967C11.6611 0.0790176 11.8519 0 12.0508 0V0ZM12.0508 19.5C12.2497 19.5 12.4405 19.579 12.5811 19.7197C12.7218 19.8603 12.8008 20.0511 12.8008 20.25V23.25C12.8008 23.4489 12.7218 23.6397 12.5811 23.7803C12.4405 23.921 12.2497 24 12.0508 24C11.8519 24 11.6611 23.921 11.5205 23.7803C11.3798 23.6397 11.3008 23.4489 11.3008 23.25V20.25C11.3008 20.0511 11.3798 19.8603 11.5205 19.7197C11.6611 19.579 11.8519 19.5 12.0508 19.5ZM24.0508 12C24.0508 12.1989 23.9718 12.3897 23.8311 12.5303C23.6905 12.671 23.4997 12.75 23.3008 12.75H20.3008C20.1019 12.75 19.9111 12.671 19.7705 12.5303C19.6298 12.3897 19.5508 12.1989 19.5508 12C19.5508 11.8011 19.6298 11.6103 19.7705 11.4697C19.9111 11.329 20.1019 11.25 20.3008 11.25H23.3008C23.4997 11.25 23.6905 11.329 23.8311 11.4697C23.9718 11.6103 24.0508 11.8011 24.0508 12ZM4.55078 12C4.55078 12.1989 4.47176 12.3897 4.33111 12.5303C4.19046 12.671 3.99969 12.75 3.80078 12.75H0.800781C0.601869 12.75 0.411103 12.671 0.270451 12.5303C0.129799 12.3897 0.0507813 12.1989 0.0507812 12C0.0507813 11.8011 0.129799 11.6103 0.270451 11.4697C0.411103 11.329 0.601869 11.25 0.800781 11.25H3.80078C3.99969 11.25 4.19046 11.329 4.33111 11.4697C4.47176 11.6103 4.55078 11.8011 4.55078 12ZM20.5363 3.5145C20.6769 3.65515 20.7559 3.84588 20.7559 4.04475C20.7559 4.24362 20.6769 4.43435 20.5363 4.575L18.4153 6.6975C18.3455 6.76713 18.2628 6.82235 18.1717 6.86C18.0806 6.89765 17.983 6.91699 17.8845 6.91692C17.6855 6.91678 17.4947 6.83758 17.354 6.69675C17.2844 6.62702 17.2292 6.54425 17.1915 6.45318C17.1539 6.36211 17.1345 6.26452 17.1346 6.16597C17.1348 5.96695 17.214 5.77613 17.3548 5.6355L19.4758 3.5145C19.6164 3.3739 19.8072 3.29491 20.006 3.29491C20.2049 3.29491 20.3956 3.3739 20.5363 3.5145ZM6.74678 17.304C6.88738 17.4446 6.96637 17.6354 6.96637 17.8342C6.96637 18.0331 6.88738 18.2239 6.74678 18.3645L4.62578 20.4855C4.48433 20.6221 4.29488 20.6977 4.09823 20.696C3.90158 20.6943 3.71347 20.6154 3.57442 20.4764C3.43536 20.3373 3.35648 20.1492 3.35478 19.9526C3.35307 19.7559 3.42866 19.5665 3.56528 19.425L5.68628 17.304C5.82693 17.1634 6.01766 17.0844 6.21653 17.0844C6.4154 17.0844 6.60614 17.1634 6.74678 17.304ZM20.5363 20.4855C20.3956 20.6261 20.2049 20.7051 20.006 20.7051C19.8072 20.7051 19.6164 20.6261 19.4758 20.4855L17.3548 18.3645C17.2182 18.223 17.1426 18.0336 17.1443 17.8369C17.146 17.6403 17.2249 17.4522 17.3639 17.3131C17.503 17.1741 17.6911 17.0952 17.8877 17.0935C18.0844 17.0918 18.2738 17.1674 18.4153 17.304L20.5363 19.425C20.6769 19.5656 20.7559 19.7564 20.7559 19.9552C20.7559 20.1541 20.6769 20.3449 20.5363 20.4855ZM6.74678 6.6975C6.60614 6.8381 6.4154 6.91709 6.21653 6.91709C6.01766 6.91709 5.82693 6.8381 5.68628 6.6975L3.56528 4.575C3.49365 4.50582 3.43651 4.42306 3.39721 4.33155C3.3579 4.24005 3.33721 4.14164 3.33634 4.04205C3.33548 3.94247 3.35445 3.84371 3.39216 3.75153C3.42988 3.65936 3.48557 3.57562 3.55598 3.5052C3.6264 3.43478 3.71014 3.37909 3.80232 3.34138C3.89449 3.30367 3.99325 3.2847 4.09283 3.28556C4.19242 3.28643 4.29083 3.30712 4.38233 3.34642C4.47384 3.38573 4.5566 3.44287 4.62578 3.5145L6.74678 5.6355C6.81663 5.70517 6.87204 5.78793 6.90985 5.87905C6.94766 5.97017 6.96712 6.06785 6.96712 6.1665C6.96712 6.26515 6.94766 6.36283 6.90985 6.45395C6.87204 6.54507 6.81663 6.62783 6.74678 6.6975Z"
                                        fill="black" stroke="white" stroke-width="2"
                                        mask="url(#path-1-inside-1_977:1934)" />
                                </svg>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section id="home"
        class="
        ad a1H a1I[120px] a1J[110px]
        md:a1I[150px] md:a1J[120px]
        xl:a1I[180px] xl:a1J[160px]
        2xl:a1I[210px] 2xl:a1J[200px]
      ">
        <div class="aa">
            <div class="a8 a1K ab[-16px]">
                <div class="a7 ae">
                    <div class="a1L aB[570px] a1M wow fadeInUp" data-wow-delay=".2s">
                        <h1
                            class="
                  a1A
                  dark:aI
                  a1g a1O
                  sm:a1P
                  md:a3D
                  a2D
                  sm:a2D
                  md:a2D
                  a2v
                ">
                            Use the coder diary for your needs
                        </h1>
                        <p
                            class="
                  a1R a1T
                  md:a27
                  a1U
                  md:a1U
                  a1S
                  dark:aI dark:a3E
                  a2s
                ">
                            Coder diaries have been created for developers. Because to keep a list of the problems that
                            are happening and how to solve them to work every day. So save the daily work problems in
                            the coder diary
                        </p>
                        <div class="a8 a9 a1x">
                            <a href="{{ route('problem.create') }}"
                                class=" aH a2P aI a1k a3q a1l hover:a2i a3F a13 a1p a1a a2j ">
                                Get Started
                            </a>
                            <a href="#about"
                                class=" aH a2P a1A a1 a29 dark:aI dark:aw dark:a29 a3q a1l hover:a3G dark:hover:a3G a3F a13 a1p a1a a2j ">
                                Learn More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="a3 a4 a_ a1Y[-1]">
            <svg width="450" height="556" viewBox="0 0 450 556" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="277" cy="63" r="225" fill="url(#paint0_linear_25:217)" />
                <circle cx="17.9997" cy="182" r="18" fill="url(#paint1_radial_25:217)" />
                <circle cx="76.9997" cy="288" r="34" fill="url(#paint2_radial_25:217)" />
                <circle cx="325.486" cy="302.87" r="180" transform="rotate(-37.6852 325.486 302.87)"
                    fill="url(#paint3_linear_25:217)" />
                <circle opacity="0.8" cx="184.521" cy="315.521" r="132.862" transform="rotate(114.874 184.521 315.521)"
                    stroke="url(#paint4_linear_25:217)" />
                <circle opacity="0.8" cx="356" cy="290" r="179.5" transform="rotate(-30 356 290)"
                    stroke="url(#paint5_linear_25:217)" />
                <circle opacity="0.8" cx="191.659" cy="302.659" r="133.362" transform="rotate(133.319 191.659 302.659)"
                    fill="url(#paint6_linear_25:217)" />
                <defs>
                    <linearGradient id="paint0_linear_25:217" x1="-54.5003" y1="-178" x2="222" y2="288"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <radialGradient id="paint1_radial_25:217" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(17.9997 182) rotate(90) scale(18)">
                        <stop offset="0.145833" stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.08" />
                    </radialGradient>
                    <radialGradient id="paint2_radial_25:217" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(76.9997 288) rotate(90) scale(34)">
                        <stop offset="0.145833" stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.08" />
                    </radialGradient>
                    <linearGradient id="paint3_linear_25:217" x1="226.775" y1="-66.1548" x2="292.157" y2="351.421"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_25:217" x1="184.521" y1="182.159" x2="184.521" y2="448.882"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="white" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint5_linear_25:217" x1="356" y1="110" x2="356" y2="470"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="white" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint6_linear_25:217" x1="118.524" y1="29.2497" x2="166.965" y2="338.63"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
        <div class="a3 a1X a5 a1Y[-1]">
            <svg width="364" height="201" viewBox="0 0 364 201" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M5.88928 72.3303C33.6599 66.4798 101.397 64.9086 150.178 105.427C211.155 156.076 229.59 162.093 264.333 166.607C299.076 171.12 337.718 183.657 362.889 212.24"
                    stroke="url(#paint0_linear_25:218)" />
                <path
                    d="M-22.1107 72.3303C5.65989 66.4798 73.3965 64.9086 122.178 105.427C183.155 156.076 201.59 162.093 236.333 166.607C271.076 171.12 309.718 183.657 334.889 212.24"
                    stroke="url(#paint1_linear_25:218)" />
                <path
                    d="M-53.1107 72.3303C-25.3401 66.4798 42.3965 64.9086 91.1783 105.427C152.155 156.076 170.59 162.093 205.333 166.607C240.076 171.12 278.718 183.657 303.889 212.24"
                    stroke="url(#paint2_linear_25:218)" />
                <path
                    d="M-98.1618 65.0889C-68.1416 60.0601 4.73364 60.4882 56.0734 102.431C120.248 154.86 139.905 161.419 177.137 166.956C214.37 172.493 255.575 186.165 281.856 215.481"
                    stroke="url(#paint3_linear_25:218)" />
                <circle opacity="0.8" cx="214.505" cy="60.5054" r="49.7205" transform="rotate(-13.421 214.505 60.5054)"
                    stroke="url(#paint4_linear_25:218)" />
                <circle cx="220" cy="63" r="43" fill="url(#paint5_radial_25:218)" />
                <defs>
                    <linearGradient id="paint0_linear_25:218" x1="184.389" y1="69.2405" x2="184.389" y2="212.24"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_25:218" x1="156.389" y1="69.2405" x2="156.389" y2="212.24"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_25:218" x1="125.389" y1="69.2405" x2="125.389" y2="212.24"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_25:218" x1="93.8507" y1="67.2674" x2="89.9278" y2="210.214"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_25:218" x1="214.505" y1="10.2849" x2="212.684" y2="99.5816"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <radialGradient id="paint5_radial_25:218" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(220 63) rotate(90) scale(43)">
                        <stop offset="0.145833" stop-color="white" stop-opacity="0" />
                        <stop offset="1" stop-color="white" stop-opacity="0.08" />
                    </radialGradient>
                </defs>
            </svg>
        </div>

    </section>


    <section id="blog" class="bg-primary a1Z a3A">
        <div class="aa">
            <div class="a8 a1K ab[-16px]">
                <div class="a7 ae">
                    <div class="
                a1L aB[570px] a1M a3s[100px]
                wow
                fadeInUp
              "
                        data-wow-delay=".1s">
                        <h2 class=" a1A dark:aI a1g a1O sm:a1P md:a24[45px] a1 ">
                            Our Latest Blogs
                        </h2>
                        <p class=" a1S aH md:a1T a1U md:a1 ">
                            There are many problem list variations of passages of Lorem Ipsum available
                            but the majority have suffered alteration in some form.
                        </p>
                    </div>
                </div>
            </div>
            <div class="a8 a1K ab[-16px] a1x">

                @foreach ($problems as $problem)
                    <div class="a7 md:aU/3 lg:a1_/2 xl:a1_/3 ae">
                        <div class=" ad aw dark:av a33 a13 a2p a1V wow fadeInUp" data-wow-delay=".1s">
                            <a href="javascript:void(0)" class="a7 ah ad">
                                <span class=" a3 a34 a35 a1k a1w aM a9 a1x aK ae a2P a1b aI ">
                                    {{ optional($problem->category)->name }}
                                </span>
                                <img src="{{ optional($problem->media)->first()->name['url'] ?? 'https://picsum.photos/300?random=' . rand(1, 50) }}"
                                    alt="image" class="a7" />
                            </a>
                            <div class=" a36 sm:a2Y md:ai md:az lg:a2Y xl:ai xl:a37 2xl:a2 ">
                                <h3>
                                    <a href="{{ route('frontend.show', $problem->id) }}"
                                        class=" a1g a1A dark:aI a27 sm:a2u ah a1Q hover:a1W dark:hover:a1 ">
                                        {{ $problem->name }}
                                    </a>
                                </h3>
                                <p class=" a a1 a1 a3 a2 a2 a2 a2 dark:a2o dark:a2"
                                    style="color: #fff; background-color: transparent; margin-top: 10px">
                                    {{-- {{ strip_tags($problem->description) }} --}}
                                </p>
                                <div class="a8 a9">
                                    <div
                                        class=" a8 a9 a39 a2O xl:a3a 2xl:a39 xl:a2A 2xl:a2O a3b a2z a2M dark:a2o dark:a2 ">
                                        <div class=" aB[40px] a7 at[40px] a1w a2p a2G ">
                                            <img src="{{ Auth::user()->image }}" alt="author"
                                                class="a7" />
                                        </div>
                                        <div class="a7">
                                            <h4 class=" a1b a1R a1h dark:aI a2K ">
                                                By
                                                <a href="javascript:void(0)"
                                                    class=" a1h dark:aI hover:a1W dark:hover:a1W ">
                                                    {{ Auth::user()->name }}
                                                </a>
                                            </h4>
                                            <p class="a3c a1S">
                                                Web Designer
                                            </p>
                                        </div>
                                    </div>
                                    <div class="a22">
                                        <h4 class=" a1b a1R a1h dark:aI a2K "> Date</h4>
                                        <p class="a3c a1S">{{ $problem->created_at }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


    <section id="contact" class="a1I[120px] a3A">
        <div class="aa">
            <div class="a8 a1K ab[-16px]">
                <div class="a7 lg:a2q/12 ae">
                    <div class="
                a1k a3g[3%]
                dark:av
                a13 a3t a2s
                lg:a2v
                sm:a3B[55px]
                lg:a3t
                xl:a3B[55px]
                wow
                fadeInUp
              "
                        data-wow-delay=".15s
              ">
                        <h2
                            class="
                  a1g a1A
                  dark:aI
                  a2u
                  sm:a1O
                  lg:a2u
                  xl:a1O
                  a30
                ">
                            Need Help? Open a Ticket
                        </h2>
                        <p class="a1S aH a1R a2s">
                            Our support team will get back to you ASAP via email.
                        </p>
                        <form>
                            <div class="a8 a1K ab[-16px]">
                                <div class="a7 md:a1_/2 ae">
                                    <div class="a23">
                                        <label for="name"
                                            class="
                          ah a1b a1R a1h
                          dark:aI
                          a30
                        ">
                                            Your Name
                                        </label>
                                        <input type="text" placeholder="Enter your name"
                                            class="
                          a7 a3l a3m
                          dark:a3w[#242B51]
                          a13 a33
                          dark:a1n
                          a1i
                          az
                          a1S
                          aH
                          a3x
                          a3o
                          focus-visible:aE
                          focus:a3p
                        " />
                                    </div>
                                </div>
                                <div class="a7 md:a1_/2 ae">
                                    <div class="a23">
                                        <label for="email"
                                            class="
                          ah a1b a1R a1h
                          dark:aI
                          a30
                        ">
                                            Your Email
                                        </label>
                                        <input type="email" placeholder="Enter your email"
                                            class="
                          a7 a3l a3m
                          dark:a3w[#242B51]
                          a13 a33
                          dark:a1n
                          a1i
                          az
                          a1S
                          aH
                          a3x
                          a3o
                          focus-visible:aE
                          focus:a3p
                        " />
                                    </div>
                                </div>
                                <div class="a7 ae">
                                    <div class="a23">
                                        <label for="message"
                                            class="
                          ah a1b a1R a1h
                          dark:aI
                          a30
                        ">
                                            Your Message
                                        </label>
                                        <textarea name="message" rows="5" placeholder="Enter your Message"
                                            class="
                          a7 a3l a3m
                          dark:a3w[#242B51]
                          a13 a33
                          dark:a1n
                          a1i
                          az
                          a1S
                          aH
                          a3x
                          a3o
                          focus-visible:aE
                          focus:a3p
                          a3C
                        "></textarea>
                                    </div>
                                </div>
                                <div class="a7 ae">
                                    <a href="javascript:void(0)"
                                        class="
                        aH
                        a1R
                        aI
                        a1k
                        a3q
                        a1m
                        hover:a2i hover:a1n
                        a13
                        a1p
                        a1a
                        a2j
                      ">
                                        Submit Ticket
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="a7 lg:a20/12 ae">
                    <div class="
                ad
                a1H
                a13
                a1k
                a3g[3%]
                dark:a29
                a2Y
                sm:a3t
                lg:a2Y
                xl:a3t
                a2v
                wow
                fadeInUp
              "
                        data-wow-delay=".2s
              ">
                        <h3
                            class="
                  a1A
                  dark:aI
                  a1g a2u a2D a1Q
                ">
                            Subscribe to receive future updates
                        </h3>
                        <p
                            class="
                  a1R
                  aH
                  a1S
                  a1U
                  a3u
                  a2F
                  a2B
                  a2z
                  a3v
                  dark:a2o dark:a3v
                ">
                            Lorem ipsum dolor sited Sed ullam corper consectur adipiscing
                            Mae ornare massa quis lectus.
                        </p>
                        <form>
                            <input type="text" name="name" placeholder="Enter your name"
                                class="
                    a7
                    a3l
                    a2z
                    a2M
                    dark:a2o
                    dark:a2M
                    dark:a3w[#242B51]
                    a13
                    a1i
                    az
                    a1R
                    a1S
                    aH
                    a3x
                    a3o
                    focus-visible:aE
                    focus:a3p focus:a3y
                    a1Q
                  " />
                            <input type="email" name="email" placeholder="Enter your email"
                                class="
                    a7
                    a3l
                    a2z
                    a2M
                    dark:a2o
                    dark:a2M
                    dark:a3w[#242B51]
                    a13
                    a1i
                    az
                    a1R
                    a1S
                    aH
                    a3x
                    a3o
                    focus-visible:aE
                    focus:a3p focus:a3y
                    a1Q
                  " />
                            <input type="submit" value="Subscribe"
                                class="
                    a7
                    a3l
                    a3p
                    a1k
                    a13
                    a1i
                    az
                    a1R
                    aI
                    aH
                    a1M
                    a3o
                    a1r
                    focus-visible:aE
                    hover:a1n hover:a2i
                    a1p a3z a2j a1Q
                  " />
                            <p
                                class="
                    aH
                    a1S
                    a1M
                    a1R
                    a1U
                  ">
                                No spam guaranteed, So please don’t send any spam mail.
                            </p>
                        </form>
                        <div class="a3 a4 a5 a1Y[-1]">
                            <svg width="370" height="596" viewBox="0 0 370 596" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_88:141" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                    width="370" height="596">
                                    <rect width="370" height="596" rx="2" fill="#1D2144" />
                                </mask>
                                <g mask="url(#mask0_88:141)">
                                    <path opacity="0.15"
                                        d="M15.4076 50.9571L54.1541 99.0711L71.4489 35.1605L15.4076 50.9571Z"
                                        fill="url(#paint0_linear_88:141)" />
                                    <path opacity="0.15" d="M20.7137 501.422L44.6431 474.241L6 470.624L20.7137 501.422Z"
                                        fill="url(#paint1_linear_88:141)" />
                                    <path opacity="0.1"
                                        d="M331.676 198.309C344.398 204.636 359.168 194.704 358.107 180.536C357.12 167.363 342.941 159.531 331.265 165.71C318.077 172.69 318.317 191.664 331.676 198.309Z"
                                        fill="url(#paint2_linear_88:141)" />
                                    <g opacity="0.3">
                                        <path
                                            d="M209 89.9999C216 77.3332 235.7 50.7999 258.5 45.9999C287 39.9999 303 41.9999 314 30.4999C325 18.9999 334 -3.50014 357 -3.50014C380 -3.50014 395 4.99986 408.5 -8.50014C422 -22.0001 418.5 -46.0001 452 -37.5001C478.8 -30.7001 515.167 -45 530 -53"
                                            stroke="url(#paint3_linear_88:141)" />
                                        <path
                                            d="M251 64.9999C258 52.3332 277.7 25.7999 300.5 20.9999C329 14.9999 345 16.9999 356 5.49986C367 -6.00014 376 -28.5001 399 -28.5001C422 -28.5001 437 -20.0001 450.5 -33.5001C464 -47.0001 460.5 -71.0001 494 -62.5001C520.8 -55.7001 557.167 -70 572 -78"
                                            stroke="url(#paint4_linear_88:141)" />
                                        <path
                                            d="M212 73.9999C219 61.3332 238.7 34.7999 261.5 29.9999C290 23.9999 306 25.9999 317 14.4999C328 2.99986 337 -19.5001 360 -19.5001C383 -19.5001 398 -11.0001 411.5 -24.5001C425 -38.0001 421.5 -62.0001 455 -53.5001C481.8 -46.7001 518.167 -61 533 -69"
                                            stroke="url(#paint5_linear_88:141)" />
                                        <path
                                            d="M249 40.9999C256 28.3332 275.7 1.79986 298.5 -3.00014C327 -9.00014 343 -7.00014 354 -18.5001C365 -30.0001 374 -52.5001 397 -52.5001C420 -52.5001 435 -44.0001 448.5 -57.5001C462 -71.0001 458.5 -95.0001 492 -86.5001C518.8 -79.7001 555.167 -94 570 -102"
                                            stroke="url(#paint6_linear_88:141)" />
                                    </g>
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_88:141" x1="13.4497" y1="63.5059" x2="81.144"
                                        y2="41.5072" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_88:141" x1="28.1579" y1="501.301" x2="8.69936"
                                        y2="464.391" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint2_linear_88:141" x1="338" y1="167" x2="349.488"
                                        y2="200.004" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint3_linear_88:141" x1="369.5" y1="-53" x2="369.5"
                                        y2="89.9999" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint4_linear_88:141" x1="411.5" y1="-78" x2="411.5"
                                        y2="64.9999" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint5_linear_88:141" x1="372.5" y1="-69" x2="372.5"
                                        y2="73.9999" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                    <linearGradient id="paint6_linear_88:141" x1="409.5" y1="-102" x2="409.5"
                                        y2="40.9999" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="white" />
                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="ad a1H a1k a1Z a1I[100px] ">

        <div class="ai a1k a29">
            <div class="aa">
                <p class="
              a1S
              dark:aI
              aH a1M
            ">
                    &copy; Created by Shamim Ahmed!
                </p>
            </div>
        </div>
        <div class="a3 a_ a2a a1Y[-1]">
            <svg width="55" height="99" viewBox="0 0 55 99" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle opacity="0.8" cx="49.5" cy="49.5" r="49.5" fill="#959CB1" />
                <mask id="mask0_94:899" style="mask-type: alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="99"
                    height="99">
                    <circle opacity="0.8" cx="49.5" cy="49.5" r="49.5" fill="#4A6CF7" />
                </mask>
                <g mask="url(#mask0_94:899)">
                    <circle opacity="0.8" cx="49.5" cy="49.5" r="49.5" fill="url(#paint0_radial_94:899)" />
                    <g opacity="0.8" filter="url(#filter0_f_94:899)">
                        <circle cx="53.8676" cy="26.2061" r="20.3824" fill="white" />
                    </g>
                </g>
                <defs>
                    <filter id="filter0_f_94:899" x="12.4852" y="-15.1763" width="82.7646" height="82.7646"
                        filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                        <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                        <feGaussianBlur stdDeviation="10.5" result="effect1_foregroundBlur_94:899" />
                    </filter>
                    <radialGradient id="paint0_radial_94:899" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse"
                        gradientTransform="translate(49.5 49.5) rotate(90) scale(53.1397)">
                        <stop stop-opacity="0.47" />
                        <stop offset="1" stop-opacity="0" />
                    </radialGradient>
                </defs>
            </svg>
        </div>
        <div class="a3 a5 a2b a1Y[-1]">
            <svg width="79" height="94" viewBox="0 0 79 94" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.3" x="-41" y="26.9426" width="66.6675" height="66.6675"
                    transform="rotate(-22.9007 -41 26.9426)" fill="url(#paint0_linear_94:889)" />
                <rect x="-41" y="26.9426" width="66.6675" height="66.6675" transform="rotate(-22.9007 -41 26.9426)"
                    stroke="url(#paint1_linear_94:889)" stroke-width="0.7" />
                <path opacity="0.3" d="M50.5215 7.42229L20.325 1.14771L46.2077 62.3249L77.1885 68.2073L50.5215 7.42229Z"
                    fill="url(#paint2_linear_94:889)" />
                <path d="M50.5215 7.42229L20.325 1.14771L46.2077 62.3249L76.7963 68.2073L50.5215 7.42229Z"
                    stroke="url(#paint3_linear_94:889)" stroke-width="0.7" />
                <path opacity="0.3"
                    d="M17.9721 93.3057L-14.9695 88.2076L46.2077 62.325L77.1885 68.2074L17.9721 93.3057Z"
                    fill="url(#paint4_linear_94:889)" />
                <path d="M17.972 93.3057L-14.1852 88.2076L46.2077 62.325L77.1884 68.2074L17.972 93.3057Z"
                    stroke="url(#paint5_linear_94:889)" stroke-width="0.7" />
                <defs>
                    <linearGradient id="paint0_linear_94:889" x1="-41" y1="21.8445" x2="36.9671" y2="59.8878"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0.62" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint1_linear_94:889" x1="25.6675" y1="95.9631" x2="-42.9608" y2="20.668"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.51" />
                    </linearGradient>
                    <linearGradient id="paint2_linear_94:889" x1="20.325" y1="-3.98039" x2="90.6248" y2="25.1062"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0.62" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint3_linear_94:889" x1="18.3642" y1="-1.59742" x2="113.9" y2="80.6826"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.51" />
                    </linearGradient>
                    <linearGradient id="paint4_linear_94:889" x1="61.1098" y1="62.3249" x2="-8.82468" y2="58.2156"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0.62" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0" />
                    </linearGradient>
                    <linearGradient id="paint5_linear_94:889" x1="65.4236" y1="65.0701" x2="24.0178" y2="41.6598"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#4A6CF7" stop-opacity="0" />
                        <stop offset="1" stop-color="#4A6CF7" stop-opacity="0.51" />
                    </linearGradient>
                </defs>
            </svg>
        </div>
    </footer>


    <a href="javascript:void(0)"
        class="
        aj
        a9
        a1x
        a1k
        aI
        a2c
        a2d
        a13
        a2e
        a2f
        a2g
        a2h
        a1Y[999]
        hover:a1n hover:a2i
        a1p a1a a2j
        back-to-top
        a2k
      ">
        <span
            class="
          a28
          a2l
          a2m
          a2n
          a2o
          aZ
          a11[6px]
        "></span>
    </a>


    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <script>
        // ==== pricing plan toggler
        let togglePlan = document.querySelector("#togglePlan");

        document.querySelector(".monthly").addEventListener("click", () => {
            togglePlan.checked = false;
        });
        document.querySelector(".yearly").addEventListener("click", () => {
            togglePlan.checked = true;
        });

        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document.querySelector(".menu-scroll").classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);

        //========= glightbox
        GLightbox({
            href: "https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM",
            type: "video",
            source: "youtube", //vimeo, youtube or local
            width: 900,
            autoplayVideos: true,
        });
    </script>
</body>

<!-- Mirrored from startup-tailwind.preview.uideck.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 16:22:56 GMT -->

</html>
