<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <section class="px-8 py-4 mb-6">
            <header class="container mx-auto">
                <a class="flex items-center text-blue-500" href="/">
                    <svg class="w-8 mr-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
                        <metadata> Svg Vector Icons : http://www.onlinewebfonts.com/icon </metadata>
                        <g class="fill-current" transform="translate(0.000000,511.000000) scale(0.100000,-0.100000)"><path d="M6159,4578.5c-915.5-89-1658.8-685.9-1865.4-1503.8c-54.5-218.1-54.5-642.8,0-861c68.9-275.5,252.5-608.4,479.3-872.4c476.4-545.3,499.3-640,200.9-832.3c-295.6-189.4-421.9-215.2-1010.2-215.2c-505.1,0-548.1,5.7-869.6,91.8C2301.9,598,1679.2,925.1,961.7,1496.2c-129.1,103.3-289.9,114.8-384.6,28.7C450.9,1413,284.4,1011.2,172.5,563.5c-94.7-390.3-97.6-1059-2.9-1386.1c63.1-223.8,195.2-510.8,295.6-657.2c45.9-60.3,54.5-126.3,54.5-364.5c0-628.5,183.7-1127.9,571.1-1558.3c413.3-459.2,1096.3-803.6,1831-929.8c218.1-37.3,387.4-43,794.9-31.6c287,8.6,576.8,31.6,642.8,48.8c91.8,22.9,155,20.1,229.6-2.9c60.3-17.2,358.7-37.3,665.8-45.9c490.7-11.5,594.1-5.7,855.2,45.9c608.4,126.3,1093.4,364.5,1449.3,714.6c499.4,490.8,740.4,1093.4,743.3,1856.8c2.9,694.5-198,1337.4-582.6,1853.9c-284.1,384.6-269.8,450.6,209.5,918.4l338.6,335.8l123.4-14.3c186.5-23,594,60.3,809.3,163.6c232.5,111.9,516.6,381.7,617,588.3c100.4,206.6,109.1,450.6,23,617c-91.9,177.9-209.5,241.1-433.3,229.6c-378.8-23-585.5-8.6-731.8,43c-137.8,51.7-149.3,63.1-209.5,218.1c-91.8,252.5-315.7,571.1-562.5,797.8C7456.2,4426.4,6796.1,4641.6,6159,4578.5z M6773.2,3964.3c706-166.4,1236.9-795,1236.9-1460.8c0-439.1-132-703.1-559.6-1122.1c-410.4-404.7-487.9-548.1-487.9-904c0-281.2,48.8-401.8,312.8-763.4c304.2-416.1,430.5-832.2,430.5-1432.1c2.9-453.4-51.7-711.7-221-1033.1c-117.7-226.7-496.5-605.5-726.1-723.2c-241.1-129.1-660.1-264-878.2-284.1l-180.8-20.1l143.5,117.6c823.7,668.7,921.2,1805.2,215.2,2534.1c-177.9,183.7-200.9,198-312.8,198c-152.1,0-221-34.4-275.5-143.5c-77.5-149.2-54.5-215.2,134.9-421.9c232.5-258.3,318.5-444.8,332.9-740.4c14.3-281.2-51.7-476.4-238.2-723.2C5286.6-3505.9,4365.3-3836,3389.6-3790c-1153.7,54.5-2066.3,677.3-2252.8,1538.3l-20.1,94.7l123.4-77.5c68.9-40.2,232.5-129.2,361.6-192.3c183.7-89,252.5-109.1,321.4-94.7c111.9,23,232.5,166.4,232.5,272.6c0,157.8-57.4,223.8-298.5,347.3C1131-1525.7,783.8-1083.7,691.9-415.1c-23,175-23,307.1,0,502.2C717.8,305.2,815.3,732.9,852.6,796c5.7,11.5,155-77.5,332.9-195.2c596.9-398.9,1337.3-706,2031.9-843.7c464.9-91.8,1084.8-91.8,1446.4-2.9c281.3,71.7,637.1,243.9,815,396.1C5542,204.8,5631,319.6,5674,405.7c68.9,143.5,74.6,183.7,63.1,396c-14.3,301.3-86.1,436.2-416.1,800.7c-393.2,436.2-539.5,812.2-476.4,1222.5C4968,3628.5,5889.2,4171,6773.2,3964.3z M8982.9,2345.7l304.2-17.2l-126.3-126.3c-140.6-137.8-304.2-218.1-505.1-249.7c-126.3-17.2-134.9-14.3-117.7,40.2c14.4,45.9,74.6,364.5,74.6,401.8c0,5.7,14.3,0,31.6-11.5C8664.4,2371.5,8816.5,2354.3,8982.9,2345.7z"/><path d="M6919.5,3152.2c-117.7-57.4-229.6-212.4-229.6-318.6c0-180.8,195.2-376,373.1-376c175,0,373.1,195.1,373.1,367.3c0,132-89,269.8-212.4,324.3C7077.3,3215.3,7045.8,3215.3,6919.5,3152.2z"/></g>
                    </svg>
                    <h1 class="font-bold italic text-4xl">Quacker</h1>
                </a>
            </header>
        </section>
        {{ $slot }}
    </div>
    <script src="http://unpkg.com/turbolinks"></script>
</body>
</html>
