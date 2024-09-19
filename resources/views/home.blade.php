<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPOSTEL - Encuentra tu código postal</title>
    <!-- Importando Materialize CSS desde CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Importando iconos de Google -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Importando Vue.js desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!-- Importando Axios para hacer peticiones HTTP -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <style>
        .content {
            min-height: calc(100vh - 64px); /* Ajustar según la altura del header/footer */
            padding-bottom: 64px; /* Ajustar según la altura del footer */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #26a69a; /* Color de fondo del footer */
        }
    </style>
</head>

<body class="teal darken-2">
    <div class="container content" id="app">
        <img src="{{ asset('assets/logo-ipostel.png') }}" alt="" srcset="" width="100px">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Encuentra tu Código Postal</span>
                <div class="row">
                    <!-- Campo Select para Estado -->
                    <div class="input-field col s12">
                        <select v-model="selectedEstado" @change="loadMunicipios">
                            <option value="" disabled selected>Seleccione el estado</option>
                            <option v-for="estado in estados" :key="estado.id" :value="estado.id">@{{ estado.nombre }}</option>
                        </select>
                        <label for="estado">Estado</label>
                    </div>

                    <!-- Campo Select para Municipio -->
                    <div class="input-field col s12" v-if="municipios.length > 0">
                        <select v-model="selectedMunicipio" @change="loadParroquias">
                            <option value="" disabled selected>Seleccione el municipio</option>
                            <option v-for="municipio in municipios" :key="municipio.id" :value="municipio.id">@{{ municipio.nombre }}</option>
                        </select>
                        <label for="municipio">Municipio</label>
                    </div>

                    <!-- Campo Select para Parroquia -->
                    <div class="input-field col s12" v-if="parroquias.length > 0">
                        <select v-model="selectedParroquia" @change="showCodigoPostal">
                            <option value="" disabled selected>Seleccione la parroquia</option>
                            <option v-for="parroquia in parroquias" :key="parroquia.id" :value="parroquia.id">@{{ parroquia.nombre }}</option>
                        </select>
                        <label for="parroquia">Parroquia</label>
                    </div>

                    <!-- Campo de Texto para Código Postal -->
                    <div class="row" v-if="codigoPostal">
                        <div class="input-field col s11" >
                            <input type="text" id="cod_postal" v-model="codigoPostal" readonly>
                            <label for="cod_postal" class="active"> Código Postal</label>
                        </div>
                        <div class="input-field col s1">
                            <button class="btn-flat  text-lighten-3" onclick="copyToClipboard('cod_postal')">
                                <i class="material-icons">content_copy</i>
                            </button>
                        </div>
                    </div>

                </div>
                <p><small><i class="material-icons left">warning</i><b>Advertencia:</b> Esta aplicación ha sido desarrollada utilizando información proveniente de diversas fuentes en Internet. A pesar de nuestros esfuerzos por garantizar la precisión, es posible que contenga errores o imprecisiones. Agradecemos tu comprensión y te recomendamos verificar la información de forma independiente.</small></p>
            </div>
            <div class="card-action center">
                <p><b>¿Haz visto algún error?</b> Envianos tu observación por: </p>
                <a class="waves-effect waves-light btn teal darken-2" :href="'https://api.whatsapp.com/send?phone=+584249189923&text=' + encodeURIComponent('¡Buenos días! hemos encontrado un error en el *Estado:* _' + selectedEstado +'_ , *Municipio:* _' + selectedMunicipio + '_ , *Parroquia:* _' + selectedParroquia +'_ , *Código Postal:* _' + codigoPostal + '_ .') + '%0A' + encodeURIComponent('Aquí te dejo la corrección de la información:')" target="_blank">
                    <i class="fa-brands fa-whatsapp"></i>
                    WhatsApp
                </a>

                <a class="waves-effect waves-light btn teal darken-2 email-button"
                :href="'https://mail.google.com/mail/?view=cm&fs=1&to=jesanrocks@gmail.com&su=' + encodeURIComponent('Corrección de la APIs Venezuela y sus regiones con Código Postal') + '&body=' + encodeURIComponent('Hola, buen día hemos encontrado un error en el %0A%0A**Estado**: ' + selectedEstado + '%0A**Municipio**: ' + selectedMunicipio + '%0A**Parroquia**: ' + selectedParroquia + '%0A**Código Postal**: ' + codigoPostal + '.%0A%0ALa información correcta es:%0A%0AAnexo de la fuente de información.%0A%0A¡Espero sea de utilidad!')" 
                target="_blank">
                    <i class="fa-brands fa-google"></i>
                    Gmail
                </a>
            </div>
        </div>
    </div>

    <footer class="page-footer teal darken-2">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Sobre la Aplicación</h5>
                    <p class="grey-text text-lighten-4">
                        Esta aplicación ha sido desarrollada para proporcionar una experiencia de usuario fluida y eficiente. Si tienes alguna pregunta o comentario, no dudes en ponerte en contacto con el desarrollador.
                    </p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Redes Sociales</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="https://github.com/jesanrocks" target="_blank">GitHub</a></li>
                        <!-- Puedes añadir más enlaces a redes sociales aquí -->
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <a class="grey-text text-lighten-4 right" href="https://twitter.com/jesanrocks" target="_blank">Desarrollado por: @jesanrocks</a>
                <p class="center">© 2024 Derechos Reservados</p>
            </div>
        </div>
    </footer>
    
    <!-- Importando Materialize JS desde CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
     <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/b2e0d0a9e6.js" crossorigin="anonymous"></script>

    <script>
        // Inicializar Vue.js
        new Vue({
            el: '#app',
            data: {
                estados: [],
                municipios: [],
                parroquias: [],
                selectedEstado: null,
                selectedMunicipio: null,
                selectedParroquia: null,
                codigoPostal: '' // Nuevo campo para almacenar el código postal
            },
            methods: {
                loadEstados() {
                    // Hacer una petición a la API para obtener los estados
                    axios.get('api/estados')
                        .then(response => {
                            this.estados = response.data;
                            this.$nextTick(() => {
                                M.FormSelect.init(document.querySelectorAll('select'));
                            });
                        })
                        .catch(error => {
                            console.error("Error al cargar los estados:", error);
                        });
                },
                loadMunicipios() {
                    // Reiniciar municipios, parroquias y código postal
                    this.municipios = [];
                    this.parroquias = [];
                    this.selectedMunicipio = null;
                    this.selectedParroquia = null;
                    this.codigoPostal = '';

                    // Hacer una petición a la API para obtener los municipios según el estado seleccionado
                    axios.get(`api/municipios/${this.selectedEstado}`)
                        .then(response => {
                            this.municipios = response.data;
                            this.$nextTick(() => {
                                M.FormSelect.init(document.querySelectorAll('select'));
                            });
                        })
                        .catch(error => {
                            console.error("Error al cargar los municipios:", error);
                        });
                },
                loadParroquias() {
                    // Reiniciar parroquias y código postal
                    this.parroquias = [];
                    this.selectedParroquia = null;
                    this.codigoPostal = '';

                    // Hacer una petición a la API para obtener las parroquias según el municipio seleccionado
                    axios.get(`api/parroquias/${this.selectedMunicipio}`)
                        .then(response => {
                            this.parroquias = response.data;
                            this.$nextTick(() => {
                                M.FormSelect.init(document.querySelectorAll('select'));
                            });
                        })
                        .catch(error => {
                            console.error("Error al cargar las parroquias:", error);
                        });
                },
                showCodigoPostal() {
                    // Encontrar la parroquia seleccionada
                    const parroquiaSeleccionada = this.parroquias.find(parroquia => parroquia.id === this
                        .selectedParroquia);
                    if (parroquiaSeleccionada) {
                        // Asignar el código postal de la parroquia seleccionada
                        this.codigoPostal = parroquiaSeleccionada.cod_postal;
                    }
                }
            },
            mounted() {
                // Cargar los estados cuando se monte la aplicación
                this.loadEstados();

                // Inicializar MaterializeCSS
                M.AutoInit();
            }
        });
    </script>

    <script>
        function copyToClipboard(elementId) {
            // Obtener el valor del campo de texto
            var copyText = document.getElementById(elementId).value;

            // Crear un campo de texto temporal para copiar el contenido
            var tempInput = document.createElement("input");
            tempInput.value = copyText;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand("copy");
            document.body.removeChild(tempInput);

            // Notificar al usuario que se ha copiado el texto
            M.toast({html: 'Copiado al portapapeles!', classes: 'rounded'});
        }
    </script>

    <!--script>
        // Deshabilitar clic derecho
        document.addEventListener('contextmenu', function(event) {
            event.preventDefault();
            //alert("Clic derecho deshabilitado.");
        });

        // Deshabilitar F12 (Abrir DevTools)
        document.addEventListener('keydown', function(event) {
            // F12
            if (event.keyCode === 123) {
                event.preventDefault();
                alert("Tecla F12 deshabilitada.");
            }
            // Ctrl+Shift+I (Atajo de inspeccionar)
            if (event.ctrlKey && event.shiftKey && event.keyCode === 73) {
                event.preventDefault();
                alert("Atajo para inspeccionar deshabilitado.");
            }
        });

        (function() {
            const devtools = {
                open: false,
                orientation: null
            };

            const threshold = 160;

            const emitEvent = (state, orientation) => {
                window.dispatchEvent(new CustomEvent('devtoolschange', {
                    detail: {
                        open: state,
                        orientation: orientation
                    }
                }));
            };

            setInterval(() => {
                const widthThreshold = window.outerWidth - window.innerWidth > threshold;
                const heightThreshold = window.outerHeight - window.innerHeight > threshold;
                const orientation = widthThreshold ? 'vertical' : 'horizontal';

                if (!(heightThreshold && widthThreshold) && ((window.Firebug && window.Firebug.chrome && window.Firebug.chrome.isInitialized) || widthThreshold || heightThreshold)) {
                    if (!devtools.open || devtools.orientation !== orientation) {
                        emitEvent(true, orientation);
                        devtools.open = true;
                        devtools.orientation = orientation;
                    }
                } else {
                    if (devtools.open) {
                        emitEvent(false, null);
                        devtools.open = false;
                        devtools.orientation = null;
                    }
                }
            }, 500);

            window.addEventListener('devtoolschange', (e) => {
                if (e.detail.open) {
                    // Redirigir al video de Rick Astley
                    window.location.href = 'https://www.youtube.com/watch?v=dQw4w9WgXcQ';
                }
            });
        })();
    </script-->
</body>

</html>
