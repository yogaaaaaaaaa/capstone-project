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
    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            background-color: white;
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .invoice-box.rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .invoice-box.rtl table {
            text-align: right;
        }

        .invoice-box.rtl table tr td:nth-child(2) {
            text-align: left;
        }
        .title{
            font-weight: 700;
            font-family: 'Poppins', sans-serif;
        }
    </style>
    
</head>
<body>
    {{-- @include('customer.partials.navbar') --}}

    <section class="vh-100 pt-2">
		<div class="invoice-box">
			<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
                                    HANG SIJI<br>DISTRO & SABLON
								</td>

								<td>
									Invoice #: {{$orderSablon->id}}<br />
									Created: {{$orderSablon->created_at}}<br />
								</td>
							</tr>
						</table>
                        <hr>
					</td>
				</tr>

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
                                <h4 class="title-code">Order Code :</h4>
                                <h1 class="code-text">{{$orderSablon->order_code}}</h1><br />
								<td>
                                    Hang Siji Distro & Sablon<br>
									Telepon : 082357082325<br />
									P39W+JJ Sumbergondo, Kabupaten Banyuwangi, Jawa Timur
								</td>

								<td>
									Customer<br />
									{{$orderSablon->order_name}}<br />
									{{$orderSablon->email}}
								</td>
							</tr>
						</table>
					</td>
				</tr>

				{{-- <tr class="heading">
					<td>Payment Method</td>

					<td>Check #</td>
				</tr> --}}

				{{-- <tr class="details">
					<td>Check</td>

					<td>1000</td>
				</tr> --}}

				<tr class="heading">
					<td>Detail</td>
					<td>Total Price</td>
				</tr>

				<tr class="item-last">
					<td>
                        Order Type : {{$orderDetail->order_type}}<br>
                        Type Tshirt : {{$orderDetail->type_tshirt}}<br>
                        Qty : {{$orderDetail->quantity}}<br>
                        Unit Price : Rp. {{$orderDetail->total_units}}
                    </td>
					<td>
                        Rp. {{$orderDetail->total_price}}
                    </td>
				</tr>
			</table>
		</div>
        <div class="btn d-flex justify-content-center mt-4">
            <a href="{{ url()->current().'?output=pdf' }}" class="btn btn-danger">Cetak Invoice Pemesanan Anda</a>
        </div>
    </section>
</body>
<script>
    var nav = document.querySelector('nav');

    window.addEventListener('scroll', function(){
        if(window.pageYOffset > 60){
            nav.classList.add('bg-dark', 'shadow')
        } else {
            nav.classList.remove('bg-dark', 'shadow')
        }
    })

    window.addEventListener('scroll', function() {
      var backToTopButton = document.querySelector('.back-to-top');
      if (window.scrollY > 300) { // Ubah nilai 300 sesuai dengan posisi scroll yang diinginkan
        backToTopButton.classList.add('show');
      } else {
        backToTopButton.classList.remove('show');
      }
    })

  </script>
</html>