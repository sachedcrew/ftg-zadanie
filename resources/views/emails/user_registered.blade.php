<!DOCTYPE html>
<html>
<head>
    <title>Wiadomość o rejestracji</title>
</head>
<body>
    <h1>Witaj {{ $user->name }},</h1>
    
    <p>Dziękujemy za rejestrację na naszej stronie.</p>
    
    <p>Twój adres e-mail: {{ $user->email }}</p>
    
    <p>Mamy nadzieję, że będziesz korzystać z naszej platformy. Pozdrawiamy!</p>
</body>
</html>