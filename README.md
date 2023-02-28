# Въведение

Това хранилище е **втора част** от пъзела, който ви е нужен, за да сглобите проекта.

Приложението, което е поместено в това хранилище, се базира на [Laravel PHP Framework](https://laravel.com/) и отговаря за контрола и предоставянето на информация към [Nuxt 3 приложението](https://github.com/placesbg/frontend-nuxt).

Ето обяснение за какво точно се използва:

1. Извлича статичното съдържание за категориите, туристическите райони и забележителностите от хранилището [static-contents](https://github.com/placesbg/static-contents) и го импортира в базата данни.
1. Предоставя публични API endpoints на [Nuxt 3 приложението](https://github.com/placesbg/frontend-nuxt), така че то да може да чете, създава и записва съдържание в базата данни. Въпросните API endpoints касаят основно потребителската функционалност на сайта.

---

## Хранилища

1. Част първа - [Статично съдържание](https://github.com/placesbg/static-contents) за забележителностите
1. Част втора - [Laravel](https://github.com/placesbg/backend-laravel) за административен панел и REST API
1. Част трета - [Nuxt 3](https://github.com/placesbg/frontend-nuxt) за публичната част на сайта

## Технологии

Това са технологиите, които са съчетани, за да се изгради административния панел и публичното REST API.

### Server & Building
- [Laravel Sail](https://packagist.org/packages/laravel/sail)
- [Vite](https://npmjs.com/package/vite)

### Languages
- [PHP](https://www.php.net/)
- [TypeScript](https://npmjs.com/package/typescript)

### Frameworks
- [Laravel](https://packagist.org/packages/laravel/framework)

### Authentication
- [Laravel Sanctum](https://packagist.org/packages/laravel/sanctum)

### Styles
- [SASS](https://npmjs.com/package/sass)
- [PostCSS](https://www.npmjs.com/package/postcss)
- [Autoprefixer](https://www.npmjs.com/package/autoprefixer)
- [Browserslist](https://www.npmjs.com/package/browserslist)

### Linters & Formatters
- [Laravel Pint](https://packagist.org/packages/laravel/pint)
- [ESlint](https://npmjs.com/package/eslint)
- [Prettier](https://npmjs.com/package/prettier)
- [Stylelint](https://npmjs.com/package/stylelint)

### Tests
- [Laravel Dusk](https://packagist.org/packages/laravel/dusk)
- [Pest](https://packagist.org/packages/pestphp/pest)
- [PHP Unit](https://packagist.org/packages/phpunit/phpunit)

### Git Hooks
- [Husky](https://npmjs.com/package/husky)
- [lint-staged](https://npmjs.com/package/lint-staged)

---

## Искате да допринесете?

Този проект е управляван изцяло от доброволци. Зад него не стои компания, която да го разработва и финансира. Ако смятате, че има какво да се промени към по-добро и имате желание да помогнете, ето няколко направления, в които можете да го направите.

Цялата комуникация се извършва чрез нашия [Discord сървър](https://discord.gg/NMRjZ4FdPs), така че трябва да бъдете там, за да проследите процесите.

1. **Исторически текст за забележителност** - използвайте канал `#landmarks`, за да сигнализирате, ако има неточности в текстовете на забележителностите или директно ги променете, както е описано в [Наръчника за текстовете](https://github.com/placesbg/static-contents/blob/main/.github/CONTRIBUTING.md)
1. **Разработка** - прочетете нашите наръчници на доброволеца в [Laravel хранилището](https://github.com/placesbg/backend-laravel/blob/main/.github/CONTRIBUTING.md) или в [Nuxt 3 хранилището](https://github.com/placesbg/frontend-nuxt/blob/main/.github/CONTRIBUTING.md) и използвайте каналите `#frontend` и `#backend` в Discord
1. **Дизайн** - използвайте канал `#design` в Discord
1. **SEO оптимизация** - използвайте канал `#seo` в Discord
1. **Маркетинг и реклама** - използвайте канал `#marketing` в Discord
1. **Друго?** - свържете се с нас чрез нашата [контактна форма в сайта](https://places.xen.gg/contact) и ни кажете с какво друго искате да ни помогнете или ни пишете директно в канал `#general` в Discord

---

## Финансов принос

Като проект, управляван изцяло доброволно от общността, без голяма корпоративна подкрепа зад гърба си, приветстваме финансова помощ чрез [GitHub Sponsors](https://github.com/sponsors/placesbg) и [OpenCollective](https://opencollective.com/placesbg) страниците.

Предварително благодарим на всеки, който допринесе финансово за поддръжката и развитието на проекта! В изображението отдолу се съдържат аватарите на всички хора, които вече допринесоха.

<a href="https://opencollective.com/placesbg"><img src="https://opencollective.com/placesbg/contributors.svg?width=890" /></a>
