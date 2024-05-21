<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <title>Contact</title>
    </head>

    <body>
        <nav class="wrapper">
            <div class="brand">
                <div class="firstname">jacob</div>
                <div class="lastname">rahayaan</div>
            </div>

            <ul class="navigation">
                <li><a href="home.html">Home</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

        <div class="konten">
            <h1.>Hubungi saya</h1>
            <ul>
                <li><img src="gambar/4672500.png" />Email : rahayaanjacob@gmail.com</li>
            </ul>

              

            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    require 'db.php';
                
                    $nama = $conn->real_escape_string($_POST['data-nama']);
                    $pertayaan = $conn->real_escape_string($_POST['data-tanya']);
                
                    $sql = "INSERT INTO contacts (nama, pertayaan) VALUES ('$nama', '$pertayaan')";
                
                    if($conn->query($sql) === TRUE){
                        echo "<p>Pesan Anda telah terkirim!</p>";
                    }else{
                        echo "Error: ". $sql . "<br>" . $conn->error;
                    }
                
                    $conn->close();
                }
            ?>
            
            

            <form method="post" action="">
                <div class="form-group">
                    <label for="data-nama">Nama:</label>
                    <input type="text" name="data-nama" id="data-nama">
                </div>
                
                <div class="form-group">
                    <label for="data-tanya">Pertayaan</label>
                    <textarea name="data-tanya" id="data-tanya"></textarea>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>

        
    </body>
</html>
