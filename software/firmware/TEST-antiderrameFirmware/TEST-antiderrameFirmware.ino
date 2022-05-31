//#include <Wire.h>   // incluye libreria para interfaz I2C
//#include <RTClib.h>   // incluye libreria para el manejo del modulo RTC
//#include <OneWire.h>

//#include <DallasTemperature.h>

//RTC_DS3231 rtc;     // crea objeto del tipo RTC_DS3231

//ENTRADAS

int bWiFi = 23;

int sCap1 =25 ;
int sCap2 =26 ;
int sCap3 =27 ;
float sOptico =34 ;
//float sTemp = 35;
const int oneWireBus = 35;
//OneWire oneWire(oneWireBus);
//DallasTemperature sensors (&oneWire);

int sAmp1 = 32; // Entrada 4-20 mA
int sAmp2 = 33; // Entrada 4-20 mA

//SALIDAS

int relay1 = 13;
int relay2 = 9;
int mosfet1 = 10;
int mosfet2 = 11;



//************************************
//***** DECLARACION FUNCIONES ********
//************************************

//void rtcEG();

void Cap1();
void Cap2();
void Cap3();

void Optico();
void Temp();

void Amp1();
void Amp2();

void Rele1();
void Rele2();

void MosFet1();
void MosFet2();


void setup () {
 Serial.begin(115200);    // inicializa comunicacion serie a 9600 bps
// sensors.begin();
 Serial.println("DHTxx test by EG!");

 pinMode(sCap1, INPUT);
 pinMode(sCap2, INPUT);
 pinMode(sCap3, INPUT);

 pinMode(sOptico, INPUT);


 pinMode(relay1, OUTPUT);
 pinMode(relay2, OUTPUT);

 pinMode(mosfet1, OUTPUT);
 pinMode(mosfet2, OUTPUT);

/*
 if (! rtc.begin()) {       // si falla la inicializacion del modulo
 Serial.println("Modulo RTC no encontrado !");  // muestra mensaje de error
 while (1);         // bucle infinito que detiene ejecucion del programa
 }
 //rtc.adjust(DateTime(__DATE__, __TIME__));  // funcion que permite establecer fecha y horario
            // al momento de la compilacion. Comentar esta linea
            // y volver a subir el codigo para funcionamiento normal
  */
}           

void loop () {
 // Wait a few seconds between measurements.
   delay(2000);

   //rtcEG();


   Serial.println("LECTURAS ENTRADAS ");

  Cap1();
  Cap2();
  Cap3();

  Optico();
  Temp();

  Amp1();
  Amp2();

   digitalWrite(relay1,HIGH);
   delay(500);
   digitalWrite(relay1,LOW);
   delay(500);

   digitalWrite(relay2,LOW);
   delay(500);
   digitalWrite(relay2,LOW);
   delay(500);

   digitalWrite(mosfet1,LOW);
   delay(500);
   digitalWrite(mosfet1,LOW);
   delay(500);

   digitalWrite(mosfet2,LOW);
   delay(500);
   digitalWrite(mosfet2,LOW);
   delay(500);
}
/*
void rtcEG(){

 DateTime fecha = rtc.now();      // funcion que devuelve fecha y horario en formato
            // DateTime y asigna a variable fecha
 Serial.print(fecha.day());     // funcion que obtiene el dia de la fecha completa
 Serial.print("/");       // caracter barra como separador
 Serial.print(fecha.month());     // funcion que obtiene el mes de la fecha completa
 Serial.print("/");       // caracter barra como separador
 Serial.print(fecha.year());      // funcion que obtiene el año de la fecha completa
 Serial.print(" ");       // caracter espacio en blanco como separador
 Serial.print(fecha.hour());      // funcion que obtiene la hora de la fecha completa
 Serial.print(":");       // caracter dos puntos como separador
 Serial.print(fecha.minute());      // funcion que obtiene los minutos de la fecha completa
 Serial.print(":");       // caracter dos puntos como separador
 Serial.println(fecha.second());    // funcion que obtiene los segundos de la fecha completa
 
 delay(1000);         // demora de 1 segundo

}
*/
//SENSOR OPTICO 1 - NIVEL BAJO
void Cap1(){
  int estadoCap1=0;
  estadoCap1 = digitalRead(sCap1);

  if (estadoCap1 == LOW) {
    // turn LED on:
    Serial.println("NIVEL-BAJO!!! ");
    delay(10);
  }

}

void Cap2(){
  int estadoCap2=0;

  estadoCap2 = digitalRead(sCap2);

  if (estadoCap2 == LOW) {
    // turn LED on:
    Serial.println("NIVEL-MEDIO!!! ");
    delay(10);
  }
}

void Cap3(){
    int estadoCap3=0;
    estadoCap3 = digitalRead(sCap3);

  if (estadoCap3 == LOW) {
    // turn LED on:
    Serial.println("NIVEL-ALTO!!! ");
    delay(10);
  }
}

void Optico(){
}

void Temp(){
    //Leer la temperatura
/*
  Serial.print("Mandando comandos a los sensores ");
  sensors.requestTemperatures();
  //Lectura en grados celsius

  float temperatureC = sensors.getTempCByIndex(0);

 //Escribir los datos en el monitor de serie

  Serial.print("Temperatura sensor : ");
  Serial.print(temperatureC);
  Serial.println("°C");

  // Lectura de la temperatura cada 100 ms

  delay(100);
  */
}

void Amp1(){
}

void Amp2(){
}
