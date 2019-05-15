<h2>Instrukcije za pokretanje projekta</h2>

<strong>Instrukcije Milica</strong>

1. Skines https://git-scm.com/download/mac, instaliras.
2. Provera da li git radi u terminalu preko komande: <mark>git --version</mark>
3. Ako je sve okej, nastavi dalje.

<hr>


<strong>Instrukcije Danijela</strong>

1. Skines https://git-scm.com/download/win
2. Tokom instalacije ides 'next' sve dok ne stignes do okacenih slika dole tu menjas opcije.
<img src="https://i.ibb.co/DWBn0Rv/1.png">
<img src="https://i.ibb.co/z8QVrPY/2.png">
3. Provera da li git radi u command promptu (cmd-u) preko komande: git --version
4. Ako je sve okej, nastavi dalje.

<hr>

<strong>Zajednicke instrukcije (posle instalacije git-a)</strong>

1. Otvorite cmd i terminal.
2. Smestite se u folder gde hocete da vam se skine projekat, komanda <mark>cd</mark>
2. komanda: <mark>git clone https://github.com/i0van/checkIn.git</mark>
3. U terminalu ce vam traziti username zatim password github account-a.
4. Ako se terminal ne buni trebalo bi da je skinuo ceo folder projekta sa github-a.
5. Odradite change directory u projekat, komanda: <mark>cd checkIn</mark>
6. Kada ste u folderu projekta komanda: <mark>composer install</mark>
7. Provera da li sve radi preko komande: <mark>php artisan serve</mark> i provera preko browsera 
na adresi http://127.0.0.1:8000
<img src="https://i.ibb.co/7kBRZFK/image.png">
<strong>^Slika iznad znaci da sve sljaka.^</strong>


<h3>'Whoops, looks like something went wrong.'</h3>
1. Proveriti da li se nalazimo u folderu projekta komanda: <mark>pwd</mark> (mac) ili <mark>echo %cd%</mark> (win).
2. Ako smo u projektu komanda: <mark>php artisan key:generate</mark> (generise kljuc za enkripciju).
3. U slucaju da nam izbacuje '.env' error, isprati korake ispod.
4. Potrebno je odraditi komandu(opet iz foldera projekta): <mark>mv .env.example .env</mark> (mac) ili <mark>rename .env.example .env </mark>(win).
5. Zatim komandom: <mark>php artisan key:generate</mark> (ponovo pokusavamo da generisemo kljuc)
6. Ako ga uspesno generise komanda: <mark>php artisan serve</mark>

