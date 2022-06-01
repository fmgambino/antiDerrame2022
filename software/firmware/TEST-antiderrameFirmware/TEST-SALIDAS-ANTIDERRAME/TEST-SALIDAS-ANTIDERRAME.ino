int relay1 = 13;
int relay2 = 9;
int mosfet1 = 10;
int mosfet2 = 12;
int estado =0;
void setup() {
  // put your setup code here, to run once:
  pinMode(relay1, OUTPUT);
  pinMode(relay2, OUTPUT);
  pinMode(mosfet1, OUTPUT);
  pinMode(mosfet2, OUTPUT);
  
}

void loop() {
  // put your main code here, to run repeatedly:
    digitalWrite(relay1,LOW);
    delay(500);
    digitalWrite(relay2,LOW);
    delay(500);
    digitalWrite(mosfet1,LOW);
    delay(500);
    digitalWrite(mosfet2,LOW);    
    delay(500);
    digitalWrite(relay1,HIGH);
    delay(500);
    digitalWrite(relay2,HIGH);
    delay(500);
    digitalWrite(mosfet1,HIGH);
    delay(500);
    digitalWrite(mosfet2,HIGH);
    delay(500);

   
}
