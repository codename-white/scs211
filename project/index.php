<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="widh=device-width, initial-scale=1.0" />
  <title>Cafe</title>

  <link rel="stylesheet" href="style.css" />
  <script>
    function myFunction() {
      alert("Page is loaded");
    }
  </script>
</head>

<body onload="myFunction()">
  <nav>
    <div class="container">
      <div class="nev-con">
        <div class="logo">
          <a href="#">Meekhwamsook</a>
        </div>
        <ul class="menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Product</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="hero">
    <div class="container">
      <div class="hero-con">
        <div class="hero-info">
          <h3>Meekhwamsook</h3>
          <p>
            Happy Valentine's Day🌹 มีความสุขชานมไข่มุกกระบอก
            สนับสนุนความรักทุกรูปแบบ จะรักเพื่อน รักแฟน รักครอบครัว
            หรือรักตัวเอง❤️ อย่าลืมมาเติมความหวานที่ "มีความสุข" ทุกสาขานะคะ🥰
            #MeeKhwamSook #มีความสุขชานมไข่มุกกระบอก #ValentinesDay
          </p>
          <a href="/scs211/Produtce/milk.html" class="hero-btn">กดดูสินค้า</a>
        </div>
        <div class="hero-img">
          <img src="https://meekhwamsook.com/wp-content/uploads/2022/01/mainphoto.png" alt="" width="70%" />
        </div>
      </div>
    </div>
  </section>

  <section class="blog">
    <div class="container">
      <div class="blog-title">
        <h3>Our Blog</h3>
      </div>
      <div class="row" style="display: flex; flex-wrap: wrap;">

        <?php
        $blog_obj = json_decode(file_get_contents("https://raw.githubusercontent.com/codename-white/scs211/main/product.json"), true);
        $blog = $blog_obj["blog"];
        $count = 0;
        ?>

        <?php foreach ($blog as $row) { ?>
          <div class="blog-item style=" display: flex; flex-wrap: wrap;">
            <img style="width: 25%;" src="<?= $row["image"] ?>" alt="<?= $row["title"] ?>">
            <h4><?= $row["title"] ?></h4>
            <p><?= $row["name"] ?></p>
            <a href="#" class="blog-btn"><?= $row["button"] ?></a>
          </div>

          <?php
          $count++;
          if ($count % 4 == 0) {
            echo '</div><div class="row" style="display: flex; flex-wrap: wrap;">';
          }
          ?>
        <?php } ?>

      </div>
    </div>
  </section>

          


</body>

</html>
