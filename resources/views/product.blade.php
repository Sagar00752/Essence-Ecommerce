<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="predct1">
            <label for=product id="sop"><b>Add Product</b></label>
            <input type=text id="prcd1">
        </div><button id="sub1">Submit</button>
        </div>

<style>
    body{
        background-image: url('https://images.unsplash.com/photo-1441986300917-64674bd600d8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80')
    }
    .container{
        width: 30%;
    background-color: rgba(230, 221, 221, 0.384);
    padding: 30px;
    align-content: center;
    margin-left: 30%;
    margin-top: 20%;
    }
    #sop{
        font-size: 20px;
    }
    </style>
    <script>
        $('#sub1').click(function(){
       var product = $('#prcd1').val();
            $.ajax({
                url:"/addproduct",
                type:"post",
                data:{
                    "product1":product,
                    _token:'{{csrf_token()}}'
                },
                success:function(response){}

            })
            window.location.href="/additem";
        })
    </script>
</body>
</html>
