<?php

declare(strict_types=1);

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Полето :attribute трябва да бъде прието.',
    'accepted_if' => 'Полето :attribute трябва да бъде прието когато :other е :value.',
    'active_url' => 'Полето :attribute трябва да е валиден URL адрес.',
    'after' => 'Полето :attribute трябва да е дата след :date.',
    'after_or_equal' => 'Полето :attribute трябва да е дата след или равна на :date.',
    'alpha' => 'Полето :attribute трябва да съдържа само букви.',
    'alpha_dash' => 'Полето :attribute трябва да съдържа само букви, цифри, тирета и долни черти.',
    'alpha_num' => 'Полето :attribute трябва да съдържа само букви и цифри.',
    'array' => 'Полето :attribute трябва да е масив.',
    'ascii' => 'Полето :attribute трябва да съдържа само ASCII символи.',
    'before' => 'Полето :attribute трябва да е дата преди :date.',
    'before_or_equal' => 'Полето :attribute трябва да е дата преди или равна на :date.',
    'between' => [
        'array' => 'Полето :attribute трябва да има между :min и :max елемента.',
        'file' => 'Полето :attribute трябва да е между :min и :max килобайта.',
        'numeric' => 'Полето :attribute трябва да е между :min и :max.',
        'string' => 'Полето :attribute трябва да е между :min и :max знака.',
    ],
    'boolean' => 'Полето :attribute трябва да е true или false.',
    'can' => 'Полето :attribute е невалидно.',
    'confirmed' => 'Полето :attribute не е потвърдено.',
    'current_password' => 'Паролата е грешна.',
    'date' => 'Полето :attribute не е валидна дата.',
    'date_equals' => 'Полето :attribute трябва да е дата равна на :date.',
    'date_format' => 'Полето :attribute не е във формат :format.',
    'decimal' => 'Полето :attribute трябва да е десетично число с :decimal места.',
    'declined' => 'Полето :attribute трябва да бъде отхвърлено.',
    'declined_if' => 'Полето :attribute трябва да бъде отхвърлено когато :other е :value.',
    'different' => 'Полетата :attribute и :other трябва да са различни.',
    'digits' => 'Полето :attribute трябва да е :digits цифри.',
    'digits_between' => 'Полето :attribute трябва да е между :min и :max цифри.',
    'dimensions' => 'Полето :attribute има невалидни размери на изображението.',
    'distinct' => 'Полето :attribute има дублираща се стойност.',
    'doesnt_end_with' => 'Полето :attribute трябва да завършва с една от следните стойности: :values.',
    'doesnt_start_with' => 'Полето :attribute трябва да започва с една от следните стойности: :values.',
    'email' => 'Полето :attribute трябва да е валиден имейл адрес.',
    'ends_with' => 'Полето :attribute трябва да завършва с една от следните стойности: :values.',
    'enum' => 'Полето :attribute е невалидно.',
    'exists' => 'Избраното поле :attribute е невалидно.',
    'file' => 'Полето :attribute трябва да е файл.',
    'filled' => 'Полето :attribute е задължително.',
    'gt' => [
        'array' => 'Полето :attribute трябва да има повече от :value елемента.',
        'file' => 'Полето :attribute трябва да е повече от :value килобайта.',
        'numeric' => 'Полето :attribute трябва да е повече от :value.',
        'string' => 'Полето :attribute трябва да е повече от :value знака.',
    ],
    'gte' => [
        'array' => 'Полето :attribute трябва да има :value или повече елемента.',
        'file' => 'Полето :attribute трябва да е :value или повече килобайта.',
        'numeric' => 'Полето :attribute трябва да е :value или повече.',
        'string' => 'Полето :attribute трябва да е :value или повече знака.',
    ],
    'image' => 'Полето :attribute трябва да е изображение.',
    'in' => 'Избраното поле :attribute е невалидно.',
    'in_array' => 'Полето :attribute не съществува в :other.',
    'integer' => 'Полето :attribute трябва да е цяло число.',
    'ip' => 'Полето :attribute трябва да е валиден IP адрес.',
    'ipv4' => 'Полето :attribute трябва да е валиден IPv4 адрес.',
    'ipv6' => 'Полето :attribute трябва да е валиден IPv6 адрес.',
    'json' => 'Полето :attribute трябва да е валиден JSON низ.',
    'lowercase' => 'Полето :attribute трябва да е низ с малки букви.',
    'lt' => [
        'array' => 'Полето :attribute трябва да има по-малко от :value елемента.',
        'file' => 'Полето :attribute трябва да е по-малко от :value килобайта.',
        'numeric' => 'Полето :attribute трябва да е по-малко от :value.',
        'string' => 'Полето :attribute трябва да е по-малко от :value знака.',
    ],
    'lte' => [
        'array' => 'Полето :attribute трябва да има :value или по-малко елемента.',
        'file' => 'Полето :attribute трябва да е :value или по-малко килобайта.',
        'numeric' => 'Полето :attribute трябва да е :value или по-малко.',
        'string' => 'Полето :attribute трябва да е :value или по-малко знака.',
    ],
    'mac_address' => 'Полето :attribute трябва да е валиден MAC адрес.',
    'max' => [
        'array' => 'Полето :attribute трябва да има най-много :max елемента.',
        'file' => 'Полето :attribute трябва да е най-много :max килобайта.',
        'numeric' => 'Полето :attribute трябва да е най-много :max.',
        'string' => 'Полето :attribute трябва да е най-много :max знака.',
    ],
    'max_digits' => 'Полето :attribute трябва да има най-много :max цифри.',
    'mimes' => 'Полето :attribute трябва да е файл от тип: :values.',
    'mimetypes' => 'Полето :attribute трябва да е файл от тип: :values.',
    'min' => [
        'array' => 'Полето :attribute трябва да има най-малко :min елемента.',
        'file' => 'Полето :attribute трябва да е най-малко :min килобайта.',
        'numeric' => 'Полето :attribute трябва да е най-малко :min.',
        'string' => 'Полето :attribute трябва да е най-малко :min знака.',
    ],
    'min_digits' => 'Полето :attribute трябва да има най-малко :min цифри.',
    'missing' => 'Полето :attribute трябва да липсва.',
    'missing_if' => 'Полето :attribute трябва да липсва когато :other е :value.',
    'missing_unless' => 'Полето :attribute трябва да липсва освен ако :other не е :values.',
    'missing_with' => 'Полето :attribute трябва да липсва когато :values са налични.',
    'missing_with_all' => 'Полето :attribute трябва да липсва когато :values са налични.',
    'multiple_of' => 'Полето :attribute трябва да е кратно на :value',
    'not_in' => 'Избраното поле :attribute е невалидно.',
    'not_regex' => 'Полето :attribute е в невалиден формат.',
    'numeric' => 'Полето :attribute трябва да е число.',
    'password' => [
        'letters' => 'Полето :attribute трябва да съдържа поне една буква.',
        'mixed' => 'Полето :attribute трябва да съдържа поне една главна и една малка буква.',
        'numbers' => 'Полето :attribute трябва да съдържа поне една цифра.',
        'symbols' => 'Полето :attribute трябва да съдържа поне един символ.',
        'uncompromised' => 'Тази парола е компрометирана.',
    ],
    'phone' => 'Полето :attribute трябва да е валиден телефонен номер.',
    'present' => 'Полето :attribute трябва да е налично.',
    'prohibited' => 'Полето :attribute е забранено.',
    'prohibited_if' => 'Полето :attribute е забранено когато :other е :value.',
    'prohibited_unless' => 'Полето :attribute е забранено освен ако :other не е :values.',
    'prohibits' => 'Полето :attribute забранява присъствието на :other.',
    'regex' => 'Полето :attribute е в невалиден формат.',
    'required' => 'Полето :attribute е задължително.',
    'required_array_keys' => 'Полето :attribute трябва да има ключове :keys.',
    'required_if' => 'Полето :attribute е задължително когато :other е :value.',
    'required_if_accepted' => 'Полето :attribute е задължително когато :other е прието.',
    'required_unless' => 'Полето :attribute е задължително освен ако :other не е :values.',
    'required_with' => 'Полето :attribute е задължително когато :values са налични.',
    'required_with_all' => 'Полето :attribute е задължително когато :values са налични.',
    'required_without' => 'Полето :attribute е задължително когато :values не са налични.',
    'required_without_all' => 'Полето :attribute е задължително когато нито едно от :values не е налично.',
    'same' => 'Полето :attribute и :other трябва да съвпадат.',
    'size' => [
        'array' => 'Полето :attribute трябва да съдържа :size елемента.',
        'file' => 'Полето :attribute трябва да е :size килобайта.',
        'numeric' => 'Полето :attribute трябва да е :size.',
        'string' => 'Полето :attribute трябва да е :size знака.',
    ],
    'starts_with' => 'Полето :attribute трябва да започва с едно от следните: :values',
    'string' => 'Полето :attribute трябва да е низ от символи.',
    'timezone' => 'Полето :attribute трябва да е валидна времева зона.',
    'unique' => 'Полето :attribute вече съществува.',
    'uploaded' => 'Полето :attribute не може да бъде качено.',
    'uppercase' => 'Полето :attribute трябва да съдържа само главни букви.',
    'url' => 'Полето :attribute трябва да бъде валиден URL адрес.',
    'ulid' => 'Полето :attribute трябва да бъде валиден ULID.',
    'uuid' => 'Полето :attribute трябва да бъде валиден UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'title' => [
            'required' => 'Моля, въведете заглавие.',
        ],
    ],

];
