<!DOCTYPE html>
<html>
<head>
	<title>crud-application</title>
	 <!-- datatable -->

	 	
 	<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTables-1.10.20/css/jquery.dataTables.css';?>"/> 
      
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css'; ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css'; ?>">
	<!-- font awesome -->
		<script src="https://kit.fontawesome.com/0541f20c1a.js" crossorigin="anonymous"></script>
	    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	
</head>



	
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
	<script type="text/javascript" src="<?php echo base_url().'assets/DataTables-1.10.20/js/jquery.dataTables.js';?>"></script>

		<style>
		.fas {
			color: red;
			    font-size: 18px;
			}
			#undo{
				color: green;
				font-size: 18px;

			}

			.fade-in {
  animation: fadeIn ease 2s;
  -webkit-animation: fadeIn ease 2s;
  -moz-animation: fadeIn ease 2s;
  -o-animation: fadeIn ease 2s;
  -ms-animation: fadeIn ease 2s;
}
@keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-moz-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-webkit-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-o-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
  }
}

@-ms-keyframes fadeIn {
  0% {
    opacity:0;
  }
  100% {
    opacity:1;
}

.table-danger{
	background-color: red
}

			

	</style>
	<div class="container-fluid">
				<nav class="navbar navbar-dark bg-dark">
					<a href="" class="navbar-brand">List User</a>
					<a href="<?php echo base_url().'index.php/user/fetch'; ?>" class="btn btn-primary mx auto">insert subs</a>
					<a href="<?php echo base_url().'index.php/user/create'; ?>" class="btn btn-primary mx auto">Create</a>
				</nav>
			<hr>
				<div class="row">

					<div class="col-md-12">
						<?php 
							$success=$this->session->userdata('success');
							if($success != ""){
						?>
							<div id="div" class="fade-in  alert alert-success"><?php echo $success;?></div>
						<?php	
							}
						?>
						<?php 
							$failure=$this->session->userdata('failure');
							if($failure != ""){
						?>
							<div id="div" class="fade-in alert alert-danger"><?php echo $failure;?></div>
						<?php	
							}
						?>

						</div>
					</div>
				
				<!-- 	<div class="col-md-12"> -->


			
	<!-- <form method="post" action="<?php echo base_url().'index.php/user/updatestatus/'; ?>" >					 -->
	
						<table id="data" class="table table-striped" >
							
<thead>

							<tr>
								<!-- <th>User_ID</th>
								<th>F_id</th> -->
								<th>Subject</th>
							<!-- 	<th>Created At</th> -->
							    <th>status</th>
							    <!-- <th>Id</th> -->
							     <th>Name</th>
								<th>Action</th>
							<!-- 	<th>Delete</th> -->
								
						</tr>
						</thead>
							
					
						</table>
						</form>	
				<!-- 	</div> -->
			
				<hr>
				</div>

		<!-- 

		                    <input type="text" name="id" id="user_id" value="">
					        <input type="text" name="status" id="user_status" value="">
	 -->
</body>
</html>
	<script type="text/javascript">

			$(document).ready(function(){
				 var site_url_ = '<?php echo site_url() ?>';
		    $('#data').DataTable({


		    	 "ajax":{  
                  url: site_url_ + "/User/listing",
                  datatype:"JSON",
                  type:"POST"  
                   },  
                     "columnDefs": [ {
		            "targets": -1,
		            // "data": null,
		             "render": function (data, type, row)
					             {
		                         
                                    let html = "";
                                    console.log("data", data);
                                    if (data.status == 0) {
                                        html += `<a  href="updatestatus?sid=${data.user_id}&sval=${data.status}" class="fas fa-trash" ></a>`;
                                    } else {
                                        html += `<a href="updatestatus?sid=${data.user_id}&sval=${data.status}" id="undo" class="fas fa-undo" ></a>`;
                                    }
                                    return html;
                                
                                
                           
                            
       				     }
       
        } ],
      
		    	 "columns": [
	            // { "data": "user_id" },
	            //  { "data": "f_id" },
	            { "data": "subject"}, 
               // { "data": "created_at"},
                { "data": "status"},
               // { "data": "id"},
                { "data": "name"},
                { "data": null }
       
        ],
         "rowCallback":

                            function (nRow, data, iDisplayindex) {

                                if (data.status == 1) {
                                    $('tr', nRow).addClass('table-danger');
                                }
                            }
        


		    });
	});
</script>
<!-- <script type="text/javascript">
$(document).on('click','.user_status',function(){

	var id = $(this).attr('uid'); //get attribute value in variable
	var status = $(this).attr('ustatus'); //get attribute value in variable

	$('#user_id').val(id); //pass attribute value in ID
	$('#user_status').val(status);  //pass attribute value in ID



});
</script> -->
<script>
$(document).ready(function(){
 
    $("#div").hide(8000);
  });
</script>




 