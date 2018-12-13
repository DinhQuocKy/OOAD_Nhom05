function addCart(id,ten,check,cn,hinh){
    var soluong=1;
    if (!check) soluong=$('#amount').val();
    var kt=localStorage.getItem("ca-"+id);
    if (kt!=null){
        var t=JSON.parse(kt);
        soluong=parseInt(soluong)+parseInt(t.soluong);
    }
    var tmp={id:id,
            ten:ten,
            soluong:soluong,
            cn:cn,
            hinh:hinh
        };
    var cart=JSON.stringify(tmp);
    localStorage.setItem("ca-"+id,cart);
    alert("Thêm vào giỏ hàng thành công");
}
function showCart(){
    for (var i=0;i< localStorage.length;++i){
        var key=localStorage.key(i);
        if(key.charAt(0)=='c' && key.charAt(1)=='a'){
            var chinhNhanh;
            
            var product=JSON.parse(localStorage.getItem(key));
            if (product.cn=='CN001') chiNhanh="Chi nhánh 1";
            else chiNhanh="Chi nhánh 2";
            // alert(products[j].id);
            $("#cartList").append('<tr class="cart_item"><td class="product-remove"><a title="Xóa mục này" class="remove" href="#" id="'+key+'" onclick="deleteCart(this.id)"> <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></a></td><td class="product-thumbnail"><a href="single-product.html'+'?id='+product.id+'&cn='+product.cn +'"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="'+product.hinh+'"></a></td><td class="product-name"><a href="single-product.html'+"?id="+product.id+'&cn='+product.cn +'"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'+product.ten+'</font></font></a></td><td class="product-quantity"><div class="quantity buttons_added"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="button" class="minus" value="-"></font></font><input type="number" size="4" class="input-text qty text" title="Số lượng" value="'+product.soluong+'" min="0" step="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="button" class="plus" value="+"></font></font></div></td><td class="product-subtotal"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'+chiNhanh+'</font></font></span></td></tr>');
        }
    }
    $("#cartList").append('<tr><td class="actions" colspan="6"><div class="coupon"><label for="coupon_code"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phiếu mua hàng:</font></font></label><input type="text" placeholder="Mã phiếu mua hàng" value="" id="coupon_code" class="input-text" name="coupon_code"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Áp dụng" name="apply_coupon" class="button"></font></font></div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Cập nhật" name="update_cart" class="button"></font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" id="lapPhieu" value="Lập phiếu" name="proceed" class="checkout-button button alt wc-forward"></font></font></td></tr>');
}
// function showCart(){
//     for (var i=0;i< localStorage.length;++i){
//      var key=localStorage.key(i);
//         if(key.charAt(0)=='c' && key.charAt(1)=='a'){
//          var product=JSON.parse(localStorage.getItem(key));
//             // alert(products[j].id);
//             $("#cartList").append('<tr class="cart_item"><td class="product-remove"><a title="Xóa mục này" class="remove" href="#" id="'+key+'" onclick="deleteCart(this.id)"> <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></a></td><td class="product-thumbnail"><a href="single-product.html'+'?id='+product.id+'&cn='+product.cn +'"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="'+product.hinh+'"></a></td><td class="product-name"><a href="single-product.html'+"?id="+product.id+'&cn='+product.cn +'"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'+product.ten+'</font></font></a></td><td class="product-price"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'+"bỏ phần này"+'</font></font></span></td><td class="product-quantity"><div class="quantity buttons_added"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="button" class="minus" value="-"></font></font><input type="number" size="4" class="input-text qty text" title="Số lượng" value="'+product.soluong+'" min="0" step="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="button" class="plus" value="+"></font></font></div></td><td class="product-subtotal"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">'+'Bỏ phần này'+'</font></font></span></td></tr>');
//         }
//     }
//     $("#cartList").append('<tr><td class="actions" colspan="6"><div class="coupon"><label for="coupon_code"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phiếu mua hàng:</font></font></label><input type="text" placeholder="Mã phiếu mua hàng" value="" id="coupon_code" class="input-text" name="coupon_code"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Áp dụng" name="apply_coupon" class="button"></font></font></div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Cập nhật" name="update_cart" class="button"></font></font><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" value="Thanh toán" name="proceed" class="checkout-button button alt wc-forward"></font></font></td></tr>');
// }
function deleteCart(key){
    localStorage.removeItem(key);
    location.reload();
}