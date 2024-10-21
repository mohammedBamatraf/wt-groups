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

    'accepted' => 'Le champ :attribute doit être accepté.',
    'accepted_if' => 'Le champ :attribute doit être accepté lorsque :other est :value.',
    'active_url' => 'Le champ :attribute doit être une URL valide.',
    'after' => 'Le champ :attribute doit être une date postérieure à :date.',
    'after_or_equal' => 'Le champ :attribute doit être une date postérieure ou égale à :date.',
    'alpha' => 'Le champ :attribute ne doit contenir que des lettres.',
    'alpha_dash' => 'Le champ :attribute ne doit contenir que des lettres, des chiffres, des tirets et des underscores.',
    'alpha_num' => 'Le champ :attribute ne doit contenir que des lettres et des chiffres.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'ascii' => 'Le champ :attribute ne doit contenir que des caractères alphanumériques simples et des symboles.',
    'before' => 'Le champ :attribute doit être une date antérieure à :date.',
    'before_or_equal' => 'Le champ :attribute doit être une date antérieure ou égale à :date.',
    'between' => [
        'array' => 'Le champ :attribute doit contenir entre :min et :max éléments.',
        'file' => 'Le champ :attribute doit avoir une taille entre :min et :max kilo-octets.',
        'numeric' => 'Le champ :attribute doit être compris entre :min et :max.',
        'string' => 'Le champ :attribute doit contenir entre :min et :max caractères.',
    ],
    'boolean' => 'Le champ :attribute doit être vrai ou faux.',
    'confirmed' => 'La confirmation du champ :attribute ne correspond pas.',
    'current_password' => 'Le mot de passe est incorrect.',
    'date' => 'Le champ :attribute doit être une date valide.',
    'date_equals' => 'Le champ :attribute doit être une date égale à :date.',
    'date_format' => 'Le champ :attribute doit correspondre au format :format.',
    'decimal' => 'Le champ :attribute doit comporter :decimal décimales.',
    'declined' => 'Le champ :attribute doit être refusé.',
    'declined_if' => 'Le champ :attribute doit être refusé lorsque :other est :value.',
    'different' => 'Le champ :attribute et :other doivent être différents.',
    'digits' => 'Le champ :attribute doit comporter :digits chiffres.',
    'digits_between' => 'Le champ :attribute doit comporter entre :min et :max chiffres.',
    'dimensions' => "Le champ :attribute a des dimensions d'image invalides.",
    'distinct' => 'Le champ :attribute contient une valeur en double.',
    'doesnt_end_with' => "'Le champ :attribute ne doit pas se terminer par l'un des éléments suivants : :values.'",
    'doesnt_start_with' => "'Le champ :attribute ne doit pas commencer par l'un des éléments suivants : :values.'",
    'email' => 'Le champ :attribute doit être une adresse e-mail valide.',
    'ends_with' => "'Le champ :attribute doit se terminer par l'un des éléments suivants : :values.'",
    'enum' => 'La valeur sélectionnée pour :attribute est invalide.',
    'exists' => 'La valeur sélectionnée pour :attribute est invalide.',
    'file' => 'Le champ :attribute doit être un fichier.',
    'filled' => 'Le champ :attribute doit avoir une valeur.',
    'gt' => [
        'array' => 'Le champ :attribute doit contenir plus de :value éléments.',
        'file' => 'Le champ :attribute doit être supérieur à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur à :value.',
        'string' => 'Le champ :attribute doit contenir plus de :value caractères.',
    ],
    'gte' => [
        'array' => 'Le champ :attribute doit contenir :value éléments ou plus.',
        'file' => 'Le champ :attribute doit être supérieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être supérieur ou égal à :value.',
        'string' => 'Le champ :attribute doit contenir :value caractères ou plus.',
    ],
    'image' => 'Le champ :attribute doit être une image.',
    'in' => 'La valeur sélectionnée pour :attribute est invalide.',
    'in_array' => 'Le champ :attribute doit exister dans :other.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'ip' => 'Le champ:attribute doit être une adresse IP valide.',
    'ipv4' => 'Le champ :attribute doit être une adresse IPv4 valide.',
    'ipv6' => 'Le champ :attribute doit être une adresse IPv6 valide.',
    'json' => 'Le champ :attribute doit être une chaîne JSON valide.',
    'lt' => [
        'array' => 'Le champ :attribute doit contenir moins de :value éléments.',
        'file' => 'Le champ :attribute doit être inférieur à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur à :value.',
        'string' => 'Le champ :attribute doit contenir moins de :value caractères.',
    ],
    'lte' => [
        'array' => 'Le champ :attribute doit contenir moins de :value éléments ou moins.',
        'file' => 'Le champ :attribute doit être inférieur ou égal à :value kilo-octets.',
        'numeric' => 'Le champ :attribute doit être inférieur ou égal à :value.',
        'string' => 'Le champ :attribute doit contenir :value caractères ou moins.',
    ],
    'max' => [
        'array' => 'Le champ :attribute ne doit pas contenir plus de :max éléments.',
        'file' => 'Le champ :attribute ne doit pas dépasser :max kilo-octets.',
        'numeric' => 'Le champ :attribute ne doit pas être supérieur à :max.',
        'string' => 'Le champ :attribute ne doit pas contenir plus de :max caractères.',
    ],
    'mimes' => 'Le champ :attribute doit être un fichier de type :values.',
    'mimetypes' => 'Le champ :attribute doit être un fichier de type :values.',
    'min' => [
        'array' => 'Le champ :attribute doit contenir au moins :min éléments.',
        'file' => "'Le champ :attribute doit avoir une taille d'au moins :min kilo-octets.'",
        'numeric' => 'Le champ :attribute doit être au moins :min.',
        'string' => 'Le champ :attribute doit contenir au moins :min caractères.',
    ],
    'multiple_of' => 'Le champ :attribute doit être un multiple de :value.',
    'not_in' => 'La valeur sélectionnée pour :attribute est invalide.',
    'not_regex' => 'Le format du champ :attribute est invalide.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    'password' => 'Le mot de passe est incorrect.',
    'present' => 'Le champ :attribute doit être présent.',
    'regex' => 'Le format du champ :attribute est invalide.',
    'required' => 'Le champ :attribute est obligatoire.',
    'required_if' => 'Le champ :attribute est obligatoire lorsque :other est :value.',
    'required_unless' => 'Le champ :attribute est obligatoire sauf si :other est dans :values.',
    'required_with' => 'Le champ :attribute est obligatoire lorsque :values est présent.',
    'required_with_all' => 'Le champ :attribute est obligatoire lorsque :values sont présents.',
    'required_without' => "'Le champ :attribute est obligatoire lorsque :values n'est pas présent.'",
    'required_without_all' => "Le champ :attribute est obligatoire lorsque aucun des :values n'est présent.",
    'same' => 'Le champ :attribute et :other doivent correspondre.',
    'size' => [
        'array' => 'Le champ :attribute doit contenir :size éléments.',
        'file' => 'Le champ :attribute doit avoir une taille de :size kilo-octets.',
        'numeric' => 'Le champ :attribute doit être :size.',
        'string' => 'Le champ :attribute doit contenir :size caractères.',
    ],
    'starts_with' => "Le champ :attribute doit commencer par l'un des éléments suivants : :values.",
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'timezone' => 'Le champ :attribute doit être un fuseau horaire valide.',
    'unique' => 'La valeur du champ :attribute est déjà utilisée.',
    'uploaded' => "Le champ :attribute n'a pas pu être téléchargé.",
    'url' => "Le format de l'URL du champ :attribute est invalide.",
    'uuid' => 'Le champ :attribute doit être un UUID valide.',

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
        'address' => 'Adresse',
        'age' => 'Âge',
        'amount' => 'Quantité',
        'area' => 'Zone',
        'available' => 'Disponible',
        'birthday' => 'Date de naissance',
        'body' => 'Corps',
        'city' => 'Ville',
        'content' => 'Contenu',
        'country' => 'Pays',
        'created_at' => 'Date de création',
        'creator' => 'Créateur',
        'current_password' => 'Mot de passe actuel',
        'date' => 'Date',
        'date_of_birth' => 'Date de naissance',
        'day' => 'Jour',
        'deleted_at' => 'Date de suppression',
        'description' => 'Description',
        'district' => 'District',
        'duration' => 'Durée',
        'email' => 'Email',
        'excerpt' => 'Extrait',
        'filter' => 'Filtrer',
        'first_name' => 'Prénom',
        'gender' => 'Genre',
        'group' => 'Groupe',
        'hour' => 'Heure',
        'image' => 'Image',
        'last_name' => 'Nom de famille',
        'lesson' => 'Leçon',
        'line_address_1' => 'Adresse ligne 1',
        'line_address_2' => 'Adresse ligne 2',
        'message' => 'Message',
        'middle_name' => 'Deuxième prénom',
        'minute' => 'Minute',
        'mobile' => 'Mobile',
        'month' => 'Mois',
        'name' => 'Nom',
        'national_code' => 'Code national',
        'number' => 'Numéro',
        'password' => 'Mot de passe',
        'password_confirmation' => 'Confirmation du mot de passe',
        'phone' => 'Téléphone',
        'photo' => 'Photo',
        'postal_code' => 'Code postal',
        'price' => 'Prix',
        'province' => 'Province',
        'recaptcha_response_field' => 'Champ de réponse Recaptcha',
        'remember' => 'Se souvenir',
        'restored_at' => 'Date de restauration',
        'result_text_under_image' => "Texte de résultat sous l'image",
        'role' => 'Rôle',
        'second' => 'Seconde',
        'sex' => 'Sexe',
        'short_text' => 'Texte court',
        'size' => 'Taille',
        'state' => 'État',
        'street' => 'Rue',
        'student' => 'Étudiant',
        'subject' => 'Sujet',
        'teacher' => 'Enseignant',
        'terms' => 'Termes',
        'test_description' => 'Description du test',
        'test_locale' => 'Langue du test',
        'test_name' => 'Nom du test',
        'text' => 'Texte',
        'time' => 'Temps',
        'title' => 'Titre',
        'updated_at' => 'Date de mise à jour',
        'username' => 'Nom d\'utilisateur',
        'year' => 'Année',
        'first_phone_number' => 'Numéro de téléphone principal',
        'city_id' => 'Ville',
        'second_phone_number' => 'Deuxième numéro de téléphone',
        'client_type' => 'Type de client',
        'back_image' => 'Image arrière',
        'front_image' => 'Image avant',
        'to_city_id' => 'Ville de destination',
        'from_city_id' => 'Ville de départ',
        'vehicle_id' => 'Véhicule',
        'available_seats' => 'Sièges disponibles',
        'trip_time' => 'Durée du trajet',
        'plate_number' => 'Numéro de plaque',
        'brand_model_id' => 'Modèle de voiture',
        'year' => 'Année',
        'car_pictures' => 'Photos de voiture',
        'filter.starts_before' => 'À partir de cette date',
        'filter.starts_after' => 'Jusqu\'à cette date',
        'filter.date' => 'Date',
        'filter.from_city' => 'De la ville',
        'filter.to_city' => 'Vers la ville',
        'adult' => 'Adulte',
        'child' => 'Enfant',
        'passengers' => 'Passagers',
        'passengers.*.is_adult' => 'Adulte',
        'passengers.*.name' => 'Nom',
        'link' => 'Lien',
        'category_id' => 'Catégorie',
        'language_id' => 'Langue',
        'social_type' => 'Type de réseau social',
        'is_favorite' => 'Favori',
        'group_id' => 'Groupe',
    ],

];
