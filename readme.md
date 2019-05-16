<h2>Instrukcije za pokretanje projekta</h2>

<b>Instrukcije Milica</b>

1. Skines https://git-scm.com/download/mac, instaliras.
2. Provera da li git radi u terminalu preko komande: <b>git --version</b>
3. Ako je sve okej, nastavi dalje.

<hr>


<b>Instrukcije Danijela</b>

1. Skines https://git-scm.com/download/win
2. Tokom instalacije ides 'next' sve dok ne stignes do okacenih slika dole tu menjas opcije.
<img src="https://i.ibb.co/DWBn0Rv/1.png">
<img src="https://i.ibb.co/z8QVrPY/2.png">
3. Provera da li git radi u command promptu (cmd-u) preko komande: <b>git --version</b><br>
4. Ako je sve okej, nastavi dalje.

<hr>

<strong>Zajednicke instrukcije (posle instalacije git-a)</strong>

1. Otvorite cmd i terminal.
2. Smestite se u folder gde hocete da vam se skine projekat, komanda <b>cd</b>
2. komanda: <b>git clone https://github.com/i0van/checkIn.git</b>
3. U terminalu ce vam traziti username zatim password github account-a.
4. Ako se terminal ne buni trebalo bi da je skinuo ceo folder projekta sa github-a.
5. Odradite change directory u projekat, komanda: <b>cd checkIn</b>
6. Kada ste u folderu projekta komanda: <b>composer install</b>
7. Provera da li sve radi preko komande: <b>php artisan serve</b> i provera preko browsera 
na adresi http://127.0.0.1:8000
<img src="https://i.ibb.co/7kBRZFK/image.png">
<b>^Slika iznad znaci da sve sljaka.^</b>

<hr>
<h3 align='center'>Greska</h3>
<h3 align='center'>'Whoops, looks like something went wrong.'</h3><br>
1. Proveriti da li se nalazimo u folderu projekta komanda: <mark>pwd</mark> (mac) ili <b>echo %cd%</b> (win).

2. Ako smo u projektu komanda: <b>php artisan key:generate</b> (generise kljuc za enkripciju).

3. U slucaju da nam izbacuje '.env' error, isprati korake ispod.

4. Potrebno je odraditi komandu(opet iz foldera projekta): <b>mv .env.example .env</b> (mac) ili <b>rename .env.example .env </b>(win).

5. Zatim komandom: <b>php artisan key:generate</b> (ponovo pokusavamo da generisemo kljuc)

6. Ako ga uspesno generise komanda: <b>php artisan serve</b>
