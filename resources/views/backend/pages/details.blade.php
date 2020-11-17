<!DOCTYPE html>
<html lang="en">

  <!-- <head>
      <tittle>Pharmacy Management System</tittle>
  </head> -->
  <style>
      body{
    margin:  0 auto;
    background-image: URL("css/image/pic-1.jpg")  ;
    background-repeat: no-repeat;
    background-size: 100% 720px;


      }
header{

    background: black;
    color: white;
    padding: 8px 0px 6px 40px;
    height: 45px;


}
.divider{

    background-color: red;
    height: 10px;
}
 .nav li a{
    background: black;
    color: white;
    padding: 8px 0px 6px 40px;
    height: 45px;


 }
 .container
{
width: 425px;
height: 350px;
text-align: center;
background-color: rgba(240,248,255, 0.4);
border-radius: 433px;
margin-top: 150px;
background-color: white;
}
.form-control {
    display: block;
    width: 20%;
    height: 30px;
    padding: 6px 10px 6px 40px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff
}


  </style>
  <body>
      <header>
          <nav>
              <h1>Pharmacy Management System</h1>

          </nav>
      </header>

  <div class="divider"> </div>
</tbody>
<center>
	<div class="jumbotron">
  <div class="table-responsive">   
  <table class="table">
  </div>
     <div class="col-md-100">
  <h3 style="text-align: center"> <small>  <strong>Pharmacy List</strong></small></h3>
</div>
<!-- <div class="container"> -->
<!-- 	<h1>Product details</h1>
	<table class="table table-strippped"> -->
		
	
		<tr>		
			<th>Pharmcy name </th>
			<th>Product name </th>
			<th>category name </th>
			<th>brand name </th>
			
			<th>price </th>
			<th>quentity </th>
</tr>

	

	     <tr>
                      @foreach($data as $d)
                                 <td>{{$d->ph_name}}</td>
                                 <td>{{$d->p_name}}</td>
                                 <td>{{$d->Category_id}}</td>
                                 <td>{{$d->brand}}</td>
                                 <td>{{$d->selling_price}}</td>
                                 <td>{{$d->quantity}}</td>
                      
              </tr>

</center>

                       @endforeach
                       </table>
</div>
</tbody>
  </body>
  </html>