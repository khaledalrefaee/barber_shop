<?php

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

   'accepted' => 'يجب قبول :attribute.',
'accepted_if' => 'يجب قبول :attribute عندما :other يكون :value.',
'active_url' => ':attribute ليس عنوان URL صحيح.',
'after' => ':attribute يجب أن يكون تاريخًا بعد :date.',
'after_or_equal' => ':attribute يجب أن يكون تاريخًا بعد أو يساوي :date.',
'alpha' => ':attribute يجب أن يحتوي على أحرف فقط.',
'alpha_dash' => ':attribute يجب أن يحتوي على أحرف وأرقام وشرطات وشرطات سفلية فقط.',
'alpha_num' => ':attribute يجب أن يحتوي على أحرف وأرقام فقط.',
'array' => ':attribute يجب أن يكون مصفوفة.',
'ascii' => ':attribute يجب أن يحتوي على أحرف فقط من الأبجدية وأحرف فقط ورموز.',
'before' => ':attribute يجب أن يكون تاريخًا قبل :date.',
'before_or_equal' => ':attribute يجب أن يكون تاريخًا قبل أو يساوي :date.',
'between' => [
    'array' => ':attribute يجب أن يحتوي على :min إلى :max عنصرًا.',
    'file' => ':attribute يجب أن يكون بين :min و :max كيلوبايت.',
    'numeric' => ':attribute يجب أن يكون بين :min و :max.',
    'string' => ':attribute يجب أن يكون بين :min و :max حرفًا.',
],
'boolean' => ':attribute يجب أن يكون صحيحًا أو خاطئًا.',
'confirmed' => 'تأكيد :attribute غير متطابق.',
'current_password' => 'كلمة المرور غير صحيحة.',
'date' => ':attribute ليس تاريخًا صحيحًا.',
'date_equals' => ':attribute يجب أن يكون تاريخًا مساويًا ل :date.',
'date_format' => ':attribute لا يتطابق مع التنسيق :format.',
'decimal' => ':attribute يجب أن يحتوي على :decimal أماكن عشرية.',
'declined' => ':attribute يجب رفضه.',
'declined_if' => ':attribute يجب رفضه عندما :other يكون :value.',
'different' => ':attribute و :other يجب أن يكونا مختلفين.',
'digits' => ':attribute يجب أن يحتوي على :digits أرقام.',
'digits_between' => ':attribute يجب أن يحتوي على :min إلى :max أرقام.',
'dimensions' => ':attribute له أبعاد صورة غير صحيحة.',
'distinct' => 'حقل :attribute لديه قيمة مكررة.',
'doesnt_end_with' => ':attribute قد لا ينتهي بأحد القيم التالية: :values.',
'doesnt_start_with' => ':attribute قد لا يبدأ بأحد القيم التالية: :values.',
'email' => ':attribute يجب أن يكون عنوان بريد إلكتروني صحيح.',
'ends_with' => ':attribute يجب أن ينتهي بأحد القيم التالية: :values.',
'enum' => ':attribute المحدد غير صالح.',
'exists' => ':attribute المحدد غير صالح.',
'file' => ':attribute يجب أن يكون ملفًا.',
'filled' => 'حقل :attribute يجب أن يحتوي على قيمة.',


'gt' => [
    'array' => ':attribute يجب أن يحتوي على أكثر من :value عنصر.',
    'file' => ':attribute يجب أن يكون أكبر من :value kilobytes.',
    'numeric' => ':attribute يجب أن يكون أكبر من :value.',
    'string' => ':attribute يجب أن يكون أكبر من :value حرفًا.',

    ],
    'gte' => [
        'array' => ':attribute يجب أن يحتوي على :value عنصر أو أكثر.',
        'file' => ':attribute يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => ':attribute يجب أن يكون أكبر من أو يساوي :value.',
        'string' => ':attribute يجب أن يكون أكبر من أو يساوي :value حرفًا.',
        ],
        'image' => ':attribute يجب أن يكون صورة.',
        'in' => ':attribute المحدد غير صالح.',
        'in_array' => 'حقل :attribute لا يوجد في :other.',
        'integer' => ':attribute يجب أن يكون عددًا صحيحًا.',
        'ip' => ':attribute يجب أن يكون عنوان IP صحيحًا.',
        'ipv4' => ':attribute يجب أن يكون عنوان IPv4 صحيحًا.',
        'ipv6' => ':attribute يجب أن يكون عنوان IPv6 صحيحًا.',
        'json' => ':attribute يجب أن يكون نص JSON صالحًا.',
        'lowercase' => ':attribute يجب أن يكون في الحروف الصغيرة.',
        'lt' => [
        'array' => ':attribute يجب أن يحتوي على أقل من :value عنصر.',
        'file' => ':attribute يجب أن يكون أقل من :value كيلوبايت.',
        'numeric' => ':attribute يجب أن يكون أقل من :value.',
        'string' => ':attribute يجب أن يكون أقل من :value حرفًا.',
        ],
        'lte' => [
        'array' => ':attribute يجب أن لا يحتوي على أكثر من :value عنصر.',
        'file' => ':attribute يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
        'numeric' => ':attribute يجب أن يكون أقل من أو يساوي :value.',
        'string' => ':attribute يجب أن يكون أقل من أو يساوي :value حرفًا.',
        ],
        'mac_address' => ':attribute يجب أن يكون عنوان MAC صالحًا.',
        'max' => [
        'array' => ':attribute يجب أن لا يحتوي على أكثر من :max عنصر.',
        'file' => ':attribute يجب أن لا يكون أكبر من :max كيلوبايت.',
        'numeric' => ':attribute يجب أن لا يكون أكبر من :max.',
        'string' => ':attribute يجب أن لا يكون أكبر من :max حرفًا.',
        ],
        'max_digits' => ':attribute يجب ألا يحتوي على أكثر من :max أرقام.',
        'mimes' => ':attribute يجب أن يكون ملفًا من نوع: :values.',
        'mimetypes' => ':attribute يجب أن يكون ملفًا من نوع: :values.',
        'min' => [
            'array' => ':attribute يجب أن يحتوي على ما لا يقل عن :min عنصر.',
            'file' => ':attribute يجب أن يكون على الأقل :min كيلوبايت.',
            'numeric' => ':attribute يجب أن يكون على الأقل :min.',
            'string' => ':attribute يجب أن يكون على الأقل :min حرفًا.',
        ],
        
        'max_digits' => ':attribute يجب ألا يحتوي على أكثر من :max أرقام.',
        'mimes' => ':attribute يجب أن يكون ملفًا من نوع: :values.',
        'mimetypes' => ':attribute يجب أن يكون ملفًا من نوع: :values.',
        'min' => [
        'array' => ':attribute يجب أن يحتوي على ما لا يقل عن :min عنصر.',
        'file' => ':attribute يجب أن يكون على الأقل :min كيلوبايت.',
        'numeric' => ':attribute يجب أن يكون على الأقل :min.',
        'string' => ':attribute يجب أن يكون على الأقل :min حرفًا.',
        ],

    'min_digits' => ':attribute يجب أن يحتوي على على الأقل :min أرقام.',
'missing' => 'حقل :attribute يجب أن يكون مفقودًا.',
'missing_if' => 'حقل :attribute يجب أن يكون مفقودًا عندما :other يكون :value.',
'missing_unless' => 'حقل :attribute يجب أن يكون مفقودًا ما لم :other يكون :value.',
'missing_with' => 'حقل :attribute يجب أن يكون مفقودًا عندما يكون :values موجودًا.',
'missing_with_all' => 'حقل :attribute يجب أن يكون مفقودًا عندما تكون :values موجودةً.',
'multiple_of' => ':attribute يجب أن يكون مضاعفًا ل :value.',
'not_in' => ':attribute المحدد غير صالح.',
'not_regex' => 'تنسيق :attribute غير صالح.',
'numeric' => ':attribute يجب أن يكون عددًا.',
'password' => [
'letters' => ':attribute يجب أن يحتوي على حرف واحد على الأقل.',
'mixed' => ':attribute يجب أن يحتوي على حرف كبير وحرف صغير ورقم ورمز واحد على الأقل.',
'numbers' => ':attribute يجب أن يحتوي على رقم واحد على الأقل.',
'symbols' => ':attribute يجب أن يحتوي على رمز واحد على الأقل.',
'uncompromised' => 'تم ظهور :attribute المعطى في تسريب بيانات. يرجى اختيار :attribute مختلفًا.',
],
'present' => 'حقل :attribute يجب أن يكون موجودًا.',
'prohibited' => 'حقل :attribute ممنوع.',
'prohibited_if' => 'حقل :attribute ممنوع عندما :other يكون :value.',
'prohibited_unless' => 'حقل :attribute ممنوع ما لم :other يكون في :values.',
'prohibits' => 'حقل :attribute يمنع :other من التواجد.',
'regex' => 'تنسيق :attribute غير صالح.',
'required' => 'حقل :attribute مطلوب.',
'required_array_keys' => 'حقل :attribute يجب أن يحتوي على مفاتيح لـ:values.',
'required_if' => 'حقل :attribute مطلوب عندما :other يكون :value.',
'required_if_accepted' => 'حقل :attribute مطلوب عندما يتم قبول :other.',
'required_unless' => 'حقل :attribute مطلوب ما لم :other يكون في :values.',
'required_with' => 'حقل :attribute مطلوب عندما تكون :values موجودة.',
'required_with_all' => 'حقل :attribute مطلوب عندما تكون :values موجودة جميعًا.',
'required_without' => 'حقل :attribute مطلوب عندما تكون :values غير موجودة.',
'required_without_all' => 'حقل :attribute مطلوب عندما لا تكون :values موجودة جميعًا.',
'same' => ':attribute و :other يجب أن يتطابقا.',
'size' => [
'array' => ':attribute يجب أن يحتوي على :size عنصرًا.',
'file' => ':attribute يجب أن يكون :size كيلوبايت.',
'numeric' => ':attribute يجب أن يكون :size.',
'string' => ':attribute يجب أن يكون :size حرفًا.',
],
'starts_with' => ':attribute يجب أن يبدأ بأحد القيم التالية: :values.',
'string' => ':attribute يجب أن يكون نصًا.',
'timezone' => ':attribute يجب أن يكون منطقة زمنية صالحة.',
'unique' => ':attribute تم اختياره بالفعل.',
'uploaded' => 'فشل في تحميل :attribute.',
'uppercase' => ':attribute يجب أن يكون في حالة كبيرة.',
'url' => ':attribute يجب أن يكون عنوان URL صالح.',
'ulid' => ':attribute يجب أن يكون ULID صالحًا.',
'uuid' => ':attribute يجب أن يكون UUID صالحًا.',

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

    'attributes' => [],

];
