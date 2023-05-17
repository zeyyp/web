
<?php

$kullanıcı ="g221210069@sakarya.edu.tr";
$pass="g221210069";


if(isset($_POST["onay"]))
{
$x =$_POST["ad"];
$y = $_POST["sifre"];

    if($x == null || $y == null)
    {
        echo "Lütfen Boş Bırakmayınız<br>" ;
        "Bilgilerinizi Kontrol Edip Tekrar Giriş Yapınız..<br>";
        
        echo "<p> <a href ='login.html'> Login Sayfasına Geri Dön</p> </a>  ";
    }
    else

    if(!(filter_var($x, FILTER_VALIDATE_EMAIL)))
    {
       echo "Geçersiz bir email adresi girdiniz...";
    }
    else

    if($x== $kullanıcı && $y == $pass)
   
    {
        echo "Giriş Yapıldı : ) <br>"  ;
        echo "<b>Hos geldiniz!!   " .$_POST["sifre"] . "<b> <br> " ;
  
        echo "<p> <a href ='a.html'> Ana Sayfaya Git</p> </a>  ";
    } 
    else 
    {
        echo "Bilgileriniz Hatalıdır <br>" ;
        "Bilgilerinizi Kontrol Edip Tekrar Giriş Yapınız..<br>";

        echo "<p> <a href ='login.html'> Login Sayfasına Geri Dön</p> </a>  ";   
    }
} 
else
{
echo " Lütfen Onay Kutusunu İşaretleyiniz...<br> <br>";

echo "<p> <a href ='login.html'> Login Sayfasına Geri Dön</p> </a>  ";
}


?>