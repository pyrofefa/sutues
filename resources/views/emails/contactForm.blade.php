<x-mail::message>
# Ha llegado un nuevo mensaje

<h4>Nombre: {{ $name }}</h4>
<h4>Correo: {{ $email }}</h4>
<h4>Asunto: {{ $subject }}</h4>
<h4>Mensaje: {{ $content }}</h4>

<br>
{{ config('app.name') }}
</x-mail::message>
