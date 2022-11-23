    <?php
    include "proses/connect.php";
    $query = mysqli_query($conn, "select * from tb_user");
    while ($record = mysqli_fetch_array($query)) {
        $result[] = $record;
    }

    ?>
    <div class="col-lg-9 mt-2">
        <div class="card">
            <div class="card-header">
                Halaman User
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary" btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalTambah">Tambah User</button>
                    </div>
                </div>
                <!-- Modaltambah -->
                <div class=" modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah User</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="your name" required>
                                                <label for="floatingInput">Nama</label>
                                                <div class="invalid-feedback">
                                                    Masukan Nama
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="email" name="username" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                                                <label for="floatingInput">Username</label>
                                                <div class="invalid-feedback">
                                                    Masukan Username
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-floating mb-3">
                                                <select class="form-select" name="level" aria-label="Default select example" required>
                                                    <option selected hidden value="">Pilih Level User</option>
                                                    <option value="1">Owner/Admin</option>
                                                    <option value="2">Kasir</option>
                                                    <option value="3">Pelayan</option>
                                                    <option value="4">Dapur</option>
                                                </select>
                                                <label for="floatingPassword">Level User</label>
                                                <div class="invalid-feedback">
                                                    Masukan Level User
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="form-floating mb-3">
                                                <input type="number" name="nohp" class="form-control" id="floatingInput" placeholder="08xxxxxx" required>
                                                <label for="floatingInput">No.HP</label>
                                                <div class="invalid-feedback">
                                                    Masukan No.HP
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input type="password" name="password" disabled value="12345" class="form-control" id="floatingInput" placeholder="Password">
                                                <label for="floatingPassword">Password</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="alamat" id="" style="height:100px" required></textarea>
                                        <label for="floatingPassword">Alamat</label>
                                        <div class="invalid-feedback">
                                            Masukan Alamat
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="input_user_validate" value="12345" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- EndModaltambah -->
                <?php foreach ($result as $row) { ?>
                    <!-- ModalView -->
                    <div class=" modal fade" id="modalView<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Data User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_input_user.php" method="post">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input disabled type="text" name="nama" class="form-control" id="floatingInput" placeholder="your name" value="<?php echo $row['nama'] ?>">
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Nama
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input disabled type="email" name="username" class="form-control" id="floatingInput" placeholder="name@example.com" value="<?php echo $row['username'] ?>">
                                                    <label for=" floatingInput">Username</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Username
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <select disabled class="form-select" aria-label="Default select example" required name="level" id="">
                                                        <?php
                                                        $data = array("Owner/Admin", "Kasir", "Pelayan", "Dapur");
                                                        foreach ($data as $key => $value) {
                                                            if ($row['level'] == $key + 1) {
                                                                echo "<option selected value='$key'>$value</option>";
                                                            } else {
                                                                echo "<option value='$key'>$value</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for=" floatingInput">Level</label>
                                                    <div class="invalid-feedback">
                                                        Masukan level
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-floating mb-3">
                                                    <input disabled type="number" name="nohp" class="form-control" id="floatingInput" placeholder="08xxxxxx" value="<?php echo $row['nohp'] ?>">
                                                    <label for=" floatingInput">No.HP</label>
                                                    <div class="invalid-feedback">
                                                        Masukan No.HP
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating">
                                            <textarea disabled class="form-control" name="alamat" id="" style="height:100px"><?php echo $row['alamat'] ?></textarea>
                                            <label for=" floatingPassword">Alamat</label>
                                            <div class="invalid-feedback">
                                                Masukan Alamat
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- EndModalView -->
                    <!-- ModalEdit -->
                    <div class=" modal fade" id="modalEdit<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_edit_user.php" method="post">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="your name" required value="<?php echo $row['nama'] ?>">
                                                    <label for="floatingInput">Nama</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Nama
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input <?php echo ($row['username'] == $_SESSION['username_decafe']) ? 'disabled' : ''; ?> type="email" name="username" class="form-control" id="floatingInput" placeholder="name@example.com" required value="<?php echo $row['username'] ?>">
                                                    <label for=" floatingInput">Username</label>
                                                    <div class="invalid-feedback">
                                                        Masukan Username
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-floating mb-3">
                                                    <select class="form-select" aria-label="Default select example" required name="level" id="">
                                                        <?php
                                                        $data = array("Owner/Admin", "Kasir", "Pelayan", "Dapur");
                                                        foreach ($data as $key => $value) {
                                                            if ($row['level'] == $key + 1) {
                                                                echo "<option selected value=" . ($key + 1) . ">$value</option>";
                                                            } else {
                                                                echo "<option value=" . ($key + 1) . ">$value</option>";
                                                            }
                                                        }
                                                        ?>
                                                    </select>
                                                    <label for=" floatingInput">Level</label>
                                                    <div class="invalid-feedback">
                                                        Masukan level
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="form-floating mb-3">
                                                    <input type="number" name="nohp" class="form-control" id="floatingInput" placeholder="08xxxxxx" value="<?php echo $row['nohp'] ?>">
                                                    <label for=" floatingInput">No.HP</label>
                                                    <div class="invalid-feedback">
                                                        Masukan No.HP
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating">
                                            <textarea class="form-control" name="alamat" id="" style="height:100px"><?php echo $row['alamat'] ?></textarea>
                                            <label for=" floatingPassword">Alamat</label>
                                            <div class="invalid-feedback">
                                                Masukan Alamat
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="edit_user_validate" value="12345" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- EndModalEdit -->
                    <!-- ModalDelete -->
                    <div class=" modal fade" id="modalDelete<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Data User</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_delete_user.php" method="post">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                        <div class="col-lg-12">
                                            <?php
                                            if ($row['username'] == $_SESSION['username_decafe']) {
                                                echo "<div class='alert alert-danger'>Anda tidak dapat menghapus akun sendiri</div>";
                                            } else {
                                                echo "Apakah anda yakin ingin menghapus user <b>$row[username]?</b>";
                                            }
                                            ?>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" <?php echo ($row['username'] == $_SESSION['username_decafe']) ? 'disabled' : ''; ?> name="delete_user_validate" value="12345" class="btn btn-danger">Hapus</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- EndModalDelete -->

                    <!-- ModalResetPassword -->
                    <div class=" modal fade" id="modalResetPassword<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-md modal-fullscreen-md-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate action="proses/proses_reset_password.php" method="post">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                        <div class="col-lg-12">
                                            <?php
                                            if ($row['username'] == $_SESSION['username_decafe']) {
                                                echo "<div class='alert alert-danger'>Anda tidak dapat mereset password sendiri</div>";
                                            } else {
                                                echo "Apakah anda yakin ingin menghapus password user <b>$row[username]</b> menjadi password bawaan sistem yaitu <b>password</b> ";
                                            }
                                            ?>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" <?php echo ($row['username'] == $_SESSION['username_decafe']) ? 'disabled' : ''; ?> name="delete_user_validate" value="12345" class="btn btn-success">Reset Password</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- EndModalResetPassword -->
                <?php
                }
                if (empty($result)) {
                    echo "Data user tidak ada";
                } else {
                ?>
                    <div class=" table responve">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">No Hp</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($result as $row) {

                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++ ?></th>
                                        <td><?php echo $row['nama'] ?></td>
                                        <td><?php echo $row['username'] ?></td>
                                        <td><?php
                                            if ($row['level'] == 1) {
                                                echo 'Admin';
                                            } elseif ($row['level'] == 2) {
                                                echo 'Kasir';
                                            } elseif ($row['level'] == 3) {
                                                echo 'pelayan';
                                            } elseif ($row['level'] == 4) {
                                                echo 'Dapur';
                                            }
                                            ?></td>
                                        <td><?php echo $row['nohp'] ?></td>

                                        <td class="d-flex">
                                            <button class="btn btn-info btn-sm me-1 " btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalView<?php echo $row['id'] ?>"><i class="bi bi-eye"></i></button>
                                            <button class="btn btn-warning btn-sm me-1" data-bs-toggle="modal" data-bs-target="#modalEdit<?php echo $row['id'] ?>"><i class=" bi bi-pencil-square"></i></button>
                                            <button class="btn btn-danger btn-sm me-1" data-bs-toggle="modal" data-bs-target="#modalDelete<?php echo $row['id'] ?>"><i class="bi bi-trash"></i></button>
                                            <button class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#modalResetPassword<?php echo $row['id'] ?>"><i class="bi bi-key"></i></button>
                                        </td>
                                    </tr>

                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>