
<?php if($decodedFileContent){$result = array_reverse($decodedFileContent);} ?>
<body>
    <main>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">GuestBook</h1>
                <p class="lead text-muted">Create your guestbook.</p>
                <p>
                <form method="post">
                    <button type="submit" name="page" value="newpost" class="btn border-primary">New Post Message </button>
                </form>
                </p>
                <p>
                <form method="post" class="row g-3 text-center">

                    <p><small>How many post message you want to view. Enter number.</small></p>
                    <div class="col-auto">
                        <input type="text" class="form-control" placeholder="How many post to View " name="postNumber"/>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="page" value="postNumber" class="btn border-primary">Submit</button>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="page" value="allPost" class="btn border-primary">View All</button>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="page" value="refresh" class="btn border-primary">Refresh page</button>
                    </div>

                </form>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <?php if($decodedFileContent): ?>
                <?php $counter = 0; foreach($result as $content) : $counter++;
                    if($counter <= $postNumber):
                ?>
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="card-img-top" style="width: 60px;height: 60px" src="<?php echo $content['image'];?>"/>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $content['title'];?></h5>
                                    <h6><?php echo  $content['firstName']." ". $content['surname']; ?></h6>
                                <p class="card-text"><?php echo $content['message'];?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">X</button>
                                    </div>
                                    <small class="text-muted"><?php echo $content['date']; ?></small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif;
                endforeach; ?>
                <?php else : ?>
                    <p>Currently there is no post message. Please add a message</p>
                <?php endif; ?>
            </div>
        </div>
    </div>

</main>
