<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>

body 
{
    margin:  0 auto;
    background-image: URL("css/image/pic-3.jpg")  ;
    background-repeat: no-repeat;
    background-size: 100% 720px;

}


.container
{
width: 425px;
height: 350px;
text-align: center;
background-color: rgba(240,248,255, 0.4);
border-radius: 4px;
margin: 0 auto;
margin-top: 150px;
background-color: #4CAF50;
}

.container img 
{
width: 220px;
height: 220px;
margin-top: -100px;
margin-bottom: 30px;  
}

.container input[type="text"],input[type="password"] 
{
height: 45px;
width: 300px;
font-size: 18px;
margin-bottom: 30px;
margin-top: -20px;
padding-left: 30px; 
padding-right: 60px;
background-color: #ffffff;
}

.container span
{
font-size: 35px;
color: #778899;
margin-top: -20px;
background-color: #ffffff;
}

.container button 
{
height: 35px;
margin-top: -20px;
color: #0000ff;
background-color: #ffffff;
}

.container a 
{
margin-right: 30px; 
}

</style>
<div class="container">


<img alt="error" src="{{ URL:: asset('css/image/user.png')  }}">
  
  <fm:form class="form-horizontal" action="login">

    <div class="form-group">

      <label class="control-label col-sm-2" for="email"><span class="glyphicon glyphicon-user"></span></label>
              <div class="col-sm-7">
                    <form id="login" method="post" action={{ URL::to('loginstore')}}>
   {{csrf_field()}}
        <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" >
      </div>
    </div>
    <form id="login" method="post" action={{ URL::to('loginstore')}}>
   {{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2" for="password"><span class="glyphicon glyphicon-briefcase"></span></label>
      <div class="col-sm-7">          
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
      </div>
    </div>
<!--         <div class="form-group">
      <label class="control-label col-sm-2" for="role"><span class="glyphicon glyphicon-briefcase"></span></label>
      <div class="col-sm-7">          
        <input type="role" class="form-control" id="role" placeholder="Enter role" name="role">
      </div>
    </div> -->

    <div class="form-group">        
      <div class="col-sm-offset-4 col-sm-4">
        <button type="submit" class="btn btn-default">Login
        </button>
      </div>
    </div>
    
    <div class="form-group">
    <div class="col-sm-offset-4 col-sm-5">
    

<!--     <a href="#">Forget Password?</a> -->
    </div>
    </div>


