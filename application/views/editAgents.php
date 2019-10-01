
        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-left">
                                <ol class="breadcrumb m-0" style="padding-top: 15px; font-size: 16px;">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Drivers</a></li>
                                    <li class="breadcrumb-item active">Add Driver</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>     
                <!-- end page title --> 

                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">

                        <div class="card-box">
                            <h4 class="header-title m-t-0">New Driver</h4>
                            <br>
                           <?php 
                            $attributes=array('name'=>'formadd','id'=>'formid');
                              // $hidden=array('is_submit'=>1);
                              echo form_open('Dashboard/editedAgents',$attributes); ?>
                              <?php foreach ($data as $Data) {?>

                              
                              
                                <div class="form-group">
                                <input type="hidden" name="id" value="<?php echo $Data->id; ?>" parsley-trigger="change" required
                                           placeholder="Enter full name" class="form-control" id="userName">

                                
                                    <label for="userName">Name<span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="<?php echo $Data->name; ?>" parsley-trigger="change" required
                                           placeholder="Enter full name" class="form-control" id="userName">
                                </div>
                                <div class="form-group">
                                    <label for="emailAddress">Phone<span class="text-danger">*</span></label>
                                    <input type="text" name="phone" value="<?php echo $Data->phone; ?>" parsley-trigger="change" required
                                           placeholder="Enter Phone" class="form-control" id="phone">
                                </div>

                                <div class="form-group">
                                    <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                    <input type="email" name="email" value="<?php echo $Data->email; ?>" parsley-trigger="change" required
                                           placeholder="Enter email" class="form-control" id="emailAddress">
                                </div>
                                <div class="form-group">
                                    <label for="pass1">Password<span class="text-danger">*</span></label>
                                    <input id="pass1" type="password" value="<?php echo $Data->password; ?>" placeholder="Password" required
                                           class="form-control" name="password">
                                </div>
                                
                                <div class="form-group">
                                    <label for="postcode">Post Code<span class="text-danger">*</span></label>
                                    <input type="text" name="postcode" value="<?php echo $Data->postcode; ?>" parsley-trigger="change" required
                                           placeholder="Enter POst Code" class="form-control" id="postcode">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address<span class="text-danger">*</span></label>
                                    <input type="text" name="address" value="<?php echo $Data->address; ?>" parsley-trigger="change" required
                                           placeholder="Enter Address" class="form-control" id="address">
                                </div>

                                <div class="form-group text-right m-b-0">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">Submit</button>
                                    <button id="sa-warning" type="button" style="display: none;"></button>
                                </div> 

                           <?php echo form_close(); ?>

                           <?php } ?>
                        </div>  <!-- end card-box -->
                   </div>
                    <!-- end col -->
                </div>
                
                
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

 

 
 