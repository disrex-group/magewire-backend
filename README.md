# MageWire Backend module for Magento 2

**Add Magewire functionality to the Magento Admin Panel. Built on top of the Magewire core with
RequireJS support.**

> ⚠️ This project is in testing phase. Use at your own risk. Want to contribute? You're welcome!

## ✅ Installation

Use the command below to automatically install everything (including patch for Magewire core):

```bash
composer require disrex/magewire-backend
```

> Note: this module automatically adds the required patch to `magewirephp/magewire`, including the required
> dependency `composer-patches`.

Then, enable the modules:

```bash
bin/magento module:enable Magewirephp_Magewire Magewirephp_MagewireRequireJs Disrex_MagewireBackend
```

Magewire in the backend will only load when a component uses it. You can recognize this by loaded
JavaScript files with the name `magewire`.

---

## 🔧 Auto-Patcher Included

This module includes the needed patches for Magewire to work in the backend, equipped with an **auto-patcher module** (`disrex/magewire-backend-patcher`: `^1.0`) so you have **no worries about which files to patch and where**.

When you run `composer install` or `composer update`, you'll see these success messages:

![Auto-Patcher CLI Output](https://files.disrex.nl/github/magewire-backend/cli-show.png)

This means the patches have been successfully applied and Magewire is ready for backend use! See the [auto-patcher repository](https://github.com/disrex-group/magewire-backend-patcher) for more technical details.

---

## 🧪 Example Component

Want to test if everything works? Use an example module like this `Hello World` component:

```bash
composer config repositories.yireo-training vcs git@github.com:yireo-training/YireoTraining_MageWireBackendHelloWorld.git
composer require yireo-training/magento2-magewire-backend-hello-world:@dev
bin/magento module:enable YireoTraining_MageWireBackendHelloWorld
```

Or try:

- [Yireo_MageWireBackendConfigSearch](https://github.com/yireo/Yireo_MageWireBackendConfigSearch)

---

## 🧠 Tip

Want to build your own component? Add a `block` via XML in the admin with a `magewire` argument that refers to
your own Magewire component class.

---

## 👨‍💻 Support

Have questions or want to collaborate? Open a discussion
on [GitHub Discussions](https://github.com/disrex/magewire-backend/discussions).

---

## 🙏 Acknowledgments

This project is forked from [michielgerritsen/magewire-backend](https://github.com/michielgerritsen/magewire-backend).

Special thanks to:
- [@jissereitsma](https://github.com/jissereitsma) (Jisse Reitsma)
- [@michielgerritsen](https://github.com/michielgerritsen) (Michiel Gerritsen)

<img src="https://files.disrex.nl/disrex-character.gif?t=572693425" alt="Disrex T-Rex Mascot Waving" width="150">

---

## Sponsored by

<a href="https://www.disrex.nl/">
  <picture>
    <source srcset="https://files.disrex.nl/logos/logo-w.png" media="(prefers-color-scheme: dark)">
    <img src="https://files.disrex.nl/logos/logo-b.png" alt="Disrex Logo" width="200">
  </picture>
</a>

