<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Granary | V8CH</title>

    <base href="/">

    <!-- App Name -->
    <meta name="app-name" content="{{ config('app.name', 'Combine') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Data from Previous POST -->
    <meta name="posted" content='{!! $posted !!}'>

    <!-- Server-Side Validation Errors -->
    <meta name="server-errors" content='{{ $serverErrors }}'>

    <!-- Site style -->
    <!--suppress HtmlUnknownTarget -->
    <link href="{{ asset('css/granary-auth.css') }}" rel="stylesheet">

</head>

<body>

<div id="granary-auth"></div>

<!-- SVG Assets -->
<svg class="svg-hidden"
     height="0"
     preserveAspectRatio="none"
     width="0">
    <symbol id="logotype-knockout"
            viewBox="0 0 5500 2062.3501">
        <title>V8CH Logototype Knockout</title>
        <path d="M5374.9386,719.79c-7.1377-20.9531-21.0835-28.6416-42.9031-24.81-47.0918,8.2705-94.1428,16.7734-141.2778,24.7866-7.2114,1.2256-14.6687,4.8589-20.4382-5.9741-26.7183-50.1689-54.5366-99.752-83.0557-151.5322,30.0732-35.895,62.6445-74.7549,95.196-113.6313,20.17-24.0894,20.2249-36.9053-.3979-60.1528a986.128,986.128,0,0,0-218.5645-184.7046c-34.4375-21.374-43.4512-19.7749-69.7773,11.7344-31.0007,37.1035-62.1633,74.0718-90.7224,108.0815-56.9226-19.3511-111.35-37.5591-165.395-56.8389-3.9261-1.4009-7.1213-10.5635-7.1909-16.16-.5725-46.1357-.2625-92.2817-.3494-138.4248-.0582-30.9858-9.6045-41.3022-39.561-45.7075a1004.1553,1004.1553,0,0,0-292.9785.0327c-29.2747,4.28-38.8848,14.5513-38.9669,44.4141-.1271,46.1426-.5428,92.2949.2888,138.4224.233,12.9263-4.6285,16.9658-16.2509,20.9316q-70.9827,24.2234-140.921,51.4463c-10.7245,4.1748-15.8307,2.83-22.7738-5.65-30.3188-37.0332-61.217-73.5962-92.2-110.0791-15.951-18.7827-30.557-21.0059-51.67-8.2832Q3805.1,275.9835,3705.0757,390.07c-19.0626,21.6411-18.8084,34.8672.1438,57.5122,32.9083,39.32,65.85,78.6118,96.23,114.8735-27.683,49.8413-54.8165,97.2329-80.2392,145.5249-6.1046,11.5957-12.0319,14.2612-23.8672,12.0654-46.442-8.6177-93.0042-16.5889-139.5283-24.7632-24.0252-4.2212-36.7606,3.1543-44.7577,26.5269-33.0847,96.6948-50.9628,196.0933-52.46,298.3447-.3668,25.05,8.21,35.6011,33.0621,40.1411,51.5046,9.4082,103.0674,18.498,155.0251,27.7944.8781,5.9712,1.51,11.06,2.3862,16.106,8.5566,49.3047,16.4907,98.7344,26.2419,147.8027,2.225,11.1963.8885,16.3262-8.8925,21.8154-40.6951,22.8389-80.9852,46.4014-121.3772,69.7788-25.3183,14.6538-30.0052,27.5-19.53,54.24a985.3043,985.3043,0,0,0,149.1215,257.8862c16.8458,21.0391,30.5273,23.6646,53.9833,10.2354,39.0012-22.3286,78.3232-44.1475,116.6056-67.6543,14.074-8.6421,22.1422-8.3716,34.4828,3.81,25.3794,25.0508,53.0306,47.854,80.3655,70.8472,13.5413,11.39,28.4536,21.15,42.7412,31.645-18.1356,49.8413-35.9315,98.4824-53.52,147.1987-8.8447,24.498-4.0125,37.8027,18.5686,50.19,89.012,48.83,183.1868,83.5791,282.9242,102.9438,26.4227,5.13,37.981-1.5171,47.4115-27.2085,16.07-43.7773,32.4011-87.47,47.538-131.5708,4.1864-12.1968,10.0348-14.6841,22.4-14.43,49.4891,1.0166,99.0258,1.1011,148.5106-.0029,12.6842-.2832,18.0784,2.83,22.1912,14.72,15.431,44.6089,31.8745,88.8711,48.22,133.1592,8.6882,23.54,20.9346,30.3062,45.2249,25.627,99.7727-19.22,193.9851-53.8535,283.0991-102.4961,23.8782-13.0342,28.7859-25.9116,19.675-51.1675-17.5671-48.6973-35.3184-97.3281-51.8862-142.939,45.2437-39.6992,87.8774-77.4668,131.2046-114.4214,3.3342-2.8437,12.6968-2.0088,17.3206.5776,41.731,23.3477,82.98,47.5547,124.4741,71.3276,22.7966,13.0605,36.8572,10.5234,52.7913-9.3076A983.652,983.652,0,0,0,5361.1061,1397.54c10.165-25.9888,5.511-39.4048-18.38-53.2778-39.86-23.146-79.5652-46.58-119.876-68.9165-11.4412-6.34-15.8816-11.9712-11.05-25.4277,5.4133-15.0747,8.6567-31.0884,11.354-46.9473,6.45-37.9229,12.0256-75.9951,18.1328-115.1533,50.8364-9.0908,102.4084-18.1953,153.93-27.5786,23.94-4.36,32.9834-14.9946,32.7026-38.7085C5426.695,918.0792,5408.2582,817.6,5374.9386,719.79ZM4202.38,1473.8614c-127.3724,0-230.6281-103.2559-230.6281-230.6284s103.2556-230.6279,230.6281-230.6279,230.6281,103.2559,230.6281,230.6279S4329.7525,1473.8614,4202.38,1473.8614Zm755.7833-483.8882c-3.8738,13.7148-9.3464,26.9839-14.259,40.396-14.792,40.3828-29.738,80.7075-44.4583,121.1162-5.7681,15.834-16.2373,27.5859-30.1958,36.5576-1.165.7485-2.3267,1.4951-3.4814,2.26-.0891.06-.1108.2041-.248.4961,36.43,35.4946,54.4834,78.4336,50.6438,129.5859-2.9182,38.8838-18.6843,72.2207-46.1138,99.916-56.3206,56.8667-147.3129,62.9668-209.98,14.1665-36.8437-28.6909-58.0366-66.439-62.2958-113.0561-4.2521-46.5391,10.8284-86.458,41.7126-122.458h-78.125c.3422,6,.6849,12.4,1.006,18.33.4978,9.1855.6436,18.7439-2.4224,27.6248a49.1165,49.1165,0,0,1-95.6177-15.1025c-.5566-61.0693-19.18-115.8385-57.8025-163.2145-41.4226-50.8105-94.59-82.3582-159.4834-92.4574-76.991-11.9814-145.7429,7.53-206.2373,56.5575-26.0826,21.1387-65.2807,11.9489-77.6274-18.4891-1.5969-3.9375-3.1779-8.1634-3.1779-12.2552V987.4371a25.7922,25.7922,0,0,1,1.2-6.8218c2.7234-9.7686,7.2811-18.02,15.0422-24.5771a334.6491,334.6491,0,0,1,58.6106-39.5942c2.855-1.5234,3.8331-3.2056,3.83-6.43q-.1425-134.2617-.1158-268.5229c-.02-17.4092,5.9887-31.7437,19.9681-42.3589a46.1279,46.1279,0,0,1,27.0356-9.5879q3.5418-.1069,7.0877-.1021,151.3564-.0073,302.7136-.0024c29.8257,0,47.2144,12.8779,54.8551,41.9438,9.2418,35.1563,17.77,70.5059,26.5883,105.7729q25.2438,100.9556,50.3708,201.9521c.8884,3.5845,2.3094,4.7217,5.84,4.7056,30.2986-.1357,60.5981.1392,90.8971.1392H4633v-6.165c0-40.958-1.6189-82.1582-2.01-123.1733a48.7147,48.7147,0,1,1,95.7223-18.1548l1.49-.0293c-.3385,47.5308-.2018,95.0659-.2018,142.6v4.9229h5.1847c62.2665,0,124.5325-.2817,186.7983-.1074a54.801,54.801,0,0,1,17.1736,2.4119C4954.6852,952.1815,4963.7023,970.3639,4958.1635,989.9732Z"></path>
        <g>
            <path d="M602.7129,1443.6388c-5.3945,14.0254-20.498,23.7344-35.6016,23.7344H405.2871c-15.1035,0-30.207-9.709-35.6016-23.7344L49.2744,649.6222A17.334,17.334,0,0,1,65.457,625.8878h183.4A37.4971,37.4971,0,0,1,283.38,649.6222l195.2676,521.0732c2.1572,7.5518,12.9463,7.5518,15.1035,0L690.0977,649.6222A37.4961,37.4961,0,0,1,724.62,625.8878h183.4a17.334,17.334,0,0,1,16.1826,23.7344Z"></path>
            <path d="M926.3682,1218.1642c0-83.0693,35.6006-144.5625,92.7783-184.4795,9.71-6.4727,10.7891-18.34,2.1582-25.8916-38.8379-35.6016-61.4932-85.2275-61.4932-151.0361,0-149.957,139.1689-247.0508,300.9922-247.0508,158.5879,0,299.9141,97.0938,299.9141,247.0508,0,65.8086-24.8125,115.4346-63.65,151.0361-7.5518,7.5518-7.5518,19.4189,2.1572,25.8916,57.1777,39.917,93.8584,101.41,93.8584,184.4795,0,159.666-155.3516,265.3916-332.2793,265.3916C1079.5615,1483.5558,926.3682,1377.83,926.3682,1218.1642Zm220.08-18.34c0,47.4678,40.9961,94.9365,114.3555,94.9365,71.2031,0,112.1982-47.4687,112.1982-94.9365s-40.9951-94.9375-112.1982-94.9375C1187.4443,1104.8868,1146.4482,1151.2765,1146.4482,1199.8243Zm26.9707-333.3574c0,39.916,29.1289,79.833,87.3848,79.833,57.1777,0,86.3066-39.917,86.3066-79.833,0-36.6807-29.1289-75.5186-86.3066-75.5186C1202.5479,790.9484,1173.4189,829.7862,1173.4189,866.4669Z"></path>
            <path d="M2285.6826,1178.2472c8.6309-14.0244,23.7344-18.34,37.7588-11.8672l149.957,65.8086c11.8672,4.3154,17.2607,21.5771,9.709,32.3652-76.5967,131.6172-222.2383,219.002-386.22,219.002-242.7363,0-446.6338-196.3467-446.6338-436.9248s203.8975-436.9248,446.6338-436.9248c163.9814,0,307.4658,87.3848,385.1416,216.8438,6.4727,10.7881,2.1572,28.05-9.71,33.4434l-148.8779,65.8086c-14.0244,7.5518-29.1279,3.2363-37.7588-10.7881-40.9951-58.2568-110.04-97.0947-188.7949-97.0947a228.7114,228.7114,0,0,0,0,457.4229C2176.7207,1275.3419,2244.6875,1236.504,2285.6826,1178.2472Z"></path>
            <path d="M3129.31,651.78a26.2524,26.2524,0,0,1,25.8916-25.8926h163.9814a26.2526,26.2526,0,0,1,25.8926,25.8926v789.7012a26.2524,26.2524,0,0,1-25.8926,25.8916H3155.2012a26.2522,26.2522,0,0,1-25.8916-25.8916V1176.09a21.64,21.64,0,0,0-21.5771-21.5762H2807.8193a21.64,21.64,0,0,0-21.5771,21.5762v265.3916a26.2522,26.2522,0,0,1-25.8916,25.8916H2597.4473a26.2522,26.2522,0,0,1-25.8916-25.8916V651.78a26.2524,26.2524,0,0,1,25.8916-25.8926h162.9033a26.2524,26.2524,0,0,1,25.8916,25.8926v279.416a21.64,21.64,0,0,0,21.5771,21.5762h299.9131a21.64,21.64,0,0,0,21.5771-21.5762Z"></path>
        </g>
    </symbol>
    <symbol id="logo-spinner"
            viewBox="0 0 2000 2000">
        <title>V8CH Logo Spinner</title>
        <path class="wheel" d="M1925.7,688.2c-7.1-21-21.1-28.6-42.9-24.8c-47.1,8.3-94.1,16.8-141.3,24.8c-7.2,1.2-14.7,4.9-20.4-6
					c-26.7-50.2-54.5-99.8-83.1-151.5c30.1-35.9,62.6-74.8,95.2-113.6c20.2-24.1,20.2-36.9-0.4-60.2
					c-63.9-72.1-136.6-133.9-218.6-184.7c-34.4-21.4-43.5-19.8-69.8,11.7c-31,37.1-62.2,74.1-90.7,108.1
					c-56.9-19.4-111.3-37.6-165.4-56.8c-3.9-1.4-7.1-10.6-7.2-16.2c-0.6-46.1-0.3-92.3-0.3-138.4c-0.1-31-9.6-41.3-39.6-45.7
					c-97.7-14.4-195.3-14.2-293,0c-29.3,4.3-38.9,14.6-39,44.4c-0.1,46.1-0.5,92.3,0.3,138.4c0.2,12.9-4.6,17-16.3,20.9
					c-47.3,16.1-94.3,33.3-140.9,51.4c-10.7,4.2-15.8,2.8-22.8-5.7c-30.3-37-61.2-73.6-92.2-110.1c-16-18.8-30.6-21-51.7-8.3
					c-86.6,52.2-163.1,116.5-230,192.4c-19.1,21.6-18.8,34.9,0.1,57.5c32.9,39.3,65.9,78.6,96.2,114.9c-27.7,49.8-54.8,97.2-80.2,145.5
					c-6.1,11.6-12,14.3-23.9,12.1c-46.4-8.6-93-16.6-139.5-24.8c-24-4.2-36.8,3.2-44.8,26.5c-33.1,96.7-51,196.1-52.5,298.3
					c-0.4,25.1,8.2,35.6,33.1,40.1c51.5,9.4,103.1,18.5,155,27.8c0.9,6,1.5,11.1,2.4,16.1c8.6,49.3,16.5,98.7,26.2,147.8
					c2.2,11.2,0.9,16.3-8.9,21.8c-40.7,22.8-81,46.4-121.4,69.8c-25.3,14.7-30,27.5-19.5,54.2c36.6,93.5,86.3,179.5,149.1,257.9
					c16.8,21,30.5,23.7,54,10.2c39-22.3,78.3-44.1,116.6-67.7c14.1-8.6,22.1-8.4,34.5,3.8c25.4,25.1,53,47.9,80.4,70.8
					c13.5,11.4,28.5,21.2,42.7,31.6c-18.1,49.8-35.9,98.5-53.5,147.2c-8.8,24.5-4,37.8,18.6,50.2c89,48.8,183.2,83.6,282.9,102.9
					c26.4,5.1,38-1.5,47.4-27.2c16.1-43.8,32.4-87.5,47.5-131.6c4.2-12.2,10-14.7,22.4-14.4c49.5,1,99,1.1,148.5,0
					c12.7-0.3,18.1,2.8,22.2,14.7c15.4,44.6,31.9,88.9,48.2,133.2c8.7,23.5,20.9,30.3,45.2,25.6c99.8-19.2,194-53.9,283.1-102.5
					c23.9-13,28.8-25.9,19.7-51.2c-17.6-48.7-35.3-97.3-51.9-142.9c45.2-39.7,87.9-77.5,131.2-114.4c3.3-2.8,12.7-2,17.3,0.6
					c41.7,23.3,83,47.6,124.5,71.3c22.8,13.1,36.9,10.5,52.8-9.3c63.3-78.8,113.3-165.2,150.1-259.3c10.2-26,5.5-39.4-18.4-53.3
					c-39.9-23.1-79.6-46.6-119.9-68.9c-11.4-6.3-15.9-12-11-25.4c5.4-15.1,8.7-31.1,11.4-46.9c6.5-37.9,12-76,18.1-115.2
					c50.8-9.1,102.4-18.2,153.9-27.6c23.9-4.4,33-15,32.7-38.7C1977.4,886.5,1959,786,1925.7,688.2z M995,1670c-370,0-670-300-670-670
					s300-670,670-670s670,300,670,670S1365,1670,995,1670z"></path>
        <path class="tractor" d="M1000.5,295C606.4,295,287,614.4,287,1008.5S606.4,1722,1000.5,1722s713.5-319.4,713.5-713.5
					S1394.6,295,1000.5,295z M748.1,1451.2c-127.4,0-230.6-103.3-230.6-230.6S620.7,990,748.1,990c127.4,0,230.6,103.3,230.6,230.6
					S875.5,1451.2,748.1,1451.2z M1503.9,967.4c-3.9,13.7-9.3,27-14.3,40.4c-14.8,40.4-29.7,80.7-44.5,121.1
					c-5.8,15.8-16.2,27.6-30.2,36.6c-1.2,0.7-2.3,1.5-3.5,2.3c-0.1,0.1-0.1,0.2-0.2,0.5c36.4,35.5,54.5,78.4,50.6,129.6
					c-2.9,38.9-18.7,72.2-46.1,99.9c-56.3,56.9-147.3,63-210,14.2c-36.8-28.7-58-66.6-62.3-113.2c-4.3-46.5,10.8-86.6,41.7-122.6
					c-26.4,0-52.1,0-78.1,0c0.3,6,0.7,12.6,1,18.5c0.5,9.2,0.6,18.8-2.4,27.7c-7.8,22.7-30.9,36.5-54.6,32.7
					c-23.3-3.8-40.8-23.9-41-47.7c-0.6-61.1-19.2-115.8-57.8-163.2c-41.4-50.8-94.6-82.4-159.5-92.5c-77-12-145.7,7.5-206.2,56.6
					c-26.1,21.1-65.1,12-77.5-18.5c-1.6-3.9-3-8.2-3-12.3c0-4.2,0-8.3,0-12.5c0-2.3,0.4-4.6,1.1-6.8c2.7-9.8,7.2-18,15-24.6
					c18.1-15.3,37.7-28.4,58.6-39.6c2.9-1.5,3.8-3.2,3.8-6.4c-0.1-89.5,0-179-0.1-268.5c0-17.4,6-31.7,20-42.4c7.9-6,17-9.3,27-9.6
					c2.4-0.1,4.7-0.1,7.1-0.1c100.9,0,201.8,0,302.7,0c29.8,0,47.2,12.9,54.9,41.9c9.2,35.2,17.8,70.5,26.6,105.8
					c16.8,67.3,33.7,134.6,50.4,202c0.9,3.6,2.3,4.6,5.8,4.5c30.3-0.1,60.6,0,90.9,0c1.5,0,1.3,0,9.3,0c0-2,0-4.1,0-5.8
					c0-41-1.8-82.2-2.1-123.2c-0.6-3-0.9-6.1-0.9-9.3c0-26.9,21.8-48.7,48.7-48.7c23.9,0,43.7,17.2,47.8,39.8l1.6,0
					c-0.3,47.5-0.1,95.1-0.1,142.6c0,1.4,0,2.6,0,4.6c4,0,3.1,0,4.9,0c62.3,0,124.5-0.1,186.8,0.1c5.7,0,11.8,0.7,17.2,2.5
					C1500.4,929.5,1509.4,947.7,1503.9,967.4z"></path>
    </symbol>
</svg>

<!-- Granary Application Scripts -->
<!--suppress JSUnresolvedLibraryURL -->
<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/granary-vendor-react.js') }}"></script>
<script src="{{ asset('js/granary-auth.js') }}"></script>

</body>

</html>
