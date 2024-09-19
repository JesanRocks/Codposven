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
            ['nombre' => 'San Fernando de Atabapo', 'cod_postal' => '7101', 'municipio_id' => 1],
            ['nombre' => 'Ucata', 'cod_postal' => '7101', 'municipio_id' => 1],
            ['nombre' => 'Yapacana', 'cod_postal' => '7101', 'municipio_id' => 1],
            ['nombre' => 'Caname', 'cod_postal' => '7101', 'municipio_id' => 1],
            // Municipio Alto Orinoco (municipio_id = 2) 
            ['nombre' => 'La Esmeralda', 'cod_postal' => '7101', 'municipio_id' => 2],
            ['nombre' => 'Huachamacare', 'cod_postal' => '7101', 'municipio_id' => 2],
            ['nombre' => 'Marawaka', 'cod_postal' => '7101', 'municipio_id' => 2],
            ['nombre' => 'Mavaka', 'cod_postal' => '7101', 'municipio_id' => 2],
            ['nombre' => 'Sierra Parima', 'cod_postal' => '7101', 'municipio_id' => 2],
            // Municipio Atures (municipio_id = 3)
            ['nombre' => 'Fernando Girón Tovar', 'cod_postal' => '7101', 'municipio_id' => 3],
            ['nombre' => 'Luis Alberto Gómez', 'cod_postal' => '7101', 'municipio_id' => 3],
            ['nombre' => 'Pahueña', 'cod_postal' => '7101', 'municipio_id' => 3],
            ['nombre' => 'Platanillal', 'cod_postal' => '7101', 'municipio_id' => 3],
            // Municipio Autana (municipio_id = 4) 
            ['nombre' => 'Samariapo', 'cod_postal' => '7101', 'municipio_id' => 4],
            ['nombre' => 'Sipapo', 'cod_postal' => '7101', 'municipio_id' => 4],
            ['nombre' => 'Munduapo', 'cod_postal' => '7101', 'municipio_id' => 4],
            ['nombre' => 'Guayapo', 'cod_postal' => '7101', 'municipio_id' => 4],
            ['nombre' => 'Isla Ratón', 'cod_postal' => '7101', 'municipio_id' => 4],
            // Municipio Manapiare (municipio_id = 5) 
            ['nombre' => 'Alto Ventuari', 'cod_postal' => '7101', 'municipio_id' => 5],
            ['nombre' => 'Medio Ventuari', 'cod_postal' => '7101', 'municipio_id' => 5],
            ['nombre' => 'Bajo Ventuari', 'cod_postal' => '7101', 'municipio_id' => 5],
            ['nombre' => 'Manapiare', 'cod_postal' => '7101', 'municipio_id' => 5],
            // Municipio Maroa (municipio_id = 6) 
            ['nombre' => 'Maroa', 'cod_postal' => '7101', 'municipio_id' => 6],
            ['nombre' => 'Victorino', 'cod_postal' => '7101', 'municipio_id' => 6],
            ['nombre' => 'Comunidad', 'cod_postal' => '7101', 'municipio_id' => 6],
            // Municipio Río Negro (municipio_id = 7) 
            ['nombre' => 'Casiquiare', 'cod_postal' => '7101', 'municipio_id' => 7],
            ['nombre' => 'Cocuy', 'cod_postal' => '7101', 'municipio_id' => 7],
            ['nombre' => 'San Carlos de Río Negro', 'cod_postal' => '7101', 'municipio_id' => 7],
            ['nombre' => 'Solano', 'cod_postal' => '7101', 'municipio_id' => 7],

            // Estado Anzoátegui (estado_id = 2)
            // Municipio Anaco (municipio_id = 8)
            ['nombre' => 'Anaco', 'cod_postal' => '6003', 'municipio_id' => 8],
            ['nombre' => 'San Joaquín', 'cod_postal' => '6003', 'municipio_id' => 8],
            // Municipio Aragua (municipio_id = 9)
            ['nombre' => 'Aragua de Barcelona', 'cod_postal' => '6002', 'municipio_id' => 9],
            ['nombre' => 'Cachipo', 'cod_postal' => '6002', 'municipio_id' => 9],
            // Municipio Bolívar (municipio_id = 10)
            ['nombre' => 'Barcelona', 'cod_postal' => '6001', 'municipio_id' => 10],
            ['nombre' => 'El Carmen', 'cod_postal' => '6001', 'municipio_id' => 10],
            ['nombre' => 'San Cristóbal', 'cod_postal' => '6001', 'municipio_id' => 10],
            ['nombre' => 'Bergantín', 'cod_postal' => '6001', 'municipio_id' => 10],
            ['nombre' => 'Caigua', 'cod_postal' => '6001', 'municipio_id' => 10],
            ['nombre' => 'El Pilar', 'cod_postal' => '6001', 'municipio_id' => 10],
            ['nombre' => 'Naricual', 'cod_postal' => '6001', 'municipio_id' => 10],
            // Municipio Bruzual (municipio_id = 11)
            ['nombre' => 'Clarines', 'cod_postal' => '6008', 'municipio_id' => 11],
            ['nombre' => 'Guanape', 'cod_postal' => '6008', 'municipio_id' => 11],
            ['nombre' => 'Sabana de Uchire', 'cod_postal' => '6008', 'municipio_id' => 11],
            // Municipio Cajigal (municipio_id = 12)
            ['nombre' => 'Onoto', 'cod_postal' => '6020', 'municipio_id' => 12],
            ['nombre' => 'San Pablo', 'cod_postal' => '6020', 'municipio_id' => 12],
            // Municipio Carvajal (municipio_id = 13)
            ['nombre' => 'Valle de Guanape', 'cod_postal' => '6032', 'municipio_id' => 13],
            ['nombre' => 'Santa Bárbara', 'cod_postal' => '6032', 'municipio_id' => 13],
            // Municipio Freites (municipio_id = 14)
            ['nombre' => 'Cantaura', 'cod_postal' => '6007', 'municipio_id' => 14],
            ['nombre' => 'Libertador', 'cod_postal' => '6007', 'municipio_id' => 14],
            ['nombre' => 'Santa Rosa', 'cod_postal' => '6007', 'municipio_id' => 14],
            ['nombre' => 'Urica', 'cod_postal' => '6007', 'municipio_id' => 14],
            // Municipio Guanipa (municipio_id = 15)
            ['nombre' => 'San José de Guanipa', 'cod_postal' => '6054', 'municipio_id' => 15],
            // Municipio Guanta (municipio_id = 16)
            ['nombre' => 'Guanta', 'cod_postal' => '6014', 'municipio_id' => 16],
            ['nombre' => 'Chorrerón', 'cod_postal' => '6014', 'municipio_id' => 16],
            // Municipio Independencia (municipio_id = 17)
            ['nombre' => 'Soledad', 'cod_postal' => '8013', 'municipio_id' => 17],
            ['nombre' => 'Mamo', 'cod_postal' => '8013', 'municipio_id' => 17],
            // Municipio Libertad (municipio_id = 18)
            ['nombre' => 'San Mateo', 'cod_postal' => '6048', 'municipio_id' => 18],
            ['nombre' => 'El Carito', 'cod_postal' => '6048', 'municipio_id' => 18],
            ['nombre' => 'Santa Inés', 'cod_postal' => '6048', 'municipio_id' => 18],
            // Municipio McGregor (municipio_id = 19)
            ['nombre' => 'El Chaparro', 'cod_postal' => '2350', 'municipio_id' => 19],
            ['nombre' => 'Tomás Alfaro Calatrava', 'cod_postal' => '2350', 'municipio_id' => 19],
            // Municipio Miranda (municipio_id = 20)
            ['nombre' => 'Pariaguán', 'cod_postal' => '6052', 'municipio_id' => 20],
            ['nombre' => 'Atapirire', 'cod_postal' => '6052', 'municipio_id' => 20],
            ['nombre' => 'Boca del Pao', 'cod_postal' => '6052', 'municipio_id' => 20],
            ['nombre' => 'El Pao', 'cod_postal' => '6052', 'municipio_id' => 20],
            ['nombre' => 'Múcura', 'cod_postal' => '6052', 'municipio_id' => 20],
            // Municipio Monagas (municipio_id = 21)
            ['nombre' => 'Mapire', 'cod_postal' => '6057', 'municipio_id' => 21],
            ['nombre' => 'Piar', 'cod_postal' => '6057', 'municipio_id' => 21],
            ['nombre' => 'Santa Clara', 'cod_postal' => '6057', 'municipio_id' => 21],
            ['nombre' => 'San Diego de Cabrutica', 'cod_postal' => '6057', 'municipio_id' => 21],
            ['nombre' => 'Uverito', 'cod_postal' => '6057', 'municipio_id' => 21],
            ['nombre' => 'Zuata', 'cod_postal' => '6057', 'municipio_id' => 21],
            // Municipio Peñalver (municipio_id = 22)
            ['nombre' => 'Puerto Píritu', 'cod_postal' => '6022', 'municipio_id' => 22],
            ['nombre' => 'San Miguel', 'cod_postal' => '6022', 'municipio_id' => 22],
            ['nombre' => 'Sucre', 'cod_postal' => '6022', 'municipio_id' => 22],
           // Municipio Píritu (municipio_id = 23)
            ['nombre' => 'Píritu', 'cod_postal' => '6022', 'municipio_id' => 23],
            ['nombre' => 'San Francisco', 'cod_postal' => '6022', 'municipio_id' => 23],
            // Municipio San Juan de Capistrano (municipio_id = 24)
            ['nombre' => 'Boca de Uchire', 'cod_postal' => '6005', 'municipio_id' => 24],
            ['nombre' => 'Boca de Chávez', 'cod_postal' => '6005', 'municipio_id' => 24],
            // Municipio Santa Ana (municipio_id = 25)
            ['nombre' => 'Santa Ana', 'cod_postal' => '6027', 'municipio_id' => 25],
            ['nombre' => 'Pueblo Nuevo', 'cod_postal' => '6027', 'municipio_id' => 25],
            // Municipio Simón Rodríguez (municipio_id = 26)
            ['nombre' => 'El Tigre', 'cod_postal' => '6050', 'municipio_id' => 26],
            ['nombre' => 'Edmundo Barrios', 'cod_postal' => '6050', 'municipio_id' => 26],
            ['nombre' => 'Miguel Otero Silva', 'cod_postal' => '6050', 'municipio_id' => 26],
            // Municipio Sotillo (municipio_id = 27)
            ['nombre' => 'Puerto La Cruz', 'cod_postal' => '6025', 'municipio_id' => 27],
            ['nombre' => 'Pozuelos', 'cod_postal' => '6025', 'municipio_id' => 27],
            // Municipio Urbaneja (municipio_id = 28)
            ['nombre' => 'Lechería', 'cod_postal' => '6016', 'municipio_id' => 28],
            ['nombre' => 'El Morro', 'cod_postal' => '6016', 'municipio_id' => 28],

            // Estado Apure (estado_id = 3)
            // Municipio Achaguas (municipio_id = 29)
            ['nombre' => 'Achaguas', 'cod_postal' => '7002', 'municipio_id' => 29],
            ['nombre' => 'Apurito', 'cod_postal' => '7002', 'municipio_id' => 29],
            ['nombre' => 'El Yagual', 'cod_postal' => '7002', 'municipio_id' => 29],
            ['nombre' => 'Guachara', 'cod_postal' => '7002', 'municipio_id' => 29],
            ['nombre' => 'Mucuritas', 'cod_postal' => '7002', 'municipio_id' => 29],
            ['nombre' => 'Queseras del Medio', 'cod_postal' => '7002', 'municipio_id' => 29],
            // Municipio Biruaca (municipio_id = 30)
            ['nombre' => 'Biruaca', 'cod_postal' => '7007', 'municipio_id' => 30],
            // Municipio Muñoz (municipio_id = 31)
            ['nombre' => 'Bruzual', 'cod_postal' => '7005', 'municipio_id' => 31],
            ['nombre' => 'Mantecal', 'cod_postal' => '7010', 'municipio_id' => 31],
            ['nombre' => 'Quintero', 'cod_postal' => '7005', 'municipio_id' => 31],
            ['nombre' => 'Rincón Hondo', 'cod_postal' => '7005', 'municipio_id' => 31],
            ['nombre' => 'San Vicente', 'cod_postal' => '7010', 'municipio_id' => 31],
            // Municipio Páez (municipio_id = 32)
            ['nombre' => 'Guasdualito', 'cod_postal' => '5063', 'municipio_id' => 32],
            ['nombre' => 'Aramendi', 'cod_postal' => '5063', 'municipio_id' => 32],
            ['nombre' => 'El Amparo', 'cod_postal' => '5062', 'municipio_id' => 32],
            ['nombre' => 'San Camilo', 'cod_postal' => '5063', 'municipio_id' => 32],
            ['nombre' => 'Urdaneta', 'cod_postal' => '5063', 'municipio_id' => 32],
            // Municipio Pedro Camejo (municipio_id = 33)
            ['nombre' => 'San Juan de Payara', 'cod_postal' => '7004', 'municipio_id' => 33],
            ['nombre' => 'Codazzi', 'cod_postal' => '7004', 'municipio_id' => 33],
            ['nombre' => 'Cunaviche', 'cod_postal' => '7004', 'municipio_id' => 33],
            // Municipio Rómulo Gallegos (municipio_id = 34)
            ['nombre' => 'Elorza', 'cod_postal' => '7011', 'municipio_id' => 34],
            ['nombre' => 'La Trinidad', 'cod_postal' => '7011', 'municipio_id' => 34],
            // Municipio San Fernando (municipio_id = 35)
            ['nombre' => 'San Fernando', 'cod_postal' => '7001', 'municipio_id' => 35],
            ['nombre' => 'El Recreo', 'cod_postal' => '7001', 'municipio_id' => 35],
            ['nombre' => 'Peñalver', 'cod_postal' => '7001', 'municipio_id' => 35],
            ['nombre' => 'San Rafael de Atamaica', 'cod_postal' => '7001', 'municipio_id' => 35],

            // Estado Aragua (estado_id = 4)
            // Municipio Bolívar (municipio_id = 36)
            ['nombre' => 'San Mateo', 'cod_postal' => 2120, 'municipio_id' => 36],
            // Municipio Camatagua (municipio_id = 37)
            ['nombre' => 'Camatagua', 'cod_postal' => 2335, 'municipio_id' => 37],
            ['nombre' => 'Carmen de Cura', 'cod_postal' => 2335, 'municipio_id' => 37],
            // Municipio Francisco Linares Alcántara (municipio_id = 38)
            ['nombre' => 'Santa Rita', 'cod_postal' => 2106, 'municipio_id' => 38],
            ['nombre' => 'Francisco de Miranda', 'cod_postal' => 2106, 'municipio_id' => 38],
            ['nombre' => 'Monseñor Feliciano González', 'cod_postal' => 2103, 'municipio_id' => 38],
            // Municipio Girardot (municipio_id = 39)
            ['nombre' => 'Pedro José Ovalles', 'cod_postal' => 2101, 'municipio_id' => 39],
            ['nombre' => 'Joaquín Crespo', 'cod_postal' => 2101, 'municipio_id' => 39],
            ['nombre' => 'José Casanova Godoy', 'cod_postal' => 2101, 'municipio_id' => 39],
            ['nombre' => 'Madre María de San José', 'cod_postal' => 2101, 'municipio_id' => 39],
            ['nombre' => 'Andrés Eloy Blanco', 'cod_postal' => 2103, 'municipio_id' => 39],
            ['nombre' => 'Los Tacariguas', 'cod_postal' => 2103, 'municipio_id' => 39],
            ['nombre' => 'Las Delicias', 'cod_postal' => 2103, 'municipio_id' => 39],
            ['nombre' => 'Choroní', 'cod_postal' => 2110, 'municipio_id' => 39],
            // Municipio José Ángel Lamas (municipio_id = 40)
            ['nombre' => 'Santa Cruz', 'cod_postal' => 2123, 'municipio_id' => 40],
            // Municipio José Félix Ribas (municipio_id = 41)
            ['nombre' => 'Juan Vicente Bolívar y Ponte', 'cod_postal' => 2121, 'municipio_id' => 41],
            ['nombre' => 'Castor Nieves Ríos', 'cod_postal' => 2121, 'municipio_id' => 41],
            ['nombre' => 'Las Guacamayas', 'cod_postal' => 2121, 'municipio_id' => 41],
            ['nombre' => 'Pao de Zárate', 'cod_postal' => 2121, 'municipio_id' => 41],
            ['nombre' => 'Zuata', 'cod_postal' => 2121, 'municipio_id' => 41],
            // Municipio José Rafael Revenga (municipio_id = 42)
            ['nombre' => 'El Consejo', 'cod_postal' => 2128, 'municipio_id' => 42],
            // Municipio Libertador (municipio_id = 43)
            ['nombre' => 'Palo Negro', 'cod_postal' => 2117, 'municipio_id' => 43],
            ['nombre' => 'San Martín de Porres', 'cod_postal' => 2117, 'municipio_id' => 43],
            // Municipio Mario Briceño Iragorry (municipio_id = 44)
            ['nombre' => 'El Limón', 'cod_postal' => 2105, 'municipio_id' => 44],
            ['nombre' => 'Caña de Azúcar', 'cod_postal' => 2105, 'municipio_id' => 44],
            // Municipio Ocumare de la Costa de Oro (municipio_id = 45)
            ['nombre' => 'Samán de Güere', 'cod_postal' => 2112, 'municipio_id' => 45],
            // Municipio San Casimiro (municipio_id = 46)
            ['nombre' => 'San Casimiro', 'cod_postal' => 2338, 'municipio_id' => 46],
            ['nombre' => 'Güiripa', 'cod_postal' => 2338, 'municipio_id' => 46],
            ['nombre' => 'Ollas de Caramacate', 'cod_postal' => 2338, 'municipio_id' => 46],
            ['nombre' => 'Valle Morín', 'cod_postal' => 2338, 'municipio_id' => 46],
            // Municipio San Sebastián (municipio_id = 47)
            ['nombre' => 'San Sebastián', 'cod_postal' => 2340, 'municipio_id' => 47],
            // Municipio Santiago Mariño (municipio_id = 48)
            ['nombre' => 'Turmero', 'cod_postal' => 2115, 'municipio_id' => 48],
            ['nombre' => 'Arevalo Aponte', 'cod_postal' => 2115, 'municipio_id' => 48],
            ['nombre' => 'Chuao', 'cod_postal' => 2115, 'municipio_id' => 48],
            ['nombre' => 'Samán de Güere', 'cod_postal' => 2115, 'municipio_id' => 48],
            ['nombre' => 'Alfredo Pacheco Miranda', 'cod_postal' => 2115, 'municipio_id' => 48],
            // Municipio Santos Michelena (municipio_id = 49)
            ['nombre' => 'Las Tejerías', 'cod_postal' => 2119, 'municipio_id' => 49],
            ['nombre' => 'Tiara', 'cod_postal' => 2119, 'municipio_id' => 49],
            // Municipio Sucre (municipio_id = 50)
            ['nombre' => 'Cagua', 'cod_postal' => 2122, 'municipio_id' => 50],
            ['nombre' => 'Bella Vista', 'cod_postal' => 2122, 'municipio_id' => 50],
            // Municipio Tovar (municipio_id = 51)
            ['nombre' => 'Colonia Tovar', 'cod_postal' => 1030, 'municipio_id' => 51],
            // Municipio Urdaneta (municipio_id = 52)
            ['nombre' => 'Barbacoas', 'cod_postal' => 2301, 'municipio_id' => 52],
            ['nombre' => 'San Francisco de Cara', 'cod_postal' => 2334, 'municipio_id' => 52],
            ['nombre' => 'Taguay', 'cod_postal' => 2334, 'municipio_id' => 52],
            ['nombre' => 'Las Peñitas', 'cod_postal' => 2334, 'municipio_id' => 52],
            // Municipio Zamora (municipio_id = 53)
            ['nombre' => 'Villa de Cura', 'cod_postal' => 2126, 'municipio_id' => 53],
            ['nombre' => 'Magdaleno', 'cod_postal' => 2128, 'municipio_id' => 53],
            ['nombre' => 'San Francisco de Asís', 'cod_postal' => 2126, 'municipio_id' => 53],
            ['nombre' => 'Valles de Tucutunemo', 'cod_postal' => 2126, 'municipio_id' => 53],
            ['nombre' => 'Augusto Mijares', 'cod_postal' => 2126, 'municipio_id' => 53],

            // Estado Barinas (estado_id = 5)
            // Municipio Alberto Arvelo Torrealba (municipio_id = 54)
            ['nombre' => 'Sabaneta', 'cod_postal' => 5224, 'municipio_id' => 54],
            ['nombre' => 'Juan Antonio Rodríguez Domínguez', 'cod_postal' => 5224, 'municipio_id' => 54],
            // Municipio Andrés Eloy Blanco (municipio_id = 55)
            ['nombre' => 'El Cantón', 'cod_postal' => 5201, 'municipio_id' => 55],
            ['nombre' => 'Santa Cruz de Guacas', 'cod_postal' => 5201, 'municipio_id' => 55],
            ['nombre' => 'Puerto Vivas', 'cod_postal' => 5201, 'municipio_id' => 55],
            // Municipio Antonio José de Sucre (municipio_id = 56)
            ['nombre' => 'Socopó', 'cod_postal' => 5216, 'municipio_id' => 56],
            ['nombre' => 'Nicolás Pulido', 'cod_postal' => 5216, 'municipio_id' => 56],
            ['nombre' => 'Andrés Bello', 'cod_postal' => 5216, 'municipio_id' => 56],
            // Municipio Arismendi (municipio_id = 57)
            ['nombre' => 'Arismendi', 'cod_postal' => 5201, 'municipio_id' => 57],
            ['nombre' => 'Guadarrama', 'cod_postal' => 5201, 'municipio_id' => 57],
            ['nombre' => 'La Unión', 'cod_postal' => 5201, 'municipio_id' => 57],
            ['nombre' => 'San Antonio', 'cod_postal' => 5201, 'municipio_id' => 57],
            // Municipio Barinas (municipio_id = 58)
            ['nombre' => 'Barinas', 'cod_postal' => 5201, 'municipio_id' => 58],
            ['nombre' => 'Alto Barinas', 'cod_postal' => 5201, 'municipio_id' => 58],
            ['nombre' => 'Corazón de Jesús', 'cod_postal' => 5201, 'municipio_id' => 58],
            ['nombre' => 'El Carmen', 'cod_postal' => 5201, 'municipio_id' => 58],
            ['nombre' => 'Rómulo Betancourt', 'cod_postal' => 5201, 'municipio_id' => 58],
            ['nombre' => 'Ramón Ignacio Méndez', 'cod_postal' => 5201, 'municipio_id' => 58],
            ['nombre' => 'Alfredo Arvelo Larriva', 'cod_postal' => 5201, 'municipio_id' => 58],
            ['nombre' => 'San Silvestre', 'cod_postal' => 5203, 'municipio_id' => 58],
            ['nombre' => 'Santa Inés', 'cod_postal' => 5202, 'municipio_id' => 58],
            ['nombre' => 'Santa Lucía', 'cod_postal' => 5204, 'municipio_id' => 58],
            ['nombre' => 'Torunos', 'cod_postal' => 5205, 'municipio_id' => 58],
            ['nombre' => 'El Corozo', 'cod_postal' => 5201, 'municipio_id' => 58],
            ['nombre' => 'Palacio Fajardo', 'cod_postal' => 5201, 'municipio_id' => 58],
            ['nombre' => 'Manuel Palacio Fajardo', 'cod_postal' => 5201, 'municipio_id' => 58],
            ['nombre' => 'Dominga Ortiz de Páez', 'cod_postal' => 5201, 'municipio_id' => 58],
            // Municipio Bolívar (municipio_id = 59)
            ['nombre' => 'Barinitas', 'cod_postal' => 5206, 'municipio_id' => 59],
            ['nombre' => 'Altamira de Cáceres', 'cod_postal' => 5208, 'municipio_id' => 59],
            ['nombre' => 'Calderas', 'cod_postal' => 5207, 'municipio_id' => 59],
            // Municipio Cruz Paredes (municipio_id = 60)
            ['nombre' => 'Barrancas', 'cod_postal' => 5211, 'municipio_id' => 60],
            ['nombre' => 'El Socorro', 'cod_postal' => 5211, 'municipio_id' => 60],
            ['nombre' => 'Masparrito', 'cod_postal' => 5211, 'municipio_id' => 60],
            // Municipio Ezequiel Zamora (municipio_id = 61)
            ['nombre' => 'Santa Bárbara', 'cod_postal' => 5210, 'municipio_id' => 61],
            ['nombre' => 'Pedro Briceño Méndez', 'cod_postal' => 5210, 'municipio_id' => 61],
            ['nombre' => 'Ramón Ignacio Méndez', 'cod_postal' => 5210, 'municipio_id' => 61],
            ['nombre' => 'José Ignacio del Pumar', 'cod_postal' => 5210, 'municipio_id' => 61],
            // Municipio Obispos (municipio_id = 62)
            ['nombre' => 'Obispos', 'cod_postal' => 5213, 'municipio_id' => 62],
            ['nombre' => 'Guasimitos', 'cod_postal' => 5213, 'municipio_id' => 62],
            ['nombre' => 'El Real', 'cod_postal' => 5213, 'municipio_id' => 62],
            ['nombre' => 'La Luz', 'cod_postal' => 5212, 'municipio_id' => 62],
            // Municipio Pedraza (municipio_id = 63)
            ['nombre' => 'Ciudad Bolivia', 'cod_postal' => 5214, 'municipio_id' => 63],
            ['nombre' => 'Ignacio Briceño', 'cod_postal' => 5214, 'municipio_id' => 63],
            ['nombre' => 'José Félix Ribas', 'cod_postal' => 5214, 'municipio_id' => 63],
            ['nombre' => 'Páez', 'cod_postal' => 5214, 'municipio_id' => 63],
            // Municipio Rojas (municipio_id = 64)
            ['nombre' => 'Libertad', 'cod_postal' => 5220, 'municipio_id' => 64],
            ['nombre' => 'Dolores', 'cod_postal' => 5217, 'municipio_id' => 64],
            ['nombre' => 'Palacios Fajardo', 'cod_postal' => 5217, 'municipio_id' => 64],
            ['nombre' => 'Santa Rosa', 'cod_postal' => 5219, 'municipio_id' => 64],
            ['nombre' => 'Simón Rodríguez', 'cod_postal' => 5218, 'municipio_id' => 64],
            // Municipio Sosa (municipio_id = 65)
            ['nombre' => 'Ciudad de Nutrias', 'cod_postal' => 5221, 'municipio_id' => 65],
            ['nombre' => 'El Regalo', 'cod_postal' => 5221, 'municipio_id' => 65],
            ['nombre' => 'Puerto de Nutrias', 'cod_postal' => 5222, 'municipio_id' => 65],
            ['nombre' => 'Santa Catalina', 'cod_postal' => 5223, 'municipio_id' => 65],
            ['nombre' => 'Simón Bolívar', 'cod_postal' => 5221, 'municipio_id' => 65],

            // Estado Bolívar (estado_id = 6)
            // Municipio Angostura del Orinoco (municipio_id = 66)
            ['nombre' => 'Raúl Leoni', 'cod_postal' => 8003, 'municipio_id' => 66],
            ['nombre' => 'Barceloneta', 'cod_postal' => 8003, 'municipio_id' => 66],
            ['nombre' => 'Santa Bárbara', 'cod_postal' => 8003, 'municipio_id' => 66],
            ['nombre' => 'San Francisco', 'cod_postal' => 8003, 'municipio_id' => 66],
            // Municipio Caroní (municipio_id = 67)
            ['nombre' => 'Cachamay', 'cod_postal' => 8050, 'municipio_id' => 67],
            ['nombre' => 'Chirica', 'cod_postal' => 8050, 'municipio_id' => 67],
            ['nombre' => 'Dalla Costa', 'cod_postal' => 8050, 'municipio_id' => 67],
            ['nombre' => 'Once de Abril', 'cod_postal' => 8050, 'municipio_id' => 67],
            ['nombre' => 'Simón Bolívar', 'cod_postal' => 8050, 'municipio_id' => 67],
            ['nombre' => 'Unare', 'cod_postal' => 8050, 'municipio_id' => 67],
            ['nombre' => 'Universidad', 'cod_postal' => 8050, 'municipio_id' => 67],
            ['nombre' => 'Vista al Sol', 'cod_postal' => 8050, 'municipio_id' => 67],
            ['nombre' => 'Pozo Verde', 'cod_postal' => 8051, 'municipio_id' => 67],
            ['nombre' => 'Yocoima', 'cod_postal' => 8051, 'municipio_id' => 67],
            // Municipio Cedeño (municipio_id = 68)
            ['nombre' => 'Altagracia', 'cod_postal' => 8007, 'municipio_id' => 68],
            ['nombre' => 'Ascensión Farreras', 'cod_postal' => 8007, 'municipio_id' => 68],
            ['nombre' => 'Guaniamo', 'cod_postal' => 8007, 'municipio_id' => 68],
            ['nombre' => 'La Urbana', 'cod_postal' => 8007, 'municipio_id' => 68],
            ['nombre' => 'Pijiguaos', 'cod_postal' => 8007, 'municipio_id' => 68],
            // Municipio El Callao (municipio_id = 69)
            ['nombre' => 'El Callao', 'cod_postal' => 8056, 'municipio_id' => 69],
            // Municipio Gran Sabana (municipio_id = 70)
            ['nombre' => 'Gran Sabana', 'cod_postal' => 8011, 'municipio_id' => 70],
            ['nombre' => 'Ikabarú', 'cod_postal' => 8011, 'municipio_id' => 70],
            // Municipio Heres (municipio_id = 71)
            ['nombre' => 'Agua Salada', 'cod_postal' => 8001, 'municipio_id' => 71],
            ['nombre' => 'Catedral', 'cod_postal' => 8001, 'municipio_id' => 71],
            ['nombre' => 'José Antonio Páez', 'cod_postal' => 8001, 'municipio_id' => 71],
            ['nombre' => 'La Sabanita', 'cod_postal' => 8001, 'municipio_id' => 71],
            ['nombre' => 'Vista Hermosa', 'cod_postal' => 8001, 'municipio_id' => 71],
            ['nombre' => 'Marhuanta', 'cod_postal' => 8001, 'municipio_id' => 71],
            ['nombre' => 'Orinoco', 'cod_postal' => 8001, 'municipio_id' => 71],
            ['nombre' => 'Panapana', 'cod_postal' => 8001, 'municipio_id' => 71],
            ['nombre' => 'Zea', 'cod_postal' => 8001, 'municipio_id' => 71],
            // Municipio Padre Pedro Chien (municipio_id = 72)
            ['nombre' => 'Padre Pedro Chien', 'cod_postal' => 8050, 'municipio_id' => 72],
            // Municipio Piar (municipio_id = 73)
            ['nombre' => 'Andrés Eloy Blanco', 'cod_postal' => 8052, 'municipio_id' => 73],
            ['nombre' => 'Pedro Cova', 'cod_postal' => 8052, 'municipio_id' => 73],
            ['nombre' => 'Upata', 'cod_postal' => 8052, 'municipio_id' => 73],
            // Municipio Roscio (municipio_id = 74)
            ['nombre' => 'Roscio', 'cod_postal' => 8055, 'municipio_id' => 74],
            ['nombre' => 'Salóm', 'cod_postal' => 8055, 'municipio_id' => 74],
            // Municipio Sifontes (municipio_id = 75)
            ['nombre' => 'Tumeremo', 'cod_postal' => 8057, 'municipio_id' => 75],
            ['nombre' => 'Dalla Costa', 'cod_postal' => 8057, 'municipio_id' => 75],
            ['nombre' => 'San Isidro', 'cod_postal' => 8057, 'municipio_id' => 75],
            // Municipio Sucre (municipio_id = 76)
            ['nombre' => 'Sucre', 'cod_postal' => 8001, 'municipio_id' => 76],
            ['nombre' => 'Aripao', 'cod_postal' => 8001, 'municipio_id' => 76],
            ['nombre' => 'Guarataro', 'cod_postal' => 8001, 'municipio_id' => 76],
            ['nombre' => 'Las Majadas', 'cod_postal' => 8001, 'municipio_id' => 76],
            ['nombre' => 'Moitaco', 'cod_postal' => 8001, 'municipio_id' => 76],

            // Estado Carabobo (estado_id = 7)
            // Municipio Bejuma (municipio_id = 77)
            ['nombre' => 'Canoabo', 'cod_postal' => 2040, 'municipio_id' => 77],
            ['nombre' => 'Simón Bolívar', 'cod_postal' => 2044, 'municipio_id' => 77],
            // Municipio Carlos Arvelo (municipio_id = 78)
            ['nombre' => 'Güigüe', 'cod_postal' => 2010, 'municipio_id' => 78],
            ['nombre' => 'Belén', 'cod_postal' => 2038, 'municipio_id' => 78],
            ['nombre' => 'Tacarigua', 'cod_postal' => 2003, 'municipio_id' => 78],
            // Municipio Diego Ibarra (municipio_id = 79)
            ['nombre' => 'Mariara', 'cod_postal' => 2017, 'municipio_id' => 79],
            ['nombre' => 'Aguas Calientes', 'cod_postal' => 2017, 'municipio_id' => 79],
            // Municipio Guacara (municipio_id = 80)
            ['nombre' => 'Ciudad Alianza', 'cod_postal' => 2015, 'municipio_id' => 80],
            ['nombre' => 'Guacara', 'cod_postal' => 2016, 'municipio_id' => 80],
            ['nombre' => 'Yagua', 'cod_postal' => 2015, 'municipio_id' => 80],
            // Municipio Juan José Mora (municipio_id = 81)
            ['nombre' => 'Morón', 'cod_postal' => 2051, 'municipio_id' => 81],
            ['nombre' => 'Urama', 'cod_postal' => 2051, 'municipio_id' => 81],
            // Municipio Libertador (municipio_id = 82)
            ['nombre' => 'Tocuyito', 'cod_postal' => 2035, 'municipio_id' => 82],
            ['nombre' => 'Independencia (Campo Carabobo)', 'cod_postal' => 2035, 'municipio_id' => 82],
            // Municipio Los Guayos (municipio_id = 83)
            ['nombre' => 'Los Guayos', 'cod_postal' => 2011, 'municipio_id' => 83],
            // Municipio Miranda (municipio_id = 84)
            ['nombre' => 'Miranda', 'cod_postal' => 2041, 'municipio_id' => 84],
            // Municipio Montalbán (municipio_id = 85)
            ['nombre' => 'Montalbán', 'cod_postal' => 2042, 'municipio_id' => 85],
            // Municipio Naguanagua (municipio_id = 86)
            ['nombre' => 'Naguanagua', 'cod_postal' => 2005, 'municipio_id' => 86],
            // Municipio Puerto Cabello (municipio_id = 87)
            ['nombre' => 'Bartolomé Salóm', 'cod_postal' => 2050, 'municipio_id' => 87],
            ['nombre' => 'Democracia', 'cod_postal' => 2050, 'municipio_id' => 87],
            ['nombre' => 'Fraternidad', 'cod_postal' => 2050, 'municipio_id' => 87],
            ['nombre' => 'Goaigoaza', 'cod_postal' => 2050, 'municipio_id' => 87],
            ['nombre' => 'Juan José Flores', 'cod_postal' => 2050, 'municipio_id' => 87],
            ['nombre' => 'Unión', 'cod_postal' => 2050, 'municipio_id' => 87],
            ['nombre' => 'Borburata', 'cod_postal' => 2050, 'municipio_id' => 87],
            ['nombre' => 'Patanemo', 'cod_postal' => 2050, 'municipio_id' => 87],
            // Municipio San Diego (municipio_id = 88)
            ['nombre' => 'San Diego', 'cod_postal' => 2006, 'municipio_id' => 88],
            // Municipio San Joaquín (municipio_id = 89)
            ['nombre' => 'San Joaquín', 'cod_postal' => 2018, 'municipio_id' => 89],
            // Municipio Valencia (municipio_id = 90)
            ['nombre' => 'Candelaria', 'cod_postal' => 2003, 'municipio_id' => 90],
            ['nombre' => 'Catedral', 'cod_postal' => 2001, 'municipio_id' => 90],
            ['nombre' => 'El Socorro', 'cod_postal' => 2001, 'municipio_id' => 90],
            ['nombre' => 'Miguel Peña', 'cod_postal' => 2001, 'municipio_id' => 90],
            ['nombre' => 'Rafael Urdaneta', 'cod_postal' => 2001, 'municipio_id' => 90],
            ['nombre' => 'San Blas', 'cod_postal' => 2001, 'municipio_id' => 90],
            ['nombre' => 'San José', 'cod_postal' => 2001, 'municipio_id' => 90],
            ['nombre' => 'Santa Rosa', 'cod_postal' => 2001, 'municipio_id' => 90],
            ['nombre' => 'Negro Primero', 'cod_postal' => 2001, 'municipio_id' => 90],
            // Estado Cojedes (estado_id = 8)
            // Municipio Anzoátegui (municipio_id = 91)
            ['nombre' => 'Cojedes', 'cod_postal' => 2202, 'municipio_id' => 91],
            ['nombre' => 'Juan de Mata Suárez', 'cod_postal' => 2202, 'municipio_id' => 91],
            // Municipio Girardot (municipio_id = 92)
            ['nombre' => 'El Baúl', 'cod_postal' => 2213, 'municipio_id' => 92],
            ['nombre' => 'Sucre', 'cod_postal' => 2012, 'municipio_id' => 92],
            // Municipio Lima Blanco (municipio_id = 93)
            ['nombre' => 'Macapo', 'cod_postal' => 2207, 'municipio_id' => 93],
            ['nombre' => 'La Aguadita', 'cod_postal' => 2208, 'municipio_id' => 93],
            // Municipio Pao de San Juan Bautista (municipio_id = 94)
            ['nombre' => 'El Pao', 'cod_postal' => 2214, 'municipio_id' => 94],
            // Municipio Ricaurte (municipio_id = 95)
            ['nombre' => 'Libertad de Cojedes', 'cod_postal' => 2216, 'municipio_id' => 95],
            ['nombre' => 'El Amparo', 'cod_postal' => 2216, 'municipio_id' => 95],
            // Municipio Rómulo Gallegos (municipio_id = 96)
            ['nombre' => 'Las Vegas', 'cod_postal' => 2204, 'municipio_id' => 96],
            // Municipio San Carlos (municipio_id = 97)
            ['nombre' => 'San Carlos de Austria', 'cod_postal' => 2201, 'municipio_id' => 97],
            ['nombre' => 'Juan Ángel Bravo', 'cod_postal' => 2203, 'municipio_id' => 97],
            ['nombre' => 'Manuel Manrique', 'cod_postal' => 2205, 'municipio_id' => 97],
            // Municipio Tinaco (municipio_id = 98)
            ['nombre' => 'Tinaco', 'cod_postal' => 2206, 'municipio_id' => 98],
            // Municipio Tinaquillo (municipio_id = 99)
            ['nombre' => 'Tinaquillo', 'cod_postal' => 2209, 'municipio_id' => 99],
            
            // Estado Delta Amacuro (estado_id = 9)
            // Municipio Antonio Díaz (municipio_id = 100)
            ['nombre' => 'Curiapo', 'cod_postal' => 6401, 'municipio_id' => 100],
            ['nombre' => 'Almirante Luis Brión', 'cod_postal' => 6401, 'municipio_id' => 100],
            ['nombre' => 'Francisco Aniceto Lugo', 'cod_postal' => 6401, 'municipio_id' => 100],
            ['nombre' => 'Manoa', 'cod_postal' => 6401, 'municipio_id' => 100],
            ['nombre' => 'Padre Barral', 'cod_postal' => 6401, 'municipio_id' => 100],
            ['nombre' => 'Santos de Abelgas', 'cod_postal' => 6401, 'municipio_id' => 100],
            // Municipio Casacoima (municipio_id = 101)
            ['nombre' => 'Imataca', 'cod_postal' => 6401, 'municipio_id' => 101],
            ['nombre' => 'Moruca', 'cod_postal' => 6401, 'municipio_id' => 101],
            ['nombre' => 'Piacoa', 'cod_postal' => 6401, 'municipio_id' => 101],
            ['nombre' => 'San José', 'cod_postal' => 6401, 'municipio_id' => 101],
            ['nombre' => 'Juan Millán', 'cod_postal' => 6401, 'municipio_id' => 101],
            // Municipio Pedernales (municipio_id = 102)
            ['nombre' => 'Pedernales', 'cod_postal' => 6401, 'municipio_id' => 102],
            ['nombre' => 'Luis Beltrán Prieto Figueroa', 'cod_postal' => 6401, 'municipio_id' => 102],
            // Municipio Tucupita (municipio_id = 103)
            ['nombre' => 'San José', 'cod_postal' => 6401, 'municipio_id' => 103],
            ['nombre' => 'José Vidal Marcano', 'cod_postal' => 6401, 'municipio_id' => 103],
            ['nombre' => 'Leonardo Ruiz Pineda', 'cod_postal' => 6401, 'municipio_id' => 103],
            ['nombre' => 'Mariscal Antonio José de Sucre', 'cod_postal' => 6401, 'municipio_id' => 103],
            ['nombre' => 'Monseñor Argimiro García', 'cod_postal' => 6401, 'municipio_id' => 103],
            ['nombre' => 'San Rafael', 'cod_postal' => 6401, 'municipio_id' => 103],
            ['nombre' => 'Virgen del Valle', 'cod_postal' => 6401, 'municipio_id' => 103],

            // Distrito Capital (estado_id = 10)
            // Municipio Libertador (municipio_id = 104)
            ['nombre' => '23 de Enero', 'cod_postal' => 1030, 'municipio_id' => 104],
            ['nombre' => 'Altagracia', 'cod_postal' => 1010, 'municipio_id' => 104],
            ['nombre' => 'Antímano', 'cod_postal' => 1020, 'municipio_id' => 104],
            ['nombre' => 'Caricuao', 'cod_postal' => 1021, 'municipio_id' => 104],
            ['nombre' => 'Catedral', 'cod_postal' => 1012, 'municipio_id' => 104],
            ['nombre' => 'Coche', 'cod_postal' => 1090, 'municipio_id' => 104],
            ['nombre' => 'El Junquito', 'cod_postal' => 1030, 'municipio_id' => 104],
            ['nombre' => 'El Paraíso', 'cod_postal' => 1020, 'municipio_id' => 104],
            ['nombre' => 'El Recreo', 'cod_postal' => 1050, 'municipio_id' => 104],
            ['nombre' => 'El Valle', 'cod_postal' => 1080, 'municipio_id' => 104],
            ['nombre' => 'Candelaria', 'cod_postal' => 1011, 'municipio_id' => 104],
            ['nombre' => 'La Pastora', 'cod_postal' => 1010, 'municipio_id' => 104],
            ['nombre' => 'La Vega', 'cod_postal' => 1020, 'municipio_id' => 104],
            ['nombre' => 'Macarao', 'cod_postal' => 1020, 'municipio_id' => 104],
            ['nombre' => 'San Agustín', 'cod_postal' => 1014, 'municipio_id' => 104],
            ['nombre' => 'San Bernardino', 'cod_postal' => 1011, 'municipio_id' => 104],
            ['nombre' => 'San José', 'cod_postal' => 1010, 'municipio_id' => 104],
            ['nombre' => 'San Juan', 'cod_postal' => 1013, 'municipio_id' => 104],
            ['nombre' => 'San Pedro', 'cod_postal' => 1010, 'municipio_id' => 104],
            ['nombre' => 'Santa Rosalía', 'cod_postal' => 1014, 'municipio_id' => 104],
            ['nombre' => 'Santa Teresa', 'cod_postal' => 1014, 'municipio_id' => 104],
            ['nombre' => 'Sucre', 'cod_postal' => 1010, 'municipio_id' => 104],
            
            // Estado Falcón (estado_id = 11)
            // Municipio Acosta (municipio_id = 105)
            ['nombre' => 'Capadare', 'cod_postal' => 4106, 'municipio_id' => 105],
            ['nombre' => 'El Mene de Sa Lorenzo', 'cod_postal' => 4112, 'municipio_id' => 105],
            ['nombre' => 'La Pastora', 'cod_postal' => 4108, 'municipio_id' => 105],
            ['nombre' => 'San Juan de los Cayos', 'cod_postal' => 4111, 'municipio_id' => 105],
            // Municipio Bolívar (municipio_id = 106)
            ['nombre' => 'Aracua', 'cod_postal' => 4113, 'municipio_id' => 106],
            ['nombre' => 'La Peña', 'cod_postal' => 4114, 'municipio_id' => 106],
            ['nombre' => 'San Luis', 'cod_postal' => 4116, 'municipio_id' => 106],
            // Municipio Buchivacoa (municipio_id = 107)
            ['nombre' => 'Bariro', 'cod_postal' => 4117, 'municipio_id' => 107],
            ['nombre' => 'Borojó', 'cod_postal' => 4121, 'municipio_id' => 107],
            ['nombre' => 'Capatárida', 'cod_postal' => 4117, 'municipio_id' => 107],
            ['nombre' => 'Guajiro', 'cod_postal' => 4117, 'municipio_id' => 107],
            ['nombre' => 'San José de Seque', 'cod_postal' => 4119, 'municipio_id' => 107],
            ['nombre' => 'Valle de Eroa', 'cod_postal' => 4147, 'municipio_id' => 107],
            ['nombre' => 'Zazárida', 'cod_postal' => 4146, 'municipio_id' => 107],
            // Municipio Cacique Manaure (municipio_id = 108)
            ['nombre' => 'Cacique Manaure (Yaracal)', 'cod_postal' => 4110, 'municipio_id' => 108],
            // Municipio Carirubana (municipio_id = 109)
            ['nombre' => 'Norte', 'cod_postal' => 4124, 'municipio_id' => 109],
            ['nombre' => 'Carirubana', 'cod_postal' => 4125, 'municipio_id' => 109],
            ['nombre' => 'Santa Ana', 'cod_postal' => 4126, 'municipio_id' => 109],
            ['nombre' => 'Urbana Punta de Cardón', 'cod_postal' => 4125, 'municipio_id' => 109],
            // Municipio Colina (municipio_id = 110)
            ['nombre' => 'La Vela de Coro', 'cod_postal' => 4132, 'municipio_id' => 110],
            ['nombre' => 'Acurigua', 'cod_postal' => 4130, 'municipio_id' => 110],
            ['nombre' => 'Guaibacoa', 'cod_postal' => 4134, 'municipio_id' => 110],
            ['nombre' => 'Las Calderas', 'cod_postal' => 4132, 'municipio_id' => 110],
            ['nombre' => 'Mataruca', 'cod_postal' => 4107, 'municipio_id' => 110],
            // Municipio Dabajuro (municipio_id = 111)
            ['nombre' => 'Dabajuro', 'cod_postal' => 4118, 'municipio_id' => 111],
            // Municipio Democracia (municipio_id = 112)
            ['nombre' => 'Agua Clara', 'cod_postal' => 4135, 'municipio_id' => 112],
            ['nombre' => 'Avaria', 'cod_postal' => 4137, 'municipio_id' => 112],
            ['nombre' => 'Pedregal', 'cod_postal' => 4137, 'municipio_id' => 112],
            ['nombre' => 'Piedra Grande', 'cod_postal' => 4136, 'municipio_id' => 112],
            ['nombre' => 'Purureche', 'cod_postal' => 4137, 'municipio_id' => 112],
            // Municipio Falcón (municipio_id = 113)
            ['nombre' => 'Adaure', 'cod_postal' => 4150, 'municipio_id' => 113],
            ['nombre' => 'Adícora', 'cod_postal' => 4142, 'municipio_id' => 113],
            ['nombre' => 'Baraived', 'cod_postal' => 4144, 'municipio_id' => 113],
            ['nombre' => 'Buena Vista', 'cod_postal' => 4145, 'municipio_id' => 113],
            ['nombre' => 'El Hato', 'cod_postal' => 4150, 'municipio_id' => 113],
            ['nombre' => 'El Vínculo', 'cod_postal' => 4146, 'municipio_id' => 113],
            ['nombre' => 'Jadacaquiva', 'cod_postal' => 4151, 'municipio_id' => 113],
            ['nombre' => 'Moruy', 'cod_postal' => 4149, 'municipio_id' => 113],
            ['nombre' => 'Pueblo Nuevo', 'cod_postal' => 4150, 'municipio_id' => 113],
            // Municipio Federación (municipio_id = 114)
            ['nombre' => 'Agua Larga', 'cod_postal' => 4136, 'municipio_id' => 114],
            ['nombre' => 'Churuguara', 'cod_postal' => 4152, 'municipio_id' => 114],
            ['nombre' => 'El Paují', 'cod_postal' => 4152, 'municipio_id' => 114],
            ['nombre' => 'Independencia', 'cod_postal' => 4152, 'municipio_id' => 114],
            ['nombre' => 'Mapararí', 'cod_postal' => 4153, 'municipio_id' => 114],
            // Municipio Jacura (municipio_id = 115)
            ['nombre' => 'Agua Linda', 'cod_postal' => 4103, 'municipio_id' => 115],
            ['nombre' => 'Auraurima', 'cod_postal' => 4107, 'municipio_id' => 115],
            ['nombre' => 'Jacura', 'cod_postal' => 4107, 'municipio_id' => 115],
            // Municipio Los Taques (municipio_id = 116)
            ['nombre' => 'Judibana', 'cod_postal' => 4147, 'municipio_id' => 116],
            ['nombre' => 'Santa Cruz de los Taques', 'cod_postal' => 4148, 'municipio_id' => 116],
            // Municipio Mauroa (municipio_id = 117)
            ['nombre' => 'Casigua', 'cod_postal' => 4155, 'municipio_id' => 117],
            ['nombre' => 'Mene de Mauroa', 'cod_postal' => 4157, 'municipio_id' => 117],
            ['nombre' => 'San Félix', 'cod_postal' => 4158, 'municipio_id' => 117],
            // Municipio Miranda (municipio_id = 118)
            ['nombre' => 'Guzmán Guillermo', 'cod_postal' => 4160, 'municipio_id' => 118],
            ['nombre' => 'Mitare', 'cod_postal' => 4160, 'municipio_id' => 118],
            ['nombre' => 'Río Seco', 'cod_postal' => 4160, 'municipio_id' => 118],
            ['nombre' => 'Sabaneta', 'cod_postal' => 4161, 'municipio_id' => 118],
            ['nombre' => 'San Antonio', 'cod_postal' => 4160, 'municipio_id' => 118],
            ['nombre' => 'San Gabriel', 'cod_postal' => 4160, 'municipio_id' => 118],
            ['nombre' => 'Santa Ana de Coro', 'cod_postal' => 4101, 'municipio_id' => 118],
            // Municipio Monseñor Iturriza (municipio_id = 119)
            ['nombre' => 'Boca de Tocuyo', 'cod_postal' => 2048, 'municipio_id' => 119],
            ['nombre' => 'Chichiriviche', 'cod_postal' => 2061, 'municipio_id' => 119],
            ['nombre' => 'Tocuyo de la Costa', 'cod_postal' => 2050, 'municipio_id' => 119],
            // Municipio Palmasola (municipio_id = 120)
            ['nombre' => 'Palmasola', 'cod_postal' => 2052, 'municipio_id' => 120],
            // Municipio Petit (municipio_id = 121)
            ['nombre' => 'Cabure', 'cod_postal' => 4163, 'municipio_id' => 121],
            ['nombre' => 'Curimagua', 'cod_postal' => 4162, 'municipio_id' => 121],
            ['nombre' => 'Pueblo Nuevo de la Sierra', 'cod_postal' => 4146, 'municipio_id' => 121],
            // Municipio Píritu (municipio_id = 122)
            ['nombre' => 'Píritu', 'cod_postal' => 4165, 'municipio_id' => 122],
            ['nombre' => 'San José de la Costa', 'cod_postal' => 4168, 'municipio_id' => 122],
            // Municipio San Francisco (municipio_id = 123)
            ['nombre' => 'Capital San Francisco', 'cod_postal' => 4110, 'municipio_id' => 123],
            ['nombre' => 'Mirimire', 'cod_postal' => 4110, 'municipio_id' => 123],
            // Municipio José Laurencio Silva (municipio_id = 124)
            ['nombre' => 'Boca de Aroa', 'cod_postal' => 2047, 'municipio_id' => 123],
            ['nombre' => 'Tucacas', 'cod_postal' => 2055, 'municipio_id' => 123],
            // Municipio Sucre (municipio_id = 125)
            ['nombre' => 'La Cruz de Taratara', 'cod_postal' => 4114, 'municipio_id' => 124],
            ['nombre' => 'Pecaya', 'cod_postal' => 4115, 'municipio_id' => 124],
            // Municipio Tocópero (municipio_id = 126)
            ['nombre' => 'Tocópero', 'cod_postal' => 4169, 'municipio_id' => 125],
            // Municipio Unión (municipio_id = 127)
            ['nombre' => 'El Charal', 'cod_postal' => 4154, 'municipio_id' => 126],
            ['nombre' => 'Las Vegas del Tuy', 'cod_postal' => 4154, 'municipio_id' => 126],
            ['nombre' => 'Santa Cruz de Bucaral', 'cod_postal' => 4154, 'municipio_id' => 126],
            // Municipio Urumaco (municipio_id = 128)
            ['nombre' => 'Bruzual', 'cod_postal' => 4141, 'municipio_id' => 127],
            ['nombre' => 'Urumaco', 'cod_postal' => 4141, 'municipio_id' => 127],
            // Municipio Zamora (municipio_id = 129)
            ['nombre' => 'La Ciénaga', 'cod_postal' => 4167, 'municipio_id' => 128],
            ['nombre' => 'La Soledad', 'cod_postal' => 4167, 'municipio_id' => 128],
            ['nombre' => 'Pueblo Cumarebo', 'cod_postal' => 4166, 'municipio_id' => 128],
            ['nombre' => 'Puerto Cumarebo', 'cod_postal' => 4167, 'municipio_id' => 128],
            ['nombre' => 'Zazárida', 'cod_postal' => 4167, 'municipio_id' => 128],
            
            // Estado Guárico (estado_id = 12)
            // Municipio Camaguán (municipio_id = 130)
            ['nombre' => 'Camaguán', 'cod_postal' => 2317, 'municipio_id' => 130],
            ['nombre' => 'Puerto Miranda', 'cod_postal' => 2317, 'municipio_id' => 130],
            ['nombre' => 'Uverito', 'cod_postal' => 2317, 'municipio_id' => 130],
            // Municipio Chaguaramas (municipio_id = 131)
            ['nombre' => 'Chaguaramas', 'cod_postal' => 2336, 'municipio_id' => 131],
            // Municipio El Socorro (municipio_id = 132)
            ['nombre' => 'El Socorro', 'cod_postal' => 2338, 'municipio_id' => 132],
            // Municipio Francisco de Miranda (municipio_id = 133)
            ['nombre' => 'Calabozo', 'cod_postal' => 2312, 'municipio_id' => 133],
            ['nombre' => 'El Calvario', 'cod_postal' => 2312, 'municipio_id' => 133],
            ['nombre' => 'El Rastro', 'cod_postal' => 2312, 'municipio_id' => 133],
            ['nombre' => 'Guardatinajas', 'cod_postal' => 2312, 'municipio_id' => 133],
            // Municipio José Félix Ribas (municipio_id = 134)
            ['nombre' => 'Tucupido', 'cod_postal' => 2337, 'municipio_id' => 134],
            ['nombre' => 'San Rafael de Laya', 'cod_postal' => 2337, 'municipio_id' => 134],
            // Municipio José Tadeo Monagas (municipio_id = 135)
            ['nombre' => 'Altagracia de Orituco', 'cod_postal' => 2301, 'municipio_id' => 135],
            ['nombre' => 'San Rafael de Orituco', 'cod_postal' => 2301, 'municipio_id' => 135],
            ['nombre' => 'San Francisco Javier de Lezama', 'cod_postal' => 2301, 'municipio_id' => 135],
            ['nombre' => 'Paso Real de Macaira', 'cod_postal' => 2301, 'municipio_id' => 135],
            ['nombre' => 'Carlos Soublette', 'cod_postal' => 2301, 'municipio_id' => 135],
            ['nombre' => 'San Francisco de Macaira', 'cod_postal' => 2301, 'municipio_id' => 135],
            ['nombre' => 'Libertad de Orituco', 'cod_postal' => 2301, 'municipio_id' => 135],
            // Municipio Juan Germán Roscio (municipio_id = 136)
            ['nombre' => 'San Juan de los Morros', 'cod_postal' => 2301, 'municipio_id' => 136],
            ['nombre' => 'Parapara', 'cod_postal' => 2301, 'municipio_id' => 136],
            ['nombre' => 'Cantagallo', 'cod_postal' => 2301, 'municipio_id' => 136],
            // Municipio Juan José Rondón (municipio_id = 137)
            ['nombre' => 'Las Mercedes', 'cod_postal' => 2301, 'municipio_id' => 137],
            ['nombre' => 'Cabruta', 'cod_postal' => 2301, 'municipio_id' => 137],
            ['nombre' => 'Santa Rita de Manapire', 'cod_postal' => 2301, 'municipio_id' => 137],
            // Municipio Julián Mellado (municipio_id = 138)
            ['nombre' => 'El Sombrero', 'cod_postal' => 2301, 'municipio_id' => 138],
            ['nombre' => 'Sosa', 'cod_postal' => 2301, 'municipio_id' => 138],
            // Municipio Leonardo Infante (municipio_id = 139)
            ['nombre' => 'Valle de la Pascua', 'cod_postal' => 2350, 'municipio_id' => 139],
            ['nombre' => 'Espino', 'cod_postal' => 2350, 'municipio_id' => 139],
            // Municipio Ortiz (municipio_id = 140)
            ['nombre' => 'San José de Tiznados', 'cod_postal' => 2301, 'municipio_id' => 140],
            ['nombre' => 'San Francisco de Tiznados', 'cod_postal' => 2301, 'municipio_id' => 140],
            ['nombre' => 'San Lorenzo de Tiznados', 'cod_postal' => 2301, 'municipio_id' => 140],
            ['nombre' => 'Ortiz', 'cod_postal' => 2301, 'municipio_id' => 140],
            // Municipio Pedro Zaraza (municipio_id = 141)
            ['nombre' => 'Zaraza', 'cod_postal' => 2332, 'municipio_id' => 141],
            ['nombre' => 'San José de Unare', 'cod_postal' => 2332, 'municipio_id' => 141],
            // Municipio San Gerónimo de Guayabal (municipio_id = 142)
            ['nombre' => 'Guayabal', 'cod_postal' => 2301, 'municipio_id' => 142],
            ['nombre' => 'Cazorla', 'cod_postal' => 2301, 'municipio_id' => 142],
            // Municipio San José de Guaribe (municipio_id = 143)
            ['nombre' => 'San José de Guaribe', 'cod_postal' => 2301, 'municipio_id' => 143],
            // Municipio Santa María de Ipire (municipio_id = 144)
            ['nombre' => 'Santa María de Ipire', 'cod_postal' => 2301, 'municipio_id' => 144],
            ['nombre' => 'Altamira', 'cod_postal' => 2301, 'municipio_id' => 144],
            
            // Estado La Guaira (estado_id = 13)
            // Municipio Vargas (municipio_id = 145)
            ['nombre' => 'Caraballeda', 'cod_postal' => 1165, 'municipio_id' => 145],
            ['nombre' => 'Carayaca', 'cod_postal' => 1167, 'municipio_id' => 145],
            ['nombre' => 'Carlos Soublette', 'cod_postal' => 1161, 'municipio_id' => 145],
            ['nombre' => 'Caruao', 'cod_postal' => 1169, 'municipio_id' => 145],
            ['nombre' => 'Catia La Mar', 'cod_postal' => 1162, 'municipio_id' => 145],
            ['nombre' => 'El Junko', 'cod_postal' => 1167, 'municipio_id' => 145],
            ['nombre' => 'La Guaira', 'cod_postal' => 1160, 'municipio_id' => 145],
            ['nombre' => 'Macuto', 'cod_postal' => 1164, 'municipio_id' => 145],
            ['nombre' => 'Maiquetía', 'cod_postal' => 1161, 'municipio_id' => 145],
            ['nombre' => 'Naiguatá', 'cod_postal' => 1166, 'municipio_id' => 145],
            ['nombre' => 'Urimare', 'cod_postal' => 1162, 'municipio_id' => 145],
            
            // Estado Lara (estado_id = 14)
            // Municipio Andrés Eloy Blanco (municipio_id = 146)
            ['nombre' => 'Quebrada Honda de Guache', 'cod_postal' => 3028, 'municipio_id' => 146],
            ['nombre' => 'Pio Tamayo', 'cod_postal' => 3028, 'municipio_id' => 146],
            ['nombre' => 'Yacambú', 'cod_postal' => 3028, 'municipio_id' => 146],
            // Municipio Crespo (municipio_id = 147)
            ['nombre' => 'Freitez', 'cod_postal' => 3025, 'municipio_id' => 147],
            ['nombre' => 'José María Blanco', 'cod_postal' => 3025, 'municipio_id' => 147],
            // Municipio Iribarren (municipio_id = 148)
            ['nombre' => 'Aguedo Felipe Alvarado', 'cod_postal' => 3015, 'municipio_id' => 148],
            ['nombre' => 'Buena Vista', 'cod_postal' => 3015, 'municipio_id' => 148],
            ['nombre' => 'Catedral', 'cod_postal' => 3001, 'municipio_id' => 148],
            ['nombre' => 'Concepción', 'cod_postal' => 3001, 'municipio_id' => 148],
            ['nombre' => 'El Cují', 'cod_postal' => 3001, 'municipio_id' => 148],
            ['nombre' => 'Guerrera Ana Soto', 'cod_postal' => 3001, 'municipio_id' => 148],
            ['nombre' => 'Juares', 'cod_postal' => 3015, 'municipio_id' => 148],
            ['nombre' => 'Santa Rosa', 'cod_postal' => 3001, 'municipio_id' => 148],
            ['nombre' => 'Tamaca', 'cod_postal' => 3001, 'municipio_id' => 148],
            ['nombre' => 'Unión', 'cod_postal' => 3001, 'municipio_id' => 148],
            // Municipio Jiménez (municipio_id = 149)
            ['nombre' => 'Juan Bautista Rodríguez', 'cod_postal' => 3061, 'municipio_id' => 149],
            ['nombre' => 'Cuara', 'cod_postal' => 3061, 'municipio_id' => 149],
            ['nombre' => 'Diego de Lozada', 'cod_postal' => 3061, 'municipio_id' => 149],
            ['nombre' => 'Paraíso de San José', 'cod_postal' => 3061, 'municipio_id' => 149],
            ['nombre' => 'San Miguel', 'cod_postal' => 3061, 'municipio_id' => 149],
            ['nombre' => 'Tintorero', 'cod_postal' => 3061, 'municipio_id' => 149],
            ['nombre' => 'José Bernardo Dorante', 'cod_postal' => 3061, 'municipio_id' => 149],
            ['nombre' => 'Coronel Mariano Peraza', 'cod_postal' => 3061, 'municipio_id' => 149],
            // Municipio Morán (municipio_id = 150)
            ['nombre' => 'Anzoátegui', 'cod_postal' => 3057, 'municipio_id' => 150],
            ['nombre' => 'Bolívar', 'cod_postal' => 3057, 'municipio_id' => 150],
            ['nombre' => 'Guárico', 'cod_postal' => 3057, 'municipio_id' => 150],
            ['nombre' => 'Hilario Luna y Luna', 'cod_postal' => 3057, 'municipio_id' => 150],
            ['nombre' => 'Humocaro Bajo', 'cod_postal' => 3057, 'municipio_id' => 150],
            ['nombre' => 'Humocaro Alto', 'cod_postal' => 3057, 'municipio_id' => 150],
            ['nombre' => 'La Candelaria', 'cod_postal' => 3057, 'municipio_id' => 150],
            ['nombre' => 'Morán', 'cod_postal' => 3057, 'municipio_id' => 150],
            // Municipio Palavecino (municipio_id = 151)
            ['nombre' => 'Cabudare', 'cod_postal' => 3023, 'municipio_id' => 151],
            ['nombre' => 'José Gregorio Bastidas', 'cod_postal' => 3023, 'municipio_id' => 151],
            ['nombre' => 'Agua Viva', 'cod_postal' => 3023, 'municipio_id' => 151],
            // Municipio Simón Planas (municipio_id = 152)
            ['nombre' => 'Buría', 'cod_postal' => 3015, 'municipio_id' => 152],
            ['nombre' => 'Gustavo Vega', 'cod_postal' => 3015, 'municipio_id' => 152],
            ['nombre' => 'Sarare', 'cod_postal' => 3015, 'municipio_id' => 152],
            // Municipio Torres (municipio_id = 153)
            ['nombre' => 'Altagracia', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Antonio Díaz', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Camacaro', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Castañeda', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Cecilio Zubillaga', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Chiquinquira', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'El Blanco', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Espinoza de los Monteros', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Heriberto Arrollo', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Lara', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Las Mercedes', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Manuel Morillo', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Montaña Verde', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Montes de Oca', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Reyes de Vargas', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Torres', 'cod_postal' => 3052, 'municipio_id' => 153],
            ['nombre' => 'Trinidad Samuel', 'cod_postal' => 3052, 'municipio_id' => 153],
            // Municipio Urdaneta (municipio_id = 154)
            ['nombre' => 'Aguas', 'cod_postal' => 3031, 'municipio_id' => 154],
            ['nombre' => 'Siquisique', 'cod_postal' => 3031, 'municipio_id' => 154],
            ['nombre' => 'San Miguel', 'cod_postal' => 3031, 'municipio_id' => 154],
            ['nombre' => 'Moroturo', 'cod_postal' => 3031, 'municipio_id' => 154],
            
            // Estado Mérida (estado_id = 15)
            // Municipio Alberto Adriani (municipio_id = 155)
            ['nombre' => 'Presidente Betancourt', 'cod_postal' => 5145, 'municipio_id' => 155],
            ['nombre' => 'Presidente Páez', 'cod_postal' => 5145, 'municipio_id' => 155],
            ['nombre' => 'Presidente Rómulo Gallegos', 'cod_postal' => 5145, 'municipio_id' => 155],
            ['nombre' => 'Gabriel Picón González', 'cod_postal' => 5145, 'municipio_id' => 155],
            ['nombre' => 'Héctor Amable Mora', 'cod_postal' => 5145, 'municipio_id' => 155],
            ['nombre' => 'José Nucete Sardi', 'cod_postal' => 5145, 'municipio_id' => 155],
            ['nombre' => 'Pulido Méndez', 'cod_postal' => 5145, 'municipio_id' => 155],
            // Municipio Antonio Pinto Salinas (municipio_id = 156)
            ['nombre' => 'Santa Cruz de Mora', 'cod_postal' => 5142, 'municipio_id' => 156],
            ['nombre' => 'Mesa Bolívar', 'cod_postal' => 5142, 'municipio_id' => 156],
            ['nombre' => 'Mesa de Las Palmas', 'cod_postal' => 5142, 'municipio_id' => 156],
            // Municipio Andrés Bello (municipio_id = 157)
            ['nombre' => 'La Azulita', 'cod_postal' => 5102, 'municipio_id' => 157],
            // Municipio Aricagua (municipio_id = 158)
            ['nombre' => 'Aricagua', 'cod_postal' => 5119, 'municipio_id' => 158],
            ['nombre' => 'San Antonio', 'cod_postal' => 5119, 'municipio_id' => 158],
            // Municipio Arzobispo Chacón (municipio_id = 159)
            ['nombre' => 'Canaguá', 'cod_postal' => 5103, 'municipio_id' => 159],
            ['nombre' => 'Capurí', 'cod_postal' => 5103, 'municipio_id' => 159],
            ['nombre' => 'Chacantá', 'cod_postal' => 5103, 'municipio_id' => 159],
            ['nombre' => 'El Molino', 'cod_postal' => 5103, 'municipio_id' => 159],
            ['nombre' => 'Guaimaral', 'cod_postal' => 5103, 'municipio_id' => 159],
            ['nombre' => 'Mucutuy', 'cod_postal' => 5103, 'municipio_id' => 159],
            ['nombre' => 'Mucuchachí', 'cod_postal' => 5103, 'municipio_id' => 159],
            // Municipio Campo Elías (municipio_id = 160)
            ['nombre' => 'Fernández Peña', 'cod_postal' => 5119, 'municipio_id' => 160],
            ['nombre' => 'Matriz', 'cod_postal' => 5119, 'municipio_id' => 160],
            ['nombre' => 'Montalbán', 'cod_postal' => 5119, 'municipio_id' => 160],
            ['nombre' => 'Acequias', 'cod_postal' => 5119, 'municipio_id' => 160],
            ['nombre' => 'Jají', 'cod_postal' => 5119, 'municipio_id' => 160],
            ['nombre' => 'La Mesa', 'cod_postal' => 5119, 'municipio_id' => 160],
            ['nombre' => 'San José del Sur', 'cod_postal' => 5119, 'municipio_id' => 160],
            // Municipio Caracciolo Parra Olmedo (municipio_id = 161)
            ['nombre' => 'Tucaní', 'cod_postal' => 5146, 'municipio_id' => 161],
            ['nombre' => 'Florencio Ramírez', 'cod_postal' => 5146, 'municipio_id' => 161],
            // Municipio Cardenal Quintero (municipio_id = 162)
            ['nombre' => 'Santo Domingo', 'cod_postal' => 5131, 'municipio_id' => 162],
            ['nombre' => 'Las Piedras', 'cod_postal' => 5131, 'municipio_id' => 162],
            // Municipio Guaraque (municipio_id = 163)
            ['nombre' => 'Guaraque', 'cod_postal' => 5134, 'municipio_id' => 163],
            ['nombre' => 'Mesa Quintero', 'cod_postal' => 5134, 'municipio_id' => 163],
            ['nombre' => 'Río Negro', 'cod_postal' => 5134, 'municipio_id' => 163],
            // Municipio Julio César Salas (municipio_id = 164)
            ['nombre' => 'Arapuey', 'cod_postal' => 3164, 'municipio_id' => 164],
            ['nombre' => 'Palmira', 'cod_postal' => 3164, 'municipio_id' => 164],
            // Municipio Justo Briceño (municipio_id = 165)
            ['nombre' => 'San Cristóbal de Torondoy', 'cod_postal' => 3164, 'municipio_id' => 165],
            ['nombre' => 'Torondoy', 'cod_postal' => 3164, 'municipio_id' => 165],
            // Municipio Libertador (municipio_id = 166)
            ['nombre' => 'Antonio Spinetti Dini', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Arias', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Caracciolo Parra Pérez', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Domingo Peña', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'El Llano', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Gonzalo Picón Febres', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Jacinto Plaza', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Juan Rodríguez Suárez', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Lasso de la Vega', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Mariano Picón Salas', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Milla', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Osuna Rodríguez', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'Sagrario', 'cod_postal' => 5101, 'municipio_id' => 166],
            ['nombre' => 'El Morro', 'cod_postal' => 5115, 'municipio_id' => 166],
            ['nombre' => 'Los Nevados', 'cod_postal' => 5115, 'municipio_id' => 166],
            // Municipio Miranda (municipio_id = 167)
            ['nombre' => 'Andrés Eloy Blanco', 'cod_postal' => 5137, 'municipio_id' => 167],
            ['nombre' => 'La Venta', 'cod_postal' => 5137, 'municipio_id' => 167],
            ['nombre' => 'Piñango', 'cod_postal' => 5137, 'municipio_id' => 167],
            ['nombre' => 'Timotes', 'cod_postal' => 5137, 'municipio_id' => 167],
            // Municipio Obispo Ramos de Lora (municipio_id = 168)
            ['nombre' => 'Eloy Paredes', 'cod_postal' => 5146, 'municipio_id' => 168],
            ['nombre' => 'San Rafael de Alcázar', 'cod_postal' => 5146, 'municipio_id' => 168],
            ['nombre' => 'Santa Elena de Arenales', 'cod_postal' => 5146, 'municipio_id' => 168],
            // Municipio Padre Noguera (municipio_id = 169)
            ['nombre' => 'Santa María de Caparo', 'cod_postal' => 5002, 'municipio_id' => 169],
            // Municipio Pueblo Llano (municipio_id = 170)
            ['nombre' => 'Pueblo Llano', 'cod_postal' => 5124, 'municipio_id' => 170],
            // Municipio Rangel (municipio_id = 171)
            ['nombre' => 'Cacute', 'cod_postal' => 5130, 'municipio_id' => 171],
            ['nombre' => 'La Toma', 'cod_postal' => 5130, 'municipio_id' => 171],
            ['nombre' => 'Mucuchíes', 'cod_postal' => 5130, 'municipio_id' => 171],
            ['nombre' => 'Mucurubá', 'cod_postal' => 5130, 'municipio_id' => 171],
            ['nombre' => 'San Rafael', 'cod_postal' => 5130, 'municipio_id' => 171],
            // Municipio Rivas Dávila (municipio_id = 172)
            ['nombre' => 'Bailadores', 'cod_postal' => 5133, 'municipio_id' => 172],
            ['nombre' => 'Gerónimo Maldonado', 'cod_postal' => 5135, 'municipio_id' => 172],
            // Municipio Santos Marquina (municipio_id = 173)
            ['nombre' => 'Tabay', 'cod_postal' => 5116, 'municipio_id' => 173],
            // Municipio Sucre (municipio_id = 174)
            ['nombre' => 'Chiguará', 'cod_postal' => 5136, 'municipio_id' => 174],
            ['nombre' => 'Estánquez', 'cod_postal' => 5136, 'municipio_id' => 174],
            ['nombre' => 'Lagunillas', 'cod_postal' => 5136, 'municipio_id' => 174],
            ['nombre' => 'La Trampa', 'cod_postal' => 5136, 'municipio_id' => 174],
            ['nombre' => 'Pueblo Nuevo del Sur', 'cod_postal' => 5136, 'municipio_id' => 174],
            ['nombre' => 'San Juan', 'cod_postal' => 5136, 'municipio_id' => 174],
            // Municipio Tovar (municipio_id = 175)
            ['nombre' => 'El Amparo', 'cod_postal' => 5143, 'municipio_id' => 175],
            ['nombre' => 'El Llano', 'cod_postal' => 5143, 'municipio_id' => 175],
            ['nombre' => 'San Francisco', 'cod_postal' => 5143, 'municipio_id' => 175],
            ['nombre' => 'Tovar', 'cod_postal' => 5143, 'municipio_id' => 175],
            // Municipio Tulio Febres Cordero (municipio_id = 176)
            ['nombre' => 'Independencia', 'cod_postal' => 5145, 'municipio_id' => 176],
            ['nombre' => 'María de la Concepción Palacios Blanco', 'cod_postal' => 5145, 'municipio_id' => 176],
            ['nombre' => 'Santa Apolonia', 'cod_postal' => 5145, 'municipio_id' => 176],
            ['nombre' => 'Nueva Bolivia', 'cod_postal' => 5145, 'municipio_id' => 176],
            // Municipio Zea (municipio_id = 177)
            ['nombre' => 'Caño El Tigre', 'cod_postal' => 5147, 'municipio_id' => 177],
            ['nombre' => 'Zea', 'cod_postal' => 5147, 'municipio_id' => 177],

            // Estado Miranda (estado_id = 16)
            // Municipio Acevedo (municipio_id = 178)
            ['nombre' => 'Aragüita', 'cod_postal' => 1246, 'municipio_id' => 178],
            ['nombre' => 'Arévalo González', 'cod_postal' => 1246, 'municipio_id' => 178],
            ['nombre' => 'Capaya', 'cod_postal' => 1246, 'municipio_id' => 178],
            ['nombre' => 'Caucagua', 'cod_postal' => 1246, 'municipio_id' => 178],
            ['nombre' => 'El Café', 'cod_postal' => 1246, 'municipio_id' => 178],
            ['nombre' => 'Marizapa', 'cod_postal' => 1246, 'municipio_id' => 178],
            ['nombre' => 'Panaquire', 'cod_postal' => 1246, 'municipio_id' => 178],
            ['nombre' => 'Ribas', 'cod_postal' => 1246, 'municipio_id' => 178],
            ['nombre' => 'Yaguapa', 'cod_postal' => 1246, 'municipio_id' => 178],
            // Municipio Andrés Bello (municipio_id = 179)
            ['nombre' => 'Cumbo', 'cod_postal' => 1248, 'municipio_id' => 179],
            ['nombre' => 'San José de Barlovento', 'cod_postal' => 1248, 'municipio_id' => 179],
            // Municipio Baruta (municipio_id = 180)
            ['nombre' => 'El Cafetal', 'cod_postal' => 1080, 'municipio_id' => 180],
            ['nombre' => 'Las Minas', 'cod_postal' => 1080, 'municipio_id' => 180],
            ['nombre' => 'Nuestra Señora del Rosario', 'cod_postal' => 1080, 'municipio_id' => 180],
            // Municipio Brión (municipio_id = 181)
            ['nombre' => 'Curiepe', 'cod_postal' => 1231, 'municipio_id' => 181],
            ['nombre' => 'Higuerote', 'cod_postal' => 1231, 'municipio_id' => 181],
            ['nombre' => 'Tacarigua de Brión', 'cod_postal' => 1231, 'municipio_id' => 181],
            // Municipio Buroz (municipio_id = 182)
            ['nombre' => 'Mamporal', 'cod_postal' => 1232, 'municipio_id' => 182],
            // Municipio Carrizal (municipio_id = 183)
            ['nombre' => 'Carrizal', 'cod_postal' => 1203, 'municipio_id' => 183],
            // Municipio Chacao (municipio_id = 184)
            ['nombre' => 'Chacao', 'cod_postal' => 1060, 'municipio_id' => 184],
            // Municipio Cristóbal Rojas (municipio_id = 185)
            ['nombre' => 'Charallave', 'cod_postal' => 1210, 'municipio_id' => 185],
            ['nombre' => 'Las Brisas', 'cod_postal' => 1210, 'municipio_id' => 185],
            // Municipio El Hatillo (municipio_id = 186)
            ['nombre' => 'Santa Rosalía de Palermo', 'cod_postal' => 1083, 'municipio_id' => 186],
            // Municipio Guaicaipuro (municipio_id = 187)
            ['nombre' => 'Altagracia de la Montaña', 'cod_postal' => 1201, 'municipio_id' => 187],
            ['nombre' => 'Cecilio Acosta', 'cod_postal' => 1201, 'municipio_id' => 187],
            ['nombre' => 'El Jarillo', 'cod_postal' => 1201, 'municipio_id' => 187],
            ['nombre' => 'Los Teques', 'cod_postal' => 1201, 'municipio_id' => 187],
            ['nombre' => 'Paracotos', 'cod_postal' => 1201, 'municipio_id' => 187],
            ['nombre' => 'San Pedro', 'cod_postal' => 1201, 'municipio_id' => 187],
            ['nombre' => 'Tácata', 'cod_postal' => 1201, 'municipio_id' => 187],
            // Municipio Independencia (municipio_id = 188)
            ['nombre' => 'El Cartanal', 'cod_postal' => 1211, 'municipio_id' => 188],
            ['nombre' => 'Santa Teresa del Tuy', 'cod_postal' => 1211, 'municipio_id' => 188],
            // Municipio Lander (municipio_id = 189)
            ['nombre' => 'La Democracia', 'cod_postal' => 1212, 'municipio_id' => 189],
            ['nombre' => 'Ocumare del Tuy', 'cod_postal' => 1212, 'municipio_id' => 189],
            ['nombre' => 'Santa Bárbara', 'cod_postal' => 1212, 'municipio_id' => 189],
            // Municipio Los Salias (municipio_id = 190)
            ['nombre' => 'San Antonio de los Altos', 'cod_postal' => 1204, 'municipio_id' => 190],
            // Municipio Páez (municipio_id = 191)
            ['nombre' => 'El Guapo', 'cod_postal' => 1234, 'municipio_id' => 191],
            ['nombre' => 'Río Chico', 'cod_postal' => 1234, 'municipio_id' => 191],
            ['nombre' => 'San Fernando del Guapo', 'cod_postal' => 1234, 'municipio_id' => 191],
            ['nombre' => 'Tacarigua de la Laguna', 'cod_postal' => 1234, 'municipio_id' => 191],
            // Municipio Paz Castillo (municipio_id = 192)
            ['nombre' => 'Santa Lucía del Tuy', 'cod_postal' => 1214, 'municipio_id' => 192],
            ['nombre' => 'Santa Rita', 'cod_postal' => 1214, 'municipio_id' => 192],
            ['nombre' => 'Siquire', 'cod_postal' => 1214, 'municipio_id' => 192],
            ['nombre' => 'Soapire', 'cod_postal' => 1214, 'municipio_id' => 192],
            // Municipio Pedro Gual (municipio_id = 193)
            ['nombre' => 'Cúpira', 'cod_postal' => 1238, 'municipio_id' => 193],
            ['nombre' => 'Machurucuto', 'cod_postal' => 1238, 'municipio_id' => 193],
            // Municipio Plaza (municipio_id = 194)
            ['nombre' => 'Guarenas', 'cod_postal' => 1220, 'municipio_id' => 194],
            // Municipio Simón Bolívar (municipio_id = 195)
            ['nombre' => 'San Antonio de Yare', 'cod_postal' => 1212, 'municipio_id' => 195],
            ['nombre' => 'San Francisco de Yare', 'cod_postal' => 1212, 'municipio_id' => 195],
            // Municipio Sucre (municipio_id = 196)
            ['nombre' => 'Caucagüita', 'cod_postal' => 1073, 'municipio_id' => 196],
            ['nombre' => 'Filas de Mariche', 'cod_postal' => 1073, 'municipio_id' => 196],
            ['nombre' => 'La Dolorita', 'cod_postal' => 1073, 'municipio_id' => 196],
            ['nombre' => 'Leoncio Martínez', 'cod_postal' => 1073, 'municipio_id' => 196],
            ['nombre' => 'Petare', 'cod_postal' => 1073, 'municipio_id' => 196],
            // Municipio Urdaneta (municipio_id = 197)
            ['nombre' => 'Cúa', 'cod_postal' => 1211, 'municipio_id' => 197],
            ['nombre' => 'Nueva Cúa', 'cod_postal' => 1211, 'municipio_id' => 197],
            // Municipio Zamora (municipio_id = 198)
            ['nombre' => 'Araira', 'cod_postal' => 1221, 'municipio_id' => 198],
            ['nombre' => 'Guatire', 'cod_postal' => 1221, 'municipio_id' => 198],

            // Estado Monagas (estado_id = 17)
            // Municipio Acosta (municipio_id = 199)
            ['nombre' => 'San Antonio de Maturín', 'cod_postal' => 6219, 'municipio_id' => 199],
            ['nombre' => 'San Francisco de Maturín', 'cod_postal' => 6219, 'municipio_id' => 199],
            // Municipio Aguasay (municipio_id = 200)
            ['nombre' => 'Aguasay', 'cod_postal' => 6205, 'municipio_id' => 200],
            // Municipio Bolívar (municipio_id = 201)
            ['nombre' => 'Caripito', 'cod_postal' => 6211, 'municipio_id' => 201],
            // Municipio Caripe (municipio_id = 202)
            ['nombre' => 'Caripe', 'cod_postal' => 6210, 'municipio_id' => 202],
            ['nombre' => 'El Guácharo', 'cod_postal' => 6210, 'municipio_id' => 202],
            ['nombre' => 'La Guanota', 'cod_postal' => 6210, 'municipio_id' => 202],
            ['nombre' => 'Sabana de Piedra', 'cod_postal' => 6210, 'municipio_id' => 202],
            ['nombre' => 'San Agustín', 'cod_postal' => 6210, 'municipio_id' => 202],
            ['nombre' => 'Teresen', 'cod_postal' => 6224, 'municipio_id' => 202],
            // Municipio Cedeño (municipio_id = 203)
            ['nombre' => 'Areo', 'cod_postal' => 6209, 'municipio_id' => 203],
            ['nombre' => 'Caicara de Maturín', 'cod_postal' => 6209, 'municipio_id' => 203],
            ['nombre' => 'San Félix de Cantalicio', 'cod_postal' => 6209, 'municipio_id' => 203],
            ['nombre' => 'Viento Fresco', 'cod_postal' => 6209, 'municipio_id' => 203],
            // Municipio Ezequiel Zamora (municipio_id = 204)
            ['nombre' => 'El Tejero', 'cod_postal' => 6213, 'municipio_id' => 204],
            ['nombre' => 'Punta de Mata', 'cod_postal' => 6217, 'municipio_id' => 204],
            // Municipio Libertador (municipio_id = 205)
            ['nombre' => 'Chaguaramas', 'cod_postal' => 6223, 'municipio_id' => 205],
            ['nombre' => 'Las Alhuacas', 'cod_postal' => 6223, 'municipio_id' => 205],
            ['nombre' => 'Tabasca', 'cod_postal' => 6223, 'municipio_id' => 205],
            ['nombre' => 'Temblador', 'cod_postal' => 6223, 'municipio_id' => 205],
            // Municipio Maturín (municipio_id = 206)
            ['nombre' => 'Alto de Los Godos', 'cod_postal' => 6201, 'municipio_id' => 206],
            ['nombre' => 'Boquerón', 'cod_postal' => 6201, 'municipio_id' => 206],
            ['nombre' => 'El Corozo', 'cod_postal' => 6201, 'municipio_id' => 206],
            ['nombre' => 'El Furrial', 'cod_postal' => 6201, 'municipio_id' => 206],
            ['nombre' => 'Jusepín', 'cod_postal' => 6201, 'municipio_id' => 206],          
            ['nombre' => 'La Pica', 'cod_postal' => 6201, 'municipio_id' => 206],
            ['nombre' => 'Las Cocuizas', 'cod_postal' => 6201, 'municipio_id' => 206],
            ['nombre' => 'Maturín', 'cod_postal' => 6201, 'municipio_id' => 206],
            ['nombre' => 'Santa Cruz', 'cod_postal' => 6201, 'municipio_id' => 206],
            ['nombre' => 'San Simón', 'cod_postal' => 6201, 'municipio_id' => 206],
            ['nombre' => 'San Vicente', 'cod_postal' => 6201, 'municipio_id' => 206],
            // Municipio Piar (municipio_id = 207)
            ['nombre' => 'Aparicio', 'cod_postal' => 6206, 'municipio_id' => 207],
            ['nombre' => 'Aragua de Maturín', 'cod_postal' => 6206, 'municipio_id' => 207],
            ['nombre' => 'Chaguaramal', 'cod_postal' => 6206, 'municipio_id' => 207],
            ['nombre' => 'El Pinto', 'cod_postal' => 6206, 'municipio_id' => 207],
            ['nombre' => 'Guanaguana', 'cod_postal' => 6206, 'municipio_id' => 207],
            ['nombre' => 'La Toscana', 'cod_postal' => 6206, 'municipio_id' => 207],
            ['nombre' => 'Taguaya', 'cod_postal' => 6206, 'municipio_id' => 207],
            // Municipio Punceres (municipio_id = 208)
            ['nombre' => 'Cachipo', 'cod_postal' => 6216, 'municipio_id' => 208],
            ['nombre' => 'Quiriquire', 'cod_postal' => 6218, 'municipio_id' => 208],
            // Municipio Santa Bárbara (municipio_id = 209)
            ['nombre' => 'Santa Bárbara', 'cod_postal' => 6221, 'municipio_id' => 209],
            // Municipio Sotillo (municipio_id = 210)
            ['nombre' => 'Barrancas', 'cod_postal' => 6208, 'municipio_id' => 210],
            ['nombre' => 'Los Barrancos de Fajardo', 'cod_postal' => 6208, 'municipio_id' => 210],
            // Municipio Uracoa (municipio_id = 211)
            ['nombre' => 'Uracoa', 'cod_postal' => 6223, 'municipio_id' => 211],

            // Estado Nueva Esparta (estado_id = 18)
            // Municipio Antolín del Campo (municipio_id = 212)
            ['nombre' => 'Antolín del Campo', 'cod_postal' => 6308, 'municipio_id' => 212],
            // Municipio Arismendi (municipio_id = 213)
            ['nombre' => 'Arismendi', 'cod_postal' => 6301, 'municipio_id' => 213],
            // Municipio Díaz (municipio_id = 214)
            ['nombre' => 'San Juan Bautista', 'cod_postal' => 6311, 'municipio_id' => 214],
            ['nombre' => 'Zabala', 'cod_postal' => 6311, 'municipio_id' => 214],
            // Municipio García (municipio_id = 215)
            ['nombre' => 'Francisco Fajardo', 'cod_postal' => 6316, 'municipio_id' => 215],
            ['nombre' => 'García', 'cod_postal' => 6316, 'municipio_id' => 215],
            // Municipio Gómez (municipio_id = 216)
            ['nombre' => 'Bolívar', 'cod_postal' => 6307, 'municipio_id' => 216],
            ['nombre' => 'Guevara', 'cod_postal' => 6307, 'municipio_id' => 216],
            ['nombre' => 'Matasiete', 'cod_postal' => 6307, 'municipio_id' => 216],
            ['nombre' => 'Santa Ana', 'cod_postal' => 6307, 'municipio_id' => 216],
            ['nombre' => 'Sucre', 'cod_postal' => 6307, 'municipio_id' => 216],
            // Municipio Maneiro (municipio_id = 217)
            ['nombre' => 'Aguirre', 'cod_postal' => 6317, 'municipio_id' => 217],
            ['nombre' => 'Maneiro', 'cod_postal' => 6317, 'municipio_id' => 217],
            // Municipio Marcano (municipio_id = 218)
            ['nombre' => 'Adrián', 'cod_postal' => 6309, 'municipio_id' => 218],
            ['nombre' => 'Juan Griego', 'cod_postal' => 6309, 'municipio_id' => 218],
            // Municipio Mariño (municipio_id = 219)
            ['nombre' => 'Mariño', 'cod_postal' => 6301, 'municipio_id' => 219],
            // Municipio Macanao (municipio_id = 220)
            ['nombre' => 'San Francisco de Macanao', 'cod_postal' => 6321, 'municipio_id' => 220],
            ['nombre' => 'Boca de Río', 'cod_postal' => 6321, 'municipio_id' => 220],
            // Municipio Tubores (municipio_id = 221)
            ['nombre' => 'Tubores', 'cod_postal' => 6320, 'municipio_id' => 221],
            ['nombre' => 'Los Barales', 'cod_postal' => 6320, 'municipio_id' => 221],
            // Municipio Villalba (municipio_id = 222)
            ['nombre' => 'Vicente Fuentes', 'cod_postal' => 6323, 'municipio_id' => 222],
            ['nombre' => 'Villalba', 'cod_postal' => 6323, 'municipio_id' => 222],

            // Estado Portuguesa (estado_id = 19)
            // Municipio Agua Blanca (municipio_id = 223)
            ['nombre' => 'Agua Blanca', 'cod_postal' => 3301, 'municipio_id' => 223],
            // Municipio Araure (municipio_id = 224)
            ['nombre' => 'Araure', 'cod_postal' => 3303, 'municipio_id' => 224],
            ['nombre' => 'Río Acarigua', 'cod_postal' => 3303, 'municipio_id' => 224],
            // Municipio Esteller (municipio_id = 225)
            ['nombre' => 'Píritu', 'cod_postal' => 3350, 'municipio_id' => 225],
            ['nombre' => 'Uveral', 'cod_postal' => 3350, 'municipio_id' => 225],
            // Municipio Guanare (municipio_id = 226)
            ['nombre' => 'Córdoba', 'cod_postal' => 3354, 'municipio_id' => 226],
            ['nombre' => 'Guanare', 'cod_postal' => 3350, 'municipio_id' => 226],
            ['nombre' => 'San José de la Montaña', 'cod_postal' => 3350, 'municipio_id' => 226],
            ['nombre' => 'San Juan de Guanaguanare', 'cod_postal' => 3350, 'municipio_id' => 226],
            ['nombre' => 'Virgen de Coromoto', 'cod_postal' => 3350, 'municipio_id' => 226],
            // Municipio Guanarito (municipio_id = 227)
            ['nombre' => 'Guanarito', 'cod_postal' => 3356, 'municipio_id' => 227],
            ['nombre' => 'Trinidad de la Capilla', 'cod_postal' => 3356, 'municipio_id' => 227],
            ['nombre' => 'Divina Pastora', 'cod_postal' => 3356, 'municipio_id' => 227],
            // Municipio Monseñor José Vicente de Unda (municipio_id = 228)
            ['nombre' => 'Chabasquén', 'cod_postal' => 3357, 'municipio_id' => 228],
            ['nombre' => 'Peña Blanca', 'cod_postal' => 3357, 'municipio_id' => 228],
            // Municipio Ospino (municipio_id = 229)
            ['nombre' => 'Aparición', 'cod_postal' => 3305, 'municipio_id' => 229],
            ['nombre' => 'La Estación', 'cod_postal' => 3305, 'municipio_id' => 229],
            ['nombre' => 'Ospino', 'cod_postal' => 3305, 'municipio_id' => 229],
            // Municipio Páez (municipio_id = 230)
            ['nombre' => 'Acarigua', 'cod_postal' => 3301, 'municipio_id' => 230],
            ['nombre' => 'Payara', 'cod_postal' => 3301, 'municipio_id' => 230],
            ['nombre' => 'Pimpinela', 'cod_postal' => 3301, 'municipio_id' => 230],
            ['nombre' => 'Ramón Peraza', 'cod_postal' => 3301, 'municipio_id' => 230],
            // Municipio Papelón (municipio_id = 231)
            ['nombre' => 'Caño Delgadito', 'cod_postal' => 3352, 'municipio_id' => 231],
            ['nombre' => 'Papelón', 'cod_postal' => 3352, 'municipio_id' => 231],
            // Municipio San Genaro de Boconoíto (municipio_id = 232)
            ['nombre' => 'Antolín Tovar Anquino', 'cod_postal' => 3358, 'municipio_id' => 232],
            ['nombre' => 'Boconoíto', 'cod_postal' => 3358, 'municipio_id' => 232],
            // Municipio San Rafael de Onoto (municipio_id = 233)
            ['nombre' => 'Santa Fé', 'cod_postal' => 3304, 'municipio_id' => 233],
            ['nombre' => 'San Rafael de Onoto', 'cod_postal' => 3304, 'municipio_id' => 233],
            ['nombre' => 'Thelmo Morles', 'cod_postal' => 3304, 'municipio_id' => 233],
            // Municipio Santa Rosalía (municipio_id = 234)
            ['nombre' => 'Florida', 'cod_postal' => 3351, 'municipio_id' => 234],
            ['nombre' => 'El Playón', 'cod_postal' => 3351, 'municipio_id' => 234],
            // Municipio Sucre (municipio_id = 235)
            ['nombre' => 'Biscucuy', 'cod_postal' => 3353, 'municipio_id' => 235],
            ['nombre' => 'Concepción', 'cod_postal' => 3353, 'municipio_id' => 235],
            ['nombre' => 'San Rafael de Palo Alzado', 'cod_postal' => 3353, 'municipio_id' => 235],
            ['nombre' => 'San José de Saguaz', 'cod_postal' => 3353, 'municipio_id' => 235],
            // Municipio Turén (municipio_id = 236)
            ['nombre' => 'Villa Bruzual', 'cod_postal' => 3307, 'municipio_id' => 236],
            ['nombre' => 'Canelones', 'cod_postal' => 3307, 'municipio_id' => 236],
            ['nombre' => 'Santa Cruz', 'cod_postal' => 3307, 'municipio_id' => 236],
            ['nombre' => 'San Isidro Labrador', 'cod_postal' => 3307, 'municipio_id' => 236],

            // Estado Sucre (estado_id = 20)
            // Municipio Andrés Eloy Blanco (municipio_id = 237)
            ['nombre' => 'Mariño', 'cod_postal' => '6168', 'municipio_id' => 237],
            ['nombre' => 'Rómulo Gallegos', 'cod_postal' => '6168', 'municipio_id' => 237],
            // Municipio Andrés Mata (municipio_id = 238)
            ['nombre' => 'San José de Areocuar', 'cod_postal' => '6167', 'municipio_id' => 238],
            ['nombre' => 'Tavera Acosta', 'cod_postal' => '6167', 'municipio_id' => 238],
            // Municipio Arismendi (municipio_id = 239)
            ['nombre' => 'Río Caribe', 'cod_postal' => '6164', 'municipio_id' => 239],
            ['nombre' => 'Antonio José de Sucre', 'cod_postal' => '6164', 'municipio_id' => 239],
            ['nombre' => 'El Morro de Puerto Santo', 'cod_postal' => '6163', 'municipio_id' => 239],
            ['nombre' => 'Puerto Santo', 'cod_postal' => '6164', 'municipio_id' => 239],
            ['nombre' => 'San Juan de las Galdonas', 'cod_postal' => '6164', 'municipio_id' => 239],
            // Municipio Benítez (municipio_id = 240)
            ['nombre' => 'El Pilar', 'cod_postal' => '6152', 'municipio_id' => 240],
            ['nombre' => 'El Rincón', 'cod_postal' => '6152', 'municipio_id' => 240],
            ['nombre' => 'General Francisco Antonio Vázquez', 'cod_postal' => '6152', 'municipio_id' => 240],
            ['nombre' => 'Guaraúnos', 'cod_postal' => '6152', 'municipio_id' => 240],
            ['nombre' => 'Tunapuicito', 'cod_postal' => '6152', 'municipio_id' => 240],
            ['nombre' => 'Unión', 'cod_postal' => '6152', 'municipio_id' => 240],
            // Municipio Bermúdez (municipio_id = 241)
            ['nombre' => 'Santa Catalina', 'cod_postal' => '6150', 'municipio_id' => 241],
            ['nombre' => 'Santa Rosa', 'cod_postal' => '6150', 'municipio_id' => 241],
            ['nombre' => 'Santa Teresa', 'cod_postal' => '6150', 'municipio_id' => 241],
            ['nombre' => 'Bolívar', 'cod_postal' => '6150', 'municipio_id' => 241],
            ['nombre' => 'Maracapana', 'cod_postal' => '6150', 'municipio_id' => 241],
            // Municipio Bolívar (municipio_id = 242)
            ['nombre' => 'Marigüitar', 'cod_postal' => '6107', 'municipio_id' => 242],
            // Municipio Cajigal (municipio_id = 243)
            ['nombre' => 'Libertad', 'cod_postal' => '6155', 'municipio_id' => 243],
            ['nombre' => 'El Paujil', 'cod_postal' => '6155', 'municipio_id' => 243],
            ['nombre' => 'Yaguaraparo', 'cod_postal' => '6155', 'municipio_id' => 243],
            // Municipio Cruz Salmerón Acosta (municipio_id = 244)
            ['nombre' => 'Araya', 'cod_postal' => '6102', 'municipio_id' => 244],
            ['nombre' => 'Chacopata', 'cod_postal' => '6102', 'municipio_id' => 244],
            ['nombre' => 'Manicuare', 'cod_postal' => '6102', 'municipio_id' => 244],
            // Municipio Libertador (municipio_id = 245)
            ['nombre' => 'Tunapuy', 'cod_postal' => '6154', 'municipio_id' => 245],
            ['nombre' => 'Campo Elías', 'cod_postal' => '6154', 'municipio_id' => 245],
            // Municipio Mariño (municipio_id = 246)
            ['nombre' => 'Irapa', 'cod_postal' => '6156', 'municipio_id' => 246],
            ['nombre' => 'Campo Claro', 'cod_postal' => '6156', 'municipio_id' => 246],
            ['nombre' => 'Marabal', 'cod_postal' => '6156', 'municipio_id' => 246],
            ['nombre' => 'San Antonio de Irapa', 'cod_postal' => '6156', 'municipio_id' => 246],
            ['nombre' => 'Soro', 'cod_postal' => '6156', 'municipio_id' => 246],
            // Municipio Mejía (municipio_id = 247)
            ['nombre' => 'San Antonio del Golfo', 'cod_postal' => '6110', 'municipio_id' => 247],
            // Municipio Montes (municipio_id = 248)
            ['nombre' => 'Cumanacoa', 'cod_postal' => '6106', 'municipio_id' => 248],
            ['nombre' => 'Arenas', 'cod_postal' => '6106', 'municipio_id' => 248],
            ['nombre' => 'Aricagua', 'cod_postal' => '6106', 'municipio_id' => 248],
            ['nombre' => 'Cocollar', 'cod_postal' => '6106', 'municipio_id' => 248],
            ['nombre' => 'San Fernando', 'cod_postal' => '6106', 'municipio_id' => 248],
            ['nombre' => 'San Lorenzo', 'cod_postal' => '6106', 'municipio_id' => 248],
            // Municipio Ribero (municipio_id = 249)
            ['nombre' => 'Cariaco', 'cod_postal' => '6126', 'municipio_id' => 249],
            ['nombre' => 'Catuaro', 'cod_postal' => '6126', 'municipio_id' => 249],
            ['nombre' => 'Rendón', 'cod_postal' => '6126', 'municipio_id' => 249],
            ['nombre' => 'Santa Cruz', 'cod_postal' => '6126', 'municipio_id' => 249],
            ['nombre' => 'Santa María', 'cod_postal' => '6126', 'municipio_id' => 249],
            // Municipio Sucre (municipio_id = 250)
            ['nombre' => 'Altagracia', 'cod_postal' => '6101', 'municipio_id' => 250],
            ['nombre' => 'Santa Inés', 'cod_postal' => '6101', 'municipio_id' => 250],
            ['nombre' => 'Valentín Valiente', 'cod_postal' => '6101', 'municipio_id' => 250],
            ['nombre' => 'Ayacucho', 'cod_postal' => '6101', 'municipio_id' => 250],
            ['nombre' => 'San Juan', 'cod_postal' => '6101', 'municipio_id' => 250],
            ['nombre' => 'Raúl Leoni', 'cod_postal' => '6101', 'municipio_id' => 250],
            ['nombre' => 'Gran Mariscal', 'cod_postal' => '6101', 'municipio_id' => 250],
            // Municipio Valdez (municipio_id = 251)
            ['nombre' => 'Cristóbal Colón', 'cod_postal' => '6161', 'municipio_id' => 251],
            ['nombre' => 'Bideau', 'cod_postal' => '6161', 'municipio_id' => 251],
            ['nombre' => 'Punta de Piedras', 'cod_postal' => '6161', 'municipio_id' => 251],
            ['nombre' => 'Güiria', 'cod_postal' => '6161', 'municipio_id' => 251],

            // Estado Táchira (estado_id = 20)
            // Municipio Andrés Bello (municipio_id = 252)
            ['nombre' => 'Cordero', 'cod_postal' => '5012', 'municipio_id' => 252],
            // Municipio Antonio Rómulo Costa (municipio_id = 253)
            ['nombre' => 'Las Mesas', 'cod_postal' => '5020', 'municipio_id' => 253],
            // Municipio Ayacucho (municipio_id = 254)
            ['nombre' => 'Colón', 'cod_postal' => '5003', 'municipio_id' => 254],
            ['nombre' => 'San Félix', 'cod_postal' => '5003', 'municipio_id' => 254],
            ['nombre' => 'San Pedro del Río', 'cod_postal' => '5005', 'municipio_id' => 254],
            // Municipio Bolívar (municipio_id = 255)
            ['nombre' => 'El Recreo', 'cod_postal' => '5007', 'municipio_id' => 255],
            ['nombre' => 'Las Dantas', 'cod_postal' => '5007', 'municipio_id' => 255],
            ['nombre' => 'Palotal', 'cod_postal' => '5007', 'municipio_id' => 255],
            ['nombre' => 'San Antonio del Táchira', 'cod_postal' => '5007', 'municipio_id' => 255],
            // Municipio Cárdenas (municipio_id = 256)
            ['nombre' => 'La Florida', 'cod_postal' => '5017', 'municipio_id' => 256],
            ['nombre' => 'Palo Gordo', 'cod_postal' => '5017', 'municipio_id' => 256],
            ['nombre' => 'Táriba', 'cod_postal' => '5017', 'municipio_id' => 256],
            // Municipio Córdoba (municipio_id = 257)
            ['nombre' => 'Santa Ana', 'cod_postal' => '5051', 'municipio_id' => 257],
            // Municipio Fernández Feo (municipio_id = 258)
            ['nombre' => 'Puerto Teteo', 'cod_postal' => '5032', 'municipio_id' => 258],
            ['nombre' => 'San Lorenzo', 'cod_postal' => '5032', 'municipio_id' => 258],
            ['nombre' => 'San Rafael del Piñal', 'cod_postal' => '5032', 'municipio_id' => 258],
            // Municipio Francisco de Miranda (municipio_id = 259)
            ['nombre' => 'San José de Bolívar', 'cod_postal' => '5026', 'municipio_id' => 259],
            // Municipio García de Hevia (municipio_id = 260)
            ['nombre' => 'Boca de Grita', 'cod_postal' => '5020', 'municipio_id' => 260],
            ['nombre' => 'La Fría', 'cod_postal' => '5020', 'municipio_id' => 260],
            ['nombre' => 'Orope', 'cod_postal' => '5020', 'municipio_id' => 260],
            // Municipio Guásimos (municipio_id = 261)
            ['nombre' => 'Palmira', 'cod_postal' => '5015', 'municipio_id' => 261],
            // Municipio Independencia (municipio_id = 262)
            ['nombre' => 'Capacho Nuevo', 'cod_postal' => '5009', 'municipio_id' => 262],
            ['nombre' => 'El Valle', 'cod_postal' => '5009', 'municipio_id' => 262],
            ['nombre' => 'Peribeca', 'cod_postal' => '5009', 'municipio_id' => 262],
            // Municipio Jáuregui (municipio_id = 263)
            ['nombre' => 'La Grita', 'cod_postal' => '5022', 'municipio_id' => 263],
            ['nombre' => 'Pueblo Hondo', 'cod_postal' => '5022', 'municipio_id' => 263],
            ['nombre' => 'Sabana Grande', 'cod_postal' => '5022', 'municipio_id' => 263],
            // Municipio José María Vargas (municipio_id = 264)
            ['nombre' => 'El Cobre', 'cod_postal' => '5021', 'municipio_id' => 264],
            // Municipio Junín (municipio_id = 265)
            ['nombre' => 'Bramón', 'cod_postal' => '5029', 'municipio_id' => 265],
            ['nombre' => 'Río Chiquito', 'cod_postal' => '5030', 'municipio_id' => 265],
            ['nombre' => 'Rubio', 'cod_postal' => '5030', 'municipio_id' => 265],
            ['nombre' => 'San Vicente de la Revancha', 'cod_postal' => '5030', 'municipio_id' => 265],
            // Municipio Libertad (municipio_id = 266)
            ['nombre' => 'Capacho Viejo', 'cod_postal' => '5010', 'municipio_id' => 266],
            ['nombre' => 'El Pueblito', 'cod_postal' => '5010', 'municipio_id' => 266],
            ['nombre' => 'Hato de la Virgen', 'cod_postal' => '5010', 'municipio_id' => 266],
            // Municipio Libertador (municipio_id = 267)
            ['nombre' => 'Abejales', 'cod_postal' => '5002', 'municipio_id' => 267],
            ['nombre' => 'El Milagro', 'cod_postal' => '5002', 'municipio_id' => 267],
            ['nombre' => 'Puerto Nuevo', 'cod_postal' => '5002', 'municipio_id' => 267],
            ['nombre' => 'San Joaquín de Navay', 'cod_postal' => '5002', 'municipio_id' => 267],
            // Municipio Lobatera (municipio_id = 268)
            ['nombre' => 'Borotá', 'cod_postal' => '5033', 'municipio_id' => 268],
            ['nombre' => 'Lobatera', 'cod_postal' => '5036', 'municipio_id' => 268],
            // Municipio Michelena (municipio_id = 269)
            ['nombre' => 'Michelena', 'cod_postal' => '5037', 'municipio_id' => 269],
            // Municipio Panamericano (municipio_id = 270)
            ['nombre' => 'Coloncito', 'cod_postal' => '5038', 'municipio_id' => 270],
            ['nombre' => 'La Palmita', 'cod_postal' => '5038', 'municipio_id' => 270],
            // Municipio Pedro María Ureña (municipio_id = 271)
            ['nombre' => 'Aguas Calientes', 'cod_postal' => '5048', 'municipio_id' => 271],
            ['nombre' => 'Ureña', 'cod_postal' => '5048', 'municipio_id' => 271],
            // Municipio Rafael Urdaneta (municipio_id = 272)
            ['nombre' => 'Delicias', 'cod_postal' => '5028', 'municipio_id' => 272],
            // Municipio Samuel Dario Maldonado (municipio_id = 273)
            ['nombre' => 'Boconó', 'cod_postal' => '5039', 'municipio_id' => 273],
            ['nombre' => 'Hernández', 'cod_postal' => '5043', 'municipio_id' => 273],
            ['nombre' => 'La Tendida', 'cod_postal' => '5040', 'municipio_id' => 273],
            // Municipio San Cristóbal (municipio_id = 274)
            ['nombre' => 'Macanillo', 'cod_postal' => '5001', 'municipio_id' => 274],
            ['nombre' => 'San Cristóbal', 'cod_postal' => '5001', 'municipio_id' => 274],
            // Municipio San Judas Tadeo (municipio_id = 275)
            ['nombre' => 'Umuquena', 'cod_postal' => '5044', 'municipio_id' => 275],
            // Municipio Seboruco (municipio_id = 276)
            ['nombre' => 'Seboruco', 'cod_postal' => '5027', 'municipio_id' => 276],
            // Municipio Simón Rodríguez (municipio_id = 277)
            ['nombre' => 'San Simón', 'cod_postal' => '5043', 'municipio_id' => 277],
            // Municipio Sucre (municipio_id = 278)
            ['nombre' => 'Mesa del Tigre', 'cod_postal' => '5054', 'municipio_id' => 278],
            ['nombre' => 'Queniquea', 'cod_postal' => '5054', 'municipio_id' => 278],
            ['nombre' => 'San Pablo', 'cod_postal' => '5054', 'municipio_id' => 278],
            // Municipio Torbes (municipio_id = 279)
            ['nombre' => 'San Jocesito', 'cod_postal' => '5034', 'municipio_id' => 279],
            // Municipio Uribante (municipio_id = 280)
            ['nombre' => 'La Fundación', 'cod_postal' => '5058', 'municipio_id' => 280],
            ['nombre' => 'Laguna de García', 'cod_postal' => '5058', 'municipio_id' => 280],
            ['nombre' => 'Patio Redondo', 'cod_postal' => '5058', 'municipio_id' => 280],
            ['nombre' => 'Pregonero', 'cod_postal' => '5058', 'municipio_id' => 280],

            // Estado Trujillo (estado_id = 21)
            // Municipio Andrés Bello (municipio_id = 281)
            ['nombre' => 'Araguaney', 'cod_postal' => '3113', 'municipio_id' => 281],
            ['nombre' => 'El Gallo', 'cod_postal' => '3113', 'municipio_id' => 281],
            ['nombre' => 'El Jagüito', 'cod_postal' => '3113', 'municipio_id' => 281],
            ['nombre' => 'Santa Isabel', 'cod_postal' => '3113', 'municipio_id' => 281],
            // Municipio Boconó (municipio_id = 282)
            ['nombre' => 'Batatal', 'cod_postal' => '3103', 'municipio_id' => 282],
            ['nombre' => 'Boconó', 'cod_postal' => '3103', 'municipio_id' => 282],
            ['nombre' => 'Burbusay', 'cod_postal' => '3115', 'municipio_id' => 282],
            ['nombre' => 'El Carmen', 'cod_postal' => '3103', 'municipio_id' => 282],
            ['nombre' => 'Guaramal', 'cod_postal' => '3118', 'municipio_id' => 282],
            ['nombre' => 'Las Mesitas', 'cod_postal' => '3101', 'municipio_id' => 282],
            ['nombre' => 'Mosquey', 'cod_postal' => '3101', 'municipio_id' => 282],
            ['nombre' => 'Niquitao', 'cod_postal' => '3118', 'municipio_id' => 282],
            ['nombre' => 'San Miguel', 'cod_postal' => '3119', 'municipio_id' => 282],
            ['nombre' => 'San Rafael', 'cod_postal' => '3103', 'municipio_id' => 282],
            ['nombre' => 'Tostós', 'cod_postal' => '3103', 'municipio_id' => 282],
            ['nombre' => 'Vega de Guaramacal', 'cod_postal' => '3103', 'municipio_id' => 282],
            // Municipio Bolívar (municipio_id = 283)
            ['nombre' => 'Altamira de Caús', 'cod_postal' => '3110', 'municipio_id' => 283],
            ['nombre' => 'Granados', 'cod_postal' => '3110', 'municipio_id' => 283],
            // Municipio Candelaria (municipio_id = 284)
            ['nombre' => 'Bolivia', 'cod_postal' => '3157', 'municipio_id' => 284],
            ['nombre' => 'Chejendé', 'cod_postal' => '3124', 'municipio_id' => 284],
            ['nombre' => 'Las Llanadas', 'cod_postal' => '3129', 'municipio_id' => 284],
            ['nombre' => 'Minas', 'cod_postal' => '3124', 'municipio_id' => 284],
            ['nombre' => 'Mitón', 'cod_postal' => '3129', 'municipio_id' => 284],
            ['nombre' => 'Sabana Grande', 'cod_postal' => '3129', 'municipio_id' => 284],
            ['nombre' => 'Torococo', 'cod_postal' => '3129', 'municipio_id' => 284],
            // Municipio Carache (municipio_id = 285)
            ['nombre' => 'Carache', 'cod_postal' => '3123', 'municipio_id' => 285],
            ['nombre' => 'Cuicas', 'cod_postal' => '3125', 'municipio_id' => 285],
            ['nombre' => 'El Zapatero', 'cod_postal' => '3123', 'municipio_id' => 285],
            ['nombre' => 'La Cuchilla', 'cod_postal' => '3123', 'municipio_id' => 285],
            // Municipio Escuque (municipio_id = 286)
            ['nombre' => 'El Alto', 'cod_postal' => '3105', 'municipio_id' => 286],
            ['nombre' => 'Escuque', 'cod_postal' => '3105', 'municipio_id' => 286],
            ['nombre' => 'La Mata', 'cod_postal' => '3105', 'municipio_id' => 286],
            ['nombre' => 'Sabana Libre', 'cod_postal' => '3135', 'municipio_id' => 286],
            // Municipio José Felipe Márquez Cañizales (municipio_id = 287)
            ['nombre' => 'El Paradero', 'cod_postal' => '3156', 'municipio_id' => 287],
            ['nombre' => 'La Placita', 'cod_postal' => '3156', 'municipio_id' => 287],
            ['nombre' => 'Los Caprichos', 'cod_postal' => '3156', 'municipio_id' => 287],
            // Municipio Juan Vicente Campos Elías (municipio_id = 288)
            ['nombre' => 'Campo Elías', 'cod_postal' => '3116', 'municipio_id' => 288],
            ['nombre' => 'Las Quebradas', 'cod_postal' => '3116', 'municipio_id' => 288],
            // Municipio La Ceiba (municipio_id = 289)
            ['nombre' => 'La Ceiba', 'cod_postal' => '3108', 'municipio_id' => 289],
            ['nombre' => 'Santa Apolonia', 'cod_postal' => '3127', 'municipio_id' => 289],
            ['nombre' => 'Tres de Febrero', 'cod_postal' => '3127', 'municipio_id' => 289],
            ['nombre' => 'Zona Rica', 'cod_postal' => '3127', 'municipio_id' => 289],
            // Municipio Miranda (municipio_id = 290)
            ['nombre' => 'Agua Caliente', 'cod_postal' => '3110', 'municipio_id' => 290],
            ['nombre' => 'Agua Santa', 'cod_postal' => '3110', 'municipio_id' => 290],
            ['nombre' => 'El Cenizo', 'cod_postal' => '3107', 'municipio_id' => 290],
            ['nombre' => 'El Dividive', 'cod_postal' => '3110', 'municipio_id' => 290],
            ['nombre' => 'Valerita', 'cod_postal' => '3110', 'municipio_id' => 290],
            // Municipio Monte Carmelo (municipio_id = 291)
            ['nombre' => 'Buena Vista', 'cod_postal' => '3134', 'municipio_id' => 291],
            ['nombre' => 'Casa de Tabla', 'cod_postal' => '3134', 'municipio_id' => 291],
            ['nombre' => 'Monte Carmelo', 'cod_postal' => '3134', 'municipio_id' => 291],
            // Municipio Motatán (municipio_id = 292)
            ['nombre' => 'El Baño', 'cod_postal' => '3140', 'municipio_id' => 292],
            ['nombre' => 'Jalisco', 'cod_postal' => '3140', 'municipio_id' => 292],
            ['nombre' => 'Motatán', 'cod_postal' => '3140', 'municipio_id' => 292],
            // Municipio Pampán (municipio_id = 293)
            ['nombre' => 'Flor de Patria', 'cod_postal' => '3151', 'municipio_id' => 293],
            ['nombre' => 'Monay', 'cod_postal' => '3153', 'municipio_id' => 293],
            ['nombre' => 'Pampán', 'cod_postal' => '3153', 'municipio_id' => 293],
            // Municipio Pampanito (municipio_id = 294)
            ['nombre' => 'La Concepción', 'cod_postal' => '3150', 'municipio_id' => 294],
            ['nombre' => 'Pampanito', 'cod_postal' => '3152', 'municipio_id' => 294],
            ['nombre' => 'Pampanito II', 'cod_postal' => '3152', 'municipio_id' => 294],
            // Municipio Rafael Rangel (municipio_id = 295)
            ['nombre' => 'Betijoque', 'cod_postal' => '3104', 'municipio_id' => 295],
            ['nombre' => 'Isnotú', 'cod_postal' => '3109', 'municipio_id' => 295],
            ['nombre' => 'Los Rurales', 'cod_postal' => '3104', 'municipio_id' => 295],
            ['nombre' => 'Los Cedros', 'cod_postal' => '3104', 'municipio_id' => 295],
            // Municipio San Rafael de Carvajal (municipio_id = 296)
            ['nombre' => 'Campo Alegre', 'cod_postal' => '3101', 'municipio_id' => 296],
            ['nombre' => 'Carvajal', 'cod_postal' => '3102', 'municipio_id' => 296],
            ['nombre' => 'La Cejita', 'cod_postal' => '3149', 'municipio_id' => 296],
            ['nombre' => 'Las Mesetas', 'cod_postal' => '3101', 'municipio_id' => 296],
            // Municipio Sucre (municipio_id = 297)
            ['nombre' => 'El Paraíso', 'cod_postal' => '3110', 'municipio_id' => 297],
            ['nombre' => 'Junín', 'cod_postal' => '3110', 'municipio_id' => 297],
            ['nombre' => 'Sabana de Mendoza', 'cod_postal' => '3110', 'municipio_id' => 297],
            ['nombre' => 'Valmore Rodríguez', 'cod_postal' => '3110', 'municipio_id' => 297],
            // Municipio Trujillo (municipio_id = 298)
            ['nombre' => 'Chiquinquirá', 'cod_postal' => '3150', 'municipio_id' => 298],
            ['nombre' => 'La Plazuela', 'cod_postal' => '3150', 'municipio_id' => 298],
            ['nombre' => 'Matríz', 'cod_postal' => '3150', 'municipio_id' => 298],
            ['nombre' => 'San Jacinto', 'cod_postal' => '3150', 'municipio_id' => 298],
            ['nombre' => 'San Lázaro', 'cod_postal' => '3154', 'municipio_id' => 298],
            ['nombre' => 'Santa Rosa', 'cod_postal' => '3150', 'municipio_id' => 298],
            ['nombre' => 'Tres Esquinas', 'cod_postal' => '3150', 'municipio_id' => 298],
            // Municipio Urdaneta (municipio_id = 299)
            ['nombre' => 'Cabimbú', 'cod_postal' => '3147', 'municipio_id' => 299],
            ['nombre' => 'Jajó', 'cod_postal' => '3145', 'municipio_id' => 299],
            ['nombre' => 'La Mesa de Esnujaque', 'cod_postal' => '3146', 'municipio_id' => 299],
            ['nombre' => 'La Quebrada', 'cod_postal' => '3147', 'municipio_id' => 299],
            ['nombre' => 'Santiago', 'cod_postal' => '3101', 'municipio_id' => 299],
            ['nombre' => 'Tuñame', 'cod_postal' => '3145', 'municipio_id' => 299],
            // Municipio Valera (municipio_id = 300)
            ['nombre' => 'Juan Ignacio Montilla', 'cod_postal' => '3101', 'municipio_id' => 300],
            ['nombre' => 'La Beatríz', 'cod_postal' => '3101', 'municipio_id' => 300],
            ['nombre' => 'La Puerta', 'cod_postal' => '3106', 'municipio_id' => 300],
            ['nombre' => 'Mendoza', 'cod_postal' => '3122', 'municipio_id' => 300],
            ['nombre' => 'Mercedes Díaz', 'cod_postal' => '3101', 'municipio_id' => 300],
            ['nombre' => 'San Luis', 'cod_postal' => '3106', 'municipio_id' => 300],

            // Estado Yaracuy (estado_id = 22)
            // Municipio Arístides Bastidas (municipio_id = 301)
            ['nombre' => 'Arístides Bastidas', 'cod_postal' => '3201', 'municipio_id' => 301],
            // Municipio Bolívar (municipio_id = 302)
            ['nombre' => 'Bolívar', 'cod_postal' => '3202', 'municipio_id' => 302],
            // Municipio Bruzual (municipio_id = 303)
            ['nombre' => 'Campo Elías', 'cod_postal' => '3209', 'municipio_id' => 303],
            ['nombre' => 'Chivacoa', 'cod_postal' => '3202', 'municipio_id' => 303],
            // Municipio Cocorote (municipio_id = 304)
            ['nombre' => 'Cocorote', 'cod_postal' => '3208', 'municipio_id' => 304],
            // Municipio Independencia (municipio_id = 305)
            ['nombre' => 'Independencia', 'cod_postal' => '3221', 'municipio_id' => 305],
            // Municipio José Antonio Páez (municipio_id = 306)
            ['nombre' => 'José Antonio Páez', 'cod_postal' => '3211', 'municipio_id' => 306],
            // Municipio La Trinidad (municipio_id = 307)
            ['nombre' => 'La Trinidad', 'cod_postal' => '3211', 'municipio_id' => 307],
            // Municipio Manuel Monge (municipio_id = 308)
            ['nombre' => 'Manuel Monge', 'cod_postal' => '3216', 'municipio_id' => 308],
            // Municipio Nirgua (municipio_id = 309)
            ['nombre' => 'Salóm', 'cod_postal' => '3214', 'municipio_id' => 309],
            ['nombre' => 'Nirgua', 'cod_postal' => '3205', 'municipio_id' => 309],
            ['nombre' => 'Temerla', 'cod_postal' => '3218', 'municipio_id' => 309],
            // Municipio Peña (municipio_id = 310)
            ['nombre' => 'San Andrés', 'cod_postal' => '3203', 'municipio_id' => 310],
            ['nombre' => 'Yaritagua', 'cod_postal' => '3203', 'municipio_id' => 310],
            // Municipio San Felipe (municipio_id = 311)
            ['nombre' => 'Albarico', 'cod_postal' => '3213', 'municipio_id' => 311],
            ['nombre' => 'San Felipe', 'cod_postal' => '3201', 'municipio_id' => 311],
            ['nombre' => 'San Javier', 'cod_postal' => '3201', 'municipio_id' => 311],
            // Municipio Sucre (municipio_id = 312)
            ['nombre' => 'Sucre', 'cod_postal' => '3207', 'municipio_id' => 312],
            // Municipio Urachiche (municipio_id = 313)
            ['nombre' => 'Urachiche', 'cod_postal' => '3204', 'municipio_id' => 313],
            // Municipio Veroes (municipio_id = 314)
            ['nombre' => 'El Guayabo', 'cod_postal' => '3223', 'municipio_id' => 314],
            ['nombre' => 'Farriar', 'cod_postal' => '3222', 'municipio_id' => 314],

            // Estado Zulia (estado_id = 23)
            // Municipio Almirante Padilla (municipio_id = 315)
            ['nombre' => 'Isla de Toas', 'cod_postal' => 4030, 'municipio_id' => 315],
            ['nombre' => 'Monagas', 'cod_postal' => 4030, 'municipio_id' => 315],
            // Municipio Baralt (municipio_id = 316)
            ['nombre' => 'San Timoteo', 'cod_postal' => 4015, 'municipio_id' => 316],
            ['nombre' => 'General Urdaneta', 'cod_postal' => 4015, 'municipio_id' => 316],
            ['nombre' => 'Libertador', 'cod_postal' => 4015, 'municipio_id' => 316],
            ['nombre' => 'Marcelino Briceño', 'cod_postal' => 4015, 'municipio_id' => 316],
            ['nombre' => 'Pueblo Nuevo', 'cod_postal' => 4015, 'municipio_id' => 316],
            // Municipio Cabimas (municipio_id = 317)
            ['nombre' => 'Ambrosio',  'cod_postal' => 4013, 'municipio_id' => 317],
            ['nombre' => 'Carmen Herrera',  'cod_postal' => 4013, 'municipio_id' => 317],
            ['nombre' => 'La Rosa',  'cod_postal' => 4013, 'municipio_id' => 317],
            ['nombre' => 'Germán Ríos Linares',  'cod_postal' => 4013, 'municipio_id' => 317],
            ['nombre' => 'San Benito',  'cod_postal' => 4013, 'municipio_id' => 317],
            ['nombre' => 'Rómulo Betancourt',  'cod_postal' => 4013, 'municipio_id' => 317],
            ['nombre' => 'Jorge Hernández',  'cod_postal' => 4013, 'municipio_id' => 317],
            ['nombre' => 'Punta Gorda',  'cod_postal' => 4013, 'municipio_id' => 317],
            ['nombre' => 'Arístides Calvani',  'cod_postal' => 4013, 'municipio_id' => 317],
            // Municipio Catatumbo (municipio_id = 318)
            ['nombre' => 'Encontrados',  'cod_postal' => 5101, 'municipio_id' => 318],
            ['nombre' => 'Udón Pérez',  'cod_postal' => 5101, 'municipio_id' => 318],
            // Municipio Colón (municipio_id = 319)
            ['nombre' => 'Moralito',  'cod_postal' => 5147, 'municipio_id' => 319],
            ['nombre' => 'San Carlos del Zulia',  'cod_postal' => 5147, 'municipio_id' => 319],
            ['nombre' => 'Santa Cruz del Zulia',  'cod_postal' => 5148, 'municipio_id' => 319],
            ['nombre' => 'Santa Bárbara',  'cod_postal' => 5148, 'municipio_id' => 319],
            ['nombre' => 'Urribarrí',  'cod_postal' => 5147, 'municipio_id' => 319],
            // Municipio Francisco Javier Pulgar (municipio_id = 320)
            ['nombre' => 'Carlos Quevedo',  'cod_postal' => 5145, 'municipio_id' => 320],
            ['nombre' => 'Francisco Javier Pulgar',  'cod_postal' => 5145, 'municipio_id' => 320],
            ['nombre' => 'Simón Rodríguez',  'cod_postal' => 5145, 'municipio_id' => 320],
            // Municipio Guajira (municipio_id = 321)
            ['nombre' => 'Sinamaica', 'cod_postal' => 4046, 'municipio_id' => 15],
            ['nombre' => 'Alta Guajira', 'cod_postal' => 4037, 'municipio_id' => 15],
            ['nombre' => 'Elías Sánchez Rubio', 'cod_postal' => 4053, 'municipio_id' => 15],
            ['nombre' => 'Guajira', 'cod_postal' => 4037, 'municipio_id' => 15],
            // Municipio Jesús Enrique Lossada (municipio_id = 322)
            ['nombre' => 'La Concepción',  'cod_postal' => 4032, 'municipio_id' => 322],
            ['nombre' => 'San José',  'cod_postal' => 4032, 'municipio_id' => 322],
            ['nombre' => 'Mariano Parra León',  'cod_postal' => 4032, 'municipio_id' => 322],
            ['nombre' => 'José Ramón Yépez',  'cod_postal' => 4032, 'municipio_id' => 322],
            // Municipio Jesús María Semprún (municipio_id = 323)
            ['nombre' => 'Jesús María Semprún',  'cod_postal' => 5068, 'municipio_id' => 323],
            ['nombre' => 'Barí',  'cod_postal' => 5068, 'municipio_id' => 323],
            // Municipio La Cañada de Urdaneta (municipio_id = 324)
            ['nombre' => 'Concepción',  'cod_postal' => 4033, 'municipio_id' => 324],
            ['nombre' => 'Andrés Bello',  'cod_postal' => 4033, 'municipio_id' => 324],
            ['nombre' => 'Chiquinquirá',  'cod_postal' => 4033, 'municipio_id' => 324],
            ['nombre' => 'El Carmelo',  'cod_postal' => 4033, 'municipio_id' => 324],
            ['nombre' => 'Potreritos',  'cod_postal' => 4033, 'municipio_id' => 324],
            // Municipio Lagunillas (municipio_id = 325)
            ['nombre' => 'Libertad',  'cod_postal' => 4019, 'municipio_id' => 325],
            ['nombre' => 'Alonso de Ojeda',  'cod_postal' => 4019, 'municipio_id' => 325],
            ['nombre' => 'Eleazar López Contreras',  'cod_postal' => 4019, 'municipio_id' => 325],
            ['nombre' => 'Campo Lara',  'cod_postal' => 4019, 'municipio_id' => 325],
            // Municipio Machiques de Perijá (municipio_id = 326)
            ['nombre' => 'Bartolomé de las Casas', 'cod_postal' => 4035, 'municipio_id' => 326],
            ['nombre' => 'Libertad', 'cod_postal' => 4021, 'municipio_id' => 326],
            ['nombre' => 'Río Negro', 'cod_postal' => 4021, 'municipio_id' => 326],
            ['nombre' => 'San José de Perijá', 'cod_postal' => 4040, 'municipio_id' => 326],
            // Municipio Mara (municipio_id = 327)
            ['nombre' => 'San Rafael', 'cod_postal' => 4044, 'municipio_id' => 327],
            ['nombre' => 'La Sierrita', 'cod_postal' => 4044, 'municipio_id' => 327],
            ['nombre' => 'Las Parcelas', 'cod_postal' => 4044, 'municipio_id' => 327],
            ['nombre' => 'Luis De Vicente', 'cod_postal' => 4048, 'municipio_id' => 327],
            ['nombre' => 'Monseñor Marcos Sergio Godoy', 'cod_postal' => 4027, 'municipio_id' => 327],
            ['nombre' => 'Ricaurte', 'cod_postal' => 4045, 'municipio_id' => 327],
            ['nombre' => 'Tamare', 'cod_postal' => 4044, 'municipio_id' => 327],
            // Municipio Maracaibo (municipio_id = 328)
            ['nombre' => 'Antonio Borjas Romero', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Bolívar', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Cacique Mara', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Carracciolo Parra Pérez', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Cecilio Acosta', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Cristo de Aranza', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Coquivacoa', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Chiquinquirá', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Francisco Eugenio Bustamante', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Idelfonzo Vásquez', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Juana de Ávila', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Luis Hurtado Higuera', 'cod_postal' => 4004, 'municipio_id' => 328],
            ['nombre' => 'Manuel Dagnino', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Olegario Villalobos', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Raúl Leoni', 'cod_postal' => 4005, 'municipio_id' => 328],
            ['nombre' => 'Santa Lucía', 'cod_postal' => 4001, 'municipio_id' => 328],
            ['nombre' => 'San Isidro', 'cod_postal' => 4001, 'municipio_id' => 328],
            ['nombre' => 'Venancio Pulgar', 'cod_postal' => 4005, 'municipio_id' => 328],
            // Municipio Miranda (municipio_id = 329)
            ['nombre' => 'Altagracia', 'cod_postal' => 4036, 'municipio_id' => 329],
            ['nombre' => 'Faría', 'cod_postal' => 4036, 'municipio_id' => 329],
            ['nombre' => 'Ana María Campos', 'cod_postal' => 4036, 'municipio_id' => 329],
            ['nombre' => 'San Antonio', 'cod_postal' => 4036, 'municipio_id' => 329],
            ['nombre' => 'San José', 'cod_postal' => 4036, 'municipio_id' => 329],
            // Municipio Rosario de Perijá (municipio_id = 330)
            ['nombre' => 'Donaldo García', 'cod_postal' => 4047, 'municipio_id' => 330],
            ['nombre' => 'El Rosario', 'cod_postal' => 4047, 'municipio_id' => 330],
            ['nombre' => 'Sixto Zambrano', 'cod_postal' => 4047, 'municipio_id' => 330],
            // Municipio San Francisco (municipio_id = 331)
            ['nombre' => 'San Francisco', 'cod_postal' => 4004, 'municipio_id' => 331],
            ['nombre' => 'El Bajo', 'cod_postal' => 4004, 'municipio_id' => 331],
            ['nombre' => 'Domitila Flores', 'cod_postal' => 4004, 'municipio_id' => 331],
            ['nombre' => 'Francisco Ochoa', 'cod_postal' => 4004, 'municipio_id' => 331],
            ['nombre' => 'Los Cortijos', 'cod_postal' => 4004, 'municipio_id' => 331],
            ['nombre' => 'Marcial Hernández', 'cod_postal' => 4004, 'municipio_id' => 331],
            ['nombre' => 'José Domingo Rus', 'cod_postal' => 4005, 'municipio_id' => 331],
            // Municipio Santa Rita (municipio_id = 332)
            ['nombre' => 'Santa Rita', 'cod_postal' => 4020, 'municipio_id' => 332],
            ['nombre' => 'El Mene', 'cod_postal' => 4020, 'municipio_id' => 332],
            ['nombre' => 'Pedro Lucas Urribarrí', 'cod_postal' => 4020, 'municipio_id' => 332],
            ['nombre' => 'José Cenobio Urribarrí', 'cod_postal' => 4020, 'municipio_id' => 332],
            // Municipio Simón Bolívar (municipio_id = 333)
            ['nombre' => 'Rafael Maria Baralt', 'cod_postal' => 4017, 'municipio_id' => 333],
            ['nombre' => 'Manuel Manrique', 'cod_postal' => 4017, 'municipio_id' => 333],
            ['nombre' => 'Rafael Urdaneta', 'cod_postal' => 4017, 'municipio_id' => 333],
            // Municipio Sucre (municipio_id = 334)
            ['nombre' => 'Bobures', 'cod_postal' => 5148, 'municipio_id' => 334],
            ['nombre' => 'Gibraltar', 'cod_postal' => 3158, 'municipio_id' => 334],
            ['nombre' => 'Heras', 'cod_postal' => 3166, 'municipio_id' => 334],
            ['nombre' => 'Monseñor Arturo Álvarez', 'cod_postal' => 3158, 'municipio_id' => 334],
            ['nombre' => 'Rómulo Gallegos', 'cod_postal' => 3158, 'municipio_id' => 334],
            ['nombre' => 'El Batey', 'cod_postal' => 5149, 'municipio_id' => 334],
            // Municipio Valmore Rodríguez (municipio_id = 335)
            ['nombre' => 'La Victoria', 'cod_postal' => 4014, 'municipio_id' => 335],
            ['nombre' => 'Raúl Cuenca', 'cod_postal' => 4014, 'municipio_id' => 335],            
        ];

        DB::table('parroquias')->insert($parroquias);
    }
}
