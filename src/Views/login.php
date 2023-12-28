{% extends 'base.php' %}

{% block main %}
<style>
    body{
        background-image: url("assets/images/bodyBG.webp");
        background-size: cover;
    }
</style>
<br>
<br>
<div class="formularioBG">
    <br>
    <br>
    <h1 style="text-align:center;">Iniciar Sesión</h1>
    <br>
    <hr>
    <br>
    <div class="formularioLogin">
        <form method="POST" action="/menu">
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" name="usuario"/>
                <label class="form-label" for="form2Example1">Correo electórnico</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" id="form2Example2" class="form-control" name="clave"/>
                <label class="form-label" for="form2Example2">Contraseña</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">¿Olvidaste la Contraseña?</a>
                </div>
            </div>

            <div class="ml-5">
                <!-- Submit button -->
                <button type="sumbit" class="btn btn-primary btn-block mb-4 mr-5">Iniciar Sesión</button>
            </div>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Aún no es miembro? <a href="#!">Registrar</a></p>

                <button type="button" class="btn btn-link btn-floating mx-1 ">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>
    </div>
</div>
{% if warning == 'no' %}
<script>alert('Usuario o Contraseña incorrecta')</script>
{% endif %}

{% endblock %}