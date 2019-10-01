                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box">
                            <h4 class="header-title">Checkbox Select</h4>
                            <p class="sub-header">
                                Example of checkbox select.
                            </p>

                            <table id="basic-datatable" class="table dt-responsive nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>phone</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Post Code</th>
                                            <th>Address</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                
                                
                                    <tbody>
                                        <tr>
                                        <?php foreach ($showDrivers as $Data) {?>
                                            <td><?php echo $Data->id; ?></td>
                                            <td><?php echo $Data->name; ?></td>
                                            <td><?php echo $Data->phone; ?></td>
                                            <td><?php echo $Data->email; ?></td>
                                            <td><?php echo $Data->password; ?></td>
                                            <td><?php echo $Data->postcode; ?></td>
                                            <td><?php echo $Data->address; ?></td>
                                            <td>
                                        <a href="edit/<?php echo $Data->id; ; ?>"><i class="fas fa-edit"></i></a>
                                        <a href="deleteDriver/<?php echo $Data->id; ; ?>"><i class=" fas fa-trash-alt"></i></a>
                                    </td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>