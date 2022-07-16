<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>$( document ).ready( function() {
    $('#myModal').modal('show');
    
    });
</script>
<style>
  #myModal{
    margin: 2%;
   border-radius:100%;
  }
  #hq:hover{
	background-color:grey;
	border-radius:25px;
	}
	#nd{background-color:#3B5998;
	}
	.modal-body{
	background-color:#D3E3FC;}
	#rd{
	
	}
	
</style>
</head>
<body>


  <!-- The Modal -->
  <div class="modal" id="myModal" >
    <div class="modal-dialog">
      <div class="modal-content" >
      
        <!-- Modal Header -->
       <div class="modal-header" id="nd" >
          <h4 class="modal-title" id="nd">Current News and Annoccement</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body" id="lk">
         <center><a href="" style="color:red;" id="hq" >--------sample notification-------- </a></center><br><br>
         <center><a href="" style="color:red;">--------sample notification--------</a></center><br><br>
         <center><a href="" style="color:red;">--------sample notification--------</a></center><br><br>
         <center><a href="" style="color:red;">--------sample notification--------</a></center><br><br>
         <center><a href="" style="color:red;">--------sample notification--------</a></center><br><br>
         
        </div>
        
        <!-- Modal footer -->
        
        
      </div>
    </div>
  </div>
  


</body>
</html>
