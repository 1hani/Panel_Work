<?php 
include('components/header.php')
include('PHP/query.php')
?>

            <!-- Add Category Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded mx-0">
                    <div class="col-md-12 px-3 py-5">
                        <h3 class="text-center">ಠ益ಠ Add Category ಠ益ಠ </h3>

                        <form method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="categoryname">
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">File</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="categoryimage">
                                </div>
                                <!-- <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                                <button type="submit" class="btn btn-primary" name="addcategory">Add Category</button>
                            </form>

                    </div>
                </div>
            </div>
            <!-- Add Category End -->

<?php 
include('components/footer.php')
?>