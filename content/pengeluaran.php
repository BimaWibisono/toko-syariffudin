<?php
    require 'template/header.php';
    require '../connect.php';
    $sql = "
        SELECT item,stock,item_pict FROM tbl_item
    ";

    $result = mysqli_query($conn, $sql);


    
?>

    
    <section class="container">
        
        <h1 class="text-center text-white ">Stok Barang</h1>
        

        <div class="card mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Harga Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    
                <?php if ($result->num_rows > 0) { 
                    while($row = $result->fetch_assoc()) {
                ?>
        
                    <tr>                    
                        <td><?= $row['item_pict']; ?></td>
                        <td><?= $row['item']; ?></td>
                        <td><?= $row['stock']; ?></td>
                    </tr>

                <?php
                    }
                }
                ?>
                    
                </tbody>
            </table>
        </div>
    </section>



<?php require 'template/footer.php'; ?>