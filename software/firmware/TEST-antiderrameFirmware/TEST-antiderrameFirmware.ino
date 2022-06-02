

// ENTRADAS

int bWiFi = 23;

int sCap1   = 25;
int sCap2   = 26;
int sCap3   = 27;
int sOptico = 34;
int sTemp   = 35;

int sAmp1 = 32; // Entrada 4-20 mA
int sAmp2 = 33; // Entrada 4-20 mA

// SALIDAS

int relay1  = 13;
int relay2  = 9;
int mosfet1 = 10;
int mosfet2 = 12;


int estadoCap1 = 0;
int estadoCap2 = 0;
int estadoCap3 = 0;
//************************************
//***** DECLARACION FUNCIONES ********
//************************************

void Cap1();
void Cap2();
void Cap3();

void Optico();
void Temp();

void Amp1(); // entrada 4-20ma
void Amp2(); // entrada 4-20ma

// funciones de salidas
void Rele1();
void Rele2();

void MosFet1();
void MosFet2();


void setup()
{
  Serial.begin(115200); // inicializa comunicacion serie a 9600 bps
  Serial.println("inicio");

  pinMode(sCap1, INPUT);
  pinMode(sCap2, INPUT);
  pinMode(sCap3, INPUT);

  pinMode(relay1, OUTPUT);
  pinMode(relay2, OUTPUT);
  pinMode(mosfet1, OUTPUT);
  pinMode(mosfet2, OUTPUT);

  digitalWrite(relay1, LOW);
  digitalWrite(relay2, LOW);
  digitalWrite(mosfet1, LOW);
  digitalWrite(mosfet2, LOW);
}

void loop()
{
  // Wait a few seconds between measurements.
  delay(2000);

  Serial.println("LECTURAS ENTRADAS ");

  Cap1();
  Cap2();
  Cap3();

  Optico();
  Temp();

  Amp1();
  Amp2();
 
}

// SENSOR OPTICO 1 - NIVEL BAJO
void Cap1()
{  
  estadoCap1 = digitalRead(sCap1);
  if (estadoCap1 == HIGH)
  {
    // turn LED on:
    Serial.println("cap 1 activado ");
    delay(10);
    digitalWrite(relay1, HIGH);  
  }
  else{
    Serial.println("cap 1 Apagado ");
    digitalWrite(relay1, LOW);
    }
}

void Cap2()
{
  
  estadoCap2 = digitalRead(sCap2);
  if (estadoCap2 == HIGH)
  {
    // turn LED on:
    Serial.println("cap 2 activado ");
    digitalWrite(relay2, HIGH);  
  }
  else{
    Serial.println("cap 2 Apagado ");
    digitalWrite(relay2, LOW);
    }
}

void Cap3()
{
  
  estadoCap3 = digitalRead(sCap3);
  if (estadoCap3 == HIGH)
  {
    // turn LED on:
    Serial.println("cap 3 activado ");
    digitalWrite(mosfet1, HIGH);
  }
  else{
    Serial.println("cap 3 Apagado ");
    digitalWrite(mosfet1, LOW);
    }
}

void Optico()
{
  Serial.print("Valor Sensor Optico     : ");
  Serial.println(analogRead(sOptico));
  float volts = analogRead(sOptico)*(3/4095);  
  Serial.println(analogRead(volts));
}

void Temp()
{
  Serial.print("Valor Sensor Temperatura: ");
  Serial.println(analogRead(sTemp));
}

void Amp1()
{
}

void Amp2()
{
}
