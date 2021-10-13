$(document).ready(function(){
   var base_url=$('#base_url').val();
//    alert(base_url);
  $.ajax({
      url:base_url+'Home/selectcategory',
      method:"POST",
      data:{},
      success:function(data){
          var obj=$.parseJSON(data);
          var div = '<option value="">Select Category</option>';
          $.each(obj,function(index,value){
            div +='<option value="'+obj[index].partner_category_id +'">'+obj[index].partner_category_name+'</option>';
          })
          
          $('#partner_category_id').html(div);
      }
  })
//   $('#partner_category_id').on('chanage',function(){
//       alert('sdfsad');
//   })
$('#partner_category_id').on('change', function () {

    var selectId = $("#partner_category_id option:selected").val();
    $.ajax({
        url:base_url+'Home/select_main_category',
        method:'post',
        data:{category_id:selectId},
        success:function(data){
         var obj=$.parseJSON(data);
         var div = '<option value="">Select Main Category</option>';
         $.each(obj,function(index,value){
            div +='<option value="'+obj[index].pantryo_main_category_id  +'">'+obj[index].pantryo_main_category_name+'</option>';
         })

         $('#pantryo_main_category_id').html(div);
        }
    })
});
$('#editinventorydata').on('click',function(){
    $.ajax({
        url:base_url+'Home/selectcategory',
        method:"POST",
        data:{},
        success:function(data){
            var obj=$.parseJSON(data);
           
            $.each(obj,function(index,value){
              div +='<option value="'+obj[index].partner_category_id +'">'+obj[index].partner_category_name+'</option>';
            })
            
            $('#editinventorydatashow').html(div);
        }
    })
})

}); 