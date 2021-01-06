<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mamco</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/v4-shims.css">
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Cairo:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front_files/css/bootstrap.min.css')}}">
    <link href="{{asset('front_files/css/main.css')}}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{--
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>

<style>

    /*Start The Buy Form*/
    .form2
    {
        direction: rtl;
        text-align: right;
        background-color: #fff;
    }

    .form2 input
    {
        margin-top: 20px;
        margin-bottom: 5px;
        padding: 9px 10px;
        font-size: 1.1em;
        border: 1px solid #aaa;
        border-radius: 3px;
        outline: none;}
    .form2 input[type="search"]
    {
        width: 100%;
    }

    .form2 input::placeholder
    {
        color: #888;
    }
    /*End The Buy Form*/


    /*Start The Buy Table*/
    table{
        height: auto;
        font-size: 16px;
        width: 100%;
    }

    table tr
    {
        border-top: 1px solid #555;
        border-bottom: 1px solid #555;
    }

    table tr td
    {
        padding: 16px 5px;
        border: 1px solid #ccc;
        height: auto;
        width: 13%;
        text-align: right;
    }

    table tr th
    {
        padding: 16px 0px;
        font-weight: 300;
        border: 1px solid #ccc;
        height: auto;width: 13%;
        text-align: center;
        background-color: #094555 !important;
        color: #fff;
        border-top: none;
        border-bottom: none;
    }

    table tr td:nth-of-type(1)
    {
        width: 17%;
    }

    table tr td:nth-of-type(2)
    {
        width: 17%;
    }

    table tr th:nth-of-type(1)
    {
        width: 17%;
    }

    table tr th:nth-of-type(2)
    {
        width: 17%;
    }

    table tr td:nth-of-type(4)
    {
        width: 7%;
    }

    table tr td:nth-of-type(5)
    {
        width: 7%;
    }

    table tr th:nth-of-type(4)
    {
        width: 7%;
    }

    table tr th:nth-of-type(5)
    {
        width: 7%;
    }

    @media(max-width: 850px)
    {
        table{height: auto;font-size: 8.5px}
    }

    @media(max-width: 500px)
    {
        table{height: auto;font-size: 8.2px}
    }

    @media(max-width: 395px)
    {
        table{height: auto;font-size: 8.2px}
    }

    .contact{background-color: #fff;height: 100%;display: flex;align-items: center;color: #fff;direction: rtl}
    .contact2{width: 100%;background-color: #3a3a3a;padding: 70px 10px}
    .phone{background-color: none;padding: 30px 10px;text-align: right;line-height: 2em;margin-bottom: 15px}
    .email{background-color: none;padding: 30px 10px;text-align: right;margin-bottom: 15px}
    .email p{;line-height: 2em;padding: 0px;margin: 0px}
    .phone h4{padding-bottom: 10px}
    .email h4{padding-bottom: 10px}

    .phone p{;max-width: 90%;font-weight: 300}

    .form3
    {
        direction: rtl;
        text-align: right;
        background-color: #fff;
        height: auto
    }

    .form3 input
    {
        margin-top: 20px;
        padding: 9px 10px;
        font-size: 1.1em;
        border: 1px solid #aaa;
        border-radius: 3px;
        outline: none
    }

    .form3 input
    {
        width: 100%
    }

    .form3 input::placeholder
    {
        color: #888
    }
    End The Sales Form


    /*Start The Sales Table*/
    table
    {
        height: auto;
        font-size: 16px;
        width: 60%
    }

    table tr
    {
        border-top: 1px solid #555;
        border-bottom: 1px solid #555
    }

    table tr td
    {
        padding: 12px 5px;
        border: 1px solid #ccc;
        height: auto;
        width: 10.4%;
        text-align: right
    }

    table tr th
    {
        padding: 12px 0px;
        font-weight: 300;
        border: 1px solid #ccc;
        height: auto;
        width: 10.4%;
        text-align: center;
        background-color: #094555 !important;
        color: #fff;
        border-top: none;
        border-bottom: none
    }

    table tr td:nth-of-type(1)
    {
        width: 17%;
    }

    table tr td:nth-of-type(2)
    {
        width: 17%;
    }

    table tr th:nth-of-type(1)
    {
        width: 17%;
    }

    table tr th:nth-of-type(2)
    {
        width: 17%;
    }

    table tr td:nth-of-type(4)
    {
        width: 7%;
    }

    table tr td:nth-of-type(5)
    {
        width: 7%;
    }

    table tr th:nth-of-type(4)
    {
        width: 7%;
    }

    table tr th:nth-of-type(5)
    {
        width: 7%;
    }

    table tr td:last-child
    {
        text-align: center;
    }

    button
    {
        border: 1px solid #777;
        width: 80%;
        padding: 5px 0px;
        background: none;
        border-radius: 3px;
    }

    table tr th button
    {
        border: 1px solid #ccc;
        color: #fff;
    }


    @media(max-width: 1100px)
    {
        table
        {height: auto;font-size: 12px}
    }

    @media(max-width: 830px)
    {
        table{height: auto;font-size: 10px}
    }

    @media(max-width: 650px)
    {
        table{height: auto;font-size: 8px}
    }

</style>



<body>

@include('front_parts._nav')
@yield('content')

<script src="{{asset('front_files/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('front_files/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front_files/js/jquery.js')}}"></script>
<script src="{{asset('front_files/plugin/custom.js')}}"></script>


</body>
</html>
