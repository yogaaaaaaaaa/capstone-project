<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Hang Siji</title>

    {{-- Google Web Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Lobster+Two:ital,wght@0,700;1,400;1,700&family=Poppins:wght@300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Style CSS --}}
    <link rel="stylesheet" href="{{asset('instyle.css')}}">

    {{-- Animation Website --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
</head>
<body>
    @include('customer.partials.navbar')

    <section class="hero">
        <div class="container-fluid">
            <div class="card">
                <div class="container">
                    <div class="box">
                        <h5>Order Code</h5>
                        <h1>{{$order->order_code}}</h1>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <td>Order Name</td>
                                    <td> : {{$order->order_name}}</td>
                                    <td>Order Address</td>
                                    <td> : {{$order->address}}</td>
                                    <td>Nomor Hp</td>
                                    <td> : {{$order->no_hp}}</td>
                                    <td>Email</td>
                                    <td> : {{$order->email}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <td>Order Type</td>
                                    <td> : {{$order->detailorder->order_type}}</td>
                                    <td>Type Tshirt</td>
                                    <td> : {{$order->detailorder->type_tshirt}}</td>
                                    <td>Total Price</td>
                                    <td> : {{$order->detailorder->total_price}}</td>
                                    <td>Payment Status</td>
                                    <td> : {{$order->payment_status}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>