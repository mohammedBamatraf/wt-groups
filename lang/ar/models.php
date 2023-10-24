<?php

return [
    'admin' => [
        'label' => 'مدير',
        'labels' => 'المدراء',
        'name' => 'الاسم',
        'email' => 'البريد الالكتروني',
        'phone' => 'رقم الجوال',
        'password' => 'كلمة المرور',
    ],

    'widgets' => [
        'driver' => 'السائقون',
        'trips' => 'الرحلات',
        'vehicle' => 'المركبات المتاحة',
        'price' => 'السعر الاجمالي',
        'complain' => 'عدد الشكاوي',
        'average' => 'متوسط عدد الركاب',
        'num-of-cust' => 'عدد الركاب',
        'num-of-trip' => 'عدد الرحلات',
    ],
    'driver' => [
        'label' => 'سائق',
        'name' => 'الاسم',
        'phone' => 'الهاتف',
        'labels' => 'سائقون',
        'city' => 'المدينة',
        'username' => 'اسم المستخدم',
        'email' => 'الايميل',
        'about' => 'نبذه',
        'password' => 'كلمة السر',
        'verified' => 'تاريخ التحقق من الايميل',
        'unverified' => 'لم يتحقق',
    ],
    'customer' => [
        'label' => 'راكب',
        'name' => 'الاسم',
        'labels' => 'ركاب',
        'email' => 'الايميل',
        'password' => 'كلمة السر',
        'username' => 'اسم المستخدم',
        'city' => 'المدينة',
        'phone' => 'الهاتف',
        'verified' => 'تاريخ التحقق من الايميل',
        'unverified' => 'لم يتحقق',
        'about' => 'نبذه',
    ],
    'Favorite' => [
        'label' => 'تفضيلات الراكب',
        'labels' => ' تفضيلات الركاب',
        'driver' => 'اسم السائق',
        'customer' => 'اسم الراكب',
    ],

    'Complaint' => [
        'label' => 'الشكاوي',
        'trip-number' => 'رقم الرحلة',
        'complainer' => 'المشتكي',
        'defendant' => 'المشتكي عليه',
        'complainer-type' => 'نوع المشتكي',
        'defendant-type' => 'نوع المشتكي عليه',
        'description' => 'وصف المشكلة',
        'state' => 'الحالة',
        'custom_attribute' => [
            'driver' => 'سائق',
            'customer' => 'راكب',
        ],

    ],

    'Setting' => 'إعدادات',

    'trip' => [
        'label' => 'رحلات',
        'description' => 'الوصف',
        'from_city' => 'من المدينة',
        'to_city' => 'الى المدينة',
        'driver' => 'السائق',
        'vehicle' => 'المركبة',
        'price' => 'السعر',
        'available_seats' => 'المقاعد المتاحة',
        'trip_time' => 'وقت الرحلة',
        'arrival_time' => 'وقت الوصول',
        'trip_number' => 'رقم الرحلة',
        'trip_status' => 'حالة الرحلة',
    ],

    'role' => [
        'label' => 'ادوار',
        'name' => 'الاسم',
        'permissions_number' => 'عدد الصلاحيات',
    ],

    'state' => [
        'label' => 'محافظة',
        'labels' => 'المحافظات',
        'name' => 'الاسم',
    ],

    'vehicle_type' => [
        'label' => 'نوع المركبة',
        'name' => 'الاسم',

    ],

    'vehicle' => [
        'label' => 'المركبات',
        'license_number' => 'رقم التصريح',
        'plate_number' => 'رقم اللوحة',
        'driver' => 'السائق',
        'vehicle_type' => 'نوع المركبة',
    ],

    'booking' => [
        'price' => 'السعر',
        'customer' => 'الراكب',
        'label' => 'الحجز',
        'labels' => 'الحجوزات',
        'number_passenger' => 'عدد الركاب',
        'cust-cat' => 'فئة الراكب',
        'trip' => 'الرحلة',
        'from-city' => 'من مدينة',
        'to-city' => 'الى مدينة',
        'trip-number' => 'رقم الرحلة',
    ],

    'vehicle' => [
        'label' => 'المركبات',
        'license_number' => 'رقم التصريح',
        'plate_number' => 'رقم اللوحة',
        'driver' => 'السائق',
        'vehicle_type' => 'نوع المركبة',
        'brand' => 'الشركة',
        'image' => 'الشعار',
        'brand_model' => 'الموديل',
        'year' => 'تاريخ الاصدار',
    ],

    'city' => [
        'label' => 'المدينة',
        'labels' => 'المدن',
        'name' => 'اسم المدينة',
        'state' => 'اسم المحافظة',
    ],
    'brand' => [
        'label' => 'سيارة',
        'labels' => 'شركات السيارات',
        'name' => 'اسم الشركة',
        'image' => 'الشعار',
    ],
    'brand_model' => [
        'labels' => 'موديلات السيارات ',
        'label' => 'موديل',
        'name' => 'اسم الموديل',
        'passengers_number' => 'عدد المقاعد',
        'brand' => 'الشركة',
        'vehicleType' => 'نوع المركبة',
    ],

];
