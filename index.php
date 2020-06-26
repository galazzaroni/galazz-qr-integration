<!--

IMPORTANTE: Ingresa aquí, sustituyendo este texto, tu DNI/RUT o identificador de tu carnet sin puntos, guiones ni espacios. Sí pueden ir números y letras juntos.

-->
<html>
	<head>
		<title>POINT OF SALE | ACME (Exam)</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="assets/style/acme.css">

	</head>
	<body>
		<div>
			<img width="100px" style="display:inline;" src="https://pbs.twimg.com/profile_images/1240629438397722628/qmOFm9ar_400x400.jpg">
			<h1>POINT OF SALE | ACME</h1>
			<span>Mercado Pago inStore QR Seller. Attended Mode. Exam version 1.0</span>
		</div>
		<br/>

		<div id="accordion">

		<!-- Create New Store -->

		  <div class="card">
		    <div class="card-header" id="headingOne">
		      <h5 class="mb-0">
		        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		          CREATE NEW STORE
		        </button>
		      </h5>
		    </div>

		    <div id="collapseOne" class="collapse collapsed" aria-labelledby="headingOne" data-parent="#accordion">
		      <div class="card-body">
		      		<table class="table table-striped">
						<tbody>
					<tr>
		      			<th><label for="storeName">Store Name:</label></th>
		      			<td><input type="text" placeholder="Store name" id="storeName" value="Sucursal 28089332"></td>
		      		</tr>
		      		<tr><th>
		      		<label for="streetName">Street Name:</label></th><td><input type="text" placeholder="Street name" id="streetName" value="Sinclair"></td></tr>
		      		<tr><th><label for="streetNumber">Street Number:</label></th><td><input type="text" placeholder="Street Number" id="streetNumber" value="2929"></td></tr>
		      		<tr><th><label for="country">Country:</label></th><td><select class="form-control" id="country">
				    </select></td></tr>
		      		<tr><th><label for="states">State:</label></th><td><select class="form-control" id="states">
				      <option>Select region...</option>
				    </select></td></tr>
				    <tr><th><label for="cities">City:</label></th><td><select class="form-control" id="cities">
				      <option>Select city...</option>
				    </select></td></tr>
				    <tr><th><label for="latitude">Latitude:</label></th><td><input type="text" placeholder="Latitude" id="latitude" value="-34.5756022"></td></tr>
				    <tr><th><label for="longitude">Longitude:</label></th><td><input type="text" placeholder="Longitude" id="longitude" value="-58.4249225"></td></tr>
				    <tr><th><label for="addressReference">Address Reference:</label></th><td><input type="text" placeholder="Address Reference" id="addressReference" value="Piso 1"></td></tr>
				    <tr><th><label for="externalStoreID">External Store ID:</label></th><td><input type="text" placeholder="External ID" id="externalStoreID" value="suc28089332001"></td></tr>
						</tbody>
					</table>

					<button type="button" class="btn btn-primary" id="createStore">
					  Create Store
					</button> 
					<br/><br/>
					Q1) Store creation response:<br/>
					<pre style="white-space: pre-wrap;">{"id":"32221112","name":"Sucursal 28089332","date_creation":"2020-06-26T02:27:50.859Z","location":{"address_line":"Sinclair 2929, Palermo, Capital Federal, Argentina","reference":"Piso 1","latitude":-34.5756022,"longitude":-58.4249225},"external_id":"suc28089332001"}</pre>
					<textarea id="responseStore">
					
					</textarea>
					<br/>
		      </div>
		    </div>
		  </div>

		<!-- Create New POS/QR -->

		  <div class="card">
		    <div class="card-header" id="headingTwo">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		          CREATE NEW POS/QR
		        </button>
		      </h5>
		    </div>
		    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
		      <div class="card-body">
		      		<label for="posName">POS Name:</label><input type="text" placeholder="POS Name" id="posName" value="POS 28089332"><br/>
		      		<label for="externalStoreIDPOS">External Store ID:</label><input type="text" placeholder="External Store ID" id="externalStoreIDPOS" value="suc28089332001"><br/>
		      		<label for="externalPOSID">External POS ID:</label><input type="text" placeholder="External ID" id="externalPOSID" value="pos28089332001"><br/>
					<br/>
					<button type="button" class="btn btn-primary" id="createPOS">
					  Create POS/QR
					</button> 
					<br/><br/>
					Q2) POS creation response:<br/>
					<pre style="white-space: pre-wrap;">
					{"id":10172654,"qr":{"image":"https://www.mercadopago.com/instore/merchant/qr/10172654/9d89a0fc275b4a6eaa5a9c6b1d5d55bf97a0d17dd92f403a85c0612dfe800349.png","template_document":"https://www.mercadopago.com/instore/merchant/qr/10172654/template_9d89a0fc275b4a6eaa5a9c6b1d5d55bf97a0d17dd92f403a85c0612dfe800349.pdf","template_image":"https://www.mercadopago.com/instore/merchant/qr/10172654/template_9d89a0fc275b4a6eaa5a9c6b1d5d55bf97a0d17dd92f403a85c0612dfe800349.png"},"status":"active","date_created":"2020-06-25T22:42:22.000-04:00","date_last_updated":"2020-06-25T22:42:22.000-04:00","uuid":"9d89a0fc275b4a6eaa5a9c6b1d5d55bf97a0d17dd92f403a85c0612dfe800349","user_id":586728271,"name":"Sucursal 28089332","fixed_amount":true,"category":621102,"store_id":"32221112","external_store_id":"suc28089332001","external_id":"pos28089332001"}
					</pre>
					<textarea id="responsePOS"></textarea>
					<br/>
		      </div>
		    </div>
		  </div>

		<!-- Order and payment -->

		   <div class="card">
		    <div class="card-header" id="headingThree">
		      <h5 class="mb-0">
		        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		          ORDER AND PAYMENT
		        </button>
		      </h5>
		    </div>
		    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
		      <div class="card-body">

					<label for="store_id">Store_ID:</label><input type="text" id="store_id" placeholder="Store_ID">
					<label for="external_id">External_POS_ID:</label><input type="text" id="external_id" placeholder="External_ID">
					<label for="external_reference">External_Reference:</label><input type="text" id="external_reference" placeholder="External_Reference">
					<br/>
					<div class=""><h3>Order:<h3></div>
					<br/>	
					<div class="">
						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">SKU</th>
						      <th scope="col">Photo</th>
						      <th scope="col">Product</th>
						      <th scope="col">Quantity</th>
						      <th scope="col">Price</th>
						      <th scope="col">Total</th>
						    </tr>
						  </thead>
						  <tbody id="productList">
						  </tbody>
						</table>

					</div>
					<div id="paymentMethods" class=""></div>
					<div id="paymentStatusView" class=""></div>
					

					<!-- Button trigger modal -->
					<center>
					<span>Payment Method: </span>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-option="Cash">
					  Cash
					</button> 
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-option="Mercado Pago">
					  Mercado Pago - QR
					</button>
					<br/>
					<br/>
					Q3) Preference:<br/><textarea id="createdOrder"></textarea><br/>
					Q4) Rejected payment:<br/><textarea id="paymentStatusRejected"></textarea><br/>
					Q5) Payment Closed Status via Notification:<br/><textarea id="paymentStatusNotification"></textarea><br/>
					Q6) Payment Closed Status via Search:<br/><textarea id="paymentStatusSearch"></textarea><br/>
					</center>


		      </div>
		    </div>
		  </div>
		  </div>
		</div>
		<br/><br/>
		
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Pay with Mercado Pago</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		        
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-primary">Cancel Payment</button>
		      </div>
		    </div>
		  </div>
		</div>


	</body>
	
	<!-- Main APP -->
	<script src="assets/js/acme.js"></script>

    <audio id="cash">
        <source src="assets/sounds/cash.mp3" type="audio/mpeg">
    </audio>
</html>
