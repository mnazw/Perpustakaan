<div class="container-fluid">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Avatar</th>
                <th class="text-center">Username</th>
                <th class="text-center">Email</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            foreach($list as $item) {?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><img src="/img/avatar/<?= $item['avatar'] ?>" alt="" width="100px"></td>
                    <td><?= $item['username'] ?> </td>
                    <td><?= $item['email'] ?> </td>
                    <td><button class="btn btn-success">Detail</button></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>