<?php
$nama = "Julyana Fayumi Hidayat";
$univ = "International Woman University";
$prodi = "Informatika";
$hobby = array("Game Mobile", "Musik");
$course = "Full Stack Web Development";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MSIB5_Latihan_Git_Jully</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <header>
            <h1>
                <?php
                echo $nama;
                ?>
            </h1>
        </header>
        <div class="blur"></div>
        <section>
            <div>
                <img src="July.jpg" alt="">
            </div>
            <div>
                <h1 class="nama">
                    <?php
                    echo $nama;
                    ?>
                </h1>
            </div>
            <h1 class="univ">
                <?php
                echo $univ;
                ?>
            </h1>
            <h1 class="prodi">
                Program Study
                <?php
                echo $prodi;
                ?>
            </h1>
            <h1 class="course">
                <?php
                echo $course;
                ?>
            </h1>
            <h1 class="hoby">
                My Hobby :
                <span>
                    <?php
                    echo $hobby[0] . " dan " . $hobby[1];
                    ?>
                </span>
            </h1>
        </section>
    </main>
</body>

</html>