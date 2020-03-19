
<!DOCTYPE html>
<html>

<head>
    <title>crud-application</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'; ?>">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
        <!-- DATATABLE CDN -->
     <!--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
</head>

<body>
    <style>
     #namebox{
            width: 197px;
    margin-left: 8px;
    margin-bottom: 10px;
     }
    </style>
    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark">
            <a href="" class="navbar-brand">Update subject to faculty</a>
        </nav>

        <hr>
        <form method="post"  name="add_name" id="add_name" >
            <div class="form-group  col-sm-6">
             
               FACULTY NAME: <select id="droplist" name="select" class="form-group">
                <option  value="">select</option>
                   <?php if(count($user)):?>
                       <?php foreach($user as $usr):?>
                   

                    
                       
                            <option id="opn" value=<?php echo $usr->name?>><?php echo $usr->name?>
                                
                            </option>
                          <?php endforeach;?>
                          <?php else:?>
                      <?php endif;?>
                    </select><br><br>
                    <?php echo form_error('select')?>  



                    
    <!--  <input id="namebox" class="form-control" type="text" name="name"   value="<?php echo set_value('name',$usr->name);?>" readonly>  -->
                                               
          
                                
                          
                                  
                        <table class="table   table-responsive" id="dynamic_field">
                            <tr>
                                <td><input type="text" id='sub1' name="subject[]" value="<?php  echo set_value('subject[]')?>" placeholder="Enter subject Name" class="form-control name_list" /> <?php echo form_error('subject[]')?></td>
                           <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
                            </tr>
                        </table>
                      
               
                <button class="btn btn-primary mx-auto">Update</button>        
                 <a href="<?php echo base_url().'index.php/user/index'; ?>" class="btn btn-secondary mx-auto">cancel</a>
            
            </div>
            
                </form>
            </div>
        </form>
        <hr>

    </div>
  
</body>

</html>

<script>
$(document).ready(function(){

    var b= '<?php echo count($array); ?>';
    var arr = '<?php echo json_encode($array); ?>';
   var obj = JSON.parse(arr); 
 // for (var k=0; k<b;k++){
    
    var c = obj[0].subject;
    document.getElementById("sub1").value = c;
    console.log(c);

 // }
   

    console.log(arr);
    var i=1;
    
    for (var  j = 1; j < b; j++) {
            var d = obj[j].subject;
              console.log(d);
      // console.log(b[]);
         $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" id="sub" name="subject[]" value="'+d+'"  placeholder="Enter Subject  Name" class="form-control name_list" /> <?php echo form_error('subject[]')?></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');
    }

    $('#add').click(function(){
        i++;
       
           
     
        $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" id="sub" name="subject[]" value="<?php  echo set_value('subject[]')?>"  placeholder="Enter Subject  Name" class="form-control name_list" /> <?php echo form_error('subject[]')?></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button></td></tr>');
          
    });

    
    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id"); 
        $('#row'+button_id+'').remove();
    });
    
    // $('#submit').click(function(){       
    //     $.ajax({      url:"name.php", method:"POST", data:$('#add_name').serialize(), success:function(data) { alert(data); $('#add_name')[0].reset(); }
    //     });
    // });
    
});
</script>
<!-- <script>
    $(function(){
        $("#droplist").change(function(){
            var disp=$("#droplist  option:selected").text();
            $("#namebox").val(disp);
        })

    })
    
</script> -->

<!-- <?php echo set_value('name',$getus['name']);?> 
action="<?php echo base_url().'index.php/user/fetch/'; ?>" -->
<script>
$(document).ready(function(){
    var name = '<?php echo $name; ?>';


  $("#droplist").val(name).trigger("change")

});
</script>

<!-- <?php  echo set_value('subject[]')?> -->