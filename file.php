<!DOCTYPE html>
<html>
<head>
<title>crud php wooccommerce</title>
<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php  
		$data = file_get_contents('http://localhost:8080/MounaECOM/product.php');
		$data = json_decode($data, true);
	?>
	<div>
		<br><br>
		<center>
			<h3>Data products Woocommerce</h3>
		</center>
		<br><br>
	</div>
<div class="container">
<div class="table-responsive">
			<table class="table table-hover">
				<thead>
                <tr>
                <th>No</th>

                <th>Name</th>
                <th>description</th>
                <th>price</th>
                <th>Actions</th>

                </tr>
                </thead>
                <tbody>
                <?php $i = 1; ?>
					<?php foreach ( $data as $row ) : ?>
                        <tr>
						<td>
							<?= $row['id']; ?> 
                            </td>
						<td>	<?= $row['name']; ?> </td>
						<td>	<?= $row['description']; ?>	</td>

                        <td>	<?= $row['price']; ?>	</td>
					
                        <td><a class='open-AddBookDialog btn btn-primary' data-target='#myModal' data-id=".$row['id']." data-toggle='modal'>Update</a>
                         <a class='open-deleteDialog btn btn-danger' data-target='#myModal1' data-id=".$row['id']." data-toggle='modal'>Delete</a></td></tr>";
					</tr>
					<?php $i++; ?>
					<?php endforeach; ?>
                </tbody>
            </table>
</div>
</div>

<div class="modal fade" id="myModal" role="dialog">
   <div class="modal-dialog">
       <!-- Modal content-->
       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h4 class="modal-title">Modal Header</h4>
           </div>
           <div class="modal-body">
               <p>Some text in the modal.</p>
               <form action="" method="post">
                   <div class="form-group">
                       <input type="text" class="form-control" name="id" id="id" value="">
                       <label for="sel1">Select list (select one):</label>
                       <select class="form-control" id="status" name="ostatus">
                           <option>Pending Payment</option>
                           <option>processing</option>
                           <option>On Hold</option>
                           <option>completed</option>
                           <option>Cancelled</option>
                           <option>Refunded</option>
                           <option>Failed</option>
                       </select>
                   </div>
                   <div class="modal-footer">
                       <button type="submit" class="btn btn-block" name="btn-update">Update</button>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>
</div>
</body>
</html>