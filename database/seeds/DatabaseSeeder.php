<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Admin account seed
        if(DB::table('users'))DB::table('users')->delete();
        DB::table('users')->insert([
            'email' => 'admin@admin.pl',
            'password' => bcrypt('admin'),
        ]);

        //Some example blog posts
        if(DB::table('blog'))DB::table('blog')->delete();
        DB::table('blog')->insert([
            'title' => 'Witams',
            'post' => 'Dzień dobry! Witam na moim blogu. Mamy tutaj dwie drużyny. Kto dziś zwycięży? Dowiemy się już za chwilę!',
            'author' => 'Administrator',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('blog')->insert([
            'title' => 'Pan Tadeusz',
            'post' => 'Litwo! Ojczyzno moja! Ty jesteś jak zdrowie. Ile cię trzeba cenić, ten Bonapart czarował, no, tak nie szukać prawodawstwa w której ramię z wolna krocz stado cielic tyrolskich z las i tylko zgadywana w gościnę zaprasza. Właśnie rzecz swoję tokowa i widok obław przypominał mu słowo ciocia koło uch brzęczało ciągle Sędziemu tłumaczył dlaczego urządzenie pańskie jachał szlachcic młody panek i widać z dziecinną radością pociągnął za starszemi, a ciotka w naukach postąpił choć świadka nie widział, bo tak mędrsi fircykom oprzeć się ziemi. Podróżny długo wzbronionej swobody. Wiedział, że Hrabia ma jutro sam wewnątrz siebie mimowolnie głowy potakiwał. Sędzia spał. Więc do spoczynku. Starsi i przepraszał Sędziego. Sędzia go nie pyta bo tak to mówiąc, że za zającami nie szukać prawodawstwa w pomroku. Wprawdzie zdała się z mnóstwem gości niewiele z Paryża a wszystko ze cztery. Tymczasem na pacierz po tobie. Panno Święta, co je wicher rozerwie i młodzieży.',
            'author' => 'Administrator',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('blog')->insert([
            'title' => 'Staromowa',
            'post' => 'Drogi Marszałku, Wysoka Izbo. PKB rośnie. Nie zapominajmy jednak, że zakup nowego sprzętu powoduje docenianie wag nowych propozycji. Obywatelu, wyeliminowanie korupcji pociąga za sobą proces wdrożenia i znaczenia tych problemów nie możemy zdradzać iż dalszy rozwój różnych form oddziaływania. Wszystko od początku. Jak już mówiłem jasne jest to, iż wdrożenie nowych, lepszych rozwiązań pomaga w określaniu form oddziaływania. Ostatnie szlify systemu. Różnorakie i unowocześniania kolejnych kroków w kształtowaniu kolejnych kroków w restrukturyzacji przedsiębiorstwa. Sytuacja która miała miejsce szkolenia kadr spełnia istotną rolę w większym stopniu tworzenie obecnej sytuacji. Nie chcę państwu niczego sugerować, ale skoordynowanie pracy obu urzędów rozszerza nam horyzonty obecnej sytuacji. Ostatnie szlify systemu. Wyższe założenie ideowe, a szczególnie zakończenie tego projektu spełnia istotną rolę w określaniu postaw uczestników wobec zadań programowych pomaga w tym zakresie jest ważne zadanie w określaniu obecnej sytuacji. Natomiast utworzenie komisji śledczej do tej sprawy zabezpiecza udział szerokiej grupie w kształtowaniu systemu obsługi spełnia ważne z dotychczasowymi zasadami dalszych kierunków postępowego wychowania. Reasumując. wykorzystanie unijnych dotacji zmusza nas do przeanalizowania dalszych kierunków rozwoju. Praktyka dnia codziennego dowodzi, że usprawnienie systemu powszechnego uczestnictwa. Podniosły się iż usprawnienie systemu powszechnego uczestnictwa. Jak już mówiłem jasne jest zauważenie, że dokończenie aktualnych projektów zabezpiecza udział szerokiej grupie w kształtowaniu form działalności powoduje docenianie wag odpowiednich warunków administracyjno-finansowych. Koleżanki i realizacji nowych propozycji. W ten sposób realizacja określonych zadań stanowionych przez organizację. Co mamy na rozszerzenie bazy o nowe rekordy powoduje docenianie wag postaw uczestników wobec zadań stanowionych przez organizację. Sytuacja która miała miejsce szkolenia kadry odpowiadającego potrzebom.',
            'author' => 'Administrator',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('blog')->insert([
            'title' => 'Kant',
            'post' => 'Początek traktatu czasu panowania Fryderyka Wielkiego, Króla Pruskiego żył w przyczytaniu musi być może. Więc ja mogę ten albo człowieka była wzniecona. Ale się tycze pierwszego zarzutu, mianowicie skąd się takiego umysł ludzki potrzebuje pewnego wzoru lub niedostatkiem i dobroć woli i cnotliwy człowiek, jako rozumne stworzenie wykonywać powinien utraciłyby swoją powinność. Już sławny Feliński wytknął Kopczyńskiemu różne błędy w religii naturalnej i dla pożytku i oraz największą moralną doskonałość, ale rzeczy część jego predykatów Zupełność w naturze rozumnej wolnej istoty jest więc uważam na świecie? Trzeci zarzut powzięty stąd, ie się w takim razie zachodzą pobudki rozumowe. Nagroda zawdzięczająca.',
            'author' => 'Administrator',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('blog')->insert([
            'title' => 'Lorem ipsum',
            'post' => 'Lorem ipsum dolor sit amet tempus malesuada. Nullam id purus non nisl pellentesque at, egestas blandit, dapibus a, bibendum mi. Pellentesque varius lorem. Maecenas quis enim. Duis a sapien. Nam quis velit. Integer id nisl. Etiam tellus. Cras tincidunt eu, tristique magna felis tincidunt dictum tempus, urna quis diam bibendum varius nunc sit amet dolor. In hac habitasse platea dictumst. Nulla dignissim. Vivamus ornare, orci ut lorem. Aliquam quis wisi. Aliquam nonummy, tellus ante ipsum at ipsum. Duis posuere vitae, nunc. Nam non purus. Sed sagittis a, condimentum wisi. Sed eu magna dictum lectus bibendum leo at interdum libero. In hac habitasse platea dictumst. Nulla eleifend erat ornare quam. Ut elit ornare non, facilisis libero. Etiam urna. Aenean ac arcu faucibus at, nisl. Nulla ut arcu. Aenean egestas quam quam purus, nec tellus. Suspendisse est. Vivamus nec elit semper risus. Etiam vehicula sed, viverra luctus, nisl eros, aliquam erat. Pellentesque mattis lorem sapien, lacinia erat. Quisque libero. Morbi augue eget diam elit, ut sapien. Aenean congue arcu turpis velit, vitae ante. Mauris viverra nonummy, tellus sodales in, elementum vitae, vestibulum vel, vehicula libero ante, varius vitae, rutrum vel, dignissim massa. Aliquam vel dolor. Donec sit amet, sollicitudin a, tristique mauris.',
            'author' => 'Administrator',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('blog')->insert([
            'title' => 'Jacek Soplica',
            'post' => 'Litwo! Ojczyzno moja! Ty jesteś jak zdrowie. Ile cię trzeba cenić, ten zamek na dole. Ujrzała, zaśmiała się, spójrzał, lecz lekki. odgadniesz, że teraz za granicę, to mówiąc, że był portret króla Stanisława. Ojcu Podkomorzego zdał się położył! Co by stary który teraz za zającami nie mające kłów, rogów, pazurów zostawiano dla żony przy świecy i panien wiele. Stryjaszek myśli wkrótce wielki post - kanonada. Ruskie przysłowie: z parkanu na później odkładać goście głodni, chodzili daleko na krzaki fijołkowe skłonił oczyma ciekawymi po stole i Moskalom przez rozmowy grzeczne z jakich rąk muskała włosów pukle i w tabakierę palcami ruch chartów tym mieczem wypędzi z brabanckich koronek poprawiała, to mówiąc, że ważny i Hrabia ma jutro na to mówiąc, że on je posłyszał, znikał nagle taż chętka, nie gadał lecz lekki. odgadniesz, że ją bardzo szybko, suwała się teraz za dozorcę księdza, który go nie na prawo, koziołka, z napisami:.',
            'author' => 'Administrator',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('blog')->insert([
            'title' => 'Nowomowa',
            'post' => 'Drogi Marszałku, Wysoka Izbo. PKB rośnie. Nie zapominajmy jednak, że zakup nowego sprzętu powoduje docenianie wag nowych propozycji. Obywatelu, wyeliminowanie korupcji pociąga za sobą proces wdrożenia i znaczenia tych problemów nie możemy zdradzać iż dalszy rozwój różnych form oddziaływania. Wszystko od początku. Jak już mówiłem jasne jest to, iż wdrożenie nowych, lepszych rozwiązań pomaga w określaniu form oddziaływania. Ostatnie szlify systemu. Różnorakie i unowocześniania kolejnych kroków w kształtowaniu kolejnych kroków w restrukturyzacji przedsiębiorstwa. Sytuacja która miała miejsce szkolenia kadr spełnia istotną rolę w większym stopniu tworzenie obecnej sytuacji. Nie chcę państwu niczego sugerować, ale skoordynowanie pracy obu urzędów rozszerza nam horyzonty obecnej sytuacji. Ostatnie szlify systemu. Wyższe założenie ideowe, a szczególnie zakończenie tego projektu spełnia istotną rolę w określaniu postaw uczestników wobec zadań programowych pomaga w tym zakresie jest ważne zadanie w określaniu obecnej sytuacji. Natomiast utworzenie komisji śledczej do tej sprawy zabezpiecza udział szerokiej grupie w kształtowaniu systemu obsługi spełnia ważne z dotychczasowymi zasadami dalszych kierunków postępowego wychowania. Reasumując. wykorzystanie unijnych dotacji zmusza nas do przeanalizowania dalszych kierunków rozwoju. Praktyka dnia codziennego dowodzi, że usprawnienie systemu powszechnego uczestnictwa. Podniosły się iż usprawnienie systemu powszechnego uczestnictwa. Jak już mówiłem jasne jest zauważenie, że dokończenie aktualnych projektów zabezpiecza udział szerokiej grupie w kształtowaniu form działalności powoduje docenianie wag odpowiednich warunków administracyjno-finansowych. Koleżanki i realizacji nowych propozycji. W ten sposób realizacja określonych zadań stanowionych przez organizację. Co mamy na rozszerzenie bazy o nowe rekordy powoduje docenianie wag postaw uczestników wobec zadań stanowionych przez organizację. Sytuacja która miała miejsce szkolenia kadry odpowiadającego potrzebom.',
            'author' => 'Administrator',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
