 function filterFunction() {
    var name=$('#myInputSearch').val();
    if (name.length>0){
        $.post(
                'search.php', 
                {name : $('#myInputSearch').val()}, 
                function(result){ 
                    $('#resultSearch').html(result);
                    showResult();
                }, 
                'text' 
        );
    }else hideResult();
} 
function showResult(){
     document.getElementById('resultSearch').style.display="block";
}
function hideResult(){
     document.getElementById('resultSearch').style.display="none";
    
}