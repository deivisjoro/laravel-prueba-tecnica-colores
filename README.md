# Fashion Color Match

Fashion Color Match es una aplicación web diseñada para ayudar a profesionales de la moda y entusiastas a determinar combinaciones de colores efectivas utilizando algoritmos basados en teorías del color.

## Características

- **Combinación de Colores**: Permite a los usuarios ingresar códigos de colores en formato hexadecimal y obtener evaluaciones sobre qué tan bien combinan.
- **Interfaz Intuitiva**: Interfaz fácil de usar que proporciona resultados instantáneos y claros.
- **Adaptable**: Basado en diversas teorías del color, permitiendo a los usuarios explorar y experimentar con diferentes combinaciones.

## Tecnologías Utilizadas

- **Frontend**: HTML, CSS (Bootstrap)
- **Backend**: PHP, Laravel
- **Database**: MySQL (Suponiendo que se use base de datos)

## Instalación

Sigue los siguientes pasos para configurar el proyecto en tu entorno local:

1. **Clona el repositorio**:
   ```bash
   git clone https://github.com/deivisjoro/laravel-prueba-tecnica-colores.git

2. **Instala las dependencias de PHP con Composer**:
   ```bash
   cd fashion-color-match
   composer install


3. **Configura tu archivo de entorno `.env` copiando el ejemplo**:
   ```bash
   cp .env.example .env

4. **Genera la llave de la aplicación**:
   ```bash
   php artisan key:generate

6. **Inicia el servidor de desarrollo**:
   ```bash
   php artisan serve

Navega a http://localhost:8000 en tu navegador.


## Uso

Para usar la herramienta de combinación de colores, navega a la sección **Colores** del sitio, ingresa los códigos de color en los campos proporcionados y presiona **Comprobar Compatibilidad**.

## Contribuir

Las contribuciones son lo que hacen que la comunidad de código abierto sea un lugar increíble para aprender, inspirar y crear. Cualquier contribución que hagas será **muy apreciada**.

1. Forkea el proyecto
2. Crea tu rama de características (`git checkout -b feature/AmazingFeature`)
3. Realiza tus cambios y haz commit (`git commit -m 'Add some AmazingFeature'`)
4. Sube tu rama (`git push origin feature/AmazingFeature`)
5. Abre una Pull Request