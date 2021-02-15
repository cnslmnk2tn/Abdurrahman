<? php
$ i = 0; // Aranan sayi
$ toplam = 0; // Bulunan sayi adedi
while ($ toplam <= 3) // Bulunacak sayi adedi -1
{
	$ i ++; // Aranan sayiyi arttir
	$ itoplam = 0;
	($ k = 1; $ k <$ i; $ k ++) için 
	{
		
		eğer ($ i% $ k == 0) // Sayi, sayinin tam bölenimi
		{
			$ itoplam + = $ k; // Bölünenlerin toplamina ekle
		}
	}
	if ($ itoplam == $ i) // Bölünenlerin toplami aranan sayiya esitmi
	{
		echo "$ i <br />";
		$ toplam ++; // Arattirmarya devam ettirmek için sayacı arttir
	}
}
?>