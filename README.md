# PlanetaGracza Wordpress Theme

Motyw dla strony Planetagracza.pl

## Instalacja

Zainstaluj dependencje 
```bash
npm install
```

### Projekt używa gulpa do:
- optymalizacji obrazków
- minifikacji plików css / js
- konwersacji lessa do cssa
- automatycznego tworzenia nowych wersji styli css oraz skryptów js ( dodawanie hashy do nazwy plików i automatyczne wstrzykiwanie nazw do headera / stopki)

## Odpal gulpa

```bash
npm start
```

lub

```bash
gulp
```


### Development

Wszystkie pliki są w folderze src, gulp zadba o to aby przenieść je do odpowiednich folderów aby motyw dobrze działał

Sporo zmian trzeba wrzucać przez importowanie / exportowanie ( ze względu na nowe custom fieldsy, post type`y, kategorie, tagi itp) wtyczką All-in-One WP Migration 
Przed generowaniem paczki polecam usunać node_modules/


#### Hasło wp-admin-> admin : Planetagracza2020

## Produkcja
Przed wrzuceniem na serwer 

Zbuduj wszystkie pliki

```bash
gulp build
```
