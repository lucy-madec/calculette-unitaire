# Calculette Unitaire - Tests PHPUnit & Jest 💪

## 🎯 Objectif

Réaliser une série de tests unitaires pour deux interfaces de calculatrice :
- Une en PHP avec PHPUnit
- Une en JavaScript avec Jest

---

## ⚙️ Structure du projet

```
calculette-unitaire/
├── calculator.php
├── calculator.js
├── calculator.css
├── Calculator_PHP.php
├── Calculator_JS.html
├── tests/
│   ├── CalculatorTest.php
│   └── calculator.test.js
├── images/
└── README.md
```

---

## ✅ Partie PHP - PHPUnit

### 🔸 Test d’addition

![Addition PHP](images/test-php-addition.png)

### 🔸 Autres opérations

![Opérations PHP](images/test-php-operations.png)

### 🔸 Cas d’erreurs

![Erreurs PHP](images/test-php-erreurs.png)

---

## ✅ Partie JS - Jest

### 🔸 Test d’addition

![Addition JS](images/test-js-addition.png)

### 🔸 Tests complets

![Tests JS complets](images/test-js-complet.png)

---

## 🔍 Tests réalisés

### PHP
- [x] Addition
- [x] Soustraction
- [x] Multiplication
- [x] Division
- [x] Division par zéro
- [x] Chaîne vide

### JavaScript
- [x] Addition
- [x] Soustraction
- [x] Multiplication
- [x] Division
- [x] Priorité des opérations
- [x] Parenthèses
- [x] Expression invalide
- [x] Expression vide

---

## 🚀 Commandes utiles

### PHP (via Composer)
```bash
composer test
```

### JavaScript (via Jest)
```bash
npm test
```

---

## 🧠 Compétences acquises

- Utilisation de PHPUnit avec Composer
- Utilisation de Jest avec Node.js
- Structuration claire des fichiers de test
- Validation des erreurs et cas limites
- Documentation en Markdown avec captures d’écran