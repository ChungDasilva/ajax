<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<ul id="product"></ul>
	<script type="text/javascript">
		$(document).ready(function(){
			 $.ajax({
		        url:"products",
		        type:"get",
		        success: function(data,status){
		        	$.each(data,function(key, category){
		            $("#product").append (
		            	"<li>"+
			                '<a href="#" data-id="+category.id+"><i class="fa fa-trash"></i>  Delete</a>'+
			            "</li>"

		            	 )
		          	});
				  		}
		  	});

			 $("a").click(function(event){
			 	var id=$(this).data('id');
			 	console.log(id);
			 	$.ajax({
			 		url:"delete",
			        type:"post",
			        data:"id",
			        success: function(data,status){
			        	$.each(data,function(key, category){
			            $("#product").append (
			            	"<li>"+category.name+"</li>" )
			          	});
					  		}
			 });
			 });	

		});

		function delete_data(id) {
			console.log(id);
		}

	</script>
</body>

</html>
