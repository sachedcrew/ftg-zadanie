
<h1 align="center">
Footbal Team Game - zadanie rekrutacyjne
</h1>


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>



## Etapy powstawania projektu

1)	Utworzenie i konfiguracja projektu Laravel
2)	Napisanie modelu User oraz migracji, utworzenie repozytoriów
3)	Napisanie kontrolera AuthController z funkcjami logowania oraz rejestracji – wykorzystanie FormRequest dla walidacji danych, Events dla notowania wydarzeń rejestracji czy logowania usera oraz Jobs do obsługi wysłania maila z potwierdzeniem rejestacji.
4)	Napisanie stosownych widoków blade
5)	Stworzenie routingu, wykorzystanie middleware do sprawdzenia ról użytkownika
6)	Utworzenie modeli Post oraz UserActivity, napisanie stosownych migracji, utworzenie repozytoriów
7)	Napisanie kontrolerów AdminController, RedaktorController oraz PostController z funkcjami tworzenia, edycji, usuwania, wyświetlania (pojedynczego wpisu oraz grupy wpisów z paginacją) dla użytkowników i postów – dostęp do tych funkcjonalności po zalogowaniu stosownie do roli – routing/middleware – walidacja z wykorzystaniem FormRequest, utworzenie stosownych Events dla tych wydarzeń
8)	Utworzenie komponentu resetowania hasła (kontrolery ForgotPasswordControllet oraz ResetPasswordController)
9)	Konfiguracja stosownych listeners dla notowania events
10)	Dostosowanie widoków blade do konkretnych kontrolerów i ich funkcji, odpowiednia konfiguracja routingu


## Które części uważasz że można by lepiej dopracować gdybyś miał/a więcej czasu?

1) Zadbałbym o odpowiednie komunikaty przy walidacji oraz komunikaty powiadomień dotyczących events.
2) Utworzyłbym nowe events dla powiadomień o innych zdarzeniach w aplikacji. 
3) Zadbałbym o takie funkcjonalności jak: możliwość czytania powiadomień po zalogowaniu, stworzyłbym stronę profilu użytkownika.
4) Sprawdziłym aplikację pod kontem optymalnych, spójnych rozwiązań oraz napisał testy do utworzonych funkcjonalności.
5) Poświęciłbym czas na kosmetykę i front-end aplikacji, aby była bardziej intuicyjna, przejrzysta dla użytkownika.
