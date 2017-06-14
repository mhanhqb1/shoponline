<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?php echo $pageTitle; ?>
                </h1>
            </div>
            <?php if($err): ?>
               <div class="clearfix"></div>
               <?php foreach ($err as $value): ?>
                <div class="alert alert-danger">
                    <?php echo $value; ?>
                </div>
            <?php endforeach; ?>

        <?php endif;?>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="index.php?controller=<?php echo $controller;?>&action=edit&id=<?php echo $data['id'];?>" method="POST" enctype="multipart/form-data">
                <?php foreach ($displayFields as $field => $val): ?>
                    <?php if (!empty($val['image'])): ?>
                        <div class="form-group">
                            <label><?php echo $val['title'];?> cũ:</label>
                            <img src="../media/images/<?php echo $data[$field];?>" width="200">
                        </div>
                        <div class="form-group">
                            <label><?php echo $val['title'];?> mới:</label>
                            <input type="file" name="new_<?php echo $field;?>"/>
                        </div>
                    <?php elseif (!empty($val['textarea'])): ?>
                            <div class="form-group">
                                <label><?php echo $val['title'];?>:</label>
                                <textarea name="<?php echo $field;?>" class="form-control" rows="15"><?php echo $data[$field]; ?></textarea>
                            </div>
                    <?php elseif (!empty($val['radio'])): ?>
                            <div class="form-group">
                                <label><?php echo $val['title'];?>:</label>
                                <?php foreach ($val['data'] as $ko => $vo): ?>
                                <input type='radio' value='<?php echo $ko;?>' name='<?php echo $field;?>' <?php echo $data[$field] == $ko ? 'checked' : '';?>/><?php echo $vo;?>
                                <?php endforeach; ?>
                            </div>
                    <?php else: ?>
                        <div class="form-group">
                            <label><?php echo $val['title'];?>:</label>
                            <input type="text" class="form-control" name="<?php echo $field;?>" value="<?php echo $data[$field];?>"/>
                        </div> 
                    <?php endif; ?>
                <?php endforeach; ?>
                <button type="submit" name="submit" class="btn btn-success">Chỉnh sửa</button>
                <button type="reset" class="btn btn-danger">Làm lại</button>
                <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->