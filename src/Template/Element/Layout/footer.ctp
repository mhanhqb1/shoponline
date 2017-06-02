
        <script src="<?php echo $BASE_URL ?>/js/jquery.lazyload.min.js"></script>
        <script type="text/javascript">
                                        $(document).ready(function () {
                                            $("img.lazy").show().lazyload({
                                                threshold: 100,
                                                skip_invisible: false,
                                                effect: "fadeIn"
                                            });
                                        });
                                        function viewDetail(productid, cat) {
                                            var url;
                                            if (cat != "0") {
                                                url = "index.php?ac=chitietsanpham&masp=" + productid + "&maloai=" + cat;
                                            } else {
                                                url = "index.php?ac=chitietsanpham&masp=" + productid;
                                            }

                                            location.href = url;
                                        }

        </script>
