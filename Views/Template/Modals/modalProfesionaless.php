<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario de registro con múltiples pasos</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="root">
        <form action="" class="form-register">
            <div class="form-register__header">
                <ul class="progressbar">
                    <li class="progressbar__option active">paso 1</li>
                    <li class="progressbar__option">paso 2</li>
                    <li class="progressbar__option">paso 3</li>
                </ul>
                <h1 class="form-register__title">Resgistrate en CodeMundo</h1>
            </div>
            <div class="form-register__body">
                <div class="step active" id="step-1">
                    <div class="step__header">
                        <h2 class="step__title">Información de cuenta<small>(Paso 1)</small></h2>
                    </div>
                    <div class="step__body">
                        <input type="email" placeholder="Correo" class="step__input">
                        <input type="password" placeholder="Contraseña" class="step__input">
                        <input type="password" placeholder="Confirmar contraseña" class="step__input">
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--next" data-to_step="2" data-step="1">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-2">
                    <div class="step__header">
                        <h2 class="step__title">Información de personal<small>(Paso 2)</small></h2>
                    </div>
                    <div class="step__body">
                        <input type="text" placeholder="Nombre" class="step__input">
                        <input type="text" placeholder="Apellido" class="step__input">
                        <input type="tel" placeholder="Teléfono" class="step__input">
                        <textarea rows="4" cols="80" placeholder="Dirección" class="step__input"></textarea>
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="1" data-step="2">Regresar</button>
                        <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button>
                    </div>
                </div>
                <div class="step" id="step-3">
                    <div class="step__header">
                        <h2 class="step__title">Información X<small>(Paso 3)</small></h2>
                    </div>
                    <div class="step__body">
                        <input type="text" placeholder="Dato x" class="step__input">
                        <input type="text" placeholder="Dato x" class="step__input">
                        <input type="text" placeholder="Dato x" class="step__input">
                    </div>
                    <div class="step__footer">
                        <button type="button" class="step__button step__button--back" data-to_step="2" data-step="3">Regresar</button>
                        <button type="submit" class="step__button">Registrarse</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script src="js/app.js"></script>
</body>
</html>