# MageWire Backend module for Magento 2

**Voeg Magewire-functionaliteit toe aan de Magento Admin Panel. Gebouwd bovenop de Magewire core met
RequireJS-ondersteuning.**

> ⚠️ Dit project is in actieve ontwikkeling. Gebruik is op eigen risico. Wil je bijdragen? Je bent welkom!

---

## ✅ Installatie

Gebruik onderstaande opdracht om alles automatisch te installeren (inclusief patch voor Magewire core):

```bash
composer require disrex/magewire-backend
```

> Let op: deze module voegt automatisch de benodigde patch toe aan `magewirephp/magewire`, inclusief de benodigde
> dependency `composer-patches`.

Daarna, activeer de modules:

```bash
bin/magento module:enable Magewirephp_Magewire Magewirephp_MagewireRequireJs Disrex_MagewireBackend
```

Magewire in de backend wordt pas geladen zodra er een component gebruik van maakt. Je kunt dit herkennen aan geladen
JavaScript-bestanden met de naam `magewire`.

---

## 🧪 Voorbeeldcomponent

Wil je testen of alles werkt? Gebruik dan een voorbeeldmodule zoals deze `Hello World` component:

```bash
composer config repositories.yireo-training vcs git@github.com:yireo-training/YireoTraining_MageWireBackendHelloWorld.git
composer require yireo-training/magento2-magewire-backend-hello-world:@dev
bin/magento module:enable YireoTraining_MageWireBackendHelloWorld
```

Of probeer:

- [Yireo_MageWireBackendConfigSearch](https://github.com/yireo/Yireo_MageWireBackendConfigSearch)

---

## 🧠 Tip

Wil je zelf een component bouwen? Voeg een `block` toe via XML in de admin met een `magewire`-argument dat verwijst naar
je eigen Magewire-component class.

---

## 👨‍💻 Ondersteuning

Heb je vragen of wil je meewerken? Open een discussie
op [GitHub Discussions](https://github.com/disrex/magewire-backend/discussions).
