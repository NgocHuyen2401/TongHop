<!-- contact.php -->
<!DOCTYPE html>
<html>
<style type = "text/css">
    .lienhe{
        margin-left:1000px;
    }
</style>
<?php include('header.php'); ?>

<body>
    <div class="page">
        <?php include('top_navbar.php'); ?>

        <div class="page-content d-flex align-items-stretch">
            <?php include('side_navbar.php'); ?>

            <div class="content-inner">
                <!-- Page Header-->
                <header class="page-header">
                    <div class="container-fluid">
                        <h2 class="no-margin-bottom">Liên hệ chúng tôi</h2>
                    </div>
                </header>
                <!-- Contact Form Section -->
                <section class="contact-form no-padding-bottom">
                    <div class="container-fluid">
                        <div class="row bg-white has-shadow">
                            <div class="col-lg-12">
                                <div class="form-container">
                                    <h3>Gửi yêu cầu của bạn</h3>
                                    <form action="contact_process.php" method="POST">
                                        <div class="form-group">
                                            <label for="name">Họ và tên</label>
                                            <input type="text" id="name" name="name" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="message">Tin nhắn</label>
                                            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Gửi yêu cầu</button>
                                        <div class="lienhe">
    <a href="note.php" target="_blank"><b><font color="red">Lưu ý quan trọng khi bay</font></b></a>
</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <?php include('footer.php'); ?>
            </div>
        </div>
    </div>

    <?php include('script_files.php'); ?>
</body>

</html>
