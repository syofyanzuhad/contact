<html>
  <head>
  </head>
  <body>
<!-- LOGIN -->
                  <div class="tab-pane fade show active" id="gmail" role="tabpanel" aria-labelledby="pills-home-tab">
                    <form method="post" action="index.php">
                      <div class="form-group ">
                        <label for="name">Nama</label>
                        <input type="name" class="form-control" name="namestr" id="name" placeholder="Enter your name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="emailstr" id="email" aria-describedby="emailHelp"
                          placeholder="Enter your email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                          else.</small>
                      </div>
                      <div class="form-group ">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="pesan" class="form-control" placeholder="Write Massage"></textarea>
                      </div>
                      <button type="submit" name="message" class="btn btn-primary"><a href="backend.php" class="text-light">SEND</a></button>
                    </form>
                  </div>
                  <!-- Akhir Gmail -->

                  <!-- Whatsapp -->
                  <div class="tab-pane fade" id="whatsapp" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <form method="post" action="index.php">
                      <div class="form-group ">
                        <label for="name2">Nama</label>
                        <input type="name" class="form-control" name="namestr2" id="name2"
                          placeholder="Enter your name">
                      </div>
                      <div class="form-group">
                        <label for="email2">Email</label>
                        <input type="email" class="form-control" name="emailstr2" id="email2"
                          aria-describedby="emailHelp" placeholder="Enter your email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                          else.</small>
                      </div>
                      <div class="form-group ">
                        <label for="telp">No. Telp</label>
                        <input type="name" class="form-control" name="namestr2" id="telp" placeholder="Enter your name">
                        <small id="telpHelp" class="form-text text-muted">Number phone needed for message
                          end-to-end.</small>
                      </div>
                      <div class="form-group ">
                        <label for="pesan2">Pesan</label>
                        <textarea name="pesan2" id="pesan2" class="form-control" placeholder="Write Massage"></textarea>
                      </div>
                      <button type="submit" name="message2" class="btn btn-primary"><a href="backend.php" class="text-light">SEND</a></button>
                    </form>
                  </div>
                  <!-- Akhir Whatsapp -->

                  <!-- CONTACT -->
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <form method="post" action="index.php">
                      <div class="form-group ">
                        <label for="name3">Nama</label>
                        <input type="name" class="form-control" name="namestr3" id="name3"
                          placeholder="Enter your name">
                      </div>
                      <div class="form-group">
                        <label for="email3">Email</label>
                        <input type="email" class="form-control" name="emailstr3" id="email3"
                          aria-describedby="emailHelp" placeholder="Enter your email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                          else.</small>
                      </div>
                      <div class="form-group ">
                        <label for="pesan3">Pesan</label>
                        <textarea name="pesan3" id="pesan3" class="form-control" placeholder="Write Massage"></textarea>
                      </div>
                      <button type="submit" name="message3" class="btn btn-primary"><a href="backend.php" class="text-light">SEND</a></button>
                    </form>
                  </div>
                  <!-- Akhir CONTACT -->
  </body>
</html>
<?php

if (isset($_POST['message'])) {
  if (!empty($_POST['namestr']) || !empty($_POST['emailstr']) || !empty($_POST['pesan'])) {
    $namestr = $_POST['namestr'];
    $emailstr = $_POST['emailstr'];
    $messagestr = $_POST['pesan'];
    $to = "sofyanzuhad2@gmail.com";
    $subject = "Message From Stranger";
    $message = "Name : " . $namestr . "\n" . "SEND YOU A MESSAGE !" . "\n" . "Message :" . "\n" . $messagestr;
    $headers = "From: " . $emailstr . "\r\n";
    if (mail($to, $subject, $message)) {
      echo "" ?> <div class="alert alert-success fixed-top text-center" role="alert">EMAIL SENDED ! Thank You !</div> <?php
    } else {
      echo "" ?> <div class="alert alert-danger  text-center" role="alert">FAILED ! (correct your email !)</div> <?php
      }
  } else {
    echo "" ?> <div class="alert alert-danger  text-center" role="alert">FAILED ! (every element must be writed !)
</div> <?php
  }
}
?>
