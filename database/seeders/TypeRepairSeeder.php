<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\TypeRepair;

class TypeRepairSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeRepair::create(['id' => '1', 'type' => 'Заміна дисплея з сенсорним екраном', 'price' => 'З299', 'category_id' => '1']);
        TypeRepair::create(['id' => '2', 'type' => 'Заміна сенсорного скла', 'price' => '1499', 'category_id' => '1']);
        TypeRepair::create(['id' => '3', 'type' => 'Заміна задньої панелі', 'price' => '1099', 'category_id' => '1']);
        TypeRepair::create(['id' => '4', 'type' => 'Заміна акумулятора', 'price' => '1049', 'category_id' => '1']);
        TypeRepair::create(['id' => '5', 'type' => 'Заміна задньої камери', 'price' => '1999', 'category_id' => '1']);
        TypeRepair::create(['id' => '6', 'type' => 'Заміна фронтальної камери', 'price' => '', 'category_id' => '1']);
        TypeRepair::create(['id' => '7', 'type' => 'Заміна мікрофону', 'price' => '849', 'category_id' => '1']);
        TypeRepair::create(['id' => '8', 'type' => 'Ремонт блоку живлення', 'price' => '650', 'category_id' => '2']);
        TypeRepair::create(['id' => '9', 'type' => 'Заміна мікросхеми Bios з прошивкою', 'price' => '1700', 'category_id' => '2']);
        TypeRepair::create(['id' => '10', 'type' => 'Реболінг або заміна чіпа відеокарти', 'price' => '800', 'category_id' => '2']);
        TypeRepair::create(['id' => '11', 'type' => 'Ремонт материнської плати', 'price' => '800', 'category_id' => '2']);
        TypeRepair::create(['id' => '12', 'type' => 'Заміна материнської плати', 'price' => '1200', 'category_id' => '2']);
        TypeRepair::create(['id' => '13', 'type' => 'Заміна кулера системного блоку', 'price' => '549', 'category_id' => '2']);
        TypeRepair::create(['id' => '14', 'type' => 'Заміна матриці монітора', 'price' => '1400', 'category_id' => '3']);
        TypeRepair::create(['id' => '15', 'type' => 'Ремонт контролера живлення, блоку живлення', 'price' => '750', 'category_id' => '3']);
        TypeRepair::create(['id' => '16', 'type' => 'Ремонт плати дисплейного контролера', 'price' => '600', 'category_id' => '3']);
        TypeRepair::create(['id' => '17', 'type' => 'Заміна/ремонт ламп підсвітки екрана', 'price' => '1000', 'category_id' => '3']);
        TypeRepair::create(['id' => '18', 'type' => 'Ремонт кнопок на панелі', 'price' => '549', 'category_id' => '3']);
        TypeRepair::create(['id' => '19', 'type' => 'Ремонт системної плати управління ', 'price' => '850', 'category_id' => '3']);
        TypeRepair::create(['id' => '20', 'type' => 'Ремонт звичайного пилососа', 'price' => '990', 'category_id' => '4']);
        TypeRepair::create(['id' => '21', 'type' => 'Ремонт миючого пилососа', 'price' => '1200', 'category_id' => '4']);
        TypeRepair::create(['id' => '22', 'type' => 'Ремонт робота-пилососа', 'price' => '1170', 'category_id' => '4']);
        TypeRepair::create(['id' => '23', 'type' => 'Регулювання дверей, петель, полиць, ремонт або заміна кабеля живлення', 'price' => '350', 'category_id' => '5']);
        TypeRepair::create(['id' => '24', 'type' => 'Заправка фреону в холодильнику ', 'price' => '500', 'category_id' => '5']);
        TypeRepair::create(['id' => '25', 'type' => 'Усунення шуму (регулювання трубопровідів, амортизаторів)', 'price' => '450', 'category_id' => '5']);
        TypeRepair::create(['id' => '26', 'type' => 'Усунення витоку фреону в холодильнику', 'price' => '800', 'category_id' => '5']);
        TypeRepair::create(['id' => '27', 'type' => 'Заміна компресора', 'price' => '2400', 'category_id' => '5']);
        TypeRepair::create(['id' => '28', 'type' => 'Установка та підключення нового холодильника', 'price' => '300', 'category_id' => '5']);
        TypeRepair::create(['id' => '29', 'type' => 'Ремонт системної плати', 'price' => '2000', 'category_id' => '6']);
        TypeRepair::create(['id' => '30', 'type' => 'Ремонт блоку живлення', 'price' => '1500', 'category_id' => '6']);
        TypeRepair::create(['id' => '31', 'type' => 'Ремонт динаміків', 'price' => '1000', 'category_id' => '6']);
        TypeRepair::create(['id' => '32', 'type' => 'Ремонт відеосистеми', 'price' => '1000', 'category_id' => '6']);
        TypeRepair::create(['id' => '33', 'type' => 'Ремонт кнопки вмикання', 'price' => '950', 'category_id' => '6']);
        TypeRepair::create(['id' => '34', 'type' => 'Ремонт інтерфейсу HDMI', 'price' => '1000', 'category_id' => '6']);
        TypeRepair::create(['id' => '35', 'type' => 'Заміна/ремонт двигуна', 'price' => '300', 'category_id' => '7']);
        TypeRepair::create(['id' => '36', 'type' => 'Ремонт кнопок', 'price' => '120', 'category_id' => '7']);
        TypeRepair::create(['id' => '37', 'type' => 'Ремонт центральної плати', 'price' => '350', 'category_id' => '7']);
        TypeRepair::create(['id' => '38', 'type' => 'Ремонт системи живлення', 'price' => '250', 'category_id' => '7']);
        TypeRepair::create(['id' => '39', 'type' => 'Заміна тена нагрівання', 'price' => '250', 'category_id' => '7']);
        TypeRepair::create(['id' => '40', 'type' => 'Заміна термодатчика, термозапобіжника', 'price' => '150', 'category_id' => '7']);
        TypeRepair::create(['id' => '41', 'type' => 'Заміна трансформатора', 'price' => '200', 'category_id' => '7']);
        TypeRepair::create(['id' => '42', 'type' => 'Заміна шестерні вала двигуна', 'price' => '250', 'category_id' => '7']);
    }
}
