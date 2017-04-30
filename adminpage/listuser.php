<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <!--<h1>เลือกอันนึงนะไอ้สลัด </h1>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2><i class="fa fa-align-left"></i> Collapsible / Accordion <small>Sessions</small></h2>
                        <ul class="nav navbar-right panel_toolbox" style="min-width:0px">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        
                        <div class="accordion" id="accordion1" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <a class="panel-heading" role="tab" id="headingOne1" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                                    <h4 class="panel-title">Collapsible Group Item #1</h4>
                                </a>
                                <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Username</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Mark</td>
                                                    <td>Otto</td>
                                                    <td>@mdo</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Jacob</td>
                                                    <td>Thornton</td>
                                                    <td>@fat</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Larry</td>
                                                    <td>the Bird</td>
                                                    <td>@twitter</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <a class="panel-heading collapsed" role="tab" id="headingTwo1" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1" aria-expanded="false" aria-controls="collapseTwo">
                                    <h4 class="panel-title">Collapsible Group Item #2</h4>
                                </a>
                                <div id="collapseTwo1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p><strong>Collapsible Item 2 data</strong>
                                        </p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor,
                                    </div>
                                </div>
                            </div>
                            <div class="panel">
                                <a class="panel-heading collapsed" role="tab" id="headingThree1" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1" aria-expanded="false" aria-controls="collapseThree">
                                    <h4 class="panel-title">Collapsible Group Item #3</h4>
                                </a>
                                <div id="collapseThree1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p><strong>Collapsible Item 3 data</strong>
                                        </p>
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor
                                    </div>
                                </div>
                            </div>
                        </div>
                        


                    </div>
                </div>
            </div>-->

            <div class="clearfix"></div>
            <!---->
            <h1>เลือกอันนึงนะไอ้สลัด </h1>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Table design <small>Custom design</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">

                        <!--<p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>-->

                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title">ID </th>
                                        <th class="column-title">Username </th>
                                        <th class="column-title">Password </th>
                                        <th class="column-title">Name </th>
                                        <th class="column-title">Lastname </th>
                                        <th class="column-title no-link last"><span class="nobr">Driving License Number</span></th>
                                        
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                        <?php 
                                            include 'table-list.php';
                                        ?>
                                       
                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>