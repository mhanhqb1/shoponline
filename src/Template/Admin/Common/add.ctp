
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $pageTitle; ?>
            </h1>
        </div>
        <?php if ($err): ?>
            <div class="clearfix"></div>
            <?php foreach ($err as $value): ?>
                <div class="alert alert-danger">
                    <?php echo $value; ?>
                </div>
            <?php endforeach; ?>

        <?php endif; ?>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            <form action="<?php echo $BASE_URL . '/admin/' . $controller . '/' . $action; ?>" method="POST" enctype="multipart/form-data">
                <?php foreach ($displayFields as $field => $val): ?>
                    <div class="form-group">
                        <label><?php echo $val['title']; ?>:</label>
                        
                        <?php if (!empty($val['image'])): ?>
                            <input type="file" name="<?php echo $field; ?>">
                            
                        <?php elseif (!empty($val['textarea'])): ?>
                            <textarea name="<?php echo $field; ?>" class="form-control" rows="15"></textarea>
                            
                        <?php elseif (!empty($val['radio'])): ?>
                            <?php foreach ($val['data'] as $ko => $vo): ?>
                                <input type='radio' value='<?php echo $ko; ?>' name='<?php echo $field; ?>'/><?php echo $vo; ?>
                            <?php endforeach; ?>
                                
                        <?php elseif (!empty($val['options'])): ?>
                            <select class="form-control" id="<?php echo $controller . '_' . $field; ?>" name="<?php echo $field; ?>">
                                <?php if (isset($val['empty'])): ?>
                                    <option value=""><?php echo $val['empty']; ?></option>
                                <?php endif; ?>
                                <?php foreach ($val['options'] as $ks => $vs): ?>
                                    <option value="<?php echo $ks; ?>"><?php echo $vs; ?></option>
                                <?php endforeach; ?>
                            </select>
                                
                        <?php else: ?>
                            <input type="text" class="form-control" name="<?php echo $field; ?>" />
                        <?php endif; ?>
                    </div> 
                <?php endforeach; ?>
                <button type="submit" name="submit" class="btn btn-default">Thêm</button>
                <button type="reset" class="btn btn-default">Làm lại</button>
            <form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->