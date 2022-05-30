<div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="mb-0 text-gray-800">Hello, <?= $nama ?></h1>
                <p class="text-gray-800">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt ad non eligendi nisi, rem, beatae nobis soluta quis ducimus ipsam perspiciatis atque corrupti possimus? Animi neque inventore odit labore voluptatibus.</p>
                <h1 class="text-gray-800">Pendidikan:</h1>
                <ul>
                    <?php foreach ($list as $item){
                        echo "<li class='text-gray-800'> $item </li>";
                    } ?>
                </ul>
            </div>
        </div>
    </div>