<?php
include 'serversite/fetchIndexPageData.php';

while ($row = mysqli_fetch_array($result)) {
    echo "
            <th scope='row'>$row[s_title]</th>
                <td>$row[s_subtitle]</td>
                <td><img src='../.$row[s_img_path]' class='img-thumbnail sliderTableImg' alt=' srcset='></td>
                <td>$row[s_offer_price]</td>
                <td>$row[s_offer_name]</td>
                <td>$row[s_description]</td>
                <td>
                    <div class='d-flex gap-2'>
                        <a href='#'><span
                                class='material-symbols-outlined text-light p-2 rounded bg-success'>update</span></a>
                        <a href='#'><span
                                class='material-symbols-outlined text-light p-2 rounded bg-danger'>delete</span></a>
                    </div>
                </td>
        ";
        <a href='../serversite/sliderDelete.php? id=$row[id]' data-bs-toggle='modal' data-bs-target='#popupDelete'><span
                                            class='material-symbols-outlined text-light p-2 rounded bg-danger'>delete</span></a>

                                            <a href='' onclick='passValue($row[s_id])' data-bs-toggle='modal' data-bs-target='#popupDelete' class='deleteidpass'><span
                                            class='material-symbols-outlined text-light p-2 rounded bg-danger'>delete</span></a>
                         urldecode() 
                         <a href='../serversite/sliderDelete.php? id=$row[s_id]&imgPath=$row[s_img_path]' type='hidden'><span
                         class='material-symbols-outlined text-light p-2 rounded bg-danger'>delete</span></a>
                   
}