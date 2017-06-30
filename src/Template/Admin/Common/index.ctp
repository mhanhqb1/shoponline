<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><?php echo $pageTitle; ?></h1>
        </div>
        <!-- /.col-lg-12 -->
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr align="center">
                    <?php foreach ($displayFields as $val): ?>
                        <th><?php echo $val['title']; ?></th>
                    <?php endforeach; ?>
                        <th style="width: 50px"></th>
                        <th style="width: 50px"></th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($data)): ?>
                    <?php foreach ($data as $v): ?>
                        <tr class="odd gradeX" align="center">
                            <?php foreach ($displayFields as $field => $val): ?>
                            <td <?php echo !empty($val['width']) ? "style='width:{$val['width']}px'" : "";?>>
                                <?php if (!empty($val['image'])): ?>
                                    <img src="../media/images/<?php echo $v[$field]; ?>" width="100"/>
                                <?php elseif (!empty($val['textarea'])): ?>
                                    <?php echo html_entity_decode($v[$field]); ?>
                                <?php elseif (!empty($val['options']) && key_exists($v[$field], $val['options'])): ?>
                                    <?php echo $val['options'][$v[$field]]; ?>
                                <?php else: ?>
                                    <?php echo $v[$field]; ?>
                                <?php endif; ?>
                            </td>            
                            <?php endforeach; ?>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có muốn xóa nội dung này?')" href="<?php echo $BASE_URL . '/admin/' . $controller . '/delete/'.$v['id']; ?>">Xóa</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo $BASE_URL . '/admin/' . $controller . '/edit/'.$v['id']; ?>">Sửa</a></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
<!-- /#page-wrapper -->