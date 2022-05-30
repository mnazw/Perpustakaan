<div class="container-fluid">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pencarian User</h2>
            </div>
        </div>
    </div>
    <hr>
    <form method="GET" action="" class="form-group">
    <div class="row">
    	<div class="col-lg-12">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" name="cari" placeholder="Cari User Berdasarkan ID/Email/Username">
			  <div class="input-group-append">
			    <button class="btn btn-outline-secondary" type="Submit">CARI USER</button>
			  </div>
			</div>
		</div>
    	<div class="col-lg-12">
    		<?php if($user != null){
          echo $status;
        } else{
          echo "User tidak ditemukan!";
        } ?>
    	</div>
    </div>
    </form>
    <div class="row">
        <div class="col-lg-12 margin-tb">
			<table class="table table-bordered">
		        <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Avatar</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Tempat, Tanggal Lahir</th>
                    <th class="text-center">Jenis Kelamin</th>
                    <th class="text-center">Telepon</th>
                    <th class="text-center">Aksi</th>
		        </tr>
		        	<?php $no=1+(10*($page-1));
		        	foreach($user as $item):?>
		        <tr>
              <td><?= $item['id'] ?> </td>
              <td><img src="/img/avatar/<?= $item['avatar'] ?>" alt="" width="100px"></td>
              <td><?= $item['username'] ?> </td>
              <td><?= $item['email'] ?> </td>
              <td><?= $item['nama'] ?> </td>
              <td><?= $item['alamat'] ?> </td>
              <td><?= $item['tempat_lahir'] ?>,  <?= $item['tanggal_lahir'] ?></td>
              <td><?= $item['jenis_kelamin'] ?> </td>
              <td><?= $item['telepon'] ?> </td>
              <td><button class="btn btn-success">Detail</button></td>
		        </tr>
		        <?php $no++; endforeach;?>
		    </table>
		    <?= $pager->Links() ?>
		</div>
	</div>

</div>
