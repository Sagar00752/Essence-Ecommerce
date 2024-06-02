
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $.ajax({
        url:"/displaydata",
        type:"Post",
        data:{
            _token:'{{csrf_token()}}'
        },
        success:function(response){
            var cart=response.cart;
            console.log(cart);
            var html="";
            $(cart).each(function(i,e){

                //console.log(value)
                html+=
                '<div class="single-cart-item">'+
                    '<a href="#" class="product-image">'+
                        '<img src="img/'+e.image+'" class="cart-thumb" alt="">'+
                        '<div class="cart-item-desc">'+
                          '<span class="product-remove" data-id='+e.id+'><i class="fa fa-close cartdel"  aria-hidden="true"></i></span>'+
                            '<span class="badge">'+e.brand+'</span>'+
                            '<h6>Button Through Strap Mini Dress</h6>'+
                            '<p class="color">'+e.color+'</p>'+
                            '<p class="price">'+e.price+'</p>'+
                        '</div>'+
                    '</a>'+
                '</div>';



            });


            $('.cart-list').html(html);
            $('.cartcount').html(response.count)


        }
})
})

$("body").on("click",".clscartbtn",function(){
    var size=prompt("enter size");
    var quantity=prompt("enetr quantity")
  var cartid = $(this).attr('data-id');

var total_discount=0;
var total_price=0;
    // console.log(cartid);
    $.ajax({
        url:"/getcart",
        type:"Post",
        data:{
            "cartid":cartid,
            "size":size,
            "quantity":quantity,
            _token:'{{csrf_token()}}'
        },
        success:function(response){
            var cart=response.cart;
            var c_sum=response.c_sum;
            var discount=response.discount
            console.log(cart);
            var html="";
            $(cart).each(function(i,e){

                //console.log(value)
                html+=
                '<div class="single-cart-item">'+
                    '<a href="#" class="product-image">'+
                        '<img src="img/'+e.image+'" class="cart-thumb" alt="">'+
                        '<div class="cart-item-desc">'+
                          '<span class="product-remove" data-id='+e.id+'><i class="fa fa-close cartdel"  aria-hidden="true"></i></span>'+
                            '<span class="badge">'+e.brand+'</span>'+
                            '<h6>Button Through Strap Mini Dress</h6>'+
                            '<p class="color">'+e.color+'</p>'+
                            '<p class="price">'+e.price+'</p>'+
                        '</div>'+
                    '</a>'+
                '</div>';

            });


            $('.cart-list').html(html);
            if(discount==0){
                $discount.html(0);
            }else {
            $(cart).each(function(i,e){
                dis=e.discount;
                pis=e.price;

                total_discount=parseInt(total_discount)+(parseInt(dis));
                total_price=parseInt(total_price)+(pis);
                final_discount=parseFloat(total_price)*(parseFloat(total_discount/100));
                afterdiscount=(total_price)-(final_discount);

            })
            $('.cartsum').html(total_price);
            $('.discount').html(final_discount);
            $('.totalprice').html(afterdiscount);
        }
    }
    })
})
</script>
