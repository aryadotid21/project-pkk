{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Mailer</title>
</head>
<body>
    <div class="content" style="text-align: center">
    <h2>Konfirmasi Penyewaan Laptop</h2>
    <h4>Dear, {{ session()->get('nama') }}<h4>
    <h4>Thank you for rent a laptop from Rental Laptop Jakarta</h4>
    <h4>Your Order Details is</h4>
    <h4>Name : {{ session()->get('nama') }}</h4>
    <h4>Email : {{ session()->get('email') }}</h4>
    <h4>Phone : {{ session()->get('phone') }}</h4>
    <h4>City : {{ session()->get('city') }}</h4>
    <h4>ZIP Code : {{ session()->get('zip') }}</h4>
    <h4>Full Address : {{ session()->get('address') }}</h4>
    <h4>Laptop Name : {{ session()->get('nama_laptop') }}</h4>
    <h4>Price For 1 Day : {{ session()->get('price') }}</h4>
    <h4>Duration : {{ session()->get('duration') }}</h4>
    <h4>Total Price : {{ session()->get('totprice') }}</h4>
    <h4>Pickup Date : {{ session()->get('pickupdate') }}</h4>
</div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>A simple, clean, and responsive HTML invoice template</title>

		<!-- Favicon -->
		<link rel="icon" href="./images/favicon.png" type="image/x-icon" />

		<!-- Invoice styling -->
		<style>
			body {
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				text-align: center;
				color: #777;
			}

			body h1 {
				font-weight: 300;
				margin-bottom: 0px;
				padding-bottom: 0px;
				color: #000;
			}

			body h3 {
				font-weight: 300;
				margin-top: 10px;
				margin-bottom: 20px;
				font-style: italic;
				color: #555;
			}

			body a {
				color: #06f;
			}

			.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
				border-collapse: collapse;
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
		</style>
	</head>

	<body>
		<h1>Dear, {{ session()->get('nama') }}</h1>
		<h3>Thank you for rent a laptop from Rental Laptop Jakarta.</h3>
		<h3>Your Order Details is : </h3>

		<div class="invoice-box">
			<table>
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="https://i.imgur.com/lriL3a6.png" alt="Company logo" style="width: 100%; max-width: 300px" />
								</td>

								<td>
									Invoice #: {{ session()->get('id') }}<br/>
									Created: {{ date('F j, Y') }}<br/>
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="information"  style="padding-bottom: 100px">
					<td colspan="2">
						<table>
							<tr>
								<td>
									{{ session()->get('city') }}<br/>
									{{ session()->get('zip') }}<br/>
									{{ session()->get('address') }}
								</td>

								<td>
									{{ session()->get('nama') }}<br/>
									{{ session()->get('phone') }}<br/>
									{{ session()->get('email') }}
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr class="heading">
					<td>Item</td>

					<td>Price</td>
				</tr>

				<tr class="item">
					<td>{{ session()->get('nama_laptop') }}</td>

					<td>Rp{{ session()->get('price') }} * {{ session()->get('duration') }} Days</td>
				</tr>

				<tr class="total">
					<td></td>

					<td>Total: Rp{{ session()->get('totprice') }}</td>
				</tr>
			</table>
		</div>
        <h3>You can pick up your order from our office in {{ session()->get('city') }} on {{ session()->get('pickupdate') }} at working hours ( 8.00AM - 19.00PM ) and don't forget to bring your identity card</h3>
        <h3>Regards, Rental Laptop Jakarta.</h3>
	
    </body>
</html>