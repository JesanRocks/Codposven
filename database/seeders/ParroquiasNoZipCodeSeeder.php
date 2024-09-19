<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParroquiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parroquias = [
            // Estado Amazonas (estado_id = 1)
            // Municipio Atabapo (municipio_id = 1)
            ['nombre' => 'San Fernando de Atabapo', 'municipio_id' => 1],
            ['nombre' => 'Ucata', 'municipio_id' => 1],
            ['nombre' => 'Yapacana', 'municipio_id' => 1],
            ['nombre' => 'Caname', 'municipio_id' => 1],
            // Municipio Alto Orinoco (municipio_id = 2)
            ['nombre' => 'La Esmeralda', 'municipio_id' => 2],
            ['nombre' => 'Huachamacare', 'municipio_id' => 2],
            ['nombre' => 'Marawaka', 'municipio_id' => 2],
            ['nombre' => 'Mavaka', 'municipio_id' => 2],
            ['nombre' => 'Sierra Parima', 'municipio_id' => 2],
            // Municipio Atures (municipio_id = 3)
            ['nombre' => 'Fernando Girón Tovar', 'municipio_id' => 3],
            ['nombre' => 'Luis Alberto Gómez', 'municipio_id' => 3],
            ['nombre' => 'Pahueña', 'municipio_id' => 3],
            ['nombre' => 'Platanillal', 'municipio_id' => 3],
            // Municipio Autana (municipio_id = 4)
            ['nombre' => 'Samariapo', 'municipio_id' => 4],
            ['nombre' => 'Sipapo', 'municipio_id' => 4],
            ['nombre' => 'Munduapo', 'municipio_id' => 4],
            ['nombre' => 'Guayapo', 'municipio_id' => 4],
            ['nombre' => 'Isla Ratón', 'municipio_id' => 4],
            // Municipio Manapiare (municipio_id = 5)
            ['nombre' => 'Alto Ventuari', 'municipio_id' => 5],
            ['nombre' => 'Medio Ventuari', 'municipio_id' => 5],
            ['nombre' => 'Bajo Ventuari', 'municipio_id' => 5],
            ['nombre' => 'Manapiare', 'municipio_id' => 5],
            // Municipio Maroa (municipio_id = 6)
            ['nombre' => 'Maroa', 'municipio_id' => 6],
            ['nombre' => 'Victorino', 'municipio_id' => 6],
            ['nombre' => 'Comunidad', 'municipio_id' => 6],
            // Municipio Río Negro (municipio_id = 7)
            ['nombre' => 'Casiquiare', 'municipio_id' => 7],
            ['nombre' => 'Cocuy', 'municipio_id' => 7],
            ['nombre' => 'San Carlos de Río Negro', 'municipio_id' => 7],
            ['nombre' => 'Solano', 'municipio_id' => 7],

            // Estado Anzoátegui (estado_id = 2)
            // Municipio Anaco (municipio_id = 8)
            ['nombre' => 'Anaco', 'municipio_id' => 8],
            ['nombre' => 'San Joaquín', 'municipio_id' => 8],
            // Municipio Aragua (municipio_id = 9)
            ['nombre' => 'Aragua de Barcelona', 'municipio_id' => 9],
            ['nombre' => 'Cachipo', 'municipio_id' => 9],
            // Municipio Bolívar (municipio_id = 10)
            ['nombre' => 'Barcelona', 'municipio_id' => 10],
            ['nombre' => 'El Carmen', 'municipio_id' => 10],
            ['nombre' => 'San Cristóbal', 'municipio_id' => 10],
            ['nombre' => 'Bergantín', 'municipio_id' => 10],
            ['nombre' => 'Caigua', 'municipio_id' => 10],
            ['nombre' => 'El Pilar', 'municipio_id' => 10],
            ['nombre' => 'Naricual', 'municipio_id' => 10],
            // Municipio Bruzual (municipio_id = 11)
            ['nombre' => 'Clarines', 'municipio_id' => 11],
            ['nombre' => 'Guanape', 'municipio_id' => 11],
            ['nombre' => 'Sabana de Uchire', 'municipio_id' => 11],
            // Municipio Cajigal (municipio_id = 12)
            ['nombre' => 'Onoto', 'municipio_id' => 12],
            ['nombre' => 'San Pablo', 'municipio_id' => 12],
            // Municipio Carvajal (municipio_id = 13)
            ['nombre' => 'Valle de Guanape', 'municipio_id' => 13],
            ['nombre' => 'Santa Bárbara', 'municipio_id' => 13],
            // Municipio Freites (municipio_id = 14)
            ['nombre' => 'Cantaura', 'municipio_id' => 14],
            ['nombre' => 'Libertador', 'municipio_id' => 14],
            ['nombre' => 'Santa Rosa', 'municipio_id' => 14],
            ['nombre' => 'Urica', 'municipio_id' => 14],
            // Municipio Guanipa (municipio_id = 15)
            ['nombre' => 'San José de Guanipa', 'municipio_id' => 15],
            // Municipio Guanta (municipio_id = 16)
            ['nombre' => 'Guanta', 'municipio_id' => 16],
            ['nombre' => 'Chorrerón', 'municipio_id' => 16],
            // Municipio Independencia (municipio_id = 17)
            ['nombre' => 'Soledad', 'municipio_id' => 17],
            ['nombre' => 'Mamo', 'municipio_id' => 17],
            // Municipio Libertad (municipio_id = 18)
            ['nombre' => 'San Mateo', 'municipio_id' => 18],
            ['nombre' => 'El Carito', 'municipio_id' => 18],
            ['nombre' => 'Santa Inés', 'municipio_id' => 18],
            // Municipio McGregor (municipio_id = 19)
            ['nombre' => 'El Chaparro', 'municipio_id' => 19],
            ['nombre' => 'Tomás Alfaro Calatrava', 'municipio_id' => 19],
            // Municipio Miranda (municipio_id = 20)
            ['nombre' => 'Pariaguán', 'municipio_id' => 20],
            ['nombre' => 'Atapirire', 'municipio_id' => 20],
            ['nombre' => 'Boca del Pao', 'municipio_id' => 20],
            ['nombre' => 'El Pao', 'municipio_id' => 20],
            ['nombre' => 'Múcura', 'municipio_id' => 20],
            // Municipio Monagas (municipio_id = 21)
            ['nombre' => 'Mapire', 'municipio_id' => 21],
            ['nombre' => 'Piar', 'municipio_id' => 21],
            ['nombre' => 'Santa Clara', 'municipio_id' => 21],
            ['nombre' => 'San Diego de Cabrutica', 'municipio_id' => 21],
            ['nombre' => 'Uverito', 'municipio_id' => 21],
            ['nombre' => 'Zuata', 'municipio_id' => 21],
            // Municipio Peñalver (municipio_id = 22)
            ['nombre' => 'Puerto Píritu', 'municipio_id' => 22],
            ['nombre' => 'San Miguel', 'municipio_id' => 22],
            ['nombre' => 'Sucre', 'municipio_id' => 22],
            // Municipio Píritu (municipio_id = 23)
            ['nombre' => 'Píritu', 'municipio_id' => 23],
            ['nombre' => 'San Francisco', 'municipio_id' => 23],
            // Municipio San Juan de Capistrano (municipio_id = 24)
            ['nombre' => 'Boca de Uchire', 'municipio_id' => 24],
            ['nombre' => 'Boca de Chávez', 'municipio_id' => 24],
            // Municipio Santa Ana (municipio_id = 25)
            ['nombre' => 'Santa Ana', 'municipio_id' => 25],
            ['nombre' => 'Pueblo Nuevo', 'municipio_id' => 25],
            // Municipio Simón Rodríguez (municipio_id = 26)
            ['nombre' => 'El Tigre', 'municipio_id' => 26],
            ['nombre' => 'Edmundo Barrios', 'municipio_id' => 26],
            ['nombre' => 'Miguel Otero Silva', 'municipio_id' => 26],
            // Municipio Sotillo (municipio_id = 27)
            ['nombre' => 'Puerto La Cruz', 'municipio_id' => 27],
            ['nombre' => 'Pozuelos', 'municipio_id' => 27],
            // Municipio Urbaneja (municipio_id = 28)
            ['nombre' => 'Lechería', 'municipio_id' => 28],
            ['nombre' => 'El Morro', 'municipio_id' => 28],

            // Estado Apure (estado_id = 3)
            // Municipio Achaguas (municipio_id = 29)
            ['nombre' => 'Achaguas', 'municipio_id' => 29],
            ['nombre' => 'Apurito', 'municipio_id' => 29],
            ['nombre' => 'El Yagual', 'municipio_id' => 29],
            ['nombre' => 'Guachara', 'municipio_id' => 29],
            ['nombre' => 'Mucuritas', 'municipio_id' => 29],
            ['nombre' => 'Queseras del Medio', 'municipio_id' => 29],
            // Municipio Biruaca (municipio_id = 30)
            ['nombre' => 'Biruaca', 'municipio_id' => 30],
            // Municipio Muñoz (municipio_id = 31)
            ['nombre' => 'Bruzual', 'municipio_id' => 31],
            ['nombre' => 'Mantecal', 'municipio_id' => 31],
            ['nombre' => 'Quintero', 'municipio_id' => 31],
            ['nombre' => 'Rincón Hondo', 'municipio_id' => 31],
            ['nombre' => 'San Vicente', 'municipio_id' => 31],
            // Municipio Páez (municipio_id = 32)
            ['nombre' => 'Guasdualito', 'municipio_id' => 32],
            ['nombre' => 'Aramendi', 'municipio_id' => 32],
            ['nombre' => 'El Amparo', 'municipio_id' => 32],
            ['nombre' => 'San Camilo', 'municipio_id' => 32],
            ['nombre' => 'Urdaneta', 'municipio_id' => 32],
            // Municipio Pedro Camejo (municipio_id = 33)
            ['nombre' => 'San Juan de Payara', 'municipio_id' => 33],
            ['nombre' => 'Codazzi', 'municipio_id' => 33],
            ['nombre' => 'Cunaviche', 'municipio_id' => 33],
            // Municipio Rómulo Gallegos (municipio_id = 34)
            ['nombre' => 'Elorza', 'municipio_id' => 34],
            ['nombre' => 'La Trinidad', 'municipio_id' => 34],
            // Municipio San Fernando (municipio_id = 35)
            ['nombre' => 'San Fernando', 'municipio_id' => 35],
            ['nombre' => 'El Recreo', 'municipio_id' => 35],
            ['nombre' => 'Peñalver', 'municipio_id' => 35],
            ['nombre' => 'San Rafael de Atamaica', 'municipio_id' => 35],

            // Estado Aragua (estado_id = 4)
            // Municipio Bolívar (municipio_id = 36)
            ['nombre' => 'San Mateo', 'municipio_id' => 36],
            // Municipio Camatagua (municipio_id = 37)
            ['nombre' => 'Camatagua', 'municipio_id' => 37],
            ['nombre' => 'Carmen de Cura', 'municipio_id' => 37],
            // Municipio Francisco Linares Alcántara (municipio_id = 38)
            ['nombre' => 'Santa Rita', 'municipio_id' => 38],
            ['nombre' => 'Francisco de Miranda', 'municipio_id' => 38],
            ['nombre' => 'Monseñor Feliciano González', 'municipio_id' => 38],
            // Municipio Girardot (municipio_id = 39)
            ['nombre' => 'Pedro José Ovalles', 'municipio_id' => 39],
            ['nombre' => 'Joaquín Crespo', 'municipio_id' => 39],
            ['nombre' => 'José Casanova Godoy', 'municipio_id' => 39],
            ['nombre' => 'Madre María de San José', 'municipio_id' => 39],
            ['nombre' => 'Andrés Eloy Blanco', 'municipio_id' => 39],
            ['nombre' => 'Los Tacariguas', 'municipio_id' => 39],
            ['nombre' => 'Las Delicias', 'municipio_id' => 39],
            ['nombre' => 'Choroní', 'municipio_id' => 39],
            // Municipio José Ángel Lamas (municipio_id = 40)
            ['nombre' => 'Santa Cruz', 'municipio_id' => 40],
            // Municipio José Félix Ribas (municipio_id = 41)
            ['nombre' => 'Juan Vicente Bolívar y Ponte', 'municipio_id' => 41],
            ['nombre' => 'Castor Nieves Ríos', 'municipio_id' => 41],
            ['nombre' => 'Las Guacamayas', 'municipio_id' => 41],
            ['nombre' => 'Pao de Zárate', 'municipio_id' => 41],
            ['nombre' => 'Zuata', 'municipio_id' => 41],
            // Municipio José Rafael Revenga (municipio_id = 42)
            ['nombre' => 'El Consejo', 'municipio_id' => 42],
            // Municipio Libertador (municipio_id = 43)
            ['nombre' => 'Palo Negro', 'municipio_id' => 43],
            ['nombre' => 'San Martín de Porres', 'municipio_id' => 43],
            // Municipio Mario Briceño Iragorry (municipio_id = 44)
            ['nombre' => 'El Limón', 'municipio_id' => 44],
            ['nombre' => 'Caña de Azúcar', 'municipio_id' => 44],
            // Municipio Ocumare de la Costa de Oro (municipio_id = 45)
            ['nombre' => 'Samán de Güere', 'municipio_id' => 45],
            // Municipio San Casimiro (municipio_id = 46)
            ['nombre' => 'San Casimiro', 'municipio_id' => 46],
            ['nombre' => 'Güiripa', 'municipio_id' => 46],
            ['nombre' => 'Ollas de Caramacate', 'municipio_id' => 46],
            ['nombre' => 'Valle Morín', 'municipio_id' => 46],
            // Municipio San Sebastián (municipio_id = 47)
            ['nombre' => 'San Sebastián', 'municipio_id' => 47],
            // Municipio Santiago Mariño (municipio_id = 48)
            ['nombre' => 'Turmero', 'municipio_id' => 48],
            ['nombre' => 'Arevalo Aponte', 'municipio_id' => 48],
            ['nombre' => 'Chuao', 'municipio_id' => 48],
            ['nombre' => 'Samán de Güere', 'municipio_id' => 48],
            ['nombre' => 'Alfredo Pacheco Miranda', 'municipio_id' => 48],
            // Municipio Santos Michelena (municipio_id = 49)
            ['nombre' => 'Las Tejerías', 'municipio_id' => 49],
            ['nombre' => 'Tiara', 'municipio_id' => 49],
            // Municipio Sucre (municipio_id = 50)
            ['nombre' => 'Cagua', 'municipio_id' => 50],
            ['nombre' => 'Bella Vista', 'municipio_id' => 50],
            // Municipio Tovar (municipio_id = 51)
            ['nombre' => 'Colonia Tovar', 'municipio_id' => 51],
            // Municipio Urdaneta (municipio_id = 52)
            ['nombre' => 'Barbacoas', 'municipio_id' => 52],
            ['nombre' => 'San Francisco de Cara', 'municipio_id' => 52],
            ['nombre' => 'Taguay', 'municipio_id' => 51],
            ['nombre' => 'Las Peñitas', 'municipio_id' => 52],
            // Municipio Zamora (municipio_id = 53)
            ['nombre' => 'Villa de Cura', 'municipio_id' => 53],
            ['nombre' => 'Magdaleno', 'municipio_id' => 53],
            ['nombre' => 'San Francisco de Asís', 'municipio_id' => 53],
            ['nombre' => 'Valles de Tucutunemo', 'municipio_id' => 53],
            ['nombre' => 'Augusto Mijares', 'municipio_id' => 53],

            // Estado Barinas (estado_id = 5)
            // Municipio Alberto Arvelo Torrealba (municipio_id = 54)
            ['nombre' => 'Sabaneta', 'municipio_id' => 54],
            ['nombre' => 'Juan Antonio Rodríguez Domínguez', 'municipio_id' => 54],
            // Municipio Andrés Eloy Blanco (municipio_id = 55)
            ['nombre' => 'El Cantón', 'municipio_id' => 55],
            ['nombre' => 'Santa Cruz de Guacas', 'municipio_id' => 55],
            ['nombre' => 'Puerto Vivas', 'municipio_id' => 55],
            // Municipio Antonio José de Sucre (municipio_id = 56)
            ['nombre' => 'Socopó', 'municipio_id' => 56],
            ['nombre' => 'Nicolás Pulido', 'municipio_id' => 56],
            ['nombre' => 'Andrés Bello', 'municipio_id' => 56],
            // Municipio Arismendi (municipio_id = 57)
            ['nombre' => 'Arismendi', 'municipio_id' => 57],
            ['nombre' => 'Guadarrama', 'municipio_id' => 57],
            ['nombre' => 'La Unión', 'municipio_id' => 57],
            ['nombre' => 'San Antonio', 'municipio_id' => 57],
            // Municipio Barinas (municipio_id = 58)
            ['nombre' => 'Barinas', 'municipio_id' => 58],
            ['nombre' => 'Alto Barinas', 'municipio_id' => 58],
            ['nombre' => 'Corazón de Jesús', 'municipio_id' => 58],
            ['nombre' => 'El Carmen', 'municipio_id' => 58],
            ['nombre' => 'Rómulo Betancourt', 'municipio_id' => 58],
            ['nombre' => 'Ramón Ignacio Méndez', 'municipio_id' => 58],
            ['nombre' => 'Alfredo Arvelo Larriva', 'municipio_id' => 58],
            ['nombre' => 'San Silvestre', 'municipio_id' => 58],
            ['nombre' => 'Santa Inés', 'municipio_id' => 58],
            ['nombre' => 'Santa Lucía', 'municipio_id' => 58],
            ['nombre' => 'Torunos', 'municipio_id' => 58],
            ['nombre' => 'El Corozo', 'municipio_id' => 58],
            ['nombre' => 'Palacio Fajardo', 'municipio_id' => 58],
            ['nombre' => 'Manuel Palacio Fajardo', 'municipio_id' => 58],
            ['nombre' => 'Dominga Ortiz de Páez', 'municipio_id' => 58],
            // Municipio Bolívar (municipio_id = 59)
            ['nombre' => 'Barinitas', 'municipio_id' => 59],
            ['nombre' => 'Altamira de Cáceres', 'municipio_id' => 59],
            ['nombre' => 'Calderas', 'municipio_id' => 59],
            // Municipio Cruz Paredes (municipio_id = 60)
            ['nombre' => 'Barrancas', 'municipio_id' => 60],
            ['nombre' => 'El Socorro', 'municipio_id' => 60],
            ['nombre' => 'Masparrito', 'municipio_id' => 60],
            // Municipio Ezequiel Zamora (municipio_id = 61)
            ['nombre' => 'Santa Bárbara', 'municipio_id' => 61],
            ['nombre' => 'Pedro Briceño Méndez', 'municipio_id' => 61],
            ['nombre' => 'Ramón Ignacio Méndez', 'municipio_id' => 61],
            ['nombre' => 'José Ignacio del Pumar', 'municipio_id' => 61],
            // Municipio Obispos (municipio_id = 62)
            ['nombre' => 'Obispos', 'municipio_id' => 62],
            ['nombre' => 'Guasimitos', 'municipio_id' => 62],
            ['nombre' => 'El Real', 'municipio_id' => 62],
            ['nombre' => 'La Luz', 'municipio_id' => 62],
            // Municipio Pedraza (municipio_id = 63)
            ['nombre' => 'Ciudad Bolivia', 'municipio_id' => 63],
            ['nombre' => 'Ignacio Briceño', 'municipio_id' => 63],
            ['nombre' => 'José Félix Ribas', 'municipio_id' => 63],
            ['nombre' => 'Páez', 'municipio_id' => 63],
            // Municipio Rojas (municipio_id = 64)
            ['nombre' => 'Libertad', 'municipio_id' => 64],
            ['nombre' => 'Dolores', 'municipio_id' => 64],
            ['nombre' => 'Palacios Fajardo', 'municipio_id' => 64],
            ['nombre' => 'Santa Rosa', 'municipio_id' => 64],
            ['nombre' => 'Simón Rodríguez', 'municipio_id' => 64],
            // Municipio Sosa (municipio_id = 65)
            ['nombre' => 'Ciudad de Nutrias', 'municipio_id' => 65],
            ['nombre' => 'El Regalo', 'municipio_id' => 65],
            ['nombre' => 'Puerto de Nutrias', 'municipio_id' => 65],
            ['nombre' => 'Santa Catalina', 'municipio_id' => 65],
            ['nombre' => 'Simón Bolívar', 'municipio_id' => 65],

            // Estado Bolívar (estado_id = 6)
            // Municipio Angostura del Orinoco (municipio_id = 66)
            ['nombre' => 'Raúl Leoni', 'municipio_id' => 66],
            ['nombre' => 'Barceloneta', 'municipio_id' => 66],
            ['nombre' => 'Santa Bárbara', 'municipio_id' => 66],
            ['nombre' => 'San Francisco', 'municipio_id' => 66],
            // Municipio Caroní (municipio_id = 67)
            ['nombre' => 'Cachamay', 'municipio_id' => 67],
            ['nombre' => 'Chirica', 'municipio_id' => 67],
            ['nombre' => 'Dalla Costa', 'municipio_id' => 67],
            ['nombre' => 'Once de Abril', 'municipio_id' => 67],
            ['nombre' => 'Simón Bolívar', 'municipio_id' => 67],
            ['nombre' => 'Unare', 'municipio_id' => 67],
            ['nombre' => 'Universidad', 'municipio_id' => 67],
            ['nombre' => 'Vista al Sol', 'municipio_id' => 67],
            ['nombre' => 'Pozo Verde', 'municipio_id' => 67],
            ['nombre' => 'Yocoima', 'municipio_id' => 67],
            // Municipio Cedeño (municipio_id = 68)
            ['nombre' => 'Altagracia', 'municipio_id' => 68],
            ['nombre' => 'Ascensión Farreras', 'municipio_id' => 68],
            ['nombre' => 'Guaniamo', 'municipio_id' => 68],
            ['nombre' => 'La Urbana', 'municipio_id' => 68],
            ['nombre' => 'Pijiguaos', 'municipio_id' => 68],
            // Municipio El Callao (municipio_id = 69)
            ['nombre' => 'El Callao', 'municipio_id' => 69],
            // Municipio Gran Sabana (municipio_id = 70)
            ['nombre' => 'Gran Sabana', 'municipio_id' => 70],
            ['nombre' => 'Ikabarú', 'municipio_id' => 70],
            // Municipio Heres (municipio_id = 71)
            ['nombre' => 'Agua Salada', 'municipio_id' => 71],
            ['nombre' => 'Catedral', 'municipio_id' => 71],
            ['nombre' => 'José Antonio Páez', 'municipio_id' => 71],
            ['nombre' => 'La Sabanita', 'municipio_id' => 71],
            ['nombre' => 'Vista Hermosa', 'municipio_id' => 71],
            ['nombre' => 'Marhuanta', 'municipio_id' => 71],
            ['nombre' => 'Orinoco', 'municipio_id' => 71],
            ['nombre' => 'Panapana', 'municipio_id' => 71],
            ['nombre' => 'Zea', 'municipio_id' => 71],
            // Municipio Padre Pedro Chien (municipio_id = 72)
            ['nombre' => 'Padre Pedro Chien', 'municipio_id' => 72],
            // Municipio Piar (municipio_id = 73)
            ['nombre' => 'Andrés Eloy Blanco', 'municipio_id' => 73],
            ['nombre' => 'Pedro Cova', 'municipio_id' => 73],
            ['nombre' => 'Upata', 'municipio_id' => 73],
            // Municipio Roscio (municipio_id = 74)
            ['nombre' => 'Roscio', 'municipio_id' => 74],
            ['nombre' => 'Salóm', 'municipio_id' => 74],
            // Municipio Sifontes (municipio_id = 75)
            ['nombre' => 'Tumeremo', 'municipio_id' => 75],
            ['nombre' => 'Dalla Costa', 'municipio_id' => 75],
            ['nombre' => 'San Isidro', 'municipio_id' => 75],
            // Municipio Sucre (municipio_id = 76)
            ['nombre' => 'Sucre', 'municipio_id' => 76],
            ['nombre' => 'Aripao', 'municipio_id' => 76],
            ['nombre' => 'Guarataro', 'municipio_id' => 76],
            ['nombre' => 'Las Majadas', 'municipio_id' => 76],
            ['nombre' => 'Moitaco', 'municipio_id' => 76],

            // Estado Carabobo (estado_id = 7)
            // Municipio Bejuma (municipio_id = 77)
            ['nombre' => 'Canoabo', 'municipio_id' => 77],
            ['nombre' => 'Simón Bolívar', 'municipio_id' => 77],
            // Municipio Carlos Arvelo (municipio_id = 78)
            ['nombre' => 'Güigüe', 'municipio_id' => 78],
            ['nombre' => 'Belén', 'municipio_id' => 78],
            ['nombre' => 'Tacarigua', 'municipio_id' => 78],
            // Municipio Diego Ibarra (municipio_id = 79)
            ['nombre' => 'Mariara', 'municipio_id' => 79],
            ['nombre' => 'Aguas Calientes', 'municipio_id' => 79],
            // Municipio Guacara (municipio_id = 80)
            ['nombre' => 'Ciudad Alianza', 'municipio_id' => 80],
            ['nombre' => 'Guacara', 'municipio_id' => 80],
            ['nombre' => 'Yagua', 'municipio_id' => 80],
            // Municipio Juan José Mora (municipio_id = 81)
            ['nombre' => 'Morón', 'municipio_id' => 81],
            ['nombre' => 'Urama', 'municipio_id' => 81],
            // Municipio Libertador (municipio_id = 82)
            ['nombre' => 'Tocuyito', 'municipio_id' => 82],
            ['nombre' => 'Independencia (Campo Carabobo)', 'municipio_id' => 82],
            // Municipio Los Guayos (municipio_id = 83)
            ['nombre' => 'Los Guayos', 'municipio_id' => 83],
            // Municipio Miranda (municipio_id = 84)
            ['nombre' => 'Miranda', 'municipio_id' => 84],
            // Municipio Montalbán (municipio_id = 85)
            ['nombre' => 'Montalbán', 'municipio_id' => 85],
            // Municipio Naguanagua (municipio_id = 86)
            ['nombre' => 'Naguanagua', 'municipio_id' => 86],
            // Municipio Puerto Cabello (municipio_id = 87)
            ['nombre' => 'Bartolomé Salóm', 'municipio_id' => 87],
            ['nombre' => 'Democracia', 'municipio_id' => 87],
            ['nombre' => 'Fraternidad', 'municipio_id' => 87],
            ['nombre' => 'Goaigoaza', 'municipio_id' => 87],
            ['nombre' => 'Juan José Flores', 'municipio_id' => 87],
            ['nombre' => 'Unión', 'municipio_id' => 87],
            ['nombre' => 'Borburata', 'municipio_id' => 87],
            ['nombre' => 'Patanemo', 'municipio_id' => 87],
            // Municipio San Diego (municipio_id = 88)
            ['nombre' => 'San Diego', 'municipio_id' => 88],
            // Municipio San Joaquín (municipio_id = 89)
            ['nombre' => 'San Joaquín', 'municipio_id' => 89],
            // Municipio Valencia (municipio_id = 90)
            ['nombre' => 'Candelaria', 'municipio_id' => 90],
            ['nombre' => 'Catedral', 'municipio_id' => 90],
            ['nombre' => 'El Socorro', 'municipio_id' => 90],
            ['nombre' => 'Miguel Peña', 'municipio_id' => 90],
            ['nombre' => 'Rafael Urdaneta', 'municipio_id' => 90],
            ['nombre' => 'San Blas', 'municipio_id' => 90],
            ['nombre' => 'San José', 'municipio_id' => 90],
            ['nombre' => 'Santa Rosa', 'municipio_id' => 90],
            ['nombre' => 'Negro Primero', 'municipio_id' => 90],

            // Estado Cojedes (estado_id = 8)
            // Municipio Anzoátegui (municipio_id = 91)
            ['nombre' => 'Cojedes', 'municipio_id' => 91],
            ['nombre' => 'Juan de Mata Suárez', 'municipio_id' => 91],
            // Municipio Girardot (municipio_id = 92)
            ['nombre' => 'El Baúl', 'municipio_id' => 92],
            ['nombre' => 'Sucre', 'municipio_id' => 92],
            // Municipio Lima Blanco (municipio_id = 93)
            ['nombre' => 'Macapo', 'municipio_id' => 93],
            ['nombre' => 'La Aguadita', 'municipio_id' => 93],
            // Municipio Pao de San Juan Bautista (municipio_id = 94)
            ['nombre' => 'El Pao', 'municipio_id' => 94],
            // Municipio Ricaurte (municipio_id = 95)
            ['nombre' => 'Libertad de Cojedes', 'municipio_id' => 95],
            ['nombre' => 'El Amparo', 'municipio_id' => 95],
            // Municipio Rómulo Gallegos (municipio_id = 96)
            ['nombre' => 'Las Vegas', 'municipio_id' => 96],
            // Municipio San Carlos (municipio_id = 97)
            ['nombre' => 'San Carlos de Austria', 'municipio_id' => 97],
            ['nombre' => 'Juan Ángel Bravo', 'municipio_id' => 97],
            ['nombre' => 'Manuel Manrique', 'municipio_id' => 97],
            // Municipio Tinaco (municipio_id = 98)
            ['nombre' => 'Tinaco', 'municipio_id' => 98],
            // Municipio Tinaquillo  (municipio_id = 99)
            ['nombre' => 'Tinaquillo', 'municipio_id' => 99],

            // Estado Delta Amacuro (estado_id = 9)
            // Municipio Antonio Díaz (municipio_id = 100)
            ['nombre' => 'Curiapo', 'municipio_id' => 100],
            ['nombre' => 'Almirante Luis Brión', 'municipio_id' => 100],
            ['nombre' => 'Francisco Aniceto Lugo', 'municipio_id' => 100],
            ['nombre' => 'Manoa', 'municipio_id' => 100],
            ['nombre' => 'Padre Barral', 'municipio_id' => 100],
            ['nombre' => 'Santos de Abelgas', 'municipio_id' => 100],
            // Municipio Casacoima (municipio_id = 101)
            ['nombre' => 'Imataca', 'municipio_id' => 101],
            ['nombre' => 'Moruca', 'municipio_id' => 101],
            ['nombre' => 'Piacoa', 'municipio_id' => 101],
            ['nombre' => 'San José', 'municipio_id' => 101],
            ['nombre' => 'Juan Millán', 'municipio_id' => 101],
            // Municipio Pedernales (municipio_id = 102)
            ['nombre' => 'Pedernales', 'municipio_id' => 102],
            ['nombre' => 'Luis Beltrán Prieto Figueroa', 'municipio_id' => 102],
            // Municipio Tucupita (municipio_id = 103)
            ['nombre' => 'San José', 'municipio_id' => 103],
            ['nombre' => 'José Vidal Marcano', 'municipio_id' => 103],
            ['nombre' => 'Leonardo Ruiz Pineda', 'municipio_id' => 103],
            ['nombre' => 'Mariscal Antonio José de Sucre', 'municipio_id' => 103],
            ['nombre' => 'Monseñor Argimiro García', 'municipio_id' => 103],
            ['nombre' => 'San Rafael', 'municipio_id' => 103],
            ['nombre' => 'Virgen del Valle', 'municipio_id' => 103],

            // Distrito Capital (estado_id = 10)
            // Municipio Libertador (municipio_id = 104)
            ['nombre' => '23 de Enero', 'municipio_id' => 104],
            ['nombre' => 'Altagracia', 'municipio_id' => 104],
            ['nombre' => 'Antímano', 'municipio_id' => 104],
            ['nombre' => 'Caricuao', 'municipio_id' => 104],
            ['nombre' => 'Catedral', 'municipio_id' => 104],
            ['nombre' => 'Coche', 'municipio_id' => 104],
            ['nombre' => 'El Junquito', 'municipio_id' => 104],
            ['nombre' => 'El Paraíso', 'municipio_id' => 104],
            ['nombre' => 'El Recreo', 'municipio_id' => 104],
            ['nombre' => 'El Valle', 'municipio_id' => 104],
            ['nombre' => 'Candelaria', 'municipio_id' => 104],
            ['nombre' => 'La Pastora', 'municipio_id' => 104],
            ['nombre' => 'La Vega', 'municipio_id' => 104],
            ['nombre' => 'Macarao', 'municipio_id' => 104],
            ['nombre' => 'San Agustín', 'municipio_id' => 104],
            ['nombre' => 'San Bernardino', 'municipio_id' => 104],
            ['nombre' => 'San José', 'municipio_id' => 104],
            ['nombre' => 'San Juan', 'municipio_id' => 104],
            ['nombre' => 'San Pedro', 'municipio_id' => 104],
            ['nombre' => 'Santa Rosalía', 'municipio_id' => 104],
            ['nombre' => 'Santa Teresa', 'municipio_id' => 104],
            ['nombre' => 'Sucre', 'municipio_id' => 104],

            // Estado Falcón (estado_id = 11)
    // Municipio Acosta (municipio_id = 105)
    ['nombre' => 'Capadare', 'municipio_id' => 105],
    ['nombre' => 'La Pastora', 'municipio_id' => 105],
    ['nombre' => 'Libertador', 'municipio_id' => 105],
    ['nombre' => 'San Juan de los Cayos', 'municipio_id' => 105],
    // Municipio Bolívar (municipio_id = 106)
    ['nombre' => 'Aracua', 'municipio_id' => 106],
    ['nombre' => 'La Peña', 'municipio_id' => 106],
    ['nombre' => 'San Luis', 'municipio_id' => 106],
    // Municipio Buchivacoa (municipio_id = 107)
    ['nombre' => 'Bariro', 'municipio_id' => 107],
    ['nombre' => 'Borojó', 'municipio_id' => 107],
    ['nombre' => 'Capatárida', 'municipio_id' => 107],
    ['nombre' => 'Guajiro', 'municipio_id' => 107],
    ['nombre' => 'Seque', 'municipio_id' => 107],
    ['nombre' => 'Valle de Eroa', 'municipio_id' => 107],
    ['nombre' => 'Zazárida', 'municipio_id' => 107],
    // Municipio Cacique Manaure (municipio_id = 108)
    ['nombre' => 'Cacique Manaure (Yaracal)', 'municipio_id' => 108],
    // Municipio Carirubana (municipio_id = 109)
    ['nombre' => 'Norte', 'municipio_id' => 109],
    ['nombre' => 'Carirubana', 'municipio_id' => 109],
    ['nombre' => 'Santa Ana', 'municipio_id' => 109],
    ['nombre' => 'Urbana Punta Cardón', 'municipio_id' => 109],
    // Municipio Colina (municipio_id = 110)
    ['nombre' => 'La Vela de Coro', 'municipio_id' => 110],
    ['nombre' => 'Acurigua', 'municipio_id' => 110],
    ['nombre' => 'Guaibacoa', 'municipio_id' => 110],
    ['nombre' => 'Las Calderas', 'municipio_id' => 110],
    ['nombre' => 'Mataruca', 'municipio_id' => 110],
    // Municipio Dabajuro (municipio_id = 111)
    ['nombre' => 'Dabajuro', 'municipio_id' => 111],
    // Municipio Democracia (municipio_id = 112)
    ['nombre' => 'Agua Clara', 'municipio_id' => 112],
    ['nombre' => 'Avaria', 'municipio_id' => 112],
    ['nombre' => 'Pedregal', 'municipio_id' => 112],
    ['nombre' => 'Piedra Grande', 'municipio_id' => 112],
    ['nombre' => 'Purureche', 'municipio_id' => 112],
    // Municipio Falcón (municipio_id = 113)
    ['nombre' => 'Adaure', 'municipio_id' => 113],
    ['nombre' => 'Adícora', 'municipio_id' => 113],
    ['nombre' => 'Baraived', 'municipio_id' => 113],
    ['nombre' => 'Buena Vista', 'municipio_id' => 113],
    ['nombre' => 'Jadacaquiva', 'municipio_id' => 113],
    ['nombre' => 'El Vínculo', 'municipio_id' => 113],
    ['nombre' => 'El Hato', 'municipio_id' => 113],
    ['nombre' => 'Moruy', 'municipio_id' => 113],
    ['nombre' => 'Pueblo Nuevo', 'municipio_id' => 113],
    // Municipio Federación (municipio_id = 114)
    ['nombre' => 'Agua Larga', 'municipio_id' => 114],
    ['nombre' => 'Churuguara', 'municipio_id' => 114],
    ['nombre' => 'El Paují', 'municipio_id' => 114],
    ['nombre' => 'Independencia', 'municipio_id' => 114],
    ['nombre' => 'Mapararí', 'municipio_id' => 114],
    // Municipio Jacura (municipio_id = 115)
    ['nombre' => 'Agua Linda', 'municipio_id' => 115],
    ['nombre' => 'Araurima', 'municipio_id' => 115],
    ['nombre' => 'Jacura', 'municipio_id' => 115],
    // Municipio Los Taques (municipio_id = 116)
    ['nombre' => 'Los Taques', 'municipio_id' => 116],
    ['nombre' => 'Judibana', 'municipio_id' => 116],
    // Municipio Mauroa (municipio_id = 117)
    ['nombre' => 'Mene de Mauroa', 'municipio_id' => 117],
    ['nombre' => 'San Félix', 'municipio_id' => 117],
    ['nombre' => 'Casigua', 'municipio_id' => 117],
    // Municipio Miranda (municipio_id = 118)
    ['nombre' => 'Guzmán Guillermo', 'municipio_id' => 118],
    ['nombre' => 'Mitare', 'municipio_id' => 118],
    ['nombre' => 'Río Seco', 'municipio_id' => 118],
    ['nombre' => 'Sabaneta', 'municipio_id' => 118],
    ['nombre' => 'San Antonio', 'municipio_id' => 118],
    ['nombre' => 'San Gabriel', 'municipio_id' => 118],
    ['nombre' => 'Santa Ana', 'municipio_id' => 118],
    // Municipio Monseñor Iturriza (municipio_id = 119)
    ['nombre' => 'Boca del Tocuyo', 'municipio_id' => 119],
    ['nombre' => 'Chichiriviche', 'municipio_id' => 119],
    ['nombre' => 'Tocuyo de la Costa', 'municipio_id' => 119],
    // Municipio Palmasola (municipio_id = 120)
    ['nombre' => 'Palmasola', 'municipio_id' => 120],
    // Municipio Petit (municipio_id = 121)
    ['nombre' => 'Cabure', 'municipio_id' => 121],
    ['nombre' => 'Colina', 'municipio_id' => 121],
    ['nombre' => 'Curimagua', 'municipio_id' => 121],
    // Municipio Píritu (municipio_id = 122)
    ['nombre' => 'San José de la Costa', 'municipio_id' => 122],
    ['nombre' => 'Píritu', 'municipio_id' => 122],
    // Municipio San Francisco (municipio_id = 123)
    ['nombre' => 'Capital San Francisco', 'municipio_id' => 123],
    ['nombre' => 'Mirimire', 'municipio_id' => 123],
    // Municipio José Laurencio Silva (municipio_id = 124)
    ['nombre' => 'Tucacas', 'municipio_id' => 124],
    ['nombre' => 'Boca de Aroa', 'municipio_id' => 124],
    // Municipio Sucre (municipio_id = 125)
    ['nombre' => 'Sucre', 'municipio_id' => 125],
    ['nombre' => 'Pecaya', 'municipio_id' => 125],
    // Municipio Tocópero (municipio_id = 126)
    ['nombre' => 'Tocópero', 'municipio_id' => 126],
    // Municipio Unión (municipio_id = 127)
    ['nombre' => 'El Charal', 'municipio_id' => 127],
    ['nombre' => 'Las Vegas del Tuy', 'municipio_id' => 127],
    ['nombre' => 'Santa Cruz de Bucaral', 'municipio_id' => 127],
    // Municipio Urumaco (municipio_id = 128)
    ['nombre' => 'Bruzual', 'municipio_id' => 128],
    ['nombre' => 'Urumaco', 'municipio_id' => 128],
    // Municipio Zamora (municipio_id = 129)
    ['nombre' => 'Puerto Cumarebo', 'municipio_id' => 129],
    ['nombre' => 'La Ciénaga', 'municipio_id' => 129],
    ['nombre' => 'La Soledad', 'municipio_id' => 129],
    ['nombre' => 'Pueblo Cumarebo', 'municipio_id' => 129],
    ['nombre' => 'Zazárida', 'municipio_id' => 129],
            
    // Estado Guárico (estado_id = 12)
    // Municipio Camaguán (municipio_id = 130)
    ['nombre' => 'Camaguán', 'municipio_id' => 130],
    ['nombre' => 'Puerto Miranda', 'municipio_id' => 130],
    ['nombre' => 'Uverito', 'municipio_id' => 130],
    // Municipio Chaguaramas (municipio_id = 131)
    ['nombre' => 'Chaguaramas', 'municipio_id' => 131],
    // Municipio El Socorro (municipio_id = 132)
    ['nombre' => 'El Socorro', 'municipio_id' => 132],
    // Municipio Francisco de Miranda (municipio_id = 133)
    ['nombre' => 'Calabozo', 'municipio_id' => 133],
    ['nombre' => 'El Calvario', 'municipio_id' => 133],
    ['nombre' => 'El Rastro', 'municipio_id' => 133],
    ['nombre' => 'Guardatinajas', 'municipio_id' => 133],
    // Municipio José Félix Ribas (municipio_id = 134)
    ['nombre' => 'Tucupido', 'municipio_id' => 134],
    ['nombre' => 'San Rafael de Laya', 'municipio_id' => 134],
    // Municipio José Tadeo Monagas (municipio_id = 135)
    ['nombre' => 'Altagracia de Orituco', 'municipio_id' => 135],
    ['nombre' => 'San Rafael de Orituco', 'municipio_id' => 135],
    ['nombre' => 'San Francisco Javier de Lezama', 'municipio_id' => 135],
    ['nombre' => 'Paso Real de Macaira', 'municipio_id' => 135],
    ['nombre' => 'Carlos Soublette', 'municipio_id' => 135],
    ['nombre' => 'San Francisco de Macaira', 'municipio_id' => 135],
    ['nombre' => 'Libertad de Orituco', 'municipio_id' => 135],
    // Municipio Juan Germán Roscio (municipio_id = 136)
    ['nombre' => 'San Juan de los Morros', 'municipio_id' => 136],
    ['nombre' => 'Parapara', 'municipio_id' => 136],
    ['nombre' => 'Cantagallo', 'municipio_id' => 136],
    // Municipio Juan José Rondón (municipio_id = 137)
    ['nombre' => 'Las Mercedes', 'municipio_id' => 137],
    ['nombre' => 'Cabruta', 'municipio_id' => 137],
    ['nombre' => 'Santa Rita de Manapire', 'municipio_id' => 137],
    // Municipio Julián Mellado (municipio_id = 138)
    ['nombre' => 'El Sombrero', 'municipio_id' => 138],
    ['nombre' => 'Sosa', 'municipio_id' => 138],
    // Municipio Leonardo Infante (municipio_id = 139)
    ['nombre' => 'Valle de la Pascua', 'municipio_id' => 139],
    ['nombre' => 'Espino', 'municipio_id' => 139],
    // Municipio Ortiz (municipio_id = 140)
    ['nombre' => 'San José de Tiznados', 'municipio_id' => 140],
    ['nombre' => 'San Francisco de Tiznados', 'municipio_id' => 140],
    ['nombre' => 'San Lorenzo de Tiznados', 'municipio_id' => 140],
    ['nombre' => 'Ortiz', 'municipio_id' => 140],
    // Municipio Pedro Zaraza (municipio_id = 141)
    ['nombre' => 'Zaraza', 'municipio_id' => 141],
    ['nombre' => 'San José de Unare', 'municipio_id' => 141],
    // Municipio San Gerónimo de Guayabal (municipio_id = 142)
    ['nombre' => 'Guayabal', 'municipio_id' => 142],
    ['nombre' => 'Cazorla', 'municipio_id' => 142],
    // Municipio San José de Guaribe (municipio_id = 143)
    ['nombre' => 'San José de Guaribe', 'municipio_id' => 143],
    // Municipio Santa María de Ipire (municipio_id = 144)
    ['nombre' => 'Santa María de Ipire', 'municipio_id' => 144],
    ['nombre' => 'Altamira', 'municipio_id' => 144],

// Estado La Guaira (estado_id = 13)
    // Municipio Vargas (municipio_id = 145)
    ['nombre' => 'Caraballeda', 'municipio_id' => 145],
    ['nombre' => 'Carayaca', 'municipio_id' => 145],
    ['nombre' => 'Carlos Soublette', 'municipio_id' => 145],
    ['nombre' => 'Caruao', 'municipio_id' => 145],
    ['nombre' => 'Catia La Mar', 'municipio_id' => 145],
    ['nombre' => 'El Junko', 'municipio_id' => 145],
    ['nombre' => 'La Guaira', 'municipio_id' => 145],
    ['nombre' => 'Macuto', 'municipio_id' => 145],
    ['nombre' => 'Maiquetía', 'municipio_id' => 145],
    ['nombre' => 'Naiguatá', 'municipio_id' => 145],
    ['nombre' => 'Urimare', 'municipio_id' => 145],

    // Estado Lara (estado_id = 14)
    // Municipio Andrés Eloy Blanco (municipio_id = 146)
    ['nombre' => 'Quebrada Honda de Guache', 'municipio_id' => 146],
    ['nombre' => 'Pio Tamayo', 'municipio_id' => 146],
    ['nombre' => 'Yacambú', 'municipio_id' => 146],
    // Municipio Crespo (municipio_id = 147)
    ['nombre' => 'Freitez', 'municipio_id' => 147],
    ['nombre' => 'José María Blanco', 'municipio_id' => 147],
    // Municipio Iribarren (municipio_id = 148)
    ['nombre' => 'Aguedo Felipe Alvarado', 'municipio_id' => 148],
    ['nombre' => 'Buena Vista', 'municipio_id' => 148],
    ['nombre' => 'Catedral', 'municipio_id' => 148],
    ['nombre' => 'Concepción', 'municipio_id' => 148],
    ['nombre' => 'El Cují', 'municipio_id' => 148],
    ['nombre' => 'Guerrera Ana Soto', 'municipio_id' => 148],
    ['nombre' => 'Juares', 'municipio_id' => 148],
    ['nombre' => 'Santa Rosa', 'municipio_id' => 148],
    ['nombre' => 'Tamaca', 'municipio_id' => 148],
    ['nombre' => 'Unión', 'municipio_id' => 148],
    // Municipio Jiménez (municipio_id = 149)
    ['nombre' => 'Juan Bautista Rodríguez', 'municipio_id' => 149],
    ['nombre' => 'Cuara', 'municipio_id' => 149],
    ['nombre' => 'Diego de Lozada', 'municipio_id' => 149],
    ['nombre' => 'Paraíso de San José', 'municipio_id' => 149],
    ['nombre' => 'San Miguel', 'municipio_id' => 149],
    ['nombre' => 'Tintorero', 'municipio_id' => 149],
    ['nombre' => 'José Bernardo Dorante', 'municipio_id' => 149],
    ['nombre' => 'Coronel Mariano Peraza', 'municipio_id' => 149],
    // Municipio Morán (municipio_id = 150)
    ['nombre' => 'Anzoátegui', 'municipio_id' => 150],
    ['nombre' => 'Bolívar', 'municipio_id' => 150],
    ['nombre' => 'Guárico', 'municipio_id' => 150],
    ['nombre' => 'Hilario Luna y Luna', 'municipio_id' => 150],
    ['nombre' => 'Humocaro Bajo', 'municipio_id' => 150],
    ['nombre' => 'Humocaro Alto', 'municipio_id' => 150],
    ['nombre' => 'La Candelaria', 'municipio_id' => 150],
    ['nombre' => 'Morán', 'municipio_id' => 150],
    // Municipio Palavecino (municipio_id = 151)
    ['nombre' => 'Cabudare', 'municipio_id' => 151],
    ['nombre' => 'José Gregorio Bastidas', 'municipio_id' => 151],
    ['nombre' => 'Agua Viva', 'municipio_id' => 151],
    // Municipio Simón Planas (municipio_id = 152)
    ['nombre' => 'Buría', 'municipio_id' => 152],
    ['nombre' => 'Gustavo Vega', 'municipio_id' => 152],
    ['nombre' => 'Sarare', 'municipio_id' => 152],
    // Municipio Torres (municipio_id = 153)
    ['nombre' => 'Altagracia', 'municipio_id' => 153],
    ['nombre' => 'Antonio Díaz', 'municipio_id' => 153],
    ['nombre' => 'Camacaro', 'municipio_id' => 153],
    ['nombre' => 'Castañeda', 'municipio_id' => 153],
    ['nombre' => 'Cecilio Zubillaga', 'municipio_id' => 153],
    ['nombre' => 'Chiquinquira', 'municipio_id' => 153],
    ['nombre' => 'El Blanco', 'municipio_id' => 153],
    ['nombre' => 'Espinoza de los Monteros', 'municipio_id' => 153],
    ['nombre' => 'Heriberto Arrollo', 'municipio_id' => 153],
    ['nombre' => 'Lara', 'municipio_id' => 153],
    ['nombre' => 'Las Mercedes', 'municipio_id' => 153],
    ['nombre' => 'Manuel Morillo', 'municipio_id' => 153],
    ['nombre' => 'Montaña Verde', 'municipio_id' => 153],
    ['nombre' => 'Montes de Oca', 'municipio_id' => 153],
    ['nombre' => 'Reyes de Vargas', 'municipio_id' => 153],
    ['nombre' => 'Torres', 'municipio_id' => 153],
    ['nombre' => 'Trinidad Samuel', 'municipio_id' => 153],
    // Municipio Urdaneta (municipio_id = 154)
    ['nombre' => 'Aguas', 'municipio_id' => 154],
    ['nombre' => 'Siquisique', 'municipio_id' => 154],
    ['nombre' => 'San Miguel', 'municipio_id' => 154],
    ['nombre' => 'Moroturo', 'municipio_id' => 154],

    // Estado Mérida (estado_id = 15)
    // Municipio Alberto Adriani (municipio_id = 155)
    ['nombre' => 'Presidente Betancourt', 'municipio_id' => 155],
    ['nombre' => 'Presidente Páez', 'municipio_id' => 155],
    ['nombre' => 'Presidente Rómulo Gallegos', 'municipio_id' => 155],
    ['nombre' => 'Gabriel Picón González', 'municipio_id' => 155],
    ['nombre' => 'Héctor Amable Mora', 'municipio_id' => 155],
    ['nombre' => 'José Nucete Sardi', 'municipio_id' => 155],
    ['nombre' => 'Pulido Méndez', 'municipio_id' => 155],
    // Municipio Antonio Pinto Salinas (municipio_id = 156)
    ['nombre' => 'Santa Cruz de Mora', 'municipio_id' => 156],
    ['nombre' => 'Mesa Bolívar', 'municipio_id' => 156],
    ['nombre' => 'Mesa de Las Palmas', 'municipio_id' => 156],
    // Municipio Andrés Bello (municipio_id = 157)
    ['nombre' => 'La Azulita', 'municipio_id' => 157],
    // Municipio Aricagua (municipio_id = 158)
    ['nombre' => 'Aricagua', 'municipio_id' => 158],
    ['nombre' => 'San Antonio', 'municipio_id' => 158],
    // Municipio Arzobispo Chacón (municipio_id = 159)
    ['nombre' => 'Canaguá', 'municipio_id' => 159],
    ['nombre' => 'Capurí', 'municipio_id' => 159],
    ['nombre' => 'Chacantá', 'municipio_id' => 159],
    ['nombre' => 'El Molino', 'municipio_id' => 159],
    ['nombre' => 'Guaimaral', 'municipio_id' => 159],
    ['nombre' => 'Mucutuy', 'municipio_id' => 159],
    ['nombre' => 'Mucuchachí', 'municipio_id' => 159],
    // Municipio Campo Elías (municipio_id = 160)
    ['nombre' => 'Fernández Peña', 'municipio_id' => 160],
    ['nombre' => 'Matriz', 'municipio_id' => 160],
    ['nombre' => 'Montalbán', 'municipio_id' => 160],
    ['nombre' => 'Acequias', 'municipio_id' => 160],
    ['nombre' => 'Jají', 'municipio_id' => 160],
    ['nombre' => 'La Mesa', 'municipio_id' => 160],
    ['nombre' => 'San José del Sur', 'municipio_id' => 160],
    // Municipio Caracciolo Parra Olmedo (municipio_id = 161)
    ['nombre' => 'Tucaní', 'municipio_id' => 161],
    ['nombre' => 'Florencio Ramírez', 'municipio_id' => 161],
    // Municipio Cardenal Quintero (municipio_id = 162)
    ['nombre' => 'Santo Domingo', 'municipio_id' => 162],
    ['nombre' => 'Las Piedras', 'municipio_id' => 162],
    // Municipio Guaraque (municipio_id = 163)
    ['nombre' => 'Guaraque', 'municipio_id' => 163],
    ['nombre' => 'Mesa Quintero', 'municipio_id' => 163],
    ['nombre' => 'Río Negro', 'municipio_id' => 163],
    // Municipio Julio César Salas (municipio_id = 164)
    ['nombre' => 'Arapuey', 'municipio_id' => 164],
    ['nombre' => 'Palmira', 'municipio_id' => 164],
    // Municipio Justo Briceño (municipio_id = 165)
    ['nombre' => 'San Cristóbal de Torondoy', 'municipio_id' => 165],
    ['nombre' => 'Torondoy', 'municipio_id' => 165],
    // Municipio Libertador (municipio_id = 166)
    ['nombre' => 'Antonio Spinetti Dini', 'municipio_id' => 166],
    ['nombre' => 'Arias', 'municipio_id' => 166],
    ['nombre' => 'Caracciolo Parra Pérez', 'municipio_id' => 166],
    ['nombre' => 'Domingo Peña', 'municipio_id' => 166],
    ['nombre' => 'El Llano', 'municipio_id' => 166],
    ['nombre' => 'Gonzalo Picón Febres', 'municipio_id' => 166],
    ['nombre' => 'Jacinto Plaza', 'municipio_id' => 166],
    ['nombre' => 'Juan Rodríguez Suárez', 'municipio_id' => 166],
    ['nombre' => 'Lasso de la Vega', 'municipio_id' => 166],
    ['nombre' => 'Mariano Picón Salas', 'municipio_id' => 166],
    ['nombre' => 'Milla', 'municipio_id' => 166],
    ['nombre' => 'Osuna Rodríguez', 'municipio_id' => 166],
    ['nombre' => 'Sagrario', 'municipio_id' => 166],
    ['nombre' => 'El Morro', 'municipio_id' => 166],
    ['nombre' => 'Los Nevados', 'municipio_id' => 166],
    // Municipio Miranda (municipio_id = 167)
    ['nombre' => 'Andrés Eloy Blanco', 'municipio_id' => 167],
    ['nombre' => 'La Venta', 'municipio_id' => 167],
    ['nombre' => 'Piñango', 'municipio_id' => 167],
    ['nombre' => 'Timotes', 'municipio_id' => 167],
    // Municipio Obispo Ramos de Lora (municipio_id = 168)
    ['nombre' => 'Eloy Paredes', 'municipio_id' => 168],
    ['nombre' => 'San Rafael de Alcázar', 'municipio_id' => 168],
    ['nombre' => 'Santa Elena de Arenales', 'municipio_id' => 168],
    // Municipio Padre Noguera (municipio_id = 169)
    ['nombre' => 'Santa María de Caparo', 'municipio_id' => 169],
    // Municipio Pueblo Llano (municipio_id = 170)
    ['nombre' => 'Pueblo Llano', 'municipio_id' => 170],
    // Municipio Rangel (municipio_id = 171)
    ['nombre' => 'Cacute', 'municipio_id' => 171],
    ['nombre' => 'La Toma', 'municipio_id' => 171],
    ['nombre' => 'Mucuchíes', 'municipio_id' => 171],
    ['nombre' => 'Mucurubá', 'municipio_id' => 171],
    ['nombre' => 'San Rafael', 'municipio_id' => 171],
    // Municipio Rivas Dávila (municipio_id = 172)
    ['nombre' => 'Bailadores', 'municipio_id' => 172],
    ['nombre' => 'Gerónimo Maldonado', 'municipio_id' => 172],
    // Municipio Santos Marquina (municipio_id = 173)
    ['nombre' => 'Tabay', 'municipio_id' => 173],
    // Municipio Sucre (municipio_id = 174)
    ['nombre' => 'Chiguará', 'municipio_id' => 174],
    ['nombre' => 'Estánquez', 'municipio_id' => 174],
    ['nombre' => 'Lagunillas', 'municipio_id' => 174],
    ['nombre' => 'La Trampa', 'municipio_id' => 174],
    ['nombre' => 'Pueblo Nuevo del Sur', 'municipio_id' => 174],
    ['nombre' => 'San Juan', 'municipio_id' => 174],
    // Municipio Tovar (municipio_id = 175)
    ['nombre' => 'El Amparo', 'municipio_id' => 175],
    ['nombre' => 'El Llano', 'municipio_id' => 175],
    ['nombre' => 'San Francisco', 'municipio_id' => 175],
    ['nombre' => 'Tovar', 'municipio_id' => 175],
    // Municipio Tulio Febres Cordero (municipio_id = 176)
    ['nombre' => 'Independencia', 'municipio_id' => 176],
    ['nombre' => 'María de la Concepción Palacios Blanco', 'municipio_id' => 176],
    ['nombre' => 'Santa Apolonia', 'municipio_id' => 176],
    ['nombre' => 'Nueva Bolivia', 'municipio_id' => 176],
    // Municipio Zea (municipio_id = 177)
    ['nombre' => 'Caño El Tigre', 'municipio_id' => 177],
    ['nombre' => 'Zea', 'municipio_id' => 177],
 
    // Estado Miranda (estado_id = 16)
    // Municipio Acevedo (municipio_id = 178)
    ['nombre' => 'Aragüita', 'municipio_id' => 178],
    ['nombre' => 'Arévalo González', 'municipio_id' => 178],
    ['nombre' => 'Capaya', 'municipio_id' => 178],
    ['nombre' => 'Caucagua', 'municipio_id' => 178],
    ['nombre' => 'El Café', 'municipio_id' => 178],
    ['nombre' => 'Marizapa', 'municipio_id' => 178],
    ['nombre' => 'Panaquire', 'municipio_id' => 178],
    ['nombre' => 'Ribas', 'municipio_id' => 178],
    ['nombre' => 'Yaguapa', 'municipio_id' => 178],    
    // Municipio Andrés Bello (municipio_id = 179)
    ['nombre' => 'Cumbo', 'municipio_id' => 179],
    ['nombre' => 'San José de Barlovento', 'municipio_id' => 179],    
    // Municipio Baruta (municipio_id = 180)
    ['nombre' => 'El Cafetal', 'municipio_id' => 180],
    ['nombre' => 'Las Minas', 'municipio_id' => 180],
    ['nombre' => 'Nuestra Señora del Rosario', 'municipio_id' => 180],    
    // Municipio Brión (municipio_id = 181)
    ['nombre' => 'Curiepe', 'municipio_id' => 181],
    ['nombre' => 'Higuerote', 'municipio_id' => 181],
    ['nombre' => 'Tacarigua de Brión', 'municipio_id' => 181],    
    // Municipio Buroz (municipio_id = 182)
    ['nombre' => 'Mamporal', 'municipio_id' => 182],    
    // Municipio Carrizal (municipio_id = 183)
    ['nombre' => 'Carrizal', 'municipio_id' => 183],    
    // Municipio Chacao (municipio_id = 184)
    ['nombre' => 'Chacao', 'municipio_id' => 184],    
    // Municipio Cristóbal Rojas (municipio_id = 185)
    ['nombre' => 'Charallave', 'municipio_id' => 185],
    ['nombre' => 'Las Brisas', 'municipio_id' => 185],            
    // Municipio El Hatillo (municipio_id = 186)
    ['nombre' => 'Santa Rosalía de Palermo', 'municipio_id' => 186],            
    // Municipio Guaicaipuro (municipio_id = 187)
    ['nombre' => 'Altagracia de la Montaña', 'municipio_id' => 187],
    ['nombre' => 'Cecilio Acosta', 'municipio_id' => 187],
    ['nombre' => 'El Jarillo', 'municipio_id' => 187],
    ['nombre' => 'Los Teques', 'municipio_id' => 187],
    ['nombre' => 'Paracotos', 'municipio_id' => 187],
    ['nombre' => 'San Pedro', 'municipio_id' => 187],
    ['nombre' => 'Tácata', 'municipio_id' => 187],            
    // Municipio Independencia (municipio_id = 188)
    ['nombre' => 'El Cartanal', 'municipio_id' => 188],
    ['nombre' => 'Santa Teresa del Tuy', 'municipio_id' => 188],            
    // Municipio Lander (municipio_id = 189)
    ['nombre' => 'La Democracia', 'municipio_id' => 189],
    ['nombre' => 'Ocumare del Tuy', 'municipio_id' => 189],
    ['nombre' => 'Santa Bárbara', 'municipio_id' => 189],            
    // Municipio Los Salias (municipio_id = 190)
    ['nombre' => 'San Antonio de los Altos', 'municipio_id' => 190],            
    // Municipio Páez (municipio_id = 191)
    ['nombre' => 'El Guapo', 'municipio_id' => 191],
    ['nombre' => 'Río Chico', 'municipio_id' => 191],
    ['nombre' => 'San Fernando del Guapo', 'municipio_id' => 191],
    ['nombre' => 'Tacarigua de la Laguna', 'municipio_id' => 191],            
    // Municipio Paz Castillo (municipio_id = 192)
    ['nombre' => 'Santa Lucía del Tuy', 'municipio_id' => 192],
    ['nombre' => 'Santa Rita', 'municipio_id' => 192],
    ['nombre' => 'Siquire', 'municipio_id' => 192],
    ['nombre' => 'Soapire', 'municipio_id' => 192],            
    // Municipio Pedro Gual (municipio_id = 193)
    ['nombre' => 'Cúpira', 'municipio_id' => 193],
    ['nombre' => 'Machurucuto', 'municipio_id' => 193],            
    // Municipio Plaza (municipio_id = 194)
    ['nombre' => 'Guarenas', 'municipio_id' => 194],
    // Municipio Simón Bolívar (municipio_id = 195)
    ['nombre' => 'San Antonio de Yare', 'municipio_id' => 195],
    ['nombre' => 'San Francisco de Yare', 'municipio_id' => 195],
    // Municipio Sucre (municipio_id = 196)
    ['nombre' => 'Caucagüita', 'municipio_id' => 196],
    ['nombre' => 'Filas de Mariche', 'municipio_id' => 196],
    ['nombre' => 'La Dolorita', 'municipio_id' => 196],
    ['nombre' => 'Leoncio Martínez', 'municipio_id' => 196],
    ['nombre' => 'Petare', 'municipio_id' => 196],
    // Municipio Urdaneta (municipio_id = 197)
    ['nombre' => 'Cúa', 'municipio_id' => 197],
    ['nombre' => 'Nueva Cúa', 'municipio_id' => 197],
    // Municipio Zamora (municipio_id = 198)
    ['nombre' => 'Araira', 'municipio_id' => 198],
    ['nombre' => 'Guatire', 'municipio_id' => 198],
            
    // Estado Monagas (estado_id = 17)
    // Municipio Acosta (municipio_id = 199)
    ['nombre' => 'San Antonio de Maturín', 'municipio_id' => 199],
    ['nombre' => 'San Francisco de Maturín', 'municipio_id' => 199],
    // Municipio Aguasay (municipio_id = 200)
    ['nombre' => 'Aguasay', 'municipio_id' => 200],
    // Municipio Bolívar (municipio_id = 201)
    ['nombre' => 'Caripito', 'municipio_id' => 201],
    // Municipio Caripe (municipio_id = 202)
    ['nombre' => 'El Guácharo', 'municipio_id' => 202],
    ['nombre' => 'La Guanota', 'municipio_id' => 202],
    ['nombre' => 'Sabana de Piedra', 'municipio_id' => 202],
    ['nombre' => 'San Agustín', 'municipio_id' => 202],
    ['nombre' => 'Teresen', 'municipio_id' => 202],
    ['nombre' => 'Caripe', 'municipio_id' => 202],
    // Municipio Cedeño (municipio_id = 203)
    ['nombre' => 'Areo', 'municipio_id' => 203],
    ['nombre' => 'Caicara de Maturín', 'municipio_id' => 203],
    ['nombre' => 'San Félix de Cantalicio', 'municipio_id' => 203],
    ['nombre' => 'Viento Fresco', 'municipio_id' => 203],
    // Municipio Ezequiel Zamora (municipio_id = 204)
    ['nombre' => 'El Tejero', 'municipio_id' => 204],
    ['nombre' => 'Punta de Mata', 'municipio_id' => 204],
    // Municipio Libertador (municipio_id = 205)
    ['nombre' => 'Chaguaramas', 'municipio_id' => 205],
    ['nombre' => 'Las Alhuacas', 'municipio_id' => 205],
    ['nombre' => 'Tabasca', 'municipio_id' => 205],
    ['nombre' => 'Temblador', 'municipio_id' => 205],
    // Municipio Maturín (municipio_id = 206)
    ['nombre' => 'Alto de los Godos', 'municipio_id' => 206],
    ['nombre' => 'Boquerón', 'municipio_id' => 206],
    ['nombre' => 'Las Cocuizas', 'municipio_id' => 206],
    ['nombre' => 'La Cruz', 'municipio_id' => 206],
    ['nombre' => 'San Simón', 'municipio_id' => 206],
    ['nombre' => 'El Corozo', 'municipio_id' => 206],
    ['nombre' => 'El Furrial', 'municipio_id' => 206],
    ['nombre' => 'Jusepín', 'municipio_id' => 206],
    ['nombre' => 'La Pica', 'municipio_id' => 206],
    ['nombre' => 'San Vicente', 'municipio_id' => 206],
    // Municipio Piar (municipio_id = 207)
    ['nombre' => 'Aparicio', 'municipio_id' => 207],
    ['nombre' => 'Aragua de Maturín', 'municipio_id' => 207],
    ['nombre' => 'Chaguaramal', 'municipio_id' => 207],
    ['nombre' => 'El Pinto', 'municipio_id' => 207],
    ['nombre' => 'Guanaguana', 'municipio_id' => 207],
    ['nombre' => 'La Toscana', 'municipio_id' => 207],
    ['nombre' => 'Taguaya', 'municipio_id' => 207],
    // Municipio Punceres (municipio_id = 208)
    ['nombre' => 'Cachipo', 'municipio_id' => 208],
    ['nombre' => 'Quiriquire', 'municipio_id' => 208],
    // Municipio Santa Bárbara (municipio_id = 209)
    ['nombre' => 'Santa Bárbara', 'municipio_id' => 209],
    ['nombre' => 'Morón', 'municipio_id' => 209],
    // Municipio Sotillo (municipio_id = 210)
    ['nombre' => 'Barrancas', 'municipio_id' => 210],
    ['nombre' => 'Los Barrancos de Fajardo', 'municipio_id' => 210],
    // Municipio Uracoa (municipio_id = 211)
    ['nombre' => 'Uracoa', 'municipio_id' => 211],

    // Estado Nueva Esparta (estado_id = 18)
    // Municipio Antolín del Campo (municipio_id = 212)
    ['nombre' => 'Antolín del Campo', 'municipio_id' => 212],
    // Municipio Arismendi (municipio_id = 213)
    ['nombre' => 'Arismendi', 'municipio_id' => 213],
    // Municipio Díaz (municipio_id = 214)
    ['nombre' => 'San Juan Bautista', 'municipio_id' => 214],
    ['nombre' => 'Zabala', 'municipio_id' => 214],
    // Municipio García (municipio_id = 215)
    ['nombre' => 'Francisco Fajardo', 'municipio_id' => 215],
    ['nombre' => 'García', 'municipio_id' => 215],
    // Municipio Gómez (municipio_id = 216)
    ['nombre' => 'Bolívar', 'municipio_id' => 216],
    ['nombre' => 'Guevara', 'municipio_id' => 216],
    ['nombre' => 'Matasiete', 'municipio_id' => 216],
    ['nombre' => 'Santa Ana', 'municipio_id' => 216],
    ['nombre' => 'Sucre', 'municipio_id' => 216],
    // Municipio Maneiro (municipio_id = 217)
    ['nombre' => 'Aguirre', 'municipio_id' => 217],
    ['nombre' => 'Maneiro', 'municipio_id' => 217],
    // Municipio Marcano (municipio_id = 218)
    ['nombre' => 'Adrián', 'municipio_id' => 218],
    ['nombre' => 'Juan Griego', 'municipio_id' => 218],
    // Municipio Mariño (municipio_id = 219)
    ['nombre' => 'Mariño', 'municipio_id' => 219],
    // Municipio Macanao (municipio_id = 220)
    ['nombre' => 'San Francisco de Macanao', 'municipio_id' => 220],
    ['nombre' => 'Boca de Río', 'municipio_id' => 220],
    // Municipio Tubores (municipio_id = 221)
    ['nombre' => 'Tubores', 'municipio_id' => 221],
    ['nombre' => 'Los Barales', 'municipio_id' => 221],
    // Municipio Villalba (municipio_id = 222)
    ['nombre' => 'Vicente Fuentes', 'municipio_id' => 222],
    ['nombre' => 'Villalba', 'municipio_id' => 222],

    // Estado Portuguesa (estado_id = 19)
    // Municipio Agua Blanca (municipio_id = 223)
    ['nombre' => 'Agua Blanca', 'municipio_id' => 223],
    // Municipio Araure (municipio_id = 224)
    ['nombre' => 'Araure', 'municipio_id' => 224],
    ['nombre' => 'Río Acarigua', 'municipio_id' => 224],
    // Municipio Esteller (municipio_id = 225)
    ['nombre' => 'Píritu', 'municipio_id' => 225],
    ['nombre' => 'Uveral', 'municipio_id' => 225],
    // Municipio Guanare (municipio_id = 226)
    ['nombre' => 'Córdoba', 'municipio_id' => 226],
    ['nombre' => 'Guanare', 'municipio_id' => 226],
    ['nombre' => 'San José de la Montaña', 'municipio_id' => 226],
    ['nombre' => 'San Juan de Guanaguanare', 'municipio_id' => 226],
    ['nombre' => 'Virgen de Coromoto', 'municipio_id' => 226],
    // Municipio Guanarito (municipio_id = 227)
    ['nombre' => 'Guanarito', 'municipio_id' => 227],
    ['nombre' => 'Trinidad de la Capilla', 'municipio_id' => 227],
    ['nombre' => 'Divina Pastora', 'municipio_id' => 227],
    // Municipio Monseñor José Vicente de Unda (municipio_id = 228)
    ['nombre' => 'Chabasquén', 'municipio_id' => 228],
    ['nombre' => 'Peña Blanca', 'municipio_id' => 228],
    // Municipio Ospino (municipio_id = 229)
    ['nombre' => 'Aparición', 'municipio_id' => 229],
    ['nombre' => 'La Estación', 'municipio_id' => 229],
    ['nombre' => 'Ospino', 'municipio_id' => 229],
    // Municipio Páez (municipio_id = 230)
    ['nombre' => 'Acarigua', 'municipio_id' => 230],
    ['nombre' => 'Payara', 'municipio_id' => 230],
    ['nombre' => 'Pimpinela', 'municipio_id' => 230],
    ['nombre' => 'Ramón Peraza', 'municipio_id' => 230],
    // Municipio Papelón (municipio_id = 231)
    ['nombre' => 'Caño Delgadito', 'municipio_id' => 231],
    ['nombre' => 'Papelón', 'municipio_id' => 231],
    // Municipio San Genaro de Boconoíto (municipio_id = 232)
    ['nombre' => 'Antolín Tovar Anquino', 'municipio_id' => 232],
    ['nombre' => 'Boconoíto', 'municipio_id' => 232],
    // Municipio San Rafael de Onoto (municipio_id = 233)
    ['nombre' => 'Santa Fé', 'municipio_id' => 233],
    ['nombre' => 'San Rafael de Onoto', 'municipio_id' => 233],
    ['nombre' => 'Thelmo Morles', 'municipio_id' => 233],
    // Municipio Santa Rosalía (municipio_id = 234)
    ['nombre' => 'Florida', 'municipio_id' => 234],
    ['nombre' => 'El Playón', 'municipio_id' => 234],
    // Municipio Sucre (municipio_id = 235)
    ['nombre' => 'Biscucuy', 'municipio_id' => 235],
    ['nombre' => 'Concepción', 'municipio_id' => 235],
    ['nombre' => 'San Rafael de Palo Alzado', 'municipio_id' => 235],
    ['nombre' => 'San José de Saguaz', 'municipio_id' => 235],
    // Municipio Turén (municipio_id = 236)
    ['nombre' => 'Villa Bruzual', 'municipio_id' => 236],
    ['nombre' => 'Canelones', 'municipio_id' => 236],
    ['nombre' => 'Santa Cruz', 'municipio_id' => 236],
    ['nombre' => 'San Isidro Labrador', 'municipio_id' => 236],

// Estado Sucre (estado_id = 20)
    // Municipio Andrés Eloy Blanco (municipio_id = 237)
    ['nombre' => 'Mariño', 'municipio_id' => 237],
    ['nombre' => 'Rómulo Gallegos', 'municipio_id' => 237],
    // Municipio Andrés Mata (municipio_id = 238)
    ['nombre' => 'San José de Areocuar', 'municipio_id' => 238],
    ['nombre' => 'Tavera Acosta', 'municipio_id' => 238],
    // Municipio Arismendi (municipio_id = 239)
    ['nombre' => 'Río Caribe', 'municipio_id' => 239],
    ['nombre' => 'Antonio José de Sucre', 'municipio_id' => 239],
    ['nombre' => 'El Morro de Puerto Santo', 'municipio_id' => 239],
    ['nombre' => 'Puerto Santo', 'municipio_id' => 239],
    ['nombre' => 'San Juan de las Galdonas', 'municipio_id' => 239],
    // Municipio Benítez (municipio_id = 240)
    ['nombre' => 'El Pilar', 'municipio_id' => 240],
    ['nombre' => 'El Rincón', 'municipio_id' => 240],
    ['nombre' => 'General Francisco Antonio Vázquez', 'municipio_id' => 240],
    ['nombre' => 'Guaraúnos', 'municipio_id' => 240],
    ['nombre' => 'Tunapuicito', 'municipio_id' => 240],
    ['nombre' => 'Unión', 'municipio_id' => 240],
    // Municipio Bermúdez (municipio_id = 241)
    ['nombre' => 'Santa Catalina', 'municipio_id' => 241],
    ['nombre' => 'Santa Rosa', 'municipio_id' => 241],
    ['nombre' => 'Santa Teresa', 'municipio_id' => 241],
    ['nombre' => 'Bolívar', 'municipio_id' => 241],
    ['nombre' => 'Maracapana', 'municipio_id' => 241],
    ['nombre' => 'Divina Misericordia', 'municipio_id' => 241],
    ['nombre' => 'Nuestra Señora de Lourdes', 'municipio_id' => 241],
    // Municipio Bolívar (municipio_id = 242)
    ['nombre' => 'Marigüitar', 'municipio_id' => 242],
    // Municipio Cajigal (municipio_id = 243)
    ['nombre' => 'Libertad', 'municipio_id' => 243],
    ['nombre' => 'El Paujil', 'municipio_id' => 243],
    ['nombre' => 'Yaguaraparo', 'municipio_id' => 243],
    // Municipio Cruz Salmerón Acosta (municipio_id = 244)
    ['nombre' => 'Araya', 'municipio_id' => 244],
    ['nombre' => 'Chacopata', 'municipio_id' => 244],
    ['nombre' => 'Manicuare', 'municipio_id' => 244],
    // Municipio Libertador (municipio_id = 245)
    ['nombre' => 'Tunapuy', 'municipio_id' => 245],
    ['nombre' => 'Campo Elías', 'municipio_id' => 245],
    // Municipio Mariño (municipio_id = 246)
    ['nombre' => 'Irapa', 'municipio_id' => 246],
    ['nombre' => 'Campo Claro', 'municipio_id' => 246],
    ['nombre' => 'Marabal', 'municipio_id' => 246],
    ['nombre' => 'San Antonio de Irapa', 'municipio_id' => 246],
    ['nombre' => 'Soro', 'municipio_id' => 246],
    // Municipio Mejía (municipio_id = 247)
    ['nombre' => 'San Antonio del Golfo', 'municipio_id' => 247],
    // Municipio Montes (municipio_id = 248)
    ['nombre' => 'Cumanacoa', 'municipio_id' => 248],
    ['nombre' => 'Arenas', 'municipio_id' => 248],
    ['nombre' => 'Aricagua', 'municipio_id' => 248],
    ['nombre' => 'Cocollar', 'municipio_id' => 248],
    ['nombre' => 'San Fernando', 'municipio_id' => 248],
    ['nombre' => 'San Lorenzo', 'municipio_id' => 248],
    // Municipio Ribero (municipio_id = 249)
    ['nombre' => 'Cariaco', 'municipio_id' => 249],
    ['nombre' => 'Catuaro', 'municipio_id' => 249],
    ['nombre' => 'Rendón', 'municipio_id' => 249],
    ['nombre' => 'Santa Cruz', 'municipio_id' => 249],
    ['nombre' => 'Santa María', 'municipio_id' => 249],
    // Municipio Sucre (municipio_id = 250)
    ['nombre' => 'Altagracia', 'municipio_id' => 250],
    ['nombre' => 'Santa Inés', 'municipio_id' => 250],
    ['nombre' => 'Valentín Valiente', 'municipio_id' => 250],
    ['nombre' => 'Ayacucho', 'municipio_id' => 250],
    ['nombre' => 'San Juan', 'municipio_id' => 250],
    ['nombre' => 'Raúl Leoni', 'municipio_id' => 250],
    ['nombre' => 'Gran Mariscal', 'municipio_id' => 250],
    // Municipio Valdez (municipio_id = 251)
    ['nombre' => 'Cristóbal Colón', 'municipio_id' => 251],
    ['nombre' => 'Bideau', 'municipio_id' => 251],
    ['nombre' => 'Punta de Piedras', 'municipio_id' => 251],
    ['nombre' => 'Güiria', 'municipio_id' => 251],
// Estado Táchira (estado_id = 20)
            // Municipio Andrés Bello (municipio_id = 252)
            ['nombre' => 'Cordero', 'municipio_id' => 252],
            // Municipio Antonio Rómulo Costa (municipio_id = 253)
            ['nombre' => 'Las Mesas', 'municipio_id' => 253],
            // Municipio Ayacucho (municipio_id = 254)
            ['nombre' => 'San Félix', 'municipio_id' => 254],
            ['nombre' => 'San Juan de Colón', 'municipio_id' => 254],
            ['nombre' => 'San Pedro del Río', 'municipio_id' => 254],
            // Municipio Bolívar (municipio_id = 255)
            ['nombre' => 'Isaías Medina Angarita', 'municipio_id' => 255],
            ['nombre' => 'Juan Vicente Gómez', 'municipio_id' => 255],
            ['nombre' => 'Palotal', 'municipio_id' => 255],
            ['nombre' => 'San Antonio del Táchira', 'municipio_id' => 255],
            // Municipio Cárdenas (municipio_id = 256)
            ['nombre' => 'Amenodoro Rangel Lamús', 'municipio_id' => 256],
            ['nombre' => 'La Florida', 'municipio_id' => 256],
            ['nombre' => 'Táriba', 'municipio_id' => 256],
            // Municipio Córdoba (municipio_id = 257)
            ['nombre' => 'Santa Ana del Táchira', 'municipio_id' => 257],
            // Municipio Fernández Feo (municipio_id = 258)
            ['nombre' => 'Alberto Adriani', 'municipio_id' => 258],
            ['nombre' => 'San Rafael del Piñal', 'municipio_id' => 258],
            ['nombre' => 'Santo Domingo', 'municipio_id' => 258],
            // Municipio Francisco de Miranda (municipio_id = 259)
            ['nombre' => 'San José de Bolívar', 'municipio_id' => 259],
            // Municipio García de Hevia (municipio_id = 260)
            ['nombre' => 'Boca de Grita', 'municipio_id' => 260],
            ['nombre' => 'José Antonio Páez', 'municipio_id' => 260],
            ['nombre' => 'La Fría', 'municipio_id' => 260],
            // Municipio Guásimos (municipio_id = 261)
            ['nombre' => 'Palmira', 'municipio_id' => 261],
            // Municipio Independencia (municipio_id = 262)
            ['nombre' => 'Capacho Nuevo', 'municipio_id' => 262],
            ['nombre' => 'Juan Germán Roscio', 'municipio_id' => 262],
            ['nombre' => 'Román Cárdenas', 'municipio_id' => 262],
            // Municipio Jáuregui (municipio_id = 263)
            ['nombre' => 'Emilio Constantino Guerrero', 'municipio_id' => 263],
            ['nombre' => 'La Grita', 'municipio_id' => 263],
            ['nombre' => 'Monseñor Miguel Antonio Salas', 'municipio_id' => 263],
            // Municipio José María Vargas (municipio_id = 264)
            ['nombre' => 'El Cobre', 'municipio_id' => 264],
            // Municipio Junín (municipio_id = 265)
            ['nombre' => 'Bramón', 'municipio_id' => 265],
            ['nombre' => 'La Petrólea', 'municipio_id' => 265],
            ['nombre' => 'Quinimarí', 'municipio_id' => 265],
            ['nombre' => 'Rubio', 'municipio_id' => 265],
            // Municipio Libertad (municipio_id = 266)
            ['nombre' => 'Capacho Viejo', 'municipio_id' => 266],
            ['nombre' => 'Cipriano Castro', 'municipio_id' => 266],
            ['nombre' => 'Manuel Felipe Rugeles', 'municipio_id' => 266],
            // Municipio Libertador (municipio_id = 267)
            ['nombre' => 'Abejales', 'municipio_id' => 267],
            ['nombre' => 'Doradas', 'municipio_id' => 267],
            ['nombre' => 'Emeterio Ochoa', 'municipio_id' => 267],
            ['nombre' => 'San Joaquín de Navay', 'municipio_id' => 267],
            // Municipio Lobatera (municipio_id = 268)
            ['nombre' => 'Lobatera', 'municipio_id' => 268],
            ['nombre' => 'Constitución', 'municipio_id' => 268],
            // Municipio Michelena (municipio_id = 269)
            ['nombre' => 'Michelena', 'municipio_id' => 269],
            // Municipio Panamericano (municipio_id = 270)
            ['nombre' => 'San Pablo', 'municipio_id' => 270],
            ['nombre' => 'La Palmita', 'municipio_id' => 270],
            // Municipio Pedro María Ureña (municipio_id = 271)
            ['nombre' => 'Ureña', 'municipio_id' => 271],
            ['nombre' => 'Nueva Arcadia', 'municipio_id' => 271],
            // Municipio Rafael Urdaneta (municipio_id = 272)
            ['nombre' => 'Delicias', 'municipio_id' => 272],
            // Municipio Samuel Dario Maldonado (municipio_id = 273)
            ['nombre' => 'Boconó', 'municipio_id' => 273],
            ['nombre' => 'Hernández', 'municipio_id' => 273],
            ['nombre' => 'La Tendida', 'municipio_id' => 273],
            // Municipio San Cristóbal (municipio_id = 274)
            ['nombre' => 'Francisco Romero Lobo', 'municipio_id' => 274],
            ['nombre' => 'La Concordia', 'municipio_id' => 274],
            ['nombre' => 'Pedro María Morantes', 'municipio_id' => 274],
            ['nombre' => 'San Juan Bautista', 'municipio_id' => 274],
            ['nombre' => 'San Sebastián', 'municipio_id' => 274],
            // Municipio San Judas Tadeo (municipio_id = 275)
            ['nombre' => 'San Judas Tadeo', 'municipio_id' => 275],
            // Municipio Seboruco (municipio_id = 276)
            ['nombre' => 'Seboruco', 'municipio_id' => 276],
            // Municipio Simón Rodríguez (municipio_id = 277)
            ['nombre' => 'San Simón', 'municipio_id' => 277],
            // Municipio Sucre (municipio_id = 278)
            ['nombre' => 'Eleazar López Contreras', 'municipio_id' => 278],
            ['nombre' => 'Capital Sucre', 'municipio_id' => 278],
            ['nombre' => 'San Pablo', 'municipio_id' => 278],
            // Municipio Torbes (municipio_id = 279)
            ['nombre' => 'San Josecito', 'municipio_id' => 279],
            // Municipio Uribante (municipio_id = 280)
            ['nombre' => 'Cárdenas', 'municipio_id' => 280],
            ['nombre' => 'Juan Pablo Peñaloza', 'municipio_id' => 280],
            ['nombre' => 'Potosí', 'municipio_id' => 280],
            ['nombre' => 'Pregonero', 'municipio_id' => 280],
    
// Estado Trujillo (estado_id = 21)
            // Municipio Andrés Bello (municipio_id = 281)
            ['nombre' => 'Araguaney', 'municipio_id' => 281],
            ['nombre' => 'El Jaguito', 'municipio_id' => 281],
            ['nombre' => 'La Esperanza', 'municipio_id' => 281],
            ['nombre' => 'Santa Isabel', 'municipio_id' => 281],
            // Municipio Boconó (municipio_id = 282)
            ['nombre' => 'Boconó', 'municipio_id' => 282],
            ['nombre' => 'El Carmen', 'municipio_id' => 282],
            ['nombre' => 'Mosquey', 'municipio_id' => 282],
            ['nombre' => 'Ayacucho', 'municipio_id' => 282],
            ['nombre' => 'Burbusay', 'municipio_id' => 282],
            ['nombre' => 'General Ribas', 'municipio_id' => 282],
            ['nombre' => 'Guaramacal', 'municipio_id' => 282],
            ['nombre' => 'Vega de Guaramacal', 'municipio_id' => 282],
            ['nombre' => 'Monseñor Jáuregui', 'municipio_id' => 282],
            ['nombre' => 'Rafael Rangel', 'municipio_id' => 282],
            ['nombre' => 'San Miguel', 'municipio_id' => 282],
            ['nombre' => 'José Gregorio Hernández', 'municipio_id' => 282],
            // Municipio Bolívar (municipio_id = 283)
            ['nombre' => 'Sabana Grande', 'municipio_id' => 283],
            ['nombre' => 'Cheregüé', 'municipio_id' => 283],
            ['nombre' => 'Granados', 'municipio_id' => 283],
            // Municipio Candelaria (municipio_id = 284)
            ['nombre' => 'Arnoldo Gabaldón', 'municipio_id' => 284],
            ['nombre' => 'Bolivia', 'municipio_id' => 284],
            ['nombre' => 'Carrillo', 'municipio_id' => 284],
            ['nombre' => 'Cegarra', 'municipio_id' => 284],
            ['nombre' => 'Chejendé', 'municipio_id' => 284],
            ['nombre' => 'Manuel Salvador Ulloa', 'municipio_id' => 284],
            ['nombre' => 'San José', 'municipio_id' => 284],
            // Municipio Carache (municipio_id = 285)
            ['nombre' => 'Carache', 'municipio_id' => 285],
            ['nombre' => 'La Concepción', 'municipio_id' => 285],
            ['nombre' => 'Cuicas', 'municipio_id' => 285],
            ['nombre' => 'Panamericana', 'municipio_id' => 285],
            ['nombre' => 'Santa Cruz', 'municipio_id' => 285],
            // Municipio Escuque (municipio_id = 286)
            ['nombre' => 'Escuque', 'municipio_id' => 286],
            ['nombre' => 'La Unión (El Bajo Escuque)', 'municipio_id' => 286],
            ['nombre' => 'Santa Rita', 'municipio_id' => 286],
            ['nombre' => 'Sabana Libre', 'municipio_id' => 286],
            // Municipio José Felipe Márquez Cañizales (municipio_id = 287)
            ['nombre' => 'El Socorro', 'municipio_id' => 287],
            ['nombre' => 'Los Caprichos', 'municipio_id' => 287],
            ['nombre' => 'Antonio José de Sucre', 'municipio_id' => 287],
            // Municipio Juan Vicente Campos Elías (municipio_id = 288)
            ['nombre' => 'Campo Elías', 'municipio_id' => 288],
            ['nombre' => 'Arnoldo Gabaldón', 'municipio_id' => 288],
            // Municipio La Ceiba (municipio_id = 289)
            ['nombre' => 'Santa Apolonia', 'municipio_id' => 289],
            ['nombre' => 'El Progreso', 'municipio_id' => 289],
            ['nombre' => 'La Ceiba', 'municipio_id' => 289],
            ['nombre' => 'Tres de Febrero', 'municipio_id' => 289],
            // Municipio Miranda (municipio_id = 290)
            ['nombre' => 'El Dividive', 'municipio_id' => 290],
            ['nombre' => 'Agua Santa', 'municipio_id' => 290],
            ['nombre' => 'Agua Caliente', 'municipio_id' => 290],
            ['nombre' => 'El Cenizo', 'municipio_id' => 290],
            ['nombre' => 'Valerita', 'municipio_id' => 290],
            // Municipio Monte Carmelo (municipio_id = 291)
            ['nombre' => 'Monte Carmelo', 'municipio_id' => 291],
            ['nombre' => 'Buena Vista', 'municipio_id' => 291],
            ['nombre' => 'Santa María del Horcón', 'municipio_id' => 291],
            // Municipio Motatán (municipio_id = 292)
            ['nombre' => 'Motatán', 'municipio_id' => 292],
            ['nombre' => 'El Baño', 'municipio_id' => 292],
            ['nombre' => 'Jalisco', 'municipio_id' => 292],
            // Municipio Pampán (municipio_id = 293)
            ['nombre' => 'Pampán', 'municipio_id' => 293],
            ['nombre' => 'Flor de Patria', 'municipio_id' => 293],
            ['nombre' => 'La Paz', 'municipio_id' => 293],
            ['nombre' => 'Santa Ana', 'municipio_id' => 293],
            // Municipio Pampanito (municipio_id = 294)
            ['nombre' => 'Pampanito', 'municipio_id' => 294],
            ['nombre' => 'La Concepción', 'municipio_id' => 294],
            ['nombre' => 'Pampanito II', 'municipio_id' => 294],
            // Municipio Rafael Rangel (municipio_id = 295)
            ['nombre' => 'Betijoque', 'municipio_id' => 295],
            ['nombre' => 'José Gregorio Hernández', 'municipio_id' => 295],
            ['nombre' => 'La Pueblita', 'municipio_id' => 295],
            ['nombre' => 'Los Cedros', 'municipio_id' => 295],
            // Municipio San Rafael de Carvajal (municipio_id = 296)
            ['nombre' => 'Carvajal', 'municipio_id' => 296],
            ['nombre' => 'Campo Alegre', 'municipio_id' => 296],
            ['nombre' => 'Antonio Nicolás Briceño', 'municipio_id' => 296],
            ['nombre' => 'José Leonardo Suárez', 'municipio_id' => 296],
            // Municipio Sucre (municipio_id = 297)
            ['nombre' => 'Sabana de Mendoza', 'municipio_id' => 297],
            ['nombre' => 'Junín', 'municipio_id' => 297],
            ['nombre' => 'Valmore Rodríguez', 'municipio_id' => 297],
            ['nombre' => 'El Paraíso', 'municipio_id' => 297],
            // Municipio Trujillo (municipio_id = 298)
            ['nombre' => 'Andrés Linares', 'municipio_id' => 298],
            ['nombre' => 'Chiquinquirá', 'municipio_id' => 298],
            ['nombre' => 'Cristóbal Mendoza', 'municipio_id' => 298],
            ['nombre' => 'Cruz Carrillo', 'municipio_id' => 298],
            ['nombre' => 'Matriz', 'municipio_id' => 298],
            ['nombre' => 'Monseñor Carrillo', 'municipio_id' => 298],
            ['nombre' => 'Tres Esquinas', 'municipio_id' => 298],
            // Municipio Urdaneta (municipio_id = 299)
            ['nombre' => 'Cabimbú', 'municipio_id' => 299],
            ['nombre' => 'Jajó', 'municipio_id' => 299],
            ['nombre' => 'La Mesa de Esnujaque', 'municipio_id' => 299],
            ['nombre' => 'Tuñame', 'municipio_id' => 299],
            ['nombre' => 'La Quebrada', 'municipio_id' => 299],
            ['nombre' => 'Santiago de Trujillo', 'municipio_id' => 299],
            // Municipio Valera (municipio_id = 300)
            ['nombre' => 'Juan Ignacio Montilla', 'municipio_id' => 300],
            ['nombre' => 'La Beatriz', 'municipio_id' => 300],
            ['nombre' => 'La Puerta', 'municipio_id' => 300],
            ['nombre' => 'Mendoza del Valle de Momboy', 'municipio_id' => 300],
            ['nombre' => 'Mercedes Díaz', 'municipio_id' => 300],
            ['nombre' => 'San Luis', 'municipio_id' => 300],
            
// Estado Yaracuy (estado_id = 22)
            // Municipio Arístides Bastidas (municipio_id = 301)
            ['nombre' => 'Arístides Bastidas', 'municipio_id' => 301],
            // Municipio Bolívar (municipio_id = 302)
            ['nombre' => 'Bolívar', 'municipio_id' => 302],
            // Municipio Bruzual (municipio_id = 303)
            ['nombre' => 'Chivacoa', 'municipio_id' => 303],
            ['nombre' => 'Campo Elías', 'municipio_id' => 303],
            // Municipio Cocorote (municipio_id = 304)
            ['nombre' => 'Cocorote', 'municipio_id' => 304],
            // Municipio Independencia (municipio_id = 305)
            ['nombre' => 'Independencia', 'municipio_id' => 305],
            // Municipio José Antonio Páez (municipio_id = 306)
            ['nombre' => 'José Antonio Páez', 'municipio_id' => 306],
            // Municipio La Trinidad (municipio_id = 307)
            ['nombre' => 'La Trinidad', 'municipio_id' => 307],
            // Municipio Manuel Monge (municipio_id = 308)
            ['nombre' => 'Manuel Monge', 'municipio_id' => 308],
            // Municipio Nirgua (municipio_id = 309)
            ['nombre' => 'Salóm', 'municipio_id' => 309],
            ['nombre' => 'Temerla', 'municipio_id' => 309],
            ['nombre' => 'Nirgua', 'municipio_id' => 309],
            // Municipio Peña (municipio_id = 310)
            ['nombre' => 'San Andrés', 'municipio_id' => 310],
            ['nombre' => 'Yaritagua', 'municipio_id' => 310],
            // Municipio San Felipe (municipio_id = 311)
            ['nombre' => 'San Javier', 'municipio_id' => 311],
            ['nombre' => 'Albarico', 'municipio_id' => 311],
            ['nombre' => 'San Felipe', 'municipio_id' => 311],
            // Municipio Sucre (municipio_id = 312)
            ['nombre' => 'Sucre', 'municipio_id' => 312],
            // Municipio Urachiche (municipio_id = 313)
            ['nombre' => 'Urachiche', 'municipio_id' => 313],
            // Municipio Veroes (municipio_id = 314)
            ['nombre' => 'El Guayabo', 'municipio_id' => 314],
            ['nombre' => 'Farriar', 'municipio_id' => 314],
            
            // Estado Zulia (estado_id = 23)
            // Municipio Almirante Padilla (municipio_id = 315)
            ['nombre' => 'Isla de Toas', 'municipio_id' => 1],
            ['nombre' => 'Monagas', 'municipio_id' => 1],
            // Municipio Baralt (municipio_id = 316)
            ['nombre' => 'San Timoteo', 'municipio_id' => 2],
            ['nombre' => 'General Urdaneta', 'municipio_id' => 2],
            ['nombre' => 'Libertador', 'municipio_id' => 2],
            ['nombre' => 'Marcelino Briceño', 'municipio_id' => 2],
            ['nombre' => 'Pueblo Nuevo', 'municipio_id' => 2],
            // Municipio Cabimas (municipio_id = 317)
            ['nombre' => 'Ambrosio', 'municipio_id' => 3],
            ['nombre' => 'Carmen Herrera', 'municipio_id' => 3],
            ['nombre' => 'La Rosa', 'municipio_id' => 3],
            ['nombre' => 'Germán Ríos Linares', 'municipio_id' => 3],
            ['nombre' => 'San Benito', 'municipio_id' => 3],
            ['nombre' => 'Rómulo Betancourt', 'municipio_id' => 3],
            ['nombre' => 'Jorge Hernández', 'municipio_id' => 3],
            ['nombre' => 'Punta Gorda', 'municipio_id' => 3],
            ['nombre' => 'Arístides Calvani', 'municipio_id' => 3],
            // Municipio Catatumbo (municipio_id = 318)
            ['nombre' => 'Encontrados', 'municipio_id' => 4],
            ['nombre' => 'Udón Pérez', 'municipio_id' => 4],
            // Municipio Colón (municipio_id = 319)
            ['nombre' => 'Moralito', 'municipio_id' => 5],
            ['nombre' => 'San Carlos del Zulia', 'municipio_id' => 5],
            ['nombre' => 'Santa Cruz del Zulia', 'municipio_id' => 5],
            ['nombre' => 'Santa Bárbara', 'municipio_id' => 5],
            ['nombre' => 'Urribarrí', 'municipio_id' => 5],
            // Municipio Francisco Javier Pulgar (municipio_id = 320)
            ['nombre' => 'Carlos Quevedo', 'municipio_id' => 6],
            ['nombre' => 'Francisco Javier Pulgar', 'municipio_id' => 6],
            ['nombre' => 'Simón Rodríguez', 'municipio_id' => 6],
            // Municipio Guajira (municipio_id = 321)
            ['nombre' => 'Sinamaica', 'municipio_id' => 15],
            ['nombre' => 'Alta Guajira', 'municipio_id' => 15],
            ['nombre' => 'Elías Sánchez Rubio', 'municipio_id' => 15],
            ['nombre' => 'Guajira', 'municipio_id' => 15],
            // Municipio Jesús Enrique Lossada (municipio_id = 322)
            ['nombre' => 'La Concepción', 'municipio_id' => 7],
            ['nombre' => 'San José', 'municipio_id' => 7],
            ['nombre' => 'Mariano Parra León', 'municipio_id' => 7],
            ['nombre' => 'José Ramón Yépez', 'municipio_id' => 7],
            // Municipio Jesús María Semprún (municipio_id = 323)
            ['nombre' => 'Jesús María Semprún', 'municipio_id' => 8],
            ['nombre' => 'Barí', 'municipio_id' => 8],
            // Municipio La Cañada de Urdaneta (municipio_id = 324)
            ['nombre' => 'Concepción', 'municipio_id' => 9],
            ['nombre' => 'Andrés Bello', 'municipio_id' => 9],
            ['nombre' => 'Chiquinquirá', 'municipio_id' => 9],
            ['nombre' => 'El Carmelo', 'municipio_id' => 9],
            ['nombre' => 'Potreritos', 'municipio_id' => 9],
            // Municipio Lagunillas (municipio_id = 325)
            ['nombre' => 'Libertad', 'municipio_id' => 10],
            ['nombre' => 'Paraute', 'municipio_id' => 10],
            ['nombre' => 'Eleazar López Contreras', 'municipio_id' => 10],
            ['nombre' => 'Campo Lara', 'municipio_id' => 10],
            // Municipio Machiques de Perijá (municipio_id = 326)
            ['nombre' => 'Bartolomé de las Casas', 'municipio_id' => 11],
            ['nombre' => 'Libertad', 'municipio_id' => 11],
            ['nombre' => 'Río Negro', 'municipio_id' => 11],
            ['nombre' => 'San José de Perijá', 'municipio_id' => 11],
            // Municipio Mara (municipio_id = 327)
            ['nombre' => 'San Rafael', 'municipio_id' => 12],
            ['nombre' => 'La Sierrita', 'municipio_id' => 12],
            ['nombre' => 'Las Parcelas', 'municipio_id' => 12],
            ['nombre' => 'Luis De Vicente', 'municipio_id' => 12],
            ['nombre' => 'Monseñor Marcos Sergio Godoy', 'municipio_id' => 12],
            ['nombre' => 'Ricaurte', 'municipio_id' => 12],
            ['nombre' => 'Tamare', 'municipio_id' => 12],
            // Municipio Maracaibo (municipio_id = 328)
            ['nombre' => 'Antonio Borjas Romero', 'municipio_id' => 13],
            ['nombre' => 'Bolívar', 'municipio_id' => 13],
            ['nombre' => 'Cacique Mara', 'municipio_id' => 13],
            ['nombre' => 'Carracciolo Parra Pérez', 'municipio_id' => 13],
            ['nombre' => 'Cecilio Acosta', 'municipio_id' => 13],
            ['nombre' => 'Cristo de Aranza', 'municipio_id' => 13],
            ['nombre' => 'Coquivacoa', 'municipio_id' => 13],
            ['nombre' => 'Chiquinquirá', 'municipio_id' => 13],
            ['nombre' => 'Francisco Eugenio Bustamante', 'municipio_id' => 13],
            ['nombre' => 'Idelfonzo Vásquez', 'municipio_id' => 13],
            ['nombre' => 'Juana de Ávila', 'municipio_id' => 13],
            ['nombre' => 'Luis Hurtado Higuera', 'municipio_id' => 13],
            ['nombre' => 'Manuel Dagnino', 'municipio_id' => 13],
            ['nombre' => 'Olegario Villalobos', 'municipio_id' => 13],
            ['nombre' => 'Raúl Leoni', 'municipio_id' => 13],
            ['nombre' => 'Santa Lucía', 'municipio_id' => 13],
            ['nombre' => 'San Isidro', 'municipio_id' => 13],
            ['nombre' => 'Venancio Pulgar', 'municipio_id' => 13],
            // Municipio Miranda (municipio_id = 329)
            ['nombre' => 'Altagracia', 'municipio_id' => 14],
            ['nombre' => 'Faría', 'municipio_id' => 14],
            ['nombre' => 'Ana María Campos', 'municipio_id' => 14],
            ['nombre' => 'San Antonio', 'municipio_id' => 14],
            ['nombre' => 'San José', 'municipio_id' => 14],
            // Municipio Rosario de Perijá (municipio_id = 330)
            ['nombre' => 'Donaldo García', 'municipio_id' => 16],
            ['nombre' => 'El Rosario', 'municipio_id' => 16],
            ['nombre' => 'Sixto Zambrano', 'municipio_id' => 16],
            // Municipio San Francisco (municipio_id = 331)
            ['nombre' => 'San Francisco', 'municipio_id' => 17],
            ['nombre' => 'El Bajo', 'municipio_id' => 17],
            ['nombre' => 'Domitila Flores', 'municipio_id' => 17],
            ['nombre' => 'Francisco Ochoa', 'municipio_id' => 17],
            ['nombre' => 'Los Cortijos', 'municipio_id' => 17],
            ['nombre' => 'Marcial Hernández', 'municipio_id' => 17],
            ['nombre' => 'José Domingo Rus', 'municipio_id' => 17],
            // Municipio Santa Rita (municipio_id = 332)
            ['nombre' => 'Santa Rita', 'municipio_id' => 18],
            ['nombre' => 'El Mene', 'municipio_id' => 18],
            ['nombre' => 'Pedro Lucas Urribarrí', 'municipio_id' => 18],
            ['nombre' => 'José Cenobio Urribarrí', 'municipio_id' => 18],
            // Municipio Simón Bolívar (municipio_id = 333)
            ['nombre' => 'Rafael Maria Baralt', 'municipio_id' => 19],
            ['nombre' => 'Manuel Manrique', 'municipio_id' => 19],
            ['nombre' => 'Rafael Urdaneta', 'municipio_id' => 19],
            // Municipio Sucre (municipio_id = 334)
            ['nombre' => 'Bobures', 'municipio_id' => 20],
            ['nombre' => 'Gibraltar', 'municipio_id' => 20],
            ['nombre' => 'Heras', 'municipio_id' => 20],
            ['nombre' => 'Monseñor Arturo Álvarez', 'municipio_id' => 20],
            ['nombre' => 'Rómulo Gallegos', 'municipio_id' => 20],
            ['nombre' => 'El Batey', 'municipio_id' => 20],
            // Municipio Valmore Rodríguez (municipio_id = 335)
            ['nombre' => 'La Victoria', 'municipio_id' => 21],
            ['nombre' => 'Raúl Cuenca', 'municipio_id' => 21],
        ];

        DB::table('parroquias')->insert($parroquias);
    }
}
