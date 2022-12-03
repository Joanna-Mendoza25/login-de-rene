<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Aviso de Privacidad </title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

    <!-- Styles -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Aviso de Privacidad ') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h1>Aviso de privacidad integral</h1>

                <p>Paleteria DJN S.A mejor conocido como Paleteria DJN, con domicilio en Isidro Fabela 614, colonia Doctores. (Enfrente de la Normal 1 de Toluca) y portal de internet http://localhost/paleteria/index.html, es el responsable del uso y protección de sus datos personales, y al respecto le informamos lo siguiente:</p>
                <br>
                <h3>¿Para qué fines utilizaremos sus datos personales?</h3>
                <p>Los datos personales que recabamos de usted, los utilizaremos para las siguientes finalidades que son necesarias para el servicio que solicita:</p>
                <p>Respuesta a mensajes del formulario de contacto, Prestación de cualquier servicio solicitado</p>
                <br>
                <h3>¿Qué datos personales utilizaremos para estos fines?</h3>
                <p>Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos personales:</p>
                <p> Datos de identificación y contacto</p>
                <br>
                <h3>¿Cómo puede acceder, rectificar o cancelar sus datos personales, u oponerse a su uso o ejercer la revocación de consentimiento?</h3>
                <p>Usted tiene derecho a conocer qué datos personales tenemos de usted, para qué los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la corrección de su información personal en caso de que esté desactualizada, sea inexacta o incompleta (Rectificación); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no está siendo utilizada adecuadamente (Cancelación); así como oponerse al uso de sus datos personales para fines específicos (Oposición). Estos derechos se conocen como derechos ARCO.</p>
                <p>Para el ejercicio de cualquiera de los derechos ARCO, debe enviar una petición vía correo electrónico a Camariere@gmail.com y deberá contener:</p>
                <br>
                <ol>
                    <li>Nombre completo del titular.</li>
                    <li>Domicilio.</li>
                    <li>Teléfono.</li>
                    <li>Correo electrónico usado en este sitio web.</li>
                    <li>Copia de una identificación oficial adjunta.</li>
                    <li>Asunto «Derechos ARCO»</li>
                    </ol>
                    <p> Descripción el objeto del escrito, los cuales pueden ser de manera enunciativa más no limitativa los siguientes: Revocación del consentimiento para tratar sus datos personales; y/o Notificación del uso indebido del tratamiento de sus datos personales; y/o Ejercitar sus Derechos ARCO, con una descripción clara y precisa de los datos a Acceder, Rectificar, Cancelar o bien, Oponerse. En caso de Rectificación de datos personales, deberá indicar la modificación exacta y anexar la documentación soporte; es importante en caso de revocación del consentimiento, que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligación legal requiramos seguir tratando sus datos personales. Asimismo, usted deberá considerar que para ciertos fines, la revocación de su consentimiento implicará que no le podamos seguir prestando el servicio que nos solicitó, o la conclusión de su relación con nosotros.  </p>
                    <br>
                    <p>¿En cuántos días le daremos respuesta a su solicitud?
                      <br>  5 días</p>
                      <p>¿Por qué medio le comunicaremos la respuesta a su solicitud?
                      <br>  Al mismo correo electrónico de donde se envío la petición.</p>
                      <h3>El uso de tecnologías de rastreo en nuestro portal de internet</h3>
                      <p>Le informamos que en nuestra página de internet utilizamos cookies, web beacons u otras tecnologías, a través de las cuales es posible monitorear su comportamiento como usuario de internet, así como brindarle un mejor servicio y experiencia al navegar en nuestra página. Los datos personales que obtenemos de estas tecnologías de rastreo son los siguientes:</p>
                      <p>Identificadores, nombre de usuario y contraseñas de sesión, Fecha y hora del inicio y final de una sesión de un usuario, Listas y hábitos de consumo en páginas de compras</p>
                      <p>Estas cookies, web beacons y otras tecnologías pueden ser deshabilitadas. Para conocer cómo hacerlo, consulte el menú de ayuda de su navegador. Tenga en cuenta que, en caso de desactivar las cookies, es posible que no pueda acceder a ciertas funciones personalizadas en nuestros sitio web.</p>
                      <h3>¿Cómo puede conocer los cambios en este aviso de privacidad?</h3>
                      <p>El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras prácticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas. Nos comprometemos a mantener actualizado este aviso de privacidad sobre los cambios que pueda sufrir y siempre podrá consultar las actualizaciones que existan en el sitio web .</p>
                      
                      <p id="aviso-format">>Última actualización de este aviso de privacidad: 18/03/2022</p>
                      <!-- <a class="btn btn-outline-primary me-md-5" href="{{route('register.index')}}">Regresar</a> -->
                     

&copy; 2022 Paleteria DJN.      Aviso de privacidad     |   Contáctanos


                <div class="form-group container">
                    <li class="nav-item active col-9">
                        <a class="btn btn-warning me-md-5" href=" {{route('register.index')}} "> Regresar</a>
                    </li>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection




</body>
</html>
