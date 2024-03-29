<!DOCTYPE html>
<html lang="en" class="a0">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Startup Tailwind CSS Template</title>

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
                            </ul>
                        </nav>
                    </div>
                    <div class="a8 a1d a9 a1e lg:a1f">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class=" aj md:ah aH a1g a1h dark:aI hover:aJ a1i a1j">
                                    Dashboard </a>
                            @else
                                <a href="{{ route('login') }}" class=" aj md:ah aH a1g a1h dark:aI hover:aJ a1i a1j"> Sign
                                    In</a>
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

    <section id="blog" class="bg-primary a1Z a3A mt-40">
        <div class="aa">
            <div class="a8 a1K ab[-16px]">
                <div class="a7 ae">
                    <div class=" a1L aB[570px] a1M a3s[100px] wow fadeInUp bg-gray-400 py-2"  data-wow-delay=".1s">
                        <div class="flex justify-between items-center border-b-2 border-blue-600 px-6 py-2">
                            <h1 class="h4">search</h1>
                            <a href="{{ URL::previous() }}" class="btn-shadow">back</a>
                        </div>

                        @forelse ($queries as $query)
                            <tr class="" style="padding: 1rem;">
                                <td class="border border-l-0 px-4 py-2"><a
                                        href="{{ route('frontend.show', $query->id) }}"
                                        class="hover:text-teal-600 text-lg">{{ $query->name }}</a></td>
                            </tr>
                        @empty
                            <tr>
                                <td class="border border-l-0 px-4 py-2 text-center text-green-500" colspan="3">Search Not Found!
                                </td>
                            </tr>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </section>




    <footer class="
        ad a1H a1k a1Z a1I[100px]
        wow
        fadeInUp
      " data-wow-delay=".1s">
        <div class="aa">
            <div class="a8 a1K ab[-16px]">
                <div class="a7 md:a1_/2 lg:a20/12 xl:a1D/12 ae">
                    <div class="a21 aB[360px]">
                        <a href="index.html" class="a22 a23">
                            <img src="images/logo/logo-2.svg" alt="logo" class="a7 dark:aj" />
                            <img src="images/logo/logo.svg" alt="logo" class="a7 aj dark:ah" />
                        </a>
                        <p
                            class="
                  a1S
                  aH
                  a1R
                  a1U
                  a1N
                ">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                            lobortis.
                        </p>
                        <div class="a8 a9">
                            <a href="javascript:void(0)" aria-label="social-link" class="a24[#CED3F6] hover:a1W a25">
                                <svg width="9" height="18" viewBox="0 0 9 18" class="a26">
                                    <path
                                        d="M8.13643 7H6.78036H6.29605V6.43548V4.68548V4.12097H6.78036H7.79741C8.06378 4.12097 8.28172 3.89516 8.28172 3.55645V0.564516C8.28172 0.254032 8.088 0 7.79741 0H6.02968C4.11665 0 2.78479 1.58064 2.78479 3.92339V6.37903V6.94355H2.30048H0.65382C0.314802 6.94355 0 7.25403 0 7.70564V9.7379C0 10.1331 0.266371 10.5 0.65382 10.5H2.25205H2.73636V11.0645V16.7379C2.73636 17.1331 3.00273 17.5 3.39018 17.5H5.66644C5.81174 17.5 5.93281 17.4153 6.02968 17.3024C6.12654 17.1895 6.19919 16.9919 6.19919 16.8226V11.0927V10.5282H6.70771H7.79741C8.11222 10.5282 8.35437 10.3024 8.4028 9.96371V9.93548V9.90726L8.74182 7.95968C8.76604 7.7621 8.74182 7.53629 8.59653 7.31048C8.54809 7.16935 8.33016 7.02823 8.13643 7Z" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)" aria-label="social-link" class="a24[#CED3F6] hover:a1W a25">
                                <svg width="19" height="14" viewBox="0 0 19 14" class="a26">
                                    <path
                                        d="M16.3024 2.26027L17.375 1.0274C17.6855 0.693493 17.7702 0.436644 17.7984 0.308219C16.9516 0.770548 16.1613 0.924658 15.6532 0.924658H15.4556L15.3427 0.821918C14.6653 0.282534 13.8185 0 12.9153 0C10.9395 0 9.3871 1.48973 9.3871 3.21062C9.3871 3.31336 9.3871 3.46747 9.41532 3.57021L9.5 4.0839L8.90726 4.05822C5.29435 3.95548 2.33065 1.13014 1.85081 0.642123C1.06048 1.92637 1.5121 3.15925 1.99194 3.92979L2.95161 5.36815L1.42742 4.5976C1.45565 5.67637 1.90726 6.52397 2.78226 7.14041L3.54435 7.65411L2.78226 7.93665C3.2621 9.24658 4.33468 9.78596 5.125 9.99144L6.16935 10.2483L5.18145 10.8647C3.60081 11.8921 1.625 11.8151 0.75 11.738C2.52823 12.8682 4.64516 13.125 6.1129 13.125C7.21371 13.125 8.03226 13.0223 8.22984 12.9452C16.1331 11.25 16.5 4.82877 16.5 3.54452V3.36473L16.6694 3.26199C17.629 2.44007 18.0242 2.00342 18.25 1.74658C18.1653 1.77226 18.0524 1.82363 17.9395 1.84932L16.3024 2.26027Z" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)" aria-label="social-link" class="a24[#CED3F6] hover:a1W a25">
                                <svg width="18" height="14" viewBox="0 0 18 14" class="a26">
                                    <path
                                        d="M17.5058 2.07119C17.3068 1.2488 16.7099 0.609173 15.9423 0.395963C14.5778 7.26191e-08 9.0627 0 9.0627 0C9.0627 0 3.54766 7.26191e-08 2.18311 0.395963C1.41555 0.609173 0.818561 1.2488 0.619565 2.07119C0.25 3.56366 0.25 6.60953 0.25 6.60953C0.25 6.60953 0.25 9.68585 0.619565 11.1479C0.818561 11.9703 1.41555 12.6099 2.18311 12.8231C3.54766 13.2191 9.0627 13.2191 9.0627 13.2191C9.0627 13.2191 14.5778 13.2191 15.9423 12.8231C16.7099 12.6099 17.3068 11.9703 17.5058 11.1479C17.8754 9.68585 17.8754 6.60953 17.8754 6.60953C17.8754 6.60953 17.8754 3.56366 17.5058 2.07119ZM7.30016 9.44218V3.77687L11.8771 6.60953L7.30016 9.44218Z" />
                                </svg>
                            </a>
                            <a href="javascript:void(0)" aria-label="social-link" class="a24[#CED3F6] hover:a1W a25">
                                <svg width="17" height="16" viewBox="0 0 17 16" class="a26">
                                    <path
                                        d="M15.2196 0H1.99991C1.37516 0 0.875366 0.497491 0.875366 1.11936V14.3029C0.875366 14.8999 1.37516 15.4222 1.99991 15.4222H15.1696C15.7943 15.4222 16.2941 14.9247 16.2941 14.3029V1.09448C16.3441 0.497491 15.8443 0 15.2196 0ZM5.44852 13.1089H3.17444V5.7709H5.44852V13.1089ZM4.29899 4.75104C3.54929 4.75104 2.97452 4.15405 2.97452 3.43269C2.97452 2.71133 3.57428 2.11434 4.29899 2.11434C5.02369 2.11434 5.62345 2.71133 5.62345 3.43269C5.62345 4.15405 5.07367 4.75104 4.29899 4.75104ZM14.07 13.1089H11.796V9.55183C11.796 8.7061 11.771 7.58674 10.5964 7.58674C9.39693 7.58674 9.222 8.53198 9.222 9.47721V13.1089H6.94792V5.7709H9.17202V6.79076H9.19701C9.52188 6.19377 10.2466 5.59678 11.3711 5.59678C13.6952 5.59678 14.12 7.08925 14.12 9.12897V13.1089H14.07Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="
              a7
              sm:a1_/2
              md:a1_/2
              lg:aU/12
              xl:aU/12
              ae
            ">
                    <div class="a21">
                        <h2
                            class="
                  a1g a1A
                  dark:aI
                  a27 a1V
                ">
                            Useful Links
                        </h2>
                        <ul>
                            <li>
                                <a href="{{ route('frontend.index') }}"
                                    class="
                      aH
                      a1R
                      a22
                      a1S
                      a1Q
                      hover:a1W
                    ">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="
                      aH
                      a1R
                      a22
                      a1S
                      a1Q
                      hover:a1W
                    ">
                                    About
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('problems') }}"
                                    class="
                      aH
                      a1R
                      a22
                      a1S
                      a1Q
                      hover:a1W
                    ">
                                    Problems
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="
              a7
              sm:a1_/2
              md:a1_/2
              lg:aU/12
              xl:aU/12
              ae
            ">
                    <div class="a21">
                        <h2
                            class="
                  a1g a1A
                  dark:aI
                  a27 a1V
                ">
                            Terms
                        </h2>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"
                                    class="
                      aH
                      a1R
                      a22
                      a1S
                      a1Q
                      hover:a1W
                    ">
                                    TOS
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="
                      aH
                      a1R
                      a22
                      a1S
                      a1Q
                      hover:a1W
                    ">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="
                      aH
                      a1R
                      a22
                      a1S
                      a1Q
                      hover:a1W
                    ">
                                    Refund Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="a7 md:a1_/2 lg:a20/12 xl:a28/12 ae">
                    <div class="a21">
                        <h2
                            class="
                  a1g a1A
                  dark:aI
                  a27 a1V
                ">
                            Support & Help
                        </h2>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"
                                    class="
                      aH
                      a1R
                      a22
                      a1S
                      a1Q
                      hover:a1W
                    ">
                                    Open Support Ticket
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="
                      aH
                      a1R
                      a22
                      a1S
                      a1Q
                      hover:a1W
                    ">
                                    Terms of Use
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"
                                    class="
                      aH
                      a1R
                      a22
                      a1S
                      a1Q
                      hover:a1W
                    ">
                                    About
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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





    <script src="{{ asset('admin/js/main.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.js') }}"></script>
    <!-- end script -->


</body>

</html>
