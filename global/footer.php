<footer class="site-footer p-0 m-0">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <div class="">
                    <span class="small">
                        <?php
                        $sql = "SELECT * FROM constants_footer WHERE title = 'footer text'";
                        $result = $conn->query($sql);
                        while ($fetched = $result->fetch_assoc()) {
                            $show = $fetched['text'];

                            echo '
                                '.$show.' <i class="icon-heart text-danger" aria-hidden="true"></i>
                            ';
                        }
                        ?>
                    </span>
                </div>
            </div>

        </div>
    </div>
</footer>