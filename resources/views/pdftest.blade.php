<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/jquery-te-1.4.0.css" rel="stylesheet">
  <link href="css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .modal-body table {
  background-color: #fff;
  padding: 10px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
}

.modal-body table h3 {
  text-align: center;
}


/*===================*/
/*PUBLIC VIEW CSS START*/

/*----------------------------*\
	Logo
\*----------------------------*/

#header {
  padding-top: 15px;
  padding-bottom: 15px;
}

#header .logo {
  font-size: 30px;
  margin: 0;
}

#header .logo-img {
  display: block;
}

#header .logo-img img {
  width: 100%;
}

#header .search {
  margin: 0 auto;
}

#header .search .form-control {
  border: none;
  background-color: #f5f5f5;
  padding: 22px 10px;
  border-radius: 20px 0 0 20px;
}

#header .search .form-control:focus {
  box-shadow: none;
  border: none;
}

#header .search .btn {
  color: #fff;
  background-color: #df3500;
  font-size: 20px;
  padding: 8px 12px 7.5px;
  border: none;
  border-radius: 0 20px 20px 0;
  transition: all 0.3s ease;
}

#header .search .btn:hover {
  box-shadow: 0 0 3px #333 inset;
}

#header .header-info {
  padding: 10px 0;
  text-align: right;
}

#header .header-info li {
  display: inline-block;
  margin-right: 15px;
}

#header .header-info li:last-child {
  margin: 0;
}

#header .header-info li a {
  font-size: 16px;
  color: #666;
  text-transform: capitalize;
  border-radius: 10px;
  position: relative;
  transition: all 0.3s;
}

#header .header-info li a i {
  font-size: 20px;
}

#header .header-info li a:hover {
  color: #df3500;
}

#header .header-info li a span {
  color: #fff;
  background-color: #DF3500;
  font-size: 13px;
  font-weight: 600;
  text-align: center;
  line-height: 18px;
  height: 18px;
  width: 18px;
  border-radius: 50%;
  position: absolute;
  top: -12px;
  right: 0;
}

#header .header-info li i.fa {
  margin: 0 5px;
}

/*header menu CSS*/
/*=============================*/

#header-menu .menu-list {
  background-color: #df3500;
  padding: 8px 15px;
  margin: 0 -15px;
  text-align: center;
}

#header-menu .menu-list li {
  display: inline-block;
}

#header-menu .menu-list li a {
  color: #fff;
  background-color: rgba(255, 255, 255, 0.1);
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  padding: 8px 15px;
  margin: 0 15px 0 0;
  border-radius: 10px;
  display: block;
  transition: all 0.3s;
}

#header-menu .menu-list li a:hover {
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

/* Customer-login form css */
/* ==================================== */

.modal-body {
  padding: 50px 50px;
  background: linear-gradient(30deg, #e9e9e9 49%, #e4e4e4 50%);
  box-shadow: 0 0 20px -10px rgba(0, 0, 0, 0.5);
}

.customer_login {
  text-align: center;
}

.customer_login h2 {
  font-size: 35px;
  font-weight: 700;
  color: #444;
  text-transform: uppercase;
  margin: 0 0 30px 0;
}

.customer_login label {
  width: 25%;
  display: inline-block;
}

.customer_login .form-control {
  width: 74%;
  display: inline-block;
  border: none;
  padding: 15px 15px;
  height: 50px;
  border-radius: 20px;
}

.customer_login .form-control:focus {
  border: none;
  box-shadow: 3px 3px 5px #999;
}

.customer_login .form-control::placeholder {
  color: #999;
  text-transform: capitalize;
}

.customer_login .btn {
  width: 50%;
  padding: 7px 15px;
  font-size: 20px;
  font-weight: 600;
  text-transform: capitalize;
  color: #fff;
  background-color: #e93700;
  border-radius: 20px;
  margin: 0 0 20px;
  transition: all 0.3s;
}

.customer_login .btn:hover,
.customer_login .btn:focus {
  background-color: #333;
}

.customer_login span {
  display: block;
  color: #000;
}

.customer_login span a {
  color: #e93700;
  transition: all 0.3s ease 0s;
}

.customer_login span a:hover {
  color: #000;
}

/*----------------------------*\
	/Customer-login form css
\*----------------------------*/



/* Register form css */
/* ==================================== */

.signup_form {
  text-align: center;
  padding: 30px 30px;
  background: linear-gradient(30deg, #e9e9e9 49%, #e4e4e4 50%);
  box-shadow: 0 0 20px -10px rgba(0, 0, 0, 0.5);
}

.signup_form h2 {
  font-size: 35px;
  font-weight: 700;
  color: #444;
  text-transform: uppercase;
  margin: 0 0 30px 0;
}

.signup_form label {
  width: 25%;
  text-align: left;
  display: inline-block;
}

.signup_form .form-control {
  width: 74%;
  display: inline-block;
  border: none;
  padding: 15px 15px;
  height: 50px;
  border-radius: 20px;
}

.signup_form .form-control:focus {
  border: none;
  box-shadow: 3px 3px 5px #999;
}

.signup_form .form-control::placeholder {
  color: #999;
  text-transform: capitalize;
}

.signup_form .btn {
  width: 50%;
  padding: 7px 15px;
  font-size: 20px;
  font-weight: 600;
  text-transform: capitalize;
  color: #fff;
  background-color: #e93700;
  border-radius: 20px;
  transition: all 0.3s;
}

.signup_form .btn:hover,
.signup_form .btn:focus {
  background-color: #333;
}

/*----------------------------*\
	/Register form css
\*----------------------------*/

/*----------------------------*\
	Banner
\*----------------------------*/

#banner {
  color: #fff;
}



#banner .banner-content {
  margin: 0 -15px;
  height: 400px;
  overflow: hidden;
}


/*----------------------------*\
	/Banner
\*----------------------------*/


/*----------------------------*\
	Products Section
\*----------------------------*/

.product-section {
  padding: 30px 0;
}

.product-section.content {
  min-height: 700px;
}

.product-section.popular-products {
  background-color: rgba(0, 0, 0, 0.02);
}

.section-head {
  text-align: center;
  color: #444;
  font-size: 28px;
  font-weight: 400;
  text-transform: capitalize;
  margin: 0 0 30px;
}

.section-head:after {
  content: '';
  display: block;
  clear: both;
  width: 150px;
  height: 2px;
  border-top: 2px dashed #e7e7e7;
  margin: 10px auto 0;
}

.product-section .product-grid {
  text-align: center;
  margin: 0 15px 30px;
}

.product-section .product-grid.popular {
  margin: 0;
}

.product-grid .product-image {
  background-color: #fff;
  position: relative;
  overflow: hidden;
  border-radius: 10px;
  height: 260px;
}

.product-grid .product-image.latest {
  height: 330px;
}

.product-grid .product-image.popular {
  height: 250px;
}

.product-grid .product-image a.image {
  display: block;
}

.product-grid .product-image img {
  width: auto;
  height: 100%;
  transform: translateX(-50%) translateY(-50%);
  position: absolute;
  left: 50%;
  top: 50%;
}

.owl-carousel .owl-theme img {
  width: auto !important;
}

.product-grid .product-button-group {
  font-size: 0;
  width: 140px;
  transform: translateX(-50%) translateY(-50%);
  position: absolute;
  left: 50%;
  top: 50%;
}

.product-grid .product-button-group a {
  display: inline-block;
  width: 35px;
  height: 35px;
  line-height: 35px;
  font-size: 16px;
  font-weight: 500;
  text-transform: capitalize;
  margin: 0 4px;
  border-radius: 50%;
  color: #df3500;
  background-color: #fff;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);
  transform: scale(0);
  transition: all 0.3s;
}

.product-grid .product-button-group a:hover {
  color: #fff;
  background-color: #df3500;
  text-shadow: 0 0 2px #333;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.5) inset;
}

.product-grid:hover .product-button-group a {
  transform: scale(1);
}

.product-grid .product-content {
  padding: 12px;
}

.product-grid .title {
  font-size: 14px;
  font-weight: 600;
  display: block;
  margin: 0 0 5px;
  text-transform: capitalize;
}

.product-grid .title a {
  color: #555;
}

.product-grid .title a:hover {
  color: #df3500;
}

.product-grid .price {
  font-size: 16px;
  color: #555;
  font-weight: 500;
  margin: 0 2px;
}


/*----------------------------*\
	/Products
\*----------------------------*/

/*----------------------------*\
	Product Page
\*----------------------------*/



.product-details {
  font-family: 'Montserrat', sans-serif;
}

.product-details h3 {
  font-size: 25px;
  color: #2B2D42;
  font-weight: 700;
  text-transform: uppercase;
  margin: 0 0 10px;
}

.product-details .product-price {
  display: block;
  font-size: 24px;
  font-weight: 700;
  color: #D10024;
  display: inline-block;
  margin: 0 15px 10px 0;
}

.product-details .product-price span {
  color: #8e8e8e;
  margin-right: 5px;
  font-size: 20px;
  font-weight: 400;
  text-decoration: line-through;
}

.product-details .product-available {
  font-size: 12px;
  text-transform: uppercase;
  font-weight: 700;
  color: #D10024;
}

.product-details .description {
  font-size: 15px;
  font-weight: 400;
  color: #333;
  margin: 0 0 20px 0;
}

.product-details .qut-label {
  display: inline-block;
  margin-right: 30px;
}

.product-details .qut-label span {
  display: inline-block;
  font-weight: 700;
  font-size: 12px;
  text-transform: uppercase;
  margin-right: 15px;
  margin-bottom: 0px;
}

.product-details .product-btn {
  border: 2px solid transparent;
  padding: 12px 30px;
  color: #fff;
  background: #ef233c;
  text-transform: uppercase;
  font-weight: 700;
  border-radius: 40px;
  position: relative;
  transition: 0.2s all;
}

.product-details .product-btn:hover {
  background-color: #fff;
  color: #D10024;
  border-color: #D10024;
}

.product-details .product-link li a {
  color: #D10024;
}

/*----------------------------*\
   /Product Page
\*----------------------------*/

/*----------------------------*\
   /Single Product Page Start
\*----------------------------*/

.single-product-container {
  padding: 25px 0;
  min-height: 700px;
}

.single-product-container .product-image {
  text-align: center;

}

.single-product-container .product-image img {
  width: 100%;
}

.single-product-container .product-content {}

.single-product-container .product-content .title {
  font-size: 25px;
  margin: 0 0 10px;
}

.single-product-container .product-content .price {
  font-size: 23px;
  margin: 0 0 5px;
}

.single-product-container .product-content .description {
  font-size: 15px;
  margin: 0 0 20px;
  letter-spacing: 0.5px;
}

.single-product-container .product-content a {
  font-size: 15px;
  font-weight: 600;
  margin: 0 10px 0 0;
  text-transform: uppercase;
  color: #fff;
  background-color: #df3500;
  padding: 7px 15px;
  display: inline-block;
  border: 3px solid #df3500;
  border-radius: 20px;
  transition: all 0.3s;
}

.single-product-container .product-content a:hover {
  background-color: #fff;
  color: #df3500;
}

/*----------------------------*/
/*Single Product Page End*/
/*----------------------------*/

/*----------------------------*/
/* Cart And Wishlist Page CSS Start */
/*----------------------------*/

.product-cart-container,
.product-wishlist-container {
  padding: 20px 0;
  min-height: 750px;
}


.empty-result {
  font-size: 16px;
  padding: 20px;
  text-align: center;
  background-color: rgba(0, 0, 0, 0.05);
  border-radius: 20px;
}

/*----------------------------*/
/* Cart And Wishlist Page CSS Start */
/*----------------------------*/


/*----------------------------*/
/* Left Sidebar CSS Start */
/*----------------------------*/

.left-sidebar {
  border: 1px solid rgba(0, 0, 0, 0.1);
  padding: 15px;
}

.left-sidebar h3 {
  font-size: 18px;
  padding: 0 0 7px;
  margin: 0 0 10px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}

.left-sidebar ul li a {
  color: #999;
  font-size: 15px;
  margin: 0 0 5px;
  display: inline-block;
  transition: all 0.3s;
}

.left-sidebar ul li a:hover {
  color: #555;
}

/*----------------------------*/
/* Left Sidebar CSS End */
/*----------------------------*/


/* user-profile form css */
/* ==================================== */

#user_profile-content {
  padding: 40px 0;
  min-height: 700px;
}


#user_profile-content table {
  width: 100%;
  background: #f3f3f3;
  padding: 20px 20px;
  border-radius: 10px 10px;
  margin: 0 0 30px;
}
  </style>
</head>
<body>
    <div class="admin-content-container">
        <h2 class="admin-heading">Income Monthly Details</h2>
        <div class="form-group category">
          {{$momth }} : {{$year}}
        </div>   
    
            <table border="1" id="productsTable" class="table table-striped table-hover table-bordered">
                <thead>
                    <tr></tr>
                </thead>
                  @php
                  // echo '<pre>'; print_r($yearWise);die;
                  @endphp                    

                <tbody>
                    @foreach($yearWise as $monthWise)  
                       @php
                        // echo '<pre>'; print_r($monthWise);die;
                       @endphp                    
                       @php
                         // echo '<pre>'; print_r($monthVal);die;
                           $month=$monthWise[0]['month'];
                           $Year=$monthWise[0]['getyear'];
                        //   die;
                        $key=1;
                       @endphp 
                        <thead>
                            <th>#</th> 
                            <th>Amount</th>
                            <th>Aount Type</th>
                            <th>Date</th>
                            <th>Description</th>
                        </thead>
                       @foreach ($monthWise as $monthDetail)
                            @php
                             // echo '<pre>'; print_r($monthDetail);die;
                            @endphp 
                            <tr>
                              <td><b>{{$key++}}</b></td>
                              <td>{{$monthDetail['amount']}}</td>
                              <td>{{$monthDetail['amounttype']}}</td>
                              <td>{{$monthDetail['date']}}/{{$monthDetail['month']}}/{{$monthDetail['getyear']}}</td>
                              <td>{{$monthDetail['Des']}}</td>
                            </tr>
                       @endforeach 
                       @php
                         $key=1;
                       @endphp                   
                    
                    @endforeach

                </tbody>
            </table>

    </div>
  
</body>
</html>