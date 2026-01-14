   <?php
        //ambil data yang dikirim dari form POST
        //cek apakah form sudah disubmit
        if(isset($_POST['submit'])){
             $nama = $_POST["nama"];
              echo $nama;
        } else{
            // redirect halaman 
            header("Location: postandget.php");
        }
    ?>