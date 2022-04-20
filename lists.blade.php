<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UCF-8">
        <meta name="viewport" content=" width=device width, initial-scale=1.0">
        <title>Table </title>
        <style>
            h1{
                font-size: 30px;
                color: #fff;
                text-transform: uppercase;
                font-weight: 300;
                text-align: center;
                margin-top: 180px;

            }

            .btn-add{
                margin-left: 70%;
                width: 90px;
                height: 30px;
                background-color:#37cbd8;
                color: white;
                
                position:absolute;
                top:190px;
            }

            
            .btn1{
                width: 90px;
                height: 30px;
                color: white;
                cursor: pointer;        
                background: transparent;
                border: 3px solid #91C9FF;
                border-radius: 3px;
                outline: none;               
                background-color: #6ADB53;
                }

                .btn2{
                width: 90px;
                height: 30px;
                color: white;
                cursor: pointer;
                background: transparent;
                border: 3px solid #91C9FF;
                border-radius: 3px;
                outline: none; 
                background-color: #e23838;
                }
            



            body {
                height: 100%;
            }

            body {
                margin: 0;
                background: linear-gradient(45deg, #49a09d, #5f2c82);
                font-family: sans-serif;
                font-weight: 100;
            }

            .container {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }

            table {
                width: 800px;
                border-collapse: collapse;
                overflow: hidden;
                box-shadow: 0 0 20px rgba(0,0,0,0.1);
            }

            
            th,td {
                padding: 15px;
                background-color: rgba(255,255,255,0.2);
                color: #fff;
            }

            th {
                text-align: left;
            }

            thead {
                
                    background-color: #55608f;
                }
            }

            
	td {
		position: relative;
		
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255, 255, 255, 0.2);
				z-index: -1;
			}
		}
	}
}

</style>
    </head>
    <body>
        
        <h1>Users</h1>
        <a href = "addcustomer" >
            <button class = "btn-add">Add</button>
        </a>
        <div class = "container">
            <table class = "table" border="1" >
                <thead>
                <tr> 
                        <th> <font face="Arial">ID</font> </th> 
                        <th> <font face="Arial">Name</font> </th> 
                        <th> <font face="Arial">Email</font> </th> 
                        <th> <font face="Arial">Phone</font> </th> 
                        <th> <font face="Arial"> </font> </th> 
                        <th> <font face="Arial"> </font> </th> 
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer['id']}}</td>
                        <td>{{$customer['name']}}</td>
                        <td>{{$customer['email']}}</td>
                        <td>{{$customer['phone']}}</td>
                        
                        <td>
                            
                                <a href = "edit/{{$customer -> id}}"class = "btn-success">
                                    <button class= btn1 >Edit</button>
                                </a>  
                            
                        </td>
                        <td>      
                              
                                <a href = "delete/{{$customer -> id}}"class = "btn-delete">
                                    <button class= btn2>Delete</button>
                                </a>
                            </div>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </body>
</html>
        