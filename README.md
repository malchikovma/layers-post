# Пример проекта DDD

Для статьи [Разделяем программу на слои](https://malchikovma.ru/post/2024-10-20-layers/).

Cтруктура приложения:

```
.
├── codeception.yml
├── commands
│   └── CountryController.php
├── controllers
│   └── CountryController.php
├── modules
│   └── Countries
│       ├── Application
│       │   └── CountryApplicationService.php
│       ├── Domain
│       │   └── Country
│       │       ├── Country.php
│       │       └── CountryRepositoryInterface.php
│       └── Infrastructure
│           └── Country
│               └── CountryRepository.php
└── yii
```

Основано на [yiisoft/yii2-app-basic](https://github.com/yiisoft/yii2-app-basic).
