

<!-- Main content -->
<section class="content">

    <!-- =========================================================== -->

    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>150</h3>

                    <p>New Orders</p>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-cart"></i>
                </div>
                <a href="#" class="small-box-footer">
                    <?php echo __('LABEL_VIEW_MORE');?> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><?php echo $data['products']['total']; ?></h3>

                    <p>Sản phẩm</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                    <?php echo __('LABEL_VIEW_MORE');?> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-yellow">
                <div class="inner">
                    <h3>44</h3>

                    <p>User Registrations</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">
                    <?php echo __('LABEL_VIEW_MORE');?> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
                <div class="inner">
                    <h3>65</h3>

                    <p>Unique Visitors</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">
                    <?php echo __('LABEL_VIEW_MORE');?> <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <!-- ./col -->
    </div>
    <!-- /.row -->
    
    <div class="row">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Hóa đơn mới</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th style="width: 50px;">Order ID</th>
                                <th>Item</th>
                                <th>Status</th>
                                <th>Popularity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="pages/examples/invoice.html">OR9842</a></td>
                                <td>Call of Duty IV</td>
                                <td><span class="label label-success">Shipped</span></td>
                                <td>
                                    <div class="sparkbar" data-color="#00a65a" data-height="20"><canvas width="34" height="20" style="display: inline-block; width: 34px; height: 20px; vertical-align: top;"></canvas></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-primary btn-flat pull-right"><?php echo __('LABEL_VIEW_MORE');?></a>
            </div>
            <!-- /.box-footer -->
        </div>
    </div>
    <!-- /.row -->
    
     <?php if (!empty($data['products']['data'])): ?>
    <div class="row">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title"><?php echo __('LABEL_NEW_PRODUCTS');?></h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                            <tr>
                                <th style="width: 50px;"><?php echo __('ID');?></th>
                                <th style="width: 150px;"><?php echo __('LABEL_IMAGE');?></th>
                                <th><?php echo __('LABEL_NAME');?></th>
                                <th><?php echo __('LABEL_CATEGORY');?></th>
                                <th><?php echo __('LABEL_PRICE');?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($data['products']['data'] as $product): ?>
                            <tr>
                                <td><a href="<?php echo $BASE_URL;?>/admin/products/update/<?php echo $product['id'];?>"><?php echo $product['id'];?></a></td>
                                <td>
                                    <?php if (!empty($product['image_path'])): ?>
                                    <img src="<?php echo $BASE_URL.'/'.$product['image_path']; ?>" width="120px"/>
                                    <?php endif; ?>
                                </td>
                                <td><?php echo $product['title']; ?></td>
                                <td>
                                    <?php echo $product['category_name']; ?>
                                </td>
                                <td><?php echo $product['price']; ?></td>
                            </tr>
                            <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                <a href="<?php $BASE_URL;?>/admin/products/update" class="btn btn-sm btn-info btn-flat pull-left"><?php echo __('LABEL_ADD_NEW');?></a>
                <a href="<?php $BASE_URL;?>/admin/products" class="btn btn-sm btn-primary btn-flat pull-right"><?php echo __('LABEL_VIEW_MORE');?></a>
            </div>
            <!-- /.box-footer -->
        </div>
    </div>
    <!-- /.row -->
    <?php endif; ?>

</section>
<!-- /.content -->
