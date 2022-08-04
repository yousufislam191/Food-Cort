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

<a href="../serversite/getSliderSignleData.php?id=<?php echo $row['s_id']; ?>&imgPath=<?php echo $row['s_img_path']; ?>"><span class="material-symbols-outlined text-light p-2 rounded bg-success">update</span></a>



<th scope='row'><?php echo $row['s_title']; ?></th>



<form action="../serverSite/admin.php" method="POST" id="registrationForm"
                    enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" required class="form-control" id="title" name="title"
                            placeholder="Slider Title" value="
                            <?php include '../serverSite/getSliderSignleData.php';
                            echo $dataArray['s_title']; ?>">
                    </div><br>
                    <div class="form-group">
                        <label for="subTitle">Sub-Title</label>
                        <input type="text" class="form-control" id="subTitle" name="subTitle"
                            placeholder="Slider Sub Title" value="
                            <?php include '../serverSite/getSliderSignleData.php';
                            echo $dataArray['s_subtitle']; ?>">
                    </div><br>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea type="text" required class="form-control" id="description" rows="3" name="description"
                            placeholder="Slider Description" value="
                            <?php include '../serverSite/getSliderSignleData.php';
                            echo $dataArray['s_description']; ?>"></textarea>
                    </div><br>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Image</label>
                        <input class="form-control" type="file" required id="formFile" name="image"
                            accept=".jpg, .jpeg, .png, .gif" onclick="return getImage();">
                        <span id="renameImage" style="color: red;"></span>
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="check">
                        <label class="form-check-label" for="check">
                            Add Offer
                        </label>
                    </div><br>
                    <div class="row" id="offer">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="offerPrice">Offer Price</label>
                                <input type="text" class="form-control" id="offerPrice" name="offerPrice"
                                    placeholder="Offer Price" value="
                                    <?php include '../serverSite/getSliderSignleData.php';
                                    echo $dataArray['s_offer_price']; ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="offerName">Offer Name</label>
                                <input type="text" class="form-control" id="offerName" name="offerName"
                                    placeholder="Offer Name" value="
                                    <?php include '../serverSite/getSliderSignleData.php';
                                    echo $dataArray['s_offer_name']; ?>">
                            </div>
                        </div>
                    </div><br>
                    <div class="d-grid col-6 mx-auto">
                        <button type="submit" class="btn btn-outline-success text-uppercase btn-block"
                            style="font-weight: 600; transition: .3s;">Submit</button>
                    </div>
                </form>