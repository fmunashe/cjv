<?php

namespace Database\Seeders;

use App\Models\SalesCallSummary;
use Illuminate\Database\Seeder;

class SalesCallSummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sales = [
            ['user_id'=>1,'date'=>'2023-05-02','company'=>'errands and deliveries','contact_person'=>'','phone_number'=>'','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-02','company'=>'airport for calibration','contact_person'=>'','phone_number'=>'','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-02','company'=>'delivery at overnight express','contact_person'=>'','phone_number'=>'','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-03','company'=>'Zimbabwe institute of engineers','contact_person'=>'Mr Muchabaiwa','phone_number'=>'782310145','email_address'=>'rmuchabaiwa@zie.co.zw','notes'=>'will need first aid kits'],
            ['user_id'=>1,'date'=>'2023-05-03','company'=>'dr mtetwa','contact_person'=>'Charity','phone_number'=>'765876333','email_address'=>'','notes'=>'was out of office but got his contacts'],
            ['user_id'=>1,'date'=>'2023-05-03','company'=>'pharmacare pharmacy ','contact_person'=>'pharmacist','phone_number'=>'779889800','email_address'=>'','notes'=>'to send pricelist on whatsapp'],
            ['user_id'=>1,'date'=>'2023-05-03','company'=>'eastlea pharmacy ','contact_person'=>'Jacob','phone_number'=>'783443443','email_address'=>'','notes'=>'got contacts. Will inform me if they have orders'],
            ['user_id'=>1,'date'=>'2023-05-03','company'=>'mcm surgery','contact_person'=>'Janet Muchinapo','phone_number'=>'774778767','email_address'=>'','notes'=>'will get back to me for sundries'],
            ['user_id'=>1,'date'=>'2023-05-03','company'=>'chemayde pharmacy ','contact_person'=>'pharmacist','phone_number'=>'778567554','email_address'=>'','notes'=>'will get back to me after going through catalogue '],
            ['user_id'=>1,'date'=>'2023-05-03','company'=>'dr suddens','contact_person'=>'Elaine','phone_number'=>'86463445','email_address'=>'','notes'=>'was out of office but got contacts'],
            ['user_id'=>1,'date'=>'2023-05-04','company'=>'parktown hospital ','contact_person'=>'Sharon','phone_number'=>'771222890','email_address'=>'','notes'=>'they take their stock from the pharmacy '],
            ['user_id'=>1,'date'=>'2023-05-04','company'=>'parktown pharmacy ','contact_person'=>'sharon','phone_number'=>'783392778','email_address'=>'','notes'=>'got contacts of the buyer'],
            ['user_id'=>1,'date'=>'2023-05-04','company'=>'mainstreet pharmacy ','contact_person'=>'pharmacist','phone_number'=>'782549885','email_address'=>'','notes'=>'machipisa branch does central buying'],
            ['user_id'=>1,'date'=>'2023-05-04','company'=>'cg pharmacy ','contact_person'=>'Mr Chiweshe','phone_number'=>'785496855','email_address'=>'','notes'=>'will need thermometers in the future'],
            ['user_id'=>1,'date'=>'2023-05-04','company'=>'mbuya Maria maternity','contact_person'=>'Ruth','phone_number'=>'789256148','email_address'=>'','notes'=>'got contacts, sent the pricelist '],
            ['user_id'=>1,'date'=>'2023-05-04','company'=>'parktown 24hr','contact_person'=>'Mr sam','phone_number'=>'714555632','email_address'=>'','notes'=>'got contacts, buyer had already left'],
            ['user_id'=>1,'date'=>'2023-05-04','company'=>'lifecare pharmacy ','contact_person'=>'Herbert','phone_number'=>'772221526','email_address'=>'','notes'=>'to keep in touch with them for orders'],
            ['user_id'=>1,'date'=>'2023-05-05','company'=>'rotten row for council payment ','contact_person'=>'','phone_number'=>'','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-05','company'=>'hampack for payments ','contact_person'=>'','phone_number'=>'','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'genau lab services','contact_person'=>'sharon','phone_number'=>'783228776','email_address'=>'','notes'=>'liked ttlhe swabs, will revert to others'],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'flow cytometry','contact_person'=>'receptionist ','phone_number'=>'7729776880712780000','email_address'=>'','notes'=>'to call these numbers for orders'],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'cimas labs','contact_person'=>'moses','phone_number'=>'772111399','email_address'=>'','notes'=>'will try to put us in their suppliers list'],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'lancet','contact_person'=>'milicent','phone_number'=>'745333087','email_address'=>'','notes'=>'to meet I person for discussion '],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'dynacare labs','contact_person'=>'James','phone_number'=>'771231225','email_address'=>'','notes'=>'was not available got contacts'],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'go path labs','contact_person'=>'Mr monza','phone_number'=>'714557889','email_address'=>'','notes'=>'to send pricelist on WhatsApp'],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'highcare labs','contact_person'=>'receptionist ','phone_number'=>'771320775','email_address'=>'','notes'=>'to send pricelist on WhatsApp'],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'neighmart labs','contact_person'=>'receptionist ','phone_number'=>'789012876','email_address'=>'','notes'=>'was busy. got contacts'],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'immunogene labs','contact_person'=>'Rose','phone_number'=>'734775857','email_address'=>'','notes'=>'to send pricelist on WhatsApp '],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'Interpath labs','contact_person'=>'Ruth','phone_number'=>'86739369','email_address'=>'','notes'=>'liked swabs, will order soon'],
            ['user_id'=>1,'date'=>'2023-05-08','company'=>'haematology labs','contact_person'=>'ryan','phone_number'=>'714995826','email_address'=>'','notes'=>'to send pricelist on whatsapp'],
            ['user_id'=>1,'date'=>'2023-05-09','company'=>'delivery to scillaton','contact_person'=>'','phone_number'=>'','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-09','company'=>'Ebenezer pharmacy ','contact_person'=>'pharmacist','phone_number'=>'735768665','email_address'=>'','notes'=>'was not in, got contacts'],
            ['user_id'=>1,'date'=>'2023-05-09','company'=>'hilltop pharmacy ','contact_person'=>'Mr musengeni','phone_number'=>'715008796','email_address'=>'','notes'=>'to send pricelist on whatsapp'],
            ['user_id'=>1,'date'=>'2023-05-10','company'=>'SSEE','contact_person'=>'receptionist ','phone_number'=>'733547447','email_address'=>'','notes'=>'buyer was in a meeting, will get in touch'],
            ['user_id'=>1,'date'=>'2023-05-10','company'=>'Seagrave female clinic','contact_person'=>'receptionist ','phone_number'=>'','email_address'=>'','notes'=>'to make an appointment first'],
            ['user_id'=>1,'date'=>'2023-05-10','company'=>'healthpoint','contact_person'=>'Linda','phone_number'=>'716886547','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-10','company'=>'shilol dental clinic','contact_person'=>'rutendo','phone_number'=>'736555844','email_address'=>'','notes'=>'will get back to me for orders'],
            ['user_id'=>1,'date'=>'2023-05-10','company'=>'pride dental services ','contact_person'=>'receptionist ','phone_number'=>'','email_address'=>'','notes'=>'to make an appointment as well'],
            ['user_id'=>1,'date'=>'2023-05-10','company'=>'farmed pharmacy ','contact_person'=>'tinotenda','phone_number'=>'736776297','email_address'=>'','notes'=>'to send pricelist on WhatsApp'],
            ['user_id'=>1,'date'=>'2023-05-10','company'=>'med care pharmacy ','contact_person'=>'Sarai','phone_number'=>'712019813','email_address'=>'','notes'=>'will send in order soon'],
            ['user_id'=>1,'date'=>'2023-05-10','company'=>'the bridge pharmacy ','contact_person'=>'lovemore ','phone_number'=>'719036814','email_address'=>'','notes'=>'will need a fridge thermometer '],
            ['user_id'=>1,'date'=>'2023-05-10','company'=>'Arundel pharmacy ','contact_person'=>'Sam','phone_number'=>'774384014','email_address'=>'','notes'=>'will need calibration soon, will advise'],
            ['user_id'=>1,'date'=>'2023-05-11','company'=>'curaplus pharmacy ','contact_person'=>'lucinda','phone_number'=>'731886936','email_address'=>'','notes'=>'Good prices. Will order soon'],
            ['user_id'=>1,'date'=>'2023-05-11','company'=>'greendale pharmacy ','contact_person'=>'charmaine','phone_number'=>'736986984','email_address'=>'','notes'=>'will need something next week '],
            ['user_id'=>1,'date'=>'2023-05-11','company'=>'caremart pharmacy ','contact_person'=>'pharmacist','phone_number'=>'714863926','email_address'=>'','notes'=>'to send pricelist on WhatsApp '],
            ['user_id'=>1,'date'=>'2023-05-11','company'=>'flexcorp pharmacy ','contact_person'=>'pharmacist','phone_number'=>'739674928','email_address'=>'','notes'=>'to send pricelist on WhatsApp '],
            ['user_id'=>1,'date'=>'2023-05-11','company'=>'devine pharmacy ','contact_person'=>'Mr mukwara','phone_number'=>'732946726','email_address'=>'','notes'=>'does central buying '],
            ['user_id'=>1,'date'=>'2023-05-11','company'=>'booties pharmacy ','contact_person'=>'samantha','phone_number'=>'739273882','email_address'=>'','notes'=>'does central buying '],
            ['user_id'=>1,'date'=>'2023-05-11','company'=>'highlands green medical center','contact_person'=>'receptionist ','phone_number'=>'738277392','email_address'=>'','notes'=>'was busy, got contacts '],
            ['user_id'=>1,'date'=>'2023-05-12','company'=>'introwise ','contact_person'=>'walter','phone_number'=>'','email_address'=>'','notes'=>'will revert to others'],
            ['user_id'=>1,'date'=>'2023-05-12','company'=>'caterwise','contact_person'=>'Jonathan','phone_number'=>'','email_address'=>'','notes'=>'will revert to others '],
            ['user_id'=>1,'date'=>'2023-05-12','company'=>'zim labs','contact_person'=>'receptionist ','phone_number'=>'','email_address'=>'','notes'=>'could not give out their information '],
            ['user_id'=>1,'date'=>'2023-05-12','company'=>'strathaven pharmacy ','contact_person'=>'simba','phone_number'=>'738075443','email_address'=>'','notes'=>'will most likely want a pestle soon'],
            ['user_id'=>1,'date'=>'2023-05-12','company'=>'monavale pharmacy ','contact_person'=>'shayne','phone_number'=>'715853399','email_address'=>'','notes'=>'will communicate for orders'],
            ['user_id'=>1,'date'=>'2023-05-12','company'=>'the practice medical group','contact_person'=>'receptionist ','phone_number'=>'','email_address'=>'admin@thepracticemg.co.zw','notes'=>'to send email with pricelist '],
            ['user_id'=>1,'date'=>'2023-05-12','company'=>'Ellis Robins school','contact_person'=>'guard','phone_number'=>'','email_address'=>'procurement@ellisrobinsschool.com','notes'=>'to send email with pricelist '],
            ['user_id'=>1,'date'=>'2023-05-12','company'=>'dr chinhara belgravia ','contact_person'=>'receptionist ','phone_number'=>'774996359','email_address'=>'','notes'=>'was tied up, will try another day'],
            ['user_id'=>1,'date'=>'2023-05-12','company'=>'shalom pharmacy ','contact_person'=>'rude','phone_number'=>'785346997','email_address'=>'','notes'=>'to send pricelist on WhatsApp '],
            ['user_id'=>1,'date'=>'2023-05-12','company'=>'the Brooke medical centre ','contact_person'=>'receptionist ','phone_number'=>'774358471','email_address'=>'procurement@thebrooke.co.zw','notes'=>'to send email with pricelist '],
            ['user_id'=>1,'date'=>'2023-05-15','company'=>'dr chiwunze','contact_person'=>'dr chiwunze','phone_number'=>'04 750 942','email_address'=>'','notes'=>'saved my contacts in their system for future orders'],
            ['user_id'=>1,'date'=>'2023-05-15','company'=>'Sunningdale 2 pharmacy ','contact_person'=>'patience ','phone_number'=>'782582333','email_address'=>'','notes'=>'to send pricelist on whatsapp'],
            ['user_id'=>1,'date'=>'2023-05-15','company'=>'grandchem pharmacy ','contact_person'=>'Derek','phone_number'=>'772111626','email_address'=>'','notes'=>'gave me a flyer with contact details'],
            ['user_id'=>1,'date'=>'2023-05-15','company'=>'Judah medical centre','contact_person'=>'dr maisiri','phone_number'=>'774950832','email_address'=>'','notes'=>'can get Disposable gowns if we get a better price '],
            ['user_id'=>1,'date'=>'2023-05-15','company'=>'Sunningdale radiography center','contact_person'=>'sister Judy','phone_number'=>'787831342','email_address'=>'','notes'=>'will tell me if they need anything'],
            ['user_id'=>1,'date'=>'2023-05-15','company'=>'accolade pharmacy ','contact_person'=>'Rachel','phone_number'=>'782531062','email_address'=>'','notes'=>'to send reminders on whatsapp'],
            ['user_id'=>1,'date'=>'2023-05-15','company'=>'Sunningdale dental clinic ','contact_person'=>'thenjiwe','phone_number'=>'775864998','email_address'=>'','notes'=>'liked our prices will order soon'],
            ['user_id'=>1,'date'=>'2023-05-15','company'=>'maranatha surgery ','contact_person'=>'receptionist ','phone_number'=>'713885965','email_address'=>'','notes'=>'will revert for orders'],
            ['user_id'=>1,'date'=>'2023-05-15','company'=>'Sunningdale clinic','contact_person'=>'receptionist ','phone_number'=>'789677559','email_address'=>'','notes'=>'to get in touch when we have res box gloves'],
            ['user_id'=>1,'date'=>'2023-05-16','company'=>'divine pharmacy ','contact_person'=>'Mr chitiyo','phone_number'=>'771296392','email_address'=>'','notes'=>'to call these numbers for orders'],
            ['user_id'=>1,'date'=>'2023-05-16','company'=>'dispharm pharmacy ','contact_person'=>'sharleen','phone_number'=>'789212876','email_address'=>'','notes'=>'will try to put us in their suppliers list'],
            ['user_id'=>1,'date'=>'2023-05-16','company'=>'long-range pharmacy ','contact_person'=>'tapiwa','phone_number'=>'773870064','email_address'=>'','notes'=>'to meet I person for discussion '],
            ['user_id'=>1,'date'=>'2023-05-16','company'=>'greengrove surgery ','contact_person'=>'Sean','phone_number'=>'776948984','email_address'=>'','notes'=>'was not available got contacts'],
            ['user_id'=>1,'date'=>'2023-05-16','company'=>'msasa clinic','contact_person'=>'receptionist ','phone_number'=>'04 986 795','email_address'=>'','notes'=>'to send pricelist on WhatsApp'],
            ['user_id'=>1,'date'=>'2023-05-16','company'=>'expressmart pharmacy ','contact_person'=>'avreel ','phone_number'=>'715965000','email_address'=>'','notes'=>'to send pricelist on WhatsApp'],
            ['user_id'=>1,'date'=>'2023-05-16','company'=>'mediland pharmacy ','contact_person'=>'pharmacist','phone_number'=>'774753886','email_address'=>'','notes'=>'was busy. got contacts'],
            ['user_id'=>1,'date'=>'2023-05-16','company'=>'whitchem pharmacy ','contact_person'=>'simba','phone_number'=>'775874889','email_address'=>'','notes'=>'to send pricelist on WhatsApp '],
            ['user_id'=>1,'date'=>'2023-05-16','company'=>'quantum pharmacy ','contact_person'=>'rubbish','phone_number'=>'784228456','email_address'=>'','notes'=>'liked swabs, will order soon'],
            ['user_id'=>1,'date'=>'2023-05-17','company'=>'Greencroft pharmacy ','contact_person'=>'pharmacist','phone_number'=>'774149965','email_address'=>'','notes'=>'to send pricelist on whatsapp'],
            ['user_id'=>1,'date'=>'2023-05-17','company'=>'avonlea medical center','contact_person'=>'receptionist ','phone_number'=>'777854665','email_address'=>'','notes'=>'to send pricelist on WhatsApp '],
            ['user_id'=>1,'date'=>'2023-05-17','company'=>'carewell pharmacy ','contact_person'=>'gladman','phone_number'=>'778965359','email_address'=>'','notes'=>'to send pricelist on WhatsApp '],
            ['user_id'=>1,'date'=>'2023-05-17','company'=>'avonlea dental surgery ','contact_person'=>'receptionist ','phone_number'=>'779425635','email_address'=>'','notes'=>'will order soon'],
            ['user_id'=>1,'date'=>'2023-05-17','company'=>'santa thadeu health services','contact_person'=>'receptionist ','phone_number'=>'04 085 953','email_address'=>'','notes'=>'will need to set up appointment '],
            ['user_id'=>1,'date'=>'2023-05-17','company'=>'deliveries to cbd, greencroft and machipisa','contact_person'=>'','phone_number'=>'','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-18','company'=>'deliveries to the cbd','contact_person'=>'','phone_number'=>'','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-18','company'=>'fourthstreet pharmacy ','contact_person'=>'Mr mukura','phone_number'=>'776953999','email_address'=>'','notes'=>'will need first aid kits'],
            ['user_id'=>1,'date'=>'2023-05-18','company'=>'medicive pharmacy ','contact_person'=>'josh','phone_number'=>'786433996','email_address'=>'','notes'=>'was out of office but got his contacts'],
            ['user_id'=>1,'date'=>'2023-05-18','company'=>'guardian pharmacy ','contact_person'=>'pharmacist','phone_number'=>'771076843','email_address'=>'','notes'=>'to send pricelist on whatsapp'],
            ['user_id'=>1,'date'=>'2023-05-18','company'=>'Greenwood pharmacy ','contact_person'=>'grey','phone_number'=>'777964437','email_address'=>'','notes'=>'got contacts. Will inform me if they have orders'],
            ['user_id'=>1,'date'=>'2023-05-19','company'=>'medix pharmacy ','contact_person'=>'rubbish','phone_number'=>'719688954','email_address'=>'','notes'=>'will get back to me for sundries'],
            ['user_id'=>1,'date'=>'2023-05-19','company'=>'divine pharmacy ','contact_person'=>'pharmacist','phone_number'=>'776974347','email_address'=>'','notes'=>'will get back to me after going through catalogue '],
            ['user_id'=>1,'date'=>'2023-05-19','company'=>'Mabelreign 24hr clinic','contact_person'=>'receptionist ','phone_number'=>'782577076','email_address'=>'','notes'=>'was out of office but got contacts'],
            ['user_id'=>1,'date'=>'2023-05-19','company'=>'citimed pharmacy ','contact_person'=>'pharmacist','phone_number'=>'776996443','email_address'=>'','notes'=>'they take their stock from the pharmacy '],
            ['user_id'=>1,'date'=>'2023-05-19','company'=>'healsoft pharmacy ','contact_person'=>'patricia','phone_number'=>'712049110','email_address'=>'','notes'=>'they need those first aid kits, small'],
            ['user_id'=>1,'date'=>'2023-05-19','company'=>'mum and baby pharmacy ','contact_person'=>'mazvita','phone_number'=>'773855833','email_address'=>'','notes'=>'will see what they can get from us'],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'baines maternity clinic','contact_person'=>'buyer','phone_number'=>'','email_address'=>'skaitano@banesclinic.co.zw','notes'=>'to send email with pricelist '],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'livingston 24hr clinic','contact_person'=>'receptionist ','phone_number'=>'771632537','email_address'=>'','notes'=>'will consider buying the linen savers'],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'michael gelfand clinic','contact_person'=>'buyer','phone_number'=>'','email_address'=>'gelfclinic@gmail.com','notes'=>'to send email with pricelist '],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'samuel leon medical center','contact_person'=>'mr owen','phone_number'=>'773781991','email_address'=>'','notes'=>'will call me for order this coming week'],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'baines retail pharmacy','contact_person'=>'suzan','phone_number'=>'713694433','email_address'=>'','notes'=>'to send pricelist on whatsapp'],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'medpoint clinic','contact_person'=>'receptionist ','phone_number'=>'772805312','email_address'=>'','notes'=>'gave me numbers of the buyer'],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'providence health center','contact_person'=>'receptionist ','phone_number'=>'772234659','email_address'=>'','notes'=>'gave me numbers of the buyer'],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'baines intercare pharmacy','contact_person'=>'barbra','phone_number'=>'772902169','email_address'=>'','notes'=>'will call me back for orders'],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'baines intercare clinic','contact_person'=>'receptionist ','phone_number'=>'','email_address'=>'procurement@bainesinter','notes'=>'to send email with pricelist '],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'medpoint pharmacy','contact_person'=>'receptionist ','phone_number'=>'','email_address'=>'semenya@medpoint.co.zw','notes'=>'to send email with pricelist '],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'car servicing,errands','contact_person'=>'','phone_number'=>'','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-22','company'=>'deliveries to whitecross and first mutual pharmacies','contact_person'=>'','phone_number'=>'','email_address'=>'','notes'=>''],
            ['user_id'=>1,'date'=>'2023-05-24','company'=>'capital pharmacy','contact_person'=>'kudzi','phone_number'=>'774436346','email_address'=>'','notes'=>'will need another mortar and pestle'],
            ['user_id'=>1,'date'=>'2023-05-24','company'=>'showground medical center','contact_person'=>'receptionist ','phone_number'=>'775320953','email_address'=>'','notes'=>'will pass my numbers to the buyer'],
            ['user_id'=>1,'date'=>'2023-05-24','company'=>'showground dental clinic','contact_person'=>'receptionist ','phone_number'=>'','email_address'=>'smurozvi@gmail.com','notes'=>'to send email with pricelist'],
            ['user_id'=>1,'date'=>'2023-05-24','company'=>'showground pharmacy','contact_person'=>'patience ','phone_number'=>'778222779','email_address'=>'','notes'=>'will place order soon'],
            ['user_id'=>1,'date'=>'2023-05-24','company'=>'domboshava medical center','contact_person'=>'sam','phone_number'=>'777054247','email_address'=>'','notes'=>'will place order soon'],
            ['user_id'=>1,'date'=>'2023-05-24','company'=>'domboshava pharmacy','contact_person'=>'rukudzo mhako','phone_number'=>'771614171','email_address'=>'','notes'=>'will get in touch after salary week'],
            ['user_id'=>1,'date'=>'2023-05-24','company'=>'domboshava medclinic','contact_person'=>'ropafadzo kausiyo','phone_number'=>'780003923','email_address'=>'','notes'=>'to pass my numbers to the buyer'],
            ['user_id'=>1,'date'=>'2023-05-26','company'=>'dr hove','contact_person'=>'dr hove','phone_number'=>'789791689','email_address'=>'','notes'=>'to send reminders on whatsapp'],
            ['user_id'=>1,'date'=>'2023-05-26','company'=>'dr chigaru','contact_person'=>'receptionist ','phone_number'=>'771928968','email_address'=>'','notes'=>'gave me the doctors numbers'],
            ['user_id'=>1,'date'=>'2023-05-26','company'=>'seke north clinic','contact_person'=>'receptionist ','phone_number'=>'775401905','email_address'=>'','notes'=>'got contacts of the pharmacist'],
            ['user_id'=>1,'date'=>'2023-05-26','company'=>'clinimed pharmacy','contact_person'=>'pharmacist','phone_number'=>'777119347','email_address'=>'','notes'=>'will place order soon'],
            ['user_id'=>1,'date'=>'2023-05-26','company'=>'tactyfin pharmacy','contact_person'=>'ms mudzimurema','phone_number'=>'774176755','email_address'=>'','notes'=>'will need a thermometer'],
            ['user_id'=>1,'date'=>'2023-05-26','company'=>'nu makoni pharmacy','contact_person'=>'tatenda','phone_number'=>'773403701','email_address'=>'','notes'=>'needs sundries, needs better prices'],
            ['user_id'=>1,'date'=>'2023-05-26','company'=>'family health pharmacy','contact_person'=>'takudzwa mutero','phone_number'=>'776923538','email_address'=>'','notes'=>'will keep in touch'],
            ['user_id'=>1,'date'=>'2023-05-26','company'=>'tk pharmacy','contact_person'=>'pharmacist','phone_number'=>'719800230','email_address'=>'','notes'=>'needs better prices on gloves'],
            ['user_id'=>1,'date'=>'2023-05-26','company'=>'aloecare pharmacy','contact_person'=>'renae shamhu','phone_number'=>'785702418','email_address'=>'','notes'=>'will keep in touch']
        ];
        foreach ($sales as $sale){
            SalesCallSummary::query()->create($sale);
        }
    }
}
