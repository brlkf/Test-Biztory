<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UCF-8">
        <meta name="viewport" content=" width=device width, initial-scale=1.0">
        <title>Edit </title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
  margin:0;
font-family: 'Open Sans', sans-serif;
background-color: #CBB6B6;
}

.section {
  margin-bottom: 15px;
  width:100%;
  float:left;
  }
  
.form-group{
    justify-content: center;
}




.form {
float: left;
width:100%;
padding: 13px;
margin-bottom: 20px;
}

/* Box Style */
* {
box-sizing: border-box;
}

/* Add padding to containers */
.container {
padding: 16px;

width:800px;
margin:0 auto;
}


}

/* Full-width input fields */
input[type=text], input[type=email], input[type=phone],  select {
width: 60%;
padding: 50px;
margin: 5px 0 22px 0;
display: inline-block;
font-size:15pt;
justify-content: center
}

input[type=text]:focus {
background-color: #ddd;
outline: none;
}

input[type='radio'] { 
transform: scale(2); 
}

/* Overwrite default styles of hr */
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}

/* Set a style for the submit button */
.btn {
background-color: #555555;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 49%;
opacity: 0.9;
display: inline;
}

.btn:hover {
opacity: 1;
}

.button {
    background-color: #e7e7e7;
    color: black;
    border: 2px solid #e7e7e7;
    padding: 8px 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 14px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius:7px;
}

.button:hover {
    background-color: white;
}


    


</style>
    </head>
    <body>
        @if(Session::get('success'))
        <div class = "alert alert-success">
            {{Session::get('success')}}
        </div>
        @endif

        @if(Session::get('fail'))
        <div class = "alert alert-danger">
            {{Session::get('fail')}}
        </div>
        @endif
    

        <form action="{{route('update')}}" method="post">           
            <input type="hidden"  name = "cid" value="{{$Info->id}}" >
            
            @csrf
                <div class = "container">
                    <div class = "title" style="margin-top: 5%;">
                        <h1> Edit Users</h1>
                    </div>

                    <div class = "form-group">
                        <label>Name</label>
                        <input type="text" class="form" name="name" placeholder="Enter customer name" required value = "{{$Info->name}}">
                        
                    </div>

                    <div class = "form-group">
                        <label>Email</label>
                        <input type="email" class="form" name="email" placeholder="Enter customer email" required value = "{{$Info->email}}">
                        
                    </div>

                    <div class = "form-group">
                        <label>Phone</label>
                        <input type="phone" class="form" name="phone" placeholder="Enter customer phone" required value = "{{$Info->phone}}">
                    
                    </div>
                
                    <input type="submit" class="btn btn-success " name="Submit" placeholder="Add Data" required>
                </div>
             
        </form>
    </body>
</html>
            