# Shopware Checkout Improver

Modernisiert den Checkout in Shopware 6 mit:

- 🚚 **Fortschrittsbalken für kostenlosen Versand** – animiert, konfigurierbar, mit Erfolgsanzeige
- 🎨 **Moderne Design-Optionen** – Gradient, CSS Custom Properties, Smooth Transitions
- 🎫 **Gutschein-Feld** ein-/ausblendbar (Off-Canvas & Warenkorb)
- 🏷️ **Artikelnummern-Feld** ein-/ausblendbar (Warenkorb)
- 🌍 **DE + EN Snippets** inklusive

## Voraussetzungen

- Shopware 6.6.0 oder höher
- PHP 8.1+

## Installation

### Option 1: ZIP-Upload (empfohlen)

1. Diese ZIP-Datei herunterladen
2. In der Shopware-Administration: **Einstellungen → Erweiterungen**
3. Auf **„Erweiterung hochladen"** klicken
4. Die ZIP-Datei auswählen
5. **Installieren & Aktivieren**

### Option 2: Manuell

```bash
# Plugin in das Projekt kopieren
cp -r ShopwareCheckoutImprover custom/plugins/

# Konsole ausführen
bin/console plugin:refresh
bin/console plugin:install --activate ShopwareCheckoutImprover
```

### Option 3: Composer

```bash
composer require markus/shopwarecheckoutimprover
bin/console plugin:refresh
bin/console plugin:install --activate ShopwareCheckoutImprover
```

## Konfiguration

Nach der Installation findest du die Einstellungen unter:

**Einstellungen → Shop → Shopware Checkout Improver**

### Fortschrittsbalken

| Einstellung | Beschreibung |
|---|---|
| Im Off-Canvas-Warenkorb anzeigen | Balken im Seitenwagen ein/aus |
| Im Warenkorb anzeigen | Balken auf der Warenkorbseite ein/aus |
| Hintergrundfarbe | Farbe der Balken-Hintergrundfläche |
| Füllfarbe | Farbe des Fortschritts |
| Erfolgfarbe | Farbe bei Erreichen des Ziels |
| Eckenradius | Abgerundete Kanten (0 = scharf) |
| Animierte Streifen | Laufende Streifen-Animation |
| Icon | Truck, Rocket, Gift, Star oder keins |
| Text bis Ziel erreicht | Snippet mit `%priceDifference%` Platzhalter |
| Erfolgsmeldung anzeigen | Grüne Erfolgskarte bei Erreichen |
| Text bei Erreichen | Snippet für die Erfolgsanzeige |

### Gutschein- & Artikelnummern-Feld

Einfach ein-/ausblenden je nach Bedarf.

## Versandkosten-Konfiguration

Damit der Fortschrittsbalken funktioniert, muss die Versandmethode eine **Preis-Matrix nach Warenkorbwert** haben:

1. **Einstellungen → Shop → Versand** → Versandmethode öffnen
2. Bereich **„Unbegrenzt"** wählen
3. **„Warenkorbpreis"** als Preis-Matrix wählen
4. Preisstufe 1: z.B. `0 – 38,99 €` → Versandkosten `3,99 €`
5. Preisstufe 2: z.B. `39,00 € – ∞` → Versandkosten `0,00 €`
6. **Speichern**

Der Balken berechnet dann automatisch, wie viel der Kunde noch kaufen muss.

## Theme neu kompilieren

Nach Änderung der Farben/Radius:

1. **Inhalte → Themes**
2. Aktives Theme auswählen
3. **Speichern**

## Verfügbare Snippets

```
checkout.improver.freeShipping.headline
checkout.improver.freeShipping.textUntilIsReached
checkout.improver.freeShipping.isReached
```

## Inspiration

Dieses Plugin wurde inspiriert von [SschreierImprovingCheckout](https://github.com/sschreier/SschreierImprovingCheckout) von Sebastian Schreier. Wir haben das Konzept modernisiert und erweitert.

## Lizenz

MIT
