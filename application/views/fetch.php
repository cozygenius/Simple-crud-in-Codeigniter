<!DOCTYPE html>
<html>

<head>
    <title>crud-application</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'; ?>">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

        <!-- DATATABLE CDN -->
     <!--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> -->
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <a href="" class="navbar-brand">Assign subject to faculty</a>
        </nav>

        <hr>
        <form method="post"  name="add_name" id="add_name" action="<?php echo base_url().'index.php/user/fetch/'; ?>" >
            <div class="form-group  col-sm-6">
             
               FACULTY NAME: <select name="select" class="form-group">
                   <option value="">select</option>
                      <?php if(count($user)):?>
                          <?php foreach($user as $usr):?>
                            <option value=<?php echo $usr->id?>><?php echo $usr->name?></option>
                          <?php endforeach;?>
                          <?php else:?>
                      <?php endif;?>
                    </select><br><br>
                    <?php echo form_error('select')?>  
                        <table class="table   table-responsive" id="dynamic_field">
                            <tr>
                                <td><input type="text" id='sub' name="subject[]" value="<?php  echo set_value('subject[]')?>" placeholder="Enter subject Name" class="form-control name_list" /> <?php echo form_error('subject[]')?></td>
                           <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
                            </tr>
                        </table>
               
                <button class="btn btn-primary mx-auto">Submit</button>        
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
    var i=1;
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