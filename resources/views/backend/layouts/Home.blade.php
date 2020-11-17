<!DOCTYPE html>
<html lang="en">

  <!-- <head>
      <tittle>Pharmacy Management System</tittle>
  </head> -->
  <style>
      body{
    margin:auto;
    background-image: URL("css/image/pic-2.jpg")  ;
    background-repeat: no-repeat;
    background-size: 100% 720px;


      }
header{

    background: black;
    color: white;
    padding: 8px 100px 6px 40px;
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
border-radius: 40px;
margin: 0 auto;
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
<!-- <div class="container"> -->
    <div class="md-form col-8 offset-2">
       <center>
 

  
        <h3 style="text-align: : center">  <strong></strong></h3>
      
           


          <form action="{{URL::to('/search')}}" method="get" role="search">
            {{ csrf_field()  }}
            <div class="input-group" style="margin-top:40px">

                <input type="text" class="form-control" name="c_name" placeholder="search district">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary " style="margin-top:12px" >  Search             </button>
                <span class="glyphicon glyphicon-search"></span>
               </button>
           </span>
              </div>

          </form>
            </div>

</div>     

</center>





  </body>
  </html>