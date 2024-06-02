<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add item</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet"
href="https://unpkg.com/purecss@1.0.0/build/pure-min.css"
integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w"
crossorigin="anonymous">
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
margin-top: 11%;
}
    </style>
</head>
<body>
    <div class="container">

        <label for="pet-select">Catogry Selector</label>
<form  id="sub1"  enctype="multipart/form-data">
    @csrf



 <select name="dress" id="dress1" class="active">
    <option >--Please choose an option--</option>
    @foreach ($items as $item)
    <option class="takeid"   value="{{$item->id}}">{{$item->dresses}}</option>
    @endforeach
</select>

        <div class="pure-form pure-form-aligned">
            <fieldset>
                <div class="pure-control-group">
    <div>
        <label for=products>Products</label>
        <input type="text" name="products" id="product1">
    </div>
    <div>
        <label for=brand>brand</label>
        <input type="text" name="brand" id="brand1">
    </div>
    <div>
        <label for=product_name>Product Name</label>
        <input type="text" name="pname" id="Pname">
    </div>
    <div>
        <label for=product_desc>Product discription</label>
        <input type="text" name="productdiscription" id="Pdis">
    </div>
    <div>
        <label for=price>price</label>
        <input type="text" name="price" id="Price">
    </div>
    <div>
        <label for=color>color</label>
        <input type="text" name="color" id="color">
    </div>
    <div>
        <label for=discount>discount</label>
        <input type="text" name="discount" id="discount">
    </div>
    <div>
     <label for="myfile">Select files:</label>
    <input type="file" id="image" value="" name="image" ><br><br>
  {{-- <input type="submit"> --}}
    </div>
    {{-- <button type="submit" id="sub1">SUBMIT</button> --}}
    <input type="submit" value="submit" >
 </div>
</div>
</form>
    </div>

        <script>
           $("#sub1").submit(function(e){
               e.preventDefault();
               //  var product =  $('#product1').val();
               var item=$("#dress1").val()
               console.log(item);
    // console.log(item)
    // var brand = $('#brand1').val();
    // var pname = $('#Pname').val();
    // var productdiscription =  $('#Pdis').val();
    // var price =  $('#Price').val();
    // var color = $('#color').val();
    // var discount  = $('#discount').val();
    // var image     = $('#myfile').val();
    // var wishlist  = $('#wishlist').val();
    // let formData=$("#forms-data").serialize();
         let formData=new FormData(this);
    //   console.log(id)
               $.ajax({
                processData:false,
                contentType:false,
                url:'/additemss',
                type:'post',
                // data:{
                //     "item":item,
                    // "product":product,
                //     // "brand":brand,
                //     // "pname":pname,
                //     // "productdiscription":productdiscription,
                //     // "price":price,
                //     // "color":color,
                //     // "discount":discount,
                //     // "image":image,
                //     // "wishlist":wishlist,
                //     'data':formData,
                //     _token:'{{csrf_token()}}'
                // },
                data:formData,
                success:function(){

                }
               })




            })
            </script>
</body>
</html>
