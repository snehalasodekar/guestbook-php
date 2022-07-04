
<body>

<div class="container">
    <div class=" text-center mt-5 ">
        <h1>Add New Post Message</h1>
    </div>


    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class = "container">
                        <form id="contact-form" role="form" method="post" enctype="multipart/form-data"><!--Form-->
                            <div class="controls">
                                <div class="row">
                                    <!--First name-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_name">Firstname *</label>
                                            <input id="form_name" type="text" name="firstName" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        </div>
                                    </div>
                                    <!--Last name-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_lastname">Lastname *</label>
                                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        </div>
                                    </div>
                                </div>
                                <!--Email Address-->
                                <div class="row">
                                <!--upload Image -->

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="form_email">Upload Image</label>
                                            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" placeholder="Please Select an Image *" required="required" data-error="upload valid image ">
                                        </div>
                                        <!-- Message title-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_title">Title *</label>
                                                <input id="form_title" type="text" name="title" class="form-control" placeholder="Please enter message title *" required="required" data-error="Title is required.">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Message-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="form_message">Message *</label>
                                            <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea
                                            >
                                        </div>

                                    </div>


                                    <div class="col-md-12 mt-3">

                                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" name="page" value="sendMessage" >

                                    </div>

                                </div>


                            </div>
                        </form>
                    </div>
                </div>


            </div>
            <!-- /.8 -->

        </div>
        <!-- /.row-->

    </div>
</div>
