<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <title>Data Whojoin</title>
  </head>
  <body>
    
    <div class="container" style="margin-top: 80px;">
      
      <div class="row">
        <div class="col-md-10 offset-md-2">

          <div class="card">
            <div class="card-header">
              DATA WHOJOIN
            </div>
            <div class="card-body">

              <a href="<?php echo base_url()?>index.php/whojoin/tambah/" class="btn btn-primary mb-3">+ Tambah</a>

            <table class="table table-striped" id="myTable">

              <thead>
                <tr>
                  <th>No</th>
                  <th scope="col">First Name</th>
                  <th scope="col">Last Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Organization Name</th>
                  <th scope="col">Organization Type</th>
                  <th scope="col">People in Organization</th>
                  <th scope="col">People in Team</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                <?php
                  $no=1;
                  foreach($whojoin->result() as $who){?>

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $who->first_name; ?></td>
                  <td><?php echo $who->last_name; ?></td>
                  <td><?php echo $who->email; ?></td>
                  <td><?php echo $who->organisation_name; ?></td>
                  <td><?php echo $who->organisation_type; ?></td>
                  <td><?php echo $who->people_in_org; ?></td>
                  <td><?php echo $who->people_in_team; ?></td>
                  <td class="text-center">
                    <a href="<?php echo base_url()?>index.php/whojoin/edit/<?php echo $who->id; ?>" class="btn btn-sm btn-primary">EDIT</a>                    

                    <a href="<?php echo base_url()?>index.php/whojoin/hapus/<?php echo $who->id; ?>" class="btn btn-sm btn-danger">HAPUS</a>


                  </td>
                </tr>
             <?php } ?>
              </tbody>
            </table>  
             

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
              "scrollX": true
            });
        } );
    </script>
  </body>
</html>