# Mein PHP-Projekt

Dies ist ein einfaches Webprojekt, das ich nach der Absolvierung eines PHP-Kurses selbstständig entwickelt habe. Es nutzt grundlegende PHP-Funktionalitäten, um eine minimale Sicherheit zu gewährleisten, und beinhaltet HTML und CSS für die Darstellung.

## Funktionen
- **Datenbankanbindung**: Speichert und lädt Einträge aus einer Datenbank.
- **Eingabeformular**: Nutzer können Name, Titel und einen Eintrag eingeben und absenden.
- **Blog-Einträge**: Gespeicherte Einträge werden als Liste unterhalb des Formulars angezeigt.
- **POST-Requests**: Verhindert die Übertragung sensibler Daten über GET-Requests.
- **Pagination**: Wenn mehrere Einträge vorhanden sind, wird eine Seitennummerierung generiert.

## Technologien
- **PHP**: Serverseitige Verarbeitung und Datenbankanbindung.
- **MySQL**: Speicherung der Blog-Einträge.
- **HTML & CSS**: Gestaltung der Benutzeroberfläche.

## Installation
1. **XAMPP installieren:**
   - Lade XAMPP von der offiziellen Webseite herunter: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
   - Installiere und starte Apache und MySQL über das XAMPP Control Panel.
2. **Datenbank einrichten:**
   - Öffne phpMyAdmin über XAMPP.
   - Erstelle eine neue MySQL-Datenbank.
   - Importiere die enthaltene `database.sql`-Datei (falls vorhanden).
3. **Konfiguration:**
   - Die `config.php`-Datei anpassen (z. B. Datenbank-Zugangsdaten).
4. **Projekt starten:**
   - Speichere die Projektdateien im `htdocs`-Verzeichnis von XAMPP.
   - Rufe das Projekt über `http://localhost/dein-projektordner` auf.

## Nutzung
- Die Webseite aufrufen und einen Eintrag mit Namen und Titel verfassen.
- Der Eintrag wird gespeichert und unterhalb angezeigt.
- Bei vielen Einträgen wird eine Seitennavigation generiert.

## Screenshots
*(Hier können Screenshots der Webseite eingefügt werden.)*

## Erweiterungsmöglichkeiten
- **Login-System** für authentifizierte Benutzer.
- **Einträge bearbeiten oder löschen**.
- **Erweiterte Sicherheitsmechanismen** wie Prepared Statements oder CSRF-Schutz.

## Lizenz
Dieses Projekt steht unter der **MIT-Lizenz**. 

Die MIT-Lizenz erlaubt es, den Code frei zu nutzen, zu modifizieren und zu verbreiten, solange der ursprüngliche Copyright-Hinweis erhalten bleibt. Weitere Informationen: [https://opensource.org/licenses/MIT](https://opensource.org/licenses/MIT)

---
[ENGLISH VERSION]
# My PHP Project

This is a simple web project that I developed independently after completing a PHP course. It uses basic PHP functionalities to ensure minimal security and includes HTML and CSS for the layout.

## Features
- **Database connection**: Stores and retrieves entries from a database.
- **Input form**: Users can enter their name, title, and a post.
- **Blog entries**: Saved entries are displayed in a list below the form.
- **POST requests**: Prevents sensitive data transmission via GET requests.
- **Pagination**: If multiple entries exist, a page numbering system is generated.

## Technologies
- **PHP**: Server-side processing and database interaction.
- **MySQL**: Stores blog entries.
- **HTML & CSS**: UI design.

## Installation
1. **Install XAMPP:**
   - Download XAMPP from the official website: [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html)
   - Install and start Apache and MySQL using the XAMPP Control Panel.
2. **Set up the database:**
   - Open phpMyAdmin via XAMPP.
   - Create a new MySQL database.
   - Import the included `database.sql` file (if available).
3. **Configuration:**
   - Adjust the `config.php` file (e.g., database credentials).
4. **Start the project:**
   - Save project files in the `htdocs` directory of XAMPP.
   - Access the project via `http://localhost/your-project-folder`.

## Usage
- Open the website and create an entry with a name and title.
- The entry is saved and displayed below.
- If multiple entries exist, pagination is generated.

## Screenshots
*(You can add screenshots of the website here.)*

## Future Enhancements
- **Login system** for authenticated users.
- **Edit or delete entries**.
- **Enhanced security measures** like prepared statements or CSRF protection.

## License
This project is licensed under the **MIT License**. 

The MIT License allows free use, modification, and distribution of the code as long as the original copyright notice is retained. More information: [https://opensource.org/licenses/MIT](https://opensource.org/licenses/MIT)

