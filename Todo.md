# MVP
## Ziel Definition

Ziel ist es eine minimale Anwendung zu entwickeln, welche folgende Funktionen abbildet:
 - Den Warenbestand aus der Datenbank anzeigen
 - Eine Ware dem Warenbestand hinzufügen
   - dabei werden id und datum automatisch vergeben

## Requirements
 - Datenbankstruktur welche den MVP abdeckt
   - 1 Tabelle mit dem Name "waren"
    - id
    - kategory
    - artikel_nummer
    - beschreibung
    - datetime
  ```
CREATE TABLE waren (
                       id INTEGER NOT NULL PRIMARY KEY autoincrement,
                       kategory varchar(255),
                       artikel_nummer varchar(255),
                       beschreibung varchar(255),
                       datum DATETIME
);
```

html
     mainpage
        verlinkungen zu anderen seiten

views
     überarbeiten: verbindung von classen und datenbank_datensätze anbinden
        Geräte
        monitorkabel
        netzwerkabel
        usb kabel

routes
     produkte
        Geräte
        monitorkabel
        netzwerkabel
        usb kabel

migrationen
    Kundenerstellung

controller
     USBkabel
     netzwerkabel
     monitorkabel

seeder
     Geräte
     monitorkabel 
     netzwerkabel
     usb kabel
     mitarbeiter
 

