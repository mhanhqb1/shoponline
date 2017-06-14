<!-- Page Content -->
        <div id="page-wrapper">
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
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(!empty($data)): ?>
                                <?php foreach ($data as $v): ?>
                                    <tr class="odd gradeX" align="center">
                                        <?php foreach ($displayFields as $field => $val): ?>
                                            <?php if (!empty($val['image'])): ?>
                                                <td><img src="../media/images/<?php echo $v[$field]; ?>" width="100"/></td>
                                            <?php elseif (!empty($val['textarea'])): ?>
                                                <td><?php echo html_entity_decode($v[$field]); ?></td>
                                            <?php else: ?>
                                                <td><?php echo $v[$field]; ?></td>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có muốn xóa nội dung này?')" href="index.php?controller=<?php echo $controller;?>&action=del&id=<?php echo $v['id']; ?>">Xóa</a></td>
                                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="index.php?controller=<?php echo $controller;?>&action=edit&id=<?php echo $v['id']; ?>">Sửa</a></td>
                                    </tr>
                                <?php endforeach;?>
                            <?php endif;?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->