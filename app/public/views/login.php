<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>make your login</title>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS; ?>/main.css" />
    <link rel="stylesheet" href="<?= CSS; ?>/animation.css" />
</head>
<body>

<section class="background-svg">
    <?php 
        if(isset($_SESSION['error'])) { 
            echo "<div class='box-alert'><p>$_SESSION[error_msg]</p></div>"; 
        }
    ?>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 50 1440 320">
        <path class="svg-bt-3" fill="#00cba9" fill-opacity="1" d="M0,288L20,256C40,224,80,160,120,149.3C160,139,200,181,240,208C280,235,320,245,360,240C400,235,440,213,480,197.3C520,181,560,171,600,165.3C640,160,680,160,720,170.7C760,181,800,203,840,197.3C880,192,920,160,960,165.3C1000,171,1040,213,1080,208C1120,203,1160,149,1200,149.3C1240,149,1280,203,1320,197.3C1360,192,1400,128,1420,96L1440,64L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path>
    </svg>

    <svg class="svg-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="20 0 1400 320">
        <path class="svg-bt-1" fill="#00cba9" fill-opacity="1" d="M0,192L65.5,288L130.9,160L196.4,96L261.8,128L327.3,224L392.7,224L458.2,320L523.6,160L589.1,128L654.5,64L720,224L785.5,224L850.9,288L916.4,64L981.8,160L1047.3,64L1112.7,192L1178.2,64L1243.6,192L1309.1,160L1374.5,64L1440,256L1440,320L1374.5,320L1309.1,320L1243.6,320L1178.2,320L1112.7,320L1047.3,320L981.8,320L916.4,320L850.9,320L785.5,320L720,320L654.5,320L589.1,320L523.6,320L458.2,320L392.7,320L327.3,320L261.8,320L196.4,320L130.9,320L65.5,320L0,320Z"></path>
    </svg>

    <svg class="svg-bottom" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 320">
        <path class="svg-bt-2" fill="#00cba9" fill-opacity="1" d="M0,288L65.5,128L130.9,160L196.4,160L261.8,160L327.3,224L392.7,256L458.2,160L523.6,160L589.1,256L654.5,256L720,128L785.5,96L850.9,0L916.4,160L981.8,288L1047.3,224L1112.7,192L1178.2,288L1243.6,32L1309.1,32L1374.5,192L1440,224L1440,320L1374.5,320L1309.1,320L1243.6,320L1178.2,320L1112.7,320L1047.3,320L981.8,320L916.4,320L850.9,320L785.5,320L720,320L654.5,320L589.1,320L523.6,320L458.2,320L392.7,320L327.3,320L261.8,320L196.4,320L130.9,320L65.5,320L0,320Z"></path>
    </svg>
    
    <section class="form-login">
        <div class="container">
            <h2>Make your login</h2>
            <form action="" method="POST">
                <label for="">E-mail</label>
                <input type="email" name="email" required>

                <label for="">Password</label>
                <input type="password" name="password" required>

                <button type="submit">Login</button>
            </form>
        </div>
    </section><!--form-login-->
</section><!--background-svg-->

</body>
</html>