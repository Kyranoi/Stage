CREATE TABLE Winkel (
    Winkelcode int NOT NULL AUTO_INCREMENT,
    Winkelnaam varchar (255) NOT NULL,
    Winkeladres varchar (255) NOT NULL,
    Winkelpostcode varchar (255) NOT NULL,
    Vestegingsplaats varchar (255) NOT NULL,
    Telefoonnummer varchar (255) NOT NULL,
    PRIMARY KEY (Winkelcode)
    );

CREATE TABLE Medewerker (
    Medewerkerscode int NOT NULL AUTO_INCREMENT,
    Voorletters varchar (255) NOT NULL,
    Voorvoegsels varchar (255) NOT NULL,
    Achternaam varchar (255) NOT NULL,
    Gebruikersnaam varchar (255) NOT NULL,
    Wachtwoord varchar (255) NOT NULL,
    PRIMARY KEY (Medewerkerscode)	
    );

CREATE TABLE Klant (
    Klantcode int NOT NULL AUTO_INCREMENT,
	Voorletters varchar (255) NOT NULL,
    Tussenvoegsels varchar (255) NOT NULL,
    Achternaam varchar (255) NOT NULL,
    Adres varchar (255) NOT NULL,
    Postcode varchar (255) NOT NULL,
    Woonplaats varchar (255) NOT NULL,
    Geboortedatum varchar (255) NOT NULL,
    Gebruiksersnaam varchar (255) NOT NULL,
    Wachtwoord varchar (255) NOT NULL,
    PRIMARY KEY (Klantcode)
    );

CREATE TABLE Factuur ( 
    Factuurnummer int NOT NULL AUTO_INCREMENT,
    Factuurdatum varchar (255) NOT NULL,
    Klantcode int NOT NULL, 
    PRIMARY KEY (Factuurnummer),
    FOREIGN KEY (Klantcode) REFERENCES klant(Klantcode)
    );

CREATE TABLE Artikel (
    Artikelcode int NOT NULL AUTO_INCREMENT,
    Artikel varchar (255) NOT NULL,
    Prijs varchar (255) NOT NULL,
    PRIMARY KEY (Artikelcode)
    );

CREATE TABLE Factuurregel (
    Factuurnummer int NOT NULL,
    Artikelcode int NOT NULL,
    Aantal varchar (255) NOT NULL,
    Prijs varchar (255) NOT NULL,
    FOREIGN KEY (Factuurnummer) REFERENCES factuur(Factuurnummer),
    FOREIGN KEY (Artikelcode) REFERENCES artikel(Artikelcode)
    );

CREATE TABLE Medewerker (
    Medewerkerscode int NOT NULL AUTO_INCREMENT,
	Voorletters varchar (255) NOT NULL,
    Voorvoegsels varchar (255) NOT NULL,
    Achternaam varchar (255) NOT NULL,
    Gebruiksersnaam varchar (255) NOT NULL,
    Wachtwoord varchar (255) NOT NULL,
    PRIMARY KEY (Medewerkerscode)
    );

CREATE TABLE Bestelling (
    Artikelcode int NOT NULL,
    Winkelcode int NOT NULL,
    Aantal varchar (255) NOT NULL,
    Klantcode int NOT NULL,
    Medewerkerscode int NOT NULL,
    Afgehaald varchar (255) NOT NULL,
    FOREIGN KEY (Artikelcode) REFERENCES artikel (Artikelcode),
    FOREIGN KEY (Winkelcode) REFERENCES winkel (Winkelcode),
    FOREIGN KEY (Klantcode) REFERENCES klant (Klantcode),
    FOREIGN KEY (Medewerkerscode) REFERENCES medewerker (Medewerkerscode)
    );



