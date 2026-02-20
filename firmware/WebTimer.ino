// WebTimer.ino - ESP8266 Firmware Code
#include <ESP8266WiFi.h>

const char* ssid = "Your_SSID"; // Replace with your WiFi SSID
const char* password = "Your_PASSWORD"; // Replace with your WiFi Password

void setup() {
    Serial.begin(115200);
    WiFi.begin(ssid, password);

    while (WiFi.status() != WL_CONNECTED) {
        delay(1000);
        Serial.println("Connecting to WiFi...");
    }

    Serial.println("Connected to WiFi");
}

void loop() {
    // Your main code here
    delay(1000);
}
