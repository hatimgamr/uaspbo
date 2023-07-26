<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1>daftar komik</h1>
    <div class="row">

        <div class="col">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">sampul</th>
                        <th scope="col">judul</th>
                        <th scope="col">author</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($komik as $k) : ?>
                        <tr>

                            <th scope="row">1</th>
                            <td><img src="/img/<?= $k['sampul'] ?>" alt="" class="sampul"></td>
                            <td><?= $k['penulis'] ?></td>
                            <td><?= $k['judul'] ?></td>
                            <td><a href="" class=" btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>