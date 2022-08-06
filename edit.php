<td hidden data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
<td data-id="<?php echo $row['id']; ?>"><?php echo $row[$row['c_name'] . '_title']; ?></td>
<td data-id="<?php echo $row['id']; ?>"><img src="../<?php echo $row[$row['c_name'] . '_img']; ?>"
        class='img-thumbnail sliderTableImg' alt=' srcset='>
<td data-id="<?php echo $row['id']; ?>"><?php echo $row[$row['c_name'] . '_price']; ?></td>
<td hidden data-id="<?php echo $row['id']; ?>"><?php echo $row[$row['c_name'] . '_img']; ?></td>
<td>
    <div class="d-flex gap-2">
        <a href="#" data-toggle='tooltip' data-placement='bottom' title='Update'><span
                class=" material-symbols-outlined text-light p-2 rounded bg-success editbtn"
                data-id="<?php echo $row['id']; ?>">update</span></a>
        <a href="../serversite/sliderDelete.php?id=<?php echo $row['id']; ?>&imgPath=<?php echo $row[$row['c_name'] . '_img']; ?>"
            data-toggle='tooltip' data-placement='bottom' title='Delete'><span
                class="material-symbols-outlined text-light p-2 rounded bg-danger">delete</span></a>
    </div>
</td>








<!--Table start-->
<section>
    <?php
    include '../serversite/productCategoryList.php';

    while ($row = mysqli_fetch_array($result)) {  ?>
    <h2 class="text-center mt-5 mb-3 text-light pt-3 pb-3" style="background-color: #37517E;">List of
        <?php echo $row['c_name']; ?> product</h2>
    <!-- nowrap-->
    <table class="table table-hover table-striped table-bordered dt-responsive" id="example" style="width:100%">
        <thead>
            <tr class="text-center">
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Edit</th>
            </tr>
        </thead>
        <tbody>

            <?php
                include '../serversite/fetchProductData.php';
                while ($row = mysqli_fetch_array($result)) {
                    $firstCol = $row['c_name'] . '_title';
                    $secondCol = $row['c_name'] . '_img';
                    $thirdCol = $row['c_name'] . '_price';  ?>
            <tr class='align-middle tableHover'>

                <td hidden data-id="<?php echo $row['id']; ?>"><?php echo $row['id']; ?></td>
                <td data-id="<?php echo $row['id']; ?>"><?php echo $row[$firstCol]; ?></td>
                <td data-id="<?php echo $row['id']; ?>"><img src="../<?php echo $row[$secondCol]; ?>"
                        class='img-thumbnail sliderTableImg' alt=' srcset='>
                <td data-id="<?php echo $row['id']; ?>"><?php echo $row[$thirdCol]; ?></td>
                <td hidden data-id="<?php echo $row['id']; ?>"><?php echo $row[$secondCol]; ?></td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="#" data-toggle='tooltip' data-placement='bottom' title='Update'><span
                                class=" material-symbols-outlined text-light p-2 rounded bg-success editbtn"
                                data-id="<?php echo $row['id']; ?>">update</span></a>
                        <a href="../serversite/sliderDelete.php?id=<?php echo $row['id']; ?>&imgPath=<?php echo $row[$row['c_name'] . '_img']; ?>"
                            data-toggle='tooltip' data-placement='bottom' title='Delete'><span
                                class="material-symbols-outlined text-light p-2 rounded bg-danger">delete</span></a>
                    </div>
                </td>


            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>
    <?php
    }
    ?>
</section>
<!--Table End-->>
<?php
                }
                ?>
</tbody>
</table>
<?php
    }
    ?>
</section>
<!--Table End-->